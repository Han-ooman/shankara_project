# Struktur Proyek Website Shankara Residence

File telah dipisahkan sesuai standar pengembangan web agar lebih rapi, terstruktur, dan mudah dikelola:

```text
shankara_project/
├── index.php              # Halaman utama dinamis (PHP - direkomendasikan)
├── config.php             # File konfigurasi data klaster, tipe unit, & kontak WA
├── index.html             # Versi HTML statis murni (tanpa server PHP)
├── assets/
│   ├── css/
│   │   └── style.css      # Styling kustom (tema malam, aksen emas, scrollbar)
│   └── js/
│       └── script.js      # Logika menu mobile, modal detail unit, & AOS
└── foto/                  # Letakkan folder gambar (logo, head.jpg, denah, dll) di sini
```

## Cara Penggunaan
1. **Jika menggunakan server PHP (XAMPP / Laragon / Hosting cPanel):**
   - Gunakan `index.php` dan `config.php`.
   - Untuk menambah/mengubah harga DP, nomor WhatsApp, atau tipe unit baru (seperti Tipe 50, 55, 60, 65), cukup edit array di dalam `config.php` maka card dan modal otomatis ter-generate.
2. **Jika hanya menggunakan hosting statis (GitHub Pages):**
   - Gunakan `index.html`.
