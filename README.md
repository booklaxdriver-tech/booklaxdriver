# BookLaxDriver Operations Repository

This repository is the documentation, audit, and recovery record for the BookLaxDriver business website.

## Single Production Path

- Website and hosting: WordPress.com
- Correct site: https://booklaxdriver-ptljd.wordpress.com
- Custom production domain: https://booklaxdriver.com
- Domain registrar and DNS: Hostinger
- GitHub role: documentation, change history, launch checklists, and recovery records only

Do not deploy a second public website from this repository. Vercel, GitHub Pages, Vite, Node.js, and static-site deployment are not part of the active production architecture.

## Business Contact

- WhatsApp / phone: +1 702-882-2810
- WhatsApp: https://wa.me/17028822810
- Email: booklaxdriver@gmail.com

## Customer Booking Loop

1. Customer opens the WordPress website.
2. Customer reviews services and trust information.
3. Customer clicks Book Now or WhatsApp.
4. Customer sends date/time, flight or pickup, destination, passengers, luggage, vehicle preference, and notes.
5. BookLaxDriver confirms route, availability, vehicle, price, deposit, cancellation, waiting, and balance terms in writing.
6. Customer replies CONFIRMED.
7. BookLaxDriver sends a secure hosted Stripe or Square invoice/payment link.
8. Booking is confirmed only after payment/deposit, driver assignment, and final confirmation.

## Safety Rules

- Never collect card numbers, CVV/CVC, bank credentials, passwords, recovery codes, or private API keys through the website, WhatsApp, SMS, WeChat, email, screenshots, GitHub, or chat.
- Use hosted Stripe/Square payment pages only.
- Do not promise final price, availability, airport permission, licensing, insurance, or legal compliance unless verified.
- Do not install nulled plugins, unknown scripts, abandoned packages, or unnecessary plugins.

## Current Blocking Items

- Restore or reauthorize WordPress.com management access; the connector currently reports the site as suspended even though the account site list reports it active.
- Clean placeholder content on the correct WordPress site.
- Connect booklaxdriver.com from Hostinger to WordPress.com.
- Verify HTTPS, desktop/mobile booking flow, WhatsApp links, privacy, terms, and payment fallback.

## Preserved Recovery Point

The pre-cleanup repository state is preserved on branch:

`archive/pre-wordpress-only-cleanup-20260710`
