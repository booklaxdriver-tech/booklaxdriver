# Codex Instructions for BookLaxDriver

## Active production architecture

- WordPress.com is the only active production website.
- Current WordPress site: https://booklaxdriver-ptljd.wordpress.com
- Target production domain: https://booklaxdriver.com
- Hostinger is used only for domain registration and DNS.
- This GitHub repository is for documentation, audits, checklists, recovery records, and approved support files.
- Do not deploy a second public website from this repository.
- Do not introduce Vercel, GitHub Pages, Wix, Shopify, Netlify, Replit, Hostinger Horizons, or another production platform unless the repository owner explicitly changes the architecture.

## Operating goal

Improve the complete customer booking loop:

1. Customer opens the website.
2. Customer understands the airport transfer and private-driver services.
3. Customer clicks Book Now, WhatsApp, or Call Now.
4. Customer submits complete trip details.
5. BookLaxDriver confirms route, vehicle, availability, price, deposit, cancellation, waiting, and balance terms in writing.
6. Customer replies CONFIRMED.
7. BookLaxDriver sends a secure hosted Stripe or Square invoice/payment link.
8. Booking is confirmed only after payment or deposit, driver assignment, and final confirmation.

## Safety and payment rules

- Never collect full card numbers, CVV/CVC, bank credentials, passwords, recovery codes, or private API keys.
- Use hosted Stripe or Square payment pages only.
- Never commit secrets or private credentials.
- Do not promise final price, availability, insurance, licensing, LAX authorization, or legal compliance unless verified by a current authoritative source.
- Avoid unknown scripts, nulled plugins, abandoned packages, and unnecessary dependencies.

## Change rules

- Read README.md and the current repository state before changing anything.
- Preserve existing recovery branches and records.
- Prefer small, reversible changes.
- Use a new branch for substantial changes and open a pull request.
- Explain what changed, what was tested, and what still requires owner authorization.
- Do not claim the live WordPress website was changed unless the WordPress environment was actually accessed and verified.

## Business contact

- Phone and WhatsApp: +1 702-882-2810
- WhatsApp link: https://wa.me/17028822810
- Email: booklaxdriver@gmail.com
