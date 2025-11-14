# Contributing to Laravel SaaS Starter

Thanks for helping! Please follow this quick process so we can merge fast and keep CI green.

## Ground rules
- Follow PSR-12 and Laravel conventions.
- Add/keep tests green (`php artisan test`) and run `composer lint` if present.
- Use Conventional Commits (feat/fix/docs/chore/refactor/test/build/perf).

## How to contribute
1. Open an issue (clear title + repro or acceptance criteria).
2. Fork & branch from `main` (feature/<slug> or fix/<slug>).
3. Keep changes focused; update docs and `.env.example` if needed.
4. Add tests; `php artisan test` must pass.
5. Open PR with checklist:
   - [ ] Linked issue
   - [ ] Scope is minimal
   - [ ] Tests added/updated and passing
   - [ ] Docs updated when relevant

## Local dev
```bash
cd apps/web
cp .env.example .env
composer install
php artisan key:generate
php artisan test

**Security**
Do not file public issues for vulnerabilities. See SECURITY.md.

**License**
By contributing, you agree that your contributions are under the MIT license.
