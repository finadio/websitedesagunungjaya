# Website Desa Gunungjaya

![Laravel](https://img.shields.io/badge/Laravel-12.50-red?style=flat-square&logo=laravel)
![Filament](https://img.shields.io/badge/Filament-5.2-orange?style=flat-square)
![Vue.js](https://img.shields.io/badge/Vue.js-3.x-green?style=flat-square&logo=vue.js)
![Inertia.js](https://img.shields.io/badge/Inertia.js-2.0-purple?style=flat-square)
![PHP](https://img.shields.io/badge/PHP-8.3+-blue?style=flat-square&logo=php)
![License](https://img.shields.io/badge/License-MIT-yellow?style=flat-square)

Website resmi Desa Gunungjaya yang dibangun dengan teknologi modern untuk memberikan informasi, layanan, dan transparansi kepada masyarakat.

## 📋 Daftar Isi

- [Tentang Project](#-tentang-project)
- [Fitur Utama](#-fitur-utama)
- [Tech Stack](#-tech-stack)
- [Prerequisites](#-prerequisites)
- [Instalasi](#-instalasi)
- [Konfigurasi](#-konfigurasi)
- [Menjalankan Aplikasi](#-menjalankan-aplikasi)
- [Struktur Project](#-struktur-project)
- [Admin Panel](#-admin-panel)
- [Seeding Data](#-seeding-data)
- [Pengembangan](#-pengembangan)
- [Deployment](#-deployment)
- [Troubleshooting](#-troubleshooting)
- [Kontribusi](#-kontribusi)
- [Lisensi](#-lisensi)

## 🎯 Tentang Project

Website Desa Gunungjaya adalah platform digital yang dirancang untuk meningkatkan transparansi dan pelayanan publik di tingkat desa. Website ini menyediakan informasi profil desa, berita, agenda kegiatan, galeri foto, layanan publik, serta sistem pengaduan masyarakat.

### Tujuan

- **Transparansi**: Memberikan akses informasi desa kepada masyarakat
- **Pelayanan**: Menyediakan informasi layanan publik yang mudah diakses
- **Partisipasi**: Memfasilitasi pengaduan dan aspirasi masyarakat
- **Dokumentasi**: Mendokumentasikan kegiatan dan perkembangan desa

## ✨ Fitur Utama

### Frontend (Public)

- 🏠 **Halaman Beranda**: Tampilan modern dengan informasi ringkas
- 📰 **Berita & Pengumuman**: Artikel berita dengan kategori dan pencarian
- 📅 **Agenda Kegiatan**: Kalender kegiatan desa
- 🖼️ **Galeri Foto**: Dokumentasi kegiatan dalam galeri
- 👥 **Profil Desa**: 
  - Sejarah Desa
  - Visi & Misi
  - Struktur Pemerintahan Desa
  - Perangkat Desa (Kepala Desa, Sekdes, Kaur, Kasi, Kadus)
- 🏛️ **Lembaga Desa**:
  - BPD (Badan Permusyawaratan Desa)
  - LPM (Lembaga Pemberdayaan Masyarakat)
  - PKK (Pembinaan Kesejahteraan Keluarga)
  - Karang Taruna
  - Posyandu (5 posyandu dengan kader)
- 📊 **Data Statistik**: Data kependudukan dan demografi
- 📝 **Layanan Publik**: Informasi persyaratan dan prosedur layanan
- 💬 **Pengaduan Masyarakat**: Sistem pengaduan online dengan tracking
- 🗺️ **Informasi Wilayah**: Peta dan batas wilayah desa

### Backend (Admin Panel)

- 🔐 **Sistem Login & Role Management**:
  - Administrator (akses penuh)
  - Editor (kelola konten)
  - Staff (akses terbatas)
- 📊 **Dashboard**: 8 widget statistik real-time dengan trend
- 📄 **Manajemen Konten**:
  - Halaman (dengan Rich Text Editor)
  - Berita & Artikel (kategori, excerpt, SEO)
  - Agenda Kegiatan
  - Galeri Foto
- 👤 **Manajemen Data Desa**:
  - Profil Desa (logo, sejarah, visi-misi)
  - Perangkat Desa (foto, jabatan)
  - Layanan Desa
  - Data Statistik (demografi, pendidikan, pekerjaan, dll)
- 💬 **Manajemen Pengaduan**:
  - View & update status pengaduan
  - Filter berdasarkan status
  - Tracking pengaduan
- 👥 **Manajemen Pengguna**:
  - CRUD users
  - Role assignment
  - Password management
- ⚙️ **Pengaturan Website**:
  - Konfigurasi umum
  - SEO settings

## 🛠 Tech Stack

### Backend

- **Framework**: Laravel 12.50.0
- **Admin Panel**: Filament 5.2
- **PHP Version**: 8.3.20
- **Database**: MySQL/MariaDB

### Frontend

- **Framework**: Vue.js 3.x
- **Bridge**: Inertia.js 2.0
- **CSS Framework**: Tailwind CSS 3.x
- **Build Tool**: Vite 7.3.1

### Development Tools

- **Composer**: Dependency management (PHP)
- **NPM**: Package management (JavaScript)
- **Laravel Pint**: Code styling (PHP)
- **PHPUnit**: Testing framework

## 📦 Prerequisites

Pastikan sistem Anda telah menginstall:

- PHP >= 8.2 (Recommended: 8.3)
- Composer >= 2.0
- Node.js >= 18.0 & NPM >= 9.0
- MySQL >= 8.0 atau MariaDB >= 10.3
- Git

**Recommended Development Environment:**
- [Laragon](https://laragon.org/) (Windows)
- [Laravel Herd](https://herd.laravel.com/) (macOS)
- [Laravel Sail](https://laravel.com/docs/sail) (Docker)

## 🚀 Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/yourusername/gunungjaya.git
cd gunungjaya
```

### 2. Install Dependencies

**Backend (PHP/Composer):**
```bash
composer install
```

**Frontend (JavaScript/NPM):**
```bash
npm install
```

### 3. Setup Environment

Copy file `.env.example` menjadi `.env`:

```bash
# Windows (PowerShell)
copy .env.example .env

# Linux/macOS
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

### 4. Konfigurasi Database

Edit file `.env` dan sesuaikan dengan konfigurasi database Anda:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=gunungjaya
DB_USERNAME=root
DB_PASSWORD=
```

Buat database baru:

```sql
CREATE DATABASE gunungjaya CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### 5. Migrasi & Seeding

Jalankan migrasi dan seeding data:

```bash
# Migrasi database
php artisan migrate

# Seeding data (optional - untuk demo)
php artisan db:seed

# Atau langsung fresh migrate + seed
php artisan migrate:fresh --seed
```

### 6. Storage Link

Buat symbolic link untuk storage:

```bash
php artisan storage:link
```

### 7. Build Assets

Compile frontend assets:

```bash
# Development
npm run dev

# Production
npm run build
```

## ⚙ Konfigurasi

### File Upload

Pastikan directory berikut writable:

```
storage/app/public/
storage/logs/
bootstrap/cache/
```

### Filament Panel

Configuration ada di `app/Providers/Filament/AdminPanelProvider.php`:

- **Path**: `/admin`
- **Logo**: `public/images/logo.png`
- **Colors**: Emerald theme
- **Navigation Groups**: Konten, Data Desa, Pengaduan, Pengaturan

### Mail Configuration (Optional)

Untuk fitur notifikasi email, konfigurasi SMTP di `.env`:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@gunungjaya.desa.id
MAIL_FROM_NAME="${APP_NAME}"
```

## 🏃 Menjalankan Aplikasi

### Development Server

**Option 1: Artisan Serve**
```bash
php artisan serve
```
Akses: `http://localhost:8000`

**Option 2: Concurrent Development (Recommended)**
```bash
npm run dev
```
Ini akan menjalankan:
- Laravel development server (port 8000)
- Queue worker
- Log viewer (Pail)
- Vite dev server (HMR enabled)

### Production

1. **Build assets:**
```bash
npm run build
```

2. **Optimize Laravel:**
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize
```

3. **Setup web server** (Apache/Nginx) dengan document root ke `/public`

## 📁 Struktur Project

```
gunungjaya/
├── app/
│   ├── Filament/              # Filament Admin Panel
│   │   ├── Resources/         # CRUD Resources
│   │   │   ├── Pages/         # Halaman
│   │   │   ├── Posts/         # Berita
│   │   │   ├── Agendas/       # Agenda
│   │   │   ├── Galleries/     # Galeri
│   │   │   ├── Officials/     # Perangkat Desa
│   │   │   ├── Services/      # Layanan
│   │   │   ├── Users/         # Pengguna
│   │   │   └── ...
│   │   └── Widgets/           # Dashboard Widgets
│   ├── Http/
│   │   ├── Controllers/       # Controllers
│   │   └── Middleware/        # Middleware
│   ├── Models/                # Eloquent Models
│   └── Providers/             # Service Providers
├── database/
│   ├── migrations/            # Database Migrations
│   └── seeders/               # Database Seeders
│       ├── PageSeeder.php     # Seed halaman (Lembaga, dll)
│       ├── StatisticSeeder.php # Seed data statistik
│       └── AdminUserSeeder.php # Seed admin user
├── public/
│   ├── images/                # Images (logo, banner, dll)
│   ├── build/                 # Compiled assets (Vite)
│   └── storage/               # Public storage symlink
├── resources/
│   ├── css/                   # CSS source files
│   ├── js/                    # JavaScript/Vue source files
│   │   ├── Components/        # Vue Components
│   │   ├── Layouts/           # Layout Components
│   │   └── Pages/             # Inertia Pages (Public)
│   └── views/                 # Blade Templates
└── routes/
    ├── web.php                # Web Routes
    └── console.php            # Console Routes
```

## 🔐 Admin Panel

### Akses Admin Panel

URL: `http://localhost:8000/admin`

### Default Credentials

**Administrator:**
- Email: `admin@gunungjaya.desa.id`
- Password: `password`

⚠️ **PENTING**: Ganti password default setelah login pertama kali!

### User Roles

| Role | Deskripsi | Akses |
|------|-----------|-------|
| **Admin** | Administrator penuh | Semua fitur + manajemen user |
| **Editor** | Editor konten | Kelola konten (Pages, Posts, Gallery, Agenda) |
| **Staff** | Staff desa | Lihat data + kelola pengaduan |

### Fitur Admin Panel

- 📊 **Dashboard**: Overview statistik dengan 8 widget real-time
- 📝 **Rich Text Editor**: Toolbar lengkap (heading, list, table, file upload)
- 🔍 **Search & Filter**: Pencarian dan filter di setiap tabel
- 📱 **Responsive**: Mobile-friendly admin panel
- 🎨 **Theme**: Emerald green dengan logo desa
- 🗂️ **Navigation Groups**: Menu terorganisir dalam 4 grup

## 🌱 Seeding Data

### Seed Semua Data

```bash
php artisan db:seed
```

### Seed Spesifik

```bash
# Seed halaman (Lembaga: BPD, LPM, PKK, Karang Taruna, Posyandu)
php artisan db:seed --class=PageSeeder

# Seed data statistik
php artisan db:seed --class=StatisticSeeder

# Seed admin user
php artisan db:seed --class=AdminUserSeeder
```

### Reset Database & Seed Ulang

```bash
php artisan migrate:fresh --seed
```

**⚠️ Warning**: Ini akan **menghapus semua data** dan membuat database baru!

## 👨‍💻 Pengembangan

### Code Style

Project ini menggunakan Laravel Pint untuk code styling:

```bash
./vendor/bin/pint
```

### Testing

Jalankan test:

```bash
php artisan test
```

### Cache Management

```bash
# Clear all cache
php artisan optimize:clear

# Clear specific cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

### Debug Mode

Untuk development, pastikan di `.env`:

```env
APP_ENV=local
APP_DEBUG=true
```

Untuk production:

```env
APP_ENV=production
APP_DEBUG=false
```

## 🚀 Deployment

### Server Requirements

- PHP >= 8.2 dengan extensions: BCMath, Ctype, JSON, Mbstring, OpenSSL, PDO, Tokenizer, XML
- MySQL/MariaDB
- Composer
- Node.js & NPM (untuk build assets)

### Deployment Steps

1. **Clone & install:**
```bash
git clone https://github.com/yourusername/gunungjaya.git
cd gunungjaya
composer install --no-dev --optimize-autoloader
npm ci
npm run build
```

2. **Environment:**
```bash
cp .env.example .env
php artisan key:generate
# Edit .env untuk production settings
```

3. **Database:**
```bash
php artisan migrate --force
php artisan db:seed --force
```

4. **Permissions:**
```bash
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

5. **Optimize:**
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize
```

6. **Web server** (Nginx/Apache): Point document root ke `/public`

### Nginx Configuration Example

```nginx
server {
    listen 80;
    server_name gunungjaya.desa.id;
    root /var/www/gunungjaya/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.3-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

## 🐛 Troubleshooting

### Error: "Class not found"

```bash
composer dump-autoload
php artisan clear-compiled
php artisan optimize:clear
```

### Error: "Storage link not found"

```bash
php artisan storage:link
```

### Error: "Vite manifest not found"

```bash
npm run build
```

### Error: "Permission denied" di storage

```bash
# Linux/macOS
sudo chmod -R 775 storage bootstrap/cache
sudo chown -R $USER:www-data storage bootstrap/cache

# Windows: Run as Administrator
icacls "storage" /grant Users:F /t
```

### Database Connection Error

Periksa:
1. MySQL service running
2. Konfigurasi `.env` benar
3. Database sudah dibuat
4. User memiliki akses ke database

### Assets tidak muncul setelah deployment

```bash
npm run build
php artisan storage:link
php artisan optimize:clear
```

## 🤝 Kontribusi

Kontribusi selalu diterima! Silakan ikuti langkah berikut:

1. Fork repository ini
2. Buat branch fitur (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

### Coding Standards

- Ikuti [PSR-12](https://www.php-fig.org/psr/psr-12/) untuk PHP
- Gunakan Laravel Pint: `./vendor/bin/pint`
- Write tests untuk fitur baru
- Update dokumentasi jika diperlukan

## 📝 Changelog

Lihat [CHANGELOG.md](CHANGELOG.md) untuk riwayat perubahan.

## 📄 Lisensi

Project ini dilisensikan under [MIT License](LICENSE).

## 👥 Tim Pengembang

- **Backend Developer**: [Your Name]
- **Frontend Developer**: [Your Name]
- **UI/UX Designer**: [Your Name]

## 📞 Kontak & Support

- **Website Desa**: https://gunungjaya.desa.id
- **Email**: info@gunungjaya.desa.id
- **Telepon**: (0284) XXX-XXXX
- **Alamat**: Jl. Raya Gunungjaya No. 123, Kec. Pemalang, Kab. Pemalang, Jawa Tengah

## 🙏 Acknowledgments

- [Laravel](https://laravel.com/) - The PHP Framework
- [Filament](https://filamentphp.com/) - Admin Panel Builder
- [Vue.js](https://vuejs.org/) - The Progressive JavaScript Framework
- [Inertia.js](https://inertiajs.com/) - Modern Monolith Bridge
- [Tailwind CSS](https://tailwindcss.com/) - Utility-first CSS Framework
- [Heroicons](https://heroicons.com/) - Beautiful hand-crafted SVG icons

---

**Made with ❤️ for Desa Gunungjaya**

© 2026 Desa Gunungjaya. All rights reserved.
