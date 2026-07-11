# Codex Instructions for BookLaxDriver

## Active production architecture

- WordPress.com is the only active production website.
- Verified production content site: https://booklaxdriver-itxey.wordpress.com
- Target production domain: https://booklaxdriver.com
- Namecheap is the registrar and DNS authority for `booklaxdriver.com`.
- `laxdriver.online` is a backup domain associated with Hostinger and is not the production target.
- `booklaxdriver-ptljd.wordpress.com` is an unlaunched duplicate site and must not be treated as production.
- This GitHub repository is for documentation, audits, checklists, recovery records, and approved support files.
- Do not deploy a second public website from this repository.
- Do not introduce Vercel, GitHub Pages, Wix, Shopify, Netlify, Replit, Hostinger Horizons, or another production platform unless the repository owner explicitly changes the architecture.

## Operating goal

Improve and verify the complete customer booking loop:

1. Customer opens the website.
2. Customer understands the airport transfer and private-driver services.
3. Customer clicks Book Now, WhatsApp, Call Now, or Email.
4. Customer submits complete trip details.
5. BookLaxDriver confirms route, vehicle category, availability, price, deposit, cancellation, waiting, and balance terms in writing.
6. Customer replies `CONFIRMED`.
7. BookLaxDriver sends a secure hosted Stripe or Square invoice/payment link.
8. Booking is confirmed only after payment or deposit, driver assignment, and final confirmation.

## Current verified website state

- Production site is active, public, and launched.
- Published pages: Home, About, Fleet, Rates, Book a Ride, Privacy Policy, Terms and Conditions, Cancellation and Waiting Policy, and Contact.
- Draft pages: Services, Airport Transfer, Hourly Chauffeur, Los Angeles Tours, Booking Form Test, and one duplicate Privacy Policy draft.
- Header navigation currently contains About, Fleet, Rates, and Booking only.
- No custom domain is attached to the WordPress site.
- The connected WordPress account currently reports no paid subscription for the production site; verify domain-mapping eligibility before DNS changes.

## Safety and payment rules

- Never collect full card numbers, CVV/CVC, bank credentials, passwords, recovery codes, or private API keys.
- Use hosted Stripe or Square payment pages only.
- Never commit secrets or private credentials.
- Do not promise final price, availability, insurance, licensing, TCP status, LAX authorization, or legal compliance unless verified by a current authoritative source.
- Avoid unknown scripts, nulled plugins, abandoned packages, and unnecessary dependencies.
- Preserve existing mail and verification DNS records during domain changes.

## Change rules

- Read README.md and the current repository state before changing anything.
- Read the connected WordPress.com state before making site claims.
- Preserve existing recovery branches and records.
- Prefer small, reversible changes.
- Use a new branch for substantial changes and open a pull request.
- Explain what changed, what was tested, and what still requires owner authorization.
- Do not claim the live WordPress website was changed unless the WordPress environment was actually accessed and verified.
- Do not change DNS until the current zone, nameservers, WordPress domain targets, plan eligibility, and rollback values are captured.

## Business contact

- Phone and WhatsApp: +1 702-882-2810
- WhatsApp link: https://wa.me/17028822810
- Email: booklaxdriver@gmail.com
