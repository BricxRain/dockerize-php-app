FROM php:7.2-apache

RUN apt-get update && apt-get install -y

RUN docker-php-ext-install mysqli pdo_mysql

RUN mkdir /app \
 && mkdir /app/www \
 && mkdir /app/www/public

COPY www/public/ /app/www/public/

RUN cp -r /app/www/public/* /var/www/html/.

RUN chmod 777 -R /var/www/html/*