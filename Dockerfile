FROM php:8.1-apache

# Activer pdo, conf et la réécriture d'url
RUN docker-php-ext-install pdo pdo_mysql \
    && a2enconf dfs-cours \
    && a2enmod rewrite