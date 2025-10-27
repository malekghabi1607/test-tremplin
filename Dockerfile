# Image multi-arch officielle (dispo en arm64)
FROM php:8.3-apache

# Installer pdo_mysql pour PHP
RUN docker-php-ext-install pdo pdo_mysql

# Activer mod_rewrite (utile pour Apache si besoin)
RUN a2enmod rewrite

# Dossier web
WORKDIR /var/www/html