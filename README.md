# E-Learning Load Balancer with Docker Swarm & HAProxy
Proyek ini adalah implementasi sistem High Availability (HA) untuk aplikasi Learning Management System (LMS) berbasis web. Sistem ini dirancang untuk menangani lonjakan trafik (high traffic) menggunakan teknik clustering dan load balancing.

Arsitektur proyek dibangun di atas Ubuntu Server 22.04 LTS menggunakan Docker Swarm sebagai orkestrator kontainer dan HAProxy sebagai load balancer untuk mendistribusikan beban ke beberapa replika web server.

## 🏗️ Arsitektur Sistem
Sistem ini menggunakan topologi cluster yang terdiri dari 3 node server:
1. Manager Node (192.168.28.10): Bertindak sebagai koordinator cluster dan menjalankan Load Balancer (HAProxy).
2. Worker Node 1 (192.168.28.11): Menjalankan replika aplikasi web dan database.
3. Worker Node 2 (192.168.28.12): Menjalankan replika aplikasi web dan database.

## 🛠️ Komponen Teknologi & Tech Stack

Proyek ini dibangun menggunakan arsitektur multi-layer, memadukan infrastruktur server HA dengan aplikasi web e-learning yang interaktif:

### 1. Infrastruktur & Orkestrasi
- **Sistem Operasi**: Ubuntu Server 22.04 LTS
- **Orkestrasi Kontainer**: Docker Swarm (Clustering & High Availability)
- **Load Balancer**: HAProxy (Image Custom dengan konfigurasi statistik *enabled*)

### 2. Backend & Web Server
- **Web Server**: Apache
- **Bahasa Pemrograman**: PHP 7.1
- **Framework Aplikasi**: CodeIgniter 3 (Arsitektur MVC - Model View Controller)
- **Database**: MariaDB 10.7.8

### 3. Frontend & UI/UX (Aplikasi Web)
- **Markup & Styling**: HTML5, CSS3, JavaScript
- **CSS Framework**: Bootstrap 4
- **Libraries & Plugins**:
  - jQuery 3.3.1 (Manipulasi DOM)
  - SweetAlert2 (Interaksi *alert* dan notifikasi yang responsif)
  - AOS (*Animate On Scroll*) untuk animasi elemen antarmuka
  - Owl Carousel, Isotope, Magnific Popup, SimpleLightbox
- **Tipografi & Ikon**: Google Fonts (Roboto, Poppins), FontAwesome, Linearicons

### 4. Komponen Tambahan
- **Integrasi Pihak Ketiga**: Disqus (Untuk fitur diskusi dan reaksi secara real-time)
- **Keamanan**: Docker Secrets (Untuk manajemen password root database secara aman)

## 📂 Struktur Direktori
```
.
├── docker-compose.yml       # Konfigurasi layanan Stack Docker Swarm
├── db/
│   ├── Dockerfile           # Konfigurasi image MariaDB
│   └── learnify.sql         # Skema database awal
├── haproxy/
│   ├── Dockerfile           # Konfigurasi image HAProxy
│   └── haproxy.cfg          # Konfigurasi Load Balancing & Statistik
└── web/
    ├── Dockerfile           # Konfigurasi image Web App (PHP 7.1)
    ├── app/                 # Source code aplikasi web (index.php, css, dll)
    └── conf/
        └── 000-default.conf # Konfigurasi VirtualHost Apache
```

## ⚙️ Prasyarat 
Sebelum menjalankan proyek, pastikan lingkungan Anda memenuhi syarat berikut:
- OS: Ubuntu Server 22.04 LTS.
- Docker: Versi 23.0.1 atau lebih baru.
- Koneksi Antar Node: Pastikan semua node (Manager & Workers) dapat saling ping dan port berikut terbuka:
  - TCP port 2377 (Cluster management)
  - TCP/UDP port 7946 (Communication among nodes)
  - UDP port 4789 (Overlay network traffic)

## 🚀 Instalasi & Deployment
1. Inisialisasi Docker Swarm, pada Node Manager jalankan perintah inisialisasi:
```
docker swarm init --advertise-addr 192.168.28.10
```

2. Salin token yang dihasilkan, lalu jalankan pada Node Worker 1 dan Node Worker 2 untuk menggabungkan mereka ke dalam cluster:
```
docker swarm join --token <TOKEN_ANDA> 192.168.28.10:2377
```

3. Membuat Database Secret, Untuk keamanan password root database disimpan menggunakan Docker Secret. Jalankan perintah ini di Node Manager:
```
echo '280105' | docker secret create mysql_root_password -
```

4. Build & Push Image, Sesuaikan username_dockerhub dengan akun Docker Hub Anda (sesuai konfigurasi di docker-compose.yml).
```
# Build Image Database
docker build -t username_dockerhub/mariadb:10.7.8 ./db

# Build Image HAProxy
docker build -t username_dockerhub/haproxy:latest ./haproxy

# Build Image Web App
docker build -t username_dockerhub/app-learnify:latest ./web
```
Opsional: Jika menggunakan multi-node, disarankan untuk push image ke registry agar bisa di-pull oleh worker node.
```
docker push username_dockerhub/mariadb:10.7.8
docker push username_dockerhub/haproxy:latest
docker push username_dockerhub/app-learnify:latest
```

5. Deploy Stack, Jalankan perintah berikut pada Node Manager untuk menyebarkan layanan ke seluruh cluster:
```
docker stack deploy -c docker-compose.yml bale --with-registry-auth
```

6. Verifikasi Deployment, cek status layanan untuk memastikan semua replika berjalan (4 replika App, 2 replika DB, 1 replika LB):
```
docker service ls
```
