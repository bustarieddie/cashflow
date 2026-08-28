# Klinik Bustari Cash Flow

Laravel 13 cash-flow management application for Klinik Bustari.

## Included

- Passwordless email OTP through Resend (10-minute expiry, rate limiting and attempt limits)
- Admin, Manager and Staff roles
- Dedicated Cash Sales register
- Expenses and transfers
- Daily cash reconciliation
- Receipt/document upload and user attribution
- Responsive clinic dashboard

## Forge requirements

- PHP 8.3+, MySQL 8+, Node.js 22+
- Domain: `cashflow.klinikbustari.com`
- Web directory: `/public`

## Required Forge environment values

Copy `.env.example` into Forge and set the secure values:

```env
APP_KEY=
DB_PASSWORD=
ADMIN_EMAIL=bustarieddie@gmail.com
RESEND_API_KEY=
OTP_FROM_ADDRESS=noreply@klinikbustari.com
```

Verify `klinikbustari.com` in Resend before enabling OTP delivery.

## Forge deployment script

```bash
cd /home/forge/cashflow.klinikbustari.com
git pull origin main
composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader
php artisan migrate --force
php artisan storage:link || true
npm ci
npm run build
php artisan optimize
```

On first login, the `ADMIN_EMAIL` address creates the initial Admin account. Admin can then authorise Manager and Staff emails under **Users**.

## Security

- Never commit `.env`, API keys, database passwords or Forge credentials.
- Make the repository private after the initial push.
- Enable Forge SSL before production use.
