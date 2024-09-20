#!/usr/bin/env bash

echo "--- Generating Keyboard Cache ---"
rm -f keyboard/index.cache
cd keyboard
php -d include_path=/var/www/html/_includes:. _build_cache.php

if [[ ! $1 =~ "debug" ]]; then
  echo "---- Generating CDN ---"
  cd ../cdn
  php -d include_path=/var/www/html/_includes:. cdnrefresh.php
  cd ..
else
  echo "Skip Generating CDN"
fi
