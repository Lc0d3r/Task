# Ehopn Innovation Platform

Ehopn is a specialized Laravel-based platform designed to bridge the gap between innovation and execution. It provides a centralized hub to manage innovation challenges, track funding opportunities, and process applications from diverse stakeholders including Startups, Enterprises, and Academic institutions.

## Core Features

- **Innovation Challenges:** Track and display sector-specific challenges with deadlines and status tracking.
- **Funding Opportunities:** A directory of grants, research calls, and investment programs.
- **Unified Application System:** A streamlined submission process for Enterprise, Academic, and Startup applicants.
- **Dockerized Environment:** Fully containerized setup for consistent development and deployment.

## Tech Stack

-   **Framework:** Laravel 11 (PHP 8.2)
-   **Web Server:** Nginx (Alpine-based)
-   **Database:** MySQL 8.0
-   **Runtime:** PHP-FPM
-   **Tooling:** Docker & Docker Compose

## Getting Started

### 1. Prerequisites

Ensure you have the following installed:
- [Docker Desktop](https://www.docker.com/products/docker-desktop/)
- [Docker Compose](https://docs.docker.com/compose/)

### 2. Automated Setup (Recommended)

The easiest way to get started is by running the provided setup script:

```bash
chmod +x setup.sh
./setup.sh
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
