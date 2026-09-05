<?php
require_once __DIR__ . '/../data.php';
$p = $profile;

if (!isset($activePage)) { $activePage = 'index'; }
if (!isset($pageTitle))  { $pageTitle  = $p['name'] . ' — ' . t('portfolio_word'); }

$selfFile   = basename($_SERVER['PHP_SELF']);
$langSwitch = function ($to) use ($selfFile) {
    return $selfFile . '?lang=' . $to;
};

function navLink($href, $label, $key) {
    $act = ($GLOBALS['activePage'] ?? 'index') === $key ? ' active' : '';
    return '<a href="' . htmlspecialchars($href) . '" class="nav-item' . $act . '">' . htmlspecialchars($label) . '</a>';
}

function getSocialIcon($label, $size = 20) {
    $s = intval($size);
    switch (strtolower($label)) {
        case 'email':
            return '<svg viewBox="0 0 24 24" width="'.$s.'" height="'.$s.'" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>';
        case 'linkedin':
            return '<svg viewBox="0 0 24 24" width="'.$s.'" height="'.$s.'" fill="currentColor"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 8.76a1.6 1.6 0 0 0 0-3.2 1.6 1.6 0 0 0 0 3.2m1.4 9.74v-8.37H5.06v8.37h2.8z"/></svg>';
        case 'instagram':
            return '<svg viewBox="0 0 24 24" width="'.$s.'" height="'.$s.'" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>';
        case 'tiktok':
            return '<svg viewBox="0 0 24 24" width="'.$s.'" height="'.$s.'" fill="currentColor"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-1.01-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.24 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>';
        case 'github':
            return '<svg viewBox="0 0 24 24" width="'.$s.'" height="'.$s.'" fill="currentColor"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z"/></svg>';
        case 'youtube':
            return '<svg viewBox="0 0 24 24" width="'.$s.'" height="'.$s.'" fill="currentColor"><path d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 0 0 .5 6.2 31.6 31.6 0 0 0 0 12a31.6 31.6 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 0 0 2.1-2.1A31.6 31.6 0 0 0 24 12a31.6 31.6 0 0 0-.5-5.8zM9.6 15.5v-7l6.2 3.5-6.2 3.5z"/></svg>';
        case 'whatsapp':
            return '<svg viewBox="0 0 24 24" width="'.$s.'" height="'.$s.'" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.5 8.5 0 0 1-12.6 7.45L3 20l1.1-5.1A8.5 8.5 0 1 1 21 11.5z"/><path d="M8.5 8.5c.25-.5.5-.52.8-.52h.4c.14 0 .3.05.4.35l.55 1.3c.08.2.05.35-.08.52l-.4.5c-.13.15-.08.3 0 .45.35.65 1.05 1.3 1.85 1.7.18.1.3.08.42-.07l.55-.65c.13-.17.3-.2.5-.1l1.28.6c.2.1.3.17.3.32 0 .2-.08.75-.38 1.02-.3.28-.78.42-1.32.3-.55-.12-1.9-.7-2.93-1.65-1.03-.95-1.7-2.12-1.9-2.65-.2-.53-.1-.98.05-1.4z"/></svg>';
        default:
            return '🔗';
    }
}
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($GLOBALS['LANG'] ?? 'id'); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars(t('meta_desc')); ?>">
    <link rel="icon" type="image/svg+xml" href="assets/favicon.svg">
    <link rel="stylesheet" href="css/style.css?v=<?php echo filemtime(__DIR__ . '/../css/style.css'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">
    <?php if (!empty($googleAnalyticsId)): ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo rawurlencode($googleAnalyticsId); ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo htmlspecialchars($googleAnalyticsId, ENT_QUOTES, 'UTF-8'); ?>');
    </script>
    <?php endif; ?>
</head>
<body>
    <!-- SCROLL PROGRESS INDICATOR -->
    <div class="scroll-progress" id="scrollProgress"></div>

    <!-- NAVBAR -->
    <header class="navbar" id="navbar">
        <div class="container nav-inner">
            <a href="index.php" class="brand">
                <span class="brand-badge"><?php echo htmlspecialchars($p['initial']); ?></span>
                <span class="brand-name"><?php echo htmlspecialchars($p['brand']); ?><span class="brand-dot">.</span></span>
                <svg class="verified-badge-svg" viewBox="0 0 24 24" width="18" height="18" fill="#38bdf8" title="Verified Developer"><path d="m23 12-2.44-2.79.34-3.69-3.61-.82-1.89-3.2L12 2.96 8.6 1.5 6.71 4.69 3.1 5.5l.34 3.7L1 12l2.44 2.79-.34 3.7 3.61.82L8.6 22.5l3.4-1.47 3.4 1.46 1.89-3.19 3.61-.82-.34-3.69L23 12zm-12.91 4.72-3.8-3.81 1.48-1.48 2.32 2.33 5.85-5.87 1.48 1.48-7.33 7.35z"/></svg>
                <span class="status-badge" title="<?php echo htmlspecialchars(t('status_title')); ?>">
                    <span class="status-pulse"></span> Available
                </span>
            </a>

            <nav class="nav-links" id="navLinks">
                <?php echo navLink('index.php', t('nav_home'), 'index'); ?>
                <?php echo navLink('about.php', t('nav_about'), 'about'); ?>
                <?php echo navLink('projects.php', t('nav_projects'), 'projects'); ?>
                <?php echo navLink('certificates.php', t('nav_certificates'), 'certificates'); ?>
                <?php echo navLink('contact.php', t('nav_contact'), 'contact'); ?>
            </nav>

            <div class="nav-actions">
                <div class="lang-switch" role="group" aria-label="<?php echo htmlspecialchars(t('lang_switch_aria')); ?>">
                    <a href="<?php echo htmlspecialchars($langSwitch('id')); ?>" class="lang-btn<?php echo ($GLOBALS['LANG'] ?? 'id') === 'id' ? ' active' : ''; ?>" hreflang="id" title="<?php echo htmlspecialchars(t('lang_id')); ?>">ID</a>
                    <span class="lang-divider"></span>
                    <a href="<?php echo htmlspecialchars($langSwitch('en')); ?>" class="lang-btn<?php echo ($GLOBALS['LANG'] ?? 'id') === 'en' ? ' active' : ''; ?>" hreflang="en" title="<?php echo htmlspecialchars(t('lang_en')); ?>">EN</a>
                </div>
                <button class="btn-cmd-k" id="openCmdPalette" title="<?php echo htmlspecialchars(t('cmd_btn_title')); ?>">
                    <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M20 5H4c-1.1 0-1.99.9-1.99 2L2 17c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm-9 3h2v2h-2V8zm0 3h2v2h-2v-2zM8 8h2v2H8V8zm0 3h2v2H8v-2zm-1 2H5v-2h2v2zm0-3H5V8h2v2zm9 7H8v-2h8v2zm0-4h-2v-2h2v2zm0-3h-2V8h2v2zm3 3h-2v-2h2v2zm0-3h-2V8h2v2z"/></svg>
                    <span><?php echo t('cmd_btn_label'); ?></span>
                    <kbd>⌘K</kbd>
                </button>
                <a href="contact.php" class="btn-nav-cta"><?php echo t('cta_contact'); ?></a>
                <button class="nav-toggle" id="navToggle" aria-label="<?php echo htmlspecialchars(t('nav_toggle_aria')); ?>">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </header>

    <main>