FROM php:8.3-apache

RUN apt-get update \
    && apt-get install -y --no-install-recommends msmtp \
    && rm -rf /var/lib/apt/lists/*

RUN a2enmod rewrite
RUN a2enmod headers

RUN echo 'sendmail_path = "/usr/bin/msmtp --host=mailpit --port=1025 --auth=off --tls=off --from=noreply@kevinleonard.fr -t"' > /usr/local/etc/php/conf.d/mail.ini

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html