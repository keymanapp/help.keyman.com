# syntax=docker/dockerfile:1
FROM php:7.4-apache
COPY resources/keyman-site.conf /etc/apache2/conf-available/
RUN a2enmod rewrite; a2enconf keyman-site
