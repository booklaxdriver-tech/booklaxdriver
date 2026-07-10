# Static Package Risk Notes

## External Images

The static fallback package currently uses external Unsplash image URLs.

Risk:

- Images may fail if external image loading is blocked, slow, or rate-limited.
- Visuals may not always match exact vehicle classes.

Mitigation before paid traffic:

- Replace with owned/local vehicle images, or
- Verify external images load reliably from the final domain, or
- Use WordPress media assets on the official site.

## Official Site Priority

WordPress.com remains the official site. Static package is a fallback/recovery copy.

## Payment Safety

The static package includes safe payment wording, but no live Stripe/Square link is connected yet.
