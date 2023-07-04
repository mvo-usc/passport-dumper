FROM php:8.1-alpine as base

ENV COMPOSER_ALLOW_SUPERUSER 1 

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install Protobuf
RUN apk update && apk add --no-cache make protobuf-dev
# RUN php ./vendor/bin/protobuf --include-descriptors -i . -o ./app/src ./addressbook.proto

COPY . .

WORKDIR /

RUN composer install

EXPOSE 8888

CMD [ "php", "-S", "0.0.0.0:8888", "src/cli/server.php" ]