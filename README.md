# Ehopn Innovation Platform

A Laravel-based platform designed to manage innovation challenges, funding opportunities, and user applications.

## Tech Stack
- **Framework:** Laravel 11 (PHP 8.2)
- **Web Server:** Nginx (Alpine)
- **Database:** MySQL 8.0
- **Containerization:** Docker & Docker Compose

## Getting Started

Follow these steps to set up the project locally using Docker.

### 1. Prerequisites
Ensure you have [Docker](https://www.docker.com/) and [Docker Compose](https://docs.docker.com/compose/) installed.

### 2. Launch the Containers
Build and start the environment in detached mode:
```bash
docker compose up -d --build
```

### 3. Install Dependencies
Install the PHP packages via Composer:
```bash
docker compose exec app composer install
```

### 4. Application Setup
Copy the environment file and generate the application key:
```bash
cp .env.example .env
docker compose exec app php artisan key:generate
```

### 5. Database Migrations
Run the migrations to create the `challenges`, `opportunities`, and `applications` tables:
```bash
docker compose exec app php artisan migrate
```

### 6. Access the App
Open your browser and navigate to: http://localhost:8080

## Common Commands
- **Stop services:** `docker compose down`
- **View logs:** `docker compose logs -f`
- **Artisan:** `docker compose exec app php artisan [command]`
