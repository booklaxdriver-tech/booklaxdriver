# BookLaxDriver Operations Repository

This repository is the documentation, audit, and recovery record for the BookLaxDriver business website. It is not a production hosting source.

## Verified production architecture

- Website and hosting: WordPress.com
- Active production content site: https://booklaxdriver-itxey.wordpress.com
- Custom production domain target: https://booklaxdriver.com
- Registrar and authoritative DNS target for `booklaxdriver.com`: Namecheap
- Backup domain only: `laxdriver.online` (Hostinger)
- GitHub role: documentation, change history, launch checklists, audit evidence, and recovery records

Do not deploy a second public website from this repository. Vercel, GitHub Pages, Vite, Node.js, static-site deployment, Hostinger Horizons, and the historical Hostinger HTML/PHP package are not part of the active production architecture.

## Current verified WordPress state

Verified from the connected WordPress.com account on 2026-07-10 PT:

- `booklaxdriver-itxey.wordpress.com` is active, public, launched, and recently updated.
- It uses the Assembler theme and has no active plugins.
- Published customer pages include Home, About, Fleet, Rates, Book a Ride, Privacy Policy, Terms and Conditions, Cancellation and Waiting Policy, and Contact.
- Drafts include Services, Airport Transfer, Hourly Chauffeur, Los Angeles Tours, Booking Form Test, and one duplicate Privacy Policy draft.
- A second site, `booklaxdriver-ptljd.wordpress.com`, still exists but is not launched and must not be treated as production.
- No custom domain is currently attached to the production WordPress site.
- The WordPress account currently reports no paid subscription for the production site; domain-mapping eligibility must be confirmed before DNS changes.

## Business contact

- WhatsApp / phone: +1 702-882-2810
- WhatsApp: https://wa.me/17028822810
- Email: booklaxdriver@gmail.com

## Customer booking loop

1. Customer opens the WordPress website.
2. Customer reviews services, fleet, rates, and trust information.
3. Customer clicks Book Now, WhatsApp, Call Now, or Email.
4. Customer sends date/time, flight or pickup, destination, passengers, luggage, vehicle preference, stops, and special needs.
5. BookLaxDriver confirms route, availability, vehicle category, price, deposit, cancellation, waiting, and balance terms in writing.
6. Customer replies `CONFIRMED`.
7. BookLaxDriver sends a secure hosted Stripe or Square invoice/payment link.
8. Booking is confirmed only after payment or deposit, driver assignment, and final confirmation.

## Safety rules

- Never collect card numbers, CVV/CVC, bank credentials, passwords, recovery codes, or private API keys through the website, WhatsApp, SMS, WeChat, email, screenshots, GitHub, or chat.
- Use hosted Stripe or Square payment pages only.
- Do not promise final price, availability, airport permission, licensing, insurance, TCP status, LAX authorization, or legal compliance unless verified.
- Do not install nulled plugins, unknown scripts, abandoned packages, or unnecessary plugins.
- Preserve existing MX, SPF, DKIM, DMARC, verification, and unrelated DNS records during any domain migration.

## Current blocking items

1. Complete the production navigation: Services, Contact, and required policy/trust links are not all present in the header navigation.
2. Review and publish the Services structure without duplicating existing Home content.
3. Add a dedicated Payment Safety page or an equivalent clearly linked trust section.
4. Resolve the duplicate WordPress site and duplicate draft references in documentation; do not delete either site without a backup and explicit approval.
5. Confirm WordPress custom-domain plan eligibility and capture the authoritative Namecheap DNS zone before any DNS write.
6. Map `booklaxdriver.com`, then verify apex, `www`, HTTP-to-HTTPS redirects, certificate, mobile layout, booking, WhatsApp, email, and policy pages.
7. Review WordPress settings where public registration is currently enabled even though guest booking does not require customer accounts.

## Preserved recovery point

The pre-cleanup repository state is preserved on branch:

`archive/pre-wordpress-only-cleanup-20260710`
