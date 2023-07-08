FROM php:7.4-cli

ENV TERM xterm

ENV TZ=UTC

RUN apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
    bash \
    vim \
    mc \
    git \
    zip \
    libmagickwand-dev \
    libmagickcore-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libcurl4-openssl-dev \
    zlib1g-dev \
    libicu-dev \
    libssl-dev \
    libzip-dev \
    && rm -rf /var/lib/apt/lists/*

RUN \
    docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd \
    && docker-php-ext-configure mysqli --with-mysqli=mysqlnd \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        bcmath \
        gd \
        intl \
        mysqli \
        pdo_mysql \
        zip \
    && pecl install redis-5.3.0 \
    && docker-php-ext-enable redis \
    && rm -rf /var/lib/apt/lists/*
