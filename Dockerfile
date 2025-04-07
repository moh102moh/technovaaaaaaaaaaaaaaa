FROM php:8.2-apache

# تثبيت الإضافات المطلوبة
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev zip libpq-dev \
    && docker-php-ext-install zip pdo pdo_pgsql

# تفعيل mod_rewrite
RUN a2enmod rewrite

# إعداد العمل
WORKDIR /var/www/html

# نسخ ملفات المشروع
COPY . /var/www/html

# تثبيت Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# ضبط صلاحيات
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

# نسخ ملف إعدادات Apache
COPY ./docker/apache.conf /etc/apache2/sites-available/000-default.conf

# عرض المنفذ
EXPOSE 80

# أمر التشغيل النهائي
CMD ["apache2-foreground"]
