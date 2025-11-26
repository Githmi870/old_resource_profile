#!/bin/bash

set -e

echo "========================================="
echo "Starting Laravel 12 Application"
echo "========================================="

# Function to handle errors
handle_error() {
    echo "ERROR: $1"
    exit 1
}

# Set proper permissions
echo "→ Setting permissions..."
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache || handle_error "Failed to set permissions"
chmod -R 775 /var/www/storage /var/www/bootstrap/cache || handle_error "Failed to chmod directories"

# Wait for database to be ready
echo "→ Waiting for database connection..."
MAX_ATTEMPTS=30
ATTEMPT=0

until php artisan db:show 2>/dev/null || [ $ATTEMPT -eq $MAX_ATTEMPTS ]; do
    ATTEMPT=$((ATTEMPT+1))
    echo "   Attempt $ATTEMPT/$MAX_ATTEMPTS - waiting for database..."
    sleep 2
done

if [ $ATTEMPT -eq $MAX_ATTEMPTS ]; then
    echo "WARNING: Could not connect to database after $MAX_ATTEMPTS attempts. Continuing anyway..."
else
    echo "✓ Database connection established"
fi

# Run migrations
echo "→ Running migrations..."
php artisan migrate --force || handle_error "Migration failed"
echo "✓ Migrations completed"

# Run seeders (only if SEED_DB is set to true)
if [ "$SEED_DB" = "true" ]; then
    echo "→ Running seeders..."
    php artisan db:seed --force || echo "WARNING: Seeding failed but continuing..."
    echo "✓ Seeders completed"
else
    echo "→ Skipping seeders (SEED_DB not set to true)"
fi

# Create storage link if it doesn't exist
if [ ! -L /var/www/public/storage ]; then
    echo "→ Creating storage link..."
    php artisan storage:link || echo "WARNING: Storage link creation failed"
    echo "✓ Storage link created"
else
    echo "→ Storage link already exists"
fi

# Clear all caches
echo "→ Clearing caches..."
php artisan config:clear || true
php artisan route:clear || true
php artisan view:clear || true
php artisan cache:clear || true
echo "✓ Caches cleared"

# Optimize for production
echo "→ Optimizing application..."
php artisan config:cache || echo "WARNING: Config cache failed"
php artisan route:cache || echo "WARNING: Route cache failed"
php artisan view:cache || echo "WARNING: View cache failed"
echo "✓ Optimization completed"

# Verify Vite manifest exists
if [ -f /var/www/public/build/manifest.json ]; then
    echo "✓ Vite manifest found"
else
    echo "WARNING: Vite manifest not found at /var/www/public/build/manifest.json"
    echo "   This may cause issues with asset loading"
fi

# Display application info
echo "========================================="
echo "Application Information:"
echo "→ Environment: ${APP_ENV:-production}"
echo "→ Debug Mode: ${APP_DEBUG:-false}"
echo "→ URL: ${APP_URL:-not set}"
echo "→ Database: ${DB_CONNECTION:-not set}"
echo "========================================="

# Start supervisord (manages PHP-FPM and Nginx)
echo "→ Starting services (PHP-FPM + Nginx)..."
echo "========================================="

exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf