<?php
require_once __DIR__ . '/data.php';
require_once __DIR__ . '/inc/tech-icons.php';
$pid = (int) ($_GET['p'] ?? -1);
if (!isset($projects[$pid])) {
    header('Location: projects.php');
    exit;
}
$proj = $projects[$pid];
$activePage = 'projects';
$pageTitle  = $proj['title'] . ' — ' . $profile['name'];
require __DIR__ . '/inc/header.php';

$projPreviews = $proj['previews'] ?? (!empty($proj['preview']) ? [['file' => $proj['preview'], 'label' => $proj['preview_label'] ?? t('preview_label_dflt')]] : []);
$hasProjectMedia = !empty($proj['hki_image']) || !empty($proj['uiux']) || !empty($proj['certificate']) || !empty($proj['preview']) || !empty($proj['previews']);
$total = count($projects);
$prevIdx = ($pid + $total - 1) % $total;
$nextIdx = ($pid + 1) % $total;
$prevProj = $projects[$prevIdx];
$nextProj = $projects[$nextIdx];
?>
    <!-- DETAIL PROYEK -->
    <section class="section page-first" id="detail">
        <div class="container proj-detail-wrap">
            <a class="proj-back-link" href="projects.php">← <?php echo t('nav_projects'); ?></a>

            <article class="project-card proj-detail-card">
                <div class="proj-modal-head">
                    <div class="proj-modal-logo">
                        <img src="<?php echo htmlspecialchars($proj['image']); ?>" alt="<?php echo htmlspecialchars($proj['title']); ?>" loading="lazy" onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                        <div class="proj-fallback" style="display:none;"><?php echo nl2br(htmlspecialchars($proj['initial'])); ?></div>
                    </div>
                    <div class="proj-modal-title">
                        <div class="project-header-top">
                            <span class="proj-tag"><?php echo htmlspecialchars($proj['tag']); ?></span>
                            <span class="proj-badge-hki"><?php echo htmlspecialchars($proj['badge'] ?? t('badge_fallback')); ?></span>
                        </div>
                        <h3><?php echo htmlspecialchars($proj['title']); ?></h3>
                        <p class="proj-intro"><?php echo $proj['desc']; ?></p>
                    </div>
                </div>

                <div class="proj-modal-section">
                    <h4 class="proj-sub"><?php echo t('proj_features'); ?></h4>
                    <ul class="proj-points">
                        <?php foreach ($proj['points'] as $pt): ?>
                            <li><?php echo $pt; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <?php if (!empty($proj['tech'])): ?>
                <div class="proj-modal-section">
                    <h4 class="proj-sub"><?php echo t('proj_techstack'); ?></h4>
                    <div class="proj-chips">
                        <?php foreach ($proj['tech'] as $t): ?>
                            <?php echo renderTechChip($t); ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

                <?php if (!empty($proj['roles'])): ?>
                <div class="proj-modal-section">
                    <h4 class="proj-sub"><?php echo t('proj_roles'); ?></h4>
                    <div class="proj-chips role-chips">
                        <?php foreach ($proj['roles'] as $r): ?>
                            <span class="proj-chip chip-role"><?php echo htmlspecialchars($r); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

                <?php if ($hasProjectMedia): ?>
                <div class="proj-modal-section">
                    <h4 class="proj-sub"><?php echo t('proj_gallery'); ?></h4>
                    <div class="proj-modal-gallery">
                        <?php foreach ($projPreviews as $pv):
                            $pvFile = $pv['file'] ?? '';
                            $pvLabel = $pv['label'] ?? t('preview_label_dflt');
                            if (empty($pvFile)) { continue; }
                        ?>
                        <div class="proj-media-card">
                            <div class="proj-media-label"><?php echo htmlspecialchars($pvLabel); ?></div>
                            <a href="<?php echo htmlspecialchars($pvFile); ?>" target="_blank" rel="noopener" class="proj-fig-link" title="<?php echo htmlspecialchars(t('preview_title')); ?>">
                                <img src="<?php echo htmlspecialchars($pvFile); ?>" alt="<?php echo htmlspecialchars(t('preview_alt', ['title' => $proj['title']])); ?>" loading="lazy">
                                <span class="zoom-hint"><?php echo t('zoom'); ?></span>
                            </a>
                        </div>
                        <?php endforeach; ?>
                        <?php if (!empty($proj['hki_image'])): ?>
                        <div class="proj-media-card">
                            <div class="proj-media-label"><?php echo t('hki_label'); ?></div>
                            <a href="<?php echo htmlspecialchars($proj['hki_image']); ?>" target="_blank" rel="noopener" class="proj-fig-link" title="<?php echo htmlspecialchars(t('hki_view_title')); ?>">
                                <img src="<?php echo htmlspecialchars($proj['hki_image']); ?>" alt="<?php echo htmlspecialchars(t('hki_alt')); ?>" loading="lazy">
                                <span class="zoom-hint"><?php echo t('zoom'); ?></span>
                            </a>
                        </div>
                        <?php endif; ?>
                        <?php if (!empty($proj['uiux'])): ?>
                        <div class="proj-media-card">
                            <div class="proj-media-label"><?php echo htmlspecialchars($proj['uiux_label'] ?? t('uiux_label_dflt')); ?></div>
                            <a href="<?php echo htmlspecialchars($proj['uiux']); ?>" target="_blank" rel="noopener" class="proj-fig-link" title="<?php echo htmlspecialchars(t('uiux_view_title')); ?>">
                                <img src="<?php echo htmlspecialchars($proj['uiux']); ?>" alt="<?php echo htmlspecialchars(t('uiux_alt')); ?>" loading="lazy">
                                <span class="zoom-hint"><?php echo t('zoom'); ?></span>
                            </a>
                        </div>
                        <?php endif; ?>
                        <?php if (!empty($proj['certificate'])): ?>
                        <a class="proj-cert proj-gallery-cert" href="<?php echo htmlspecialchars($proj['certificate']['file']); ?>" target="_blank" rel="noopener">
                            <span>🏆</span>
                            <div>
                                <strong><?php echo htmlspecialchars($proj['certificate']['label']); ?></strong>
                                <small style="display:block; opacity:0.8;"><?php echo t('open_pdf'); ?></small>
                            </div>
                        </a>
                        <?php endif; ?>
                    </div>
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
                        ↓ <?php echo htmlspecialchars($proj['download']['label'] ?? t('download_label_dflt')); ?>
                    </a>
                    <?php endif; ?>
                    <a href="contact.php" class="btn btn-primary btn-sm"><?php echo t('btn_ask'); ?></a>
                </div>

                <?php if (!empty($proj['hki'])): ?>
                <div class="proj-hki">
                    <span class="hki-icon">⚖️</span>
                    <div class="hki-text"><?php echo $proj['hki']; ?></div>
                </div>
                <?php endif; ?>
            </article>

            <nav class="proj-pager" aria-label="<?php echo htmlspecialchars(t('details_btn')); ?>">
                <a class="btn btn-ghost btn-sm" href="project-detail.php?p=<?php echo $prevIdx; ?>">
                    ← <span class="proj-pager-title"><?php echo htmlspecialchars($prevProj['title']); ?></span>
                </a>
                <a class="btn btn-ghost btn-sm" href="project-detail.php?p=<?php echo $nextIdx; ?>">
                    <span class="proj-pager-title"><?php echo htmlspecialchars($nextProj['title']); ?></span> →
                </a>
            </nav>
        </div>
    </section>
<?php require __DIR__ . '/inc/footer.php'; ?>