FROM php:8.2-cli

# تثبيت الإضافات المطلوبة
RUN apt-get update && apt-get install -y unzip libzip-dev git \
    && docker-php-ext-install zip

# تثبيت Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# مجلد العمل
WORKDIR /app

# نسخ الملفات
COPY . .

# تثبيت حزم Laravel
RUN composer install --no-dev --optimize-autoloader

# تجهيز الكاش للـ Laravel
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

# تشغيل Laravel على البورت 8080
CMD php artisan serve --host=0.0.0.0 --port=8080
