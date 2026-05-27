#!/bin/bash

# Exit immediately if a command exits with a non-zero status
set -e

echo "===================================================="
echo "🚀 EXECUTING AUTOMATED EHOPN PLATFORM CORE BUILD"
echo "===================================================="

# 1. Environment Handling
# 1. Environment Handling
if [ ! -f .env ]; then
    echo "📄 [1/6] Self-generating fresh .env configuration layer..."
    cat <<EOT > .env
APP_NAME=EHOPn
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost:8080

LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite

SESSION_DRIVER=file
SESSION_LIFETIME=120
EOT
else
    echo "📄 [1/6] Existing .env file detected. Skipping creation."
fi

# 2. Spin up containers
echo "🐳 [2/6] Synchronizing Docker infrastructure..."
docker compose up -d --build

echo "⏳ Waiting for environment initialization layers..."
sleep 5

# 3. Core Framework Package Installation
echo "📦 [3/6] Fetching and caching vendor dependencies via Composer..."
docker compose exec -T app composer install --no-interaction --prefer-dist

# 4. Generate Application Crypto Key (Fixes the missing key bug!)
echo "🔑 [4/6] Generating unique application cryptographic signature..."
docker compose exec -T app php artisan key:generate --force

# 5. Lock down transactional data store permissions
echo "🔒 [5/6] Provisioning SQLite structural storage permissions..."
docker compose exec -T app touch database/database.sqlite
docker compose exec -T app chmod -R 777 database
docker compose exec -T app chmod -R 777 storage

# 6. Database schema structures and mocking vectors
echo "🗄️ [6/6] Executing fresh migrations and injecting mock seeder data..."
docker compose exec -T app php artisan migrate:fresh --seed

echo "===================================================="
echo "✨ SYSTEM STATUS: LIVE & ONLINE"
echo "===================================================="
echo "🖥️  Public Web Platform: http://localhost:8080"
echo "🔐 Administrative Panel: http://localhost:8080/admin/login"
echo "📊 Database GUI Browser: http://localhost:8081"
echo "===================================================="