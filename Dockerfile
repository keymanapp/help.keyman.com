FROM php:7.4-apache
RUN a2enmod rewrite

[ENTRYPOINT ["docker-entrypoint.sh"]]
