FROM php:7.4.2

RUN apt-get update
RUN apt-get -y install zip
RUN composer install

COPY --from=composer /usr/bin/composer /user/bin/composer
WORKDIR /usr/src/app
COPY . .

ENTRYPOINT ["php", "/usr/src/app/script.php"]
