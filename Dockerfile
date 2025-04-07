FROM php:8.2-apache

# تثبيت الإضافات المطلوبة
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev zip \
    && docker-php-ext-install zip pdo pdo_mysql

# تفعيل mod_rewrite
RUN a2enmod rewrite

# نسخ ملفات المشروع
COPY . /var/www/html

# تغيير صلاحيات مجلد Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# نسخ ملف إعدادات Apache
COPY ./docker/apache.conf /etc/apache2/sites-available/000-default.conf

# تثبيت Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

RUN composer install \
    && cp .env.example .env \
    && php artisan key:generate

EXPOSE 80
