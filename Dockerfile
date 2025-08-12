FROM php:8.2-cli

# تثبيت الإضافات المطلوبة
RUN apt-get update && apt-get install -y unzip libzip-dev git \
    && docker-php-ext-install zip

# تثبيت Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# تحديد مجلد العمل
WORKDIR /app

# نسخ الملفات
COPY . .

# إنشاء ملف .env من المثال
RUN cp .env.example .env

# توليد APP_KEY
RUN php artisan key:generate

# تثبيت حزم Laravel بدون حزم التطوير
RUN composer install --no-dev --optimize-autoloader

# تجهيز الكاش
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

# تشغيل Laravel على البورت 8080
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-8080}
