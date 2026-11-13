<?php
require_once __DIR__ . '/data.php';
$contactConfig   = require_once __DIR__ . '/inc/contact-config.php';
$activePage = 'contact';
$pageTitle  = t('contact_title_all') . ' — ' . $profile['name'];
require __DIR__ . '/inc/header.php';

$contactEndpoint = $contactConfig['endpoint'] ?? 'contact-send.php';
$contactAccessKey = $contactConfig['access_key'] ?? '';
$contactHoneypot = $contactConfig['honeypot'] ?? 'botcheck';
$contactConfigured = ($contactAccessKey !== '' || ($contactConfig['provider'] ?? '') === 'php');

$contactQuickKeys = ['email', 'whatsapp', 'linkedin', 'github'];
$contactQuick = [];
$contactElsewhere = [];
foreach ($p['social'] as $s) {
    $key = strtolower(trim((string) ($s['label'] ?? '')));
    if (in_array($key, $contactQuickKeys, true)) {
        $contactQuick[] = $s;
    } else {
        $contactElsewhere[] = $s;
    }
}
?>
    <!-- KONTAK -->
    <section class="section page-first" id="kontak">
        <div class="container">
            <div class="contact-split">
                <!-- ============ KOLOM KIRI: INTRO + JALUR CEPAT ============ -->
                <div class="contact-intro">
                    <span class="tag"><?php echo t('contact_tag'); ?></span>
                    <h2 class="contact-title"><?php echo t('contact_heading'); ?></h2>
                    <p class="contact-subdesc"><?php echo htmlspecialchars(t('contact_subdesc')); ?></p>

                    <div class="contact-response">
                        <span class="contact-status-dot" aria-hidden="true"></span>
                        <div class="contact-response-body">
                            <p class="contact-response-title"><?php echo htmlspecialchars(t('contact_status')); ?></p>
                            <p class="contact-response-time"><?php echo htmlspecialchars(t('contact_reply_time')); ?></p>
                        </div>
                    </div>

                    <h3 class="contact-quick-title"><?php echo htmlspecialchars(t('contact_quick_title')); ?></h3>
                    <div class="contact-quick">
                        <?php foreach ($contactQuick as $s): ?>
                        <?php $sKey = strtolower(trim((string) $s['label'])); ?>
                        <div class="contact-quick-item">
                            <span class="contact-quick-ico social-ico-<?php echo htmlspecialchars($sKey); ?>"><?php echo getSocialIcon($s['label'], 20); ?></span>
                            <?php if ($sKey === 'email'): ?>
                            <a class="contact-quick-info" href="<?php echo htmlspecialchars($s['url']); ?>">
                                <h4><?php echo htmlspecialchars($s['label']); ?></h4>
                                <p><?php echo htmlspecialchars($s['handle']); ?></p>
                            </a>
                            <?php else: ?>
                            <div class="contact-quick-info">
                                <h4><?php echo htmlspecialchars($s['label']); ?></h4>
                                <p><?php echo htmlspecialchars($s['handle']); ?></p>
                            </div>
                            <?php endif; ?>
                            <div class="contact-quick-actions">
                                <?php if ($sKey === 'email'): ?>
                                <button type="button" class="contact-copy-btn" data-copy-email="<?php echo htmlspecialchars($s['handle']); ?>"><?php echo htmlspecialchars(t('contact_copy')); ?></button>
                                <?php elseif ($sKey === 'whatsapp'): ?>
                                <a class="btn btn-primary btn-sm contact-quick-cta" href="https://wa.me/6285155376508?text=<?php echo urlencode(t('contact_wa_prefill')); ?>" target="_blank" rel="noopener"><?php echo htmlspecialchars(t('contact_wa_cta')); ?></a>
                                <?php else: ?>
                                <a class="contact-quick-link" href="<?php echo htmlspecialchars($s['url']); ?>" target="_blank" rel="noopener"><?php echo htmlspecialchars(t('contact_profile_cta')); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- ============ KANAN: FORM KONTAK ============ -->
                <div class="contact-form-col">
                    <div class="contact-form-card">
                        <h3 class="contact-form-title"><?php echo htmlspecialchars(t('contact_form_title')); ?></h3>
                        <p class="contact-form-sub"><?php echo htmlspecialchars(t('contact_form_sub')); ?></p>

                        <form id="contactForm" class="contact-form" method="POST" action="<?php echo htmlspecialchars($contactEndpoint); ?>" novalidate data-endpoint="<?php echo htmlspecialchars($contactEndpoint); ?>" data-honeypot="<?php echo htmlspecialchars($contactHoneypot); ?>" data-configured="<?php echo $contactConfigured ? '1' : '0'; ?>" data-min-seconds="<?php echo htmlspecialchars((string)($contactConfig['min_seconds'] ?? 0.5)); ?>" data-cooldown="<?php echo htmlspecialchars((string)(($contactConfig['cooldown'] ?? 10) * 1000)); ?>">
                            <?php if ($contactConfigured && !empty($contactAccessKey)): ?>
                            <input type="hidden" name="access_key" value="<?php echo htmlspecialchars($contactAccessKey); ?>">
                            <?php endif; ?>
                            <input type="hidden" name="from_name" value="<?php echo htmlspecialchars($profile['name']); ?>">
                            <input type="text" name="botcheck" id="contactBotcheck" class="hp-field" tabindex="-1" autocomplete="off" aria-hidden="true" value="" style="display:none !important;" />

                            <div class="field-row">
                                <div class="field">
                                    <label for="contactName"><?php echo htmlspecialchars(t('contact_name')); ?> <span class="req">*</span></label>
                                    <input type="text" id="contactName" name="name" required maxlength="80" placeholder="<?php echo htmlspecialchars(t('contact_name_ph')); ?>" autocomplete="name" />
                                    <p class="field-error" id="contactNameError" hidden><?php echo htmlspecialchars(t('contact_err_name')); ?></p>
                                </div>
                                <div class="field">
                                    <label for="contactEmail"><?php echo htmlspecialchars(t('contact_email')); ?> <span class="req">*</span></label>
                                    <input type="email" id="contactEmail" name="email" required maxlength="120" placeholder="<?php echo htmlspecialchars(t('contact_email_ph')); ?>" autocomplete="email" />
                                    <p class="field-error" id="contactEmailError" hidden><?php echo htmlspecialchars(t('contact_err_email')); ?></p>
                                </div>
                            </div>

                            <div class="field">
                                <label for="contactSubject"><?php echo htmlspecialchars(t('contact_subject')); ?></label>
                                <select id="contactSubject" name="subject">
                                    <option value="general"><?php echo htmlspecialchars(t('contact_subject_general')); ?></option>
                                    <option value="work"><?php echo htmlspecialchars(t('contact_subject_work')); ?></option>
                                    <option value="collab"><?php echo htmlspecialchars(t('contact_subject_collab')); ?></option>
                                    <option value="freelance"><?php echo htmlspecialchars(t('contact_subject_freelance')); ?></option>
                                </select>
                            </div>

                            <div class="field">
                                <label for="contactMessage"><?php echo htmlspecialchars(t('contact_message')); ?> <span class="req">*</span></label>
                                <textarea id="contactMessage" name="message" required rows="5" maxlength="2000" placeholder="<?php echo htmlspecialchars(t('contact_message_ph')); ?>"></textarea>
                                <div class="field-foot">
                                    <p class="field-error" id="contactMessageError" hidden><?php echo htmlspecialchars(t('contact_err_message')); ?></p>
                                    <span class="field-hint"><?php echo htmlspecialchars(t('contact_message_hint')); ?></span>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary contact-submit" id="contactSubmit">
                                <span class="contact-submit-label" id="contactSubmitLabel"><?php echo htmlspecialchars(t('contact_send')); ?></span>
                            </button>
                        </form>

                        <div class="contact-form-status contact-form-success" id="contactSuccess" hidden>
                            <svg class="contact-success-check" viewBox="0 0 52 52" width="84" height="84" fill="none" aria-hidden="true">
                                <circle class="contact-check-circle" cx="26" cy="26" r="25" stroke="var(--accent)" stroke-width="3"></circle>
                                <path class="contact-check-mark" d="M14 27l8 8 16-16" stroke="var(--accent)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <h3 class="contact-success-title" id="contactSuccessTitle" tabindex="-1"></h3>
                            <p class="contact-success-desc" id="contactSuccessDesc"></p>
                            <div class="contact-success-actions" style="display:flex; gap:10px; justify-content:center; flex-wrap:wrap; margin-top:16px;">
                                <button type="button" class="btn btn-ghost btn-sm contact-success-again" id="contactSuccessReset"><?php echo htmlspecialchars(t('contact_send_again')); ?></button>
                                <a class="btn btn-primary btn-sm contact-success-wa" href="https://wa.me/6285155376508?text=<?php echo urlencode(t('contact_wa_prefill')); ?>" target="_blank" rel="noopener"><?php echo htmlspecialchars(t('contact_wa_cta')); ?></a>
                            </div>
                        </div>

                        <div class="contact-form-status contact-form-error" id="contactError" hidden role="alert">
                            <p class="contact-error-title" id="contactErrorTitle"><?php echo htmlspecialchars(t('contact_error_title')); ?></p>
                            <p class="contact-error-msg" id="contactErrorMsg"></p>
                            <div class="contact-error-actions">
                                <button type="button" class="btn btn-primary btn-sm" id="contactErrorRetry"><?php echo htmlspecialchars(t('contact_error_retry')); ?></button>
                                <a class="btn btn-ghost btn-sm" id="contactErrorMailto" href="mailto:"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php if (!empty($contactElsewhere)): ?>
            <div class="contact-socials-more">
                <p class="contact-socials-more-title"><?php echo htmlspecialchars(t('contact_more_social')); ?></p>
                <div class="contact-grid">
                    <?php foreach ($contactElsewhere as $s): ?>
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
            <?php endif; ?>
        </div>
    </section>
<?php require __DIR__ . '/inc/footer.php'; ?>
