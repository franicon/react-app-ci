FROM php:7.4.2

COPY --from=composer /usr/bin/composer /user/bin/composer

WORKDIR /usr/src/app
COPY . .
RUN apt-get update
RUN apt-get -y install zip
RUN composer install

ENTRYPOINT ["php", "/user/src/app/script.php"]
