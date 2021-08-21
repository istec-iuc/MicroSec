FROM php:8-apache

# Berkant DEMİRCİ

RUN apt-get update && apt-get install -y \
    ssh \
    libssh2-1 \
    libssh2-1-dev \
    wget \
    libssl-dev \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

COPY vhost.conf /usr/local/apache2/conf/demo.apache.conf
RUN echo "Include /usr/local/apache2/conf/demo.apache.conf" \
    >> /usr/local/apache2/conf/httpd.conf

# Install ssh2 extension
RUN wget -O libssh2.tar.gz https://www.libssh2.org/download/libssh2-1.8.1.tar.gz \
    && wget -O ssh2.tgz https://pecl.php.net/get/ssh2-1.3.1.tgz \
    && mkdir libssh2 && tar vxzf libssh2.tar.gz -C libssh2 --strip-components 1 \
    && mkdir ssh2 && tar vxzf ssh2.tgz -C ssh2 --strip-components 1 \
    && cd libssh2 && ./configure \
    && make && make install \
    && cd ../ssh2 && phpize && ./configure --with-ssh2 \
    && make && make install \
    && echo "extension=ssh2.so" >> /usr/local/etc/php/conf.d/ssh2.ini \
    && cd ../ && rm -rf libssh2.tar.gz ssh2.tgz ssh2 libssh2

RUN apt update && apt upgrade -y
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN chmod 755 /var/www/html


