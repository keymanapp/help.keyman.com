# syntax=docker/dockerfile:1
FROM composer/composer AS builder
WORKDIR composer
COPY --link composer.* ./
RUN composer install

FROM php:7.4-apache
RUN a2enmod rewrite
RUN sed -ri -e "s!DirectoryIndex index.php index.html!DirectoryIndex index.md index.php index.html!g" -e "s!</FilesMatch>!</FilesMatch>\n\n<FilesMatch \\.md$>\n\tSetHandler text/html\n</FilesMatch>!g" "/etc/apache2/conf-available/docker-php.conf"
RUN sed -ri -e "s!</VirtualHost>!\n        <Directory /var/www/html>                \n                Options +Includes +FollowSymLinks -MultiViews\n                AllowOverride All\n        </Directory>\n\n        php_value include_path \"/var/www/html/_includes:.\"\n</VirtualHost>!g" "/etc/apache2/sites-available/000-default.conf"
COPY --link --from=builder /composer/vendor /var/www/html/vendor

# RUN uses 
#RUN <<EOT \
#    a2enmod rewrite
#    sed -ri -e "s!DirectoryIndex index.php index.html!DirectoryIndex index.md index.php index.html!g" \
#            -e "s!</FilesMatch>!</FilesMatch>\n\n<FilesMatch \\.md$>\n\tSetHandler text/html\n</FilesMatch>!g" \
#            "/etc/apache2/conf-available/docker-php.conf"
#    sed -ri -e "s!</VirtualHost>!\n        <Directory /var/www/html>                \n                Options +Includes +FollowSymLinks -MultiViews\n                AllowOverride All\n        </Directory>\n\n        php_value include_path \"/var/www/html/_includes:.\"\n</VirtualHost>!g" \
#            "/etc/apache2/sites-available/000-default.conf"
#EOT
VOLUME /var/www/html