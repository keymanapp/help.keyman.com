# syntax=docker/dockerfile:1
FROM php:7.4-apache AS composer-builder

# Install Zip to use composer
RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    unzip
RUN docker-php-ext-install zip

# Install and update composer
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN composer self-update

USER www-data
WORKDIR /composer
COPY composer.* /composer/
RUN composer install

# Site
FROM php:7.4-apache
COPY resources/keyman-site.conf /etc/apache2/conf-available/
RUN chown -R www-data:www-data /var/www/html/

COPY --from=composer-builder /composer/vendor /var/www/vendor
RUN a2enmod rewrite; a2enconf keyman-site

# build.sh configure later needed to COPY /var/www/vendor to /var/www/html/vendor
