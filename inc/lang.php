<?php
/**
 * ============================================================
 * SISTEM BAHASA (i18n) — Indonesia / English
 * Prioritas deteksi: ?lang=  >  cookie lang  >  browser > 'id'
 * ============================================================
 */

function detectLang()
{
    if (isset($_GET['lang'])) {
        $l = strtolower(substr(trim($_GET['lang']), 0, 2));
        if (in_array($l, ['id', 'en'], true)) {
            setcookie('lang', $l, time() + 60 * 60 * 24 * 365, '/');
            return $l;
        }
    }
    if (isset($_COOKIE['lang'])) {
        $l = strtolower(substr(trim($_COOKIE['lang']), 0, 2));
        if (in_array($l, ['id', 'en'], true)) {
            return $l;
        }
    }
    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        $al = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']);
        if (strpos($al, 'id') !== false) {
            return 'id';
        }
        if (strpos($al, 'en') !== false) {
            return 'en';
        }
    }
    return 'id';
}

$LANG = detectLang();
$L    = $LANG;
$GLOBALS['LANG'] = $LANG;

/**
 * Terjemahan string UI halaman (teks hardcoded di template).
 * Gunakan {nama} sebagai placeholder, contoh: t('career_count', ['n'=>13]).
 */
$GLOBALS['TXT'] = [
    'id' => [
        // HEADER / NAV
        'meta_desc'          => 'Portofolio Reynaldi Delphiano — Web & Mobile Developer. Pengembangan web, aplikasi mobile, UMKM Connect, dan pengalaman profesional.',
        'status_title'       => 'Tersedia untuk pekerjaan & proyek',
        'nav_home'           => 'Beranda',
        'nav_about'          => 'Tentang',
        'nav_projects'       => 'Proyek',
        'nav_certificates'   => 'Skill & Sertifikat',
        'nav_contact'        => 'Kontak',
        'about_nav_long'     => 'Tentang & Pengalaman',
        'contact_nav_long'   => 'Kontak & Sosial Media',
        'cmd_btn_title'      => 'Buka Command Palette (Ctrl+K)',
        'cmd_btn_label'      => 'Cari',
        'cta_contact'        => 'Hubungi ⚡',
        'nav_toggle_aria'    => 'Menu Navigasi',
        'lang_switch_aria'   => 'Ganti Bahasa',
        'lang_id'            => 'Indonesia',
        'lang_en'            => 'English',
        'portfolio_word'     => 'Portofolio',

        // INDEX / HERO
        'hero_desc'          => 'Passionate terhadap teknologi, pengembangan web & mobile, dan pemanfaatan teknologi untuk kemajuan UMKM Indonesia. Kreator <strong>UMKM Connect</strong>.',
        'btn_projects'       => 'Lihat Proyek',
        'btn_contact'        => 'Hubungi Saya',
        'photo_wrapper_title'=> 'Klik untuk beralih mode foto (Real / Pixel Art)',
        'alt_photo'          => 'Foto {name}',
        'alt_pixel'          => 'Avatar Pixel {name}',
        'photo_mode_aria'    => 'Ganti Tampilan Foto Profil',
        'mode_real_title'    => 'Mode Foto Asli',
        'mode_pixel_title'   => 'Mode Pixel Art Avatar',
        'explore_tag'        => 'Menu Utama',
        'explore_title'      => 'Jelajahi Portofolio',
        'explore_about_t'    => 'Tentang & Pengalaman',
        'explore_about_d'    => 'Profil ringkas, riwayat karir lintas bidang, pendidikan, dan pelatihan.',
        'explore_proj_t'     => 'Proyek',
        'explore_proj_d'     => 'UMKM Connect (Web & Mobile) beserta fitur, dokumentasi, dan hak cipta.',
        'explore_cert_t'     => 'Skill & Sertifikat',
        'explore_cert_d'     => 'Tech stack, kemampuan, serta galeri sertifikat dan lisensi pelatihan.',
        'explore_contact_t'  => 'Kontak',
        'explore_contact_d'  => 'Hubungi saya melalui email, WhatsApp, LinkedIn, dan sosial media lain.',
        'explore_arrow'      => 'Buka Halaman →',

        // ABOUT
        'about_title_all'    => 'Tentang & Pengalaman',
        'about_tag'          => 'Tentang Saya',
        'about_heading'      => 'Ringkasan',
        'signature_label'    => 'Salam hangat,',
        'signature_alt'      => 'Tanda tangan digital Reynaldi Delphiano',
        'about_base'         => 'Berbasis di:',
        'about_lang'         => 'Bahasa:',
        'about_focus'        => 'Fokus:',
        'btn_contact_me'     => 'Kontak Saya',
        'career_tag'         => 'Perjalanan Karir',
        'career_heading'     => 'Pengalaman Profesional',
        'career_subdesc'     => 'Rekam jejak pengalaman kerja, kepemimpinan, operasional, dan bidang teknis.',
        'career_it'          => 'Karir IT',
        'career_nonit'       => 'Karir Non-IT',
        'career_count'       => '{n} pengalaman',
        'exp_photo_title'    => 'Lihat foto {org}',
        'exp_photo_alt'      => 'Foto pengalaman di {org}',
        'timeline_expand'    => 'Lihat Semua Pengalaman ({n} Riwayat Karir)',
        'timeline_collapse'  => 'Ciutkan Riwayat Karir',
        'edu_tag'            => 'Akademik',
        'edu_heading'        => 'Pendidikan Formal',
        'campus_word'        => 'Kampus',
        'training_tag'       => 'Pengembangan',
        'training_heading'   => 'Pelatihan Profesional',
        'training_subdesc'   => 'Program pelatihan kerja dan vokasi yang pernah diikuti di PPKPI.',
        'alt_logo'           => 'Logo {org}',

        // PROJECTS
        'projects_title_all' => 'Proyek',
        'projects_tag'       => 'Proyek Unggulan',
        'projects_heading'   => 'Proyek Saya',
        'projects_subdesc'   => 'Karya dan proyek yang saya kembangkan, lengkap dengan fitur, teknologi, dan dokumentasi.',
        'badge_fallback'     => 'Proyek',
        'download_label_dflt'=> 'Unduh Aplikasi',
        'details_summary'    => 'Lihat Detail Proyek',
        'proj_features'      => 'Fitur & Keunggulan Utama',
        'proj_techstack'     => 'Tech Stack',
        'proj_roles'         => 'Akses Multi-Role',
        'btn_ask'            => 'Tanyakan tentang proyek ini →',
        'preview_label_dflt' => 'Preview Website',
        'preview_title'      => 'Lihat preview website',
        'preview_alt'        => 'Preview {title}',
        'zoom'               => '🔍 Perbesar',
        'hki_label'          => 'Sertifikat HKI DJKI',
        'hki_view_title'     => 'Lihat Sertifikat HKI',
        'hki_alt'            => 'Sertifikat HKI UMKM Connect',
        'uiux_label_dflt'    => 'Desain UI/UX Mobile & Web',
        'uiux_view_title'    => 'Lihat Desain UI/UX',
        'uiux_alt'           => 'Desain UI/UX UMKM Connect',
        'open_pdf'           => 'Buka Berkas PDF',

        // CERTIFICATES
        'cert_title_all'     => 'Skill & Sertifikat',
        'skills_tag'         => 'Kemampuan',
        'skills_heading'     => 'Skill & Ekosistem Teknologi',
        'skills_subdesc'     => 'Daftar teknologi, framework, dan tools yang saya gunakan dalam pengembangan software.',
        'tab_all'            => 'Semua',
        'tab_frontend'       => 'Frontend',
        'tab_backend'        => 'Backend',
        'tab_mobile'         => 'Mobile',
        'tab_tools'          => 'Tools',
        'cert_tag'           => 'Lisensi & Sertifikasi',
        'cert_heading'       => 'Sertifikat & Lisensi',
        'cert_subdesc'       => 'Sertifikat pelatihan dan penghargaan. Tiga sertifikat per kategori ditampilkan terlebih dahulu.',
        'cert_group_heading' => 'Sertifikasi {cat}',
        'cert_count'         => '{n} sertifikat',
        'cert_view_title'    => 'Lihat {title}',
        'cert_open'          => '🔍 Lihat Sertifikat',
        'cert_issued'        => 'Diterbitkan {date}',
        'cert_id'            => 'ID Kredensial:',
        'cert_download'      => '📄 Lihat Sertifikat',
        'cert_more'          => 'Lihat Semua Sertifikat ({n})',
        'cert_less'          => 'Tampilkan Lebih Sedikit',

        // CONTACT
        'contact_title_all'  => 'Kontak',
        'contact_tag'        => 'Kontak',
        'contact_heading'    => 'Mari Terhubung',
        'contact_subdesc'    => 'Silakan hubungi saya melalui salah satu kanal sosial media atau email berikut. Saya terbuka untuk peluang kerja, kolaborasi, dan proyek.',

        // FOOTER / CMD PALETTE
        'copyright'          => 'Semua hak cipta dilindungi.',
        'cmd_hint'           => 'Tekan Ctrl + K untuk Command Palette',
        'back_top_aria'      => 'Kembali ke atas',
        'cmd_placeholder'    => 'Ketik apa saja untuk mencari...',
        'cmd_group_nav'      => 'Navigasi Halaman',
        'cmd_group_actions'  => 'Aksi Cepat & Dokumen',
        'cmd_open_profile'   => 'Buka / Unduh Profile (PDF)',
        'cmd_open_cert'      => 'Buka Sertifikat Juara UI/UX',
        'cmd_open_github'    => 'Buka Profil GitHub',
        'cmd_open_linkedin'  => 'Buka LinkedIn',
        'cmd_use_keys'       => 'Gunakan ↑↓ untuk memilih',
        'cmd_enter'          => 'Enter untuk membuka',
        'cmd_esc'            => 'Esc untuk keluar',
    ],

    'en' => [
        // HEADER / NAV
        'meta_desc'          => 'Portfolio of Reynaldi Delphiano — Web & Mobile Developer. Web development, mobile apps, UMKM Connect, and professional experience.',
        'status_title'       => 'Available for work & projects',
        'nav_home'           => 'Home',
        'nav_about'          => 'About',
        'nav_projects'       => 'Projects',
        'nav_certificates'   => 'Skills & Certificates',
        'nav_contact'        => 'Contact',
        'about_nav_long'     => 'About & Experience',
        'contact_nav_long'   => 'Contact & Social Media',
        'cmd_btn_title'      => 'Open Command Palette (Ctrl+K)',
        'cmd_btn_label'      => 'Search',
        'cta_contact'        => 'Contact ⚡',
        'nav_toggle_aria'    => 'Navigation Menu',
        'lang_switch_aria'   => 'Change Language',
        'lang_id'            => 'Indonesia',
        'lang_en'            => 'English',
        'portfolio_word'     => 'Portfolio',

        // INDEX / HERO
        'hero_desc'          => 'Passionate about technology, web & mobile development, and using technology to advance Indonesian MSMEs (UMKM). Creator of <strong>UMKM Connect</strong>.',
        'btn_projects'       => 'View Projects',
        'btn_contact'        => 'Contact Me',
        'photo_wrapper_title'=> 'Click to toggle photo mode (Real / Pixel Art)',
        'alt_photo'          => 'Photo of {name}',
        'alt_pixel'          => 'Pixel avatar of {name}',
        'photo_mode_aria'    => 'Toggle Profile Photo Mode',
        'mode_real_title'    => 'Real Photo Mode',
        'mode_pixel_title'   => 'Pixel Art Avatar Mode',
        'explore_tag'        => 'Main Menu',
        'explore_title'      => 'Explore Portfolio',
        'explore_about_t'    => 'About & Experience',
        'explore_about_d'    => 'Concise profile, cross-field career history, education, and training.',
        'explore_proj_t'     => 'Projects',
        'explore_proj_d'     => 'UMKM Connect (Web & Mobile) with its features, documentation, and copyright.',
        'explore_cert_t'     => 'Skills & Certificates',
        'explore_cert_d'     => 'Tech stack, capabilities, plus a gallery of training certificates and licenses.',
        'explore_contact_t'  => 'Contact',
        'explore_contact_d'  => 'Reach me via email, WhatsApp, LinkedIn, and other social media.',
        'explore_arrow'      => 'Open Page →',

        // ABOUT
        'about_title_all'    => 'About & Experience',
        'about_tag'          => 'About Me',
        'about_heading'      => 'Summary',
        'signature_label'    => 'Warm regards,',
        'signature_alt'      => 'Digital signature of Reynaldi Delphiano',
        'about_base'         => 'Based in:',
        'about_lang'         => 'Languages:',
        'about_focus'        => 'Focus:',
        'btn_contact_me'     => 'Contact Me',
        'career_tag'         => 'Career Journey',
        'career_heading'     => 'Professional Experience',
        'career_subdesc'     => 'A track record of work experience across leadership, operations, and technical fields.',
        'career_it'          => 'IT Career',
        'career_nonit'       => 'Non-IT Career',
        'career_count'       => '{n} experiences',
        'exp_photo_title'    => 'View photo at {org}',
        'exp_photo_alt'      => 'Photo of {org} experience',
        'timeline_expand'    => 'View All Experience ({n} History)',
        'timeline_collapse'  => 'Collapse Career History',
        'edu_tag'            => 'Academic',
        'edu_heading'        => 'Formal Education',
        'campus_word'        => 'Campus',
        'training_tag'       => 'Development',
        'training_heading'   => 'Professional Training',
        'training_subdesc'   => 'Workforce and vocational training programs attended at PPKPI.',
        'alt_logo'           => 'Logo of {org}',

        // PROJECTS
        'projects_title_all' => 'Projects',
        'projects_tag'       => 'Featured Projects',
        'projects_heading'   => 'My Projects',
        'projects_subdesc'   => 'Work and projects I have developed, complete with features, technology, and documentation.',
        'badge_fallback'     => 'Project',
        'download_label_dflt'=> 'Download App',
        'details_summary'    => 'View Project Details',
        'proj_features'      => 'Key Features & Highlights',
        'proj_techstack'     => 'Tech Stack',
        'proj_roles'         => 'Multi-Role Access',
        'btn_ask'            => 'Ask about this project →',
        'preview_label_dflt' => 'Website Preview',
        'preview_title'      => 'View website preview',
        'preview_alt'        => 'Preview of {title}',
        'zoom'               => '🔍 Zoom',
        'hki_label'          => 'DJKI Copyright Certificate',
        'hki_view_title'     => 'View HKI Certificate',
        'hki_alt'            => 'UMKM Connect HKI Certificate',
        'uiux_label_dflt'    => 'Mobile & Web UI/UX Design',
        'uiux_view_title'    => 'View UI/UX Design',
        'uiux_alt'           => 'UMKM Connect UI/UX Design',
        'open_pdf'           => 'Open PDF File',

        // CERTIFICATES
        'cert_title_all'     => 'Skills & Certificates',
        'skills_tag'         => 'Skills',
        'skills_heading'     => 'Skills & Technology Ecosystem',
        'skills_subdesc'     => 'A list of technologies, frameworks, and tools I use in software development.',
        'tab_all'            => 'All',
        'tab_frontend'       => 'Frontend',
        'tab_backend'        => 'Backend',
        'tab_mobile'         => 'Mobile',
        'tab_tools'          => 'Tools',
        'cert_tag'           => 'Licenses & Certifications',
        'cert_heading'       => 'Certificates & Licenses',
        'cert_subdesc'       => 'Training certificates and awards. Three certificates per category are shown first.',
        'cert_group_heading' => '{cat} Certification',
        'cert_count'         => '{n} certificates',
        'cert_view_title'    => 'View {title}',
        'cert_open'          => '🔍 View Certificate',
        'cert_issued'        => 'Issued {date}',
        'cert_id'            => 'Credential ID:',
        'cert_download'      => '📄 View Certificate',
        'cert_more'          => 'View All Certificates ({n})',
        'cert_less'          => 'Show Less',

        // CONTACT
        'contact_title_all'  => 'Contact',
        'contact_tag'        => 'Contact',
        'contact_heading'    => 'Let\'s Connect',
        'contact_subdesc'    => 'Please reach out to me via any of the social media channels or email below. I am open to job opportunities, collaborations, and projects.',

        // FOOTER / CMD PALETTE
        'copyright'          => 'All rights reserved.',
        'cmd_hint'           => 'Press Ctrl + K for Command Palette',
        'back_top_aria'      => 'Back to top',
        'cmd_placeholder'    => 'Type anything to search...',
        'cmd_group_nav'      => 'Page Navigation',
        'cmd_group_actions'  => 'Quick Actions & Documents',
        'cmd_open_profile'   => 'Open / Download Profile (PDF)',
        'cmd_open_cert'      => 'Open UI/UX Champion Certificate',
        'cmd_open_github'    => 'Open GitHub Profile',
        'cmd_open_linkedin'  => 'Open LinkedIn',
        'cmd_use_keys'       => 'Use ↑↓ to select',
        'cmd_enter'          => 'Enter to open',
        'cmd_esc'            => 'Esc to close',
    ],
];

function t($key, $vars = [])
{
    $lang = $GLOBALS['LANG'] ?? 'id';
    $txt  = $GLOBALS['TXT'] ?? [];
    $s    = $txt[$lang][$key] ?? ($txt['id'][$key] ?? $key);
    foreach ($vars as $k => $v) {
        $s = str_replace('{' . $k . '}', (string) $v, $s);
    }
    return $s;
}