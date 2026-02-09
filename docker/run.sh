#!/bin/sh

cd /var/www/html

# Check for critical extensions
php -m | grep -q curl || echo "❌ CRITICAL: PHP curl extension is MISSING"
php -m | grep -q soap || echo "❌ CRITICAL: PHP soap extension is MISSING"

# Clear caches if they exist
php artisan optimize:clear

# Cache configuration and routes (optional, but good for prod)
# We use || true to ensure container starts even if this fails due to missing DB connection initially
php artisan package:discover || true
php artisan config:cache || true
# Route caching disabled - project has duplicate route names across modules
# php artisan route:cache || true
php artisan view:cache || true

# Start Nginx in background
nginx

# Start PHP-FPM in foreground
php-fpm
