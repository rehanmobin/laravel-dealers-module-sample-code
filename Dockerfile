FROM php:8.1-apache

USER root
WORKDIR /var/www/html

COPY ./dev/docker/apache2/vhost.conf /etc/apache2/sites-available/000-default.conf

COPY . .

RUN apt-get update && apt-get install -y \
        libpng-dev \
        zlib1g-dev \
        libxml2-dev \
        libzip-dev \
        libonig-dev \
        zip \
        curl \
        vim \
        unzip \
    && docker-php-ext-configure gd \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install zip \
    && docker-php-source delete \
    && docker-php-ext-install exif \
    && docker-php-ext-enable exif

RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#RUN make pre-deploy
