FROM php:8-apache 

RUN apt update && apt upgrade -y
RUN apt install iputils-ping -y 
COPY command3.php /var/www/html/index.php
