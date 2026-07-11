<?php
declare(strict_types=1);

/*
 * BookLaxDriver booking endpoint.
 * Paste the Slack Incoming Webhook URL between the quotes on Hostinger only.
 * Never commit a real webhook URL to a public GitHub repository.
 */
$SLACK_WEBHOOK_URL = '';
$FALLBACK_EMAIL = 'booklaxdriver@gmail.com';
$SITE_NAME = 'BookLaxDriver';

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');
header('Cache-Control: no-store, max-age=0');

function respond(int $status, array $payload) {
    http_response_code($status);
    echo json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    exit;
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    header('Allow: POST');
    respond(405, ['ok' => false, 'status' => 'method_not_allowed', 'message' => 'POST requests only.']);
}

$contentLength = (int)($_SERVER['CONTENT_LENGTH'] ?? 0);
if ($contentLength > 65536) {
    respond(413, ['ok' => false, 'status' => 'payload_too_large', 'message' => 'The request is too large.']);
}

$contentType = strtolower((string)($_SERVER['CONTENT_TYPE'] ?? ''));
$input = [];
if (strpos($contentType, 'application/json') !== false) {
    $raw = file_get_contents('php://input');
    try {
        $decoded = json_decode($raw ?: '', true, 32);
        if (json_last_error() !== JSON_ERROR_NONE || !is_array($decoded)) {
            respond(400, ['ok' => false, 'status' => 'invalid_json', 'message' => 'Invalid JSON request.']);
        }
        $input = $decoded;
    } catch (Throwable $e) {
        respond(400, ['ok' => false, 'status' => 'invalid_json', 'message' => 'Invalid JSON request.']);
    }
} else {
    $input = $_POST;
}

if (!is_array($input)) {
    $input = [];
}

function clean($value, int $maxLength = 255): string {
    if (is_array($value) || is_object($value)) {
        return '';
    }
    $text = trim((string)$value);
    $text = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/u', '', $text) ?? '';
    return function_exists('mb_substr') ? mb_substr($text, 0, $maxLength, 'UTF-8') : substr($text, 0, $maxLength);
}

function field(array $input, string $key, int $maxLength = 255): string {
    return clean($input[$key] ?? '', $maxLength);
}

if (field($input, 'website', 200) !== '') {
    respond(200, ['ok' => true, 'status' => 'accepted', 'booking_id' => 'BLD-' . gmdate('Ymd-His')]);
}

$clientIp = (string)($_SERVER['REMOTE_ADDR'] ?? 'unknown');
$rateFile = rtrim(sys_get_temp_dir(), DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . 'bld_' . hash('sha256', $clientIp) . '.rate';
$now = time();
$last = is_file($rateFile) ? (int)@file_get_contents($rateFile) : 0;
if ($last > 0 && ($now - $last) < 8) {
    respond(429, ['ok' => false, 'status' => 'rate_limited', 'message' => 'Please wait a few seconds and try again.']);
}
@file_put_contents($rateFile, (string)$now, LOCK_EX);

$data = [
    'name' => field($input, 'name', 100),
    'phone' => field($input, 'phone', 40),
    'email' => field($input, 'email', 160),
    'service_type' => field($input, 'service_type', 80),
    'pickup_date' => field($input, 'pickup_date', 10),
    'pickup_time' => field($input, 'pickup_time', 8),
    'pickup_location' => field($input, 'pickup_location', 220),
    'dropoff_location' => field($input, 'dropoff_location', 220),
    'flight_number' => field($input, 'flight_number', 30),
    'passengers' => field($input, 'passengers', 3),
    'luggage' => field($input, 'luggage', 3),
    'vehicle_preference' => field($input, 'vehicle_preference', 80),
    'notes' => field($input, 'notes', 1500),
    'consent' => field($input, 'consent', 10),
];

$required = ['name', 'phone', 'email', 'pickup_date', 'pickup_time', 'pickup_location', 'dropoff_location', 'passengers', 'consent'];
$missing = [];
foreach ($required as $key) {
    if ($data[$key] === '') {
        $missing[] = $key;
    }
}
if ($missing !== []) {
    respond(422, ['ok' => false, 'status' => 'validation_error', 'message' => 'Please complete all required fields.', 'fields' => $missing]);
}

if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    respond(422, ['ok' => false, 'status' => 'validation_error', 'message' => 'Please enter a valid email address.', 'fields' => ['email']]);
}
if (!preg_match('/^[0-9+()\-\.\s]{7,40}$/', $data['phone'])) {
    respond(422, ['ok' => false, 'status' => 'validation_error', 'message' => 'Please enter a valid phone number.', 'fields' => ['phone']]);
}
if (!in_array(strtolower($data['consent']), ['yes', 'on', '1', 'true'], true)) {
    respond(422, ['ok' => false, 'status' => 'validation_error', 'message' => 'Contact consent is required.', 'fields' => ['consent']]);
}

$passengers = filter_var($data['passengers'], FILTER_VALIDATE_INT, ['options' => ['min_range' => 1, 'max_range' => 50]]);
$luggageText = $data['luggage'] === '' ? '0' : $data['luggage'];
$luggage = filter_var($luggageText, FILTER_VALIDATE_INT, ['options' => ['min_range' => 0, 'max_range' => 60]]);
if ($passengers === false || $luggage === false) {
    respond(422, ['ok' => false, 'status' => 'validation_error', 'message' => 'Passenger or luggage count is invalid.', 'fields' => ['passengers', 'luggage']]);
}

$dateTime = DateTimeImmutable::createFromFormat('!Y-m-d H:i', $data['pickup_date'] . ' ' . substr($data['pickup_time'], 0, 5));
$errors = DateTimeImmutable::getLastErrors();
if (!$dateTime || ($errors !== false && ($errors['warning_count'] > 0 || $errors['error_count'] > 0))) {
    respond(422, ['ok' => false, 'status' => 'validation_error', 'message' => 'Pickup date or time is invalid.', 'fields' => ['pickup_date', 'pickup_time']]);
}
$today = new DateTimeImmutable('today');
$latest = $today->modify('+2 years');
if ($dateTime < $today || $dateTime > $latest) {
    respond(422, ['ok' => false, 'status' => 'validation_error', 'message' => 'Pickup date must be between today and two years from now.', 'fields' => ['pickup_date']]);
}

$data['passengers'] = (string)$passengers;
$data['luggage'] = (string)$luggage;
$bookingId = 'BLD-' . gmdate('Ymd-His') . '-' . strtoupper(substr(bin2hex(random_bytes(3)), 0, 6));
$submittedAt = gmdate('Y-m-d H:i:s') . ' UTC';

$lines = [
    "New {$SITE_NAME} quote request",
    "Reference: {$bookingId}",
    "Submitted: {$submittedAt}",
    "Name: {$data['name']}",
    "Phone: {$data['phone']}",
    "Email: {$data['email']}",
    "Service: " . ($data['service_type'] ?: 'Not specified'),
    "Pickup: {$data['pickup_date']} {$data['pickup_time']}",
    "From: {$data['pickup_location']}",
    "To: {$data['dropoff_location']}",
    "Flight: " . ($data['flight_number'] ?: 'N/A'),
    "Passengers: {$data['passengers']}",
    "Luggage: {$data['luggage']}",
    "Vehicle: " . ($data['vehicle_preference'] ?: 'No preference'),
    "Notes: " . ($data['notes'] ?: 'N/A'),
    "Consent: Yes",
];
$messageText = implode("\n", $lines);

function sendSlack(string $url, string $text, string $bookingId): array {
    if ($url === '') {
        return ['attempted' => false, 'sent' => false, 'reason' => 'not_configured'];
    }
    if (!preg_match('#^https://hooks\.slack\.com/services/[A-Za-z0-9/_-]+$#', $url)) {
        return ['attempted' => false, 'sent' => false, 'reason' => 'invalid_configuration'];
    }
    $payload = json_encode([
        'text' => "New BookLaxDriver quote request: {$bookingId}",
        'blocks' => [
            ['type' => 'header', 'text' => ['type' => 'plain_text', 'text' => 'New BookLaxDriver Quote Request']],
            ['type' => 'section', 'text' => ['type' => 'mrkdwn', 'text' => "```{$text}```"]],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

    if ($payload === false) {
        return ['attempted' => true, 'sent' => false, 'reason' => 'encoding_failed'];
    }

    $httpCode = 0;
    $body = '';
    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $payload,
            CURLOPT_HTTPHEADER => ['Content-Type: application/json; charset=utf-8'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CONNECTTIMEOUT => 5,
            CURLOPT_TIMEOUT => 10,
        ]);
        $body = (string)curl_exec($ch);
        $httpCode = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
    } else {
        $context = stream_context_create(['http' => [
            'method' => 'POST',
            'header' => "Content-Type: application/json; charset=utf-8\r\n",
            'content' => $payload,
            'timeout' => 10,
            'ignore_errors' => true,
        ]]);
        $body = (string)@file_get_contents($url, false, $context);
        if (isset($http_response_header[0]) && preg_match('/\s(\d{3})\s/', $http_response_header[0], $m)) {
            $httpCode = (int)$m[1];
        }
    }
    return ['attempted' => true, 'sent' => $httpCode >= 200 && $httpCode < 300 && trim($body) === 'ok', 'reason' => "http_{$httpCode}"];
}

function sendFallbackEmail(string $to, array $data, string $subject, string $body): bool {
    if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    $safeReplyTo = str_replace(["\r", "\n"], '', $data['email']);
    $headers = [
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
        'From: BookLaxDriver Website <no-reply@booklaxdriver.com>',
        "Reply-To: {$safeReplyTo}",
        'X-Mailer: PHP/' . PHP_VERSION,
    ];
    return @mail($to, $subject, $body, implode("\r\n", $headers));
}

$slack = sendSlack($SLACK_WEBHOOK_URL, $messageText, $bookingId);
$emailSent = false;
if (!$slack['sent']) {
    $emailSent = sendFallbackEmail($FALLBACK_EMAIL, $data, "[{$bookingId}] New BookLaxDriver quote request", $messageText);
}

if ($slack['sent']) {
    respond(200, [
        'ok' => true,
        'status' => 'delivered',
        'notification' => 'slack',
        'booking_id' => $bookingId,
        'message' => 'Your quote request was received.',
        'summary' => [
            'pickup' => $data['pickup_location'],
            'dropoff' => $data['dropoff_location'],
            'date_time' => $data['pickup_date'] . ' ' . $data['pickup_time'],
            'passengers' => $data['passengers'],
        ],
    ]);
}

if ($emailSent) {
    respond(200, [
        'ok' => true,
        'status' => 'fallback',
        'notification' => 'email',
        'booking_id' => $bookingId,
        'message' => 'Your quote request was received through the email fallback.',
        'summary' => [
            'pickup' => $data['pickup_location'],
            'dropoff' => $data['dropoff_location'],
            'date_time' => $data['pickup_date'] . ' ' . $data['pickup_time'],
            'passengers' => $data['passengers'],
        ],
    ]);
}

respond(503, [
    'ok' => false,
    'status' => $slack['reason'] === 'not_configured' ? 'fallback_unavailable' : 'delivery_failed',
    'message' => 'The online notification could not be delivered. Please use the email option shown on the page.',
]);
