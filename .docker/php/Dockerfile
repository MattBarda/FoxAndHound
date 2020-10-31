FROM php:7.4-fpm

ENV \
    PHP_MEMORY_LIMIT=1024M \
    PHP_UPLOAD_MAX_FILESIZE=32M \
    PHP_POST_MAX_SIZE=32M \
    COMPOSER_MEMORY_LIMIT=-1

RUN docker-php-ext-install pdo_mysql

RUN pecl install apcu

RUN apt-get update && \
apt-get install -y \
libzip-dev \
zip

RUN docker-php-ext-install zip
RUN docker-php-ext-enable apcu

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --filename=composer \
    && php -r "unlink('composer-setup.php');" \
    && mv composer /usr/local/bin/composer

WORKDIR /usr/src/app

COPY . /usr/src/app
COPY .env /usr/src/app

RUN set -eux; \
    composer update; \
    composer install --prefer-dist --no-autoloader --no-scripts --no-progress; \
    composer clear-cache

RUN set -eux; \
    mkdir -p var/cache var/log; \
    composer dump-autoload --classmap-authoritative --no-dev; \
    chmod +x bin/console; sync

