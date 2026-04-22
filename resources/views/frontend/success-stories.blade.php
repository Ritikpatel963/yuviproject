@extends('frontend.layouts.app')

@section('title', 'success stories Page')
@section('meta_description', 'Welcome to our website')
@section('meta_keywords', 'home, laravel, website')

@section('content')
  <!-- HERO -->
  <section class="hero_box3 reveal">
    <div class="hero-eyebrow">Success Stories</div>
    <h1>Voices of <em>Hope &amp; Healing</em></h1>
    <p>Every family carries a unique story. These are moments of perseverance, clinical precision, and the profound joy
      of new beginnings.</p>
    <div class="hero-stats">
      <div class="stat"><span class="stat-num">1,200+</span><span class="stat-label">Successful Births</span></div>
      <div class="stat"><span class="stat-num">15 Yrs</span><span class="stat-label">Clinical Experience</span></div>
      <div class="stat"><span class="stat-num">98%</span><span class="stat-label">Patient Satisfaction</span></div>
    </div>
  </section>

  <!-- PAGE BODY -->
  <div class="page-body">

    <!-- LEFT FILTER SIDEBAR (desktop sticky, hidden on mobile) -->
    <aside class="filter-sidebar">
      <span class="fs-title">Filter Journeys</span>
      <div class="fs-filters">
        <button class="filter-btn active" data-filter="all"><span class="dot"></span>All Journeys<span
            class="filter-count">6</span></button>
        <button class="filter-btn" data-filter="ivf"><span class="dot"></span>IVF Success<span
            class="filter-count">3</span></button>
        <button class="filter-btn" data-filter="iui"><span class="dot"></span>IUI Tips<span
            class="filter-count">1</span></button>
        <button class="filter-btn" data-filter="pcos"><span class="dot"></span>PCOS Management<span
            class="filter-count">1</span></button>
        <button class="filter-btn" data-filter="male"><span class="dot"></span>Male Fertility<span
            class="filter-count">2</span></button>
        <button class="filter-btn" data-filter="ethics"><span class="dot"></span>Ethical Care Explained<span
            class="filter-count">2</span></button>
      </div>
      <hr class="fs-divider">
      <div class="fs-note"><strong>Privacy First.</strong><br>All stories are shared with full informed consent. Names
        may be changed to protect privacy.</div>
      <div class="fs-contact">
        <span class="fs-contact-label">Need to talk?</span>
        <div class="fs-contact-row">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="var(--blue-mid)" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path
              d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
          </svg>
          <a href="https://wa.me/919999999999">WhatsApp Us</a>
        </div>
        <div class="fs-contact-row">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="var(--blue-mid)" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path
              d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.5a16 16 0 0 0 6 6l.86-.86a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 21.6 16z" />
          </svg>
          <a href="tel:+919999999999">+91 999 999 9999</a>
        </div>
        <a href="{{ route('frontend.contact') }}" class="fs-cta">Book Consultation</a>
      </div>
    </aside>

    <!-- RIGHT: grid col with mobile filter at top -->
    <div>

      <!-- Mobile filter toggle (only visible below 900px) -->
      <button class="mobile-filter-bar" id="mobileFilterToggle" aria-expanded="false">
        <span style="display:flex;align-items:center;gap:6px;">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <line x1="4" y1="6" x2="20" y2="6" />
            <line x1="8" y1="12" x2="20" y2="12" />
            <line x1="12" y1="18" x2="20" y2="18" />
          </svg>
          Filter Stories
        </span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
          stroke-linecap="round" stroke-linejoin="round">
          <polyline points="6 9 12 15 18 9" />
        </svg>
      </button>

      <div class="mobile-filter-panel" id="mobileFilterPanel">
        <button class="filter-btn active" data-filter="all"><span class="dot"></span>All</button>
        <button class="filter-btn" data-filter="ivf"><span class="dot"></span>IVF</button>
        <button class="filter-btn" data-filter="iui"><span class="dot"></span>IUI</button>
        <button class="filter-btn" data-filter="pcos"><span class="dot"></span>PCOS</button>
        <button class="filter-btn" data-filter="male"><span class="dot"></span>Male Fertility</button>
        <button class="filter-btn" data-filter="ethics"><span class="dot"></span>Ethical Care</button>
      </div>

      <div class="grid-header reveal">
        <h2>Patient Stories</h2>
        <span id="visibleCount">Showing 6 stories</span>
      </div>

      <div class="grid" id="videoGrid">

        <article class="card reveal" data-category="ivf ethics">
          <div class="video-wrap">
            <iframe src="https://www.youtube.com/embed/_B8vH0l4Eio?controls=1" loading="lazy" allowfullscreen
              title="The 1% Chance Story"></iframe>
            <span class="card-badge">IVF · Ethical</span>
          </div>
          <div class="card-body">
            <span class="card-tag">#IVFSuccess</span>
            <h3 class="card-title">The 1% Chance Story</h3>
            <div class="card-meta"><span class="card-meta-item"><svg width="11" height="11" viewBox="0 0 24 24"
                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10" />
                  <path d="M12 6v6l4 2" />
                </svg>3 min watch</span></div>
          </div>
        </article>

        <article class="card reveal" data-category="iui">
          <div class="video-wrap">
            <iframe src="https://www.youtube.com/embed/YOUR_ID_2?controls=1" loading="lazy" allowfullscreen
              title="Is IUI Right for You?"></iframe>
            <span class="card-badge">IUI</span>
          </div>
          <div class="card-body">
            <span class="card-tag">#IUITips</span>
            <h3 class="card-title">Is IUI Right for You?</h3>
            <div class="card-meta"><span class="card-meta-item"><svg width="11" height="11" viewBox="0 0 24 24"
                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10" />
                  <path d="M12 6v6l4 2" />
                </svg>4 min watch</span></div>
          </div>
        </article>

        <article class="card reveal" data-category="pcos">
          <div class="video-wrap">
            <iframe src="https://www.youtube.com/embed/YOUR_ID_3?controls=1" loading="lazy" allowfullscreen
              title="Managing Metabolic PCOS"></iframe>
            <span class="card-badge">PCOS</span>
          </div>
          <div class="card-body">
            <span class="card-tag">#PCOSCare</span>
            <h3 class="card-title">Managing Metabolic PCOS</h3>
            <div class="card-meta"><span class="card-meta-item"><svg width="11" height="11" viewBox="0 0 24 24"
                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10" />
                  <path d="M12 6v6l4 2" />
                </svg>5 min watch</span></div>
          </div>
        </article>

        <article class="card reveal" data-category="male ethics">
          <div class="video-wrap">
            <iframe src="https://www.youtube.com/embed/YOUR_ID_4?controls=1" loading="lazy" allowfullscreen
              title="Male Fertility Myths"></iframe>
            <span class="card-badge">Male · Ethical</span>
          </div>
          <div class="card-body">
            <span class="card-tag">#Andrology</span>
            <h3 class="card-title">Male Fertility Myths Busted</h3>
            <div class="card-meta"><span class="card-meta-item"><svg width="11" height="11" viewBox="0 0 24 24"
                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10" />
                  <path d="M12 6v6l4 2" />
                </svg>6 min watch</span></div>
          </div>
        </article>

        <article class="card reveal" data-category="ivf male">
          <div class="video-wrap">
            <iframe src="https://www.youtube.com/embed/YOUR_ID_5?controls=1" loading="lazy" allowfullscreen
              title="The Multi-cycle Journey"></iframe>
            <span class="card-badge">IVF</span>
          </div>
          <div class="card-body">
            <span class="card-tag">#IVFJourney</span>
            <h3 class="card-title">The Multi-cycle Journey</h3>
            <div class="card-meta"><span class="card-meta-item"><svg width="11" height="11" viewBox="0 0 24 24"
                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10" />
                  <path d="M12 6v6l4 2" />
                </svg>7 min watch</span></div>
          </div>
        </article>

        <article class="card reveal" data-category="ivf ethics">
          <div class="video-wrap">
            <iframe src="https://www.youtube.com/embed/YOUR_ID_6?controls=1" loading="lazy" allowfullscreen
              title="Transparency in ART Care"></iframe>
            <span class="card-badge">Ethical IVF</span>
          </div>
          <div class="card-body">
            <span class="card-tag">#EthicalIVF</span>
            <h3 class="card-title">Transparency in ART Care</h3>
            <div class="card-meta"><span class="card-meta-item"><svg width="11" height="11" viewBox="0 0 24 24"
                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10" />
                  <path d="M12 6v6l4 2" />
                </svg>4 min watch</span></div>
          </div>
        </article>

        <div class="empty-state" id="emptyState">
          <div class="empty-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#4f84ae"
              stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 2a9 9 0 1 0 0 18A9 9 0 0 0 12 2z" />
              <path d="M12 8v4" />
              <path d="M12 16h.01" />
            </svg></div>
          <h3>No stories found</h3>
          <p>Try selecting a different category.</p>
        </div>

      </div>
    </div>
  </div>

  <!-- TRUST BAND -->
  <section class="trust-band">
    <div class="trust-inner">
      <div class="trust-item">
        <div class="trust-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
          </svg></div>
        <div class="trust-text"><strong>Ethical Practice</strong><span>No unnecessary procedures</span></div>
      </div>
      <div class="trust-item">
        <div class="trust-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path
              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
          </svg></div>
        <div class="trust-text"><strong>Patient-First Care</strong><span>Compassionate every step</span></div>
      </div>
      <div class="trust-item">
        <div class="trust-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <polyline points="9 11 12 14 22 4" />
            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
          </svg></div>
        <div class="trust-text"><strong>Evidence-Based</strong><span>Latest clinical protocols</span></div>
      </div>
      <div class="trust-item">
        <div class="trust-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10" />
            <polyline points="12 6 12 12 16 14" />
          </svg></div>
        <div class="trust-text"><strong>24/7 Support</strong><span>Always here when you need us</span></div>
      </div>
    </div>
  </section>

  <!-- QUOTE -->
  <section class="quote-section">
    <div class="quote-inner">
      <span class="quote-mark">"</span>
      <p class="quote-text">Your success is our greatest achievement. Behind every video is a family that chose to hope
        — and a doctor who chose to listen.</p>
      <span class="quote-author">— Dr. Yuvraj Jadeja, Fertility Specialist</span><br>
      <a href="{{ route('frontend.contact') }}" class="quote-cta">Share Your Story <svg width="16" height="16"
          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
          stroke-linejoin="round">
          <path d="M5 12h14M12 5l7 7-7 7" />
        </svg></a>
    </div>
  </section>

  <a href="{{ route('frontend.quiz') }}" class="mobile-floating-cta">Get Started &rarr;</a>
@endsection