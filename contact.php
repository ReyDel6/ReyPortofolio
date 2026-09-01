<?php
require_once __DIR__ . '/data.php';
$activePage = 'contact';
$pageTitle  = 'Kontak — ' . $profile['name'];
require __DIR__ . '/inc/header.php';
?>
    <!-- KONTAK -->
    <section class="section page-first" id="kontak">
        <div class="container">
            <div class="section-head">
                <span class="tag">Kontak</span>
                <h2>Mari Terhubung</h2>
                <p class="section-subdesc">Silakan hubungi saya melalui salah satu kanal sosial media atau email berikut. Saya terbuka untuk peluang kerja, kolaborasi, dan proyek.</p>
            </div>
            <div class="contact-grid">
                <?php foreach ($p['social'] as $s): ?>
                <a class="contact-card social-card-<?php echo strtolower($s['label']); ?>" href="<?php echo htmlspecialchars($s['url']); ?>" target="_blank" rel="noopener">
                    <span class="contact-ico social-ico-<?php echo strtolower($s['label']); ?>"><?php echo getSocialIcon($s['label'], 22); ?></span>
                    <div class="contact-info">
                        <h4><?php echo htmlspecialchars($s['label']); ?></h4>
                        <p><?php echo htmlspecialchars($s['handle']); ?></p>
                    </div>
                    <span class="contact-arrow">↗</span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php require __DIR__ . '/inc/footer.php'; ?>