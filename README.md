# MVC PHP Native - Data Film

Aplikasi CRUD sederhana untuk mempelajari pola Model-View-Controller pada PHP Native.

## Kebutuhan
- PHP 8.0 atau lebih baru
- MySQL/MariaDB
- Web server lokal seperti Laragon atau XAMPP
- Git

## Instalasi
1. Clone atau salin project ke folder web server.
2. Import `database/film.sql` ke phpMyAdmin.
3. Sesuaikan koneksi pada `config/database.php` jika perlu.
4. Buka `http://localhost/mvc_film_abhista/public/index.php` di browser.

## Struktur MVC
- `app/models/` : akses dan operasi data.
- `app/controllers/` : alur request dan pemanggilan Model/View.
- `app/views/` : tampilan HTML.
- `config/` : konfigurasi koneksi database.
- `database/` : skema dan data awal SQL.
- `public/` : entry point aplikasi.

## Fitur
- Menampilkan data film
- Menambah data film
- Mengubah data film
- Menghapus data film

## Histori Git
Berikut adalah riwayat commit pengembangan proyek ini:

* fcd6999 (HEAD -> main) Feat : controller dan index public
* e1a5258 feat: add complete CRUD routing
* cfe528e feat: add complete film CRUD views
* 52645c1 feat: add complete film  CRUD controller
* 5c665c1 feat: add complete FILM CRUD model
* cce1d97 feat: add PDO database connection
* 5fad0a2 feat: add film database schema and seed data
* 980d357 chore: initialize mvc php native project