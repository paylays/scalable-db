# Scalable-DB

Monorepo untuk sistem informasi akademik dengan pendekatan **modular & scalable**.

## Struktur Project
- **core-service** → layanan inti, menyimpan model dan API untuk data utama (contoh: Mahasiswa).
- **sim-ta** → Sistem Informasi Tugas Akhir (TA).
- **sim-kp** → Sistem Informasi Kerja Praktek (KP).

## Konsep
- `core-service` bertindak sebagai pusat data (single source of truth).
- Aplikasi domain (`sim-ta`, `sim-kp`) mengonsumsi data dari core-service melalui API.
- Setiap service berjalan sebagai aplikasi Laravel mandiri.

## Tujuan
- Memisahkan core domain dan aplikasi spesifik.
- Memudahkan scaling & pengembangan paralel.
- Mendukung arsitektur berbasis service.
