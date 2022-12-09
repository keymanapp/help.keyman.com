# syntax=docker/dockerfile:1
FROM php:7.4-apache AS builder
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN --mount=type=cache,target=/var/cache/apt,sharing=private \
    --mount=type=cache,target=/var/lib/apt,sharing=private \
  apt-get update && apt-get install -y unzip
USER www-data
WORKDIR /var/www/html
