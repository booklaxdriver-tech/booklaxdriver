# DNS Before WordPress

Status: **in progress — no DNS changes authorized or performed**

Last audit update: 2026-07-11T00:27:57Z

## Production target

- Production domain: `booklaxdriver.com`
- Intended content site: `https://booklaxdriver-ptljd.wordpress.com`
- Registrar: Namecheap
- Contact email to preserve: `booklaxdriver@gmail.com`

## Safety rule

Do not delete, replace, or disable any DNS, mail, SSL, forwarding, EasyWP, Hostinger, GitHub Pages, or Vercel configuration until the current values are captured and the WordPress.com mapping is publicly verified.

## Current DNS inventory

The following values have **not yet been verified from the authoritative Namecheap DNS account**:

| Item | Current value | Verification state |
|---|---|---|
| Nameservers | Pending platform read | Not verified |
| Apex A/AAAA | Pending platform read | Not verified |
| `www` CNAME/A | Pending platform read | Not verified |
| MX records | Pending platform read | Not verified |
| TXT verification/SPF/DKIM/DMARC | Pending platform read | Not verified |
| SRV records | Pending platform read | Not verified |
| CAA records | Pending platform read | Not verified |
| URL forwarding | Pending platform read | Not verified |
| TTL values | Pending platform read | Not verified |
| Current SSL dependency | Pending service audit | Not verified |

## Public reachability check

A public verification attempt could not resolve the production domain, `www`, or the supplied WordPress.com temporary hostname from the available test environment. This is recorded as an unresolved finding, not proof that the domains are globally offline.

## Required next capture

Before any DNS write, record the exact Namecheap Advanced DNS table and WordPress.com domain-mapping targets. Preserve all mail and verification records unless an explicitly reviewed replacement is documented.
