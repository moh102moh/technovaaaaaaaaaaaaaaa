# ----------------------
# Stage 1: Build PHP with needed extensions + Composer
# ----------------------
FROM php:8.2-cli as stage-0

# تثبيت مكتبات النظام المطلوبة للـ Laravel + php extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    && docker-php-ext-install zip pdo pdo_mysql \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# تثبيت Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# تعيين مجلد العمل
WORKDIR /app

# نسخ ملفات المشروع
COPY . .

# نسخ ملف البيئة
RUN cp .env.example .env

# تثبيت الحزم بدون dev
RUN composer install --no-dev --optimize-autoloader

# توليد APP_KEY
RUN php artisan key:generate

# ----------------------
# Stage 2: تشغيل التطبيق
# ----------------------
FROM php:8.2-cli

WORKDIR /app

# نسخ الملفات من المرحلة الأولى
COPY --from=stage-0 /app /app

# افتراضيًا نشغل السيرفر الداخلي للـ Laravel على البورت 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]

EXPOSE 8000
