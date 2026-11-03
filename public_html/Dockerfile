FROM php:8.3-apache

RUN a2enmod rewrite
RUN a2enmod headers

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html