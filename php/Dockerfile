FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
        curl \
        wget \
        git \
        libapache2-mod-fcgid \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
	libpng-dev \
	libonig-dev \
	libzip-dev \
	libmcrypt-dev \
    libpq-dev \
    locales \
    zip \
    unzip \
    vim

RUN docker-php-ext-install gd
RUN docker-php-ext-install pdo pdo_mysql

ADD php.ini /usr/local/etc/php/conf.d/40-custom.ini

WORKDIR /var/www

CMD ["php-fpm"]