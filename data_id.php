<?php

// ============================================================

// DATA PORTOFOLIO — edit cukup di file ini, halaman otomatis update

// ============================================================

$googleAnalyticsId = 'G-DPC3HR787T';

$profile = [

    'name'          => 'Reynaldi Delphiano',

    'brand'         => 'ReyDel',

    'initial'       => 'RD',

    'eyebrow'       => 'Halo, saya',

    'role'          => 'Web & Mobile Developer',

    'role2'         => 'Pengembang Aplikasi',

    'location'      => 'Jakarta, Indonesia',

    'languages'     => 'Indonesia (Native), Inggris (Limited Working)',

    'focus'         => 'Web Development, Mobile Apps, UMKM Digital',

    'email'         => 'delphianor@gmail.com',

    'linkedin_url'  => 'https://www.linkedin.com/in/reynaldi-delphiano-2b6b79120',

    'linkedin_name' => 'reynaldi-delphiano',

    'social'        => [

        ['label' => 'Email',       'handle' => 'delphianor@gmail.com',  'url' => 'mailto:delphianor@gmail.com'],

        ['label' => 'WhatsApp',    'handle' => '085155376508',           'url' => 'https://wa.me/6285155376508'],

        ['label' => 'LinkedIn',    'handle' => 'Reynaldi Delphiano',     'url' => 'https://www.linkedin.com/in/reynaldi-delphiano-2b6b79120'],

        ['label' => 'Instagram',   'handle' => '@reynaldi_delphiano_',   'url' => 'https://instagram.com/reynaldi_delphiano'],

        ['label' => 'TikTok',      'handle' => '@rajajasa7',             'url' => 'https://www.tiktok.com/@rajajasa7/'],

        ['label' => 'YouTube',     'handle' => '@reynaldidelphiano5684', 'url' => 'https://www.youtube.com/@reynaldidelphiano5684'],

        ['label' => 'GitHub',      'handle' => 'ReyDel6',                'url' => 'https://github.com/ReyDel6'],

        ['label' => 'Discord',     'handle' => 'delphianor',             'url' => 'https://discord.com/users/delphianor'],

        ['label' => 'Threads',     'handle' => '@reynaldi_delphiano', 'url' => 'https://www.threads.com/@reynaldi_delphiano'],

    ],

    'photo'         => 'assets/foto.webp',

    'photo_avatar'  => 'assets/foto-pixel.webp',

    'summary'       => [

        'Saya seorang <strong>Web & Mobile Developer</strong> yang berfokus membangun aplikasi web dan mobile yang fungsional, responsif, serta mudah digunakan. Saya terbiasa menggunakan Laravel/PHP, React, JavaScript, Flutter, MySQL, dan REST API untuk mengubah kebutuhan menjadi solusi digital.',

        'Salah satu proyek yang saya kembangkan adalah <strong>UMKM Connect</strong>, platform digital yang menggabungkan fitur Kasir/POS, QR Meja, dan B2B antar-UMKM. Proyek ini saya bangun untuk membantu pelaku UMKM mengelola transaksi, menerima pesanan, dan terhubung dengan mitra usaha secara lebih praktis.',

        'Dalam mengembangkan aplikasi, saya berkomitmen menerapkan clean code, integrasi REST API, dan workflow modern agar setiap solusi yang dibangun tetap rapi, efisien, mudah dikembangkan, dan sesuai dengan kebutuhan pengguna.',

        'Di luar bidang teknologi, saya memiliki pengalaman profesional lintas bidang, mulai dari penjualan, operasional, perbankan, layanan teknis, hingga kepemimpinan tim. Pengalaman tersebut membentuk kemampuan komunikasi, koordinasi, problem solving, ketelitian, dan adaptasi yang saya terapkan dalam setiap proyek.',

    ],

    'traits'        => ['Leadership', 'Problem Solving', 'Komunikasi', 'Adaptasi'],

];

$services = [

    [

        'icon'  => '🛒',

        'title' => 'Aplikasi Kasir (POS) & Toko Online',

        'desc'  => 'Point of sale, katalog produk, promo & paket, poin member, dan pembayaran QRIS — fullstack (React + Laravel).',

        'href'  => 'project-detail.php?p=3',

        'cta'   => 'Lihat contoh (POSMart) →',

    ],

    [

        'icon'  => '📱',

        'title' => 'Aplikasi Mobile UMKM',

        'desc'  => 'Flutter cross-platform untuk mengelola katalog, stok, transaksi, dan laporan langsung dari genggaman.',

        'href'  => 'project-detail.php?p=5',

        'cta'   => 'Lihat contoh (Mobile) →',

    ],

    [

        'icon'  => '🌐',

        'title' => 'Website Bisnis & Portofolio',

        'desc'  => 'Company profile, landing page, dan website portofolio yang responsif, cepat, dan bilingual (ID/EN).',

        'href'  => 'project-detail.php?p=4',

        'cta'   => 'Lihat contoh (Web Ini) →',

    ],

    [

        'icon'  => '🔌',

        'title' => 'REST API & Integrasi',

        'desc'  => 'Backend Laravel, REST API yang rapi, autentikasi (Google OAuth), dan integrasi pembayaran Midtrans.',

        'href'  => 'project-detail.php?p=2',

        'cta'   => 'Lihat contoh (UMKM Connect) →',

    ],

    [

        'icon'  => '🛠️',

        'title' => 'Maintenance & Pengembangan Lanjutan',

        'desc'  => 'Perawatan berkala, update fitur, perbaikan bug, keamanan, dan pengembangan fitur tambahan.',

        'href'  => 'contact.php',

        'cta'   => 'Diskusikan kebutuhan →',

    ],

];

$projects = [

    [
        'title'    => 'NexBrew — Smart Coffeeshop POS & Roastery Ecosystem',
        'year'     => '2026',
        'role'     => 'Lead Fullstack Architect & UI/UX Designer',
        'tag'      => 'Karya Unggulan • SaaS F&B Ecosystem',
        'category' => 'web',
        'badge'    => 'Next.js 15 Monorepo',
        'image'    => 'assets/nexbrew-logo.svg',
        'initial'  => 'NexBrew',
        'github'   => 'https://github.com/ReyDel6/nexbrew-pos-ecosystem',
        'live'     => 'https://nexbrew.vercel.app',
        'desc'     => 'Ekosistem kasir (POS), kitchen display (KDS), pemesanan mandiri meja (QR Self-Order), dan ERP akuntansi back-office terintegrasi secara real-time untuk coffeeshop specialty modern &amp; artisan roastery. Dibangun dengan arsitektur <strong>Next.js 15 App Router Monorepo (pnpm)</strong>, <strong>Tailwind CSS</strong>, sinkronisasi reaktif multi-stasiun, perhitungan <strong>HPP Moving Average BOM</strong> bahan baku otomatis, serta pembukuan <strong>Jurnal Umum Double-Entry</strong> seimbang. Aplikasi telah dideploy secara live dan dapat diuji langsung di <a href="https://nexbrew.vercel.app" target="_blank" rel="noopener">nexbrew.vercel.app</a>.',
        'points'   => [
            '<strong>Website Publik &amp; Roastery Showcase</strong> — Landing page B2C modern dengan showcase biji kopi in-house, profil sangrai, modal reservasi meja interaktif dengan auto-WhatsApp ticket (#RSV-xxxx), serta roda karakter sensori organoleptik menu.',
            '<strong>Staff Operational Security Gate</strong> — Akses portal karyawan terlindungi PIN numerik tablet-first (1234 Staf / 8888 SPV / Password Admin) dengan manajemen sesi aktif dan tombol kunci portal instan.',
            '<strong>Terminal Kasir Tablet-First (POS)</strong> — Pencarian cepat shortcut ⌘K, modifier es/gula/plant-based susu, pajak PB1 10%, split bill multi-metode per item, rekonsiliasi kas blind cash close Z-report, dan pergantian kasir multi-shift.',
            '<strong>Kitchen Display System (KDS)</strong> — Kanban tiket real-time multi-stasiun (Espresso Bar vs Kitchen Pastry), timer countdown visual SLA (&lt;5m hijau, &gt;8m merah berkedip), split bump bar, dan fitur recall tiket terakhir.',
            '<strong>Menu QR Self-Order Meja Pelanggan</strong> — Katalog digital mobile-first, kustomisasi varian real-time, checkout QRIS dinamis 15:00, opsi bayar kasir, serta pelacak status pesanan live 4-tahap yang tersinkronisasi otomatis saat barista bump tiket.',
            '<strong>Centralized Modifier &amp; Recipe Engine (BOM)</strong> — Manajemen terpusat grup varian (CRUD &amp; inline editing, drag &amp; drop reorder), pemotongan stok otomatis bahan baku (biji kopi &amp; susu) per cangkir berbasis Bill of Materials.',
            '<strong>Moving Average Food Cost &amp; Akuntansi Double-Entry</strong> — Kalkulasi HPP Moving Average presisi saat restock, kartu mutasi stok real-time, audit trail jurnal umum debit/kredit seimbang otomatis, dan laporan Laba Rugi (P&amp;L) komparatif.',
        ],
        'tech'     => [
            'Framework: Next.js 15 (React 19, Turbopack, App Router)',
            'Architecture: pnpm Workspace Monorepo',
            'Styling: Tailwind CSS 3.4 + Custom Coffee Theme Tokens',
            'Database & ORM: PostgreSQL + Prisma ORM (28 Models)',
            'Real-Time: Cross-module Reactive Event Bus & Auto-Polling',
            'Icons & Fonts: Google Material Symbols + Poppins & Inter',
        ],
        'previews' => [
            ['file' => 'assets/nexbrew-landing-hero.png', 'label' => 'Website Publik & Roastery Showcase (Landing Page)'],
            ['file' => 'assets/nexbrew-pos-terminal.png', 'label' => 'Terminal Kasir POS (Split Bill, PB1 10% & Blind Close)'],
            ['file' => 'assets/nexbrew-kds-barista.png', 'label' => 'Kitchen Display System KDS (Timer SLA & Station Filter)'],
            ['file' => 'assets/nexbrew-customer-qr.png', 'label' => 'Self-Order QR Meja Pelanggan (Kustomisasi Varian)'],
            ['file' => 'assets/nexbrew-qris-checkout.png', 'label' => 'Checkout Pembayaran QRIS Dinamis 15 Menit'],
            ['file' => 'assets/nexbrew-live-tracker.png', 'label' => 'Live Order Tracker 4-Tahap Sinkron Real-Time'],
            ['file' => 'assets/nexbrew-dashboard-owner.png', 'label' => 'Dashboard Owner & KPI Laba Kotor Omzet Real-Time'],
            ['file' => 'assets/nexbrew-table-management.png', 'label' => 'Denah Meja & Generator Stiker QR Akrilik'],
            ['file' => 'assets/nexbrew-recipes-bom.png', 'label' => 'Manajemen Resep BOM & HPP Moving Average'],
            ['file' => 'assets/nexbrew-accounting-journal.png', 'label' => 'Buku Jurnal Umum & Laporan Keuangan Double-Entry'],
            ['file' => 'assets/nexbrew-portal-security.png', 'label' => 'Staff Operational Security Gate (PIN & Shift Kasir)'],
        ],
    ],

    [
        'title'    => 'Yayasan BUKIT - Company Profile',

        'year'     => '2025–2026',

        'role'     => 'Fullstack Developer (Freelance)',

        'tag'      => 'Proyek Klien • Company Profile',

        'category' => 'web',

        'badge'    => 'PHP Native',

        'image'    => 'assets/bukit-logo.webp',

        'initial'  => 'BUKIT',

        'github'   => '',

        'live'     => 'https://beagurukita.com',

        'desc'     => 'Website company profile & portofolio <strong>Yayasan Beaguru Kita Indonesia (BUKIT)</strong> yang mendampingi guru honorer prasejahtera melalui program beasiswa, bantuan finansial, pelatihan, dan pendampingan yang berkelanjutan.',

        'points'   => [

            '<strong>Custom CMS</strong> — Sistem manajemen konten berbasis PHP Native untuk mengelola program, berita, dampak, mitra, pengurus, dan transparansi.',

            '<strong>Halaman Publik Lengkap</strong> — Beranda, Tentang, Program, Dampak, Berita, Transparansi, Mitra, Dukung, Kontak, serta halaman privasi.',

            '<strong>Formulir Interaktif</strong> — Form kontak, kemitraan, relawan, dan konfirmasi donasi dengan validasi server-side.',

            '<strong>SEO & Keamanan</strong> — Sitemap & robots dinamis, security headers, CSP, serta proteksi terhadap spam dengan Cloudflare Turnstile.',

            '<strong>Fokus Aksesibilitas & Privasi</strong> — Ramah WCAG, kontrol persetujuan konten (cerita/mitra/statistik), serta penyimpanan data pribadi terjaga.',

        ],

        'tech'     => [

            'Backend: PHP 8.3 + MySQL 8 (PDO)',

            'Frontend: Tailwind CSS 3.4',

            'Routing: Apache mod_rewrite',

            'Keamanan: Cloudflare Turnstile',

            'Email: Resend',

        ],

        'previews' => [

            ['file' => 'assets/bukit-uiux-home.png', 'label' => 'UI/UX Website BUKIT'],

            ['file' => 'assets/bukit-uiux-program.png', 'label' => 'UI/UX Halaman Program'],

            ['file' => 'assets/bukit-uiux-dampak.png', 'label' => 'UI/UX Halaman Dampak'],

            ['file' => 'assets/bukit-uiux-berita.png', 'label' => 'UI/UX Halaman Berita'],

            ['file' => 'assets/bukit-uiux-dukung.png', 'label' => 'UI/UX Halaman Dukung'],

        ],

    ],

    [

        'title'    => 'PPDB SMK Nusantara Bangsa',

        'year'     => '2025',

        'role'     => 'Fullstack Developer',

        'tag'      => 'Karya Pribadi • Web Development',

        'category' => 'web',

        'badge'    => 'Web PPDB Online',

        'image'    => 'assets/smk-nusantara-logo.svg',

        'initial'  => 'PPDB SMK',

        'github'   => 'https://github.com/ReyDel6/ppdb-sekolah-web',

        'desc'     => 'Sistem <strong>PPDB Online</strong> dan <strong>manajemen akademik sekolah</strong> SMK Nusantara Bangsa — proyek <strong>Uji Kompetensi Keahlian (UJK/UKK RPL)</strong>. Mengelola pendaftaran calon siswa lewat form bertahap dengan unggah berkas, gelombang & kuota jurusan, verifikasi hingga daftar ulang, portal cek status & cetak kartu peserta ber-QR, dashboard multi-role, plus modul akademik (absensi, nilai, jadwal), keuangan SPP, e-learning & e-library dengan ekspor rekap/rapor Excel dan PDF.',

        'points'   => [

            '<strong>Hero landing branding sekolah</strong> — dua kolom bertema navy & emas dengan <strong>emblem sekolah dalam crest emas</strong>, badge "SMK Pusat Keunggulan", CTA pendaftaran gelombang aktif, serta sambutan kepala sekolah, counter rekam jejak (94,8% serapan kerja/kuliah, 45+ mitra DUDI), showcase jurusan, mitra industri, galeri fasilitas, dan testimoni alumni di satu halaman.',

            '<strong>Multi-role & autentikasi</strong> — 6 peran: Admin, Panitia, Guru, Siswa, Orang Tua, dan Kepala Sekolah (Laravel Breeze + middleware role).',

            '<strong>Pendaftaran bertahap</strong> — data diri, pilihan jurusan, data orang tua, unggah berkas (pas foto, KK, ijazah) & pratinjau; dukungan gelombang & kuota per jurusan.',

            '<strong>Portal cek status publik</strong> — pantau status pendaftaran real-time & cetak kartu peserta dengan QR Code.',

            '<strong>Dashboard analitik & kepala sekolah</strong> — kuota per jurusan, persentase diterima/cadangan/tolak, grafik (Chart.js), statistik PPDB, kurikulum & kepegawaian.',

            '<strong>Manajemen akademik</strong> — kelas, mata pelajaran, guru, siswa & jadwal; absensi (Hadir/Izin/Sakit/Alpha/Terlambat); penilaian & rapor.',

            '<strong>Ekspor rekap & rapor</strong> — rekap pendaftar, nilai & absensi dalam Excel dan PDF (Dompdf).',

            '<strong>Keuangan SPP</strong> — tarif per kelas, generate tagihan bulanan & pembayaran (Tunai/Transfer/Online) lewat admin dan portal siswa/orang tua.',

            '<strong>E-learning & e-library</strong> — materi, tugas, forum kelas; katalog buku & peminjaman.',

        ],

        'tech'     => [

            'Backend: Laravel (PHP) + MySQL',

            'Frontend: Blade + Vite, Tailwind CSS, Alpine.js',

            'Laporan: Laravel Excel + Dompdf (PDF)',

            'QR Code: qrcodejs',

            'Grafik: Chart.js',

        ],

        'previews' => [

            ['file' => 'assets/ppdb-home-preview.webp', 'label' => 'Landing Page'],

            ['file' => 'assets/ppdb-login-preview.webp', 'label' => 'Halaman Login'],

        ],

    ],

    [

        'title'    => 'UMKM Connect',

        'year'     => '2025–2026',

        'role'     => 'Fullstack Developer',

        'tag'      => 'Karya Pribadi • Fullstack',

        'category' => 'web',

        'badge'    => 'Hak Cipta Terdaftar',

        'image'    => 'assets/umkm-connect.png',

        'initial'  => 'UMKM Connect',

        'github'   => 'https://github.com/ReyDel6/UMKM_Connect-Web',

        'desc'     => 'Platform web untuk UMKM yang memadukan <strong>Kasir/POS</strong>, <strong>QR Meja</strong> (pesan & bayar dari meja pelanggan), dan <strong>B2B antar-UMKM</strong> dalam satu akun.',

        'points'   => [

            '<strong>Marketplace B2B</strong> — toko online antar-UMKM dengan keranjang & checkout grosir.',

            '<strong>Pesan via QR Meja</strong> — pelanggan scan QR, lihat menu, pesan & bayar online dari smartphone.',

            '<strong>Kasir (POS)</strong> — dashboard, manajemen shift, pesanan meja, & ID card digital kasir.',

            '<strong>Manajemen Karyawan</strong> — tambah kasir, koki, pelayan, barista, admin (login via PIN 4 digit).',

            '<strong>Chat antar-pengguna</strong> — komunikasi langsung pembeli & penjual.',

            '<strong>Produk & Stok</strong>, bahan baku, pesanan masuk, & laporan keuangan.',

            '<strong>Multi-role & autentikasi</strong> — Owner, Admin, Cashier, Supplier, Customer; login email, Google, & reset password.',

            '<strong>Pembayaran Midtrans</strong> (Snap) & landing page dengan form hubungi kami.',

        ],

        'meta'     => 'Teknologi: <strong>Laravel (PHP)</strong>, Blade + Vite, MySQL • Pembayaran <strong>Midtrans</strong> • Terdaftar Hak Cipta <strong>EC002026133137</strong> (2026)',

        'tech'     => [

            'Backend: Laravel (PHP)',

            'Frontend: Blade + Vite, Font Awesome, GSAP',

            'Database: MySQL',

            'Pembayaran: Midtrans Snap API',

        ],

        'roles'    => [

            'Owner/UMKM — kelola penuh produk, stok, karyawan, laporan.',

            'Admin — membantu owner dalam operasional toko.',

            'Cashier — kasir (POS), pesanan meja, profil kasir.',

            'Supplier — setara UMKM; produknya tampil di marketplace.',

            'Customer — akun scan QR meja & pembayaran online dengan dashboard & riwayat order sendiri.',

        ],

        'hki'      => 'Proyek <strong>UMKM Connect</strong> — termasuk source code, desain antarmuka, logo, dan fitur — adalah karya orisinal milik <strong>Reynaldi Delphiano</strong>, dilindungi Hak Cipta dan dicatatkan di DJKI (HKI <strong>EC002026133137</strong>, 2026). Dilarang menggandakan, mendistribusikan, atau mengomersialkan tanpa izin tertulis pemegang hak.',

'previews' => [
            ['file' => 'assets/umkm-web-login-preview.webp', 'label' => 'Halaman Login & Autentikasi Multi-Role (Desain Split-Screen Modern)'],
            ['file' => 'assets/umkm-web-pos-preview.webp', 'label' => 'Layar Mesin Kasir / Terminal POS (Katalog Menu, Kategori & Keranjang)'],
            ['file' => 'assets/umkm-web-qris-preview.webp', 'label' => 'Modal Pembayaran Kasir via Scan QRIS Midtrans (Real-Time)'],
            ['file' => 'assets/umkm-web-cashier-card-preview.webp', 'label' => 'Profil Kasir, Digital ID Card 3D & Manajemen Shift Kasir'],
            ['file' => 'assets/umkm-web-table-menu-preview.webp', 'label' => 'Pemesanan QR Meja Mandiri oleh Pelanggan di Smartphone'],
            ['file' => 'assets/umkm-web-table-orders-preview.webp', 'label' => 'Live Monitoring Pesanan Meja (Status Masuk, Selesai & Batal)'],
            ['file' => 'assets/umkm-web-dashboard-preview.webp', 'label' => 'Dashboard Analitik Owner (Pendapatan & Performa Toko)'],
            ['file' => 'assets/umkm-web-b2b-preview.webp', 'label' => 'Marketplace B2B & Direktori Mitra Bisnis Antar-UMKM'],
        ],

    ],

    [

        'title'    => 'POSMart',

        'year'     => '2026',

        'role'     => 'Fullstack Developer',

        'tag'      => 'Karya Pribadi • Fullstack',

        'category' => 'web',

        'badge'    => 'Point of Sale',

        'image'    => 'assets/posmart-preview.svg',

        'logo'     => 'assets/posmart-logo.webp',

        'initial'  => 'POSMart',

        'github'   => 'https://github.com/ReyDel6/POSMART',

        'desc'     => 'Aplikasi <strong>Point of Sale (POS) + Minimarket Digital</strong> berbasis web: manajemen penjualan kasir kilat, terminal barcode scanner, kontrol shift kasir, produk & stok, zona pengiriman, dan laporan analitik — lengkap dengan storefront publik, promo & paket bundling, poin member, hingga pembayaran online Midtrans Snap & QRIS.',

        'points'   => [

            '<strong>Layar Mesin Kasir / Terminal POS (/pos)</strong> — antarmuka kasir cepat dengan scanner barcode (shortcut F2), audio feedback realistis, antrian belanja Hold/Ambil (F4), kalkulasi diskon & PPN, modal pecahan uang cepat (F8), hitung kembalian instan, hingga cetak struk thermal 58mm/80mm.',

            '<strong>Manajemen Shift Kasir</strong> — modal kas awal di laci kasir, pelacakan penjualan tunai vs non-tunai, perhitungan fisik laci vs sistem, rekap selisih, dan riwayat tutup shift.',

            '<strong>Pesanan Kasir Online (/cashier)</strong> — antarmuka khusus staf kasir untuk memverifikasi pesanan masuk, memproses pengiriman/pickup toko, dan cetak invoice.',

            '<strong>Storefront Minimarket Digital</strong> — katalog interaktif, pencarian cerdas dengan saran otomatis, filter kategori, hero banner promo, paket bundling, dan ulasan pembeli terverifikasi.',

            '<strong>Multi-Role & Akses Jaringan LAN</strong> — peran Admin, Kasir POS, Owner, Supplier, dan Customer; siap diakses dari banyak PC/tablet kasir dalam satu jaringan Wi-Fi/LAN.',

            '<strong>Pembayaran Midtrans & Loyalitas</strong> — integrasi Snap QRIS/GoPay/ShopeePay/VA otomatis, sistem koin poin loyalitas member, dan zona ongkir dinamis.',

            '<strong>Desain Neo-Brutalisme Modern</strong> — frontend modern: palet warna kontras tinggi (#CBF169 Lime, #FF6B4A Coral, #161616 Ink), hard shadow tebal, dan tipografi tegas.',

        ],

        'meta'     => 'Teknologi: <strong>React + Vite + Tailwind CSS 4 (Frontend)</strong> • <strong>Laravel (PHP API Backend)</strong> • MySQL • Google OAuth • Midtrans QRIS • Web Audio API • Multi-role',

        'tech'     => [

            'Frontend: React.js + Vite, Tailwind CSS 4, Lucide Icons, Web Audio API',

            'Backend: Laravel (PHP) — REST API (Host 0.0.0.0 port 8010)',

            'Fitur POS: Barcode scanner (F2), Antrian Hold (F4), Struk Thermal 58mm/80mm, Manajemen Shift',

            'Database: MySQL',

            'Pembayaran & Auth: Midtrans Snap (QRIS, VA, E-Wallet), Google OAuth + Sanctum Token',

        ],

        'roles'    => [

            'Kasir POS — terminal mesin kasir (/pos) untuk transaksi walk-in kilat, barcode scanner, manajemen shift, dan kelola pesanan online (/cashier).',

            'Admin — kendali penuh produk, barcode/SKU, promo paket, kategori, staf kasir, dan aturan zona pengiriman.',

            'Owner — pemantauan laporan omzet penjualan real-time, analitik pergerakan stok, dan rekap shift kasir.',

            'Supplier — manajemen produk pasokan yang dipajang di katalog marketplace toko.',

            'Customer — belanja kebutuhan online, tukar poin diskon, pantau status pengiriman, dan riwayat belanja.',

        ],

        'previews' => [

            ['file' => 'assets/posmart-catalog-preview.webp', 'label' => 'Storefront & Katalog Minimarket Digital (Desain Neo-Bold)'],

            ['file' => 'assets/posmart-register-preview.webp', 'label' => 'Layar Mesin Kasir / Terminal POS (Barcode, Shift, Hold & Cetak Struk)'],

            ['file' => 'assets/posmart-cashier-preview.webp', 'label' => 'Manajemen Pesanan Kasir Online (Verifikasi & Pickup Toko)'],

            ['file' => 'assets/posmart-products-preview.webp', 'label' => 'Manajemen Produk & Stok Gudang (Panel Admin)'],

            ['file' => 'assets/posmart-login-preview.webp', 'label' => 'Halaman Login & Akses Multi-Role'],

        ],

    ],

[

        'title'    => 'Website Portfolio Reynaldi Delphiano',

        'year'     => '2025',

        'role'     => 'Frontend Developer',

        'tag'      => 'Karya Pribadi • Reynaldi Delphiano',

        'category' => 'web',

        'badge'    => 'Personal Web',

        'image'    => 'assets/portfolio-preview.svg',

        'logo'     => 'assets/reydel-logo.svg',

        'initial'  => 'RD Portfolio',

        'github'   => 'https://github.com/ReyDel6/ReyPortofolio',

        'live'     => 'http://reydel.page.gd/',

        'desc'     => 'Website personal milik <strong>Reynaldi Delphiano</strong> untuk menampilkan profil profesional, pengalaman kerja, pendidikan, skill, proyek, dan sertifikasi dalam satu halaman yang responsif.',

        'points'   => [

            '<strong>Profil profesional</strong> — ringkasan diri, fokus pengembangan, dan kontak sosial media.',

            '<strong>Showcase proyek</strong> — menampilkan UMKM Connect beserta fitur dan dokumentasinya.',

            '<strong>Lisensi & sertifikasi</strong> — galeri gambar sertifikat dan link PDF yang dapat dibuka.',

            '<strong>Responsive design</strong> — tampilan menyesuaikan desktop, tablet, dan mobile.',

        ],

        'meta'     => 'Teknologi: <strong>PHP</strong>, HTML, CSS, JavaScript • Data terpusat di <strong>data.php</strong>',

        'tech'     => [

            'Backend: PHP',

            'Frontend: HTML, CSS, JavaScript',

            'UI: Responsive design',

            'Deployment: InfinityFree-ready',

        ],

        'preview'       => 'assets/portfolio-home-preview.webp',

        'preview_label' => 'Preview Website',

    ],

    [

        'title'    => 'UMKM Connect Mobile',

        'year'     => '2026',

        'role'     => 'Mobile Developer',

        'tag'      => 'Karya Pribadi • Mobile Development',

        'category' => 'mobile',

        'badge'    => 'Flutter Mobile App',

        'image'    => 'assets/umkm-connect-mobile.svg',

        'logo'     => 'assets/umkm-connect-logo.png',

        'initial'  => 'UMKM Connect Mobile',

        'desc'     => 'Versi mobile <strong>UMKM Connect</strong> berbasis Flutter untuk membantu UMKM mengelola operasional, katalog, stok, transaksi, laporan, serta koneksi dengan customer dan supplier melalui smartphone.',

        'points'   => [

            '<strong>Aplikasi cross-platform</strong> — dikembangkan dengan Flutter dan Dart untuk pengalaman mobile yang konsisten.',

            '<strong>Dashboard & laporan</strong> — memantau produk, stok, transaksi, dan ringkasan penjualan dari perangkat mobile.',

            '<strong>Multi-role</strong> — mendukung alur Owner/UMKM, Supplier, dan Customer dengan akses sesuai kebutuhan.',

            '<strong>Customer & Supplier</strong> — menu pelanggan via QR, pencarian supplier, pemesanan, dan komunikasi antar-pengguna.',

            '<strong>Firebase terintegrasi</strong> — autentikasi, database Firestore, dan penyimpanan file melalui Firebase Storage.',

        ],

        'meta'     => 'Teknologi: <strong>Flutter (Dart)</strong> • Firebase Auth, Firestore, Storage • QR & laporan data',

        'tech'     => [

            'Mobile: Flutter + Dart',

            'Backend: Firebase Auth + Firestore',

            'Storage: Firebase Storage',

            'Utilities: QR, Chart, HTTP, Notifications',

        ],

        'hki'      => 'Proyek <strong>UMKM Connect</strong> beserta source code, desain antarmuka, logo, dan fiturnya adalah karya orisinal milik <strong>Reynaldi Delphiano</strong>, dilindungi Hak Cipta dan dicatatkan di DJKI (HKI <strong>EC002026133137</strong>, 2026).',

        'uiux'     => 'assets/ui-ux-umkm.jpeg',

        'uiux_label'=> 'Desain UI/UX Mobile',

        'hki_image'=> 'assets/haki-umkm.jpeg',

        'certificate' => [

            'label'  => 'Sertifikat Juara',

            'file'   => 'assets/sertifikat-juara.pdf',

        ],

'download' => [

            'label' => 'Unduh APK Android',

            'file'  => 'https://github.com/ReyDel6/UMKM_Connect-Web/releases',

        ],

    ],

    [

        'title'    => 'Garuda Riders Motorcycle Club',

        'year'     => '2026',

        'role'     => 'Fullstack Developer',

        'tag'      => 'Karya Pribadi • Live Web Komunitas',

        'category' => 'web',

        'badge'    => 'Live Web Komunitas',

        'image'    => 'assets/garuda-riders-logo.png',

        'initial'  => 'Garuda Riders',

        'github'   => 'https://github.com/ReyDel6/garuda-riders',

        'live'     => 'http://geng-motor.page.gd',

        'desc'     => 'Website resmi <strong>Garuda Riders Motorcycle Club</strong> — komunitas motor aktif sejak 2015. Menampilkan profil komunitas, visi, galeri foto & video, agenda event, artikel, klien/mitra, dan form kontak, dengan <strong>admin CMS</strong> untuk mengelola seluruh konten.',

        'points'   => [

            '<strong>Status Live</strong> — website telah resmi online dan dapat diakses publik di <a href="http://geng-motor.page.gd" target="_blank" rel="noopener">geng-motor.page.gd</a>.',

            '<strong>Profil & visi komunitas</strong> — kisah, sejarah, dan visi komunitas motor aktif sejak 2015.',

            '<strong>Galeri foto & video</strong> — mendukung upload gambar dan video MP4 dengan keterangan.',

            '<strong>Agenda event</strong> — daftar event mendatang & lampau lengkap dengan halaman detail.',

            '<strong>Artikel/blog</strong> — sistem berita dengan halaman detail berbasis slug.',

            '<strong>Klien & mitra</strong> — showcase logo partner dan produk/jasa komunitas.',

            '<strong>Form kontak</strong> — tersimpan ke database dengan notifikasi email admin.',

            '<strong>Admin CMS</strong> — CRUD artikel, event, galeri, klien, dan kotak masuk pesan.',

        ],

        'tech'     => [

            'Backend: Laravel 13 (PHP 8.3), Eloquent ORM',

            'Frontend: Blade + Tailwind CSS (tema navy & gold), Alpine.js, Vite',

            'Database: MySQL',

            'Auth: Laravel Breeze (login, register, profil)',

        ],

        'previews' => [
            ['file' => 'assets/garudariders-home.webp', 'label' => 'Halaman Beranda & Hero Section'],
            ['file' => 'assets/garudariders-tentang.webp', 'label' => 'Tentang Kami & Kisah Komunitas'],
            ['file' => 'assets/garudariders-galeri.webp', 'label' => 'Galeri Foto & Video Kegiatan Riding'],
            ['file' => 'assets/garudariders-event.webp', 'label' => 'Agenda Event & Touring'],
            ['file' => 'assets/garudariders-artikel.webp', 'label' => 'Publikasi Berita & Artikel'],
            ['file' => 'assets/garudariders-kontak.webp', 'label' => 'Form Kontak & Hubungi Komunitas'],
            ['file' => 'assets/garudariders-login.webp', 'label' => 'Halaman Login Admin CMS'],
            ['file' => 'assets/garudariders-dashboard.webp', 'label' => 'Dashboard Analitik & Manajemen Admin'],
        ],

    ],

    [

        'title'    => 'Plantify',

        'year'     => '2026',

        'role'     => 'Fullstack Developer',

        'tag'      => 'Karya Pribadi • Live Web & Mobile',

        'category' => 'mobile',

        'badge'    => 'Live App • Web & Mobile',

        'image'    => 'assets/plantify-icon.svg',

        'initial'  => 'Plantify',

        'github'   => 'https://github.com/ReyDel6/Plantify',

        'live'     => 'http://plantify.freedev.app',

        'desc'     => 'Aplikasi <strong>identifikasi & perawatan tanaman</strong> modern yang <strong>sudah go public dan aktif secara live</strong> di <a href="http://plantify.freedev.app" target="_blank" rel="noopener">plantify.freedev.app</a>. Dikembangkan menggunakan Laravel 12 + React 19 Inertia, bertampilan mobile-first botanical, serta dikemas sebagai <strong>hybrid Android via Capacitor</strong> dan PWA.',

        'points'   => [

            '<strong>Status Go Public</strong> — aplikasi sudah live di internet dan dapat diakses publik di <code>plantify.freedev.app</code> dengan hosting InfinityFree & MySQL.',

            '<strong>Beranda Botani</strong> — landing page modern dengan showcase interaktif Monstera, jadwal siram, dan identifikasi AI.',

            '<strong>Onboarding</strong> — panduan 3 slide bertema botani "Enjoy your Life with Plants".',

            '<strong>Identifikasi Tanaman</strong> — kuesioner ciri daun, cahaya, dan kebutuhan air untuk mencocokkan spesies.',

            '<strong>Koleksi Tanaman</strong> — kartu koleksi interaktif dengan status penyiraman, foto pertumbuhan, dan tips perawatan.',

            '<strong>Pengingat Perawatan & Streak</strong> — jadwal siram cerdas, streak harian, dan notifikasi web push (VAPID).',

            '<strong>Autentikasi Lengkap</strong> — login/signup split-screen bertema botani, Google & Facebook OAuth, passkey (WebAuthn), 2FA.',

            '<strong>Offline-First & PWA</strong> — sinkronisasi state tersimpan lokal + service worker.',

            '<strong>Dua Bahasa & Tema</strong> — Indonesia/English serta mode terang/gelap.',

        ],

        'tech'     => [

            'Backend: Laravel 12 + Laravel Fortify, Inertia.js v3',

            'Frontend: React 19 + TypeScript, Tailwind CSS 4, shadcn/Radix UI',

            'Mobile: Capacitor 8 (Android) + PWA',

            'Database & Hosting: MySQL; InfinityFree (plantify.freedev.app)',

        ],

        'previews' => [

            ['file' => 'assets/plantify-home.webp', 'label' => 'Halaman Beranda'],

            ['file' => 'assets/plantify-login.webp', 'label' => 'Halaman Login Botani'],

            ['file' => 'assets/plantify-collection.webp', 'label' => 'Koleksi Tanaman'],

            ['file' => 'assets/plantify-onboarding.webp', 'label' => 'Onboarding'],

        ],

    ],

[

        'title'    => 'Gudang Gadget',

        'year'     => '2026',

        'role'     => 'Fullstack Developer',

        'tag'      => 'Karya Pribadi • Web App',

        'category' => 'web',

        'badge'    => 'Gudang + Storefront Online',

        'image'    => 'assets/webgudang-icon.svg',

        'initial'  => 'Gudang Gadget',

        'github'   => 'https://github.com/ReyDel6/gudang-gadget',

        'desc'     => 'Aplikasi <strong>manajemen gudang & inventori gadget</strong> yang dikembangkan menjadi <strong>sistem toko online (storefront) publik</strong> dalam satu basis kode: dari katalog produk, keranjang <strong>slide-over</strong> tanpa reload, checkout online & WhatsApp, hingga <strong>gamifikasi storefront</strong> (tier reseller, flash drop, quest tracking service, meteran trade-in) di sisi pelanggan.',

        'points'   => [

            '<strong>Storefront publik</strong> — beranda dengan hero slider & flash drop, katalog + pencarian & filter kategori live, halaman detail produk dengan harga tier grosir/partai, checkout online tanpa login, dan halaman status order publik (termasuk unggah bukti transfer).',

            '<strong>Slide-over cart drawer</strong> — tambah ke keranjang via AJAX tanpa reload: qty stepper terkunci stok, progress bar Gratis Ongkir (Rp 150rb), upsell aksesoris, rincian subtotal/potongan/total, serta checkout multi-item langsung ke <strong>WhatsApp</strong> atau lanjut checkout online.',

            '<strong>Gamifikasi storefront</strong> — sistem tier Reseller (XP & level up), chip tier di navbar, flash drop & countdown deal, meteran "Health & Power" pada kalkulator tukar-tambah (trade-in), dan Quest Stepper + kartu garansi hologram di halaman tracking service.',

            '<strong>Dashboard manajemen</strong> — kartu statistik (total produk, stok, kategori, alert stok habis) + grafik Chart.js.',

            '<strong>CRUD inventori & kontrol stok</strong> — produk dengan foto, kategori auto-suggestion, status (Tersedia/Habis/Tidak Dijual), tombol +/− stok dengan riwayat perubahan (before/after, delta, user).',

            '<strong>Manajemen pengguna & autentikasi</strong> — CRUD admin dengan guard (tidak bisa hapus diri sendiri / user terakhir), login/logout & reset password.',

            '<strong>Ekspor & cetak</strong> — pencarian live, filter kategori, ekspor CSV, laporan cetak landscape.',

        ],

        'meta'     => 'Teknologi: <strong>Laravel 13 (PHP 8.3)</strong> + MySQL • Blade + Tailwind CSS 4 + Vite • Slide-over cart (AJAX) & checkout WhatsApp/online • Gamifikasi (XP/tier, quest, flash drop)',

        'tech'     => [

            'Backend: Laravel 13 (PHP 8.3)',

            'Frontend: Blade + Tailwind CSS 4, Chart.js, Vite',

            'Cart: slide-over drawer AJAX + checkout WhatsApp & online',

            'Database: MySQL',

        ],

        'previews' => [

            ['file' => 'assets/gudang-storefront-home.webp', 'label' => 'Storefront (Beranda & Flash Drop)'],

            ['file' => 'assets/gudang-storefront-drawer.webp', 'label' => 'Keranjang Slide-over — Gratis Ongkir & Checkout WhatsApp'],

            ['file' => 'assets/gudang-storefront-tracking.webp', 'label' => 'Tracking Service — Quest Stepper & Kartu Garansi Hologram'],

            ['file' => 'assets/gudang-storefront-tradein.webp', 'label' => 'Tukar-Tambah — Meter Health & Power'],

            ['file' => 'assets/gudang-login.webp', 'label' => 'Halaman Login'],

        ],

    ],

    [

        'title'    => 'Undangan Pernikahan Digital',

        'year'     => '2026',

        'role'     => 'Frontend Developer',

        'tag'      => 'Karya Pribadi • Web Development',

        'category' => 'web',

        'badge'    => 'Undangan Digital',

        'image'    => 'assets/undangan-preview.svg',

        'logo'     => 'assets/undangan-logo.svg',

        'initial'  => 'Undangan',

        'github'   => 'https://github.com/ReyDel6/wedding-invitation',

        'live'     => 'https://undangan-nikah-ruby.vercel.app',

        'desc'     => 'Aplikasi <strong>undangan pernikahan digital</strong> interaktif satu halaman berbasis <strong>React + Vite + Tailwind CSS 4</strong> — layar pembuka dengan foto pasangan, musik latar, countdown, rangkaian acara, galeri, RSVP WhatsApp, amplop digital, dan ucapan & doa tamu, dengan seluruh data dikelola lewat satu file config.',

        'points'   => [

            '<strong>Layar pembuka</strong> — foto pasangan berbingkai emas, tombol "Buka Undangan", dan sapaan tamu personal via <code>?to=Nama</code>.',

            '<strong>Musik latar</strong> — auto-play dengan tombol mute melayang di pojok layar.',

            '<strong>Countdown real-time</strong> — hitung mundur menuju hari pernikahan.',

            '<strong>Rangkaian acara</strong> — jadwal Akad & Resepsi lengkap dengan venue dan tautan Google Maps.',

            '<strong>RSVP ke WhatsApp</strong> — konfirmasi kehadiran otomatis tanpa backend.',

            '<strong>Amplop digital</strong> — nomor rekening, tombol salin, dan gambar QRIS.',

            '<strong>Ucapan & doa</strong> — tamu menulis doa yang tersimpan di localStorage per perangkat.',

            '<strong>Desain elegan</strong> — palet cream & emas, tipografi Playfair Display, dan animasi kelopak bunga.',

        ],

        'meta'     => 'Teknologi: <strong>React 19 + Vite + Tailwind CSS 4</strong> • lucide-react • Google Fonts • Deploy statis',

        'tech'     => [

            'Frontend: React 19 + Vite',

            'Styling: Tailwind CSS 4 (@theme custom palette)',

            'Icons: lucide-react',

            'Fonts: Playfair Display & Inter (Google Fonts)',

            'Deploy: static build (dist/) — Vercel/Netlify/GitHub Pages ready',

        ],

        'previews' => [

            ['file' => 'assets/undangan-cover-preview.webp', 'label' => 'Layar Pembuka (Cover)'],

            ['file' => 'assets/undangan-invitation-preview.webp', 'label' => 'Halaman Undangan (Mobile)'],

        ],

    ],

    [

        'title'    => 'Cuan Motor',

        'year'     => '2026',

        'role'     => 'Fullstack Developer',

        'tag'      => 'Karya Pribadi • Web App',

        'category' => 'web',

        'badge'    => 'Sewa & Jual Beli Motor',

        'image'    => 'assets/cuanmotor-logo.svg',

        'logo'     => 'assets/cuanmotor-logo.svg',

        'initial'  => 'Cuan Motor',

        'github'   => 'https://github.com/ReyDel6/cuanmotor',

        'desc'     => 'Platform <strong>sewa motor</strong> dan <strong>jual beli motor</strong> terpadu: katalog unit, sistem booking sewa dengan cek ketersediaan real-time, iklan jual-beli bervalidasi admin, laporan rekap, dan dashboard multi-role untuk Admin, Penjual, serta Pelanggan.',

        'points'   => [

            '<strong>Multi-role & autentikasi</strong> — peran Admin, Penjual, dan Pelanggan dengan middleware role dan pengalihan login (guest/user) yang rapi.',

            '<strong>Sewa motor</strong> — katalog unit sewa lengkap dengan detail, pencarian, booking berdasar tenggat, dan validasi ketersediaan real-time.',

            '<strong>Jual beli motor</strong> — penjual memasang iklan unit; admin melakukan validasi/moderasi sebelum iklan tayang publik.',

            '<strong>Dashboard peran</strong> — Penjual mengelola iklan & status unit, Pelanggan melihat booking, Admin memoderasi & menegosiasi.',

            '<strong>Laporan admin</strong> — rekap transaksi dengan prioritas status menunggu yang portabel ke SQLite/MySQL.',

            '<strong>Desain modern</strong> — Tailwind CSS 4, responsif penuh, dan foto unit asli berlisensi (CC/Wikimedia Commons).',

        ],

        'tech'     => [

            'Backend: Laravel 13 (PHP 8.3), Eloquent ORM',

            'Frontend: Blade + Tailwind CSS 4, Vite',

            'Database: MySQL (tes: SQLite :memory:)',

            'Auth: middleware role (Admin/Penjual/Pelanggan)',

        ],

        'previews' => [

            ['file' => 'assets/cuanmotor-home.webp', 'label' => 'Halaman Depan'],

            ['file' => 'assets/cuanmotor-sewa.webp', 'label' => 'Katalog Sewa Motor'],

            ['file' => 'assets/cuanmotor-masuk.webp', 'label' => 'Halaman Masuk'],

        ],

    ],

    [

        'title'    => 'Billing Rental PS & Warnet',

        'year'     => '2026',

        'role'     => 'Fullstack Developer',

        'tag'      => 'Karya Pribadi • Fullstack Web',

        'category' => 'web',

        'badge'    => 'Sistem Billing Realtime',

        'image'    => 'assets/billing-dashboard.webp',

        'initial'  => 'Billing PS',

        'desc'     => 'Sistem <strong>manajemen & billing rental PS / warnet</strong> realtime: unit PS/billiard/warnet, sesi dengan <strong>timer hitung mundur & jeda</strong>, tarif per jam berbasis blok 15 menit, kasir dengan produk (snack/minuman), member berpoin, promo paket jam & happy hour, laporan omzet & ekspor, semuanya diperbarui <strong>via WebSocket</strong> ke semua layar kasir dan pemilik.',

        'points'   => [

            '<strong>POS & dashboard unit realtime</strong> — status unit (tersedia/dipakai/rawat) dan sesi berjalan diperbarui langsung ke semua layar via WebSocket; timer hitung mundur di kartu unit.',

            '<strong>Sesi lengkap</strong> — mulai sesi dengan <strong>jumlah orang</strong> (split tagihan) dan durasi open-ended, perpanjang, <strong>jeda/resume</strong> (timer membeku saat jeda), stop menghitung durasi aktual, dan batal sesi.',

            '<strong>Pembayaran per sesi</strong> — sewa unit + produk kasir (snack/minuman), diskon member & promo, subtotal + diskon + total, metode Tunai/QRIS/Transfer, dan struk invoice bernomor INV-xxxxxx yang bisa dicetak.',

            '<strong>Member</strong> — poin setiap transaksi, diskon persen, dan riwayat belanja per member.',

            '<strong>Promo</strong> — paket jam & happy hour yang diterapkan otomatis pada perhitungan tarif.',

            '<strong>Shift kasir</strong> — buka/tutup shift dengan nominal kas awal, dan rekap selisih setoran.',

            '<strong>Laporan owner</strong> — omzet harian/mingguan/bulanan <strong>dan rentang tanggal kustom</strong>, unit & produk terlaris, jam sibuk, ekspor CSV/JSON.',

            '<strong>Auto notifikasi</strong> — peringatan visual saat sesi kurang dari 5 menit.',

            '<strong>Log aktivitas & multi-role</strong> — login, mulai/jeda/stop/batal sesi, transaksi, dan status unit tercatat; akun Owner & Kasir dengan kontrol aktif.',

        ],

        'meta'     => 'Teknologi: <strong>React + Vite + TypeScript + Tailwind CSS (Frontend)</strong> • <strong>Node.js + Express (Backend)</strong> • PostgreSQL + Prisma ORM • WebSocket realtime • JWT',

        'tech'     => [

            'Frontend: React (Vite), TypeScript, Tailwind CSS',

            'Backend: Node.js + Express — REST API',

            'Database: PostgreSQL + Prisma ORM',

            'Realtime: WebSocket',

            'Auth: JWT, multi-role (Owner/Kasir)',

        ],

        'previews' => [

            ['file' => 'assets/billing-login.webp', 'label' => 'Halaman Login'],

            ['file' => 'assets/billing-dashboard.webp', 'label' => 'Dashboard Owner (Statistik)'],

            ['file' => 'assets/billing-pos.webp', 'label' => 'POS Kasir — Sesi Aktif & Timer'],

            ['file' => 'assets/billing-laporan.webp', 'label' => 'Laporan & Ekspor'],

            ['file' => 'assets/billing-log.webp', 'label' => 'Log Aktivitas'],

        ],

    ],

    [

        'title'    => 'Sakinah Journeys — Travel Umroh',

        'year'     => '2024',

        'role'     => 'Fullstack Developer',

        'tag'      => 'Karya Pribadi • Web Development',

        'category' => 'web',

        'badge'    => 'Company Profile & CMS',

        'image'    => 'assets/sakinah-home.webp',

        'logo'     => 'assets/sakinah-logo.webp',

        'initial'  => 'Sakinah Journeys',

        'live'     => 'https://travel-umroh.page.gd/',

        'desc'     => 'Website <strong>company profile & CMS travel umroh</strong> untuk <strong>Sakinah Journeys</strong> — menampilkan paket, harga, jadwal keberangkatan, fasilitas, hotel & maskapai, galeri, artikel, dan FAQ, dengan <strong>admin CMS</strong> agar staf dapat mengelola seluruh konten tanpa menyentuh kode.',

        'points'   => [

            '<strong>Profil perusahaan</strong> — halaman Tentang Kami, visi, izin PPIU, dan informasi kontak yang dikelola lewat CMS.',

            '<strong>Paket umroh</strong> — daftar & halaman detail paket dengan durasi, fasilitas, hotel, dan maskapai dari database.',

            '<strong>Harga per tipe kamar</strong> — quad/triple/double tersimpan sebagai relasi, bukan field tunggal.',

            '<strong>Jadwal keberangkatan</strong> — tanggal, kuota, dan status (dibuka/penuh) per paket.',

            '<strong>Fasilitas, hotel & maskapai</strong> — data master yang dikaitkan ke banyak paket.',

            '<strong>Galeri & artikel</strong> — dokumentasi kegiatan dan blog seputar umroh dengan status Publish/Draft.',

            '<strong>FAQ & kontak</strong> — accordion FAQ dan form konsultasi/inquiry yang tersimpan ke database.',

            '<strong>Admin CMS multi-modul</strong> — CRUD paket, jadwal, fasilitas, hotel, maskapai, galeri, artikel, FAQ, dan daftar inquiry; upload gambar tervalidasi.',

            '<strong>Fondasi rapi</strong> — PHP Native + MySQL dengan PDO prepared statement, session auth, dan tampilan responsif.',

        ],

        'meta'     => 'Teknologi: <strong>PHP Native</strong> + <strong>MySQL (PDO)</strong> • session-based auth • responsive & basic SEO',

        'tech'     => [

            'Backend: PHP Native + MySQL (PDO)',

            'Frontend: HTML, CSS (Tailwind), JavaScript',

            'Auth: Session-based admin CMS',

            'Fitur: CMS penuh, upload gambar, SEO, responsif',

        ],

        'previews' => [

            ['file' => 'assets/sakinah-home.webp', 'label' => 'Beranda'],

            ['file' => 'assets/sakinah-paket.webp', 'label' => 'Daftar Paket Umroh'],

            ['file' => 'assets/sakinah-paket-detail.webp', 'label' => 'Detail Paket'],

            ['file' => 'assets/sakinah-galeri.webp', 'label' => 'Galeri'],

            ['file' => 'assets/sakinah-artikel.webp', 'label' => 'Artikel/Berita'],

            ['file' => 'assets/sakinah-kontak.webp', 'label' => 'Kontak'],

        ],

    ],

    [

        'title'    => 'Agrinex Desktop Engineering Suite',

        'year'     => '2026',

        'role'     => 'Ketua Tim — Desktop & IoT',

        'tag'      => 'Karya Pribadi • Desktop Application',

        'category' => 'desktop',

        'badge'    => 'PyQt6 Engineering Tool',

        'image'    => 'assets/agrinex-desktop-engineering-suite.png',

        'initial'  => 'AGRINEX DESKTOP',

        'github'   => '',

        'desc'     => 'Aplikasi desktop engineering untuk commissioning, kalibrasi sensor, monitoring perangkat IoT, dan provisioning hardware <strong>AGRINEX Smart Farming</strong> di lapangan.',

        'points'   => [

            '<strong>Site & field provisioning</strong> — menghubungkan modul ESP32 dengan petani, lahan, dan metadata lokasi.',

            '<strong>Live multi-sensor monitor</strong> — memantau suhu, kelembapan, tekanan, radiasi, hujan, dan kelembapan tanah secara real-time.',

            '<strong>Calibration wizard</strong> — kalibrasi sensor analog dengan regresi linear, offset, multiplier, dan validasi nilai.',

            '<strong>Realtime waveform</strong> — grafik ADC untuk mendeteksi noise EMI dan ketidakstabilan sinyal.',

            '<strong>OTA firmware workflow</strong> — builder dan flasher firmware ESP32 melalui UART dengan log proses yang jelas.',

        ],

        'meta'     => 'Teknologi: <strong>Python + PyQt6</strong> • Serial/BLE • ESP32 • LoRaWAN • OTA Firmware',

        'tech'     => [

            'Desktop: Python + PyQt6',

            'Hardware: ESP32, LoRaWAN, BLE',

            'Protocol: Serial UART, CRC16',

            'Tools: esptool.py, calibration wizard',

        ],

        'previews' => [

            ['file' => 'assets/agrinex-desktop-engineering-suite.png', 'label' => 'Desktop Engineering Suite'],

        ],

    ],

    [

        'title'    => 'Agrinex Web Command Center',

        'year'     => '2026',

        'role'     => 'Ketua Tim — Fullstack',

        'tag'      => 'Karya Pribadi • Web Application',

        'category' => 'web',

        'badge'    => 'Smart Farming Web Portal',

        'image'    => 'assets/agrinex-web-command-center-live.png',

        'initial'  => 'AGRINEX WEB',

        'github'   => '',

        'desc'     => 'Web command center AGRINEX berbasis <strong>React + Vite</strong> untuk memantau kondisi lahan, telemetri sensor real-time, peta GIS satelit, kesehatan gateway ESP32, kontrol aktuator, dan peringatan agronomis dalam satu dashboard.',

        'points'   => [

            '<strong>GIS spatial command map</strong> — menampilkan petak lahan, node sensor, gateway LoRa, jalur irigasi, dan heatmap kondisi tanaman berbasis Leaflet GIS.',

            '<strong>Telemetry analytics</strong> — grafik historis suhu kanopi, kelembapan tanah, radiasi matahari, dan aktivitas pompa dengan Chart.js.',

            '<strong>Fleet health monitoring</strong> — status gateway ESP32, heap memory, suhu SoC, RSSI, dan integritas CRC16 secara langsung.',

            '<strong>Phytopathology alert system</strong> — peringatan risiko penyakit tanaman beserta rekomendasi agronomis dari model AI.',

            '<strong>Closed-loop actuator control</strong> — kendali saklar pompa dan sprayer dengan status real-time serta safety cutoff otomatis.',

        ],

        'meta'     => 'Teknologi: <strong>React + Vite</strong> • Tailwind CSS • FastAPI • WebSocket • Leaflet • Chart.js • MySQL',

        'tech'     => [

            'Frontend: React + Vite, Tailwind CSS',

            'Backend: FastAPI + Python',

            'Realtime: WebSocket telemetry hub',

            'Visualization: Leaflet GIS + Chart.js',

            'Database: MySQL schema agrinex',

        ],

        'previews' => [

            ['file' => 'assets/agrinex-web-command-center-live.png', 'label' => 'Command Center & Peta GIS Real-Time (React + Leaflet)'],

            ['file' => 'assets/agrinex-web-command-center-full.png', 'label' => 'Dashboard Agro-Portal & Kontrol Aktuator (React)'],

            ['file' => 'assets/agrinex-web-diagnostic.png', 'label' => 'Panel Diagnostik Gateway & Serial Monitor'],

            ['file' => 'assets/agrinex-web-notifications.png', 'label' => 'Sistem Notifikasi & Peringatan Dini'],

            ['file' => 'assets/agrinex-web-consultation.png', 'label' => 'Panel Konsultasi & Nasihat Agronomis'],

            ['file' => 'assets/agrinex-web-landing.png', 'label' => 'Landing Page Publik AGRINEX'],

        ],

    ],

    [

        'title'    => 'Agrinex Farmer Mobile App',

        'year'     => '2026',

        'role'     => 'Ketua Tim — Mobile',

        'tag'      => 'Karya Pribadi • Mobile Application',

        'category' => 'mobile',

        'badge'    => 'Flutter Android & PWA',

        'image'    => 'assets/agrinex-mobile-banner.webp',

        'initial'  => 'AGRINEX MOBILE',

        'github'   => '',

        'desc'     => 'Aplikasi mobile farmer untuk membantu petani membaca kondisi lahan, menerima peringatan, dan mengendalikan pompa atau sprayer langsung dari pematang sawah.',

        'points'   => [

            '<strong>Glanceable farmer dashboard</strong> — kartu besar untuk kelembapan tanah, suhu, cuaca, dan status koneksi.',

            '<strong>One-tap actuator control</strong> — menyalakan pompa irigasi atau boom sprayer dengan pilihan durasi dan safety auto-cutoff.',

            '<strong>Offline-first BLE</strong> — tetap dapat membaca telemetri langsung dari node saat koneksi internet tidak tersedia.',

            '<strong>Early warning system</strong> — notifikasi heat stress, risiko jamur, dan saran tindakan yang mudah dipahami.',

            '<strong>Mobile responsive experience</strong> — antarmuka kontras tinggi, ramah outdoor, dan dapat digunakan dengan satu tangan.',

        ],

        'meta'     => 'Teknologi: <strong>Flutter/Dart</strong> • Android APK • PWA • BLE 5.0 • REST API • Offline-first',

        'tech'     => [

            'Mobile: Flutter + Dart',

            'Platform: Android APK + PWA',

            'Connectivity: BLE 5.0 + REST API',

            'Features: offline-first, haptic action, TTS guidance',

        ],

        'previews' => [

            ['file' => 'assets/agrinex-mobile-banner.webp', 'label' => 'Showcase Aplikasi Flutter'],

            ['file' => 'assets/agrinex-mobile-flutter-home.png', 'label' => 'Flutter — Beranda'],

            ['file' => 'assets/agrinex-mobile-flutter-actuator.png', 'label' => 'Flutter — Aktuator'],

            ['file' => 'assets/agrinex-mobile-flutter-analytics.png', 'label' => 'Flutter — Analitik'],

            ['file' => 'assets/agrinex-mobile-flutter-settings.png', 'label' => 'Flutter — Pengaturan'],

        ],

    ],

    [

        'title'    => 'Agrinex AIoT Smart Farming Node',

        'year'     => '2026',

        'role'     => 'Ketua Tim — IoT & Hardware Engineering',

        'tag'      => 'Karya Riset • IoT & Hardware',

        'category' => 'iot',

        'badge'    => 'ESP32 Smart Device (TRL 3)',

        'image'    => 'assets/agrinex-iot-prototype-1.webp',

        'initial'  => 'AGRINEX IOT NODE',

        'github'   => '',

        'desc'     => 'Prototipe perangkat keras AIoT pemantau kondisi tanah dan iklim mikro pertanian berbasis <strong>ESP32 Edge-AI</strong>, dilengkapi catu daya sel surya mandiri, sensor hujan, probe kelembapan tanah, dan aktuator pompa irigasi otomatis.',

        'points'   => [

            '<strong>Solar-Powered Edge Node</strong> — modul catu daya mandiri berbasis panel surya dan manajemen daya hemat energi ESP32 deep-sleep.',

            '<strong>Continuous Soil & Rain Sensing</strong> — pembacaan kapasitif kelembapan/hara tanah secara kontinu dan deteksi tetesan hujan untuk proteksi over-watering.',

            '<strong>Automated Drip Irrigation</strong> — aktuator pompa air mini DC terintegrasi logika ambang batas kelembapan dan kontrol manual remote.',

            '<strong>Modular 3D Enclosure</strong> — perancangan casing dan dudukan 3D print untuk ketahanan lingkungan lahan uji pertanian.',

            '<strong>Telemetry Uplink Protocol</strong> — transmisi data register telemetri via protokol serial UART / MQTT ke Agrinex Desktop Suite dan Web Command Center.',

        ],

        'meta'     => 'Teknologi: <strong>ESP32 • Solar Cell • Sensors (Soil & Rain) • Mini Pump • C/C++ • 3D Print</strong>',

        'tech'     => [

            'Hardware: ESP32 Edge Node',

            'Sensors: Soil Moisture & Raindrop MH-RD',

            'Actuator: Mini Submersible DC Pump',

            'Power: Solar Panel + Battery Charging',

            'Enclosure: Custom 3D Printed Casing',

            'Communication: UART Serial & MQTT',

        ],

        'previews' => [

            ['file' => 'assets/agrinex-iot-prototype-1.webp', 'label' => 'Prototipe Fisik AIoT Node — Modul Solar Cell, Sensor Hujan & Probe Tanah (TRL 3)'],

            ['file' => 'assets/agrinex-iot-prototype-3.webp', 'label' => 'Perspektif 3D Enclosure Node & Pompa Otomatis Irigasi'],

            ['file' => 'assets/agrinex-iot-prototype-4.webp', 'label' => 'Wiring Pengkabelan & Integrasi Smart Meter Sensing'],

            ['file' => 'assets/agrinex-iot-prototype-2.webp', 'label' => 'Uji Coba Lapangan Simulasi Respons Kelembapan Tanah'],

        ],

    ],

];

$education = [

    [

        'degree'   => 'S1 Sistem Informasi',

        'school'   => 'Universitas Bina Sarana Informatika (BSI)',

        'date'     => 'Mar 2024 – Mar 2028 (Diharapkan)',

        'icon'     => '🎓',

        'badge'    => 'UBSI',

        'logo'     => 'assets/logo-ubsi.webp',

        'desc'     => 'Mempelajari arsitektur sistem informasi, rekayasa perangkat lunak, manajemen basis data, dan pengembangan aplikasi enterprise.',

    ],

];

$competitions = [
    [
        'title'       => 'Ketua Tim Pelaksana (Team Leader — AIoT Innovation)',
        'event'       => 'DeepTech for Smart-X Hackathon 2026',
        'organizer'   => 'Institut Teknologi Bandung (ITB) & Kemendiktisaintek',
        'date'        => 'Okt 2026',
        'location'    => 'Bandung / Hybrid, Indonesia',
        'category'    => 'AIoT & Smart Farming',
        'badge'       => 'Program Pendanaan Riset ITB 2026',
        'logo'        => 'assets/logo-itb.webp',
        'icon'        => '🏆',
        'innovation'  => 'AI Soil Mapping untuk Menekan Biaya Produksi Pertanian (Agrinex Nusantara)',
        'team'        => 'Tim Agrinex Nusantara (Kolaborasi UBSI x PPKPI)',
        'desc'        => 'Inovasi sistem AIoT soil mapping kontinu berbasis Edge-AI (ESP32) dan Machine Learning kalibrasi nutrisi hara NPK tanah, terintegrasi dengan ekosistem Agrinex (Desktop, Web GIS, Mobile App, dan WhatsApp Gateway) untuk menekan biaya produksi dan pemupukan petani hortikultura hingga >20%.',
        'tech'        => [
            'ESP32 Edge-AI',
            'Machine Learning',
            'Multi-Sensor NPK & EC',
            'MQTT Protocol',
            'Python / PyQt6',
            'React + Vite',
            'Flutter (Dart)',
            'WhatsApp Gateway',
        ],
        'items'       => [
            'Memimpin Tim Agrinex Nusantara (4 anggota lintas institusi: UBSI, PPKPI, ITB) dalam perancangan proposal riset inovasi dan koordinasi teknis.',
            'Merancang arsitektur sistem Hybrid Edge-Cloud: ESP32 Edge-AI noise filtering, kalibrasi sensor NPK dinamis berbasis kelembapan tanah, dan komunikasi hemat daya MQTT Register-Mapped Protocol.',
            'Mengintegrasikan model Machine Learning Predictive Nutrient Adjuster untuk deteksi dini risiko penyakit serta rekomendasi pemupukan presisi per bedeng tanam.',
            'Menghubungkan ekosistem perangkat lunak Agrinex: Desktop Engineering Tool (PyQt6), Web Command Center GIS, Mobile App Petani (Flutter), dan WhatsApp Gateway untuk notifikasi tindakan langsung.',
            'Menyusun dokumen proposal pendanaan resmi Ditjen Risbang Kemendiktisaintek untuk peningkatan kesiapan teknologi dari TKT 3 menuju TKT 6, serta materi eksekutif Pitch Deck \'Technology Roots to Dignity\'.',
        ],
        'docs'        => [
            [
                'label' => 'Pitch Deck Slide (PPTX)',
                'file'  => 'assets/agrinex-nusantara-pitch-deck.pptx',
                'type'  => 'pptx',
            ],
        ],
        'gallery'     => [
            [
                'image' => 'assets/agrinex-pitching-gis-screen.webp',
                'label' => 'Demonstrasi Live Web GIS & Command Center Agrinex di Layar Utama',
            ],
            [
                'image' => 'assets/agrinex-pitching-hardware-team.webp',
                'label' => 'Paparan Teknis Tim & Pengujian Prototipe Fisik Hardware AIoT',
            ],
            [
                'image' => 'assets/agrinex-pitching-presentation.webp',
                'label' => 'Sesi Pitching & Diskusi Solusi Inovasi di Hadapan Audiens',
            ],
        ],
        'project_link' => [
            'url'       => 'project-detail.php?p=16',
            'title'     => 'Implementasi Rancang Bangun Prototipe & Sistem AIoT',
            'desc'      => 'Lihat detail arsitektur hardware node, sensor TKT 3, boks enclosure 3D, dan wiring lengkap di halaman Proyek.',
            'btn_label' => 'Lihat Detail Proyek',
        ],
    ],
    [
        'title'       => 'Juara 2 — IT Bootcamp "Next-Gen Software Engineering with AI"',
        'event'       => 'IT Bootcamp & Competition UBSI 2025',
        'organizer'   => 'Universitas Bina Sarana Informatika (UBSI)',
        'date'        => '8 Jan 2025',
        'location'    => 'Jakarta, Indonesia',
        'category'    => 'Software Engineering & AI',
        'badge'       => 'Juara 2 (Penghargaan Rektor)',
        'logo'        => 'assets/logo-ubsi.webp',
        'icon'        => '🥈',
        'innovation'  => 'UMKM Connect — Platform Ekosistem Digital Kasir, QR, & B2B UMKM',
        'team'        => 'Karya Pribadi / Mandiri (Reynaldi Delphiano)',
        'desc'        => 'Meraih Juara 2 dalam ajang kompetisi IT Bootcamp "Next-Gen Software Engineering with AI" yang diselenggarakan oleh Universitas Bina Sarana Informatika. Aplikasi UMKM Connect dinilai unggul dalam memecahkan masalah operasional, transaksi kasir POS, dan konektivitas B2B antar pelaku UMKM dengan implementasi teknologi perangkat lunak modern.',
        'tech'        => [
            'Laravel (PHP)',
            'React.js',
            'Flutter (Dart)',
            'MySQL',
            'RESTful API',
            'AI Integration',
        ],
        'items'       => [
            'Meraih predikat Juara 2 dan Piagam Penghargaan Resmi yang ditandatangani langsung oleh Rektor Universitas Bina Sarana Informatika (Prof. Dr. Ir. Mochammad Wahyudi, M.Kom, MM, M.Pd).',
            'Merancang dan membangun arsitektur sistem UMKM Connect: backend REST API Laravel, antarmuka web modern React, aplikasi mobile Flutter, dan sistem kasir POS interaktif.',
            'Mempresentasikan inovasi dan kelayakan bisnis software di hadapan tim juri akademisi dan pakar IT industri.',
            'Mendaftarkan dan mengamankan Hak Cipta resmi (HKI) atas karya cipta aplikasi UMKM Connect di Kementerian Hukum dan HAM RI.',
        ],
        'gallery'     => [
            [
                'image' => 'assets/sertifikat-juara-preview.webp',
                'label' => 'Sertifikat Juara 2 Rektor UBSI',
            ],
            [
                'image' => 'assets/haki-umkm.jpeg',
                'label' => 'Surat Pencatatan Hak Cipta (HKI) Kemenkumham',
            ],
            [
                'image' => 'assets/ui-ux-umkm.jpeg',
                'label' => 'Desain Antarmuka UI/UX Mobile UMKM Connect',
            ],
            [
                'image' => 'assets/umkm-web-login-preview.webp',
                'label' => 'Antarmuka Web Portal UMKM Connect',
            ],
            [
                'image' => 'assets/umkm-web-pos-preview.webp',
                'label' => 'Terminal Kasir POS & QRIS Dinamis UMKM Connect',
            ],
        ],
        'project_link' => [
            'url'       => 'project-detail.php?p=2',
            'title'     => 'Sistem Aplikasi UMKM Connect (Web POS & Ekosistem Bisnis)',
            'desc'      => 'Jelajahi arsitektur fullstack, alur transaksi kasir, dan demo fitur aplikasi di halaman Proyek.',
            'btn_label' => 'Lihat Detail Proyek',
        ],
    ],
];

$talks = [
    [
        'title'       => 'Pembicara Pelatihan Web Programming',
        'org'         => 'Universitas Ibnu Chaldun',
        'date'        => '10 Okt 2026',
        'location'    => 'Aula, Universitas Ibnu Chaldun',
        'icon'        => '🎤',
        'badge'       => 'Pembicara',
        'category'    => 'Pelatihan Web & AI',
        'photos'      => [
            'assets/experience/pembinaan-pemuda-2026-poster.webp',
            'assets/experience/pembinaan-pemuda-2026-foto.webp',
        ],
        'items'       => [
            'Menjadi pembicara pada acara "Pembinaan Aktivitas Pemuda: Pelatihan Web Programming" yang digelar Sabtu, 10 Oktober 2026 di Aula Universitas Ibnu Chaldun.',
            'Menyampaikan materi pengembangan web dasar dan membangun website dengan bantuan AI (Build web with AI) kepada peserta pemuda.',
        ],
    ],
    [
        'title'       => 'Pembicara (Narasumber) AI',
        'org'         => 'RPTRA Tunas Teratai Cipayung',
        'date'        => '2026',
        'location'    => 'Cipayung, Jakarta Timur',
        'icon'        => '🎤',
        'badge'       => 'Pembicara',
        'category'    => 'Edukasi AI untuk Remaja',
        'items'       => [
            'Memaparkan materi "Mengeluarkan Potensi AI Sepenuhnya: Pengenalan Kecerdasan Buatan untuk Remaja" kepada peserta remaja di RPTRA Tunas Teratai Cipayung.',
            'Memandu peserta mempraktikkan prompting AI untuk menyusun CV dan surat lamaran kerja.',
        ],
    ],
];

$experiences = [
    [
        'title'       => 'Web Developer',
        'track'       => 'IT',
        'org'         => 'Nexus Digital Creative',
        'date'        => '2026 – Sekarang',
        'location'    => 'Jakarta, Indonesia',
        'category'    => 'Web Development',
        'icon'        => '💻',
        'badge'       => 'Nexus',
        'logo'        => 'assets/logo-ndc.webp',
        'items'       => [
            'Mengembangkan, memelihara, dan mengoptimalkan aplikasi web modern yang responsif dan interaktif.',
            'Membangun antarmuka frontend dinamis serta mengintegrasikannya secara seamless dengan RESTful API dan database.',
            'Berkolaborasi dalam tim kreatif untuk menerjemahkan kebutuhan klien dan rancangan UI/UX ke dalam kode yang bersih dan efisien.',
        ],
    ],
    [
        'title'       => 'Service Technician (Mesin EDC)',
        'track'       => 'IT',
        'org'         => 'PT Bank Central Asia Tbk (BCA)',
        'date'        => 'Sep 2024 – Okt 2024',
        'location'    => 'Kebon Jeruk, Jakarta',
        'category'    => 'Teknis & Hardware',
        'icon'        => '🏦',
        'badge'       => 'BCA',
        'logo'        => 'https://cdn.brandfetch.io/bca.co.id/icon',
        'items'       => [
            'Melakukan maintenance berkala, perbaikan, installment (pemasangan baru), dan replace mesin EDC di berbagai merchant BCA.',
            'Memastikan konektivitas jaringan terminal EDC dan kelancaran transaksi merchant.',
        ],
    ],
    [
        'title'       => 'Service Technician (Smartphone & Gadget)',
        'track'       => 'IT',
        'org'         => 'Laku6.com',
        'date'        => 'Apr 2024 – Sep 2024',
        'location'    => 'Cengkareng, Jakarta',
        'category'    => 'Teknis & Hardware',
        'icon'        => '📱',
        'badge'       => 'Laku6',
        'logo'        => 'https://cdn.brandfetch.io/laku6.com/icon',
        'items'       => [
            'Melakukan QC & feature testing mendalam pada smartphone untuk kelayakan fungsi jual-beli kembali.',
            'Melakukan pergantian dan repair sparepart hardware handphone.',
            'Troubleshooting dan penyelesaian masalah software (OS Android & iOS flashing/reset).',
        ],
    ],
    [
        'title'       => 'PIC (Person In Charge)',
        'track'       => 'Non-IT',
        'org'         => 'PT Hasta Ayu Nusantara',
        'date'        => 'Jan 2026 – Jun 2026',
        'location'    => 'Jakarta, Indonesia',
        'category'    => 'Leadership & Ops',
        'icon'        => '🏢',
        'badge'       => 'HAN',
        'logo'        => 'https://images.glints.com/unsafe/glints-dashboard.s3.amazonaws.com/company-logo/e3599d10e533038cf5697241dc2851cf.png',
        'items'       => [
            'Bertanggung jawab penuh mengelola operasional harian, koordinasi tim lintas fungsi, dan memastikan pencapaian target proyek sesuai standar perusahaan.',
            'Memimpin, mengarahkan, dan mengevaluasi kinerja anggota tim guna meningkatkan produktivitas serta efisiensi kerja di lapangan.',
            'Menjadi point of contact utama lintas divisi serta menangani problem solving operasional secara taktis.',
            'Mengelola administrasi proyek, penyusunan laporan berkala, dan kepatuhan SOP operasional.',
        ],
    ],
    [
        'title'       => 'Team Leader',
        'track'       => 'Non-IT',
        'org'         => 'Colony Group of Companies (Nescafé)',
        'date'        => 'Jul 2025 – Des 2025',
        'location'    => 'Pasar Minggu, Jakarta',
        'category'    => 'Leadership & Sales',
        'icon'        => '☕',
        'badge'       => 'Nescafé',
        'logo'        => 'https://cdn.brandfetch.io/nescafe.com/icon',
        'items'       => [
            'Memimpin dan mengawasi kinerja tim field sales / promoter untuk target penjualan produk Nescafé (harian, mingguan, bulanan).',
            'Mengkoordinasikan event, pameran, dan kegiatan brand activation di lapangan guna meningkatkan penetrasi pasar & brand awareness.',
            'Melakukan briefing rutin, evaluasi performa kerja, dan pelatihan strategi penjualan tim.',
            'Menyusun sales report berkala, menganalisis tren pasar, dan memberikan rekomendasi taktis ke manajemen.',
        ],
    ],
    [
        'title'       => 'Marketing Agent Officer',
        'track'       => 'Non-IT',
        'org'         => 'WOM Finance',
        'date'        => 'Jan 2023 – Mar 2023',
        'location'    => 'Jakarta Selatan',
        'category'    => 'Finance & Marketing',
        'icon'        => '💳',
        'badge'       => 'WOM',
        'logo'        => 'https://cdn.brandfetch.io/wom.co.id/icon',
        'items'       => [
            'Mengelola, mengembangkan, dan memperluas jaringan kemitraan agen untuk meningkatkan perolehan aplikasi pembiayaan.',
            'Sosialisasi program pemasaran, negosiasi kemitraan, dan verifikasi awal kelayakan berkas pengajuan.',
            'Analisis potensi pasar wilayah dan evaluasi produktivitas mitra kerja.',
        ],
    ],
    [
        'title'       => 'Supervisor & Sales Officer',
        'track'       => 'Non-IT',
        'org'         => 'PT Bank Woori Saudara Indonesia 1906, Tbk.',
        'date'        => 'Agu 2022 – Jan 2023',
        'location'    => 'Jakarta Selatan',
        'category'    => 'Finance & Leadership',
        'icon'        => '🏦',
        'badge'       => 'BWS',
        'logo'        => 'https://cdn.brandfetch.io/bankwoorisaudara.com/icon',
        'items'       => [
            'Memimpin dan memonitor aktivitas tim sales dalam akuisisi nasabah produk kredit pensiunan dan consumer banking.',
            'Menyusun strategi penetrasi pasar, pembagian target individu, dan pendampingan closing transaksi.',
            'Memastikan kepatuhan proses administrasi aplikasi kredit sesuai regulasi perbankan dan mitigasi risiko.',
            'Membangun hubungan kemitraan strategis dengan instansi mitra penyalur dana pensiun.',
        ],
    ],
    [
        'title'       => 'Sales Force Pensiunan',
        'track'       => 'Non-IT',
        'org'         => 'PT Bank Syariah Indonesia Tbk (BSI)',
        'date'        => 'Mei 2022 – Agu 2022',
        'location'    => 'Jakarta Selatan',
        'category'    => 'Finance & Sales',
        'icon'        => '🌙',
        'badge'       => 'BSI',
        'logo'        => 'https://cdn.brandfetch.io/bankbsi.co.id/icon',
        'photos'      => ['assets/experience/bsi.jpeg'],
        'items'       => [
            'Pemasaran produk pembiayaan pensiun syariah kepada calon nasabah purna tugas ASN, TNI, Polri, dan BUMN.',
            'Melakukan kunjungan langsung, presentasi produk, dan asistensi kelengkapan berkas administrasi pembiayaan.',
            'Menjaga tingkat retensi nasabah dan memberikan konsultasi keuangan syariah secara profesional.',
        ],
    ],
    [
        'title'       => 'Sales Consultant',
        'track'       => 'Non-IT',
        'org'         => 'Wuling Motors (Wuling Prima Fatmawati)',
        'date'        => 'Sep 2021 – Feb 2022',
        'location'    => 'Jakarta Selatan',
        'category'    => 'Sales & Otomotif',
        'icon'        => '🚗',
        'badge'       => 'Wuling',
        'logo'        => 'https://cdn.brandfetch.io/wuling.id/icon',
        'photos'      => ['assets/experience/wuling.jpeg'],
        'items'       => [
            'Konsultasi penjualan unit kendaraan roda empat, presentasi product knowledge, dan memandu test drive calon konsumen.',
            'Negosiasi skema pembiayaan (cash/kredit), koordinasi dengan lembaga leasing, dan pengurusan kelengkapan dokumen serah terima.',
            'Membangun prospek database baru melalui kegiatan canvassing, exhibition, dan digital marketing mandiri.',
        ],
    ],
    [
        'title'       => 'Surveyor - Traffic Counting & Data Collection',
        'track'       => 'Non-IT',
        'org'         => 'Sampingan (Staffinc)',
        'date'        => 'Mar 2021 – Jun 2021',
        'location'    => 'Jakarta & Sekitarnya',
        'category'    => 'Riset & Data',
        'icon'        => '📈',
        'badge'       => 'Staffinc',
        'logo'        => 'https://cdn.brandfetch.io/staffinc.co/icon',
        'items'       => [
            'Riset dan pencatatan volume traffic driver online di titik-titik strategis menggunakan aplikasi counting digital.',
            'Menyusun laporan verifikasi data harian untuk kebutuhan riset pasar.',
        ],
    ],
    [
        'title'       => 'Data Input / Entry',
        'track'       => 'Non-IT',
        'org'         => 'Program Vaksinasi Merdeka (Polda Metro Jaya)',
        'date'        => 'Agu 2021 & Jan 2022',
        'location'    => 'Cipayung, Jakarta Timur',
        'category'    => 'Administrasi & Data',
        'icon'        => '💉',
        'badge'       => 'Polri',
        'logo'        => 'https://upload.wikimedia.org/wikipedia/commons/6/69/Logo_Polri.png',
        'photos'      => ['assets/experience/vaksinasi merdeka.jpeg'],
        'items'       => [
            'Input data registrasi penerima vaksinasi (termasuk program Vaksinasi Merdeka Anak) ke dalam database sistem pusat.',
            'Rekapitulasi berkas digital harian dengan tingkat akurasi tinggi.',
        ],
    ],
    [
        'title'       => 'Sorter (Pekerja Logistik)',
        'track'       => 'Non-IT',
        'org'         => 'Lazada Express',
        'date'        => 'Jan 2019 – Jan 2023',
        'location'    => 'Depok, Jawa Barat',
        'category'    => 'Logistik & Operasional',
        'icon'        => '📦',
        'badge'       => 'Lazada',
        'logo'        => 'https://cdn.brandfetch.io/lazada.co.id/icon',
        'items'       => [
            'Melakukan sortir, scanning barcode, dan pengelompokan paket berdasarkan zona rute distribusi kurir.',
            'Memastikan ketepatan alur sortir logistik inbound & outbound sesuai target SLA.',
        ],
    ],
    [
        'title'       => 'Teller (Staff Perbankan)',
        'track'       => 'Non-IT',
        'org'         => 'PT Bank Central Asia Tbk (BCA)',
        'date'        => 'Sep 2018 – Sep 2019',
        'location'    => 'Sunter, Jakarta Utara',
        'category'    => 'Perbankan & Finance',
        'icon'        => '🏦',
        'badge'       => 'BCA',
        'logo'        => 'https://cdn.brandfetch.io/bca.co.id/icon',
        'photos'      => ['assets/experience/bca.jpeg', 'assets/experience/bca2.jpeg'],
        'items'       => [
            'Melayani transaksi perbankan tunai dan non-tunai (setor/tarik kas, kliring, transfer, valuta asing) dengan akurasi 100%.',
            'Memberikan layanan Service Excellence berorientasi Customer Focus dan melakukan cross-selling produk perbankan.',
            'Menjalankan operasional harian sesuai kepatuhan SOP perbankan dan menyusun rekonsiliasi kas akhir hari.',
        ],
    ],
];

$trainings = [
    [
        'title'       => 'Web Developer',
        'org'         => 'Pusat Pelatihan Kerja Pengembangan Industri (PPKPI)',
        'date'        => 'Jun 2026 – Sekarang',
        'location'    => 'Jakarta, Indonesia',
        'category'    => 'Web Development',
        'icon'        => '💻',
        'badge'       => 'Sertifikat BNSP',
        'logo'        => 'assets/logo-ppkpi.jpeg',
        'tech'        => ['React.js', 'TypeScript', 'Tailwind CSS', 'JavaScript', 'Node.js', 'Vite', 'MySQL', 'Firebase'],
        'items'       => [
            'Membangun antarmuka web modern menggunakan React dalam program pelatihan pengembangan perangkat lunak.',
            'Mengembangkan aplikasi web interaktif, mengelola state komponen, serta menghubungkan frontend dengan backend/API.',
            'Menerapkan clean code, efisiensi performa, dan modern development tools.',
        ],
        'results'    => [
            ['image' => 'assets/posmart-register-preview.webp', 'label' => 'POSMart — Layar Kasir / Terminal POS'],
            ['image' => 'assets/posmart-catalog-preview.webp', 'label' => 'POSMart — Storefront Neo-Bold'],
            ['image' => 'assets/posmart-cashier-preview.webp', 'label' => 'POSMart — Pesanan Online Kasir'],
            ['image' => 'assets/posmart-products-preview.webp', 'label' => 'POSMart — Manajemen Produk'],
            ['image' => 'assets/posmart-login-preview.webp', 'label' => 'POSMart — Halaman Login'],
        ],
    ],
    [
        'title'       => 'Graphic Designer',
        'org'         => 'Pusat Pelatihan Kerja Pengembangan Industri (PPKPI)',
        'date'        => 'Mei 2026 – Jun 2026',
        'location'    => 'Jakarta, Indonesia',
        'category'    => 'Desain Grafis',
        'icon'        => '🎨',
        'badge'       => 'Sertifikat BNSP',
        'logo'        => 'assets/logo-ppkpi.jpeg',
        'tech'        => ['Adobe Photoshop', 'Adobe Illustrator', 'Adobe InDesign'],
        'items'       => [
            'Menguasai prinsip desain, tipografi, dan komposisi untuk menghasilkan materi visual yang estetis dan komunikatif.',
            'Menggunakan Adobe Photoshop, Adobe Illustrator, dan Adobe InDesign untuk foto, vektor, logo, ilustrasi, serta dokumen multipage.',
            'Menyelesaikan proyek branding, flyer, poster, banner, dan UI dasar untuk media cetak maupun digital.',
            'Memahami alur kerja desain dari konsep, eksekusi, hingga pre-press atau publikasi digital.',
        ],
        'results'    => [
            ['image' => 'assets/moodboard-ujk.webp', 'label' => 'Moodboard UJK Desain Grafis'],
            ['image' => 'assets/hasil-flyer-ujk.webp', 'label' => 'Hasil Flyer UJK Desain Grafis'],
        ],
    ],
    [
        'title'       => 'Teknisi Komputer',
        'org'         => 'Pusat Pelatihan Kerja Pengembangan Industri (PPKPI)',
        'date'        => 'Sep 2025 – Sep 2025',
        'location'    => 'Jakarta Timur',
        'category'    => 'Teknis & Hardware',
        'icon'        => '🖥️',
        'badge'       => 'PPKPI',
        'logo'        => 'assets/logo-ppkpi.jpeg',
        'items'       => [
            'Program pelatihan teknis intensif bidang Teknisi Komputer berbasis kompetensi.',
            'Menguasai perakitan, konfigurasi BIOS/UEFI, dan pemeliharaan perangkat keras (hardware) komputer.',
            'Instalasi sistem operasi, driver management, konfigurasi jaringan lokal, dan optimasi performa sistem.',
            'Melakukan analisis kerusakan (troubleshooting) perangkat keras/lunak dan perbaikan sesuai standar teknis.',
        ],
        'results'    => [
            ['image' => 'assets/experience/activity-teknisi-komputer.jpeg', 'label' => 'Kegiatan Pelatihan Teknisi Komputer'],
        ],
    ],
    [
        'title'       => 'Computer Operator',
        'org'         => 'Pusat Pelatihan Kerja Pengembangan Industri (PPKPI)',
        'date'        => 'Okt 2024 – Nov 2024',
        'location'    => 'Cipayung, Jakarta',
        'category'    => 'Teknis & Data',
        'icon'        => '📊',
        'badge'       => 'PPKPI',
        'logo'        => 'assets/logo-ppkpi.jpeg',
        'items'       => [
            'Program pelatihan vokasi & kompetensi bidang Operator Komputer.',
            'Pengoperasian Office Suite tingkat lanjut untuk kebutuhan administrasi, analisa lembar kerja data, dan laporan profesional.',
            'Manajemen sistem komputer, pengelolaan file digital terstruktur, dan pemeliharaan sistem pendukung produktivitas.',
        ],
        'results'    => [
            ['image' => 'assets/experience/activity-operator-komputer.jpeg', 'label' => 'Penyerahan Sertifikat Pelatihan Operator Komputer'],
            ['image' => 'assets/experience/activity-operator-komputer-2.jpeg', 'label' => 'Sesi Presentasi & Evaluasi Pelatihan'],
        ],
    ],
];

$stats = [
    ['num' => 'HKI', 'label' => 'Hak Cipta Resmi', 'sub' => 'Kemenkumham DJKI'],
    ['num' => '14+', 'label' => 'Riwayat Karir', 'sub' => 'Teknis & Manajerial'],
];

$currentFocus = [
    [
        'icon'  => '🌐',
        'title' => 'Web Platform',
        'desc'  => 'Aplikasi web produksi dengan Laravel, React/TypeScript, dan MySQL — mulai dari company profile hingga platform multi-role (POS, QRIS, B2B).',
    ],
    [
        'icon'  => '📡',
        'title' => 'IoT & Embedded',
        'desc'  => 'Ekosistem Agrinex: firmware ESP32/LoRaWAN, aplikasi desktop Python & PyQt, backend FastAPI, dan dashboard telemetri realtime.',
    ],
    [
        'icon'  => '📱',
        'title' => 'Cross-Platform Mobile',
        'desc'  => 'Aplikasi Flutter/Dart untuk operasional UMKM dan pertanian, termasuk mode offline-first, BLE, dan integrasi REST API.',
    ],
];

$techSkillPills = [

    ['name' => 'Laravel', 'category' => 'Backend', 'icon' => 'laravel', 'color' => '#ff2d20', 'level' => 'core', 'related' => [0, 1, 2, 3, 7, 11, 14, 5, 8, 12, 16]],

    ['name' => 'PHP', 'category' => 'Backend', 'icon' => 'php', 'color' => '#777bb4', 'level' => 'core', 'related' => [0, 1, 2, 3, 12]],

    ['name' => 'React.js', 'category' => 'Frontend', 'icon' => 'react', 'color' => '#61dafb', 'level' => 'core', 'related' => [3, 7, 4, 9, 11, 14]],

    ['name' => 'Next.js', 'category' => 'Frontend', 'icon' => 'next', 'color' => '#ffffff', 'level' => 'familiar', 'related' => []],

    ['name' => 'TypeScript', 'category' => 'Frontend', 'icon' => 'ts', 'color' => '#3178c6', 'level' => 'core', 'related' => [7, 11, 14]],

    ['name' => 'JavaScript', 'category' => 'Frontend', 'icon' => 'javascript', 'color' => '#f7df1e', 'level' => 'core', 'related' => [4, 12]],

    ['name' => 'HTML5', 'category' => 'Frontend', 'icon' => 'html', 'color' => '#e34f26', 'level' => 'core', 'related' => [0, 1, 2, 3, 7, 14, 4, 12, 11]],

    ['name' => 'CSS3', 'category' => 'Frontend', 'icon' => 'css', 'color' => '#1572b6', 'level' => 'core', 'related' => [0, 1, 2, 3, 7, 14, 4, 12, 11]],

    ['name' => 'TailwindCSS', 'category' => 'Frontend', 'icon' => 'tailwind', 'color' => '#38bdf8', 'level' => 'core', 'related' => [0, 2, 3, 7, 14, 4, 12]],

    ['name' => 'Bootstrap', 'category' => 'Frontend', 'icon' => 'bootstrap', 'color' => '#7952b3', 'level' => 'familiar', 'related' => []],

    ['name' => 'Flutter', 'category' => 'Mobile', 'icon' => 'flutter', 'color' => '#02569b', 'level' => 'core', 'related' => [5, 15]],

    ['name' => 'Kotlin', 'category' => 'Mobile', 'icon' => 'kotlin', 'color' => '#7f52ff', 'level' => 'familiar', 'related' => []],

    ['name' => 'Android', 'category' => 'Mobile', 'icon' => 'android', 'color' => '#3ddc84', 'level' => 'familiar', 'local_icon' => 'assets/android.svg', 'mark' => 'A', 'related' => []],

    ['name' => 'MySQL', 'category' => 'Backend', 'icon' => 'mysql', 'color' => '#4479a1', 'level' => 'core', 'related' => [0, 1, 2, 3, 7, 11, 14, 5, 8, 12, 16]],

    ['name' => 'Firebase', 'category' => 'Backend', 'icon' => 'firebase', 'color' => '#ffca28', 'level' => 'familiar', 'related' => [5]],

    ['name' => 'Git & GitHub', 'category' => 'Tools', 'icon' => 'git', 'color' => '#f05032', 'level' => 'core', 'related' => [0, 2, 3, 7, 9, 14]],

    ['name' => 'Docker', 'category' => 'Tools', 'icon' => 'docker', 'color' => '#2496ed', 'level' => 'familiar', 'related' => []],

    ['name' => 'Postman', 'category' => 'Tools', 'icon' => 'postman', 'color' => '#ff6c37', 'level' => 'familiar', 'related' => [2, 3, 7, 11, 14, 5, 15]],

    ['name' => 'Figma', 'category' => 'Tools', 'icon' => 'figma', 'color' => '#f24e1e', 'level' => 'familiar', 'related' => [0, 3, 4, 12]],

    ['name' => 'VS Code', 'category' => 'Tools', 'icon' => 'vscode', 'color' => '#007acc', 'level' => 'familiar', 'related' => [0, 2, 3, 7, 14, 9, 12]],

    ['name' => 'Microsoft Office', 'category' => 'Tools', 'icon' => 'microsoftoffice', 'local_icon' => 'assets/microsoft-office.svg', 'mark' => 'MS', 'color' => '#f25022', 'level' => 'familiar', 'related' => []],

    ['name' => 'Adobe Photoshop', 'category' => 'Tools', 'icon' => 'ps', 'color' => '#31a8ff', 'level' => 'familiar', 'related' => [0, 4, 9, 12]],

    ['name' => 'Adobe Illustrator', 'category' => 'Tools', 'icon' => 'ai', 'color' => '#ff9a00', 'level' => 'familiar', 'related' => [0, 4, 9, 12]],

    ['name' => 'Adobe InDesign', 'category' => 'Tools', 'icon' => 'id', 'local_icon' => 'assets/adobe-indesign.svg', 'mark' => 'Id', 'level' => 'familiar', 'related' => [4, 9, 12]],

];

$skills = $techSkillPills;

$techIcons = ['laravel','react','php','flutter','firebase','html','css','javascript','mysql','git','docker','ts','next','tailwind','kotlin'];

$certificates = [

    [

        'title' => 'Juara 2 IT Bootcamp: Next-Gen Software Engineering with AI (UMKM Connect)',

        'category' => 'IT',

        'issuer' => 'Universitas Bina Sarana Informatika (UBSI)',

        'date' => '8 Januari 2025',

        'credential' => 'Penghargaan Rektor UBSI - NIM 19235147',

        'award' => 'Juara 2',

        'image' => 'assets/sertifikat-juara-preview.webp',

        'file' => 'assets/sertifikat-juara.pdf',

    ],

    [

        'title' => 'The Role Of CLO as a Strategic Partner',

        'category' => 'Non-IT',

        'issuer' => 'QuBisa',

        'date' => '17 Februari 2022',

        'credential' => '2U13QBTZ5YOU7H',

        'image' => 'assets/strategic-partner.webp',

        'file' => 'assets/strategic-partner.webp',

    ],

    [

        'title' => 'Menjadi Marketer Tangguh Sesuai Kebutuhan Pasar',

        'category' => 'Non-IT',

        'issuer' => 'QuBisa',

        'date' => '14 Februari 2022',

        'credential' => '5NQKDVRENBJBOV',

        'image' => 'assets/marketer-tangguh.webp',

        'file' => 'assets/marketer-tangguh.webp',

    ],

    [

        'title' => 'Pentingnya Penguasaan Digital Di Era Disrupsi',

        'category' => 'IT',

        'issuer' => 'QuBisa',

        'date' => '19 Februari 2022',

        'credential' => 'G9X4DC0RTJQ9KW',

        'image' => 'assets/penguasaan-digital.webp',

        'file' => 'assets/penguasaan-digital.webp',

    ],

    [

        'title' => 'Berubah Atau Punah',

        'category' => 'Non-IT',

        'issuer' => 'QuBisa',

        'date' => '16 Februari 2022',

        'credential' => 'GS2DKUXL5371ML',

        'image' => 'assets/berubah-atau-punah.webp',

        'file' => 'assets/berubah-atau-punah.webp',

    ],

    [

        'title' => 'Komunikasi Tanpa Sensi',

        'category' => 'Non-IT',

        'issuer' => 'QuBisa',

        'date' => '18 Februari 2022',

        'credential' => 'QWY91MWP2QIBMW',

        'image' => 'assets/komunikasi-tanpa-sensi.webp',

        'file' => 'assets/komunikasi-tanpa-sensi.webp',

    ],

    [

        'title' => 'The Teenagers Character Building Program — Roadmap to Success',

        'category' => 'Non-IT',

        'issuer' => 'Bank Mayora / James Gwee Dream Achievers',

        'date' => '13–14 Agustus 2016',

        'credential' => null,

        'image' => 'assets/roadmap-to-success.webp',

        'file' => 'assets/roadmap-to-success.webp',

    ],

    [

        'title' => 'Anti Fraud',

        'category' => 'Non-IT',

        'issuer' => 'Sertifikat Pelatihan',

        'date' => null,

        'credential' => null,

        'image' => 'assets/anti-fraud-preview.webp',

        'file' => 'assets/anti-fraud.pdf',

    ],

    [

        'title' => 'API',

        'category' => 'IT',

        'issuer' => 'Sertifikat Pelatihan',

        'date' => null,

        'credential' => null,

        'image' => 'assets/api-preview.webp',

        'file' => 'assets/api.pdf',

    ],

    [

        'title' => 'Cyber Security',

        'category' => 'IT',

        'issuer' => 'Sertifikat Pelatihan',

        'date' => null,

        'credential' => null,

        'image' => 'assets/cyber-security-preview.webp',

        'file' => 'assets/cyber-security.pdf',

    ],

    [

        'title' => 'Digital Transformation Era',

        'category' => 'IT',

        'issuer' => 'Sertifikat Pelatihan',

        'date' => null,

        'credential' => null,

        'image' => 'assets/digital-transformation-era-preview.webp',

        'file' => 'assets/digital-transformation-era.pdf',

    ],

    [

        'title' => 'Perilaku di BCA',

        'category' => 'Non-IT',

        'issuer' => 'BCA',

        'date' => null,

        'credential' => null,

        'image' => 'assets/perilaku-di-bca-preview.webp',

        'file' => 'assets/perilaku-di-bca.pdf',

    ],

    [

        'title' => 'Piagam Penghargaan Reynaldi Delphiano',

        'category' => 'Non-IT',

        'issuer' => 'Piagam Penghargaan',

        'date' => null,

        'credential' => null,

        'image' => 'assets/piagam-penghargaan-reynaldi-delphiano-preview.webp',

        'file' => 'assets/piagam-penghargaan-reynaldi-delphiano.pdf',

    ],

    [

        'title' => 'Sertifikat Excel',

        'category' => 'IT',

        'issuer' => 'Fasz Edu',

        'date' => '8–10 Februari 2022',

        'credential' => '75/faszedu/OSMM-40/II/2022',

        'image' => 'assets/sertifikat-excel-preview.webp',

        'file' => 'assets/sertifikat-excel.pdf',

    ],

    [

        'title' => 'UX Writing',

        'category' => 'IT',

        'issuer' => 'Loker Programmer',

        'date' => '12 Februari 2022',

        'credential' => '0035/ITUW/PST/LOKPRO/II/2022',

        'image' => 'assets/loker-programmer-ux-writing-preview.webp',

        'file' => 'assets/loker-programmer-ux-writing.pdf',

    ],

    [

        'title' => 'Web Developer: The Art of Our Web',

        'category' => 'IT',

        'issuer' => 'Loker Programmer',

        'date' => '5 Februari 2022',

        'credential' => '0034/WDTAOW/PST/LOKPRO/II/2022',

        'image' => 'assets/loker-programmer-web-developer-preview.webp',

        'file' => 'assets/loker-programmer-web-developer.pdf',

    ],

    [

        'title' => 'Vaksinasi Merdeka Anak',

        'category' => 'Non-IT',

        'issuer' => 'Program Vaksinasi Merdeka Anak',

        'date' => null,

        'credential' => null,

        'image' => 'assets/sertifikat-vm-anak-reynaldi-delphiano-preview.webp',

        'file' => 'assets/sertifikat-vm-anak-reynaldi-delphiano.pdf',

    ],

];

