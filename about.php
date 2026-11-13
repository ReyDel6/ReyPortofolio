<?php
require_once __DIR__ . '/data.php';
require_once __DIR__ . '/inc/tech-icons.php';
$activePage = 'about';
$pageTitle  = t('about_title_all') . ' — ' . $profile['name'];
require __DIR__ . '/inc/header.php';
?>
    <!-- QUICK JUMP -->
    <div class="quick-jump" id="quickJump">
        <div class="container quick-jump-inner">
            <a class="quick-jump-chip active" href="#tentang"><?php echo htmlspecialchars(t('jump_summary')); ?></a>
            <a class="quick-jump-chip" href="#pengalaman"><?php echo htmlspecialchars(t('jump_career')); ?></a>
            <a class="quick-jump-chip" href="#pendidikan"><?php echo htmlspecialchars(t('jump_education')); ?></a>
        </div>
    </div>

    <!-- TENTANG -->
    <section class="section page-first" id="tentang">
        <div class="container">
            <div class="section-head">
                <span class="tag"><?php echo t('about_tag'); ?></span>
                <h2><?php echo t('about_heading'); ?></h2>
            </div>
            <div class="about-grid">
                <div class="about-card">
                    <?php
                    // Tautan studi kasus UMKM Connect — indeks dicari dinamis agar tidak rusak saat urutan proyek berubah.
                    $umkmIndex = array_search('UMKM Connect', array_column($projects, 'title'), true);
                    $umkmHref  = $umkmIndex !== false ? 'project-detail.php?p=' . (int) $umkmIndex : 'projects.php';
                    ?>
                    <?php foreach ($p['summary'] as $para): ?>
                        <?php
                        $para = str_replace(
                            '<strong>UMKM Connect</strong>',
                            '<a class="inline-link" href="' . htmlspecialchars($umkmHref) . '"><strong>UMKM Connect</strong></a>',
                            $para
                        );
                        ?>
                        <p><?php echo $para; ?></p>
                    <?php endforeach; ?>
                    <?php if (!empty($p['traits'])): ?>
                    <div class="about-traits">
                        <?php foreach ($p['traits'] as $trait): ?>
                            <span class="about-trait"><?php echo htmlspecialchars($trait); ?></span>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                    <div class="signature-block">
                        <span class="signature-label"><?php echo t('signature_label'); ?></span>
                        <img src="assets/ttd-rey-cropped.webp" alt="<?php echo htmlspecialchars(t('signature_alt')); ?>" class="signature-image" loading="lazy">
                    </div>
                </div>
                <div class="about-card about-meta-card">
                    <img src="<?php echo htmlspecialchars($p['photo']); ?>" alt="<?php echo htmlspecialchars(t('alt_photo', ['name' => $p['name']])); ?>" class="about-photo" loading="lazy">
                    <p><strong><?php echo t('about_base'); ?></strong> <?php echo htmlspecialchars($p['location']); ?></p>
                    <p><strong><?php echo t('about_lang'); ?></strong> <?php echo htmlspecialchars($p['languages']); ?></p>
                    <p><strong><?php echo t('about_focus'); ?></strong> <?php echo htmlspecialchars($p['focus']); ?></p>
                    <div class="about-actions">
                        <a href="contact.php" class="btn btn-primary btn-sm"><?php echo t('btn_contact_me'); ?></a>
                        <a href="Profile.pdf" target="_blank" rel="noopener" class="btn btn-ghost btn-sm">
                            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="margin-right: 6px;"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                            <?php echo t('btn_resume'); ?> (PDF)
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PENGALAMAN -->
    <section class="section section-alt" id="pengalaman">
        <div class="container">
            <div class="section-head">
                <span class="tag"><?php echo t('career_tag'); ?></span>
                <h2><?php echo t('career_heading'); ?></h2>
                <p class="section-subdesc"><?php echo htmlspecialchars(t('career_subdesc')); ?></p>
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
                        <h3><?php echo $careerTrack === 'IT' ? t('career_it') : t('career_nonit'); ?></h3>
                        <span class="career-group-count"><?php echo t('career_count', ['n' => count($careerGroup)]); ?></span>
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
                                <?php if (!empty($exp['photos'])): ?>
                                <div class="experience-photos">
                                    <?php foreach ($exp['photos'] as $photo): ?>
                                    <a href="<?php echo htmlspecialchars($photo); ?>" target="_blank" rel="noopener" title="<?php echo htmlspecialchars(t('exp_photo_title', ['org' => $exp['org']])); ?>">
                                        <img src="<?php echo htmlspecialchars($photo); ?>" alt="<?php echo htmlspecialchars(t('exp_photo_alt', ['org' => $exp['org']])); ?>" loading="lazy">
                                    </a>
                                    <?php endforeach; ?>
                                </div>
                                <?php endif; ?>
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
                    <span class="toggle-text"><?php echo t('timeline_expand', ['n' => count($experiences)]); ?></span>
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
                <span class="tag"><?php echo t('edu_tag'); ?></span>
                <h2><?php echo t('edu_heading'); ?></h2>
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
                                    <span class="edu-bsi-sub"><?php echo t('campus_word'); ?></span>
                                </div>
                            <?php else: ?>
                                <span class="edu-bsi-text">UBSI</span>
                                <span class="edu-bsi-sub"><?php echo t('campus_word'); ?></span>
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

    <!-- KEGIATAN & PELATIHAN (TEASER) -->
    <section class="section section-alt" id="kegiatan-teaser">
        <div class="container">
            <div class="cta-activities">
                <div class="cta-activities-text">
                    <span class="tag"><?php echo t('nav_activities'); ?></span>
                    <h2><?php echo t('activities_teaser_heading'); ?></h2>
                    <p><?php echo htmlspecialchars(t('activities_teaser_desc')); ?></p>
                </div>
                <a href="kegiatan.php" class="btn btn-primary"><?php echo t('activities_teaser_cta'); ?> →</a>
            </div>
        </div>
    </section>
<?php require __DIR__ . '/inc/footer.php'; ?>