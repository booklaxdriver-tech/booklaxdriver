# BookLaxDriver Post-Launch Test Script

Run this after `booklaxdriver.com` is connected.

## Desktop

1. Open `https://booklaxdriver.com`.
2. Confirm page loads without security warnings.
3. Confirm hero says BookLaxDriver / LAX / private chauffeur.
4. Click primary WhatsApp CTA.
5. Confirm WhatsApp opens to `17028822810`.
6. Check Services, Fleet, About, Contact, and Book a Ride pages.
7. Confirm no placeholder phone, fake team, San Francisco map, or comment box remains.

## Mobile

1. Open `https://booklaxdriver.com` on mobile data and Wi-Fi.
2. Tap `Get a Quote on WhatsApp`.
3. Tap each vehicle CTA.
4. Tap floating WhatsApp button.
5. Confirm WhatsApp opens with prefilled BookLaxDriver trip request.
6. Confirm buttons are not hidden, clipped, or overlapping.

## Technical

1. Open `https://booklaxdriver.com/robots.txt`.
2. Open `https://booklaxdriver.com/sitemap.xml`.
3. Test `https://www.booklaxdriver.com`.
4. Confirm `www` either redirects to root domain or loads the same site.
5. Submit sitemap in Google Search Console.

## Payment Flow

1. Send a test WhatsApp inquiry.
2. Confirm team asks for route/time/passengers/luggage/vehicle.
3. Confirm quote and terms are sent before payment.
4. Confirm payment link is secure and external.
5. Confirm no card numbers are requested in WhatsApp or website.
