FROM php:8.1.0beta3-fpm-alpine3.14
COPY . /app
WORKDIR /app