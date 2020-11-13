FROM php:7.4-apache

RUN apt-get update -y 
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
RUN apt-get install -y libicu-dev
RUN docker-php-ext-install intl
RUN a2enmod rewrite
RUN apache2ctl restart
