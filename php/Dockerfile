FROM php:8-apache

# Install the PHP extensions we need:
# mysqli, pdo_mysql, gd
RUN set -ex; \
	apt-get update; \
	apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev; \
	docker-php-ext-install gd; \
	docker-php-ext-install mysqli; \
	docker-php-ext-install pdo_mysql; \
	docker-php-ext-configure gd --with-freetype --with-jpeg; \
	docker-php-ext-enable mysqli; \
	rm -rf /var/lib/apt/lists/*

# Enable RewriteEngine
RUN a2enmod rewrite
