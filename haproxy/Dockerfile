# Base image HAProxy versi 2.8-dev3 pada Alpine Linux 
FROM haproxy:2.8-dev3-alpine3.17

USER root

# Port 80 untuk trafik web dan 8404 untuk statistik 
EXPOSE 80
EXPOSE 8404

# Menjalankan HAProxy dengan konfigurasi custom 
CMD ["haproxy", "-f", "/usr/local/etc/haproxy/haproxy.cfg"]