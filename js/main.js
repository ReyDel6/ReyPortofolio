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
const revealEls = document.querySelectorAll('.section, .project-card, .skill-card, .tl-card, .contact-card, .edu-card, .proj-detail-card');
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

// Training Expand/Collapse Toggle
const toggleTrainingsBtn = document.getElementById('toggleTrainingsBtn');
if (toggleTrainingsBtn) {
    toggleTrainingsBtn.addEventListener('click', () => {
        const isExpanded = toggleTrainingsBtn.getAttribute('data-expanded') === 'true';
        const extraTrainings = document.querySelectorAll('.training-card.training-extra');
        const textSpan = toggleTrainingsBtn.querySelector('.toggle-text');
        const total = document.querySelectorAll('.training-card').length;

        if (!isExpanded) {
            extraTrainings.forEach((card) => card.classList.remove('training-hidden'));
            toggleTrainingsBtn.setAttribute('data-expanded', 'true');
            if (textSpan) textSpan.textContent = (window.I18N && window.I18N.trainingCollapse) ? window.I18N.trainingCollapse : 'Ciutkan Pelatihan';
        } else {
            extraTrainings.forEach((card) => card.classList.add('training-hidden'));
            toggleTrainingsBtn.setAttribute('data-expanded', 'false');
            if (textSpan) textSpan.textContent = (window.I18N && window.I18N.trainingExpand)
                ? window.I18N.trainingExpand.replace('{n}', total)
                : `Lihat Semua Pelatihan (${total})`;
            const section = document.getElementById('pelatihan');
            if (section) section.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
}

// Quick Jump Scrollspy (About page)
const quickJump = document.getElementById('quickJump');
if (quickJump) {
    const chips = Array.from(quickJump.querySelectorAll('.quick-jump-chip'));
    const targets = chips
        .map((chip) => {
            const id = chip.getAttribute('href');
            const el = id && id.startsWith('#') ? document.querySelector(id) : null;
            return el ? { chip, el } : null;
        })
        .filter(Boolean);

    if (targets.length) {
        const OFFSET = 180;
        const update = () => {
            const pos = window.scrollY + OFFSET;
            let current = targets[0];
            targets.forEach((t) => {
                if (t.el.offsetTop <= pos) current = t;
            });
            chips.forEach((c) => c.classList.remove('active'));
            if (current) current.chip.classList.add('active');
        };

        window.addEventListener('scroll', update, { passive: true });
        window.addEventListener('resize', update, { passive: true });
        update();

        const prefersReducedMotion = window.matchMedia
            && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        chips.forEach((chip) => {
            chip.addEventListener('click', (e) => {
                const id = chip.getAttribute('href');
                const el = id && id.startsWith('#') ? document.querySelector(id) : null;
                if (!el) return;
                e.preventDefault();
                chips.forEach((c) => c.classList.remove('active'));
                chip.classList.add('active');
                el.scrollIntoView({
                    behavior: prefersReducedMotion ? 'auto' : 'smooth',
                    block: 'start'
                });
                if (window.history && window.history.replaceState) {
                    window.history.replaceState(null, '', id);
                }
            });
        });
    }
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
        const realBroken = heroPhotoWrapper.classList.contains('real-broken');
        if (realBroken && mode === 'real') {
            mode = 'pixel';
        }
        currentMode = mode;
        const isPixel = mode === 'pixel';

        if (photoReal && photoPixel) {
            photoReal.classList.toggle('active', !isPixel && !realBroken);
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

    // Swipe gesture (mobile) — Real <-> Pixel
    let swipeStartX = null;
    heroPhotoWrapper.addEventListener('touchstart', (e) => {
        swipeStartX = e.touches[0].clientX;
    }, { passive: true });
    heroPhotoWrapper.addEventListener('touchend', (e) => {
        if (swipeStartX === null) return;
        const deltaX = e.changedTouches[0].clientX - swipeStartX;
        swipeStartX = null;
        if (Math.abs(deltaX) > 60) {
            setPhotoMode(deltaX < 0 ? 'pixel' : 'real');
            startAutoSwitch();
        }
    }, { passive: true });

    // Start auto switch
    startAutoSwitch();
}

// ---------- ACTIVITY FILTER / DETAIL COLLAPSE / LIGHTBOX ----------
(function () {
    const reduceMotion = window.matchMedia
        && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // --- Activity filter tabs ---
    const filterBar = document.getElementById('activityFilter');
    if (filterBar) {
        const buttons = Array.from(filterBar.querySelectorAll('.activity-filter-btn'));
        const sections = Array.from(document.querySelectorAll('.activity-section'));
        const hashMap = {
            competition: '#kompetisi',
            talks: '#talks',
            training: '#pelatihan'
        };

        const applyFilter = (filter, options) => {
            const opts = options || {};

            buttons.forEach((btn) => {
                const active = btn.dataset.filter === filter;
                btn.classList.toggle('active', active);
                btn.setAttribute('aria-pressed', active ? 'true' : 'false');
            });

            sections.forEach((section) => {
                const show = filter === 'all' || section.dataset.activity === filter;
                section.classList.toggle('is-hidden', !show);
                if (show) {
                    section.removeAttribute('aria-hidden');
                    section.classList.add('revealed');
                    section.querySelectorAll('.tl-card').forEach((card) => {
                        card.classList.add('revealed');
                    });
                } else {
                    section.setAttribute('aria-hidden', 'true');
                }
            });

            if (opts.scroll) {
                const top = filterBar.getBoundingClientRect().top + window.scrollY - 90;
                if (window.scrollY > top) {
                    window.scrollTo({ top, behavior: reduceMotion ? 'auto' : 'smooth' });
                }
            }

            if (opts.updateHash !== false && window.history.replaceState) {
                const hash = filter === 'all' ? '' : (hashMap[filter] || '');
                window.history.replaceState(
                    null,
                    '',
                    window.location.pathname + window.location.search + hash
                );
            }
        };

        buttons.forEach((btn) => {
            btn.addEventListener('click', () => {
                applyFilter(btn.dataset.filter, { scroll: true });
            });
        });

        // Deep link support: kegiatan.php#kompetisi / #talks / #pelatihan
        const hash = window.location.hash.replace('#', '').toLowerCase();
        const initial = Object.keys(hashMap).find((key) => hashMap[key] === '#' + hash);
        if (initial) {
            applyFilter(initial, { updateHash: false });
        }
    }

    // --- Collapsible competition detail (show 2 items, expand the rest) ---
    document.querySelectorAll('.competition-items.has-extra-items').forEach((list) => {
        list.classList.add('is-collapsed');

        const card = list.closest('.competition-card');
        const toggle = card ? card.querySelector('.activity-detail-toggle') : null;
        if (!toggle) return;

        toggle.hidden = false;

        toggle.addEventListener('click', () => {
            const expanded = toggle.getAttribute('aria-expanded') === 'true';
            const nextExpanded = !expanded;

            toggle.setAttribute('aria-expanded', nextExpanded ? 'true' : 'false');
            list.classList.toggle('is-collapsed', !nextExpanded);

            const label = toggle.querySelector('.toggle-label');
            if (label) {
                label.textContent = nextExpanded
                    ? (label.dataset.hide || '')
                    : (label.dataset.show || '');
            }
        });
    });

    // --- Image lightbox ---
    const lightbox = document.getElementById('lightbox');
    if (lightbox) {
        const img = lightbox.querySelector('.lightbox-img');
        const captionEl = lightbox.querySelector('.lightbox-caption');
        const counterEl = lightbox.querySelector('.lightbox-counter');
        const closeBtn = lightbox.querySelector('[data-lightbox-close]');
        const prevBtn = lightbox.querySelector('[data-lightbox-prev]');
        const nextBtn = lightbox.querySelector('[data-lightbox-next]');
        const allTriggers = Array.from(document.querySelectorAll('a[data-lightbox]'));

        let group = [];
        let index = 0;
        let lastFocused = null;

        const render = () => {
            const trigger = group[index];
            if (!trigger) return;

            const thumb = trigger.querySelector('img');
            const alt = thumb ? (thumb.getAttribute('alt') || '') : '';
            const caption = trigger.dataset.caption || alt;

            img.src = trigger.getAttribute('href');
            img.alt = alt || caption;
            captionEl.textContent = caption;

            const multiple = group.length > 1;
            prevBtn.hidden = !multiple;
            nextBtn.hidden = !multiple;
            counterEl.hidden = !multiple;
            counterEl.textContent = multiple ? (index + 1) + ' / ' + group.length : '';

            if (multiple) {
                const neighbours = [
                    group[(index + 1) % group.length],
                    group[(index - 1 + group.length) % group.length]
                ];
                neighbours.forEach((item) => {
                    const pre = new Image();
                    pre.src = item.getAttribute('href');
                });
            }
        };

        const open = (trigger) => {
            const name = trigger.dataset.lightbox;
            group = allTriggers.filter((el) => el.dataset.lightbox === name);
            index = Math.max(0, group.indexOf(trigger));
            lastFocused = document.activeElement;

            lightbox.classList.add('is-open');
            lightbox.setAttribute('aria-hidden', 'false');
            document.body.classList.add('lightbox-open');

            render();
            closeBtn.focus();
        };

        const close = () => {
            lightbox.classList.remove('is-open');
            lightbox.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('lightbox-open');
            img.removeAttribute('src');

            if (lastFocused && typeof lastFocused.focus === 'function') {
                lastFocused.focus();
            }
        };

        const step = (direction) => {
            if (group.length < 2) return;
            index = (index + direction + group.length) % group.length;
            render();
        };

        document.addEventListener('click', (event) => {
            const trigger = event.target.closest('a[data-lightbox]');
            if (!trigger) return;
            event.preventDefault();
            open(trigger);
        });

        closeBtn.addEventListener('click', close);
        prevBtn.addEventListener('click', () => step(-1));
        nextBtn.addEventListener('click', () => step(1));

        lightbox.addEventListener('click', (event) => {
            if (event.target === lightbox) close();
        });

        document.addEventListener('keydown', (event) => {
            if (!lightbox.classList.contains('is-open')) return;

            if (event.key === 'Escape') {
                event.preventDefault();
                close();
            } else if (event.key === 'ArrowLeft') {
                event.preventDefault();
                step(-1);
            } else if (event.key === 'ArrowRight') {
                event.preventDefault();
                step(1);
            } else if (event.key === 'Tab') {
                const focusable = [closeBtn, prevBtn, nextBtn].filter((el) => !el.hidden);
                if (!focusable.length) return;

                const first = focusable[0];
                const last = focusable[focusable.length - 1];
                if (event.shiftKey && document.activeElement === first) {
                    event.preventDefault();
                    last.focus();
                } else if (!event.shiftKey && document.activeElement === last) {
                    event.preventDefault();
                    first.focus();
                }
            }
        });

        // Swipe navigation on touch devices
        let touchStartX = null;
        lightbox.addEventListener('touchstart', (event) => {
            touchStartX = event.touches[0].clientX;
        }, { passive: true });

        lightbox.addEventListener('touchend', (event) => {
            if (touchStartX === null) return;
            const delta = event.changedTouches[0].clientX - touchStartX;
            touchStartX = null;
            if (Math.abs(delta) > 50) {
                step(delta < 0 ? 1 : -1);
            }
        }, { passive: true });
    }
})();

// ---------- SKILL → PROJECTS MODAL ----------
(function () {
    const overlay = document.getElementById('skillModalOverlay');
    const list = document.getElementById('skillModalList');
    const empty = document.getElementById('skillModalEmpty');
    const titleEl = document.getElementById('skillModalTitle');
    const subEl = document.getElementById('skillModalSub');
    const closeBtn = document.getElementById('skillModalClose');

    if (!overlay || !list) return;

    let lastFocused = null;

    const escapeHtml = (value) => String(value)
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/"/g, '&quot;')
        .replace(/'/g, '&#39;');

    const close = () => {
        overlay.hidden = true;
        document.body.style.overflow = '';
        if (lastFocused && typeof lastFocused.focus === 'function') {
            lastFocused.focus();
        }
    };

    const open = (pillEl) => {
        let projects = [];
        try {
            const raw = pillEl.getAttribute('data-skill-projects') || '[]';
            const parsed = JSON.parse(raw);
            if (Array.isArray(parsed)) projects = parsed;
        } catch (error) {
            projects = [];
        }

        if (titleEl) titleEl.textContent = pillEl.getAttribute('data-skill-name') || '';
        if (subEl) {
            subEl.textContent = pillEl.getAttribute('data-level') === 'core'
                ? (window.I18N && window.I18N.skills_level_core) || 'Core Stack'
                : (window.I18N && window.I18N.skills_level_familiar) || 'Familiar';
        }
        if (list) list.innerHTML = '';
        if (empty) empty.hidden = projects.length > 0;

        if (list && projects.length > 0) {
            projects.forEach((proj) => {
                const item = document.createElement('a');
                item.className = 'skill-modal-item';
                item.href = proj.href || '#';

                const title = document.createElement('span');
                title.className = 'skill-modal-item-title';
                title.textContent = proj.title || '';
                item.appendChild(title);

                const year = document.createElement('span');
                year.className = 'skill-modal-item-year';
                year.textContent = [proj.year ? '📅 ' + proj.year : ''].filter(Boolean).join(' · ');
                if (year.textContent) item.appendChild(year);

                const arrow = document.createElement('span');
                arrow.className = 'skill-modal-item-arrow';
                arrow.textContent = '→';
                item.appendChild(arrow);

                list.appendChild(item);
            });
        }

        overlay.hidden = false;
        document.body.style.overflow = 'hidden';
        lastFocused = document.activeElement;
        if (closeBtn) closeBtn.focus();
    };

    if (overlay) {
        overlay.addEventListener('click', (event) => {
            if (event.target === overlay) close();
        });
    }
    if (closeBtn) {
        closeBtn.addEventListener('click', close);
    }
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            if (!overlay.hidden) close();
        }
    });

    document.querySelectorAll('.tech-pill-item[data-skill-projects]').forEach((pillEl) => {
        pillEl.addEventListener('click', () => open(pillEl));
    });
})();


// ---------- PROJECT FILTER STICKY STATE ----------
(function () {
    const sticky = document.getElementById('projectsFilterSticky');
    const sentinel = document.getElementById('projectsFilterSentinel');

    if (!sticky || !sentinel || !('IntersectionObserver' in window)) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            sticky.classList.toggle('is-stuck', !entry.isIntersecting);
        });
    }, { rootMargin: '-80px 0px 0px 0px', threshold: 0 });

    observer.observe(sentinel);
})();

// ---------- TECH ICON TOOLTIP ----------
(function () {
    const icons = document.querySelectorAll('.tech-icon[data-tip]');
    if (!icons.length) return;

    const tip = document.createElement('div');
    tip.className = 'tech-tooltip';
    tip.setAttribute('role', 'tooltip');
    tip.hidden = true;
    document.body.appendChild(tip);

    let current = null;

    const hide = () => {
        current = null;
        tip.classList.remove('is-visible');
        tip.hidden = true;
    };

    const show = (icon) => {
        const text = icon.dataset.tip;
        if (!text) return;

        current = icon;
        tip.textContent = text;
        tip.hidden = false;

        const rect = icon.getBoundingClientRect();
        const half = tip.offsetWidth / 2;
        const minLeft = half + 8;
        const maxLeft = window.innerWidth - half - 8;
        const left = Math.max(minLeft, Math.min(maxLeft, rect.left + rect.width / 2));
        const top = rect.top - tip.offsetHeight - 10;

        tip.style.left = left + 'px';
        tip.style.top = (top < 8 ? rect.bottom + 10 : top) + 'px';
        tip.classList.add('is-visible');
    };

    icons.forEach((icon) => {
        icon.addEventListener('pointerenter', () => show(icon));
        icon.addEventListener('pointerleave', () => {
            if (current === icon) hide();
        });
    });

    window.addEventListener('scroll', hide, { passive: true });
    window.addEventListener('resize', hide);
})();

// ---------- PROJECT CARD HOVER PREVIEW ----------
(function () {
    if (!window.matchMedia || !window.matchMedia('(hover: hover) and (pointer: fine)').matches) {
        return;
    }

    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const medias = document.querySelectorAll('.proj-tile-media[data-previews]');
    if (!medias.length) return;

    medias.forEach((media) => {
        let previews;
        try {
            previews = JSON.parse(media.getAttribute('data-previews') || '[]');
        } catch (error) {
            return;
        }

        if (!Array.isArray(previews) || previews.length < 2) return;

        const primary = media.querySelector('.proj-tile-img');
        const alt = media.querySelector('.proj-tile-img-alt');
        if (!primary || !alt) return;

        let timer = null;
        let index = 0;
        let token = 0;
        let preloaded = false;

        const preload = () => {
            if (preloaded) return;
            preloaded = true;
            previews.forEach((src) => {
                const img = new Image();
                img.src = src;
            });
        };

        const apply = (nextIndex) => {
            const src = previews[nextIndex];
            if (!src) return;

            const myToken = ++token;
            const loader = new Image();

            loader.onload = () => {
                if (myToken !== token) return;

                alt.src = src;
                alt.classList.add('is-visible');

                const commit = () => {
                    if (myToken !== token) return;
                    primary.src = src;
                    alt.classList.remove('is-visible');
                    index = nextIndex;
                };

                if (reduceMotion) {
                    commit();
                } else {
                    setTimeout(commit, 420);
                }
            };

            loader.onerror = () => {
                if (myToken === token) index = nextIndex;
            };

            loader.src = src;
        };

        const start = () => {
            preload();
            if (timer) return;

            if (reduceMotion) {
                apply(1);
                return;
            }

            timer = setInterval(() => {
                apply((index + 1) % previews.length);
            }, 1600);
        };

        const previewOnce = () => {
            preload();
            if (!timer) apply(1);
        };

        const stop = () => {
            if (timer) {
                clearInterval(timer);
                timer = null;
            }

            token++;
            alt.classList.remove('is-visible');

            if (primary.getAttribute('src') !== previews[0]) {
                primary.src = previews[0];
            }

            index = 0;
        };

        media.addEventListener('pointerenter', start);
        media.addEventListener('pointerleave', stop);
        media.addEventListener('pointercancel', stop);
        media.addEventListener('focus', previewOnce);
        media.addEventListener('blur', stop);
    });
})();

// ---------- CONTACT: FORM AJAX + COPY + STATUS ----------
(function () {
    const form = document.getElementById('contactForm');
    const successEl = document.getElementById('contactSuccess');
    const errorEl = document.getElementById('contactError');
    const errorMsgEl = document.getElementById('contactErrorMsg');
    const errorMailtoEl = document.getElementById('contactErrorMailto');
    const errorRetryBtn = document.getElementById('contactErrorRetry');
    const submitBtn = document.getElementById('contactSubmit');
    const submitLabelEl = document.getElementById('contactSubmitLabel');
    const successTitleEl = document.getElementById('contactSuccessTitle');
    const successDescEl = document.getElementById('contactSuccessDesc');
    const resetBtn = document.getElementById('contactSuccessReset');
    const nameEl = document.getElementById('contactName');
    const emailEl = document.getElementById('contactEmail');
    const messageEl = document.getElementById('contactMessage');
    const subjectEl = document.getElementById('contactSubject');

    if (!form) return;

    const honeypotName = form.getAttribute('data-honeypot') || 'botcheck';
    const configured = form.getAttribute('data-configured') !== '0';
    const submitUrl = form.getAttribute('data-endpoint') || 'contact-send.php';
    const minSeconds = parseFloat(form.getAttribute('data-min-seconds') || '0.4');
    const cooldownMs = parseInt(form.getAttribute('data-cooldown') || '10000', 10);
    const successI18n = window.I18N || {};
    const t = (key, vars = {}) => {
        let s = successI18n[key];
        if (typeof s !== 'string') s = key;
        return String(s).replace(/\{(\w+)\}/g, (m, k) => (vars[k] ?? m));
    };

    const state = {
        busy: false,
        lastEmail: '',
        lastSubject: '',
        lastMessage: '',
    };
    let formLoadedAt = Date.now();

    const showError = (msg, withMailto = false) => {
        if (errorMsgEl) errorMsgEl.textContent = msg;
        if (errorMailtoEl) {
            const subject = state.lastSubject || t('contact_subject_default', { default: 'Portfolio Contact' });
            const body = [t('contact_message') + ':', '', state.lastMessage || ''].join('\n');
            errorMailtoEl.href = 'mailto:' + encodeURIComponent(state.lastEmail) + '?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);
        }
        if (errorEl) errorEl.hidden = false;
        if (successEl) successEl.hidden = true;
    };

    const clearFieldError = (el) => {
        if (el) el.classList.remove('invalid');
        const errId = el && el.id ? el.id + 'Error' : '';
        const errEl = errId ? document.getElementById(errId) : null;
        if (errEl) errEl.hidden = true;
    };

    const setFieldError = (el, msg) => {
        if (!el) return;
        el.classList.add('invalid');
        const errId = el.id ? el.id + 'Error' : '';
        const errEl = errId ? document.getElementById(errId) : null;
        if (errEl) { errEl.textContent = msg; errEl.hidden = false; }
    };

    // Bersihkan error secara instan saat pengguna mulai mengetik ulang
    [nameEl, emailEl, messageEl].forEach((el) => {
        if (!el) return;
        el.addEventListener('input', () => {
            if (el.classList.contains('invalid')) {
                clearFieldError(el);
            }
        });
    });

    const validateForm = () => {
        let ok = true;
        clearFieldError(nameEl);
        clearFieldError(emailEl);
        clearFieldError(messageEl);

        if (!nameEl.value.trim()) { setFieldError(nameEl, t('contactErrName')); ok = false; }
        const emailVal = emailEl.value.trim();
        if (!emailVal || !/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(emailVal)) { setFieldError(emailEl, t('contactErrEmail')); ok = false; }
        const msgVal = messageEl.value.trim();
        if (msgVal.length < 3) { setFieldError(messageEl, t('contactErrMessage')); ok = false; }

        if (!ok) {
            const firstInvalid = [nameEl, emailEl, messageEl].find(el => el && el.classList.contains('invalid'));
            if (firstInvalid) {
                firstInvalid.focus({ preventScroll: false });
                firstInvalid.classList.add('shake-field');
                setTimeout(() => firstInvalid.classList.remove('shake-field'), 450);
            }
        }

        return ok;
    };

    const setBusy = (busy) => {
        state.busy = busy;
        if (submitBtn) {
            submitBtn.disabled = busy;
            submitBtn.setAttribute('aria-busy', busy ? 'true' : 'false');
            if (busy) {
                submitBtn.innerHTML = '<span class="contact-submit-spinner" aria-hidden="true"></span> <span class="contact-submit-label">' + t('contactSending') + '</span>';
            } else {
                submitBtn.innerHTML = '<span class="contact-submit-label" id="contactSubmitLabel">' + t('contact_send') + '</span>';
            }
        }
    };

    const resetForm = () => {
        if (nameEl) nameEl.value = '';
        if (emailEl) emailEl.value = '';
        if (messageEl) messageEl.value = '';
        if (subjectEl) subjectEl.value = 'general';
        if (errorEl) errorEl.hidden = true;
        if (successEl) successEl.hidden = true;
        if (form) form.hidden = false;
        if (nameEl) nameEl.focus({ preventScroll: false });
        setBusy(false);
    };

    const buildMailtoHref = () => {
        const subject = state.lastSubject || 'Portfolio Contact';
        const body = 'Portfolio Contact:\n\n' + (state.lastMessage || '');
        return 'mailto:' + encodeURIComponent(state.lastEmail) + '?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);
    };

    const submit = async (event) => {
        if (event && event.preventDefault) event.preventDefault();
        if (state.busy) return;

        // Honeypot: jika terisi bot, abaikan diam-diam
        const hpVal = form.elements[honeypotName];
        if (hpVal && hpVal.value && String(hpVal.value).trim() !== '') {
            if (errorEl) errorEl.hidden = true;
            if (successEl) successEl.hidden = true;
            return;
        }

        if (!validateForm()) return;

        if (!configured) {
            if (errorMsgEl) errorMsgEl.textContent = 'Form belum aktif. ' + (t('contactErrorMailto') || 'Kirim pesan via email.');
            if (errorEl) errorEl.hidden = false;
            if (successEl) successEl.hidden = true;
            return;
        }

        if (Date.now() - parseInt(localStorage.getItem('reydel_contact_last_sent') || '0', 10) < cooldownMs) {
            if (errorMsgEl) errorMsgEl.textContent = t('contactErrCooldown');
            if (errorEl) errorEl.hidden = false;
            if (successEl) successEl.hidden = true;
            return;
        }

        const fd = new FormData(form);
        fd.set('subject', (subjectEl && subjectEl.value) ? subjectEl.options[subjectEl.selectedIndex].text : 'Portfolio Contact');
        fd.set('replyto', emailEl.value.trim());
        state.lastSubject = fd.get('subject');
        state.lastEmail = emailEl.value.trim();
        state.lastMessage = messageEl.value.trim();

        setBusy(true);
        try {
            const res = await fetch(submitUrl, { method: 'POST', headers: { 'Accept': 'application/json' }, body: fd });
            let data = null;
            try { data = await res.json(); } catch (e) { data = null; }
            if (res.ok && data && data.success === true) {
                try { localStorage.setItem('reydel_contact_last_sent', String(Date.now())); } catch (e) { /* noop */ }
                if (successTitleEl) successTitleEl.textContent = t('contactSuccessTitle') || (data && data.title);
                if (successDescEl) successDescEl.textContent = t('contactSuccessDesc') || (data && data.message);
                if (form) form.hidden = true;
                if (successEl) successEl.hidden = false;
                if (errorEl) errorEl.hidden = true;
                successEl.setAttribute('aria-live', 'polite');
                if (successTitleEl) successTitleEl.focus({ preventScroll: false });
            } else {
                const errMsg = (data && data.message) ? data.message : t('contactErrorMsg');
                throw new Error(errMsg);
            }
        } catch (err) {
            console.error('SUBMIT ERROR:', err);
            setBusy(false);
            if (errorMsgEl) errorMsgEl.textContent = (err && err.message) ? err.message : t('contactErrorMsg');
            if (errorMailtoEl) errorMailtoEl.href = buildMailtoHref();
            if (errorEl) errorEl.hidden = false;
            if (successEl) successEl.hidden = true;
        }
    };

    form.addEventListener('submit', submit);
    if (submitBtn) {
        submitBtn.addEventListener('click', (ev) => {
            if (!state.busy) {
                submit(ev);
            }
        });
    }

    if (resetBtn) {
        resetBtn.addEventListener('click', () => {
            resetForm();
            if (nameEl) nameEl.focus({ preventScroll: false });
        });
    }
    if (errorRetryBtn) {
        errorRetryBtn.addEventListener('click', () => {
            if (errorEl) errorEl.hidden = true;
            if (successEl) successEl.hidden = true;
            if (form) form.hidden = false;
        });
    }

    document.querySelectorAll('[data-copy-email]').forEach((btn) => {
        const original = btn.textContent;
        btn.addEventListener('click', async (ev) => {
            ev.preventDefault();
            const email = btn.getAttribute('data-copy-email') || '';
            let okCopy = false;
            try { await navigator.clipboard.writeText(email); okCopy = true; } catch (e) {
                try {
                    const ta = document.createElement('textarea');
                    ta.value = email;
                    ta.style.position = 'fixed';
                    ta.style.left = '-9999px';
                    document.body.appendChild(ta);
                    ta.select();
                    okCopy = document.execCommand('copy');
                    ta.remove();
                } catch (e2) { okCopy = false; }
            }
            btn.classList.toggle('copied', okCopy);
            btn.textContent = okCopy ? t('contactCopied') : original;
            if (okCopy) {
                setTimeout(() => { btn.textContent = original; btn.classList.remove('copied'); }, 2000);
            }
        });
    });
})();
