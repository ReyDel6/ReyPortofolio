</main>

    <footer class="footer">
        <div class="container footer-inner">
            <div class="footer-brand">
                <span class="brand-badge"><?php echo htmlspecialchars($p['initial']); ?></span>
                <span><?php echo htmlspecialchars($p['name']); ?></span>
            </div>
            <div class="footer-signature" aria-label="Made by <?php echo htmlspecialchars($p['name']); ?>">
                <span class="footer-sig-prefix">made by</span>
                <span class="footer-sig-name"><?php echo htmlspecialchars($p['name']); ?></span>
            </div>
            <p class="footer-copy">&copy; 2026 <?php echo htmlspecialchars($p['name']); ?>. <?php echo t('copyright'); ?></p>
            <div class="footer-socials" aria-label="External profiles">
                <a href="https://github.com/ReyDel6" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M12 .7a12 12 0 0 0-3.79 23.39c.6.11.82-.26.82-.58v-2.24c-3.34.73-4.04-1.61-4.04-1.61-.55-1.4-1.34-1.77-1.34-1.77-1.09-.75.08-.74.08-.74 1.2.09 1.84 1.23 1.84 1.23 1.07 1.83 2.8 1.3 3.48.99.11-.77.42-1.3.76-1.6-2.67-.3-5.47-1.34-5.47-5.95 0-1.31.47-2.38 1.23-3.22-.12-.3-.53-1.52.12-3.17 0 0 1-.32 3.3 1.23a11.5 11.5 0 0 1 6 0c2.3-1.55 3.3-1.23 3.3-1.23.65 1.65.24 2.87.12 3.17.76.84 1.23 1.91 1.23 3.22 0 4.62-2.81 5.64-5.49 5.94.43.37.81 1.1.81 2.22v3.28c0 .32.22.69.83.57A12 12 0 0 0 12 .7z"/></svg>
                </a>
                <a href="<?php echo htmlspecialchars($profile['linkedin_url']); ?>" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M20.45 20.45h-3.56v-5.58c0-1.33-.03-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.68H9.34V8.99h3.42v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.46v6.29zM5.32 7.43a2.07 2.07 0 1 1 0-4.14 2.07 2.07 0 0 1 0 4.14zM3.54 20.45H7.1V8.99H3.54v11.46z"/></svg>
                </a>
            </div>
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
                    <a href="kegiatan.php" class="cmd-item" data-action="link"><span class="cmd-icon">🎤</span><span><?php echo t('nav_activities'); ?></span><span class="cmd-shortcut">kegiatan.php</span></a>
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

    <!-- LIGHTBOX GAMBAR -->
    <div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="<?php echo htmlspecialchars(t('lightbox_label')); ?>" aria-hidden="true">
        <button type="button" class="lightbox-close" data-lightbox-close aria-label="<?php echo htmlspecialchars(t('lightbox_close')); ?>">✕</button>
        <button type="button" class="lightbox-nav lightbox-prev" data-lightbox-prev aria-label="<?php echo htmlspecialchars(t('lightbox_prev')); ?>">‹</button>
        <figure class="lightbox-figure">
            <img class="lightbox-img" alt="">
            <figcaption class="lightbox-caption"></figcaption>
        </figure>
        <div class="lightbox-counter" aria-live="polite"></div>
        <button type="button" class="lightbox-nav lightbox-next" data-lightbox-next aria-label="<?php echo htmlspecialchars(t('lightbox_next')); ?>">›</button>
    </div>

    <script>
        window.I18N = {
            timelineCollapse: <?php echo json_encode(t('timeline_collapse'), JSON_UNESCAPED_UNICODE); ?>,
            timelineExpand:   <?php echo json_encode(t('timeline_expand'), JSON_UNESCAPED_UNICODE); ?>,
            certMore:         <?php echo json_encode(t('cert_more'), JSON_UNESCAPED_UNICODE); ?>,
            certLess:         <?php echo json_encode(t('cert_less'), JSON_UNESCAPED_UNICODE); ?>,
            trainingExpand:   <?php echo json_encode(t('training_expand', ['n' => count($trainings ?? [])]), JSON_UNESCAPED_UNICODE); ?>,
            trainingCollapse: <?php echo json_encode(t('training_collapse'), JSON_UNESCAPED_UNICODE); ?>,
            skills_level_core:  <?php echo json_encode(t('skills_level_core'), JSON_UNESCAPED_UNICODE); ?>,
            skills_level_familiar: <?php echo json_encode(t('skills_level_familiar'), JSON_UNESCAPED_UNICODE); ?>,
            skills_modal_close: <?php echo json_encode(t('skills_modal_close'), JSON_UNESCAPED_UNICODE); ?>,
            skills_modal_empty: <?php echo json_encode(t('skills_modal_empty'), JSON_UNESCAPED_UNICODE); ?>,
            contactSending:       <?php echo json_encode(t('contact_sending'), JSON_UNESCAPED_UNICODE); ?>,
            contactCopied:        <?php echo json_encode(t('contact_copied'), JSON_UNESCAPED_UNICODE); ?>,
            contactSuccessTitle: <?php echo json_encode(t('contact_success_title'), JSON_UNESCAPED_UNICODE); ?>,
            contactSuccessDesc:  <?php echo json_encode(t('contact_success_desc'), JSON_UNESCAPED_UNICODE); ?>,
            contactSendAgain:    <?php echo json_encode(t('contact_send_again'), JSON_UNESCAPED_UNICODE); ?>,
            contactErrorTitle:   <?php echo json_encode(t('contact_error_title'), JSON_UNESCAPED_UNICODE); ?>,
            contactErrorRetry:   <?php echo json_encode(t('contact_error_retry'), JSON_UNESCAPED_UNICODE); ?>,
            contactErrorMailto:  <?php echo json_encode(t('contact_error_mailto'), JSON_UNESCAPED_UNICODE); ?>,
            contactErrName:      <?php echo json_encode(t('contact_err_name'), JSON_UNESCAPED_UNICODE); ?>,
            contactErrEmail:     <?php echo json_encode(t('contact_err_email'), JSON_UNESCAPED_UNICODE); ?>,
            contactErrMessage:   <?php echo json_encode(t('contact_err_message'), JSON_UNESCAPED_UNICODE); ?>,
            contactErrCooldown:  <?php echo json_encode(t('contact_err_cooldown'), JSON_UNESCAPED_UNICODE); ?>,
            contactReplyTime:    <?php echo json_encode(t('contact_reply_time'), JSON_UNESCAPED_UNICODE); ?>
        };
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" defer></script>
    <script src="js/effects.js?v=<?php echo filemtime(__DIR__ . '/../js/effects.js'); ?>" defer></script>
    <?php if (($activePage ?? '') === 'index'): ?>
    <script src="js/flow-gradient.js?v=<?php echo filemtime(__DIR__ . '/../js/flow-gradient.js'); ?>" defer></script>
    <?php endif; ?>
    <script src="js/main.js?v=<?php echo filemtime(__DIR__ . '/../js/main.js'); ?>" defer></script>
</body>
</html>