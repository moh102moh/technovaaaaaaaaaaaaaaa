FROM php:8.2-apache

# تثبيت الإضافات المطلوبة + PostgreSQL dev libs
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev zip libpq-dev \
    && docker-php-ext-install zip pdo pdo_pgsql

# تفعيل mod_rewrite لـ Laravel
RUN a2enmod rewrite

# نسخ ملفات المشروع إلى مجلد Apache
COPY . /var/www/html

# تغيير صلاحيات مجلد Laravel (لتفادي مشاكل التخزين والكاش)
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# نسخ ملف إعدادات Apache (لضبط DocumentRoot على /public)
COPY ./docker/apache.conf /etc/apache2/sites-available/000-default.conf

# تثبيت Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# تعيين مسار العمل داخل الحاوية
WORKDIR /var/www/html

# تثبيت الحزم باستخدام Composer (لو كان عندك ملف composer.json)
RUN composer install || true

# توليد مفتاح Laravel (إن وجد)
RUN if [ -f artisan ]; then php artisan key:generate || true; fi

# منع تحذير ServerName
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# تعيين البورت
EXPOSE 80
