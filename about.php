<?php
require_once __DIR__ . '/data.php';
$activePage = 'about';
$pageTitle  = 'Tentang & Pengalaman — ' . $profile['name'];
require __DIR__ . '/inc/header.php';
?>
    <!-- TENTANG -->
    <section class="section page-first" id="tentang">
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
                    <a href="contact.php" class="btn btn-primary btn-sm">Kontak Saya</a>
                </div>
            </div>
        </div>
    </section>

    <!-- PENGALAMAN -->
    <section class="section section-alt" id="pengalaman">
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
        </div>
    </section>

    <!-- PENDIDIKAN -->
    <?php if (!empty($education)): ?>
    <section class="section" id="pendidikan">
        <div class="container">
            <div class="section-head">
                <span class="tag">Akademik</span>
                <h2>Pendidikan Formal</h2>
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
    </section>
    <?php endif; ?>

    <!-- PELATIHAN -->
    <?php if (!empty($trainings)): ?>
    <section class="section section-alt" id="pelatihan">
        <div class="container">
            <div class="section-head">
                <span class="tag">Pengembangan</span>
                <h2>Pelatihan Profesional</h2>
                <p class="section-subdesc">Program pelatihan kerja dan vokasi yang pernah diikuti di PPKPI.</p>
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
    </section>
    <?php endif; ?>
<?php require __DIR__ . '/inc/footer.php'; ?>