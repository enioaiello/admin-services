FROM php:8.2-apache

# Installer les extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev \
    zip unzip git curl \
    CHMOD CHOWN \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql gd

# Activer les modules Apache
RUN a2enmod rewrite

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Installe les extensions nécessaires
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Définir le dossier de travail
WORKDIR /var/www/html
COPY docker/app/apache-config.conf /etc/apache2/sites-available/000-default.conf

# Ajouter les permissions
RUN CHMOD o+w ./storage/ -R
RUN CHOWN www-data:www-data -R ./storage
