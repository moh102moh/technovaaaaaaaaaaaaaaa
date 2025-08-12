# ----------------------
# Stage 1: Build PHP with needed extensions + Composer
# ----------------------
FROM php:8.2-cli as stage-0

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    && docker-php-ext-install zip pdo pdo_mysql \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

# نسخ composer.json و composer.lock أول شي
COPY composer.json composer.lock ./

# تثبيت الحزم بدون dev
RUN composer install --no-dev --optimize-autoloader

# نسخ باقي ملفات المشروع
COPY . .

# نسخ ملف البيئة
RUN cp .env.example .env

# توليد APP_KEY
RUN php artisan key:generate --force

# ----------------------
# Stage 2: تشغيل التطبيق
# ----------------------
FROM php:8.2-cli

WORKDIR /app

COPY --from=stage-0 /app /app

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]

EXPOSE 8000
