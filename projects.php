<?php
require_once __DIR__ . '/data.php';
require_once __DIR__ . '/inc/tech-icons.php';
$activePage = 'projects';
$pageTitle  = t('projects_title_all') . ' — ' . $profile['name'];
require __DIR__ . '/inc/header.php';
?>
    <!-- PROYEK -->
    <section class="section page-first" id="proyek">
        <div class="container">
            <div class="section-head">
                <span class="tag"><?php echo t('projects_tag'); ?></span>
                <h2><?php echo t('projects_heading'); ?> <span class="projects-count"><?php echo t('projects_count', ['n' => count($projects)]); ?></span></h2>
                <p class="section-subdesc"><?php echo htmlspecialchars(t('projects_subdesc')); ?></p>
            </div>
            <div class="projects-grid">
                <?php foreach ($projects as $pi => $proj): ?>
                <?php
                    $projPreviews = $proj['previews'] ?? (!empty($proj['preview']) ? [['file' => $proj['preview'], 'label' => $proj['preview_label'] ?? t('preview_label_dflt')]] : []);
                    $tileImg = !empty($projPreviews[0]['file']) ? $projPreviews[0]['file'] : ($proj['image'] ?? '');
                    $tileAlt = !empty($projPreviews[0]['file']) ? t('preview_alt', ['title' => $proj['title']]) : $proj['title'];
                    $detailHref = 'project-detail.php?p=' . $pi;
                    $detailLabel = t('details_btn');
                ?>
                <article class="project-card proj-tile">
                    <a class="proj-tile-media" href="<?php echo $detailHref; ?>"
                       aria-label="<?php echo htmlspecialchars($detailLabel . ' — ' . $proj['title']); ?>">
                        <?php if ($tileImg): ?>
                        <img src="<?php echo htmlspecialchars($tileImg); ?>" alt="<?php echo htmlspecialchars($tileAlt); ?>" loading="lazy"
                             onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                        <span class="proj-tile-fallback" style="display:none;"><?php echo nl2br(htmlspecialchars($proj['initial'])); ?></span>
                        <?php else: ?>
                        <span class="proj-tile-fallback"><?php echo nl2br(htmlspecialchars($proj['initial'])); ?></span>
                        <?php endif; ?>
                        <span class="proj-tile-overlay"><?php echo htmlspecialchars($detailLabel); ?> →</span>
                    </a>

                    <div class="proj-tile-body">
                        <div class="project-header-top">
                            <span class="proj-tag"><?php echo htmlspecialchars($proj['tag']); ?></span>
                            <span class="proj-badge-hki"><?php echo htmlspecialchars($proj['badge'] ?? t('badge_fallback')); ?></span>
                        </div>
                        <h3 class="proj-tile-title"><?php echo htmlspecialchars($proj['title']); ?></h3>
                        <p class="proj-intro"><?php echo $proj['desc']; ?></p>
                        <?php if (!empty($proj['tech'])): ?>
                        <div class="proj-chips proj-tile-chips">
                            <?php foreach (array_slice($proj['tech'], 0, 4) as $t): ?>
                            <?php echo renderTechChip($t); ?>
                            <?php endforeach; ?>
                            <?php if (count($proj['tech']) > 4): ?>
                            <span class="proj-chip proj-chip-more">+<?php echo count($proj['tech']) - 4; ?></span>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                        <div class="proj-links">
                            <?php if (!empty($proj['github'])): ?>
                            <a href="<?php echo htmlspecialchars($proj['github']); ?>" target="_blank" rel="noopener" class="btn btn-ghost btn-sm">GitHub ↗</a>
                            <?php endif; ?>
                            <?php if (!empty($proj['live'])): ?>
                            <a href="<?php echo htmlspecialchars($proj['live']); ?>" target="_blank" rel="noopener" class="btn btn-ghost btn-sm">Live Demo ↗</a>
                            <?php endif; ?>
                            <a class="btn btn-primary btn-sm" href="<?php echo $detailHref; ?>">
                                <?php echo htmlspecialchars($detailLabel); ?>
                            </a>
                        </div>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php require __DIR__ . '/inc/footer.php'; ?>