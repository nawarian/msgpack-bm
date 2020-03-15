FROM php:7.4-cli

RUN pecl install msgpack-2.1.0 \
  && docker-php-ext-enable msgpack

ENTRYPOINT ["php"]
