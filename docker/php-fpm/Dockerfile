FROM php:8.0-fpm-alpine
WORKDIR "/"

# docker-php-extension-installer
# @see https://github.com/mlocati/docker-php-extension-installer
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions gd imagick mysqli pdo_mysql gd opcache pdo pdo_pgsql soap pgsql zip pcntl @composer

# Project-specific ini settings
COPY ./php-ini-overrides.ini /usr/local/etc/php/php.ini
