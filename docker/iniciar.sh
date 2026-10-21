#!/bin/sh
set -e

cd /var/www/html

if [ ! -f .env ]; then
    cp .env.example .env
fi

git config --global --add safe.directory /var/www/html

composer install --no-interaction --prefer-dist

if ! grep -q '^APP_KEY=base64:' .env; then
    php artisan key:generate --force
fi

chmod -R 777 storage bootstrap/cache

exec apache2-foreground