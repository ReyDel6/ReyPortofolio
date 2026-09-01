<?php
require_once __DIR__ . '/data.php';
$activePage = 'projects';
$pageTitle  = 'Proyek — ' . $profile['name'];
require __DIR__ . '/inc/header.php';
?>
    <!-- PROYEK -->
    <section class="section page-first" id="proyek">
        <div class="container">
            <div class="section-head">
                <span class="tag">Proyek Unggulan</span>
                <h2>Proyek Saya</h2>
                <p class="section-subdesc">Karya dan proyek yang saya kembangkan, lengkap dengan fitur, teknologi, dan dokumentasi.</p>
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
                                        <a href="contact.php" class="btn btn-primary btn-sm">Tanyakan tentang proyek ini →</a>
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
<?php require __DIR__ . '/inc/footer.php'; ?>