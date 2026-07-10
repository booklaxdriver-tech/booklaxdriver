# BookLaxDriver Final Collaboration Model

## Default Operating Model

Use this fixed workflow going forward. Do not keep switching between platforms unless there is a clear technical blocker.

## Platform Roles

### 1. WordPress.com

Role: official public website.

Use WordPress.com as the main site builder and publishing surface for BookLaxDriver.

Primary site:

- `booklaxdriver-ptljd.wordpress.com`

Do not use the old test site:

- `booklaxdriver-itxey.wordpress.com`

### 2. Hostinger

Role: domain and DNS management for `booklaxdriver.com`.

Use Hostinger to manage or connect the official domain to the WordPress.com site.

Operational interpretation:

- WordPress.com hosts the actual website.
- Hostinger handles the domain/DNS side if the domain is registered or managed there.
- The target result is that `booklaxdriver.com` opens the correct WordPress.com site.

### 3. GitHub

Role: backup, version history, and recovery copy.

Create and maintain a repository for:

- Website copy backup
- HTML/static fallback package
- Launch checklists
- SEO/WhatsApp/payment workflow records
- Change history

GitHub is not the primary live website unless WordPress.com becomes blocked.

### 4. Agent Role

The agent is responsible for checking the website, finding and documenting issues, preparing repair copy, testing page flow, optimizing copy/SEO, checking booking and WhatsApp CTA flow, checking payment handoff wording, maintaining launch records, and telling the user only when a single required authorization is needed.

## Authorization Rule

Do not repeatedly ask the user for small decisions.

Only ask for authorization when required for one of these:

- WordPress.com write access
- Domain/DNS connection
- GitHub repository access
- Payment provider setup
- Meta/WhatsApp Business API access
- Final policy approval for deposit, cancellation, wait time, no-show, or insurance wording

## Current Priority

Continue on the correct WordPress.com site:

- `booklaxdriver-ptljd.wordpress.com`

Next work should focus on WordPress cleanup, domain connection, GitHub backup, and final mobile WhatsApp CTA testing.
