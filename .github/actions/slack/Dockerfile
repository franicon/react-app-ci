FROM php:8.0.1

WORKDIR /user/src/app
COPY . .
RUN  apt-get update
RUN apt-get -y install zip
RUN composer install

ENTRYPOINT ["php", "/user/src/app/script.php"]
