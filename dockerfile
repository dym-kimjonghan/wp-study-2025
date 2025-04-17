FROM wordpress:latest
COPY ./php.ini /usr/local/etc/php/php.ini

RUN apt-get update
RUN apt-get install -y vim