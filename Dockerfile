# syntax=docker/dockerfile:1
# Please keep the content of this file in sync with Podmanfile.

ARG BUILDER_CONFIGURATION="release"
FROM php:8.4-apache@sha256:51da594c844a97f31b1cd6b1ac6660982f40788f4fe13e75f7fd39e2f9b58651 AS composer-builder

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
# Consume the build argment
ARG BUILDER_CONFIGURATION
RUN if [ "$BUILDER_CONFIGURATION" = "debug" ]; then \
      # composer install --dev deprecated
      COMPOSER_NO_DEV=0 composer install ; \
    else \
      COMPOSER_NO_DEV=1 composer install ; \
    fi

# Site
FROM php:8.4-apache@sha256:51da594c844a97f31b1cd6b1ac6660982f40788f4fe13e75f7fd39e2f9b58651
COPY resources/keyman-site.conf /etc/apache2/conf-available/
RUN cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini
RUN chown -R www-data:www-data /var/www/html/

COPY --from=composer-builder /composer/vendor /var/www/vendor
RUN a2enmod rewrite headers; a2enconf keyman-site

# RUN echo LogLevel alert rewrite:trace6 >> /etc/apache2/apache2.conf
