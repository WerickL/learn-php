
FROM php:8.1.17-apache

RUN a2dismod mpm_event && a2enmod mpm_prefork 
RUN set -eux; 
RUN apt-get update \
 && apt-get install -y wget git
WORKDIR /var/www
ENV APACHE_RUN_USER=www-data
RUN  pecl install redis grpc\
 && docker-php-ext-configure intl \
 && docker-php-ext-install zip intl sockets \
 && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
 && docker-php-ext-install zip gd xml soap \
 && docker-php-ext-enable redis \
 && a2enmod rewrite \
&& sed -ri -e 's!/var/www/html!/var/www/public!g' /etc/apache2/sites-available/*.conf \
&& mv /var/www/html /var/www/public
RUN sed -ri -e 's!/var/www/!/var/www/public!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
RUN curl -sS https://getcomposer.org/installer \
  | php -- --install-dir=/usr/local/bin --filename=composer \
 && echo "AllowEncodedSlashes On" >> /etc/apache2/apache2.conf

RUN ls ./
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer install

