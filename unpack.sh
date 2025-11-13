#!/usr/bin/env bash
set -euo pipefail

mkdir -p apps/web packages/billing docs .github/workflows

# Move docs
[ -f docs.setup.md ] && (git mv docs.setup.md docs/setup.md 2>/dev/null || mv docs.setup.md docs/setup.md)
[ -f docs.deploy.md ] && (git mv docs.deploy.md docs/deploy.md 2>/dev/null || mv docs.deploy.md docs/deploy.md)

# Move app/package READMEs
[ -f apps.web.README.md ] && (git mv apps.web.README.md apps/web/README.md 2>/dev/null || mv apps.web.README.md apps/web/README.md)
[ -f packages.billing.README.md ] && (git mv packages.billing.README.md packages/billing/README.md 2>/dev/null || mv packages.billing.README.md packages/billing/README.md)

# Move workflow
[ -f github.workflows.ci.yml ] && (git mv github.workflows.ci.yml .github/workflows/ci.yml 2>/dev/null || mv github.workflows.ci.yml .github/workflows/ci.yml)

echo "Unpacked. Next steps:
1) git add -A && git commit -m 'unpack gist'
2) composer create-project laravel/laravel apps/web
3) cp .env.example apps/web/.env && set keys
4) php artisan migrate --seed (from apps/web)
5) npm ci && npm run build"
