<?php
require_once __DIR__ . '/data.php';
require_once __DIR__ . '/inc/tech-icons.php';
require_once __DIR__ . '/inc/project-order.php';
$activePage = 'projects';
$pageTitle  = t('projects_title_all') . ' — ' . $profile['name'];
require __DIR__ . '/inc/header.php';

$catCounts = [
    'all'     => count($projects),
    'web'     => 0,
    'mobile'  => 0,
    'desktop' => 0,
    'iot'     => 0,
];
foreach ($projects as $projectItem) {
    $c = $projectItem['category'] ?? 'web';
    if (isset($catCounts[$c])) {
        $catCounts[$c]++;
    }
}

// Urutan tampilan mengikuti kurasi asli data portofolio
$displayOrder = array_keys($projects);
?>
    <!-- PROYEK -->
    <section class="section page-first" id="proyek">
        <div class="container">
            <div class="section-head">
                <span class="tag"><?php echo t('projects_tag'); ?></span>
                <h2><?php echo t('projects_heading'); ?> <span class="projects-count"><?php echo t('projects_count', ['n' => count($projects)]); ?></span></h2>
                <p class="section-subdesc"><?php echo htmlspecialchars(t('projects_subdesc')); ?></p>
            </div>

            <!-- FILTER BAR (PILL TABS) -->
            <div class="projects-filter-wrapper">
                <div class="projects-filter-bar" role="tablist" aria-label="<?php echo htmlspecialchars(t('projects_heading')); ?>">
                    <button type="button" class="proj-filter-btn active" data-filter="all" role="tab" aria-selected="true">
                        <span><?php echo t('filter_all'); ?></span>
                        <span class="filter-count"><?php echo $catCounts['all']; ?></span>
                    </button>
                    <button type="button" class="proj-filter-btn" data-filter="web" role="tab" aria-selected="false">
                        <span class="filter-icon">🌐</span>
                        <span><?php echo t('filter_web'); ?></span>
                        <span class="filter-count"><?php echo $catCounts['web']; ?></span>
                    </button>
                    <button type="button" class="proj-filter-btn" data-filter="mobile" role="tab" aria-selected="false">
                        <span class="filter-icon">📱</span>
                        <span><?php echo t('filter_mobile'); ?></span>
                        <span class="filter-count"><?php echo $catCounts['mobile']; ?></span>
                    </button>
                    <button type="button" class="proj-filter-btn" data-filter="desktop" role="tab" aria-selected="false">
                        <span class="filter-icon">💻</span>
                        <span><?php echo t('filter_desktop'); ?></span>
                        <span class="filter-count"><?php echo $catCounts['desktop']; ?></span>
                    </button>
                    <button type="button" class="proj-filter-btn" data-filter="iot" role="tab" aria-selected="false">
                        <span class="filter-icon">📡</span>
                        <span><?php echo t('filter_iot'); ?></span>
                        <span class="filter-count"><?php echo $catCounts['iot']; ?></span>
                    </button>
                </div>
            </div>

            <div class="projects-grid">
                <?php foreach ($displayOrder as $pi): ?>
                <?php
                    $proj = $projects[$pi];
                    $projPreviews = $proj['previews'] ?? (!empty($proj['preview']) ? [['file' => $proj['preview'], 'label' => $proj['preview_label'] ?? t('preview_label_dflt')]] : []);
                    $previewFiles = [];
                    foreach ($projPreviews as $previewItem) {
                        if (!empty($previewItem['file'])) {
                            $previewFiles[] = $previewItem['file'];
                        }
                    }
                    $tileImg = !empty($previewFiles[0]) ? $previewFiles[0] : ($proj['image'] ?? '');
                    $tileAlt = !empty($previewFiles[0]) ? t('preview_alt', ['title' => $proj['title']]) : $proj['title'];
                    $tileMediaClass = '';
                    if ($tileImg === 'assets/agrinex-web-landing.png') {
                        $tileMediaClass = ' proj-tile-media-agrinex-landing';
                    } elseif (strpos($tileImg, 'agrinex-iot-') !== false) {
                        $tileMediaClass = ' proj-tile-media-agrinex-iot';
                    } elseif (strpos($tileImg, 'agrinex-desktop-') !== false || strpos($tileImg, 'agrinex-mobile-') !== false) {
                        $tileMediaClass = ' proj-tile-media-agrinex-app';
                        if (strpos($tileImg, 'agrinex-mobile-') !== false) {
                            $tileMediaClass .= ' proj-tile-media-agrinex-mobile';
                        }
                    }
                    $hasHoverPreview = count($previewFiles) > 1;
                    $previewsJson = $hasHoverPreview
                        ? htmlspecialchars(json_encode($previewFiles, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE), ENT_QUOTES, 'UTF-8')
                        : '';
                    $detailHref = 'project-detail.php?p=' . $pi;
                    $detailLabel = t('details_btn');
                    $projCategory = $proj['category'] ?? 'web';
                ?>
                <article class="project-card proj-tile" data-category="<?php echo htmlspecialchars($projCategory); ?>" data-year="<?php echo htmlspecialchars(projectYearRank($proj)); ?>">
                    <a class="proj-tile-media<?php echo $tileMediaClass; ?>" href="<?php echo $detailHref; ?>"
                       aria-label="<?php echo htmlspecialchars($detailLabel . ' — ' . $proj['title']); ?>"
                       <?php if ($hasHoverPreview): ?>data-previews="<?php echo $previewsJson; ?>"<?php endif; ?>>
                        <?php if ($tileImg): ?>
                        <img class="proj-tile-img" src="<?php echo htmlspecialchars($tileImg); ?>" alt="<?php echo htmlspecialchars($tileAlt); ?>" loading="lazy"
                             onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                        <?php if ($hasHoverPreview): ?>
                        <img class="proj-tile-img-alt" src="<?php echo htmlspecialchars($previewFiles[0]); ?>" alt="" aria-hidden="true" loading="lazy">
                        <?php endif; ?>
                        <span class="proj-tile-fallback" style="display:none;"><?php echo nl2br(htmlspecialchars($proj['initial'])); ?></span>
                        <?php else: ?>
                        <span class="proj-tile-fallback"><?php echo nl2br(htmlspecialchars($proj['initial'])); ?></span>
                        <?php endif; ?>
                        <span class="proj-tile-overlay"><span class="proj-tile-cta"><?php echo htmlspecialchars($detailLabel); ?> →</span></span>
                    </a>

                    <div class="proj-tile-body">
                        <div class="project-header-top">
                            <span class="proj-tag"><?php echo htmlspecialchars($proj['tag']); ?></span>
                            <span class="proj-badge-hki"><?php echo htmlspecialchars($proj['badge'] ?? t('badge_fallback')); ?></span>
                        </div>
                        <h3 class="proj-tile-title"><?php echo htmlspecialchars($proj['title']); ?></h3>

                        <?php if (!empty($proj['year']) || !empty($proj['role'])): ?>
                        <div class="proj-tile-meta">
                            <?php if (!empty($proj['year'])): ?>
                            <span class="proj-meta-item">📅 <?php echo htmlspecialchars($proj['year']); ?></span>
                            <?php endif; ?>
                            <?php if (!empty($proj['role'])): ?>
                            <span class="proj-meta-item">👤 <?php echo htmlspecialchars($proj['role']); ?></span>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>

                        <p class="proj-intro"><?php echo $proj['desc']; ?></p>
                        <?php if (!empty($proj['tech'])): ?>
                        <div class="proj-chips proj-tile-chips">
                            <?php echo renderTechIcons($proj['tech']); ?>
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

    <!-- CTA PENUTUP -->
    <section class="section cta-projects" id="kolaborasi">
        <div class="container">
            <div class="cta-final">
                <span class="tag"><?php echo t('projects_cta_tag'); ?></span>
                <h2><?php echo t('projects_cta_heading'); ?></h2>
                <p><?php echo htmlspecialchars(t('projects_cta_desc')); ?></p>
                <a class="btn btn-primary cta-final-btn" href="contact.php"><?php echo t('projects_cta_btn'); ?> →</a>
            </div>
        </div>
    </section>

    <!-- INTERACTIVE FILTER SCRIPT -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const filterBtns = document.querySelectorAll('.proj-filter-btn');
        const tiles = document.querySelectorAll('.projects-grid .proj-tile');

        function applyFilter(filter) {
            filterBtns.forEach(btn => {
                const isActive = btn.getAttribute('data-filter') === filter;
                btn.classList.toggle('active', isActive);
                btn.setAttribute('aria-selected', isActive ? 'true' : 'false');
            });

            tiles.forEach(tile => {
                const cat = tile.getAttribute('data-category') || 'web';
                if (filter === 'all' || cat === filter) {
                    tile.style.display = '';
                    requestAnimationFrame(() => {
                        tile.classList.remove('proj-tile-hidden');
                    });
                } else {
                    tile.classList.add('proj-tile-hidden');
                    setTimeout(() => {
                        if (tile.classList.contains('proj-tile-hidden')) {
                            tile.style.display = 'none';
                        }
                    }, 220);
                }
            });
        }

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                const filter = this.getAttribute('data-filter');
                applyFilter(filter);
                if (history.replaceState) {
                    const newHash = filter === 'all' ? '' : '#' + filter;
                    history.replaceState(null, '', window.location.pathname + window.location.search + newHash);
                }
            });
        });

        // Activate based on URL hash if provided
        const hash = window.location.hash.replace('#', '').toLowerCase();
        if (['web', 'mobile', 'desktop', 'iot', 'hardware'].includes(hash)) {
            applyFilter(hash === 'hardware' ? 'iot' : hash);
        }
    });
    </script>
<?php require __DIR__ . '/inc/footer.php'; ?>
