# syntax=docker/dockerfile:1
FROM php:7.4-apache AS builder
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN --mount=type=cache,target=/var/cache/apt,sharing=private \
    --mount=type=cache,target=/var/lib/apt,sharing=private \
  apt-get update && apt-get install -y unzip
USER www-data
WORKDIR /var/www/html
#COPY composer.* ./

# Clean:
# rm vendor


# Configure:
# if [[ ! -d vendor/ ]];
#  docker build -t keyman-composer:latest .
#  docker run --rm   -v //$(pwd)/composer.json:/var/www/html/composer.json:ro -v  //$(pwd)/composer.lock:/var/www/html/composer.lock:rw -u root -v //$(pwd)/vendor:/var/www/html/vendor:rw --entrypoint ///usr/bin/composer keyman-composer:latest install

# Debugging
#  winpty docker run --rm -it  -v //$(pwd)/composer.json:/var/www/html/composer.json:ro -v  //$(pwd)/composer.lock:/var/www/html/composer.lock:rw -u root -v //$(pwd)/vendor:/var/www/html/vendor:rw --entrypoint sh keyman-composer:latest
