FROM node:20-alpine AS node-builder

# Build frontend assets
WORKDIR /app

# Copy package files first
COPY package*.json ./

# Install dependencies
RUN npm install

# Copy configuration files
COPY vite.config.js ./
COPY postcss.config.js* ./
COPY tailwind.config.js* ./

# Copy ALL source files needed for build
COPY resources ./resources
COPY public ./public

# Debug: Check if input files exist
RUN echo "Checking input files:" && \
    ls -la resources/css/ && \
    ls -la resources/js/ && \
    ls -la resources/js/pages/ || echo "Pages directory missing"

# Build assets for production
RUN echo "Starting Vite build..." && \
    npm run build 2>&1 | tee build.log && \
    echo "Build completed!"

# Verify build output (check what was actually created)
RUN echo "Checking build output:" && \
    ls -la public/build/ && \
    echo "Files in assets:" && \
    ls -la public/build/assets/ || echo "No assets folder" && \
    echo "All files:" && \
    find public/build -type f || echo "Build directory is empty"

# PHP Stage
FROM php:8.3-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libicu-dev \
    zip \
    unzip \
    nginx \
    supervisor

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-configure intl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip intl

# Get Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy composer files
COPY composer.json composer.lock ./

# Install PHP dependencies
RUN composer install --optimize-autoloader --no-dev --no-scripts

# Copy application files
COPY . /var/www

# Copy built assets from node-builder
COPY --from=node-builder /app/public/build /var/www/public/build

# Verify assets were copied
RUN echo "Verifying copied assets:" && \
    ls -la /var/www/public/build/ && \
    find /var/www/public/build -type f || echo "No files found in build directory"

# Run composer scripts
RUN composer run-script post-autoload-dump

# Create necessary directories
RUN mkdir -p /var/www/storage/logs \
    && mkdir -p /var/www/storage/framework/sessions \
    && mkdir -p /var/www/storage/framework/views \
    && mkdir -p /var/www/storage/framework/cache \
    && mkdir -p /var/www/storage/app/public \
    && mkdir -p /var/www/bootstrap/cache

# Set permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 /var/www/storage \
    && chmod -R 775 /var/www/bootstrap/cache

# Copy configuration files
COPY docker/nginx.conf /etc/nginx/sites-available/default
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker/start.sh /start.sh

RUN chmod +x /start.sh

# Expose port
EXPOSE 8080

CMD ["/start.sh"]