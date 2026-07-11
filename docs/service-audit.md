# BookLaxDriver Service Audit

Status: **in progress — production site verified**

Last audit update: 2026-07-10 PT / 2026-07-11 UTC

## Keep

| Service/resource | State | Reason |
|---|---|---|
| `booklaxdriver.com` | Keep | Production domain target |
| Namecheap domain registration and privacy | Keep | Registrar/DNS authority and privacy protection |
| `booklaxdriver-itxey.wordpress.com` | Keep | Verified active, public, launched production content site |
| GitHub repository `booklaxdriver-tech/booklaxdriver` | Keep | Verified accessible; documentation, audit, rollback, and change record only |
| WhatsApp `+1 702-882-2810` | Keep | Primary customer handoff |
| `booklaxdriver@gmail.com` | Keep | Primary business email |
| Existing DNS/mail records | Temporarily keep | Must be exported and classified before changes |
| `laxdriver.online` | Backup only | Preserve as a backup domain; do not make it production |

## Duplicate and legacy resources

| Resource | Current classification | Required action |
|---|---|---|
| `booklaxdriver-ptljd.wordpress.com` | Unlaunched duplicate | Do not build further; retain until content comparison and backup are complete |
| Hostinger HTML/PHP package | Archive/reference only | Do not deploy as production; preserve only if useful for recovery evidence |
| GitHub Pages/Vercel deployment files | Inactive legacy | Keep disabled; verify no custom-domain binding remains |
| Hostinger Horizons | Prohibited parallel builder | Do not create a new site |

## Temporarily retain pending dependency checks

| Service | Current classification | Required evidence before reclassification |
|---|---|---|
| Namecheap EasyWP | Temporarily retain | Confirm site/database dependency and export backup |
| PositiveSSL | Temporarily retain | Confirm current certificate dependency and WordPress.com HTTPS success after mapping |
| PremiumDNS | Temporarily retain | Export complete DNS zone and compare standard Namecheap DNS capability |
| Namecheap email trial | Temporarily retain | Check mailbox existence, historical mail, forwarding, and form delivery |
| Relate/SEO/review/SiteLock add-ons | Temporarily retain | Confirm actual use, renewal date, price, and overlap with WordPress.com |

## Verified WordPress evidence

- `booklaxdriver-itxey.wordpress.com` is active, public, launched, and uses the Assembler theme.
- The site currently has no active plugins and WordPress reports healthy status.
- Published pages include Home, About, Fleet, Rates, Book a Ride, Privacy Policy, Terms and Conditions, Cancellation and Waiting Policy, and Contact.
- Draft pages include Services, Airport Transfer, Hourly Chauffeur, Los Angeles Tours, Booking Form Test, and one duplicate Privacy Policy draft.
- Header navigation contains About, Fleet, Rates, and Booking only.
- The booking path uses WhatsApp and email, followed by dispatcher-written quote/terms and a hosted Stripe or Square payment link.
- No custom domain is attached to either WordPress site.
- The connected WordPress account currently reports no paid subscription for the production site.
- Public user registration is enabled even though the booking path does not require accounts; this should be reviewed before launch on the custom domain.

## Verified collaboration evidence

- GitHub repository exists with administrative permissions and default branch `main`.
- Slack channel `#booklaxdriver-orders` exists; its previous Hostinger deployment note was corrected with the verified WordPress production architecture.
- No existing BookLaxDriver project files were found in connected Google Drive search.
- No existing BookLaxDriver project page was found in connected Notion search.
- No existing BookLaxDriver Canva design or Brand Kit was found.
- YepCode execution is currently blocked because its team authorization is incomplete (`empty team ID`).

## Current blocking items

1. Complete Services and Payment Safety content and navigation.
2. Review whether to disable public account registration and unnecessary discussion/ping settings.
3. Confirm WordPress plan eligibility for custom-domain mapping.
4. Capture Namecheap nameservers, full DNS zone, forwarding, mail records, and rollback values.
5. Attach and map `booklaxdriver.com` only after the preflight is complete.
6. Verify apex, `www`, HTTP/HTTPS redirects, TLS certificate, mobile layout, booking, WhatsApp, email, and legal pages.

## Cancellation gate

Nothing is classified as safe to cancel, delete, refund, transfer, or stop renewing yet. Reclassification requires successful custom-domain verification, customer-path testing, mail dependency checks, and a stored rollback record.
