FROM php:8.4-cli

RUN apt-get update && apt-get install -y --no-install-recommends \
    build-essential git unzip zip libzip-dev libpng-dev libjpeg62-turbo-dev libfreetype-dev libwebp-dev zlib1g-dev libonig-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install -j$(nproc) gd pdo_mysql zip \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

# Ensure Laravel storage and cache directories exist before Composer runs
RUN mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views storage/logs bootstrap/cache \
    && chmod -R 777 storage bootstrap/cache

# Copy example env and create sqlite file so artisan commands during build succeed
RUN cp .env.example .env || true \
    && mkdir -p database \
    && touch database/database.sqlite \
    && chmod -R 777 database

# Allow composer to run as root inside container
ENV COMPOSER_ALLOW_SUPERUSER=1

# Install PHP dependencies without running composer scripts (we'll run needed artisan commands afterwards)
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Generate app key, run migrations and run statamic package setup now that vendor/ exists
RUN php artisan key:generate --force && \
    php artisan migrate --force || true && \
    php artisan package:discover --ansi && \
    php artisan statamic:install --ansi --no-interaction || true

# Clear caches
RUN php artisan optimize:clear || true

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=${PORT:-10000}
