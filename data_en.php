<?php

// ============================================================

// DATA PORTOFOLIO — ENGLISH VERSION

// Struktur IDENTIK dengan data_id.php (hanya teks yang diterjemahkan)

// ============================================================

$googleAnalyticsId = 'G-DPC3HR787T';

$profile = [

    'name'          => 'Reynaldi Delphiano',

    'brand'         => 'ReyDel',

    'initial'       => 'RD',

    'eyebrow'       => 'Hello, I\'m',

    'role'          => 'Web & Mobile Developer',

    'role2'         => 'App Developer',

    'location'      => 'Jakarta, Indonesia',

    'languages'     => 'Indonesian (Native), English (Limited Working)',

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

        'I am a <strong>Web & Mobile Developer</strong> focused on building web and mobile applications that are functional, responsive, and easy to use. I am experienced in using Laravel/PHP, React, JavaScript, Flutter, MySQL, and REST APIs to turn requirements into digital solutions.',

        'One of the projects I developed is <strong>UMKM Connect</strong>, a digital platform that combines Cashier/POS features, QR Table ordering, and B2B between MSMEs (UMKM). I built this project to help MSME owners manage transactions, receive orders, and connect with business partners more practically.',

        'When developing applications, I am committed to applying clean code, REST API integration, and modern workflows so that every solution stays tidy, efficient, easy to maintain, and aligned with user needs.',

        'Beyond technology, I have cross-field professional experience ranging from sales, operations, banking, technical services, to team leadership. Those experiences shaped my communication, coordination, problem-solving, precision, and adaptability skills, which I apply to every project.',

    ],

    'traits'        => ['Leadership', 'Problem Solving', 'Communication', 'Adaptability'],

];

$services = [

    [

        'icon'  => '🛒',

        'title' => 'POS / Cashier App & Online Store',

        'desc'  => 'Point of sale, product catalog, promos & bundles, member points, and QRIS payments — fullstack (React + Laravel).',

        'href'  => 'project-detail.php?p=3',

        'cta'   => 'View example (POSMart) →',

    ],

    [

        'icon'  => '📱',

        'title' => 'MSME Mobile App',

        'desc'  => 'Cross-platform Flutter app to manage catalog, stock, transactions, and reports right from your pocket.',

        'href'  => 'project-detail.php?p=5',

        'cta'   => 'View example (Mobile) →',

    ],

    [

        'icon'  => '🌐',

        'title' => 'Business Website & Portfolio',

        'desc'  => 'Company profile, landing pages, and portfolio websites that are responsive, fast, and bilingual (ID/EN).',

        'href'  => 'project-detail.php?p=4',

        'cta'   => 'View example (This Web) →',

    ],

    [

        'icon'  => '🔌',

        'title' => 'REST API & Integrations',

        'desc'  => 'Laravel backend, clean REST APIs, authentication (Google OAuth), and Midtrans payment integration.',

        'href'  => 'project-detail.php?p=2',

        'cta'   => 'View example (UMKM Connect) →',

    ],

    [

        'icon'  => '🛠️',

        'title' => 'Maintenance & Further Development',

        'desc'  => 'Regular maintenance, feature updates, bug fixes, security, and additional feature development.',

        'href'  => 'contact.php',

        'cta'   => 'Discuss your needs →',

    ],

];

$projects = [

    [
        'title'    => 'NexBrew — Smart Coffeeshop POS & Roastery Ecosystem',
        'year'     => '2026',
        'role'     => 'Lead Fullstack Architect & UI/UX Designer',
        'tag'      => 'Featured Project • F&B SaaS Ecosystem',
        'category' => 'web',
        'badge'    => 'Next.js 15 Monorepo',
        'image'    => 'assets/nexbrew-logo.svg',
        'initial'  => 'NexBrew',
        'github'   => 'https://github.com/ReyDel6/nexbrew-pos-ecosystem',
        'live'     => '',
        'desc'     => 'An end-to-end POS, Kitchen Display System (KDS), Table QR Self-Ordering, and Back-Office Accounting ERP ecosystem engineered for modern specialty coffee shops and artisanal roasteries. Built with a high-performance <strong>Next.js 15 App Router Monorepo (pnpm)</strong>, <strong>Tailwind CSS</strong>, real-time multi-station reactive sync, automatic <strong>BOM Moving Average COGS</strong> calculations, and balanced <strong>Double-Entry General Ledger</strong> accounting.',
        'points'   => [
            '<strong>Public Storefront &amp; Roastery Showcase</strong> — Modern B2C landing page featuring in-house roastery beans, interactive online table booking modal with WhatsApp integration (#RSV-xxxx), and sensory flavor profile wheels.',
            '<strong>Staff Security Passcode Gate</strong> — Employee portal secured with a touch-friendly PIN keypad (Staff 1234 / Supervisor 8888 / Admin Passcode) with persistent session tracking and instant lock capability.',
            '<strong>Tablet-First POS Terminal</strong> — Fast ⌘K search shortcut, ice/sugar/oat milk modifier customizers, 10% PB1 local restaurant tax, multi-party split bill, blind cash drawer reconciliation with Z-report, and multi-cashier shift handover.',
            '<strong>Kitchen Display System (KDS)</strong> — Multi-station real-time ticket kanban (Espresso Bar vs Kitchen Pastry), automated color-coded SLA timers (&lt;5m green, &gt;8m flashing red), split bumping, and instant ticket recall.',
            '<strong>Customer QR Self-Order &amp; Tracker</strong> — Mobile-first digital menu, modifier selections, 15-minute dynamic QRIS checkout, pay-at-cashier option, and live 4-stage order tracker updating when baristas bump tickets.',
            '<strong>Centralized Modifier &amp; Recipe Engine (BOM)</strong> — Full group CRUD, inline price/name editing, drag-and-drop reordering, and automatic ingredient inventory deductions based on coffee Bill of Materials.',
            '<strong>Moving Average Food Cost &amp; Financial Ledger</strong> — Precise moving average inventory valuation on restock, real-time stock mutation cards, balanced double-entry audit trail, and comparative P&amp;L income statements.',
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
            ['file' => 'assets/nexbrew-landing-hero.png', 'label' => 'Public Storefront & Roastery Showcase (Landing Page)'],
            ['file' => 'assets/nexbrew-pos-terminal.png', 'label' => 'POS Cashier Terminal (Split Bill, PB1 10% & Blind Close)'],
            ['file' => 'assets/nexbrew-kds-barista.png', 'label' => 'Kitchen Display System KDS (SLA Timer & Station Filter)'],
            ['file' => 'assets/nexbrew-customer-qr.png', 'label' => 'Customer Table QR Self-Order (Modifier Customization)'],
            ['file' => 'assets/nexbrew-qris-checkout.png', 'label' => '15-Minute Dynamic QRIS Payment Checkout'],
            ['file' => 'assets/nexbrew-live-tracker.png', 'label' => 'Real-Time 4-Stage Synchronized Order Tracker'],
            ['file' => 'assets/nexbrew-dashboard-owner.png', 'label' => 'Executive Owner Dashboard & Real-Time Gross Revenue'],
            ['file' => 'assets/nexbrew-table-management.png', 'label' => 'Floor Plan Table Layout & Acrylic QR Printout'],
            ['file' => 'assets/nexbrew-recipes-bom.png', 'label' => 'BOM Recipe Management & Moving Average COGS'],
            ['file' => 'assets/nexbrew-accounting-journal.png', 'label' => 'Double-Entry General Ledger & Financial Income Statement'],
            ['file' => 'assets/nexbrew-portal-security.png', 'label' => 'Staff Operational Security Gate (PIN Keypad & Shift)'],
        ],
    ],

    [
        'title'    => 'Yayasan BUKIT - Company Profile',

        'year'     => '2025–2026',

        'role'     => 'Fullstack Developer (Freelance)',

        'tag'      => 'Client Project • Company Profile',

        'category' => 'web',

        'badge'    => 'Native PHP',

        'image'    => 'assets/bukit-logo.webp',

        'initial'  => 'BUKIT',

        'github'   => '',

        'live'     => 'https://beagurukita.com',

        'desc'     => 'A company profile and portfolio website for <strong>Yayasan Beaguru Kita Indonesia (BUKIT)</strong>, supporting underprivileged honorary teachers through scholarships, financial assistance, training, and ongoing mentoring.',

        'points'   => [

            '<strong>Custom CMS</strong> — A native PHP content management system for programs, news, impact stories, partners, team members, and transparency content.',

            '<strong>Complete public website</strong> — Home, About, Programs, Impact, News, Transparency, Partners, Support, Contact, and Privacy pages.',

            '<strong>Interactive forms</strong> — Contact, partnership, volunteer, and donation confirmation forms with server-side validation.',

            '<strong>SEO & security</strong> — Dynamic sitemap and robots files, security headers, CSP, and Cloudflare Turnstile spam protection.',

            '<strong>Accessibility & privacy focus</strong> — WCAG-friendly interface, consent controls for stories/partners/statistics, and protected personal data storage.',

        ],

        'tech'     => [

            'Backend: PHP 8.3 + MySQL 8 (PDO)',

            'Frontend: Tailwind CSS 3.4',

            'Routing: Apache mod_rewrite',

            'Security: Cloudflare Turnstile',

            'Email: Resend',

        ],

        'previews' => [

            ['file' => 'assets/bukit-uiux-home.png', 'label' => 'BUKIT Website UI/UX'],

            ['file' => 'assets/bukit-uiux-program.png', 'label' => 'Programs Page UI/UX'],

            ['file' => 'assets/bukit-uiux-dampak.png', 'label' => 'Impact Page UI/UX'],

            ['file' => 'assets/bukit-uiux-berita.png', 'label' => 'News Page UI/UX'],

            ['file' => 'assets/bukit-uiux-dukung.png', 'label' => 'Support Page UI/UX'],

        ],

    ],

    [

        'title'    => 'PPDB SMK Nusantara Bangsa',

        'year'     => '2025',

        'role'     => 'Fullstack Developer',

        'tag'      => 'Personal Work • Web Development',

        'category' => 'web',

        'badge'    => 'Online PPDB Web',

        'image'    => 'assets/smk-nusantara-logo.svg',

        'initial'  => 'PPDB SMK',

        'github'   => 'https://github.com/ReyDel6/ppdb-sekolah-web',

        'desc'     => 'An <strong>Online Student Admission (PPDB)</strong> and <strong>school academic management</strong> system for SMK Nusantara Bangsa — an <strong>Uji Kompetensi Keahlian (UJK/UKK RPL)</strong> project. Handles prospective student registration through a multi-step form with document upload, admission waves & major quotas, verification up to re-registration, a public status-check portal with QR-bearing participant card printing, a multi-role dashboard, plus academic modules (attendance, grades, schedules), SPP tuition, e-learning & e-library with Excel/PDF report exports.',

        'points'   => [

            '<strong>School-branded hero landing</strong> — a two-column navy & gold hero with the <strong>school emblem inside a gold crest</strong>, "SMK Pusat Keunggulan" badge, active-registration CTAs, plus principal welcome, achievement counters (94.8% job/college absorption, 45+ industry partners), department showcase, industry-partner grid, facility gallery, and alumni testimonials on a single page.',

            '<strong>Multi-role & authentication</strong> — 6 roles: Admin, Committee (Panitia), Teacher, Student, Parent, and School Principal (Laravel Breeze + role middleware).',

            '<strong>Step-by-step registration</strong> — personal data, major selection, parent data, document upload (photo, family card, diploma) & preview; admission waves & per-major quotas.',

            '<strong>Public status portal</strong> — real-time registration status & participant card printing with QR Code.',

            '<strong>Analytics & principal dashboard</strong> — quota per major, accepted/reserve/rejected percentages, charts (Chart.js), PPDB/curriculum/staff statistics.',

            '<strong>Academic management</strong> — classes, subjects, teachers, students & schedules; attendance (Present/Late/Permit/Sick/Absent); grading & report cards.',

            '<strong>Report & report card export</strong> — applicant, grade & attendance recaps in Excel and PDF (Dompdf).',

            '<strong>SPP tuition</strong> — per-class fees, monthly bill generation & payments (Cash/Transfer/Online) via admin and student/parent portals.',

            '<strong>E-learning & e-library</strong> — materials, assignments, class forum; book catalog & borrowing.',

        ],

        'tech'     => [

            'Backend: Laravel (PHP) + MySQL',

            'Frontend: Blade + Vite, Tailwind CSS, Alpine.js',

            'Reports: Laravel Excel + Dompdf (PDF)',

            'QR Code: qrcodejs',

            'Charts: Chart.js',

        ],

        'previews' => [

            ['file' => 'assets/ppdb-home-preview.webp', 'label' => 'Landing Page'],

            ['file' => 'assets/ppdb-login-preview.webp', 'label' => 'Login Page'],

        ],

    ],

    [

        'title'    => 'UMKM Connect',

        'year'     => '2025–2026',

        'role'     => 'Fullstack Developer',

        'tag'      => 'Personal Work • Fullstack',

        'category' => 'web',

        'badge'    => 'Registered Copyright',

        'image'    => 'assets/umkm-connect.png',

        'initial'  => 'UMKM Connect',

        'github'   => 'https://github.com/ReyDel6/UMKM_Connect-Web',

        'desc'     => 'A web platform for MSMEs (UMKM) that combines <strong>Cashier/POS</strong>, <strong>QR Table</strong> (order & pay from the customer\'s table), and <strong>B2B between MSMEs</strong> in a single account.',

        'points'   => [

            '<strong>B2B Marketplace</strong> — online store between MSMEs with cart & wholesale checkout.',

            '<strong>QR Table ordering</strong> — customers scan a QR, view the menu, and order & pay online from their smartphone.',

            '<strong>Cashier (POS)</strong> — dashboard, shift management, table orders, & digital cashier ID card.',

            '<strong>Employee Management</strong> — add cashier, cook, waiter, barista, admin (login with 4-digit PIN).',

            '<strong>User-to-user chat</strong> — direct communication between buyers and sellers.',

            '<strong>Products & Stock</strong>, raw materials, incoming orders, & financial reports.',

            '<strong>Multi-role & authentication</strong> — Owner, Admin, Cashier, Supplier, Customer; email login, Google, & password reset.',

            '<strong>Midtrans payments</strong> (Snap) & landing page with a contact-us form.',

        ],

        'meta'     => 'Technology: <strong>Laravel (PHP)</strong>, Blade + Vite, MySQL • Payments <strong>Midtrans</strong> • Registered Copyright <strong>EC002026133137</strong> (2026)',

        'tech'     => [

            'Backend: Laravel (PHP)',

            'Frontend: Blade + Vite, Font Awesome, GSAP',

            'Database: MySQL',

            'Payments: Midtrans Snap API',

        ],

        'roles'    => [

            'Owner/MSME — manages products, stock, employees, and reports.',

            'Admin — assists the owner with store operations.',

            'Cashier — POS cashier, table orders, cashier profile.',

            'Supplier — equivalent to an MSME; their products appear in the marketplace.',

            'Customer — QR table account & online payment with their own dashboard & order history.',

        ],

        'hki'      => 'The <strong>UMKM Connect</strong> project — including source code, interface design, logo, and features — is original work owned by <strong>Reynaldi Delphiano</strong>, protected by copyright and registered with DJKI (HKI <strong>EC002026133137</strong>, 2026). Copying, distributing, or commercializing without the written permission of the rights holder is prohibited.',

'previews' => [
            ['file' => 'assets/umkm-web-login-preview.webp', 'label' => 'Modern Split-Screen Multi-Role Login & Authentication Interface'],
            ['file' => 'assets/umkm-web-pos-preview.webp', 'label' => 'Cashier POS Terminal (Menu Catalog, Categories & Real-time Cart)'],
            ['file' => 'assets/umkm-web-qris-preview.webp', 'label' => 'Cashier Checkout via Midtrans Dynamic QRIS Payment Modal'],
            ['file' => 'assets/umkm-web-cashier-card-preview.webp', 'label' => 'Cashier Profile, Interactive 3D Digital ID Card & Shift Control'],
            ['file' => 'assets/umkm-web-table-menu-preview.webp', 'label' => 'Self-service QR Table Ordering for Customers via Smartphone'],
            ['file' => 'assets/umkm-web-table-orders-preview.webp', 'label' => 'Real-time Table Order Monitoring (Incoming, Fulfilled & Cancelled)'],
            ['file' => 'assets/umkm-web-dashboard-preview.webp', 'label' => 'Owner Analytics Dashboard (Revenue Metrics, Sales Trends & Store Stats)'],
            ['file' => 'assets/umkm-web-b2b-preview.webp', 'label' => 'B2B Marketplace & Partner Business Directory for MSMEs'],
        ],

    ],

    [

        'title'    => 'POSMart',

        'year'     => '2026',

        'role'     => 'Fullstack Developer',

        'tag'      => 'Personal Work • Fullstack',

        'category' => 'web',

        'badge'    => 'Point of Sale',

        'image'    => 'assets/posmart-preview.svg',

        'logo'     => 'assets/posmart-logo.webp',

        'initial'  => 'POSMart',

        'github'   => 'https://github.com/ReyDel6/POSMART',

        'desc'     => 'A web-based <strong>Point of Sale (POS) + Digital Minimarket</strong>: rapid walk-in cashier checkout, barcode scanner terminal, cashier shift controls, inventory & stock management, shipping zones, and analytics reporting — complete with a public storefront, bundles & promos, member points, and Midtrans Snap / QRIS payments.',

        'points'   => [

            '<strong>POS Cashier Terminal Register (/pos)</strong> — fast cashier register UI with barcode scanning (F2 shortcut), realistic audio feedback, Hold/Recall queue parking (F4), discount & tax calculation, quick denomination chips (F8), instant change breakdown, and 58mm/80mm thermal receipt printing.',

            '<strong>Cashier Shift Management</strong> — initial drawer float input, cash vs non-cash sales tracking, drawer cash vs system tally reconciliation, variance calculation, and shift closing reports.',

            '<strong>Online Cashier Orders (/cashier)</strong> — dedicated cashier staff interface to verify incoming web orders, process store pickup & delivery dispatch, and print invoices.',

            '<strong>Digital Minimarket Storefront</strong> — interactive product catalog, smart search suggestions, category filters, promo hero banners, bundles, and verified buyer reviews.',

            '<strong>Multi-Role & LAN Multi-Device Access</strong> — Admin, POS Cashier, Owner, Supplier, and Customer roles; ready to be accessed simultaneously across multiple PCs/tablets over local Wi-Fi/LAN.',

            '<strong>Midtrans Payments & Loyalty Coins</strong> — seamless Midtrans Snap (QRIS, VA, E-Wallets), customer loyalty point redemption for discounts, and dynamic delivery zones.',

            '<strong>Modern Neo-Brutalist Design</strong> — distinctive high-contrast aesthetic (#CBF169 Lime, #FF6B4A Coral, #161616 Ink), bold hard shadows, and punchy typography.',

        ],

        'meta'     => 'Technology: <strong>React + Vite + Tailwind CSS 4 (Frontend)</strong> • <strong>Laravel (PHP API Backend)</strong> • MySQL • Google OAuth • Midtrans QRIS • Web Audio API • Multi-role',

        'tech'     => [

            'Frontend: React.js + Vite, Tailwind CSS 4, Lucide Icons, Web Audio API',

            'Backend: Laravel (PHP) — REST API (Host 0.0.0.0 port 8010)',

            'POS Features: Barcode scanner (F2), Hold Queue (F4), Thermal Receipt (58mm/80mm), Shift Management',

            'Database: MySQL',

            'Payments & Auth: Midtrans Snap (QRIS, VA, E-Wallets), Google OAuth + Sanctum Token',

        ],

        'roles'    => [

            'POS Cashier — walk-in checkout terminal (/pos), barcode scanner, shift controls, and online order fulfillment (/cashier).',

            'Admin — full control over products, barcodes/SKU, promotional bundles, categories, staff accounts, and shipping zone pricing.',

            'Owner — real-time sales revenue dashboards, inventory velocity analytics, and cashier shift reconciliation.',

            'Supplier — manage supply products featured in the storefront marketplace.',

            'Customer — online grocery shopping, redeem discount points, track order status, and view past purchases.',

        ],

        'previews' => [

            ['file' => 'assets/posmart-catalog-preview.webp', 'label' => 'Digital Minimarket Storefront & Catalog (Neo-Bold Design)'],

            ['file' => 'assets/posmart-register-preview.webp', 'label' => 'POS Cashier Terminal Register (Barcode, Shift, Hold & Thermal Receipt)'],

            ['file' => 'assets/posmart-cashier-preview.webp', 'label' => 'Online Cashier Orders Management (Verification & Store Pickup)'],

            ['file' => 'assets/posmart-products-preview.webp', 'label' => 'Product & Inventory Stock Management (Admin Panel)'],

            ['file' => 'assets/posmart-login-preview.webp', 'label' => 'Authentication Page & Multi-Role Access'],

        ],

    ],

    [

        'title'    => 'Reynaldi Delphiano Portfolio Website',

        'year'     => '2025',

        'role'     => 'Frontend Developer',

        'tag'      => 'Personal Work • Reynaldi Delphiano',

        'category' => 'web',

        'badge'    => 'Personal Web',

        'image'    => 'assets/portfolio-preview.svg',

        'logo'     => 'assets/reydel-logo.svg',

        'initial'  => 'RD Portfolio',

        'github'   => 'https://github.com/ReyDel6/ReyPortofolio',

        'live'     => 'http://reydel.page.gd/',

        'desc'     => 'A personal website belonging to <strong>Reynaldi Delphiano</strong> to showcase a professional profile, work experience, education, skills, projects, and certifications in a single responsive page.',

        'points'   => [

            '<strong>Professional profile</strong> — self summary, development focus, and social media contacts.',

            '<strong>Project showcase</strong> — presents UMKM Connect along with its features and documentation.',

            '<strong>Licenses & certifications</strong> — a gallery of certificate images and openable PDF links.',

            '<strong>Responsive design</strong> — adapts to desktop, tablet, and mobile.',

        ],

        'meta'     => 'Technology: <strong>PHP</strong>, HTML, CSS, JavaScript • Data centralized in <strong>data.php</strong>',

        'tech'     => [

            'Backend: PHP',

            'Frontend: HTML, CSS, JavaScript',

            'UI: Responsive design',

            'Deployment: InfinityFree-ready',

        ],

        'preview'       => 'assets/portfolio-home-preview.webp',

        'preview_label' => 'Website Preview',

    ],

    [

        'title'    => 'UMKM Connect Mobile',

        'year'     => '2026',

        'role'     => 'Mobile Developer',

        'tag'      => 'Personal Work • Mobile Development',

        'category' => 'mobile',

        'badge'    => 'Flutter Mobile App',

        'image'    => 'assets/umkm-connect-mobile.svg',

        'logo'     => 'assets/umkm-connect-logo.png',

        'initial'  => 'UMKM Connect Mobile',

        'desc'     => 'A Flutter-based <strong>UMKM Connect</strong> mobile version to help MSMEs manage operations, catalog, stock, transactions, reports, and connections with customers and suppliers from their smartphone.',

        'points'   => [

            '<strong>Cross-platform app</strong> — built with Flutter and Dart for a consistent mobile experience.',

            '<strong>Dashboard & reports</strong> — monitor products, stock, transactions, and sales summaries from a mobile device.',

            '<strong>Multi-role</strong> — supports Owner/MSME, Supplier, and Customer flows with role-based access.',

            '<strong>Customer & Supplier</strong> — customer menu via QR, supplier search, ordering, and user-to-user communication.',

            '<strong>Firebase integration</strong> — authentication, Firestore database, and file storage via Firebase Storage.',

        ],

        'meta'     => 'Technology: <strong>Flutter (Dart)</strong> • Firebase Auth, Firestore, Storage • QR & data reports',

        'tech'     => [

            'Mobile: Flutter + Dart',

            'Backend: Firebase Auth + Firestore',

            'Storage: Firebase Storage',

            'Utilities: QR, Chart, HTTP, Notifications',

        ],

        'hki'      => 'The <strong>UMKM Connect</strong> project, including its source code, interface design, logo, and features, is original work owned by <strong>Reynaldi Delphiano</strong>, protected by copyright and registered with DJKI (HKI <strong>EC002026133137</strong>, 2026).',

        'uiux'     => 'assets/ui-ux-umkm.jpeg',

        'uiux_label'=> 'Mobile UI/UX Design',

        'hki_image'=> 'assets/haki-umkm.jpeg',

        'certificate' => [

            'label'  => 'Champion Certificate',

            'file'   => 'assets/sertifikat-juara.pdf',

        ],

'download' => [

            'label' => 'Download Android APK',

            'file'  => 'https://github.com/ReyDel6/UMKM_Connect-Web/releases',

        ],

    ],

    [

        'title'    => 'Garuda Riders Motorcycle Club',

        'year'     => '2026',

        'role'     => 'Fullstack Developer',

        'tag'      => 'Personal Work • Live Community Web',

        'category' => 'web',

        'badge'    => 'Live Community Web',

        'image'    => 'assets/garuda-riders-logo.png',

        'initial'  => 'Garuda Riders',

        'github'   => 'https://github.com/ReyDel6/garuda-riders',

        'live'     => 'http://geng-motor.page.gd',

        'desc'     => 'The official website of <strong>Garuda Riders Motorcycle Club</strong> — a motorcycle community active since 2015. Showcases the community profile, vision, photo & video gallery, event agenda, articles, clients/partners, and a contact form, with an <strong>admin CMS</strong> to manage all content.',

        'points'   => [

            '<strong>Live Status</strong> — website is deployed and publicly accessible online at <a href="http://geng-motor.page.gd" target="_blank" rel="noopener">geng-motor.page.gd</a>.',

            '<strong>Community profile & vision</strong> — story, history, and vision of a motorcycle community active since 2015.',

            '<strong>Photo & video gallery</strong> — supports image and MP4 video uploads with captions.',

            '<strong>Event agenda</strong> — upcoming & past events with full detail pages.',

            '<strong>Articles/blog</strong> — news system with slug-based detail pages.',

            '<strong>Clients & partners</strong> — partner logos and community products/services showcase.',

            '<strong>Contact form</strong> — saved to the database with email notifications to admins.',

            '<strong>Admin CMS</strong> — CRUD for articles, events, galleries, clients, and message inbox.',

        ],

        'tech'     => [

            'Backend: Laravel 13 (PHP 8.3), Eloquent ORM',

            'Frontend: Blade + Tailwind CSS (navy & gold theme), Alpine.js, Vite',

            'Database: MySQL',

            'Auth: Laravel Breeze (login, register, profile)',

        ],

        'previews' => [
            ['file' => 'assets/garudariders-home.webp', 'label' => 'Home Page & Hero Section'],
            ['file' => 'assets/garudariders-tentang.webp', 'label' => 'About Us & Community Story'],
            ['file' => 'assets/garudariders-galeri.webp', 'label' => 'Photo & Video Riding Gallery'],
            ['file' => 'assets/garudariders-event.webp', 'label' => 'Event Agenda & Touring Schedule'],
            ['file' => 'assets/garudariders-artikel.webp', 'label' => 'News & Blog Articles'],
            ['file' => 'assets/garudariders-kontak.webp', 'label' => 'Contact Form & Community Inquiries'],
            ['file' => 'assets/garudariders-login.webp', 'label' => 'Admin CMS Login Page'],
            ['file' => 'assets/garudariders-dashboard.webp', 'label' => 'Admin Analytics & Management Dashboard'],
        ],

    ],

    [

        'title'    => 'Plantify',

        'year'     => '2026',

        'role'     => 'Fullstack Developer',

        'tag'      => 'Personal Work • Live Web & Mobile',

        'category' => 'mobile',

        'badge'    => 'Live App • Web & Mobile',

        'image'    => 'assets/plantify-icon.svg',

        'initial'  => 'Plantify',

        'github'   => 'https://github.com/ReyDel6/Plantify',

        'live'     => 'http://plantify.freedev.app',

        'desc'     => 'A modern <strong>plant identification & care tracking</strong> application that is <strong>live and published online</strong> at <a href="http://plantify.freedev.app" target="_blank" rel="noopener">plantify.freedev.app</a>. Built with Laravel 12 + React 19 Inertia with a mobile-first botanical UI, and packaged as an <strong>Android hybrid app via Capacitor</strong> as well as a PWA.',

        'points'   => [

            '<strong>Go Public Status</strong> — live and accessible to the public at <code>plantify.freedev.app</code> powered by InfinityFree hosting & MySQL.',

            '<strong>Botanical Landing Page</strong> — modern landing page with interactive Monstera showcase, watering tracker, and AI identification.',

            '<strong>Onboarding</strong> — 3-slide botanic intro "Enjoy your Life with Plants".',

            '<strong>Plant identification</strong> — a leaf, light, and water-needs questionnaire to match species.',

            '<strong>Plant collection</strong> — interactive collection cards with watering status, growth photos, and care tips.',

            '<strong>Care reminders & streaks</strong> — smart watering schedules, daily streaks, and web push notifications (VAPID).',

            '<strong>Complete authentication</strong> — botanical split-screen login/signup, Google & Facebook OAuth, passkeys (WebAuthn), 2FA.',

            '<strong>Offline-first & PWA</strong> — locally stored state sync + service worker.',

            '<strong>Bilingual & themes</strong> — Indonesian/English plus light/dark mode.',

        ],

        'tech'     => [

            'Backend: Laravel 12 + Laravel Fortify, Inertia.js v3',

            'Frontend: React 19 + TypeScript, Tailwind CSS 4, shadcn/Radix UI',

            'Mobile: Capacitor 8 (Android) + PWA',

            'Database & Hosting: MySQL; InfinityFree (plantify.freedev.app)',

        ],

        'previews' => [

            ['file' => 'assets/plantify-home.webp', 'label' => 'Landing Page'],

            ['file' => 'assets/plantify-login.webp', 'label' => 'Botanical Login Page'],

            ['file' => 'assets/plantify-collection.webp', 'label' => 'Plant Collection'],

            ['file' => 'assets/plantify-onboarding.webp', 'label' => 'Onboarding'],

        ],

    ],

[

        'title'    => 'Gudang Gadget',

        'year'     => '2026',

        'role'     => 'Fullstack Developer',

        'tag'      => 'Personal Work • Web App',

        'category' => 'web',

        'badge'    => 'Warehouse + Online Storefront',

        'image'    => 'assets/webgudang-icon.svg',

        'initial'  => 'Gudang Gadget',

        'github'   => 'https://github.com/ReyDel6/gudang-gadget',

        'desc'     => 'A <strong>warehouse & gadget inventory management</strong> app grown into a fully <strong>public online storefront</strong> within a single codebase: product catalog, a reload-free <strong>slide-over cart drawer</strong>, online & WhatsApp checkout, plus <strong>storefront gamification</strong> (reseller tiers, flash drop, service-tracking quests, trade-in meters) on the customer side.',

        'points'   => [

            '<strong>Public storefront</strong> — homepage with hero slider & flash drop, live catalog search + category filters, product detail pages with wholesale tier pricing, guest checkout, and a public order status page (incl. transfer-proof upload).',

            '<strong>Slide-over cart drawer</strong> — AJAX add-to-cart with no page reload: stock-clamped quantity steppers, Free Shipping progress bar (Rp 150k), accessory upselling, subtotal/discount/total breakdown, plus <strong>multi-item WhatsApp checkout</strong> or continue to online checkout.',

            '<strong>Storefront gamification</strong> — reseller tier system (XP & level up), tier chip in navbar, flash-drop deal countdown, "Health & Power" meters in the trade-in calculator, and a Quest Stepper + hologram warranty card on the service tracking page.',

            '<strong>Management dashboard</strong> — statistics cards (total products, stock, categories, out-of-stock alert) + Chart.js charts.',

            '<strong>Inventory CRUD & stock control</strong> — products with photos, auto-suggested categories, status (Available/Out of stock/Not for sale), +/− stock buttons with full change history (before/after, delta, user).',

            '<strong>User management & auth</strong> — admin CRUD with guards (cannot delete yourself / the last user), login/logout & reset password.',

            '<strong>Export & print</strong> — live search, category filter, CSV export, landscape print reports.',

        ],

        'meta'     => 'Tech: <strong>Laravel 13 (PHP 8.3)</strong> + MySQL • Blade + Tailwind CSS 4 + Vite • Slide-over cart (AJAX) & WhatsApp/online checkout • Gamification (XP/tiers, quests, flash drop)',

        'tech'     => [

            'Backend: Laravel 13 (PHP 8.3)',

            'Frontend: Blade + Tailwind CSS 4, Chart.js, Vite',

            'Cart: slide-over AJAX drawer + WhatsApp & online checkout',

            'Database: MySQL',

        ],

        'previews' => [

            ['file' => 'assets/gudang-storefront-home.webp', 'label' => 'Storefront (Home & Flash Drop)'],

            ['file' => 'assets/gudang-storefront-drawer.webp', 'label' => 'Slide-over Cart — Free Shipping & WhatsApp Checkout'],

            ['file' => 'assets/gudang-storefront-tracking.webp', 'label' => 'Service Tracking — Quest Stepper & Hologram Warranty Card'],

            ['file' => 'assets/gudang-storefront-tradein.webp', 'label' => 'Trade-in — Health & Power Meters'],

            ['file' => 'assets/gudang-login.webp', 'label' => 'Login Page'],

        ],

    ],

    [

        'title'    => 'Digital Wedding Invitation',

        'year'     => '2026',

        'role'     => 'Frontend Developer',

        'tag'      => 'Personal Work • Web Development',

        'category' => 'web',

        'badge'    => 'Digital Invitation',

        'image'    => 'assets/undangan-preview.svg',

        'logo'     => 'assets/undangan-logo.svg',

        'initial'  => 'Wedding',

        'github'   => 'https://github.com/ReyDel6/wedding-invitation',

        'live'     => 'https://undangan-nikah-ruby.vercel.app',

        'desc'     => 'An interactive <strong>digital wedding invitation</strong> single-page app built with <strong>React + Vite + Tailwind CSS 4</strong> — an opening screen with a couple photo, background music, countdown, event schedule, gallery, WhatsApp RSVP, a digital gift envelope, and guest wishes & prayers, with all content managed through a single config file.',

        'points'   => [

            '<strong>Opening screen</strong> — gold-framed couple photo, "Open Invitation" button, and personal guest greeting via <code>?to=Name</code>.',

            '<strong>Background music</strong> — soft auto-play with a floating mute toggle in the corner.',

            '<strong>Real-time countdown</strong> — counts down to the wedding day.',

            '<strong>Event schedule</strong> — Akad & Reception details with venue and Google Maps links.',

            '<strong>WhatsApp RSVP</strong> — automatic attendance confirmation without a backend.',

            '<strong>Digital gift envelope</strong> — bank account numbers, copy button, and QRIS image.',

            '<strong>Wishes & prayers</strong> — guests leave messages stored in per-device localStorage.',

            '<strong>Elegant design</strong> — cream & gold palette, Playfair Display typography, and falling petal animation.',

        ],

        'meta'     => 'Technology: <strong>React 19 + Vite + Tailwind CSS 4</strong> • lucide-react • Google Fonts • Static deploy',

        'tech'     => [

            'Frontend: React 19 + Vite',

            'Styling: Tailwind CSS 4 (@theme custom palette)',

            'Icons: lucide-react',

            'Fonts: Playfair Display & Inter (Google Fonts)',

            'Deploy: static build (dist/) — Vercel/Netlify/GitHub Pages ready',

        ],

        'previews' => [

            ['file' => 'assets/undangan-cover-preview.webp', 'label' => 'Opening Screen (Cover)'],

            ['file' => 'assets/undangan-invitation-preview.webp', 'label' => 'Invitation Page (Mobile)'],

        ],

    ],

    [

        'title'    => 'Cuan Motor',

        'year'     => '2026',

        'role'     => 'Fullstack Developer',

        'tag'      => 'Personal Work • Web App',

        'category' => 'web',

        'badge'    => 'Motor Rental & Marketplace',

        'image'    => 'assets/cuanmotor-logo.svg',

        'logo'     => 'assets/cuanmotor-logo.svg',

        'initial'  => 'Cuan Motor',

        'github'   => 'https://github.com/ReyDel6/cuanmotor',

        'desc'     => 'An all-in-one <strong>motorcycle rental</strong> and <strong>buy-and-sell</strong> web platform: a unit catalog, rental booking with real-time availability checks, admin-validated sale listings, reports, and a multi-role dashboard for Admin, Seller, and Customer.',

        'points'   => [

            '<strong>Multi-role & authentication</strong> — Admin, Seller, and Customer roles with role middleware and clean guest/user login redirects.',

            '<strong>Motorcycle rental</strong> — full rental catalog with details, search, date-range booking, and real-time availability validation.',

            '<strong>Buy & sell</strong> — sellers publish unit listings; admins validate/moderate before a listing goes public.',

            '<strong>Role-based dashboards</strong> — Sellers manage their listings & unit status, Customers view bookings, Admins moderate & negotiate.',

            '<strong>Admin reports</strong> — transaction summaries with pending-status priority, portable across SQLite/MySQL.',

            '<strong>Modern design</strong> — Tailwind CSS 4, fully responsive, and licensed real unit photos (CC/Wikimedia Commons).',

        ],

        'tech'     => [

            'Backend: Laravel 13 (PHP 8.3), Eloquent ORM',

            'Frontend: Blade + Tailwind CSS 4, Vite',

            'Database: MySQL (tests: SQLite :memory:)',

            'Auth: role middleware (Admin/Seller/Customer)',

        ],

        'previews' => [

            ['file' => 'assets/cuanmotor-home.webp', 'label' => 'Homepage'],

            ['file' => 'assets/cuanmotor-sewa.webp', 'label' => 'Rental Catalog'],

            ['file' => 'assets/cuanmotor-masuk.webp', 'label' => 'Login Page'],

        ],

    ],

    [

        'title'    => 'PS Rental & Internet Cafe Billing',

        'year'     => '2026',

        'role'     => 'Fullstack Developer',

        'tag'      => 'Personal Project • Fullstack Web',

        'category' => 'web',

        'badge'    => 'Realtime Billing System',

        'image'    => 'assets/billing-dashboard.webp',

        'initial'  => 'Billing PS',

        'desc'     => 'A <strong>realtime rental & billing system</strong> for PS/game console and internet cafe: PS/billiard/net units, sessions with <strong>countdown timers & pause/resume</strong>, per-hour pricing in 15-minute blocks, a cashier POS with snacks & drinks, point member loyalty, package & happy-hour promos, sales reports with export — all kept in sync <strong>via WebSocket</strong> across cashier and owner screens.',

        'points'   => [

            '<strong>Realtime POS & unit dashboard</strong> — unit status (available/in-use/maintenance) and running sessions update live on every screen via WebSocket; countdown timers on each unit card.',

            '<strong>Full session management</strong> — start a session with <strong>number of occupants</strong> (split bill) and open-ended duration, extend, <strong>pause/resume</strong> (timer freezes while paused), stop to charge actual elapsed time, and cancel a session.',

            '<strong>Per-session checkout</strong> — console rental + cashier products (snacks & drinks), member & promo discounts, subtotal + discount + total, Tunai/QRIS/Transfer methods, and printable INV-xxxxxx receipts.',

            '<strong>Member loyalty</strong> — loyalty points per transaction, percentage discount, and per-member purchase history.',

            '<strong>Promos</strong> — package-hours & happy-hour discounts applied automatically to tariff calculation.',

            '<strong>Cashier shifts</strong> — open/close a shift with starting cash and end-of-shift cash difference recap.',

            '<strong>Owner reports</strong> — daily/weekly/monthly revenue <strong>plus custom date ranges</strong>, top units & products, peak hours, and CSV/JSON export.',

            '<strong>Auto alerts</strong> — visual warning when a session is under 5 minutes left.',

            '<strong>Activity log & roles</strong> — login, start/pause/stop/cancel session, transactions, and unit status are logged; Owner & Cashier accounts with active control.',

        ],

        'meta'     => 'Tech: <strong>React + Vite + TypeScript + Tailwind CSS (Frontend)</strong> • <strong>Node.js + Express (Backend)</strong> • PostgreSQL + Prisma ORM • Realtime WebSocket • JWT',

        'tech'     => [

            'Frontend: React (Vite), TypeScript, Tailwind CSS',

            'Backend: Node.js + Express — REST API',

            'Database: PostgreSQL + Prisma ORM',

            'Realtime: WebSocket',

            'Auth: JWT, multi-role (Owner/Cashier)',

        ],

        'previews' => [

            ['file' => 'assets/billing-login.webp', 'label' => 'Login Page'],

            ['file' => 'assets/billing-dashboard.webp', 'label' => 'Owner Dashboard (Stats)'],

            ['file' => 'assets/billing-pos.webp', 'label' => 'Cashier POS — Active Sessions & Timers'],

            ['file' => 'assets/billing-laporan.webp', 'label' => 'Reports & Export'],

            ['file' => 'assets/billing-log.webp', 'label' => 'Activity Log'],

        ],

    ],

    [

        'title'    => 'Sakinah Journeys — Umrah Travel',

        'year'     => '2024',

        'role'     => 'Fullstack Developer',

        'tag'      => 'Personal Project • Web Development',

        'category' => 'web',

        'category' => 'web',

        'badge'    => 'Company Profile & CMS',

        'image'    => 'assets/sakinah-home.webp',

        'logo'     => 'assets/sakinah-logo.webp',

        'initial'  => 'Sakinah Journeys',

        'live'     => 'https://travel-umroh.page.gd/',

        'desc'     => 'A <strong>company profile & CMS website for an Umrah travel</strong> brand <strong>Sakinah Journeys</strong> — showcasing packages, prices, departure schedules, facilities, hotels & airlines, gallery, articles, and FAQ, with an <strong>admin CMS</strong> so staff can manage all content without touching code.',

        'points'   => [

            '<strong>Company profile</strong> — About Us, vision, PPIU license, and contact info managed through the CMS.',

            '<strong>Umrah packages</strong> — package list & detail pages with duration, facilities, hotels, and airlines from the database.',

            '<strong>Price per room type</strong> — quad/triple/double stored as relations, not a single field.',

            '<strong>Departure schedules</strong> — date, quota, and status (open/full) per package.',

            '<strong>Facilities, hotels & airlines</strong> — master data linked to many packages.',

            '<strong>Gallery & articles</strong> — event documentation and an Umrah blog with Publish/Draft status.',

            '<strong>FAQ & contact</strong> — FAQ accordion and a consultation/inquiry form saved to the database.',

            '<strong>Multi-module admin CMS</strong> — CRUD for packages, schedules, facilities, hotels, airlines, gallery, articles, FAQ, and the inquiry list; validated image uploads.',

            '<strong>Clean foundation</strong> — PHP Native + MySQL with PDO prepared statements, session auth, and a responsive layout.',

        ],

        'meta'     => 'Tech: <strong>PHP Native</strong> + <strong>MySQL (PDO)</strong> • session-based auth • responsive & basic SEO',

        'tech'     => [

            'Backend: PHP Native + MySQL (PDO)',

            'Frontend: HTML, CSS (Tailwind), JavaScript',

            'Auth: Session-based admin CMS',

            'Features: full CMS, image upload, SEO, responsive',

        ],

        'previews' => [

            ['file' => 'assets/sakinah-home.webp', 'label' => 'Home'],

            ['file' => 'assets/sakinah-paket.webp', 'label' => 'Umrah Packages'],

            ['file' => 'assets/sakinah-paket-detail.webp', 'label' => 'Package Detail'],

            ['file' => 'assets/sakinah-galeri.webp', 'label' => 'Gallery'],

            ['file' => 'assets/sakinah-artikel.webp', 'label' => 'Articles / News'],

            ['file' => 'assets/sakinah-kontak.webp', 'label' => 'Contact'],

        ],

    ],

    [

        'title'    => 'Agrinex Desktop Engineering Suite',

        'year'     => '2026',

        'role'     => 'Team Leader — Desktop & IoT',

        'tag'      => 'Personal Work • Desktop Application',

        'category' => 'desktop',

        'badge'    => 'PyQt6 Engineering Tool',

        'image'    => 'assets/agrinex-desktop-engineering-suite.png',

        'initial'  => 'AGRINEX DESKTOP',

        'github'   => '',

        'desc'     => 'A desktop engineering application for commissioning, sensor calibration, IoT device monitoring, and hardware provisioning for <strong>AGRINEX Smart Farming</strong> field deployments.',

        'points'   => [

            '<strong>Site & field provisioning</strong> — links ESP32 modules with farmer, field, and location metadata.',

            '<strong>Live multi-sensor monitor</strong> — monitors temperature, humidity, pressure, radiation, rain, and soil moisture in real time.',

            '<strong>Calibration wizard</strong> — calibrates analog sensors with linear regression, offset, multiplier, and value validation.',

            '<strong>Realtime waveform</strong> — plots ADC signals to detect EMI noise and signal instability.',

            '<strong>OTA firmware workflow</strong> — builds and flashes ESP32 firmware over UART with clear process logs.',

        ],

        'meta'     => 'Technology: <strong>Python + PyQt6</strong> • Serial/BLE • ESP32 • LoRaWAN • OTA Firmware',

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

        'role'     => 'Team Leader — Fullstack',

        'tag'      => 'Personal Work • Web Application',

        'category' => 'web',

        'badge'    => 'Smart Farming Web Portal',

        'image'    => 'assets/agrinex-web-command-center-live.png',

        'initial'  => 'AGRINEX WEB',

        'github'   => '',

        'desc'     => 'The AGRINEX <strong>React + Vite</strong> web command center for monitoring field conditions, real-time sensor telemetry, satellite GIS mapping, ESP32 gateway health, actuator controls, and agronomic early warnings in a single unified dashboard.',

        'points'   => [

            '<strong>GIS spatial command map</strong> — displays field plots, sensor nodes, LoRa gateway, irrigation routes, and crop-condition heatmaps powered by Leaflet GIS.',

            '<strong>Telemetry analytics</strong> — historical charts for canopy temperature, soil moisture, solar radiation, and pump activity with Chart.js.',

            '<strong>Fleet health monitoring</strong> — real-time ESP32 gateway status, heap memory, SoC temperature, RSSI, and CRC16 integrity.',

            '<strong>Phytopathology alert system</strong> — crop disease risk warnings with agronomic recommendations from AI models.',

            '<strong>Closed-loop actuator control</strong> — real-time pump and boom sprayer control with automated safety cutoff.',

        ],

        'meta'     => 'Technology: <strong>React + Vite</strong> • Tailwind CSS • FastAPI • WebSocket • Leaflet • Chart.js • MySQL',

        'tech'     => [

            'Frontend: React + Vite, Tailwind CSS',

            'Backend: FastAPI + Python',

            'Realtime: WebSocket telemetry hub',

            'Visualization: Leaflet GIS + Chart.js',

            'Database: MySQL agrinex schema',

        ],

        'previews' => [

            ['file' => 'assets/agrinex-web-command-center-live.png', 'label' => 'Command Center & Real-Time GIS Map (React + Leaflet)'],

            ['file' => 'assets/agrinex-web-command-center-full.png', 'label' => 'Agro-Portal Web Dashboard & Actuator Controls (React)'],

            ['file' => 'assets/agrinex-web-diagnostic.png', 'label' => 'ESP32 Gateway Diagnostic & Serial Monitor Panel'],

            ['file' => 'assets/agrinex-web-notifications.png', 'label' => 'Notifications & Early Warning System'],

            ['file' => 'assets/agrinex-web-consultation.png', 'label' => 'Agronomic Advice & Consultation Panel'],

            ['file' => 'assets/agrinex-web-landing.png', 'label' => 'AGRINEX Public Landing Page'],

        ],

    ],

    [

        'title'    => 'Agrinex Farmer Mobile App',

        'year'     => '2026',

        'role'     => 'Team Leader — Mobile',

        'tag'      => 'Personal Work • Mobile Application',

        'category' => 'mobile',

        'badge'    => 'Flutter Android & PWA',

        'image'    => 'assets/agrinex-mobile-banner.webp',

        'initial'  => 'AGRINEX MOBILE',

        'github'   => '',

        'desc'     => 'A farmer mobile app that helps growers read field conditions, receive warnings, and control pumps or sprayers directly from the rice field.',

        'points'   => [

            '<strong>Glanceable farmer dashboard</strong> — large cards for soil moisture, temperature, weather, and connection status.',

            '<strong>One-tap actuator control</strong> — activates irrigation pumps or boom sprayers with duration presets and safety auto-cutoff.',

            '<strong>Offline-first BLE</strong> — reads telemetry directly from sensor nodes when internet access is unavailable.',

            '<strong>Early warning system</strong> — heat stress and fungal-risk notifications with easy-to-follow actions.',

            '<strong>Mobile responsive experience</strong> — high-contrast, outdoor-friendly, one-handed interface.',

        ],

        'meta'     => 'Technology: <strong>Flutter/Dart</strong> • Android APK • PWA • BLE 5.0 • REST API • Offline-first',

        'tech'     => [

            'Mobile: Flutter + Dart',

            'Platform: Android APK + PWA',

            'Connectivity: BLE 5.0 + REST API',

            'Features: offline-first, haptic action, TTS guidance',

        ],

        'previews' => [

            ['file' => 'assets/agrinex-mobile-banner.webp', 'label' => 'Flutter App Showcase (16:9)'],

            ['file' => 'assets/agrinex-mobile-flutter-home.png', 'label' => 'Flutter — Home'],

            ['file' => 'assets/agrinex-mobile-flutter-actuator.png', 'label' => 'Flutter — Actuators'],

            ['file' => 'assets/agrinex-mobile-flutter-analytics.png', 'label' => 'Flutter — Analytics'],

            ['file' => 'assets/agrinex-mobile-flutter-settings.png', 'label' => 'Flutter — Settings'],

        ],

    ],

    [

        'title'    => 'Agrinex AIoT Smart Farming Node',

        'year'     => '2026',

        'role'     => 'Team Leader — IoT & Hardware Engineering',

        'tag'      => 'Research Work • IoT & Hardware',

        'category' => 'iot',

        'badge'    => 'ESP32 Smart Device (TRL 3)',

        'image'    => 'assets/agrinex-iot-prototype-1.webp',

        'initial'  => 'AGRINEX IOT NODE',

        'github'   => '',

        'desc'     => 'A physical AIoT edge node prototype for monitoring soil conditions and microclimate based on <strong>ESP32 Edge-AI</strong>, equipped with solar power harvesting, rain sensor, capacitive soil moisture probe, and automated irrigation pump actuator.',

        'points'   => [

            '<strong>Solar-Powered Edge Node</strong> — autonomous energy module with solar harvesting and ESP32 deep-sleep power management.',

            '<strong>Continuous Soil & Rain Sensing</strong> — continuous capacitive soil moisture sensing paired with raindrop detection to prevent over-watering.',

            '<strong>Automated Drip Irrigation</strong> — mini DC submersible pump actuator driven by soil moisture thresholds and remote overrides.',

            '<strong>Modular 3D Enclosure</strong> — custom 3D-printed enclosure and mounting designed for experimental agricultural bed deployment.',

            '<strong>Telemetry Uplink Protocol</strong> — serial UART / MQTT telemetry register transmission feeding the Agrinex Desktop Suite and Web Command Center.',

        ],

        'meta'     => 'Technology: <strong>ESP32 • Solar Cell • Sensors (Soil & Rain) • Mini Pump • C/C++ • 3D Print</strong>',

        'tech'     => [

            'Hardware: ESP32 Edge Node',

            'Sensors: Soil Moisture & Raindrop MH-RD',

            'Actuator: Mini Submersible DC Pump',

            'Power: Solar Panel + Battery Charging',

            'Enclosure: Custom 3D Printed Casing',

            'Communication: UART Serial & MQTT',

        ],

        'previews' => [

            ['file' => 'assets/agrinex-iot-prototype-1.webp', 'label' => 'AIoT Physical Node Prototype — Solar Cell, Rain Sensor & Soil Probe (TRL 3)'],

            ['file' => 'assets/agrinex-iot-prototype-3.webp', 'label' => '3D Node Enclosure & Automated Irrigation Pump Perspective'],

            ['file' => 'assets/agrinex-iot-prototype-4.webp', 'label' => 'Node Wiring & Smart Meter Sensing Module Testing'],

            ['file' => 'assets/agrinex-iot-prototype-2.webp', 'label' => 'Field Validation & Soil Moisture Simulation Testing'],

        ],

    ],

];

$education = [

    [

        'degree'   => 'Bachelor of Information Systems',

        'school'   => 'Universitas Bina Sarana Informatika (BSI)',

        'date'     => 'Mar 2024 – Mar 2028 (Expected)',

        'icon'     => '🎓',

        'badge'    => 'UBSI',

        'logo'     => 'assets/logo-ubsi.webp',

        'desc'     => 'Studying information systems architecture, software engineering, database management, and enterprise application development.',

    ],

];

$competitions = [
    [
        'title'       => 'Team Leader (AIoT Innovation & Research Lead)',
        'event'       => 'DeepTech for Smart-X Hackathon 2026',
        'organizer'   => 'Institut Teknologi Bandung (ITB) & Kemendiktisaintek',
        'date'        => 'Oct 2026',
        'location'    => 'Bandung / Hybrid, Indonesia',
        'category'    => 'AIoT & Smart Farming',
        'badge'       => 'ITB Research Funding Program 2026',
        'logo'        => 'assets/logo-itb.webp',
        'icon'        => '🏆',
        'innovation'  => 'AI Soil Mapping to Reduce Agricultural Production Costs (Agrinex Nusantara)',
        'team'        => 'Agrinex Nusantara Team (UBSI x PPKPI Collaboration)',
        'desc'        => 'Continuous AIoT soil mapping innovation based on Edge-AI (ESP32) and Machine Learning NPK nutrient calibration, integrated with the Agrinex ecosystem (Desktop, Web GIS, Mobile App, and WhatsApp Gateway) to reduce fertilizer and operational costs by >20%.',
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
            'Led the Agrinex Nusantara team consisting of 4 cross-institutional members (UBSI, PPKPI, ITB) in research innovation proposal design and technical role distribution.',
            'Engineered the Hybrid Edge-Cloud system architecture: ESP32 Edge-AI noise filtering, context-aware soil moisture NPK calibration, and low-power MQTT Register-Mapped Protocol.',
            'Integrated the Predictive Nutrient Adjuster machine learning model for early crop disease risk detection and precision fertilizer recommendations per field bed.',
            'Connected the end-to-end Agrinex software ecosystem: Desktop Engineering Tool (PyQt6), Web GIS Command Center, Farmer Mobile App (Flutter), and WhatsApp Gateway for actionable alerts.',
            'Authored the official research commercialization proposal for Kemendiktisaintek funding to advance prototype readiness from TRL 3 to TRL 6, alongside the executive Pitch Deck \'Technology Roots to Dignity\'.',
        ],
        'docs'        => [
            [
                'label' => 'Pitch Deck Slides (PPTX)',
                'file'  => 'assets/agrinex-nusantara-pitch-deck.pptx',
                'type'  => 'pptx',
            ],
        ],
        'gallery'     => [
            [
                'image' => 'assets/agrinex-pitching-gis-screen.webp',
                'label' => 'Live Demonstration of Agrinex Web GIS & Command Center on Main Display',
            ],
            [
                'image' => 'assets/agrinex-pitching-hardware-team.webp',
                'label' => 'Technical Pitching & Hardware Prototype Demonstration with Team',
            ],
            [
                'image' => 'assets/agrinex-pitching-presentation.webp',
                'label' => 'Pitching & Innovation Q&A Session before Audience & Judges',
            ],
        ],
        'project_link' => [
            'url'       => 'project-detail.php?p=16',
            'title'     => 'AIoT Hardware Node & Prototype Implementation',
            'desc'      => 'Explore hardware node architecture, TRL 3 sensors, 3D enclosure, and wiring documentation on the Projects page.',
            'btn_label' => 'View Project Detail',
        ],
    ],
    [
        'title'       => '2nd Place Winner — IT Bootcamp "Next-Gen Software Engineering with AI"',
        'event'       => 'IT Bootcamp & App Competition UBSI 2025',
        'organizer'   => 'Universitas Bina Sarana Informatika (UBSI)',
        'date'        => 'Jan 8, 2025',
        'location'    => 'Jakarta, Indonesia',
        'category'    => 'Software Engineering & AI',
        'badge'       => '2nd Place (Rector Award)',
        'logo'        => 'assets/logo-ubsi.webp',
        'icon'        => '🥈',
        'innovation'  => 'UMKM Connect — MSME Digital Cashier, QR & B2B Ecosystem Platform',
        'team'        => 'Solo / Independent Project (Reynaldi Delphiano)',
        'desc'        => 'Won 2nd Place in the IT Bootcamp "Next-Gen Software Engineering with AI" competition hosted by Universitas Bina Sarana Informatika. UMKM Connect stood out in resolving operational challenges, cashier POS transactions, and B2B vendor connectivity for small businesses through modern software engineering.',
        'tech'        => [
            'Laravel (PHP)',
            'React.js',
            'Flutter (Dart)',
            'MySQL',
            'RESTful API',
            'AI Integration',
        ],
        'items'       => [
            'Achieved 2nd Place distinction along with the Official Award Certificate signed directly by the Rector of Universitas Bina Sarana Informatika (Prof. Dr. Ir. Mochammad Wahyudi, M.Kom, MM, M.Pd).',
            'Architected and implemented the end-to-end UMKM Connect system: Laravel REST API backend, modern React web interface, Flutter cross-platform mobile app, and interactive POS.',
            'Pitched the software innovation and business viability to a panel of academic jurors and industry IT experts.',
            'Registered and secured official Copyright (HKI) protection for the UMKM Connect application with the Ministry of Law and Human Rights of Indonesia.',
        ],
        'gallery'     => [
            [
                'image' => 'assets/sertifikat-juara-preview.webp',
                'label' => 'UBSI Rector 2nd Place Award Certificate',
            ],
            [
                'image' => 'assets/haki-umkm.jpeg',
                'label' => 'Ministry Copyright (HKI) Registration Letter',
            ],
            [
                'image' => 'assets/ui-ux-umkm.jpeg',
                'label' => 'UMKM Connect Mobile UI/UX Interface Design',
            ],
            [
                'image' => 'assets/umkm-web-login-preview.webp',
                'label' => 'UMKM Connect Web Portal Interface',
            ],
            [
                'image' => 'assets/umkm-web-pos-preview.webp',
                'label' => 'POS Cashier Terminal & Dynamic QRIS Modal',
            ],
        ],
        'project_link' => [
            'url'       => 'project-detail.php?p=2',
            'title'     => 'UMKM Connect Application System (Web POS & Business Ecosystem)',
            'desc'      => 'Explore fullstack architecture, POS transaction workflows, and feature demos on the Projects page.',
            'btn_label' => 'View Project Detail',
        ],
    ],
];

$talks = [
    [
        'title'       => 'Speaker — Web Programming Training',
        'org'         => 'Ibnu Chaldun University',
        'date'        => 'Oct 10, 2026',
        'location'    => 'Hall, Ibnu Chaldun University',
        'icon'        => '🎤',
        'badge'       => 'Speaker',
        'category'    => 'Web & AI Training',
        'photos'      => [
            'assets/experience/pembinaan-pemuda-2026-poster.webp',
            'assets/experience/pembinaan-pemuda-2026-foto.webp',
        ],
        'items'       => [
            'Featured speaker at the "Youth Activity Development: Web Programming Training" event on Saturday, October 10, 2026 at Ibnu Chaldun University Hall.',
            'Delivered training on web development fundamentals and building modern websites with AI assistance (Build Web with AI) to youth participants.',
        ],
    ],
    [
        'title'       => 'Speaker (AI Resource Person)',
        'org'         => 'RPTRA Tunas Teratai Cipayung',
        'date'        => '2026',
        'location'    => 'Cipayung, East Jakarta',
        'icon'        => '🎤',
        'badge'       => 'Speaker',
        'category'    => 'AI Education for Youth',
        'items'       => [
            'Presented "Unlocking Full AI Potential: Introduction to Artificial Intelligence for Youth" to teenage community participants at RPTRA Tunas Teratai Cipayung.',
            'Guided participants in hands-on generative AI prompting to draft professional resumes, CVs, and application letters.',
        ],
    ],
];

$experiences = [
    [
        'title'       => 'Web Developer',
        'track'       => 'IT',
        'org'         => 'Nexus Digital Creative',
        'date'        => '2026 – Present',
        'location'    => 'Jakarta, Indonesia',
        'category'    => 'Web Development',
        'icon'        => '💻',
        'badge'       => 'Nexus',
        'logo'        => 'assets/logo-ndc.webp',
        'items'       => [
            'Developing, maintaining, and optimizing modern, responsive, and interactive web applications.',
            'Building dynamic frontend interfaces and seamlessly integrating them with RESTful APIs and databases.',
            'Collaborating within creative teams to translate client specifications and UI/UX designs into clean, efficient code.',
        ],
    ],
    [
        'title'       => 'Service Technician (EDC Machines)',
        'track'       => 'IT',
        'org'         => 'PT Bank Central Asia Tbk (BCA)',
        'date'        => 'Sep 2024 – Oct 2024',
        'location'    => 'Kebon Jeruk, Jakarta',
        'category'    => 'Technical & Hardware',
        'icon'        => '🏦',
        'badge'       => 'BCA',
        'logo'        => 'https://cdn.brandfetch.io/bca.co.id/icon',
        'items'       => [
            'Performed periodic maintenance, repairs, new installments (installations), and replacement of EDC machines across BCA merchants.',
            'Ensured network connectivity of EDC terminals and smooth merchant transactions.',
        ],
    ],
    [
        'title'       => 'Service Technician (Smartphone & Gadget)',
        'track'       => 'IT',
        'org'         => 'Laku6.com',
        'date'        => 'Apr 2024 – Sep 2024',
        'location'    => 'Cengkareng, Jakarta',
        'category'    => 'Technical & Hardware',
        'icon'        => '📱',
        'badge'       => 'Laku6',
        'logo'        => 'https://cdn.brandfetch.io/laku6.com/icon',
        'items'       => [
            'Performed in-depth QC & feature testing on smartphones for resale functionality eligibility.',
            'Performed part replacement and hardware repair of mobile phones.',
            'Troubleshooting and resolution of software issues (Android & iOS OS flashing/reset).',
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
            'Held full accountability for daily operations, cross-functional team coordination, and project milestone completion against company SLAs.',
            'Led, guided, and evaluated team members performance to foster on-site productivity and operational efficiency.',
            'Served as the key point-of-contact across business divisions, resolving complex operational bottlenecks.',
            'Managed comprehensive project administration, recurring status reports, and adherence to operational SOPs.',
        ],
    ],
    [
        'title'       => 'Team Leader',
        'track'       => 'Non-IT',
        'org'         => 'Colony Group of Companies (Nescafé)',
        'date'        => 'Jul 2025 – Dec 2025',
        'location'    => 'Pasar Minggu, Jakarta',
        'category'    => 'Leadership & Sales',
        'icon'        => '☕',
        'badge'       => 'Nescafé',
        'logo'        => 'https://cdn.brandfetch.io/nescafe.com/icon',
        'items'       => [
            'Led and supervised field sales / promoter team performance toward Nescafé product sales targets (daily, weekly, monthly).',
            'Coordinated events, exhibitions, and on-field brand activation activities to increase market penetration & brand awareness.',
            'Conducted regular briefings, work performance evaluations, and sales strategy training for the team.',
            'Compiled periodic sales reports, analyzed market trends, and provided tactical recommendations to management.',
        ],
    ],
    [
        'title'       => 'Marketing Agent Officer',
        'track'       => 'Non-IT',
        'org'         => 'WOM Finance',
        'date'        => 'Jan 2023 – Mar 2023',
        'location'    => 'South Jakarta',
        'category'    => 'Finance & Marketing',
        'icon'        => '💳',
        'badge'       => 'WOM',
        'logo'        => 'https://cdn.brandfetch.io/wom.co.id/icon',
        'items'       => [
            'Managed, developed, and expanded the network of agent partnerships to increase financing application acquisition.',
            'Promoted marketing programs, negotiated partnerships, and performed initial verification of application document eligibility.',
            'Analyzed regional market potential and evaluated agent partner productivity.',
        ],
    ],
    [
        'title'       => 'Supervisor & Sales Officer',
        'track'       => 'Non-IT',
        'org'         => 'PT Bank Woori Saudara Indonesia 1906, Tbk.',
        'date'        => 'Aug 2022 – Jan 2023',
        'location'    => 'South Jakarta',
        'category'    => 'Finance & Leadership',
        'icon'        => '🏦',
        'badge'       => 'BWS',
        'logo'        => 'https://cdn.brandfetch.io/bankwoorisaudara.com/icon',
        'items'       => [
            'Supervised and tracked sales team activities in customer acquisition for pensioner credit and retail banking products.',
            'Formulated sales penetration tactics, individual quota allocation, and deal-closing assistance.',
            'Enforced stringent credit compliance in alignment with banking standards and credit risk management.',
            'Fostered strategic relationships with institutional partners handling pensioner payroll distributions.',
        ],
    ],
    [
        'title'       => 'Pension Sales Force',
        'track'       => 'Non-IT',
        'org'         => 'PT Bank Syariah Indonesia Tbk (BSI)',
        'date'        => 'May 2022 – Aug 2022',
        'location'    => 'South Jakarta',
        'category'    => 'Finance & Sales',
        'icon'        => '🌙',
        'badge'       => 'BSI',
        'logo'        => 'https://cdn.brandfetch.io/bankbsi.co.id/icon',
        'photos'      => ['assets/experience/bsi.jpeg'],
        'items'       => [
            'Marketed Sharia pension financing products to prospective retirees of civil service (ASN), military (TNI), police (Polri), and state enterprises (BUMN).',
            'Conducted direct field visits, customer presentations, and assisted financing document compliance.',
            'Maintained customer retention and delivered professional Sharia financial consultation.',
        ],
    ],
    [
        'title'       => 'Sales Consultant',
        'track'       => 'Non-IT',
        'org'         => 'Wuling Motors (Wuling Prima Fatmawati)',
        'date'        => 'Sep 2021 – Feb 2022',
        'location'    => 'South Jakarta',
        'category'    => 'Sales & Automotive',
        'icon'        => '🚗',
        'badge'       => 'Wuling',
        'logo'        => 'https://cdn.brandfetch.io/wuling.id/icon',
        'photos'      => ['assets/experience/wuling.jpeg'],
        'items'       => [
            'Provided four-wheeler automotive sales consultations, product presentations, and managed client test drives.',
            'Negotiated financing schemes (cash/credit), liaised with leasing partners, and organized vehicle handover paperwork.',
            'Cultivated customer leads through active canvassing, showroom exhibitions, and targeted digital marketing campaigns.',
        ],
    ],
    [
        'title'       => 'Surveyor - Traffic Counting & Data Collection',
        'track'       => 'Non-IT',
        'org'         => 'Sampingan (Staffinc)',
        'date'        => 'Mar 2021 – Jun 2021',
        'location'    => 'Greater Jakarta Area',
        'category'    => 'Research & Data',
        'icon'        => '📈',
        'badge'       => 'Staffinc',
        'logo'        => 'https://cdn.brandfetch.io/staffinc.co/icon',
        'items'       => [
            'Conducted field research and digital volume tracking of ride-hailing drivers across high-density arterial hubs.',
            'Compiled and formatted daily verified data batches for market analytical reporting.',
        ],
    ],
    [
        'title'       => 'Data Entry',
        'track'       => 'Non-IT',
        'org'         => 'Program Vaksinasi Merdeka (Polda Metro Jaya)',
        'date'        => 'Aug 2021 & Jan 2022',
        'location'    => 'Cipayung, East Jakarta',
        'category'    => 'Administration & Data',
        'icon'        => '💉',
        'badge'       => 'Polri',
        'logo'        => 'https://upload.wikimedia.org/wikipedia/commons/6/69/Logo_Polri.png',
        'photos'      => ['assets/experience/vaksinasi merdeka.jpeg'],
        'items'       => [
            'Processed registration entries for vaccination recipients (including the Children\'s Merdeka Vaccination initiative) into the national health database.',
            'Executed daily digital archiving with high accuracy and data integrity standards.',
        ],
    ],
    [
        'title'       => 'Sorter (Logistics Worker)',
        'track'       => 'Non-IT',
        'org'         => 'Lazada Express',
        'date'        => 'Jan 2019 – Jan 2023',
        'location'    => 'Depok, West Java',
        'category'    => 'Logistics & Operations',
        'icon'        => '📦',
        'badge'       => 'Lazada',
        'logo'        => 'https://cdn.brandfetch.io/lazada.co.id/icon',
        'items'       => [
            'Executed inbound/outbound package sorting, barcode scanning, and zonal route grouping for dispatch couriers.',
            'Ensured fulfillment flow velocity and strict adherence to logistic operational SLA targets.',
        ],
    ],
    [
        'title'       => 'Teller (Banking Staff)',
        'track'       => 'Non-IT',
        'org'         => 'PT Bank Central Asia Tbk (BCA)',
        'date'        => 'Sep 2018 – Sep 2019',
        'location'    => 'Sunter, North Jakarta',
        'category'    => 'Banking & Finance',
        'icon'        => '🏦',
        'badge'       => 'BCA',
        'logo'        => 'https://cdn.brandfetch.io/bca.co.id/icon',
        'photos'      => ['assets/experience/bca.jpeg', 'assets/experience/bca2.jpeg'],
        'items'       => [
            'Processed cash and non-cash banking transactions (deposits, withdrawals, clearing, wire transfers, foreign currency exchange) with 100% accounting accuracy.',
            'Delivered Customer-Focused Service Excellence while actively cross-selling complementary banking products.',
            'Complied strictly with internal banking regulations, daily cash limits, and end-of-day register reconciliation.',
        ],
    ],
];

$trainings = [
    [
        'title'       => 'Web Developer',
        'org'         => 'Pusat Pelatihan Kerja Pengembangan Industri (PPKPI)',
        'date'        => 'Jun 2026 – Present',
        'location'    => 'Jakarta, Indonesia',
        'category'    => 'Web Development',
        'icon'        => '💻',
        'badge'       => 'BNSP Certificate',
        'logo'        => 'assets/logo-ppkpi.jpeg',
        'tech'        => ['React.js', 'TypeScript', 'Tailwind CSS', 'JavaScript', 'Node.js', 'Vite', 'MySQL', 'Firebase'],
        'items'       => [
            'Building modern web interfaces using React in a software development training program.',
            'Developing interactive web applications, managing component state, and connecting the frontend with backend/API.',
            'Applying clean code, performance efficiency, and modern development tools.',
        ],
        'results'    => [
            ['image' => 'assets/posmart-register-preview.webp', 'label' => 'POSMart — POS Cashier Terminal'],
            ['image' => 'assets/posmart-catalog-preview.webp', 'label' => 'POSMart — Neo-Bold Storefront'],
            ['image' => 'assets/posmart-cashier-preview.webp', 'label' => 'POSMart — Online Cashier Orders'],
            ['image' => 'assets/posmart-products-preview.webp', 'label' => 'POSMart — Product Management'],
            ['image' => 'assets/posmart-login-preview.webp', 'label' => 'POSMart — Login Screen'],
        ],
    ],
    [
        'title'       => 'Graphic Designer',
        'org'         => 'Pusat Pelatihan Kerja Pengembangan Industri (PPKPI)',
        'date'        => 'May 2026 – Jun 2026',
        'location'    => 'Jakarta, Indonesia',
        'category'    => 'Graphic Design',
        'icon'        => '🎨',
        'badge'       => 'BNSP Certificate',
        'logo'        => 'assets/logo-ppkpi.jpeg',
        'tech'        => ['Adobe Photoshop', 'Adobe Illustrator', 'Adobe InDesign'],
        'items'       => [
            'Mastered design principles, typography, and composition to produce aesthetic and communicative visual materials.',
            'Used Adobe Photoshop, Adobe Illustrator, and Adobe InDesign for photos, vectors, logos, illustrations, and multipage documents.',
            'Completed branding projects, flyers, posters, banners, and basic UI for both print and digital media.',
            'Understood the design workflow from concept and execution to pre-press or digital publication.',
        ],
        'results'    => [
            ['image' => 'assets/moodboard-ujk.webp', 'label' => 'Graphic Design UJK Moodboard'],
            ['image' => 'assets/hasil-flyer-ujk.webp', 'label' => 'Graphic Design UJK Final Flyer'],
        ],
    ],
    [
        'title'       => 'Computer Technician',
        'org'         => 'Pusat Pelatihan Kerja Pengembangan Industri (PPKPI)',
        'date'        => 'Sep 2025 – Sep 2025',
        'location'    => 'East Jakarta',
        'category'    => 'Technical & Hardware',
        'icon'        => '🖥️',
        'badge'       => 'PPKPI',
        'logo'        => 'assets/logo-ppkpi.jpeg',
        'items'       => [
            'Intensive technical training program in the Computer Technician field based on competency.',
            'Mastered assembly, BIOS/UEFI configuration, and computer hardware maintenance.',
            'Operating system installation, driver management, local network configuration, and system performance optimization.',
            'Performed hardware/software failure analysis (troubleshooting) and repairs according to technical standards.',
        ],
        'results'    => [
            ['image' => 'assets/experience/activity-teknisi-komputer.jpeg', 'label' => 'Computer Technician Training Session'],
        ],
    ],
    [
        'title'       => 'Computer Operator',
        'org'         => 'Pusat Pelatihan Kerja Pengembangan Industri (PPKPI)',
        'date'        => 'Oct 2024 – Nov 2024',
        'location'    => 'Cipayung, Jakarta',
        'category'    => 'Technical & Data',
        'icon'        => '📊',
        'badge'       => 'PPKPI',
        'logo'        => 'assets/logo-ppkpi.jpeg',
        'items'       => [
            'Vocational & competency training program in the Computer Operator field.',
            'Advanced Office Suite operation for administrative needs, spreadsheet data analysis, and professional reports.',
            'Computer system management, structured digital file management, and maintenance of productivity support systems.',
        ],
        'results'    => [
            ['image' => 'assets/experience/activity-operator-komputer.jpeg', 'label' => 'Computer Operator Certificate Handover Session'],
            ['image' => 'assets/experience/activity-operator-komputer-2.jpeg', 'label' => 'Class Presentation & Training Evaluation Session'],
        ],
    ],
];

$stats = [
    ['num' => 'HKI', 'label' => 'Registered Copyright', 'sub' => 'Ministry of Law & Human Rights DJKI'],
    ['num' => '14+', 'label' => 'Career History', 'sub' => 'Technical & Managerial'],
];

$currentFocus = [
    [
        'icon'  => '🌐',
        'title' => 'Web Platforms',
        'desc'  => 'Production web applications using Laravel, React/TypeScript, and MySQL — spanning high-impact company profiles to multi-role ecosystems (POS, QRIS, B2B).',
    ],
    [
        'icon'  => '📡',
        'title' => 'IoT & Embedded',
        'desc'  => 'Agrinex ecosystem: ESP32/LoRaWAN firmware, Python & PyQt desktop tool, FastAPI backend, and real-time GIS telemetry dashboards.',
    ],
    [
        'icon'  => '📱',
        'title' => 'Cross-Platform Mobile',
        'desc'  => 'Flutter & Dart applications for MSME and agricultural operations, featuring offline-first architectures, BLE hardware sync, and RESTful APIs.',
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

        'title' => '2nd Place Winner - IT Bootcamp: Next-Gen Software Engineering with AI',

        'category' => 'IT',

        'issuer' => 'Universitas Bina Sarana Informatika (UBSI)',

        'date' => 'January 8, 2025',

        'credential' => 'UBSI Rector Award - NIM 19235147',

        'award' => '2nd Place Winner',

        'image' => 'assets/sertifikat-juara-preview.webp',

        'file' => 'assets/sertifikat-juara.pdf',

    ],

    [

        'title' => 'The Role Of CLO as a Strategic Partner',

        'category' => 'Non-IT',

        'issuer' => 'QuBisa',

        'date' => '17 February 2022',

        'credential' => '2U13QBTZ5YOU7H',

        'image' => 'assets/strategic-partner.webp',

        'file' => 'assets/strategic-partner.webp',

    ],

    [

        'title' => 'Becoming a Resilient Marketer Aligned with Market Needs',

        'category' => 'Non-IT',

        'issuer' => 'QuBisa',

        'date' => '14 February 2022',

        'credential' => '5NQKDVRENBJBOV',

        'image' => 'assets/marketer-tangguh.webp',

        'file' => 'assets/marketer-tangguh.webp',

    ],

    [

        'title' => 'The Importance of Digital Mastery in the Disruption Era',

        'category' => 'IT',

        'issuer' => 'QuBisa',

        'date' => '19 February 2022',

        'credential' => 'G9X4DC0RTJQ9KW',

        'image' => 'assets/penguasaan-digital.webp',

        'file' => 'assets/penguasaan-digital.webp',

    ],

    [

        'title' => 'Change or Perish',

        'category' => 'Non-IT',

        'issuer' => 'QuBisa',

        'date' => '16 February 2022',

        'credential' => 'GS2DKUXL5371ML',

        'image' => 'assets/berubah-atau-punah.webp',

        'file' => 'assets/berubah-atau-punah.webp',

    ],

    [

        'title' => 'Sensitive-Free Communication',

        'category' => 'Non-IT',

        'issuer' => 'QuBisa',

        'date' => '18 February 2022',

        'credential' => 'QWY91MWP2QIBMW',

        'image' => 'assets/komunikasi-tanpa-sensi.webp',

        'file' => 'assets/komunikasi-tanpa-sensi.webp',

    ],

    [

        'title' => 'The Teenagers Character Building Program — Roadmap to Success',

        'category' => 'Non-IT',

        'issuer' => 'Bank Mayora / James Gwee Dream Achievers',

        'date' => '13–14 August 2016',

        'credential' => null,

        'image' => 'assets/roadmap-to-success.webp',

        'file' => 'assets/roadmap-to-success.webp',

    ],

    [

        'title' => 'Anti Fraud',

        'category' => 'Non-IT',

        'issuer' => 'Training Certificate',

        'date' => null,

        'credential' => null,

        'image' => 'assets/anti-fraud-preview.webp',

        'file' => 'assets/anti-fraud.pdf',

    ],

    [

        'title' => 'API',

        'category' => 'IT',

        'issuer' => 'Training Certificate',

        'date' => null,

        'credential' => null,

        'image' => 'assets/api-preview.webp',

        'file' => 'assets/api.pdf',

    ],

    [

        'title' => 'Cyber Security',

        'category' => 'IT',

        'issuer' => 'Training Certificate',

        'date' => null,

        'credential' => null,

        'image' => 'assets/cyber-security-preview.webp',

        'file' => 'assets/cyber-security.pdf',

    ],

    [

        'title' => 'Digital Transformation Era',

        'category' => 'IT',

        'issuer' => 'Training Certificate',

        'date' => null,

        'credential' => null,

        'image' => 'assets/digital-transformation-era-preview.webp',

        'file' => 'assets/digital-transformation-era.pdf',

    ],

    [

        'title' => 'Behavior at BCA',

        'category' => 'Non-IT',

        'issuer' => 'BCA',

        'date' => null,

        'credential' => null,

        'image' => 'assets/perilaku-di-bca-preview.webp',

        'file' => 'assets/perilaku-di-bca.pdf',

    ],

    [

        'title' => 'Award Certificate for Reynaldi Delphiano',

        'category' => 'Non-IT',

        'issuer' => 'Award Certificate',

        'date' => null,

        'credential' => null,

        'image' => 'assets/piagam-penghargaan-reynaldi-delphiano-preview.webp',

        'file' => 'assets/piagam-penghargaan-reynaldi-delphiano.pdf',

    ],

    [

        'title' => 'Excel Certificate',

        'category' => 'IT',

        'issuer' => 'Fasz Edu',

        'date' => '8–10 February 2022',

        'credential' => '75/faszedu/OSMM-40/II/2022',

        'image' => 'assets/sertifikat-excel-preview.webp',

        'file' => 'assets/sertifikat-excel.pdf',

    ],

    [

        'title' => 'UX Writing',

        'category' => 'IT',

        'issuer' => 'Loker Programmer',

        'date' => '12 February 2022',

        'credential' => '0035/ITUW/PST/LOKPRO/II/2022',

        'image' => 'assets/loker-programmer-ux-writing-preview.webp',

        'file' => 'assets/loker-programmer-ux-writing.pdf',

    ],

    [

        'title' => 'Web Developer: The Art of Our Web',

        'category' => 'IT',

        'issuer' => 'Loker Programmer',

        'date' => '5 February 2022',

        'credential' => '0034/WDTAOW/PST/LOKPRO/II/2022',

        'image' => 'assets/loker-programmer-web-developer-preview.webp',

        'file' => 'assets/loker-programmer-web-developer.pdf',

    ],

    [

        'title' => 'Children\'s Merdeka Vaccination',

        'category' => 'Non-IT',

        'issuer' => 'Children\'s Merdeka Vaccination Program',

        'date' => null,

        'credential' => null,

        'image' => 'assets/sertifikat-vm-anak-reynaldi-delphiano-preview.webp',

        'file' => 'assets/sertifikat-vm-anak-reynaldi-delphiano.pdf',

    ],

];

