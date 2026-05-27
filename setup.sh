#!/bin/bash

echo "🚀 Starting EHOPn Platform Prototype Setup..."

# 1. Copy the environment file if it doesn't exist
if [ ! -f .env ]; then
    echo "📄 Creating .env file..."
    cp .env.example .env
fi

# 2. Build and start the Docker containers
echo "🐳 Spinning up Docker containers..."
docker compose up -d --build

# Give containers a couple of seconds to initialize safely
sleep 3

# 3. Fix SQLite permissions inside the container automatically
echo "🔒 Adjusting SQLite database permissions..."
docker compose exec -T app touch database/database.sqlite
docker compose exec -T app chmod -R 777 database

# 4. Run database migrations
echo "🗄️ Running database migrations..."
docker compose exec -T app php artisan migrate --force

echo "✨ Setup complete! The platform is live at http://localhost:8080"