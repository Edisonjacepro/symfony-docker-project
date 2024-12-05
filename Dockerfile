FROM php:8.2-fpm

# Mettre à jour les dépôts et installer les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libicu-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    && docker-php-ext-install \
    intl \
    pdo_mysql \
    zip

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
