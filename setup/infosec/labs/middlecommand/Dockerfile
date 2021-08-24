FROM php:8-apache 

RUN apt update && apt upgrade -y
RUN apt install iputils-ping -y 
COPY command2.php /var/www/html/index.php
