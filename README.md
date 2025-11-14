# Laravel SaaS Starter (Teams + Billing)

[![CI](https://github.com/kajol-ds/laravel-saas-starter/actions/workflows/ci.yml/badge.svg)](https://github.com/kajol-ds/laravel-saas-starter/actions/workflows/ci.yml)
[![CI](https://github.com/kajol-ds/laravel-saas-starter/actions/workflows/ci.yml/badge.svg)](https://github.com/kajol-ds/laravel-saas-starter/actions/workflows/ci.yml)
![PHP](https://img.shields.io/badge/PHP-8.2%2B-blue)
![Laravel](https://img.shields.io/badge/Laravel-11-red)
![License](https://img.shields.io/badge/License-MIT-lightgrey)


Production-ready scaffold: Teams, Stripe Billing (Tax), Roles/Permissions, Background jobs, Mail, CI/CD.

## Why
Ship SaaS faster with Laravel best practices and predictable ops.

## Features
- Teams, role-based access
- Stripe Billing (trial, proration, tax)
- API (Sanctum) + Web
- Queues (Horizon), Octane-ready
- CI/CD examples (GitHub Actions)

## Billing package
- Routes:
  - `GET /api/billing/ping` → 200 OK (health)
  - `POST /api/billing/webhook` → 200 OK (placeholder)
- Provider: `Budventure\Billing\Providers\BillingServiceProvider`
- Tests: feature + unit (2 passing)

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

