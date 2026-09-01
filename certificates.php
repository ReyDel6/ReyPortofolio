<?php
require_once __DIR__ . '/data.php';
$activePage = 'certificates';
$pageTitle  = 'Skill & Sertifikat — ' . $profile['name'];
require __DIR__ . '/inc/header.php';
?>
    <!-- SKILL -->
    <section class="section page-first" id="skill">
        <div class="container">
            <div class="section-head">
                <span class="tag">Kemampuan</span>
                <h2>Skill & Ekosistem Teknologi</h2>
                <p class="section-subdesc">Daftar teknologi, framework, dan tools yang saya gunakan dalam pengembangan software.</p>
            </div>

            <!-- SKILL TABS & PILLS -->
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
    <section class="section section-alt" id="sertifikasi">
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
<?php require __DIR__ . '/inc/footer.php'; ?>