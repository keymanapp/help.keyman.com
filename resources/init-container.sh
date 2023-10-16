#!/usr/bin/env bash
rm -f keyboard/index.cache
php keyboard/index.php > /dev/null
# php ./cdn/cdnrefresh.php
