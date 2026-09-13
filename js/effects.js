// ============================================================
// REY PORTOFOLIO — Living Effects (GSAP + themable particle dust)
// Tema: dark navy tech (#0b1020, indigo/ungu/hijau)
// Dibuat agar match tema, BUKAN konstelasi UMKM.
// ============================================================
(function () {
    'use strict';

    var prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // ---------- 1. TECH DUST CANVAS (theme-matching particles) ----------
    function initDust() {
        if (prefersReduced) return;

        var canvas = document.createElement('canvas');
        canvas.id = 'techDust';
        canvas.setAttribute('aria-hidden', 'true');
        document.body.appendChild(canvas);

        var ctx = canvas.getContext('2d');
        var particles = [];
        var mouse = { x: -9999, y: -9999 };

        var COLORS = [ // palette dari :root
            '79,110,247',  // --primary indigo
            '124,92,240',  // --primary-2 ungu
            '34,197,94',   // --accent hijau
            '231,236,247'  // --text (putih lembut)
        ];

        function resize() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            var target = Math.min(110, Math.floor((canvas.width * canvas.height) / 16000));
            particles = [];
            for (var i = 0; i < target; i++) {
                particles.push({
                    x: Math.random() * canvas.width,
                    y: Math.random() * canvas.height,
                    r: Math.random() * 1.8 + 0.4,
                    vx: (Math.random() - 0.5) * 0.25,
                    vy: (Math.random() - 0.5) * 0.25,
                    c: COLORS[Math.floor(Math.random() * COLORS.length)],
                    a: Math.random() * 0.28 + 0.08,
                    tw: Math.random() * Math.PI * 2
                });
            }
        }

        function tick() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            for (var i = 0; i < particles.length; i++) {
                var p = particles[i];

                var dx = p.x - mouse.x;
                var dy = p.y - mouse.y;
                var dist = Math.sqrt(dx * dx + dy * dy);
                if (dist < 130 && dist > 0.001) {
                    var push = (130 - dist) / 130 * 0.5;
                    p.x += (dx / dist) * push;
                    p.y += (dy / dist) * push;
                }

                p.x += p.vx;
                p.y += p.vy;
                p.tw += 0.02;

                if (p.x < -10) p.x = canvas.width + 10;
                if (p.x > canvas.width + 10) p.x = -10;
                if (p.y < -10) p.y = canvas.height + 10;
                if (p.y > canvas.height + 10) p.y = -10;

                var alpha = p.a * (0.6 + 0.4 * Math.sin(p.tw));
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
                ctx.fillStyle = 'rgba(' + p.c + ',' + alpha + ')';
                ctx.fill();
            }
            requestAnimationFrame(tick);
        }

        resize();
        window.addEventListener('resize', resize);
        window.addEventListener('mousemove', function (e) {
            mouse.x = e.clientX;
            mouse.y = e.clientY;
        }, { passive: true });
        window.addEventListener('mouseout', function () {
            mouse.x = -9999;
            mouse.y = -9999;
        });
        tick();
    }
    initDust();

    // ---------- 1b. ANIMATED COUNTERS ----------
    function animateCount(el) {
        var raw = el.getAttribute('data-count');
        if (raw === null || raw === '') return;
        var target = parseFloat(raw);
        var hasDec = String(raw).indexOf('.') !== -1;
        var suffix = el.getAttribute('data-suffix') || '';
        var dur = 1400, start = null;
        function step(ts) {
            if (!start) start = ts;
            var p = Math.min((ts - start) / dur, 1);
            var eased = 1 - Math.pow(1 - p, 3);
            var val = target * eased;
            el.textContent = (hasDec ? val.toFixed(1) : Math.round(val).toString()) + suffix;
            if (p < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
    }
    if (typeof IntersectionObserver !== 'undefined') {
        var counters = document.querySelectorAll('.stat-num[data-count]');
        if (counters.length > 0) {
            var io = new IntersectionObserver(function (entries) {
                entries.forEach(function (en) {
                    if (en.isIntersecting) {
                        animateCount(en.target);
                        io.unobserve(en.target);
                    }
                });
            }, { threshold: 0.4 });
            counters.forEach(function (c) { io.observe(c); });
        }
    }

    // ---------- 2. GSAP MOTION (hero intro, stagger, parallax) ----------
    if (!window.gsap) return;
    if (prefersReduced) return;

    var gsap = window.gsap;

    // HERO entrance — index/about/projects/certificates/contact (guard per halaman)
    var heroItems = ['.hero-eyebrow', '.hero-title-with-badge', '.hero-role',
                     '.hero-desc', '.hero-actions', '.hero-stats-grid', '.hero-photo'];
    var present = heroItems.filter(function (sel) { return document.querySelector(sel); });
    if (present.length > 0) {
        var tl = gsap.timeline({ defaults: { ease: 'power3.out' } });
        present.forEach(function (sel, i) {
            tl.fromTo(sel, { y: 34, opacity: 0 }, { y: 0, opacity: 1, duration: 0.7 }, i * 0.09);
        });
        tl.fromTo('.hero-tag', { autoAlpha: 0 }, { autoAlpha: 1, duration: 0.4 }, 0);
    }

    // Parallax/float ringan pada hero photo
    var heroPhoto = document.querySelector('.hero-photo');
    if (heroPhoto && window.ScrollTrigger) {
        gsap.to(heroPhoto, {
            yPercent: -6,
            ease: 'none',
            scrollTrigger: { trigger: heroPhoto, start: 'top bottom', end: 'bottom top', scrub: true }
        });
    }

    // Hero photo: 3D CARD ANIMATION (tilt ikut kursor + glare sheen + float)
    if (heroPhoto) {
        var photoParent = heroPhoto.parentElement;
        if (photoParent) photoParent.style.perspective = '1000px';
        heroPhoto.style.transformStyle = 'preserve-3d';
        heroPhoto.style.willChange = 'transform';

        // Glare yang ikut kursor
        var glare = document.createElement('div');
        glare.className = 'photo-glare';
        heroPhoto.appendChild(glare);

        // Sinkron: GSAP kendalikan transform, nonaktifkan transition CSS transform
        heroPhoto.style.transition = 'box-shadow 0.4s ease, border-color 0.4s ease';

        var tiltRX = gsap.quickTo(heroPhoto, 'rotationX', { duration: 0.45, ease: 'power2.out' });
        var tiltRY = gsap.quickTo(heroPhoto, 'rotationY', { duration: 0.45, ease: 'power2.out' });
        var sheenX = gsap.quickTo(glare, 'xPercent', { duration: 0.45, ease: 'power2.out' });
        var sheenY = gsap.quickTo(glare, 'yPercent', { duration: 0.45, ease: 'power2.out' });

        var coarse = window.matchMedia('(pointer: coarse)').matches;

        if (!coarse) {
            heroPhoto.addEventListener('mousemove', function (e) {
                var rect = heroPhoto.getBoundingClientRect();
                var px = (e.clientX - rect.left) / rect.width;   // 0..1
                var py = (e.clientY - rect.top) / rect.height;   // 0..1
                tiltRY((px - 0.5) * 16);
                tiltRX((0.5 - py) * 16);
                sheenX((px - 0.5) * 260);
                sheenY((py - 0.5) * 260);
                glare.style.opacity = '1';
            });
            heroPhoto.addEventListener('mouseleave', function () {
                tiltRX(0); tiltRY(0); sheenX(0); sheenY(0);
                glare.style.opacity = '0';
            });
        }

        // Float lembut terus-menerus
        gsap.to(heroPhoto, { y: -8, duration: 2.6, ease: 'sine.inOut', yoyo: true, repeat: -1 });
    }

    // Stagger reveal "Jelajahi Portofolio" cards (index)
    var exploreCards = gsap.utils.toArray('.explore-card');
    if (exploreCards.length > 0) {
        gsap.fromTo(exploreCards, { y: 40, opacity: 0 }, {
            y: 0, opacity: 1, duration: 0.6, stagger: 0.08, ease: 'power2.out',
            scrollTrigger: { trigger: exploreCards[0], start: 'top 85%' }
        });
    }

    // Stagger tech pills (certificates)
    var pills = gsap.utils.toArray('.tech-pill-item');
    if (pills.length > 0) {
        gsap.fromTo(pills, { y: 24, opacity: 0 }, {
            y: 0, opacity: 1, duration: 0.4, stagger: 0.02, ease: 'power1.out',
            scrollTrigger: { trigger: pills[0], start: 'top 88%' }
        });
    }
})();