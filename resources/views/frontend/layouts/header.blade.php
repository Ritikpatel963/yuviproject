<!-- OVERLAY -->
<div class="drawer-overlay" id="drawerOverlay"></div>

<!-- RIGHT DRAWER -->
<aside class="drawer" id="drawer" aria-label="Site navigation" role="dialog" aria-modal="true">

    <!-- Drawer top bar -->
    <div class="drawer-top">
        <a href="{{ route('frontend.index') }}" class="drawer-logo">DR. <span>YUVI</span></a>
        <button class="drawer-close" id="drawerClose" aria-label="Close menu">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
            </svg>
        </button>
    </div>

    <!-- Nav links -->
    <nav class="drawer-nav">

        <a href="{{ route('frontend.index') }}"
            class="drawer-link {{ request()->routeIs('frontend.index') ? 'active' : '' }}">
            Home
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7" />
            </svg>
        </a>
        <a href="{{ route('frontend.about') }}"
            class="drawer-link {{ request()->routeIs('frontend.about') ? 'active' : '' }}">
            About Dr. Yuvi
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7" />
            </svg>
        </a>
        <a href="{{ route('frontend.services') }}"
            class="drawer-link {{ request()->routeIs('frontend.services', 'frontend.serviceDetail') ? 'active' : '' }}">
            Services
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7" />
            </svg>
        </a>
        <a href="{{ route('frontend.gallery') }}"
            class="drawer-link {{ request()->routeIs('frontend.gallery') ? 'active' : '' }}">
            Gallery
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7" />
            </svg>
        </a>
        <a href="{{ route('frontend.blog') }}"
            class="drawer-link {{ request()->routeIs('frontend.blog', 'frontend.blogDetails') ? 'active' : '' }}">
            Health Blog
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7" />
            </svg>
        </a>
        <a href="{{ route('frontend.successStories') }}"
            class="drawer-link {{ request()->routeIs('frontend.successStories') ? 'active' : '' }}">
            Success Stories
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7" />
            </svg>
        </a>
        <a href="{{ route('frontend.contact') }}"
            class="drawer-link {{ request()->routeIs('frontend.contact') ? 'active' : '' }}">
            Contact
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7" />
            </svg>
        </a>

        <hr class="drawer-divider">
        <span class="drawer-nav-label" style="margin-top:0.4rem;">Locations</span>
        <a href="#" class="drawer-link" style="font-family:'DM Sans',sans-serif; font-size:0.88rem; font-weight:500;">
            Nimaaya Surat
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                <circle cx="12" cy="10" r="3" />
            </svg>
        </a>
        <a href="#" class="drawer-link" style="font-family:'DM Sans',sans-serif; font-size:0.88rem; font-weight:500;">
            Nimaaya Vadodara
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                <circle cx="12" cy="10" r="3" />
            </svg>
        </a>




        <hr class="drawer-divider">
        <span class="drawer-nav-label" style="margin-top:0.4rem;">Contact</span>
        <a href="tel:+919999999999" class="drawer-link">
            +91 9999999999
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path
                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
            </svg>
        </a>
        <a href="mailto:appointment@docteryuvi.com" class="drawer-link">
            appointment@docteryuvi.com
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 4h16v16H4z" />
                <polyline points="22,6 12,13 2,6" />
            </svg>
        </a>
        <a href="https://wa.me/919999999999" target="_blank" class="drawer-link">
            WhatsApp Consultation
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                <path
                    d="M20.52 3.48A11.8 11.8 0 0 0 12.05 0C5.52 0 .2 5.32.2 11.86c0 2.09.55 4.13 1.6 5.93L0 24l6.37-1.67a11.8 11.8 0 0 0 5.68 1.45h.01c6.53 0 11.85-5.32 11.85-11.86 0-3.17-1.23-6.15-3.39-8.32zM12.05 21.7a9.8 9.8 0 0 1-5-1.38l-.36-.21-3.78.99 1.01-3.69-.23-.38a9.77 9.77 0 0 1-1.5-5.17c0-5.42 4.41-9.83 9.86-9.83 2.63 0 5.11 1.02 6.97 2.89a9.77 9.77 0 0 1 2.89 6.97c0 5.42-4.41 9.83-9.86 9.83zm5.4-7.36c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.95 1.17-.17.2-.35.22-.65.07-.3-.15-1.28-.47-2.43-1.5-.9-.8-1.5-1.8-1.68-2.1-.17-.3-.02-.46.13-.61.14-.14.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.62-.92-2.22-.24-.58-.48-.5-.67-.51h-.57c-.2 0-.52.07-.8.37-.27.3-1.05 1.02-1.05 2.5s1.07 2.9 1.22 3.1c.15.2 2.1 3.2 5.1 4.49.71.31 1.26.5 1.7.64.71.22 1.36.19 1.87.11.57-.09 1.76-.72 2.01-1.42.25-.7.25-1.3.17-1.42-.07-.12-.27-.2-.57-.35z" />
            </svg>
        </a>
    </nav>

</aside>

<!-- TOP BAR (Desktop Only) -->
<div class="top-nav-bar">
    <div class="top-nav-inner">
        <div class="top-nav-contact">
            <a href="tel:+919999999999"><span>Phone:</span> +91 999 999 9999</a>
            <a href="mailto:appointment@docteryuvi.com"><span>Email:</span> appointment@docteryuvi.com</a>
            <a href="https://wa.me/919999999999" target="_blank"><span>WhatsApp:</span> Chat Now</a>
        </div>
    </div>
</div>

<!-- NAV -->
<nav class="nav" id="mainNav">
    <div class="nav-inner">
        <a href="{{ route('frontend.index') }}" class="brand">
            <img src="{{ asset('assets/frontend/img/logo.png') }}" alt="Dr Yuvraj Jadeja"
                onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
            <span style="display:none;font-family:'DM Serif Display',serif;font-size:1.35rem;">DR. <span
                    style="color:var(--crimson)">YUVI</span></span>
        </a>

        <!-- Desktop center links -->
        <ul class="nav-center">
            <li><a href="{{ route('frontend.index') }}"
                    class="{{ request()->routeIs('frontend.index') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('frontend.about') }}"
                    class="{{ request()->routeIs('frontend.about') ? 'active' : '' }}">About</a></li>
            <li><a href="{{ route('frontend.services') }}"
                    class="{{ request()->routeIs('frontend.services', 'frontend.serviceDetail') ? 'active' : '' }}">Services</a>
            </li>
            <li><a href="{{ route('frontend.gallery') }}"
                    class="{{ request()->routeIs('frontend.gallery') ? 'active' : '' }}">Gallery</a></li>
            <li><a href="{{ route('frontend.blog') }}"
                    class="{{ request()->routeIs('frontend.blog', 'frontend.blogDetails') ? 'active' : '' }}">Blog</a>
            </li>
            <li><a href="{{ route('frontend.successStories') }}"
                    class="{{ request()->routeIs('frontend.successStories') ? 'active' : '' }}">Stories</a></li>
            <li><a href="{{ route('frontend.contact') }}"
                    class="{{ request()->routeIs('frontend.contact') ? 'active' : '' }}">Contact</a></li>
        </ul>

        <div class="nav-right">
            <a href="{{ route('frontend.quiz') }}" class="nav-cta">Get Started</a>
            <button class="hamburger" id="hamburger" aria-label="Open menu" aria-expanded="false"
                aria-controls="drawer">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</nav>