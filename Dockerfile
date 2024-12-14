# Utiliser une image PHP avec Apache
FROM php:8.1-apache

# Installer les extensions nécessaires
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Copier le code dans le conteneur
COPY . /var/www/html/

# Définir les permissions et activer les modules Apache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && a2enmod rewrite
