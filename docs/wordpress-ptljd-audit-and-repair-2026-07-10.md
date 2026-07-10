# BookLaxDriver WordPress PTLJD Audit And Repair - 2026-07-10

## Correct Site

Use only:

- `https://booklaxdriver-ptljd.wordpress.com/`

Do not use:

- `https://booklaxdriver-itxey.wordpress.com/`

## Public Check Result

The correct WordPress site is publicly reachable and is not showing Coming Soon.

Homepage observed:

- Site title: `BookLaxDriver`
- Homepage hero: `Los Angeles Begins With a Private Arrival`
- WhatsApp quote buttons point to `wa.me/17028822810`
- Booking/payment safety language is present: customer sends details, approves quote, receives secure payment link, and card numbers are not requested through WhatsApp or the website form.

## Must-Fix Items Found

### 1. Contact Page Has Placeholder Phone

Current public contact page shows:

- `(123) 456-7890`

Repair:

- Replace with `WhatsApp / Phone: (702) 882-2810`
- Add button/link: `https://wa.me/17028822810`

Recommended replacement block:

```text
Phone / WhatsApp
(702) 882-2810

Fastest booking support is through WhatsApp. Send your date, time, flight or pickup address, destination, passenger count, luggage count, and preferred vehicle.
```

### 2. Contact Page Has Wrong Map / Location Signal

Current public contact page has a Google link labeled:

- `San Francisco, CA, United States`

Repair:

- Replace location signal with `Los Angeles, California, USA`
- If a map block is required, use Los Angeles / LAX area, not San Francisco.

Recommended replacement:

```text
Service Area
Los Angeles, California
LAX airport pickup and drop-off, hotels, business visits, real estate tours, private LA routes, and Southern California transfers by request.
```

### 3. About Page Has Placeholder Team Names / Roles

Current public About page shows generic/fake team-style entries:

- Aarav Sharma - CEO
- Mateo García - CTO
- Zuri Ndlovu - Engineer
- Leila Haddad - Designer

Repair:

- Remove the team/person cards unless these are real approved identities.
- Replace with service standards.

Recommended replacement section:

```text
Our Service Standards

BookLaxDriver is built for travelers who need reliable private transportation in Los Angeles. We focus on punctual pickup planning, clear communication, clean vehicles, luggage-aware routing, and discreet service for airport arrivals, business visits, family travel, and VIP guests.

What we prioritize:
- Clear route and timing confirmation before the ride
- Vehicle matching based on passengers and luggage
- Professional communication before pickup
- Secure payment link after quote approval
- Final booking confirmation only after payment or deposit is received
```

### 4. Homepage Rate Section Contains Internal-Wording Leak

Current homepage says:

- `Starting rates after the requested $10 increase.`

Repair:

- Remove `after the requested $10 increase`.

Recommended replacement:

```text
Popular LAX Private Transfer Rates

Starting rates are shown for quick planning. Final price depends on vehicle, pickup time, passengers, luggage, waiting, parking, tolls, and special requests.
```

### 5. Comments Are Visible On Multiple Pages

Services/Fleet/About/Contact pages show comment UI such as:

- `Loading Comments...`
- `Write a Comment...`

Repair:

- Disable comments on all business pages.
- Remove comment blocks from Home, Book a Ride, Services, Fleet, About, Contact.

### 6. Footer Shows WordPress.com Free-Site Branding

Footer contains WordPress.com platform links and branding.

Repair options:

- If free plan: may not be removable.
- If paid plan/theme allows: hide or customize footer.
- At minimum, make sure conversion CTA appears above footer so users do not get distracted.

### 7. Domain Is Not Bound

Current public site is still:

- `booklaxdriver-ptljd.wordpress.com`

Repair:

- Connect `booklaxdriver.com`.
- Confirm HTTPS works for `https://booklaxdriver.com` and `https://www.booklaxdriver.com`.

## Priority Repair Order

1. Fix Contact page phone from `(123) 456-7890` to `(702) 882-2810`.
2. Fix Contact page map/location from San Francisco to Los Angeles / LAX.
3. Remove fake About team names and replace with service standards.
4. Remove homepage phrase `after the requested $10 increase`.
5. Disable comments on all pages.
6. Connect `booklaxdriver.com`.
7. Run mobile WhatsApp CTA test after launch.

## Current Limitation

No WordPress.com write tool is exposed in this session, so the live WordPress pages cannot be edited directly from the agent at this moment. The repair copy above is ready to paste as soon as WordPress.com editing is available.
