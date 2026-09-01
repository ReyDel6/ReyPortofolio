<?php
require __DIR__ . '/data.php';
$p = $profile;

function getSocialIcon($label, $size = 20) {
    $s = intval($size);
    switch (strtolower($label)) {
        case 'email':
            return '<svg viewBox="0 0 24 24" width="'.$s.'" height="'.$s.'" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>';
        case 'linkedin':
            return '<svg viewBox="0 0 24 24" width="'.$s.'" height="'.$s.'" fill="currentColor"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 8.76a1.6 1.6 0 0 0 0-3.2 1.6 1.6 0 0 0 0 3.2m1.4 9.74v-8.37H5.06v8.37h2.8z"/></svg>';
        case 'instagram':
            return '<svg viewBox="0 0 24 24" width="'.$s.'" height="'.$s.'" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>';
        case 'tiktok':
            return '<svg viewBox="0 0 24 24" width="'.$s.'" height="'.$s.'" fill="currentColor"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-1.01-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.24 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>';
        case 'github':
            return '<svg viewBox="0 0 24 24" width="'.$s.'" height="'.$s.'" fill="currentColor"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z"/></svg>';
        case 'youtube':
            return '<svg viewBox="0 0 24 24" width="'.$s.'" height="'.$s.'" fill="currentColor"><path d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 0 0 .5 6.2 31.6 31.6 0 0 0 0 12a31.6 31.6 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 0 0 2.1-2.1A31.6 31.6 0 0 0 24 12a31.6 31.6 0 0 0-.5-5.8zM9.6 15.5v-7l6.2 3.5-6.2 3.5z"/></svg>';
        case 'whatsapp':
            return '<svg viewBox="0 0 24 24" width="'.$s.'" height="'.$s.'" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.5 8.5 0 0 1-12.6 7.45L3 20l1.1-5.1A8.5 8.5 0 1 1 21 11.5z"/><path d="M8.5 8.5c.25-.5.5-.52.8-.52h.4c.14 0 .3.05.4.35l.55 1.3c.08.2.05.35-.08.52l-.4.5c-.13.15-.08.3 0 .45.35.65 1.05 1.3 1.85 1.7.18.1.3.08.42-.07l.55-.65c.13-.17.3-.2.5-.1l1.28.6c.2.1.3.17.3.32 0 .2-.08.75-.38 1.02-.3.28-.78.42-1.32.3-.55-.12-1.9-.7-2.93-1.65-1.03-.95-1.7-2.12-1.9-2.65-.2-.53-.1-.98.05-1.4z"/></svg>';
        default:
            return '🔗';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($p['name']); ?> — Portofolio</title>
    <meta name="description" content="Portofolio Reynaldi Delphiano — Web & Mobile Developer. Pengembangan web, aplikasi mobile, UMKM Connect, dan pengalaman profesional.">
    <link rel="icon" type="image/svg+xml" href="assets/favicon.svg">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <!-- SCROLL PROGRESS INDICATOR -->
    <div class="scroll-progress" id="scrollProgress"></div>

    <!-- NAVBAR -->
    <header class="navbar" id="navbar">
        <div class="container nav-inner">
            <a href="#hero" class="brand">
                <span class="brand-badge"><?php echo htmlspecialchars($p['initial']); ?></span>
                <span class="brand-name"><?php echo htmlspecialchars($p['brand']); ?><span class="brand-dot">.</span></span>
                <svg class="verified-badge-svg" viewBox="0 0 24 24" width="18" height="18" fill="#38bdf8" title="Verified Developer"><path d="m23 12-2.44-2.79.34-3.69-3.61-.82-1.89-3.2L12 2.96 8.6 1.5 6.71 4.69 3.1 5.5l.34 3.7L1 12l2.44 2.79-.34 3.7 3.61.82L8.6 22.5l3.4-1.47 3.4 1.46 1.89-3.19 3.61-.82-.34-3.69L23 12zm-12.91 4.72-3.8-3.81 1.48-1.48 2.32 2.33 5.85-5.87 1.48 1.48-7.33 7.35z"/></svg>
                <span class="status-badge" title="Tersedia untuk pekerjaan & proyek">
                    <span class="status-pulse"></span> Available
                </span>
            </a>
            
            <nav class="nav-links" id="navLinks">
                <a href="#hero" class="nav-item active">Beranda</a>
                <a href="#tentang" class="nav-item">Tentang</a>
                <a href="#proyek" class="nav-item">Proyek</a>
                <a href="#pengalaman" class="nav-item">Pengalaman</a>
                <a href="#skill" class="nav-item">Skill</a>
                <a href="#sertifikasi" class="nav-item">Sertifikasi</a>
                <a href="#kontak" class="nav-item">Kontak</a>
            </nav>

            <div class="nav-actions">
                <button class="btn-cmd-k" id="openCmdPalette" title="Buka Command Palette (Ctrl+K)">
                    <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M20 5H4c-1.1 0-1.99.9-1.99 2L2 17c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm-9 3h2v2h-2V8zm0 3h2v2h-2v-2zM8 8h2v2H8V8zm0 3h2v2H8v-2zm-1 2H5v-2h2v2zm0-3H5V8h2v2zm9 7H8v-2h8v2zm0-4h-2v-2h2v2zm0-3h-2V8h2v2zm3 3h-2v-2h2v2zm0-3h-2V8h2v2z"/></svg>
                    <span>Cari</span>
                    <kbd>⌘K</kbd>
                </button>
                <a href="#kontak" class="btn-nav-cta">Hubungi ⚡</a>
                <button class="nav-toggle" id="navToggle" aria-label="Menu Navigasi">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </header>

    <!-- HERO -->
    <section class="hero" id="hero">
        <div class="container hero-inner">
            <div class="hero-left">
                <p class="hero-eyebrow"><?php echo htmlspecialchars($p['eyebrow']); ?></p>
                <h1 class="hero-title-with-badge">
                    <span><?php echo htmlspecialchars($p['name']); ?></span>
                    <svg class="verified-badge-large" viewBox="0 0 24 24" width="28" height="28" fill="#38bdf8" title="Verified Developer"><path d="m23 12-2.44-2.79.34-3.69-3.61-.82-1.89-3.2L12 2.96 8.6 1.5 6.71 4.69 3.1 5.5l.34 3.7L1 12l2.44 2.79-.34 3.7 3.61.82L8.6 22.5l3.4-1.47 3.4 1.46 1.89-3.19 3.61-.82-.34-3.69L23 12zm-12.91 4.72-3.8-3.81 1.48-1.48 2.32 2.33 5.85-5.87 1.48 1.48-7.33 7.35z"/></svg>
                </h1>
                <p class="hero-role"><?php echo htmlspecialchars($p['role']); ?><span class="dot-sep">•</span><?php echo htmlspecialchars($p['role2']); ?></p>
                <p class="hero-desc">
                    Passionate terhadap teknologi, pengembangan web & mobile, dan pemanfaatan
                    teknologi untuk kemajuan UMKM Indonesia. Kreator <strong>UMKM Connect</strong>.
                </p>
                <div class="hero-actions">
                    <a href="#proyek" class="btn btn-primary">Lihat Proyek</a>
                    <a href="#kontak" class="btn btn-ghost">Hubungi Saya</a>
                </div>
                <!-- STATS HIGHLIGHTS (Ala Satria Bahari) -->
                <div class="hero-stats-grid">
                    <?php foreach ($stats as $st): ?>
                    <div class="stat-pill">
                        <span class="stat-num"><?php echo htmlspecialchars($st['num']); ?></span>
                        <div class="stat-info">
                            <span class="stat-lbl"><?php echo htmlspecialchars($st['label']); ?></span>
                            <span class="stat-sub"><?php echo htmlspecialchars($st['sub']); ?></span>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="hero-right">
                <div class="hero-photo">
                    <img src="<?php echo htmlspecialchars($p['photo']); ?>" alt="Foto <?php echo htmlspecialchars($p['name']); ?>" onerror="this.style.display='none';document.getElementById('phFallback').style.display='flex';">
                    <div class="ph-fallback" id="phFallback" style="display:none;"><?php echo htmlspecialchars($p['initial']); ?></div>
                </div>
            </div>
        </div>
    </section>

    <!-- TENTANG -->
    <section class="section" id="tentang">
        <div class="container">
            <div class="section-head">
                <span class="tag">Tentang Saya</span>
                <h2>Ringkasan</h2>
            </div>
            <div class="about-grid">
                <div class="about-card">
                    <?php foreach ($p['summary'] as $para): ?>
                        <p><?php echo $para; ?></p>
                    <?php endforeach; ?>
                    <div class="signature-block">
                        <span class="signature-label">Salam hangat,</span>
                        <img src="assets/ttd-rey-cropped.png" alt="Tanda tangan digital Reynaldi Delphiano" class="signature-image" loading="lazy">
                    </div>
                </div>
                <div class="about-card">
                    <p><strong>Berbasis di:</strong> <?php echo htmlspecialchars($p['location']); ?></p>
                    <p><strong>Bahasa:</strong> <?php echo htmlspecialchars($p['languages']); ?></p>
                    <p><strong>Fokus:</strong> <?php echo htmlspecialchars($p['focus']); ?></p>
                    <a href="#kontak" class="btn btn-primary btn-sm">Kontak Saya</a>
                </div>
            </div>
        </div>
    </section>

    <!-- PROYEK -->
    <section class="section section-alt" id="proyek">
        <div class="container">
            <div class="section-head">
                <span class="tag">Proyek Unggulan</span>
                <h2>Proyek Saya</h2>
            </div>
            <div class="projects-grid">
                <?php foreach ($projects as $pi => $proj): ?>
                <?php $modalId = 'projectModal' . $pi; ?>
                <article class="project-card featured">
                    <div class="project-header">
                        <div class="project-logo-wrapper">
                            <img src="<?php echo htmlspecialchars($proj['image']); ?>" alt="<?php echo htmlspecialchars($proj['title']); ?>" class="project-logo-img" onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                            <div class="proj-fallback" style="display:none;"><?php echo nl2br(htmlspecialchars($proj['initial'])); ?></div>
                        </div>
                        <div class="project-header-info">
                            <div class="project-header-top">
                                <span class="proj-tag"><?php echo htmlspecialchars($proj['tag']); ?></span>
                                <span class="proj-badge-hki"><?php echo htmlspecialchars($proj['badge'] ?? 'Proyek'); ?></span>
                            </div>
                            <h3><?php echo htmlspecialchars($proj['title']); ?></h3>
                            <p class="proj-intro"><?php echo $proj['desc']; ?></p>
                        </div>
                    </div>

                    <div class="project-body">
                        <?php if (!empty($proj['tech'])): ?>
                        <div class="proj-chips proj-card-chips">
                            <?php foreach ($proj['tech'] as $t): ?>
                                <span class="proj-chip"><?php echo htmlspecialchars($t); ?></span>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                        <div class="proj-links">
                            <?php if (!empty($proj['github'])): ?>
                            <a href="<?php echo htmlspecialchars($proj['github']); ?>" target="_blank" rel="noopener" class="btn btn-ghost btn-sm">GitHub ↗</a>
                            <?php endif; ?>
                            <?php if (!empty($proj['live'])): ?>
                            <a href="<?php echo htmlspecialchars($proj['live']); ?>" target="_blank" rel="noopener" class="btn btn-ghost btn-sm">Live Demo ↗</a>
                            <?php endif; ?>
                            <?php if (!empty($proj['download']['file'])): ?>
                            <a href="<?php echo htmlspecialchars($proj['download']['file']); ?>" class="btn btn-ghost btn-sm" download>
                                ↓ <?php echo htmlspecialchars($proj['download']['label'] ?? 'Unduh Aplikasi'); ?>
                            </a>
                            <?php endif; ?>
                            <button type="button" class="btn btn-primary btn-sm" data-open-modal="<?php echo $modalId; ?>">Lihat Detail Proyek</button>
                        </div>
                    </div>
                </article>

                <!-- Project Detail Modal -->
                <div class="proj-modal-overlay" id="<?php echo $modalId; ?>" data-modal hidden>
                    <div class="proj-modal" role="dialog" aria-modal="true" aria-labelledby="<?php echo $modalId; ?>-title">
                        <div class="proj-modal-head">
                            <div class="proj-modal-title">
                                <div class="project-logo-wrapper proj-modal-logo">
                                    <img src="<?php echo htmlspecialchars($proj['image']); ?>" alt="<?php echo htmlspecialchars($proj['title']); ?>" class="project-logo-img" onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                                    <div class="proj-fallback" style="display:none;"><?php echo nl2br(htmlspecialchars($proj['initial'])); ?></div>
                                </div>
                                <div>
                                    <div class="project-header-top">
                                        <span class="proj-tag"><?php echo htmlspecialchars($proj['tag']); ?></span>
                                        <span class="proj-badge-hki"><?php echo htmlspecialchars($proj['badge'] ?? 'Proyek'); ?></span>
                                    </div>
                                    <h3 id="<?php echo $modalId; ?>-title"><?php echo htmlspecialchars($proj['title']); ?></h3>
                                    <p class="proj-intro"><?php echo $proj['desc']; ?></p>
                                </div>
                            </div>
                            <button type="button" class="proj-modal-close" data-close-modal aria-label="Tutup">&times;</button>
                        </div>

                        <div class="proj-modal-body">
                            <?php $hasProjectMedia = !empty($proj['hki_image']) || !empty($proj['uiux']) || !empty($proj['certificate']) || !empty($proj['preview']) || !empty($proj['previews']); ?>
                            <div class="project-split<?php echo $hasProjectMedia ? '' : ' project-split-full'; ?>">
                                <div class="proj-main">
                                    <h4 class="proj-sub">Fitur & Keunggulan Utama</h4>
                                    <ul class="proj-points">
                                        <?php foreach ($proj['points'] as $pt): ?>
                                            <li><?php echo $pt; ?></li>
                                        <?php endforeach; ?>
                                    </ul>

                                    <?php if (!empty($proj['tech'])): ?>
                                    <h4 class="proj-sub">Tech Stack</h4>
                                    <div class="proj-chips">
                                        <?php foreach ($proj['tech'] as $t): ?>
                                            <span class="proj-chip"><?php echo htmlspecialchars($t); ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php endif; ?>

                                    <?php if (!empty($proj['roles'])): ?>
                                    <h4 class="proj-sub">Akses Multi-Role</h4>
                                    <div class="proj-chips role-chips">
                                        <?php foreach ($proj['roles'] as $r): ?>
                                            <span class="proj-chip chip-role"><?php echo htmlspecialchars($r); ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php endif; ?>

                                    <div class="proj-links">
                                        <?php if (!empty($proj['github'])): ?>
                                        <a href="<?php echo htmlspecialchars($proj['github']); ?>" target="_blank" rel="noopener" class="btn btn-ghost btn-sm">GitHub ↗</a>
                                        <?php endif; ?>
                                        <?php if (!empty($proj['live'])): ?>
                                        <a href="<?php echo htmlspecialchars($proj['live']); ?>" target="_blank" rel="noopener" class="btn btn-ghost btn-sm">Live Demo ↗</a>
                                        <?php endif; ?>
                                        <?php if (!empty($proj['download']['file'])): ?>
                                        <a href="<?php echo htmlspecialchars($proj['download']['file']); ?>" class="btn btn-ghost btn-sm" download>
                                            ↓ <?php echo htmlspecialchars($proj['download']['label'] ?? 'Unduh Aplikasi'); ?>
                                        </a>
                                        <?php endif; ?>
                                        <a href="#kontak" class="btn btn-primary btn-sm">Tanyakan tentang proyek ini →</a>
                                    </div>
                                </div>

                                <?php if ($hasProjectMedia): ?>
                                <div class="proj-side">
                                    <?php
                                    $projPreviews = $proj['previews'] ?? (!empty($proj['preview']) ? [['file' => $proj['preview'], 'label' => $proj['preview_label'] ?? 'Preview Website']] : []);
                                    foreach ($projPreviews as $pv):
                                        $pvFile = $pv['file'] ?? '';
                                        $pvLabel = $pv['label'] ?? 'Preview Website';
                                        if (empty($pvFile)) { continue; }
                                    ?>
                                    <div class="proj-media-card">
                                        <div class="proj-media-label"><?php echo htmlspecialchars($pvLabel); ?></div>
                                        <a href="<?php echo htmlspecialchars($pvFile); ?>" target="_blank" rel="noopener" class="proj-fig-link" title="Lihat preview website">
                                            <img src="<?php echo htmlspecialchars($pvFile); ?>" alt="Preview <?php echo htmlspecialchars($proj['title']); ?>" loading="lazy">
                                            <span class="zoom-hint">🔍 Perbesar</span>
                                        </a>
                                    </div>
                                    <?php endforeach; ?>
                                    <?php if (!empty($proj['hki_image'])): ?>
                                    <div class="proj-media-card">
                                        <div class="proj-media-label">Sertifikat HKI DJKI</div>
                                        <a href="<?php echo htmlspecialchars($proj['hki_image']); ?>" target="_blank" rel="noopener" class="proj-fig-link" title="Lihat Sertifikat HKI">
                                            <img src="<?php echo htmlspecialchars($proj['hki_image']); ?>" alt="Sertifikat HKI UMKM Connect" loading="lazy">
                                            <span class="zoom-hint">🔍 Perbesar</span>
                                        </a>
                                    </div>
                                    <?php endif; ?>

                                    <?php if (!empty($proj['uiux'])): ?>
                                    <div class="proj-media-card">
                                        <div class="proj-media-label"><?php echo htmlspecialchars($proj['uiux_label'] ?? 'Desain UI/UX Mobile & Web'); ?></div>
                                        <a href="<?php echo htmlspecialchars($proj['uiux']); ?>" target="_blank" rel="noopener" class="proj-fig-link" title="Lihat Desain UI/UX">
                                            <img src="<?php echo htmlspecialchars($proj['uiux']); ?>" alt="Desain UI/UX UMKM Connect" loading="lazy">
                                            <span class="zoom-hint">🔍 Perbesar</span>
                                        </a>
                                    </div>
                                    <?php endif; ?>

                                    <?php if (!empty($proj['certificate'])): ?>
                                    <a class="proj-cert" href="<?php echo htmlspecialchars($proj['certificate']['file']); ?>" target="_blank" rel="noopener">
                                        <span>🏆</span>
                                        <div>
                                            <strong><?php echo htmlspecialchars($proj['certificate']['label']); ?></strong>
                                            <small style="display:block; opacity:0.8;">Buka Berkas PDF</small>
                                        </div>
                                    </a>
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>
                            </div>

                            <?php if (!empty($proj['hki'])): ?>
                            <div class="proj-hki">
                                <span class="hki-icon">⚖️</span>
                                <div class="hki-text"><?php echo $proj['hki']; ?></div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- PENGALAMAN & PENDIDIKAN -->
    <section class="section" id="pengalaman">
        <div class="container">
            <div class="section-head">
                <span class="tag">Perjalanan Karir</span>
                <h2>Pengalaman Profesional</h2>
                <p class="section-subdesc">Rekam jejak pengalaman kerja, kepemimpinan, operasional, dan bidang teknis.</p>
            </div>

            <!-- TIMELINE -->
            <?php $careerIndex = 0; ?>
            <div class="career-groups" id="timelineList">
                <?php foreach (['IT', 'Non-IT'] as $careerTrack): ?>
                <?php $careerGroup = array_values(array_filter($experiences, static function ($exp) use ($careerTrack) {
                    return ($exp['track'] ?? '') === $careerTrack;
                })); ?>
                <?php if (!empty($careerGroup)): ?>
                <div class="career-group">
                    <div class="career-group-head">
                        <span class="tag <?php echo $careerTrack === 'IT' ? 'tag-it' : 'tag-non-it'; ?>"><?php echo htmlspecialchars($careerTrack); ?></span>
                        <h3>Karir <?php echo htmlspecialchars($careerTrack); ?></h3>
                        <span class="career-group-count"><?php echo count($careerGroup); ?> pengalaman</span>
                    </div>
                    <div class="timeline">
                        <?php foreach ($careerGroup as $exp): ?>
                        <div class="tl-item <?php echo $careerIndex >= 5 ? 'tl-extra tl-hidden' : ''; ?>">
                            <div class="tl-dot"></div>
                            <div class="tl-card">
                                <div class="tl-head">
                                    <div class="tl-title-row">
                                        <div class="tl-title-wrap">
                                            <div class="tl-company-icon" title="<?php echo htmlspecialchars($exp['org']); ?>">
                                                <?php if (!empty($exp['logo'])): ?>
                                                    <img src="<?php echo htmlspecialchars($exp['logo']); ?>" alt="<?php echo htmlspecialchars($exp['org']); ?>" class="company-logo-img" loading="lazy" onerror="this.style.display='none';this.nextElementSibling.style.display='inline-block';">
                                                    <span class="fallback-icon" style="display:none;"><?php echo $exp['icon'] ?? '🏢'; ?></span>
                                                <?php else: ?>
                                                    <span><?php echo $exp['icon'] ?? '🏢'; ?></span>
                                                <?php endif; ?>
                                            </div>
                                            <div>
                                                <h3><?php echo htmlspecialchars($exp['title']); ?></h3>
                                                <span class="tl-org"><?php echo htmlspecialchars($exp['org']); ?></span>
                                            </div>
                                        </div>
                                        <div class="tl-badges-wrap">
                                            <?php if (!empty($exp['badge'])): ?>
                                                <span class="tl-company-badge"><?php echo htmlspecialchars($exp['badge']); ?></span>
                                            <?php endif; ?>
                                            <?php if (!empty($exp['category'])): ?>
                                                <span class="tl-badge"><?php echo htmlspecialchars($exp['category']); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="tl-meta-row">
                                        <span class="tl-date">📅 <?php echo htmlspecialchars($exp['date']); ?></span>
                                        <?php if (!empty($exp['location'])): ?>
                                            <span class="tl-loc">📍 <?php echo htmlspecialchars($exp['location']); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <ul>
                                    <?php foreach ($exp['items'] as $item): ?>
                                        <li><?php echo htmlspecialchars($item); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <?php $careerIndex++; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>

            <?php if (count($experiences) > 5): ?>
            <div class="timeline-toggle-wrap">
                <button type="button" class="btn btn-ghost" id="toggleTimelineBtn" data-expanded="false">
                    <span class="toggle-text">Lihat Semua Pengalaman (<?php echo count($experiences); ?> Riwayat Karir)</span>
                    <span class="toggle-icon">▼</span>
                </button>
            </div>
            <?php endif; ?>

            <!-- PENDIDIKAN -->
            <?php if (!empty($education)): ?>
            <div class="edu-section">
                <div class="edu-head">
                    <span class="tag tag-edu">Akademik</span>
                    <h3>Pendidikan Formal</h3>
                </div>
                <div class="edu-grid">
                    <?php foreach ($education as $edu): ?>
                    <div class="edu-card">
                        <div class="edu-logo-wrapper">
                            <div class="edu-bsi-badge">
                                <?php if (!empty($edu['logo'])): ?>
                                    <img src="<?php echo htmlspecialchars($edu['logo']); ?>" alt="<?php echo htmlspecialchars($edu['school']); ?>" class="edu-logo-img" loading="lazy" onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                                    <div class="edu-bsi-fallback" style="display:none;">
                                        <span class="edu-bsi-text">UBSI</span>
                                        <span class="edu-bsi-sub">Kampus</span>
                                    </div>
                                <?php else: ?>
                                    <span class="edu-bsi-text">UBSI</span>
                                    <span class="edu-bsi-sub">Kampus</span>
                                <?php endif; ?>
                            </div>
                            <span class="edu-icon-symbol">🎓</span>
                        </div>
                        <div class="edu-content">
                            <div class="edu-top">
                                <div>
                                    <h4><?php echo htmlspecialchars($edu['degree']); ?></h4>
                                    <p class="edu-school"><span class="campus-dot"></span> <?php echo htmlspecialchars($edu['school']); ?></p>
                                </div>
                                <span class="edu-date"><?php echo htmlspecialchars($edu['date']); ?></span>
                            </div>
                            <p class="edu-desc"><?php echo htmlspecialchars($edu['desc']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>

            <!-- PELATIHAN -->
            <?php if (!empty($trainings)): ?>
            <div class="training-section">
                <div class="training-head">
                    <span class="tag tag-training">Pengembangan</span>
                    <h3>Pelatihan Profesional</h3>
                    <p class="training-desc">Program pelatihan kerja dan vokasi yang pernah diikuti di PPKPI.</p>
                </div>
                <div class="training-grid">
                    <?php foreach ($trainings as $training): ?>
                    <article class="training-card">
                        <div class="training-card-head">
                            <div class="training-icon">
                                <?php if (!empty($training['logo'])): ?>
                                <img src="<?php echo htmlspecialchars($training['logo']); ?>" alt="Logo <?php echo htmlspecialchars($training['org']); ?>" class="training-logo" loading="lazy" onerror="this.style.display='none';this.nextElementSibling.style.display='inline-block';">
                                <span class="training-icon-fallback" style="display:none;"><?php echo htmlspecialchars($training['icon'] ?? '📚'); ?></span>
                                <?php else: ?>
                                <?php echo htmlspecialchars($training['icon'] ?? '📚'); ?>
                                <?php endif; ?>
                            </div>
                            <div>
                                <h4><?php echo htmlspecialchars($training['title']); ?></h4>
                                <p class="training-org"><?php echo htmlspecialchars($training['org']); ?></p>
                            </div>
                        </div>
                        <div class="training-meta">
                            <span>📅 <?php echo htmlspecialchars($training['date']); ?></span>
                            <?php if (!empty($training['location'])): ?>
                            <span>📍 <?php echo htmlspecialchars($training['location']); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="training-tags">
                            <?php if (!empty($training['category'])): ?>
                            <span class="tl-badge training-badge"><?php echo htmlspecialchars($training['category']); ?></span>
                            <?php endif; ?>
                            <?php if (!empty($training['badge'])): ?>
                            <span class="training-cert-badge">✓ <?php echo htmlspecialchars($training['badge']); ?></span>
                            <?php endif; ?>
                        </div>
                        <ul>
                            <?php foreach ($training['items'] as $item): ?>
                            <li><?php echo htmlspecialchars($item); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>

        </div>
    </section>

    <!-- SKILL -->
    <section class="section section-alt" id="skill">
        <div class="container">
            <div class="section-head">
                <span class="tag">Kemampuan</span>
                <h2>Skill & Ekosistem Teknologi</h2>
                <p class="section-subdesc">Daftar teknologi, framework, dan tools yang saya gunakan dalam pengembangan software.</p>
            </div>

            <!-- SKILL TABS & PILLS (Inspirasi Satria Bahari) -->
            <div class="skills-satria-container">
                <div class="skill-tabs-nav" id="skillTabs">
                    <button class="skill-tab-btn active" data-filter="all">All <span class="tab-count"><?php echo count($techSkillPills); ?></span></button>
                    <button class="skill-tab-btn" data-filter="Frontend">Frontend <span class="tab-count"><?php echo count(array_filter($techSkillPills, fn($i)=>$i['category']==='Frontend')); ?></span></button>
                    <button class="skill-tab-btn" data-filter="Backend">Backend <span class="tab-count"><?php echo count(array_filter($techSkillPills, fn($i)=>$i['category']==='Backend')); ?></span></button>
                    <button class="skill-tab-btn" data-filter="Mobile">Mobile <span class="tab-count"><?php echo count(array_filter($techSkillPills, fn($i)=>$i['category']==='Mobile')); ?></span></button>
                    <button class="skill-tab-btn" data-filter="Tools">Tools <span class="tab-count"><?php echo count(array_filter($techSkillPills, fn($i)=>$i['category']==='Tools')); ?></span></button>
                </div>

                <div class="skill-pills-grid" id="skillPillsGrid">
                    <?php foreach ($techSkillPills as $pill): ?>
                    <div class="tech-pill-item" data-category="<?php echo htmlspecialchars($pill['category']); ?>" style="--brand-color: <?php echo htmlspecialchars($pill['color']); ?>;">
                        <span class="pill-bg-glow" style="background-color: <?php echo htmlspecialchars($pill['color']); ?>;"></span>
                        <img src="<?php echo htmlspecialchars($pill['local_icon'] ?? 'https://skillicons.dev/icons?i=' . $pill['icon']); ?>" alt="<?php echo htmlspecialchars($pill['name']); ?>" class="pill-icon" onerror="this.style.display='none'; this.nextElementSibling.style.display='grid';">
                        <span class="pill-icon-fallback" style="display:none;"><?php echo htmlspecialchars($pill['mark'] ?? substr($pill['name'], 0, 1)); ?></span>
                        <span class="pill-name"><?php echo htmlspecialchars($pill['name']); ?></span>
                        <span class="pill-cat"><?php echo htmlspecialchars($pill['category']); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- DOMAIN SKILLS CARDS -->
            <div class="skills-grid" style="margin-top: 36px;">
                <?php foreach ($skills as $sk): ?>
                <div class="skill-card">
                    <span class="skill-ico"><?php echo htmlspecialchars($sk['icon']); ?></span>
                    <h4><?php echo htmlspecialchars($sk['title']); ?></h4>
                    <p><?php echo htmlspecialchars($sk['desc']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- SERTIFIKASI -->
    <section class="section" id="sertifikasi">
        <div class="container">
            <div class="section-head">
                <span class="tag">Lisensi & Sertifikasi</span>
                <h2>Sertifikat & Lisensi</h2>
                <p class="section-subdesc">Sertifikat pelatihan dan penghargaan. Tiga sertifikat per kategori ditampilkan terlebih dahulu.</p>
            </div>
            <?php foreach (['IT', 'Non-IT'] as $certCategory): ?>
            <?php $certGroup = array_values(array_filter($certificates, static function ($cert) use ($certCategory) {
                return ($cert['category'] ?? '') === $certCategory;
            })); ?>
            <?php if (!empty($certGroup)): ?>
            <div class="cert-group">
                <div class="cert-group-head">
                    <span class="tag tag-cert"><?php echo htmlspecialchars($certCategory); ?></span>
                    <h3>Sertifikasi <?php echo htmlspecialchars($certCategory); ?><span class="cert-group-count"><?php echo count($certGroup); ?> sertifikat</span></h3>
                </div>
                <div class="cert-grid">
                    <?php foreach ($certGroup as $certIndex => $cert): ?>
                    <div class="cert-card <?php echo $certIndex >= 3 ? 'cert-extra cert-hidden' : ''; ?>">
                        <a class="cert-thumb" href="<?php echo htmlspecialchars($cert['file']); ?>" target="_blank" rel="noopener" title="Lihat <?php echo htmlspecialchars($cert['title']); ?>">
                            <img src="<?php echo htmlspecialchars($cert['image']); ?>" alt="<?php echo htmlspecialchars($cert['title']); ?>" loading="lazy">
                            <span class="cert-open">🔍 Lihat Sertifikat</span>
                        </a>
                        <div class="cert-body">
                            <h3><?php echo htmlspecialchars($cert['title']); ?></h3>
                            <p class="cert-issuer"><?php echo htmlspecialchars($cert['issuer']); ?></p>
                            <?php if (!empty($cert['date'])): ?>
                            <p class="cert-no">Diterbitkan <?php echo htmlspecialchars($cert['date']); ?></p>
                            <?php endif; ?>
                            <?php if (!empty($cert['credential'])): ?>
                            <p class="cert-no">ID Kredensial: <?php echo htmlspecialchars($cert['credential']); ?></p>
                            <?php endif; ?>
                            <a class="cert-download" href="<?php echo htmlspecialchars($cert['file']); ?>" target="_blank" rel="noopener">&#128196; Lihat Sertifikat</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
            <?php if (count($certificates) > 6): ?>
            <div class="cert-toggle-wrap">
                <button type="button" class="btn btn-ghost" id="toggleCertificatesBtn" data-expanded="false" aria-expanded="false">
                    <span class="cert-toggle-text">Lihat Semua Sertifikat (<?php echo count($certificates); ?>)</span>
                    <span class="cert-toggle-icon">▼</span>
                </button>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- KONTAK -->
    <section class="section" id="kontak">
        <div class="container">
            <div class="section-head">
                <span class="tag">Kontak</span>
                <h2>Mari Terhubung</h2>
                <p class="section-subdesc">Silakan hubungi saya melalui salah satu kanal sosial media atau email berikut.</p>
            </div>
            <div class="contact-grid">
                <?php foreach ($p['social'] as $s): ?>
                <a class="contact-card social-card-<?php echo strtolower($s['label']); ?>" href="<?php echo htmlspecialchars($s['url']); ?>" target="_blank" rel="noopener">
                    <span class="contact-ico social-ico-<?php echo strtolower($s['label']); ?>"><?php echo getSocialIcon($s['label'], 22); ?></span>
                    <div class="contact-info">
                        <h4><?php echo htmlspecialchars($s['label']); ?></h4>
                        <p><?php echo htmlspecialchars($s['handle']); ?></p>
                    </div>
                    <span class="contact-arrow">↗</span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container footer-inner">
            <div class="footer-brand">
                <span class="brand-badge"><?php echo htmlspecialchars($p['initial']); ?></span>
                <span><?php echo htmlspecialchars($p['name']); ?></span>
            </div>
            <p>&copy; 2026 <?php echo htmlspecialchars($p['name']); ?>. Semua hak cipta dilindungi.</p>
            <div class="footer-cmd-hint">
                Tekan <kbd>Ctrl</kbd> + <kbd>K</kbd> untuk Command Palette
            </div>
        </div>
    </footer>

    <!-- BACK TO TOP -->
    <button type="button" id="backToTop" class="back-to-top" aria-label="Kembali ke atas">↑</button>

    <!-- COMMAND PALETTE MODAL (⌘K / Ctrl+K) -->
    <div class="cmd-overlay" id="cmdOverlay" style="display:none;">
        <div class="cmd-modal" id="cmdModal">
            <div class="cmd-header">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                <input type="text" id="cmdInput" placeholder="Ketik apa saja untuk mencari..." autocomplete="off">
                <button type="button" class="cmd-esc-btn" id="closeCmdBtn">ESC</button>
            </div>
            <div class="cmd-body" id="cmdResults">
                <div class="cmd-group">
                    <span class="cmd-group-title">Navigasi Halaman</span>
                    <a href="#hero" class="cmd-item" data-action="link"><span class="cmd-icon">🏠</span><span>Beranda</span><span class="cmd-shortcut">#hero</span></a>
                    <a href="#tentang" class="cmd-item" data-action="link"><span class="cmd-icon">👤</span><span>Tentang Reynaldi</span><span class="cmd-shortcut">#tentang</span></a>
                    <a href="#proyek" class="cmd-item" data-action="link"><span class="cmd-icon">🚀</span><span>Proyek UMKM Connect</span><span class="cmd-shortcut">#proyek</span></a>
                    <a href="#pengalaman" class="cmd-item" data-action="link"><span class="cmd-icon">💼</span><span>Pengalaman Profesional</span><span class="cmd-shortcut">#pengalaman</span></a>
                    <a href="#skill" class="cmd-item" data-action="link"><span class="cmd-icon">🛠️</span><span>Skill & Teknologi</span><span class="cmd-shortcut">#skill</span></a>
                    <a href="#kontak" class="cmd-item" data-action="link"><span class="cmd-icon">✉️</span><span>Kontak & Sosial Media</span><span class="cmd-shortcut">#kontak</span></a>
                </div>
                <div class="cmd-group">
                    <span class="cmd-group-title">Aksi Cepat & Dokumen</span>
                    <a href="Profile.pdf" target="_blank" class="cmd-item" data-action="doc"><span class="cmd-icon">📄</span><span>Buka / Unduh Profile (PDF)</span><span class="cmd-shortcut">PDF</span></a>
                    <a href="assets/sertifikat-juara.pdf" target="_blank" class="cmd-item" data-action="doc"><span class="cmd-icon">🏆</span><span>Buka Sertifikat Juara UI/UX</span><span class="cmd-shortcut">Sertifikat</span></a>
                    <a href="https://github.com/ReyDel6" target="_blank" class="cmd-item" data-action="ext"><span class="cmd-icon">🐙</span><span>Buka Profil GitHub</span><span class="cmd-shortcut">GitHub ↗</span></a>
                    <a href="https://www.linkedin.com/in/reynaldi-delphiano-2b6b79120" target="_blank" class="cmd-item" data-action="ext"><span class="cmd-icon">💼</span><span>Buka LinkedIn</span><span class="cmd-shortcut">LinkedIn ↗</span></a>
                </div>
            </div>
            <div class="cmd-footer">
                <span>Gunakan <kbd>↑</kbd><kbd>↓</kbd> untuk memilih</span>
                <span><kbd>Enter</kbd> untuk membuka</span>
                <span><kbd>Esc</kbd> untuk keluar</span>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>
