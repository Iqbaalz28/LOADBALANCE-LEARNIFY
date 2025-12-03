# Menggunakan PHP 7.1 dengan Apache 
FROM php:7.1-apache

# Update dan install ekstensi mysqli pdo pdo_mysql 
RUN apt-get update && \
    docker-php-ext-install mysqli pdo pdo_mysql && \
    a2enmod rewrite && \
    chmod -R 755 /var/www/html

WORKDIR /var/www/html

# Menyalin source code aplikasi 
COPY ./app /var/www/html

# Menyalin konfigurasi virtual host apache 
COPY ./conf/000-default.conf /etc/apache2/sites-available/000-default.conf

CMD ["apache2ctl", "-D", "FOREGROUND"]