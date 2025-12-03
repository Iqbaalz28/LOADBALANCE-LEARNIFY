# Menggunakan mariadb:10.7.8 sebagai base image 
FROM mariadb:10.7.8

# Mengekspos port default database 
EXPOSE 3306

USER root

# Mengatur hak akses direktori mysql 
RUN chmod 755 /var/lib/mysql

WORKDIR /var/lib/mysql

# Menyalin file skema database ke direktori inisialisasi docker 
COPY learnify.sql /docker-entrypoint-initdb.d/