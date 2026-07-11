# BookLaxDriver Rollback Plan

Status: **prepared — not executed**

Last audit update: 2026-07-11T00:27:57Z

## Trigger conditions

Rollback the most recent reversible change if any of these occur after domain mapping:

- Apex or `www` fails while the previous target was working.
- HTTPS presents a certificate or hostname error.
- Mail delivery or required verification records break.
- WordPress.com displays the wrong site, a private site, or an incomplete customer path.
- Booking, WhatsApp, email, navigation, or mobile acceptance checks regress.

## Required pre-change evidence

Before the first DNS write, capture:

1. Nameservers.
2. Complete DNS record set and TTL values.
3. URL forwarding.
4. Current hosting destination.
5. Current SSL/certificate dependency.
6. WordPress.com domain-mapping targets.
7. GitHub Pages/Vercel custom-domain state.
8. Screenshots or exports from Namecheap and WordPress.com.

## Rollback procedure

1. Stop further writes.
2. Restore only the website records changed during the migration to their exact captured values.
3. Do not alter preserved MX, SPF, DKIM, DMARC, verification TXT, SRV, or unrelated records.
4. Restore the prior WordPress primary-domain setting only if it was changed and the previous value is known.
5. Re-test apex, `www`, HTTPS, mail, booking, WhatsApp, and mobile access.
6. Record the failure, restoration timestamp, changed records, and test results in this repository.

## Safety boundaries

- Never delete the domain, WordPress site, old website, database, mailbox, DNS zone, EasyWP instance, PositiveSSL certificate, or repository as part of rollback.
- Never disable renewal or request a refund during technical rollback.
- Do not use remembered WordPress.com IP addresses; use the current platform-provided targets.

## Current readiness

Rollback documentation now exists, but restoration values are still pending the authoritative DNS and platform inventory. Therefore no DNS switch is considered safe yet.
