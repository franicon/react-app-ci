FROM php:7.4.2

COPY --from=composer /user/bin/composer /user/bin/composer

WORKDIR /user/src/app
COPY . .
RUN apt-get update
RUN apt-get -y install zip
RUN composer install

ENTRYPOINT ["php", "/user/src/app/script.php"]
