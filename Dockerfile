# استخدام صورة PHP مع Apache
FROM php:8.2-apache

# تثبيت الإضافات المطلوبة
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev zip libpq-dev \
    && docker-php-ext-install zip pdo pdo_pgsql

# تفعيل mod_rewrite
RUN a2enmod rewrite

# نسخ ملفات المشروع إلى مسار Apache
COPY . /var/www/html

# تغيير صلاحيات مجلد Laravel
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# نسخ ملف إعدادات Apache
COPY ./docker/apache.conf /etc/apache2/sites-available/000-default.conf

# إعداد Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# تحديد مجلد العمل
WORKDIR /var/www/html

# تثبيت الحزم باستخدام Composer
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# توليد مفتاح Laravel (تجاوز الأخطاء إن لم يكن .env موجود)
RUN if [ -f .env ]; then php artisan key:generate; fi

# تفادي تحذير Apache بخصوص ServerName
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# فتح المنفذ 80
EXPOSE 80
