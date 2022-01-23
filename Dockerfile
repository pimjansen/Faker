FROM php:7.4-fpm-alpine

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/
COPY --from=composer:latest /usr/bin/composer /usr/bin

RUN apk add zip git make && \
    install-php-extensions intl mbstring curl dom

RUN cp /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini
RUN echo "memory_limit = 512M" >> /usr/local/etc/php/conf.d/memory_limit.ini

# docker build -t faker-dev:latest .
# docker run -d --name faker-dev -v $(pwd):/var/www/html faker-dev:latest
# docker exec -it faker-dev sh
