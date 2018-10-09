FROM php:7.2-fpm

ARG userid

RUN [ -n "${userid}" ]] && usermod -u ${userid} www-data || true

COPY . /var/www/html

RUN docker-php-ext-install pdo_mysql \
    && docker-php-ext-install json \
    && apt-get update \
    && apt-get install -y \
        git \
        zlib1g-dev \
        bzip2 \
        xz-utils \
        libssl-dev \
        libicu-dev \
        ssh \
        libcurl4-openssl-dev \
        unzip \
 && rm -rf /var/lib/apt/lists/*

RUN echo "date.timezone = UTC" > /usr/local/etc/php/php.ini

EXPOSE 9000