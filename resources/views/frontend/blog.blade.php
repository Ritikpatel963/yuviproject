@extends('frontend.layouts.app')

@section('title', 'blog Page')
@section('meta_description', 'Welcome to our website')
@section('meta_keywords', 'home, laravel, website')

@section('content')
  <!-- HERO -->
  <section class="hero_box2 reveal">
    <div class="hero-eyebrow">Health Blog</div>
    <h1>Latest <em>Health &amp; Fertility</em> Articles</h1>
    <p>Deep dives into reproductive health, wellness tips, and the latest clinical advancements from Dr. Yuvraj Jadeja.
    </p>
    <div class="hero-stats-box">
      <div class="stat-box">
        <span class="stat-num-box">150+</span>
        <span class="stat-label-box">Articles Published</span>
      </div>
      <div class="stat-box">
        <span class="stat-num-box">15 Yrs</span>
        <span class="stat-label-box">Clinical Experience</span>
      </div>
      <div class="stat-box">
        <span class="stat-num-box">10k+</span>
        <span class="stat-label-box">Monthly Readers</span>
      </div>
    </div>
  </section>

  <!-- MAIN LAYOUT -->
  <div class="blog_main">

    <!-- SIDEBAR -->
    <aside class="sidebar reveal">
      <p class="sidebar-title">Article Categories</p>
      <div class="filter-group">
        <button class="filter-btn active" data-filter="all">
          <span class="dot"></span> All Articles
          <span class="filter-count" id="count-all">6</span>
        </button>
        <button class="filter-btn" data-filter="fertility">
          <span class="dot"></span> Fertility
          <span class="filter-count">2</span>
        </button>
        <button class="filter-btn" data-filter="pregnancy">
          <span class="dot"></span> Pregnancy
          <span class="filter-count">1</span>
        </button>
        <button class="filter-btn" data-filter="wellness">
          <span class="dot"></span> Wellness
          <span class="filter-count">1</span>
        </button>
        <button class="filter-btn" data-filter="treatments">
          <span class="dot"></span> Treatments
          <span class="filter-count">2</span>
        </button>
      </div>
      <hr class="sidebar-divider">
      <div class="sidebar-note">
        <strong>Stay Updated.</strong><br>
        Explore our collection of expert-led articles on women's health, fertility treatments, and modern reproductive
        science.
      </div>
    </aside>

    <!-- VIDEO GRID -->
    <div>
      <div class="grid-header reveal">
        <h2>Recent Articles</h2>
        <span id="visibleCount">Showing 6 articles</span>
      </div>

      <div class="grid" id="blogGrid">

        <!-- Article 1 -->
        <article class="card reveal" data-category="fertility">
          <div class="card-img">
            <img src="https://images.unsplash.com/photo-1559757175-5700dde675bc?auto=format&fit=crop&q=80&w=700"
              alt="IVF Protocols">
          </div>
          <div class="card-body">
            <span class="card-tag" style="color:var(--crimson);">FERTILITY</span>
            <h3 class="card-title">Understanding Modern IVF Protocols</h3>
            <p style="color:var(--slate); font-size:0.9rem; margin-bottom:1rem; line-height:1.6;">A comprehensive dive
              into how individualized ovarian stimulation protocols are turning complex cases into success stories.</p>
            <div class="card-hashtags"><span>#IVFSuccess</span> <span>#Fertility</span> <span>#MedTech</span></div>
            <div class="card-meta"
              style="justify-content:space-between; border-top:1px solid rgba(184,36,48,0.1); padding-top:1.2rem; margin-top:auto;">
              <span class="card-meta-item">Oct 12, 2023</span>
              <a href="{{ route('frontend.blogDetails') }}"
                style="text-decoration:none; color:var(--blue); font-weight:600; font-size:0.85rem; display:flex; align-items:center; gap:0.4rem;">Read
                Article &rarr;</a>
            </div>
          </div>
        </article>

        <!-- Article 2 -->
        <article class="card reveal" data-category="pregnancy">
          <div class="card-img">
            <img src="https://images.unsplash.com/photo-1516627145497-ae6968895b74?auto=format&fit=crop&q=80&w=700"
              alt="PCOS Care">
          </div>
          <div class="card-body">
            <span class="card-tag" style="color:var(--crimson);">PREGNANCY</span>
            <h3 class="card-title">Managing PCOS For Conception</h3>
            <p style="color:var(--slate); font-size:0.9rem; margin-bottom:1rem; line-height:1.6;">Managing severe PCOS
              requires a structured multidisciplinary approach ranging from lifestyle diets to medical interventions.
            </p>
            <div class="card-hashtags"><span>#PCOS</span> <span>#Wellness</span> <span>#Conception</span></div>
            <div class="card-meta"
              style="justify-content:space-between; border-top:1px solid rgba(184,36,48,0.1); padding-top:1.2rem; margin-top:auto;">
              <span class="card-meta-item">Nov 04, 2023</span>
              <a href="{{ route('frontend.blogDetails') }}"
                style="text-decoration:none; color:var(--blue); font-weight:600; font-size:0.85rem; display:flex; align-items:center; gap:0.4rem;">Read
                Article &rarr;</a>
            </div>
          </div>
        </article>

        <!-- Article 3 -->
        <article class="card reveal" data-category="wellness">
          <div class="card-img">
            <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&q=80&w=700"
              alt="Nutrition">
          </div>
          <div class="card-body">
            <span class="card-tag" style="color:var(--crimson);">WELLNESS</span>
            <h3 class="card-title">The Ultimate Guide to Pre-Pregnancy Nutrition</h3>
            <p style="color:var(--slate); font-size:0.9rem; margin-bottom:1.5rem; line-height:1.6;">Discover the
              holistic diet changes that both partners can make to naturally boost reproductive capacity and health.</p>
            <div class="card-meta"
              style="justify-content:space-between; border-top:1px solid rgba(184,36,48,0.1); padding-top:1.2rem; margin-top:auto;">
              <span class="card-meta-item">Dec 18, 2023</span>
              <a href="{{ route('frontend.blogDetails') }}"
                style="text-decoration:none; color:var(--blue); font-weight:600; font-size:0.85rem; display:flex; align-items:center; gap:0.4rem;">Read
                Article &rarr;</a>
            </div>
          </div>
        </article>

        <!-- Article 4 -->
        <article class="card reveal" data-category="treatments">
          <div class="card-img">
            <img src="https://images.unsplash.com/photo-1542385151-efd9000785a0?auto=format&fit=crop&q=80&w=700"
              alt="Ovarian Reserve">
          </div>
          <div class="card-body">
            <span class="card-tag" style="color:var(--crimson);">TREATMENTS</span>
            <h3 class="card-title">Decoding Ovarian Reserve Tests</h3>
            <p style="color:var(--slate); font-size:0.9rem; margin-bottom: 1.5rem; line-height:1.6;">Understanding what
              AMH and AFC values actually mean for your personal biological clock and family planning decisions.</p>
            <div class="card-meta"
              style="justify-content:space-between; border-top:1px solid rgba(184,36,48,0.1); padding-top:1.2rem; margin-top:auto;">
              <span class="card-meta-item">Jan 02, 2024</span>
              <a href="{{ route('frontend.blogDetails') }}"
                style="text-decoration:none; color:var(--blue); font-weight:600; font-size:0.85rem; display:flex; align-items:center; gap:0.4rem;">Read
                Article &rarr;</a>
            </div>
          </div>
        </article>

        <!-- Article 5 -->
        <article class="card reveal" data-category="fertility">
          <div class="card-img">
            <img src="https://images.unsplash.com/photo-1576091160550-2173bdd99602?auto=format&fit=crop&q=80&w=700"
              alt="Male Fertility">
          </div>
          <div class="card-body">
            <span class="card-tag" style="color:var(--crimson);">FERTILITY</span>
            <h3 class="card-title">Male Fertility Myths Busted</h3>
            <p style="color:var(--slate); font-size:0.9rem; margin-bottom: 1.5rem; line-height:1.6;">Dr. Yuvi breaks
              down common misconceptions and explains new ICSI/TESA options for severe male factor infertility.</p>
            <div class="card-meta"
              style="justify-content:space-between; border-top:1px solid rgba(184,36,48,0.1); padding-top:1.2rem; margin-top:auto;">
              <span class="card-meta-item">Feb 15, 2024</span>
              <a href="{{ route('frontend.blogDetails') }}"
                style="text-decoration:none; color:var(--blue); font-weight:600; font-size:0.85rem; display:flex; align-items:center; gap:0.4rem;">Read
                Article &rarr;</a>
            </div>
          </div>
        </article>

        <!-- Article 6 -->
        <article class="card reveal" data-category="treatments">
          <div class="card-img">
            <img src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?auto=format&fit=crop&q=80&w=700"
              alt="Multi-cycle Support">
          </div>
          <div class="card-body">
            <span class="card-tag" style="color:var(--crimson);">TREATMENTS</span>
            <h3 class="card-title">The Multi-cycle Journey</h3>
            <p style="color:var(--slate); font-size:0.9rem; margin-bottom: 1.5rem; line-height:1.6;">A compassionate
              look into how endurance and advancing lab technology unite to overcome early IVF treatment failures.</p>
            <div class="card-meta"
              style="justify-content:space-between; border-top:1px solid rgba(184,36,48,0.1); padding-top:1.2rem; margin-top:auto;">
              <span class="card-meta-item">Mar 10, 2024</span>
              <a href="{{ route('frontend.blogDetails') }}"
                style="text-decoration:none; color:var(--blue); font-weight:600; font-size:0.85rem; display:flex; align-items:center; gap:0.4rem;">Read
                Article &rarr;</a>
            </div>
          </div>
        </article>

        <!-- Empty State -->
        <div class="empty-state" id="emptyState">
          <div class="empty-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#4f84ae" stroke-width="1.5"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 2a9 9 0 1 0 0 18A9 9 0 0 0 12 2z" />
              <path d="M12 8v4" />
              <path d="M12 16h.01" />
            </svg>
          </div>
          <h3>No articles found</h3>
          <p>Try selecting a different category.</p>
        </div>

      </div>
    </div>
  </div>

  <!-- TRUST BAND -->
  <section class="trust-band">
    <div class="trust-inner">
      <div class="trust-item">
        <div class="trust-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
          </svg>
        </div>
        <div class="trust-text">
          <strong>Ethical Practice</strong>
          <span>No unnecessary procedures</span>
        </div>
      </div>
      <div class="trust-item">
        <div class="trust-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path
              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
          </svg>
        </div>
        <div class="trust-text">
          <strong>Patient-First Care</strong>
          <span>Compassionate every step</span>
        </div>
      </div>
      <div class="trust-item">
        <div class="trust-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <polyline points="9 11 12 14 22 4" />
            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
          </svg>
        </div>
        <div class="trust-text">
          <strong>Evidence-Based</strong>
          <span>Latest clinical protocols</span>
        </div>
      </div>
      <div class="trust-item">
        <div class="trust-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10" />
            <polyline points="12 6 12 12 16 14" />
          </svg>
        </div>
        <div class="trust-text">
          <strong>24/7 Support</strong>
          <span>Always here when you need us</span>
        </div>
      </div>
    </div>
  </section>

  <!-- QUOTE / CTA -->
  <section class="quote-section">
    <div class="quote-inner">
      <span class="quote-mark">"</span>
      <p class="quote-text">Empowering your health journey through expert knowledge. Knowledge is the first step toward
        a healthy journey. Read, learn, and empower your reproductive health.</p>
      <span class="quote-author">— Dr. Yuvraj Jadeja, Medical Director</span>
      <br>
      <a href="{{ route('frontend.contact') }}" class="quote-cta">
        Subscribe to Blog
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
          stroke-linecap="round" stroke-linejoin="round">
          <path d="M5 12h14M12 5l7 7-7 7" />
        </svg>
      </a>
    </div>
  </section>

  <!-- FOOTER -->




  <a href="{{ route('frontend.quiz') }}" class="mobile-floating-cta">Get Started &rarr;</a>
@endsection