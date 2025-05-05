## DINAMIS PORTFOLIO LARAVEL 12 + TAILWINDCSS 3.4.17

Halo disini saya menyediakan portfolio dinamis menggunakan laravel 12, dimana memiliki 2 penggguna yaitu (user) dan (admin)

## 🚀 Fitur Utama
### 👤 User (Publik)
- User hanya bisa melihat tampilan dari beberapa menu section yaitu
- **Home**: Nama, jabatan, narasi (dengan Read More / Read Less).
- **About**: Timeline edukasi (tahun, universitas, jurusan).
- **Skills**: Kelompok skill (Frontend, Backend, Tools).
- **Experience**: Dibagi menjadi `Work` dan `Scientist`.
- **Contact**: Alamat, email, no WA, dsb.
- Responsif dan interaktif.
- Styling menggunakan **Tailwind CSS v3.4.17**.
- Animasi dengan **AOS (Animate On Scroll)**.

### 🔐 Admin View
- Role: hanya **Admin**
- Kelola setiap section dengan fitur **CRUD**:
  - **Home** (`admin/pages/home`)
  - **About** (`admin/pages/about`)
  - **Experience** (`admin/pages/experience/work`, `.../scientist`)
  - **Skills** (`admin/pages/skills`)
  - **Contact** (`admin/pages/contact`)
- Gambar bisa diunggah via klik atau **drag & drop** (dengan preview).
- Validasi dan notifikasi berhasil menggunakan Tailwind alert.

## Kelebihan dan Kekurangan
### Kelebihan 
- Kamu tidak perlu membuka IDE untuk mengatur isi dari portfolio, cukup melalui admin page
- Sudah responsive dengan segala tampilan (desktop atau mobile)
### Kekurangan
- Masih belum aman, admin page tidak ada keamanan.
- Memerlukan database untuk mengelola, jadi jika ingin dihosting tidak cukup menggunakan github


## Cara Penggunaan
- clone github https://github.com/Ipul1122/dinamis_portfolio.git
- cd dinamis-portfolio
- INSTALL DEPENDECY `composer install`
- Copy File Environment dan Buat Kunci Aplikasi `cp .env.example .env` dan `php artisan key:generate`
- Konfigurasi database : jika kamu menggunakan mysql, ubah beberapa konfigurasi di `.env`
`DB_CONNECTION=mysql`
`DB_HOST=127.0.0.1`
`DB_PORT=3306`
`DB_DATABASE=your_database_name`
`DB_USERNAME=root`
`DB_PASSWORD=`
- Migrasi database anda `php artisan serve`
- Link storage `php artisan storage:link`
- install & build fe (vite) `npm install` dan `npm run build`
- mode pengembangan fe `npm run dev`
- running server laravel `php artisan serve` website ditampilkan `http://localhost:8000` anda
- login halaman user `http://localhost:8000`
- login halaman admin `http://localhost:8000/admin`

## Video Panduan
 - User : https://drive.google.com/file/d/1nMSULGlydpPW0uUdaLCICMegaWByATs1/view?usp=sharing
 - Admin : https://drive.google.com/file/d/10YJZ0H-xfFHcchGZaqmcfjclahiu7awm/view?usp=sharing

## Dependecy
`"@tailwindcss/vite": "^4.1.4",`
`"autoprefixer": "^10.4.21",`
`"axios": "^1.8.2",`
`"concurrently": "^9.0.1",`
`"laravel-vite-plugin": "^1.2.0",`
`"postcss": "^8.5.3",`
`"tailwindcss": "^3.4.17",`
`"vite": "^6.2.4"`
`"flowbite": "^3.1.2",`
`"flowbite-icons": "^1.5.0",`
`"lucide": "^0.503.0"`
