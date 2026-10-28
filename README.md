# NEOSANTARA ERP
### Sistem Enterprise PT Neosantara Group

**Mata Kuliah:** Sistem Enterprise  
**Teknologi:** Laravel, FilamentPHP v5, MySQL  
**Repository:** https://github.com/intanbaiduri2112-bit/kelompokbaddie-intanfatma

## Deskripsi
Neosantara ERP merupakan aplikasi berbasis web untuk membantu proses bisnis PT Neosantara Group, khususnya pengelolaan prospek pelanggan dan kampanye pemasaran.

## Anggota dan Pembagian Tugas
1. Ketua tim — Prospek Pelanggan, inisialisasi project, dan repository GitHub.
2. Fatmaa (`fatmaa-spec`) — Kampanye Pemasaran.

## Modul Sistem
### 1. Prospek Pelanggan
- Mengelola data calon pelanggan.
- Menyimpan kontak dan sumber prospek.
- Mengelola status serta tindak lanjut.
- Mencari dan mengedit data prospek.

### 2. Kampanye Pemasaran
- Mengelola nama dan jenis kampanye.
- Menentukan target audiens dan anggaran.
- Mencatat periode kampanye.
- Mengelola status kampanye.

## Teknologi
- Laravel
- FilamentPHP v5
- PHP
- MySQL
- Git dan GitHub

## Screenshot Aplikasi
### Dashboard ERP
Tambahkan screenshot dashboard di sini.
<img width="959" height="426" alt="image" src="https://github.com/user-attachments/assets/c8a3ffec-a7e9-45e4-a419-80a3fc2942e2" />

### Modul Prospek Pelanggan
Tambahkan screenshot daftar prospek dan form tambah/edit.
<img width="1533" height="713" alt="image" src="https://github.com/user-attachments/assets/8efc25a5-d2b8-465a-a06d-e0888c48e95e" />

### Modul Kampanye Pemasaran
Tambahkan screenshot daftar kampanye dan form tambah/edit.
<img width="959" height="433" alt="image" src="https://github.com/user-attachments/assets/a44f2fcf-8298-44b7-a7cc-915667be128d" />

## Cara Menjalankan Project
1. Clone repository.
2. Jalankan `composer install`.
3. Salin `.env.example` menjadi `.env`.
4. Atur konfigurasi database.
5. Jalankan `php artisan key:generate`.
6. Jalankan `php artisan migrate`.
7. Buat akun admin menggunakan `php artisan make:filament-user`.
8. Jalankan `php artisan serve`.
9. Buka `/admin` di browser.
