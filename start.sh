#!/bin/bash

# Start PHP-FPM in background
php-fpm -D

# Run migrations (optional)
php artisan migrate --force
php artisan db:seed --force
# Cache config
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start Nginx in foreground
nginx -g "daemon off;"