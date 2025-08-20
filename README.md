# 📦 Scalable-DB

Monorepo untuk **Sistem Informasi Akademik** dengan pendekatan **modular & scalable** ⚡  
Didesain agar setiap layanan dapat dikembangkan, diuji, dan di-*deploy* secara independen.

---

## 🗂️ Struktur Project
- 🏛️ **core-service** → layanan inti (menyimpan model & API untuk data utama, contoh: 👨‍🎓 Mahasiswa).  
- 📚 **sim-ta** → Sistem Informasi **Tugas Akhir (TA)**.  
- 🏢 **sim-kp** → Sistem Informasi **Kerja Praktek (KP)**.  

---

## 🧩 Konsep Arsitektur
- 🔑 `core-service` = **Single Source of Truth** untuk data utama.  
- 🔗 `sim-ta` & `sim-kp` mengonsumsi data melalui API dari core-service.  
- 🎯 Setiap service berjalan sebagai aplikasi **Laravel mandiri**, sehingga lebih fleksibel dan mudah dikembangkan.  

---

## 🎯 Tujuan
✅ Memisahkan **core domain** & **aplikasi spesifik**.  
✅ Memudahkan **scaling & pengembangan paralel**.  
✅ Mendukung arsitektur berbasis **service** (modular & maintainable).  

---

## 🛠️ Teknologi yang Digunakan
- ⚙️ [Laravel](https://laravel.com/) sebagai framework utama.  
- 🗄️ Database relasional (MySQL/PostgreSQL).  
- 🌐 RESTful API untuk komunikasi antar-service.  

---

## 🚀 Cara Menjalankan
```bash
# clone repo
git clone https://github.com/username/scalable-db.git
cd scalable-db

# masuk ke masing-masing service
cd core-service
composer install
php artisan serve
```
