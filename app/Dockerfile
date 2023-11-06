FROM php:8.0-apache as base
RUN apt-get -y update && apt-get upgrade
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN docker-php-ext-enable mysqli
COPY ./src /var/www/html
COPY ./php.ini /usr/local/etc/