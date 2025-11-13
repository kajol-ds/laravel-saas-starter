# Setup (Local)

## Prereqs
- PHP 8.3, Composer 2
- Node 20, PNPM/NPM
- MySQL 8/Postgres, Redis

## Steps
1. `composer create-project laravel/laravel apps/web`
2. `cp apps/web/.env.example apps/web/.env` and set DB + Redis + Stripe keys
3. `cd apps/web && composer require laravel/cashier`
4. `php artisan migrate --seed`
5. `npm ci && npm run build`
6. `php artisan serve`

## Optional
- Octane: `composer require laravel/octane && php artisan octane:install`
- Horizon: `composer require laravel/horizon && php artisan horizon:install`
