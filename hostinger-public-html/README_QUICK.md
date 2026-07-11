# BookLaxDriver Hostinger PHP Website

A small mobile-first booking website for direct upload to Hostinger `public_html`.

## Architecture

`Namecheap DNS -> Hostinger public_html -> submit-booking.php -> Slack Incoming Webhook -> email fallback`

GitHub is source backup only. No npm, Node.js, database, build process, or command line is required for production deployment.

## Files

- `index.html` — complete responsive website with inline CSS and JavaScript.
- `submit-booking.php` — validates JSON or form requests, sends Slack notification, then attempts email fallback.
- `.htaccess` — HTTPS redirect, security headers, directory protection.
- `robots.txt` — crawler rules.
- `sitemap.xml` — single-page sitemap.
- `PHONE_DEPLOY.md` — mobile Hostinger deployment instructions.

## Slack setup

Edit only the production copy on Hostinger:

```php
$SLACK_WEBHOOK_URL = '';
```

Paste the Incoming Webhook URL between the quotes. Do not commit the real value to GitHub.

## Booking behavior

The form sends `multipart/form-data` to `/submit-booking.php`. The endpoint also accepts `application/json`.

Required fields: name, phone, email, pickup date, pickup time, pickup location, drop-off location, passengers, and contact consent.

Delivery states:

- `delivered` — Slack accepted the notification.
- `fallback` — Slack was unavailable and PHP mail accepted the email fallback.
- `fallback_unavailable` or `delivery_failed` — front end displays a prefilled `mailto:` fallback.

Submitting the form is a quote request only. Availability, final price, terms, payment or deposit, driver assignment, and final confirmation must be completed separately in writing.
