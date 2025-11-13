# Deploy

## Database & Queues
- MySQL 8/Postgres; Redis for queues + cache
- Horizon for queue monitoring

## Env (sample)
- `APP_ENV=production`
- `APP_KEY=base64:...`
- `CACHE_DRIVER=redis`
- `QUEUE_CONNECTION=redis`
- `STRIPE_KEY=...`
- `STRIPE_SECRET=...`

## Build & Run
- `php artisan migrate --force`
- `php artisan config:cache && php artisan route:cache && php artisan view:cache`
- Supervisor or systemd for `php artisan horizon`
- Octane or FPM behind Nginx

## Observability
- Health endpoint `/health`
- Telescope optional (restrict)
