FROM php:7.3-fpm-alpine

WORKDIR /var/www

RUN apk update && apk add \
  build-base \
  vim

EXPOSE 9000