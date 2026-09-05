// Navbar scroll state & Progress bar
const navbar = document.getElementById('navbar');
const scrollProgress = document.getElementById('scrollProgress');

const onScroll = () => {
    const scrollY = window.scrollY;
    navbar.classList.toggle('scrolled', scrollY > 15);

    if (scrollProgress) {
        const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
        const progress = totalHeight > 0 ? (scrollY / totalHeight) * 100 : 0;
        scrollProgress.style.width = `${progress}%`;
    }
};
window.addEventListener('scroll', onScroll, { passive: true });
onScroll();

// Mobile menu toggle
const navToggle = document.getElementById('navToggle');
const navLinks = document.getElementById('navLinks');

navToggle.addEventListener('click', () => {
    navLinks.classList.toggle('open');
    navToggle.classList.toggle('open');
    document.body.style.overflow = navLinks.classList.contains('open') ? 'hidden' : '';
});

// Close menu when a link is clicked
navLinks.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
        navLinks.classList.remove('open');
        navToggle.classList.remove('open');
        document.body.style.overflow = '';
    });
});

// Scroll spy: highlight active nav link (hanya untuk halaman satu-gulir ber-anchor)
const spyAnchors = document.querySelectorAll('.nav-links a[href^="#"]');
if (spyAnchors.length > 0) {
    const sections = document.querySelectorAll('section[id]');
    const spy = () => {
        const pos = window.scrollY + 120;
        let currentId = '';
        sections.forEach((sec) => {
            if (pos >= sec.offsetTop) currentId = sec.id;
        });
        spyAnchors.forEach((a) => {
            a.classList.toggle('active', a.getAttribute('href') === '#' + currentId);
        });
    };
    window.addEventListener('scroll', spy);
    spy();
}

// Reveal on scroll (fade-up)
const revealEls = document.querySelectorAll('.section, .project-card, .skill-card, .tl-card, .contact-card, .edu-card');
const io = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                io.unobserve(entry.target);
            }
        });
    },
    { threshold: 0.08 }
);
revealEls.forEach((el) => io.observe(el));

// Timeline Expand/Collapse Toggle
const toggleTimelineBtn = document.getElementById('toggleTimelineBtn');
if (toggleTimelineBtn) {
    toggleTimelineBtn.addEventListener('click', () => {
        const isExpanded = toggleTimelineBtn.getAttribute('data-expanded') === 'true';
        const extraItems = document.querySelectorAll('.tl-item.tl-extra');
        const textSpan = toggleTimelineBtn.querySelector('.toggle-text');

        if (!isExpanded) {
            extraItems.forEach((item) => {
                item.classList.remove('tl-hidden');
                const card = item.querySelector('.tl-card');
                if (card) card.classList.add('revealed');
            });
            toggleTimelineBtn.setAttribute('data-expanded', 'true');
            if (textSpan) textSpan.textContent = (window.I18N && window.I18N.timelineCollapse) ? window.I18N.timelineCollapse : 'Ciutkan Riwayat Karir';
        } else {
            extraItems.forEach((item) => {
                item.classList.add('tl-hidden');
            });
            toggleTimelineBtn.setAttribute('data-expanded', 'false');
            const total = document.querySelectorAll('.tl-item').length;
            if (textSpan) textSpan.textContent = (window.I18N && window.I18N.timelineExpand)
                ? window.I18N.timelineExpand.replace('{n}', total)
                : `Lihat Semua Pengalaman (${total} Riwayat Karir)`;
            
            const expSection = document.getElementById('pengalaman');
            if (expSection) {
                expSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    });
}

// Certificate Expand/Collapse Toggle
const toggleCertificatesBtn = document.getElementById('toggleCertificatesBtn');
if (toggleCertificatesBtn) {
    toggleCertificatesBtn.addEventListener('click', () => {
        const isExpanded = toggleCertificatesBtn.getAttribute('data-expanded') === 'true';
        const extraCertificates = document.querySelectorAll('.cert-card.cert-extra');
        const textSpan = toggleCertificatesBtn.querySelector('.cert-toggle-text');
        const totalCertificates = document.querySelectorAll('.cert-card').length;

        extraCertificates.forEach((certificate) => {
            certificate.classList.toggle('cert-hidden', isExpanded);
        });

        toggleCertificatesBtn.setAttribute('data-expanded', String(!isExpanded));
        toggleCertificatesBtn.setAttribute('aria-expanded', String(!isExpanded));
        if (textSpan) {
            textSpan.textContent = isExpanded
                ? (window.I18N && window.I18N.certMore
                    ? window.I18N.certMore.replace('{n}', totalCertificates)
                    : `Lihat Semua Sertifikat (${totalCertificates})`)
                : ((window.I18N && window.I18N.certLess) ? window.I18N.certLess : 'Tampilkan Lebih Sedikit');
        }
    });
}

// ---------- SKILLS FILTER TABS (Ala Satria Bahari) ----------
const skillTabBtns = document.querySelectorAll('.skill-tab-btn');
const techPillItems = document.querySelectorAll('.tech-pill-item');

if (skillTabBtns.length > 0 && techPillItems.length > 0) {
    skillTabBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            skillTabBtns.forEach((b) => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.getAttribute('data-filter');

            techPillItems.forEach((item) => {
                const itemCat = item.getAttribute('data-category');
                if (filter === 'all' || itemCat === filter) {
                    item.style.display = 'flex';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 20);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.85)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 200);
                }
            });
        });
    });
}

// ---------- COMMAND PALETTE (⌘K / Ctrl+K) ----------
const cmdOverlay = document.getElementById('cmdOverlay');
const openCmdPaletteBtn = document.getElementById('openCmdPalette');
const closeCmdBtn = document.getElementById('closeCmdBtn');
const cmdInput = document.getElementById('cmdInput');
const cmdItems = document.querySelectorAll('.cmd-item');

const openCmdPalette = () => {
    if (!cmdOverlay) return;
    cmdOverlay.style.display = 'grid';
    document.body.style.overflow = 'hidden';
    if (cmdInput) {
        cmdInput.value = '';
        cmdInput.focus();
    }
    filterCmdItems('');
};

const closeCmdPalette = () => {
    if (!cmdOverlay) return;
    cmdOverlay.style.display = 'none';
    document.body.style.overflow = '';
};

if (openCmdPaletteBtn) {
    openCmdPaletteBtn.addEventListener('click', openCmdPalette);
}
if (closeCmdBtn) {
    closeCmdBtn.addEventListener('click', closeCmdPalette);
}
if (cmdOverlay) {
    cmdOverlay.addEventListener('click', (e) => {
        if (e.target === cmdOverlay) closeCmdPalette();
    });
}

// Global Keyboard Shortcut: Ctrl + K or Cmd + K & Escape
window.addEventListener('keydown', (e) => {
    if ((e.ctrlKey || e.metaKey) && e.key.toLowerCase() === 'k') {
        e.preventDefault();
        if (cmdOverlay && cmdOverlay.style.display === 'grid') {
            closeCmdPalette();
        } else {
            openCmdPalette();
        }
    }
    if (e.key === 'Escape' && cmdOverlay && cmdOverlay.style.display === 'grid') {
        closeCmdPalette();
    }
});

// Search Filter within Command Palette
const filterCmdItems = (query) => {
    const q = query.toLowerCase().trim();
    cmdItems.forEach((item) => {
        const text = item.textContent.toLowerCase();
        if (!q || text.includes(q)) {
            item.style.display = 'flex';
        } else {
            item.style.display = 'none';
        }
    });
};

if (cmdInput) {
    cmdInput.addEventListener('input', (e) => {
        filterCmdItems(e.target.value);
    });
}

// Close palette when clicking an item
cmdItems.forEach((item) => {
    item.addEventListener('click', () => {
        closeCmdPalette();
    });
});

// ---------- BACK TO TOP ----------
const backToTopBtn = document.getElementById('backToTop');

const onScrollBack = () => {
    if (!backToTopBtn) return;
    backToTopBtn.classList.toggle('visible', window.scrollY > 400);
};
window.addEventListener('scroll', onScrollBack, { passive: true });
onScrollBack();

if (backToTopBtn) {
    backToTopBtn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

// ---------- HERO PHOTO ANIMATED SWITCHER ----------
const heroPhotoWrapper = document.getElementById('heroPhotoWrapper');
if (heroPhotoWrapper) {
    const photoReal = document.getElementById('heroPhotoReal');
    const photoPixel = document.getElementById('heroPhotoPixel');
    const modeBtns = heroPhotoWrapper.querySelectorAll('.photo-mode-btn');
    let currentMode = 'real';
    let autoSwitchTimer = null;
    let isHovered = false;

    const setPhotoMode = (mode) => {
        currentMode = mode;
        const isPixel = mode === 'pixel';

        if (photoReal && photoPixel) {
            photoReal.classList.toggle('active', !isPixel);
            photoPixel.classList.toggle('active', isPixel);
        }

        heroPhotoWrapper.classList.toggle('pixel-mode', isPixel);

        modeBtns.forEach((btn) => {
            btn.classList.toggle('active', btn.getAttribute('data-mode') === mode);
        });
    };

    const togglePhotoMode = () => {
        setPhotoMode(currentMode === 'real' ? 'pixel' : 'real');
    };

    const startAutoSwitch = () => {
        stopAutoSwitch();
        autoSwitchTimer = setInterval(() => {
            if (!isHovered) {
                togglePhotoMode();
            }
        }, 4200);
    };

    const stopAutoSwitch = () => {
        if (autoSwitchTimer) {
            clearInterval(autoSwitchTimer);
            autoSwitchTimer = null;
        }
    };

    // Mode buttons click
    modeBtns.forEach((btn) => {
        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            const targetMode = btn.getAttribute('data-mode');
            if (targetMode && targetMode !== currentMode) {
                setPhotoMode(targetMode);
                startAutoSwitch();
            }
        });
    });

    // Clicking anywhere on the photo wrapper toggles
    heroPhotoWrapper.addEventListener('click', (e) => {
        if (!e.target.closest('.photo-mode-btn')) {
            togglePhotoMode();
            startAutoSwitch();
        }
    });

    // Hover pause behavior
    heroPhotoWrapper.addEventListener('mouseenter', () => {
        isHovered = true;
    });

    heroPhotoWrapper.addEventListener('mouseleave', () => {
        isHovered = false;
    });

    // Start auto switch
    startAutoSwitch();
}

