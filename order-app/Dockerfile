FROM php:8.0-fpm

USER root

RUN apt update \
    && apt install -y zlib1g-dev g++ git libicu-dev zip libzip-dev zip \
    && docker-php-ext-install intl opcache pdo pdo_mysql \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

RUN apt update \
    && pecl install redis \
    && docker-php-ext-enable redis

WORKDIR /var/www/order-app

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -sS https://get.symfony.com/cli/installer | bash
RUN mv /root/.symfony/bin/symfony /usr/local/bin/symfony
RUN git config --global user.email "jqhelp@gmail.com" \ 
    && git config --global user.name "Tyrqvir"

CMD test ! -f /var/www/html/order-app/symfony.lock && \
    composer create-project symfony/website-skeleton order-app; \
    cd /var/www/html/order-app; \
    symfony server:start;