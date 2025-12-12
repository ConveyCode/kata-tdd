FROM php:8.2-fpm

ENV COMPOSER_ALLOW_USERUSER 1

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

RUN install-php-extensions @composer bcmath zip

WORKDIR /app
