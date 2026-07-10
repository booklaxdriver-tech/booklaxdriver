# BookLaxDriver Supervision Board

Updated: 2026-07-10

## Operating Rule

Use the fixed collaboration model:

- WordPress.com = official website
- Hostinger = `booklaxdriver.com` domain/DNS
- GitHub = backup and version history
- Agent = inspect, repair-copy, test, SEO, WhatsApp, booking/payment flow, and supervision

Correct WordPress site:

- `booklaxdriver-ptljd.wordpress.com`

Do not use:

- `booklaxdriver-itxey.wordpress.com`

## Execution Board

| Priority | Work Item | Platform | Status | Blocker | Next Action |
|---|---|---|---|---|---|
| P0 | Use only correct WordPress site | WordPress.com | Active | None | Keep `ptljd`; ignore `itxey` |
| P0 | Fix Contact phone | WordPress.com | Not fixed | WordPress edit authorization needed | Replace `(123) 456-7890` with `(702) 882-2810` |
| P0 | Fix Contact location/map | WordPress.com | Not fixed | WordPress edit authorization needed | Replace San Francisco with Los Angeles / LAX service area |
| P0 | Remove fake About team | WordPress.com | Not fixed | WordPress edit authorization needed | Replace placeholder team cards with service standards |
| P0 | Remove internal pricing wording | WordPress.com | Not fixed | WordPress edit authorization needed | Remove `after the requested $10 increase` |
| P1 | Disable comments on business pages | WordPress.com | Not fixed | WordPress edit authorization needed | Disable comments on Home, Book a Ride, Services, Fleet, About, Contact |
| P1 | Connect `booklaxdriver.com` | Hostinger + WordPress.com | Not done | Domain/DNS authorization required | Point domain to correct WordPress.com site |
| P1 | Final launch on real domain | WordPress.com | Not done | Domain not connected | Launch after DNS/HTTPS works |
| P1 | Mobile WhatsApp test | Public site | Pending | Public real-domain launch missing | Test all CTAs after domain is live |
| P2 | GitHub backup repository | GitHub | Active | None | Continue backing up files and launch records |
| P2 | Payment provider link | Stripe/Square | Not done | Payment provider not connected | Create hosted payment/invoice workflow |
| P2 | Final policies | Business owner | Pending approval | Owner policy decision required | Confirm deposit, cancellation, wait time, no-show |

## Next Supervision Action

The next required action is WordPress cleanup on the correct `ptljd` site.

Only request user authorization when WordPress write access is available/needed, or when domain/DNS changes require owner approval.
