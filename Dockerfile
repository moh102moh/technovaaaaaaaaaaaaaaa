# ----------------------
# Builder stage: install PHP extensions & composer deps
# ----------------------
FROM php:8.2-cli AS builder

# Install system dependencies and PHP extensions commonly required by Laravel
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    libxml2-dev \
    zlib1g-dev \
    libonig-dev \
  && docker-php-ext-install mbstring bcmath xml zip pdo pdo_mysql \
  && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer binary
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copy composer files first to leverage Docker layer cache
COPY composer.* ./

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Copy remaining application files
COPY . .

# If .env.example exists, copy it to .env (safe fallback)
RUN if [ -f .env.example ]; then cp .env.example .env; fi

# Generate APP_KEY (force to overwrite if somehow present)
RUN php artisan key:generate --force

# Ensure storage and cache folders are writable
RUN mkdir -p storage bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# ----------------------
# Runtime stage
# ----------------------
FROM php:8.2-cli

WORKDIR /app

# Copy application from builder
COPY --from=builder /app /app

# Expose default port (Koyeb will provide $PORT at runtime)
EXPOSE 8080

# Start the built-in PHP server and listen on the PORT provided by the platform (fallback 8080)
CMD ["sh", "-c", "php artisan serve --host=0.0.0.0 --port=${PORT:-8080}"]
