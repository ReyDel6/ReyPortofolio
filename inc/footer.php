</main>

    <footer class="footer">
        <div class="container footer-inner">
            <div class="footer-brand">
                <span class="brand-badge"><?php echo htmlspecialchars($p['initial']); ?></span>
                <span><?php echo htmlspecialchars($p['name']); ?></span>
            </div>
            <p>&copy; 2026 <?php echo htmlspecialchars($p['name']); ?>. <?php echo t('copyright'); ?></p>
            <div class="footer-cmd-hint">
                <?php echo t('cmd_hint'); ?>
            </div>
        </div>
    </footer>

    <!-- BACK TO TOP -->
    <button type="button" id="backToTop" class="back-to-top" aria-label="<?php echo htmlspecialchars(t('back_top_aria')); ?>">↑</button>

    <!-- COMMAND PALETTE MODAL (⌘K / Ctrl+K) -->
    <div class="cmd-overlay" id="cmdOverlay" style="display:none;">
        <div class="cmd-modal" id="cmdModal">
            <div class="cmd-header">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                <input type="text" id="cmdInput" placeholder="<?php echo htmlspecialchars(t('cmd_placeholder')); ?>" autocomplete="off">
                <button type="button" class="cmd-esc-btn" id="closeCmdBtn">ESC</button>
            </div>
            <div class="cmd-body" id="cmdResults">
                <div class="cmd-group">
                    <span class="cmd-group-title"><?php echo t('cmd_group_nav'); ?></span>
                    <a href="index.php" class="cmd-item" data-action="link"><span class="cmd-icon">🏠</span><span><?php echo t('nav_home'); ?></span><span class="cmd-shortcut">index.php</span></a>
                    <a href="about.php" class="cmd-item" data-action="link"><span class="cmd-icon">👤</span><span><?php echo t('about_nav_long'); ?></span><span class="cmd-shortcut">about.php</span></a>
                    <a href="projects.php" class="cmd-item" data-action="link"><span class="cmd-icon">🚀</span><span><?php echo t('nav_projects'); ?></span><span class="cmd-shortcut">projects.php</span></a>
                    <a href="certificates.php" class="cmd-item" data-action="link"><span class="cmd-icon">🛠️</span><span><?php echo t('nav_certificates'); ?></span><span class="cmd-shortcut">certificates.php</span></a>
                    <a href="contact.php" class="cmd-item" data-action="link"><span class="cmd-icon">✉️</span><span><?php echo t('contact_nav_long'); ?></span><span class="cmd-shortcut">contact.php</span></a>
                </div>
                <div class="cmd-group">
                    <span class="cmd-group-title"><?php echo t('cmd_group_actions'); ?></span>
                    <a href="Profile.pdf" target="_blank" class="cmd-item" data-action="doc"><span class="cmd-icon">📄</span><span><?php echo t('cmd_open_profile'); ?></span><span class="cmd-shortcut">PDF</span></a>
                    <a href="assets/sertifikat-juara.pdf" target="_blank" class="cmd-item" data-action="doc"><span class="cmd-icon">🏆</span><span><?php echo t('cmd_open_cert'); ?></span><span class="cmd-shortcut">Sertifikat</span></a>
                    <a href="https://github.com/ReyDel6" target="_blank" class="cmd-item" data-action="ext"><span class="cmd-icon">🐙</span><span><?php echo t('cmd_open_github'); ?></span><span class="cmd-shortcut">GitHub ↗</span></a>
                    <a href="https://www.linkedin.com/in/reynaldi-delphiano-2b6b79120" target="_blank" class="cmd-item" data-action="ext"><span class="cmd-icon">💼</span><span><?php echo t('cmd_open_linkedin'); ?></span><span class="cmd-shortcut">LinkedIn ↗</span></a>
                </div>
            </div>
            <div class="cmd-footer">
                <span><?php echo t('cmd_use_keys'); ?></span>
                <span><?php echo t('cmd_enter'); ?></span>
                <span><?php echo t('cmd_esc'); ?></span>
            </div>
        </div>
    </div>

    <script>
        window.I18N = {
            timelineCollapse: <?php echo json_encode(t('timeline_collapse'), JSON_UNESCAPED_UNICODE); ?>,
            timelineExpand:   <?php echo json_encode(t('timeline_expand'), JSON_UNESCAPED_UNICODE); ?>,
            certMore:         <?php echo json_encode(t('cert_more'), JSON_UNESCAPED_UNICODE); ?>,
            certLess:         <?php echo json_encode(t('cert_less'), JSON_UNESCAPED_UNICODE); ?>
        };
    </script>
    <script src="js/main.js?v=<?php echo filemtime(__DIR__ . '/../js/main.js'); ?>"></script>
</body>
</html>