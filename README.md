# 🍰 SWEETRECIPE - Sistem Informasi Katalog Resep Dessert

![Laravel](https://img.shields.io/badge/Laravel-12.x-red?logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.3-blue?logo=php)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-purple?logo=bootstrap)
![MariaDB](https://img.shields.io/badge/MariaDB-10.11-blue?logo=mariadb)
![Docker](https://img.shields.io/badge/Docker-Supported-blue?logo=docker)

## 📌 Tentang Proyek

**SWEETRECIPE** adalah sistem informasi katalog resep dessert berbasis website yang menyediakan informasi resep dessert secara terstruktur. Sistem ini membantu pengguna menemukan rekomendasi dessert berdasarkan kebutuhan tertentu, seperti dessert untuk **diet**, **mood booster**, atau **penambah berat badan**.

Proyek ini dibuat sebagai **Tugas Akhir Mata Kuliah Pemrograman Web** oleh:

| Nama | NIM |
|------|-----|
| Alya Nurul Qolbi | 20240803061 |

**Dosen Pengampu:** Jefry Sunupurwa Asri S.Kom., M.Kom.

---

## ✨ Fitur Utama

| Fitur | Keterangan |
|-------|-------------|
| 🍽️ **Katalog Resep** | Menampilkan daftar resep dessert lengkap dengan gambar dan deskripsi |
| 💡 **Rekomendasi Dessert** | Rekomendasi berdasarkan kategori: Diet, Mood Booster, Penambah Berat Badan |
| 🔍 **Detail Resep** | Menampilkan bahan-bahan dan langkah pembuatan |
| 💾 **Simpan Resep** | Pengguna bisa menyimpan resep favorit ke localStorage |
| 🖥️ **Dashboard Admin** | Admin dapat mengelola data resep (CRUD) menggunakan Filament V3 |
| 📱 **Responsive Design** | Tampilan mobile-friendly dengan Bootstrap 5 |

---

## 🛠️ Teknologi yang Digunakan

| Teknologi | Kegunaan |
|-----------|----------|
| **Laravel 12** | Framework utama backend |
| **Bootstrap 5** | Styling dan layout responsive |
| **MariaDB** | Database management system |
| **Docker** | Development environment |
| **Filament V3** | Admin panel untuk CRUD |
| **Livewire** | Komponen interaktif |
| **Font Awesome** | Ikon-ikon menarik |

---

## 🚀 Cara Menjalankan Proyek

### Prasyarat

- PHP >= 8.3
- Composer
- Docker (opsional)

### 1. Clone Repository

```bash
git clone https://github.com/NAMA_USER_GITHUB_ANDA/sweetrecipe.git
cd sweetrecipe
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Konfigurasi Environment

```bash
cp .env.example .env
php artisan key:generate
```

Edit file `.env` sesuai database:

```env
DB_CONNECTION=mariadb
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sweetrecipe
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Jalankan Migrasi Database

```bash
php artisan migrate --seed
```

### 5. Jalankan Server

```bash
php artisan serve
```

### 6. Akses Website

Buka browser: `http://127.0.0.1:8000`

---

## 🐳 Menjalankan dengan Docker

```bash
docker compose up -d
docker compose exec php composer install
docker compose exec php php artisan migrate
```

Akses: `http://project_pemweb.test`

---

## 📂 Struktur Folder Penting

```
sweetrecipe/
├── app/
│   ├── Http/Controllers/     # Controller aplikasi
│   ├── Models/               # Model database
│   └── Filament/             # Admin panel
├── resources/
│   └── views/                # Blade templates
│       ├── dessert.blade.php # Halaman utama
│       ├── portofolio.blade.php
│       └── partials/         # Modal-modal resep
├── public/
│   └── assets/               # CSS, JS, images
├── routes/
│   └── web.php               # Routing
└── database/
    └── migrations/           # Struktur database
```

---

## 👥 Hak Akses

| Role | Akses |
|------|-------|
| **User (Pengunjung)** | - Melihat katalog resep<br>- Mencari resep<br>- Melihat rekomendasi<br>- Menyimpan resep |
| **Admin** | - Login ke dashboard<br>- CRUD resep dessert<br>- CRUD kategori<br>- Upload gambar |

---

## 📞 Kontak

Jika ada pertanyaan, silakan hubungi:

- **Email:** nurulqolbialya@gmail.com
- **Instagram:** @alyanrlql
- **Telepon:** 083894951894

---

## 📄 Lisensi

Proyek ini dibuat untuk tujuan **akademik** sebagai tugas mata kuliah Pemrograman Web.

---

**© 2024-2026 SweetRecipe | Alya Nurul Qolbi - Universitas Esa Unggul**
