FROM php:8.0-apache 
RUN apt-get update
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli \
&& apt-get install -y libicu-dev \
&& docker-php-ext-configure intl \
&& docker-php-ext-install intl \
&& docker-php-ext-install pdo_mysql
WORKDIR /var/www/html
COPY index.php index.php
EXPOSE 7777