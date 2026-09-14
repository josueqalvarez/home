# ============================================
# Etapa 1: construir frontend
# ============================================
FROM node:22 AS frontend

WORKDIR /app

COPY package.json package-lock.json* ./

RUN npm install

COPY resources ./resources
COPY public ./public
COPY vite.config.js ./

RUN npm run build


# ============================================
# Etapa 2: Laravel
# ============================================
FROM php:8.4-cli

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    curl \
    && docker-php-ext-install \
    pdo_mysql \
    mbstring \
    bcmath \
    exif \
    pcntl \
    zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Dependencias PHP
COPY composer.json composer.lock ./

RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction \
    --prefer-dist \
    --no-scripts

# Copiar aplicación
COPY . .

# Copiar frontend compilado
COPY --from=frontend /app/public/build ./public/build

# Ejecutar scripts de Composer ahora que todo Laravel existe
RUN composer dump-autoload --optimize

# Permisos
RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 10000

CMD ["sh", "-c", "php artisan serve --host=0.0.0.0 --port=${PORT:-10000}"]