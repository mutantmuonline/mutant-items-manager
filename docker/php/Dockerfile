FROM php:7.4-fpm

RUN apt-get update
RUN apt-get install -y unzip git nano bash

###> Xdebug library ###
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

###> Composer ###
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY conf.d/php.ini /usr/local/etc/php/conf.d/docker_php.ini

WORKDIR /var/www
