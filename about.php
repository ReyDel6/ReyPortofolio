<?php
require_once __DIR__ . '/data.php';
$activePage = 'about';
$pageTitle  = t('about_title_all') . ' — ' . $profile['name'];
require __DIR__ . '/inc/header.php';
?>
    <!-- TENTANG -->
    <section class="section page-first" id="tentang">
        <div class="container">
            <div class="section-head">
                <span class="tag"><?php echo t('about_tag'); ?></span>
                <h2><?php echo t('about_heading'); ?></h2>
            </div>
            <div class="about-grid">
                <div class="about-card">
                    <?php foreach ($p['summary'] as $para): ?>
                        <p><?php echo $para; ?></p>
                    <?php endforeach; ?>
                    <div class="signature-block">
                        <span class="signature-label"><?php echo t('signature_label'); ?></span>
                        <img src="assets/ttd-rey-cropped.png" alt="<?php echo htmlspecialchars(t('signature_alt')); ?>" class="signature-image" loading="lazy">
                    </div>
                </div>
                <div class="about-card">
                    <p><strong><?php echo t('about_base'); ?></strong> <?php echo htmlspecialchars($p['location']); ?></p>
                    <p><strong><?php echo t('about_lang'); ?></strong> <?php echo htmlspecialchars($p['languages']); ?></p>
                    <p><strong><?php echo t('about_focus'); ?></strong> <?php echo htmlspecialchars($p['focus']); ?></p>
                    <a href="contact.php" class="btn btn-primary btn-sm"><?php echo t('btn_contact_me'); ?></a>
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

    <!-- PELATIHAN -->
    <?php if (!empty($trainings)): ?>
    <section class="section section-alt" id="pelatihan">
        <div class="container">
            <div class="section-head">
                <span class="tag"><?php echo t('training_tag'); ?></span>
                <h2><?php echo t('training_heading'); ?></h2>
                <p class="section-subdesc"><?php echo htmlspecialchars(t('training_subdesc')); ?></p>
            </div>
            <div class="training-grid">
                <?php foreach ($trainings as $training): ?>
                <article class="training-card">
                    <div class="training-card-head">
                        <div class="training-icon">
                            <?php if (!empty($training['logo'])): ?>
                            <img src="<?php echo htmlspecialchars($training['logo']); ?>" alt="<?php echo htmlspecialchars(t('alt_logo', ['org' => $training['org']])); ?>" class="training-logo" loading="lazy" onerror="this.style.display='none';this.nextElementSibling.style.display='inline-block';">
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