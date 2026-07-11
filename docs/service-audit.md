# BookLaxDriver Service Audit

Status: **in progress**

Last audit update: 2026-07-11T00:27:57Z

## Keep

| Service/resource | State | Reason |
|---|---|---|
| `booklaxdriver.com` | Keep | Production domain |
| Namecheap domain privacy | Keep | Domain privacy protection |
| WordPress.com site | Keep | Intended production content platform |
| GitHub repository `booklaxdriver-tech/booklaxdriver` | Keep | Verified accessible; backup and change record |
| WhatsApp `+1 702-882-2810` | Keep | Primary customer handoff |
| `booklaxdriver@gmail.com` | Keep | Primary business email |
| Existing DNS/mail records | Temporarily keep | Must be inventoried before changes |

## Temporarily retain pending dependency checks

| Service | Current classification | Required evidence before reclassification |
|---|---|---|
| Namecheap EasyWP | Temporarily retain | Confirm site/database dependency and export backup |
| Hostinger external connection | Temporarily retain | Confirm DNS, forwarding, mail, and website dependencies; do not affect `laxdriver.online` |
| GitHub Pages/Vercel custom-domain deployment | Temporarily retain | Confirm whether `booklaxdriver.com` is configured as a custom domain |
| PositiveSSL | Temporarily retain | Confirm current certificate use and WordPress.com HTTPS success |
| PremiumDNS | Temporarily retain | Export complete DNS zone and compare ordinary Namecheap DNS capability |
| Namecheap email trial | Temporarily retain | Check mailbox existence, historical mail, forwarding, and form delivery |
| Relate/SEO/review/SiteLock add-ons | Temporarily retain | Confirm actual use, renewal date, price, and overlap with WordPress.com |

## Verified evidence

- GitHub repository exists and is accessible with administrative permissions.
- Repository default branch is `main`.
- No cancellation, deletion, DNS write, payment, refund, or renewal change was performed during this audit update.

## Unresolved production conflict

The current operator skill baseline names a different WordPress.com hostname than the owner-specified target. No domain or content write should be made until the active production WordPress site is verified directly in WordPress.com. The owner-specified target remains recorded as `booklaxdriver-ptljd.wordpress.com` for this migration task.

## Cancellation gate

Nothing is classified as “safe to stop renewal” yet. That classification requires successful apex/www/HTTPS/mobile/booking/contact/mail verification plus confirmed non-dependence on the old service.
