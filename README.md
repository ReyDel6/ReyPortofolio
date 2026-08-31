<p align="center">
  <img src="assets/portfolio-preview.svg" width="120" alt="ReyDel Logo" />
</p>

<h1 align="center">Reynaldi Delphiano — Portfolio Website</h1>

<p align="center">
  Website portofolio pribadi <strong>Reynaldi Delphiano (ReyDel)</strong> — Web & Mobile Developer.
  Menampilkan profil profesional, pengalaman kerja, pendidikan, skill, proyek, pelatihan, dan sertifikasi dalam satu halaman yang responsif.
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=flat&logo=html5&logoColor=white" />
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white" />
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black" />
</p>

---

## 🖥️ Tentang Website

Website ini adalah halaman portofolio satu halaman (_single page_) milik **Reynaldi Delphiano**, yang menampilkan:

- **Profil profesional** — ringkasan diri, fokus pengembangan, dan tautan media sosial.
- **Showcase proyek** — UMKM Connect (Web & Mobile) beserta fitur, dokumentasi, dan hak cipta.
- **Pengalaman & pendidikan** — riwayat karir lintas bidang (teknis, perbankan, penjualan, kepemimpinan) dan riwayat pendidikan.
- **Skill & teknologi** — stacks yang dikuasai (Laravel, React, Flutter, dsb.).
- **Pelatihan & sertifikasi** — program pelatihan PPKPI dan galeri sertifikat dengan link PDF.
- **Responsive design** — tampilan menyesuaikan desktop, tablet, dan mobile.

## 🚀 Cara Menjalankan

Website dibangun dengan **PHP murni** — tanpa Composer, tanpa dependency, tanpa database. Cukup jalankan dengan PHP built-in server:

```bash
cd webphp
php -S localhost:8000 -t .
```

Lalu buka [http://localhost:8000](http://localhost:8000) di browser.

> **Catatan:** gunakan flag `-t .` agar root folder tepat (mencegah error 404 "Not Found").

Alternatif: taruh isi folder `webphp` di document root web server (Apache/nginx) atau hosting PHP (mis. InfinityFree).

## 📁 Struktur Folder

```
webphp/
├── index.php        # Template utama halaman portofolio
├── data.php         # Pusat data: profil, proyek, pengalaman, skill, sertifikat, pelatihan
├── css/
│   └── style.css    # Styling seluruh halaman
├── js/
│   └── main.js      # Interaktivitas: toggle sertifikat, timeline, skill, command palette
└── assets/          # Gambar, logo, preview proyek, PDF sertifikat, dan APK
```

## ✏️ Mengedit Konten

Hampir semua konten website dapat diubah **hanya dari satu file**, yaitu `data.php`:

```php
// Contoh: mengubah profil
$profile = [
    'name' => 'Reynaldi Delphiano',
    'role' => 'Web & Mobile Developer',
    // ...
];
```

- `$projects` — daftar proyek (UMKM Connect Web, Portfolio, UMKM Connect Mobile).
- `$experiences` — riwayat pekerjaan.
- `$trainings` — program pelatihan.
- `$skills` / `$techSkillPills` — keahlian dan teknologi.
- `$certificates` — sertifikat & piagam.

Setelah mengubah `data.php`, halaman otomatis ter-update tanpa mengedit template.

## 🛠️ Teknologi

| Bagian    | Teknologi                          |
|-----------|------------------------------------|
| Backend   | PHP (standalone, tanpa framework)  |
| Frontend  | HTML, CSS, JavaScript              |
| Icon/SVG  | Inline SVG + aset lokal            |
| UI        | Responsive design                  |

## 🌟 Fitur Proyek Unggulan (UMKM Connect)

Website juga mendokumentasikan **UMKM Connect**, platform digital untuk UMKM karya Reynaldi Delphiano:

- **Kasir/POS** — dashboard, manajemen shift, pesanan meja, ID card digital kasir.
- **QR Meja** — pelanggan scan QR, lihat menu, pesan & bayar online.
- **Marketplace B2B** — toko online antar-UMKM dengan keranjang & checkout grosir.
- **Manajemen karyawan** & multi-role (Owner, Admin, Cashier, Supplier, Customer).
- **Pembayaran Midtrans** dan **Hak Cipta terdaftar** (DJKI).

## 📬 Kontak

- **Email:** [delphianor@gmail.com](mailto:delphianor@gmail.com)
- **LinkedIn:** [Reynaldi Delphiano](https://www.linkedin.com/in/reynaldi-delphiano-2b6b79120)
- **GitHub:** [ReyDel6](https://github.com/ReyDel6)
- **Instagram:** [@reynaldi_delphiano_](https://instagram.com/reynaldi_delphiano)
- **WhatsApp:** [085155376508](https://wa.me/6285155376508)
- **YouTube:** [@reynaldidelphiano5684](https://www.youtube.com/@reynaldidelphiano5684)

## 📄 Lisensi

Konten website ini (termasuk data profil, source code, dan aset) adalah karya **Reynaldi Delphiano**. Proyek **UMKM Connect** merupakan karya orisinal yang dilindungi Hak Cipta dan dicatatkan di DJKI (HKI **EC002026133137**, 2026).
