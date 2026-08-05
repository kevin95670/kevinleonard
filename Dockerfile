FROM php:8.2-apache

# Active le module rewrite d'Apache (utile si tu as des .htaccess)
RUN a2enmod rewrite
RUN a2enmod headers

# On copie le contenu de public_html/, pas tout le repo
COPY public_html/ /var/www/html/

# Permissions correctes
RUN chown -R www-data:www-data /var/www/html