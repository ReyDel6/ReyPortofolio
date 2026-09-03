<?php
require_once __DIR__ . '/data.php';
$activePage = 'index';
$pageTitle  = $profile['name'] . ' — Web & Mobile Developer';
require __DIR__ . '/inc/header.php';
?>
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
                    <a href="projects.php" class="btn btn-primary">Lihat Proyek</a>
                    <a href="contact.php" class="btn btn-ghost">Hubungi Saya</a>
                </div>
                <!-- STATS HIGHLIGHTS -->
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
                <div class="hero-photo" id="heroPhotoWrapper" title="Klik untuk beralih mode foto (Real / Pixel Art)">
                    <img src="<?php echo htmlspecialchars($p['photo']); ?>" alt="Foto <?php echo htmlspecialchars($p['name']); ?>" class="hero-photo-img active" id="heroPhotoReal" loading="eager" onerror="this.style.display='none';document.getElementById('phFallback').style.display='flex';">
                    <img src="<?php echo htmlspecialchars($p['photo_avatar'] ?? 'assets/foto-pixel.jpg'); ?>" alt="Avatar Pixel <?php echo htmlspecialchars($p['name']); ?>" class="hero-photo-img" id="heroPhotoPixel" loading="eager">
                    <div class="ph-fallback" id="phFallback" style="display:none;"><?php echo htmlspecialchars($p['initial']); ?></div>
                    <div class="photo-mode-badge" id="photoModeBadge" role="toolbar" aria-label="Ganti Tampilan Foto Profil">
                        <button type="button" class="photo-mode-btn active" data-mode="real" title="Mode Foto Asli">
                            <svg viewBox="0 0 24 24" width="12" height="12" fill="currentColor"><path d="M4 4h3l2-2h6l2 2h3a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2zm8 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 2a3 3 0 1 1 0 6 3 3 0 0 1 0-6z"/></svg>
                            <span>Real</span>
                        </button>
                        <span class="photo-mode-divider"></span>
                        <button type="button" class="photo-mode-btn" data-mode="pixel" title="Mode Pixel Art Avatar">
                            <svg viewBox="0 0 24 24" width="12" height="12" fill="currentColor"><path d="M21 6H3a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1zm-11 7H8v2H6v-2H4v-2h2V9h2v2h2v2zm4-1a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm3 3a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></svg>
                            <span>Pixel</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JELAJAH (Quick Links ala halaman multi-page) -->
    <section class="section" id="jelajah">
        <div class="container">
            <div class="section-head">
                <span class="tag">Menu Utama</span>
                <h2>Jelajahi Portofolio</h2>
            </div>
            <div class="explore-grid">
                <a class="explore-card" href="about.php">
                    <span class="explore-icon">👤</span>
                    <h3>Tentang & Pengalaman</h3>
                    <p>Profil ringkas, riwayat karir lintas bidang, pendidikan, dan pelatihan.</p>
                    <span class="explore-arrow">Buka Halaman →</span>
                </a>
                <a class="explore-card" href="projects.php">
                    <span class="explore-icon">🚀</span>
                    <h3>Proyek</h3>
                    <p>UMKM Connect (Web & Mobile) beserta fitur, dokumentasi, dan hak cipta.</p>
                    <span class="explore-arrow">Buka Halaman →</span>
                </a>
                <a class="explore-card" href="certificates.php">
                    <span class="explore-icon">🛠️</span>
                    <h3>Skill & Sertifikat</h3>
                    <p>Tech stack, kemampuan, serta galeri sertifikat dan lisensi pelatihan.</p>
                    <span class="explore-arrow">Buka Halaman →</span>
                </a>
                <a class="explore-card" href="contact.php">
                    <span class="explore-icon">✉️</span>
                    <h3>Kontak</h3>
                    <p>Hubungi saya melalui email, WhatsApp, LinkedIn, dan sosial media lain.</p>
                    <span class="explore-arrow">Buka Halaman →</span>
                </a>
            </div>
        </div>
    </section>
<?php require __DIR__ . '/inc/footer.php'; ?>