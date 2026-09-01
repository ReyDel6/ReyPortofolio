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
                <div class="hero-photo">
                    <img src="<?php echo htmlspecialchars($p['photo']); ?>" alt="Foto <?php echo htmlspecialchars($p['name']); ?>" onerror="this.style.display='none';document.getElementById('phFallback').style.display='flex';">
                    <div class="ph-fallback" id="phFallback" style="display:none;"><?php echo htmlspecialchars($p['initial']); ?></div>
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