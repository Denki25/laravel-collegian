FROM php:8.4-cli

RUN apt-get update && apt-get install -y \
    git unzip zip libzip-dev \
    && docker-php-ext-install zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views storage/logs bootstrap/cache \
    && chmod -R 777 storage bootstrap/cache

RUN cp .env.example .env || true

RUN php artisan key:generate --force || true

RUN php artisan optimize:clear || true

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=${PORT:-10000}
