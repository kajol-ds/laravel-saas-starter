# Laravel SaaS Starter (Teams + Billing)

[![CI](https://github.com/kajol-ds/laravel-saas-starter/actions/workflows/ci.yml/badge.svg)](https://github.com/kajol-ds/laravel-saas-starter/actions/workflows/ci.yml)


Production-ready scaffold: Teams, Stripe Billing (Tax), Roles/Permissions, Background jobs, Mail, CI/CD.

## Why
Ship SaaS faster with Laravel best practices and predictable ops.

## Features
- Teams, role-based access
- Stripe Billing (trial, proration, tax)
- API (Sanctum) + Web
- Queues (Horizon), Octane-ready
- CI/CD examples (GitHub Actions)

## Quickstart
- PHP 8.3, Laravel 11, MySQL/Postgres, Redis
- `cp .env.example .env` → set Stripe keys
- `php artisan migrate --seed`
- `npm run build` & `php artisan serve`

## Structure (after unpack)


apps/
web/ # Laravel app
packages/
billing/ # Reusable billing module (Cashier integration)
docs/
setup.md # Local dev setup
deploy.md # Production deploy guide
.github/
workflows/ci.yml # CI pipeline



## Docs
See `/docs/setup.md` and `/docs/deploy.md` (created by `unpack.sh`).

## Services
Need help? https://budventure.technology/laravel-development?utm_source=github&utm_medium=oss&utm_campaign=offpage_d15&utm_content=laravel_saas_starter

## License
MIT
