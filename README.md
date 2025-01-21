Cara Menjalankan Aplikasi
1.	Clone Repository GitHub
Pertama, clone repository dari GitHub menggunakan perintah:
•	git clone https://github.com/andre267-lyn/manajemen_tugas.git
•	cd (nama repository folder)

2.	Setup Environment
Salin file .env.example ke .env:

3.	Konfigurasi Database
Buka file .env dan sesuaikan konfigurasi database 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

4.	Generate Key Laravel
command :
php artisan key:generate

5.	Install Dependensi
command :
composer install

6.	Migrasi Database
Jalankan migrasi untuk membuat tabel yang dibutuhkan oleh aplikasi
command :
php artisan migrate

7.	Instalasi JWT Package
command :
composer require tymon/jwt-auth
Setelah itu, terbitkan konfigurasi JWT dengan perintah:
command :
php artisan jwt:secret

8.	Jalankan Server Laravel
command :
php artisan serve

9.	Database Migration
Jalankan perintah php artisan migrate untuk membuat tabel yang diperlukan di database. Tabel-tabel yang akan dibuat adalah:
•	users (untuk data pengguna)
•	tasks (untuk data tugas)
Jika ingin menghapus tabel dan memulai ulang migrasi, gunakan command
php artisan migrate:reset
php artisan serve
php artisan migrate

10.	Menjalankan Seeder (Opsional untuk data dummy) jika ingin mengisi database dengan data contoh, command: 
php artisan db:seed

11.	Unit Test
command:
•	php artisan make:test AuthControllerTest
•	php artisan test
•	menjalankan PHPUnit secara langsung: ./vendor/bin/phpunit
