# Budventure Billing (Package)

Auto-discovered Laravel package. Provides billing config + routes.

- Config publish: `php artisan vendor:publish --tag=billing-config`
- Health check: `GET /api/billing/ping` → `{"status":"ok"}`
