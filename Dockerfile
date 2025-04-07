FROM php:8.2-apache

# تثبيت الإضافات المطلوبة
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev zip \
    && docker-php-ext-install zip pdo pdo_pgsql

# تفعيل mod_rewrite لـ Laravel
RUN a2enmod rewrite

# إعداد مجلد العمل
WORKDIR /var/www/html

# نسخ كل الملفات إلى الحاوية
COPY . .

# إعداد صلاحيات Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

# تثبيت Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# تثبيت الحزم (vendor)
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# نسخ إعدادات Apache
COPY ./docker/apache.conf /etc/apache2/sites-available/000-default.conf

# إضافة ServerName لتجنب التحذيرات
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# توليد مفتاح Laravel
RUN php artisan key:generate

# فتح البورت
EXPOSE 80
