FROM php:7.4-fpm

#USER ubuntu:ubuntu

WORKDIR /home/ubuntu 

EXPOSE 9000

CMD ["php-fpm"]
