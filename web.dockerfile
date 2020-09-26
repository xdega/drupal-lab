FROM php:7.4-apache

RUN apt-get update && apt-get install -y --fix-missing \
    apt-utils \
    gnupg

RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    libpng-dev

RUN docker-php-ext-install gd pdo pdo_mysql