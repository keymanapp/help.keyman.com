# syntax=docker/dockerfile:1
FROM php:7.4-apache AS builder
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN --mount=type=cache,target=/var/cache/apt,sharing=private \
    --mount=type=cache,target=/var/lib/apt,sharing=private \
<<EOT
  pecl install zip
  apt-get update
  apt-get install -y git unzip
EOT
USER www-data
WORKDIR /var/www/html
COPY --link composer.* ./
RUN composer install

FROM php:7.4-apache
COPY resources/keyman-site.conf /etc/apache2/conf-available/
COPY --link --chown=www-data --from=builder /var/www/html/vendor /var/www/vendor
RUN a2enmod rewrite; a2enconf keyman-site
