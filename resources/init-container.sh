#!/usr/bin/env bash

echo "--- Generating Keyboard Cache ---"
rm -f keyboard/index.cache
cd keyboard
php -d include_path=/var/www/html/_includes:. _build_cache.php
cd ..
# php ./cdn/cdnrefresh.php
