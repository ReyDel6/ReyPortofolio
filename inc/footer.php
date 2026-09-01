</main>

    <footer class="footer">
        <div class="container footer-inner">
            <div class="footer-brand">
                <span class="brand-badge"><?php echo htmlspecialchars($p['initial']); ?></span>
                <span><?php echo htmlspecialchars($p['name']); ?></span>
            </div>
            <p>&copy; 2026 <?php echo htmlspecialchars($p['name']); ?>. Semua hak cipta dilindungi.</p>
            <div class="footer-cmd-hint">
                Tekan <kbd>Ctrl</kbd> + <kbd>K</kbd> untuk Command Palette
            </div>
        </div>
    </footer>

    <!-- BACK TO TOP -->
    <button type="button" id="backToTop" class="back-to-top" aria-label="Kembali ke atas">↑</button>

    <!-- COMMAND PALETTE MODAL (⌘K / Ctrl+K) -->
    <div class="cmd-overlay" id="cmdOverlay" style="display:none;">
        <div class="cmd-modal" id="cmdModal">
            <div class="cmd-header">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                <input type="text" id="cmdInput" placeholder="Ketik apa saja untuk mencari..." autocomplete="off">
                <button type="button" class="cmd-esc-btn" id="closeCmdBtn">ESC</button>
            </div>
            <div class="cmd-body" id="cmdResults">
                <div class="cmd-group">
                    <span class="cmd-group-title">Navigasi Halaman</span>
                    <a href="index.php" class="cmd-item" data-action="link"><span class="cmd-icon">🏠</span><span>Beranda</span><span class="cmd-shortcut">index.php</span></a>
                    <a href="about.php" class="cmd-item" data-action="link"><span class="cmd-icon">👤</span><span>Tentang & Pengalaman</span><span class="cmd-shortcut">about.php</span></a>
                    <a href="projects.php" class="cmd-item" data-action="link"><span class="cmd-icon">🚀</span><span>Proyek</span><span class="cmd-shortcut">projects.php</span></a>
                    <a href="certificates.php" class="cmd-item" data-action="link"><span class="cmd-icon">🛠️</span><span>Skill & Sertifikat</span><span class="cmd-shortcut">certificates.php</span></a>
                    <a href="contact.php" class="cmd-item" data-action="link"><span class="cmd-icon">✉️</span><span>Kontak & Sosial Media</span><span class="cmd-shortcut">contact.php</span></a>
                </div>
                <div class="cmd-group">
                    <span class="cmd-group-title">Aksi Cepat & Dokumen</span>
                    <a href="Profile.pdf" target="_blank" class="cmd-item" data-action="doc"><span class="cmd-icon">📄</span><span>Buka / Unduh Profile (PDF)</span><span class="cmd-shortcut">PDF</span></a>
                    <a href="assets/sertifikat-juara.pdf" target="_blank" class="cmd-item" data-action="doc"><span class="cmd-icon">🏆</span><span>Buka Sertifikat Juara UI/UX</span><span class="cmd-shortcut">Sertifikat</span></a>
                    <a href="https://github.com/ReyDel6" target="_blank" class="cmd-item" data-action="ext"><span class="cmd-icon">🐙</span><span>Buka Profil GitHub</span><span class="cmd-shortcut">GitHub ↗</span></a>
                    <a href="https://www.linkedin.com/in/reynaldi-delphiano-2b6b79120" target="_blank" class="cmd-item" data-action="ext"><span class="cmd-icon">💼</span><span>Buka LinkedIn</span><span class="cmd-shortcut">LinkedIn ↗</span></a>
                </div>
            </div>
            <div class="cmd-footer">
                <span>Gunakan <kbd>↑</kbd><kbd>↓</kbd> untuk memilih</span>
                <span><kbd>Enter</kbd> untuk membuka</span>
                <span><kbd>Esc</kbd> untuk keluar</span>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>