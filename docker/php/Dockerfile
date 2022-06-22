FROM php:7.4-fpm

COPY . /web

WORKDIR /web

RUN apt-get update \
&& apt-get install -y zip unzip libzip-dev default-mysql-client \
&& docker-php-ext-install zip pdo_mysql

# Install composer for the application dependencies
RUN curl -sS https://getcomposer.org/installer | php \
&& mv composer.phar /bin/composer

# Install project dependencies
RUN composer install -noa
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli