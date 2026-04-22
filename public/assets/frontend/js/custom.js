document.addEventListener("DOMContentLoaded", () => {

    // ── DRAWER ──
    const hamburger = document.getElementById('hamburger');
    const drawer = document.getElementById('drawer');
    const overlay = document.getElementById('drawerOverlay');
    const drawerClose = document.getElementById('drawerClose');
    const nav = document.getElementById('mainNav');

    function openDrawer() {
        if (!drawer || !overlay || !hamburger) return;

        drawer.classList.add('open');
        overlay.classList.add('active');
        hamburger.classList.add('active');
        hamburger.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
    }

    function closeDrawer() {
        if (!drawer || !overlay || !hamburger) return;

        drawer.classList.remove('open');
        overlay.classList.remove('active');
        hamburger.classList.remove('active');
        hamburger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
    }

    if (hamburger) {
        hamburger.addEventListener('click', () => {
            drawer.classList.contains('open') ? closeDrawer() : openDrawer();
        });
    }

    if (drawerClose) drawerClose.addEventListener('click', closeDrawer);
    if (overlay) overlay.addEventListener('click', closeDrawer);

    document.addEventListener('keydown', e => {
        if (e.key === 'Escape' && drawer && drawer.classList.contains('open')) {
            closeDrawer();
        }
    });

    // ── NAV SCROLL ──
    if (nav) {
        window.addEventListener('scroll', () => {
            nav.classList.toggle('scrolled', window.scrollY > 50);
        });
    }

    // ── SCROLL REVEAL ──
    const reveals = document.querySelectorAll('.reveal');

    if (reveals.length) {
        const revealObserver = new IntersectionObserver(entries => {
            entries.forEach((entry, i) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                    }, i * 70);

                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.08 });

        reveals.forEach(el => revealObserver.observe(el));
    }

    // Auto-reveal hero
    document.querySelectorAll('.hero .reveal').forEach(el => {
        setTimeout(() => el.classList.add('visible'), 150);
    });

    // ── FAQ ──
    document.querySelectorAll('.faq-question').forEach(btn => {
        btn.addEventListener('click', () => {
            const item = btn.closest('.faq-item');
            if (!item) return;

            const isOpen = item.classList.contains('open');

            document.querySelectorAll('.faq-item.open').forEach(i => {
                i.classList.remove('open');
            });

            if (!isOpen) item.classList.add('open');
        });
    });

    // ── LIGHTBOX ──
    const lightbox = document.getElementById('videoLightbox');
    const lightboxIframe = document.getElementById('lightboxIframe');
    const closeLightboxBtn = document.getElementById('closeLightbox');

    window.openLightbox = function (el) {
        if (!lightbox || !lightboxIframe) return;

        const src = el.getAttribute('data-video-src');

        if (src) {
            lightboxIframe.src = src;
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    };

    function closeLightbox() {
        if (!lightbox || !lightboxIframe) return;

        lightbox.classList.remove('active');
        lightboxIframe.src = '';
        document.body.style.overflow = '';
    }

    if (closeLightboxBtn) {
        closeLightboxBtn.addEventListener('click', closeLightbox);
    }

    if (lightbox) {
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) closeLightbox();
        });
    }

    // ── IMAGE LIGHTBOX ──
    const imgLightbox = document.getElementById('imageLightbox');
    const lightboxImg = document.getElementById('lightboxImg');
    const lightboxTitle = document.getElementById('lightboxTitle');
    const lightboxCategory = document.getElementById('lightboxCategory');

    window.openImageLightbox = function (el) {
        if (!imgLightbox || !lightboxImg) return;

        const img = el.querySelector('img');
        const title = el.querySelector('h3');
        const category = el.querySelector('span');

        if (img) {
            lightboxImg.src = img.src;
            if (title) lightboxTitle.textContent = title.textContent;
            if (category) lightboxCategory.textContent = category.textContent;

            imgLightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    };

    window.closeImageLightbox = function () {
        if (!imgLightbox) return;
        imgLightbox.classList.remove('active');
        document.body.style.overflow = '';
    };

    if (imgLightbox) {
        imgLightbox.addEventListener('click', (e) => {
            if (e.target === imgLightbox) closeImageLightbox();
        });
    }

    // ── FILTER LOGIC ──
    const filterBtns = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.card[data-category]');
    const emptyState = document.getElementById('emptyState');
    const visibleCountEl = document.getElementById('visibleCount');

    // ── MOBILE FILTER TOGGLE ──
    const mobileFilterToggle = document.getElementById('mobileFilterToggle');
    const mobileFilterPanel = document.getElementById('mobileFilterPanel');

    if (mobileFilterToggle && mobileFilterPanel) {
        mobileFilterToggle.addEventListener('click', () => {
            const isOpen = mobileFilterPanel.classList.toggle('open');
            mobileFilterToggle.setAttribute('aria-expanded', isOpen);
            mobileFilterToggle.classList.toggle('open');
        });

        // Close panel when a filter is clicked
        mobileFilterPanel.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                mobileFilterPanel.classList.remove('open');
                mobileFilterToggle.classList.remove('open');
                mobileFilterToggle.setAttribute('aria-expanded', 'false');
            });
        });
    }
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {

            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.getAttribute('data-filter');
            let visible = 0;

            cards.forEach(card => {
                const cats = card.getAttribute('data-category').split(' ');

                if (filter === 'all' || cats.includes(filter)) {
                    card.classList.remove('hidden');
                    card.classList.add('fade-in');
                    visible++;

                    setTimeout(() => {
                        card.classList.remove('fade-in');
                    }, 400);

                } else {
                    card.classList.add('hidden');
                }
            });

            if (emptyState) {
                emptyState.classList.toggle('show', visible === 0);
            }

            if (visibleCountEl) {
                visibleCountEl.textContent =
                    visible === 0
                        ? "No articles found"
                        : `Showing ${visible} article${visible === 1 ? "" : "s"}`;
            }
        });
    });

    // ── CONSULT TABS ──
    const tabBtns = document.querySelectorAll('.tab-btn');
    const formTitle = document.getElementById('formTitle');
    const formSub = document.getElementById('formSub');

    const tabMeta = {
        clinic: {
            title: 'Request a Clinic Visit',
            sub: "Fill in your details and we'll reach out within 24 hours to confirm your appointment."
        },
        online: {
            title: 'Book an Online Consultation',
            sub: 'Consult Dr. Yuvi from the comfort of your home via a secure video call.'
        },
        whatsapp: {
            title: 'Connect on WhatsApp',
            sub: "Send us a message and we'll respond within a few hours on WhatsApp."
        }
    };

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {

            tabBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const meta = tabMeta[btn.dataset.tab];

            if (meta && formTitle && formSub) {
                formTitle.textContent = meta.title;
                formSub.textContent = meta.sub;
            }
        });
    });

    // ── FORM SUBMIT ──
    const form = document.getElementById('contactForm');
    const successMsg = document.getElementById('successMsg');

    if (form) {
        form.addEventListener('submit', e => {
            e.preventDefault();

            const consent = document.getElementById('consent');

            if (consent && !consent.checked) {
                consent.style.outline = '2px solid #e24b4a';

                setTimeout(() => {
                    consent.style.outline = '';
                }, 2000);

                return;
            }

            form.style.opacity = '0';
            form.style.transform = 'translateY(-10px)';
            form.style.transition = 'opacity 0.3s ease, transform 0.3s ease';

            setTimeout(() => {
                form.style.display = 'none';

                if (successMsg) {
                    successMsg.classList.add('show');
                }

            }, 300);
        });
    }

});
// -- PRELOADER HIDE -- 
window.addEventListener('load', () => { 
    const preloader = document.getElementById('preloader'); 
    if (preloader) { 
        // Force preloader to stay for at least 1.5 seconds after load
        setTimeout(() => {
            preloader.classList.add('fade-out'); 
            setTimeout(() => { 
                preloader.style.display = 'none'; 
            }, 600); 
        }, 1500); 
    } 
});
