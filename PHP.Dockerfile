FROM php:8.0-fpm

# RUN docker-php-ext-install mysqli

RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN pecl install xdebug && docker-php-ext-enable xdebug