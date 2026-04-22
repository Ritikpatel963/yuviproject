@extends('frontend.layouts.app')

@section('title', 'service-details Page')
@section('meta_description', 'Welcome to our website')
@section('meta_keywords', 'home, laravel, website')

@section('content')
  <!-- HERO -->
  <div class="hero-accent" id="heroAccent"></div>
  <section class="hero reveal">
    <div class="hero-inner">
      <div class="hero-text">
        <div class="hero-breadcrumb">
          <a href="{{ route('frontend.services') }}">Services</a>
          <span class="hero-breadcrumb-sep">/</span>
          <span id="heroTag">IVF & ART</span>
        </div>
        <div class="hero-eyebrow" id="heroEyebrow">Advanced Protocol</div>
        <h1 id="heroTitle">IVF & Assisted <em>Reproduction</em></h1>
        <p class="hero-lead" id="heroLead">Comprehensive ART solutions built on advanced embryology, transparent
          success-rate reporting, and individualized stimulation protocols — tailored entirely around you.</p>
        <div class="hero-pills" id="heroPills">
          <span class="hero-pill">IUI</span>
          <span class="hero-pill">IVF / ICSI</span>
          <span class="hero-pill">Laser Hatching</span>
          <span class="hero-pill">Embryo Transfer</span>
          <span class="hero-pill">PGT-A Testing</span>
        </div>
      </div>
      <div class="hero-img-wrap">
        <img id="heroImg"
          src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&q=80&w=700"
          alt="Service image">
      </div>
    </div>
  </section>

  <!-- MAIN -->
  <div class="main-wrap">

    <!-- ── LEFT CONTENT ── -->
    <div class="content-col">

      <!-- Stats -->
      <div class="stats-row reveal" id="statsRow">
        <div class="stat-card"><span class="stat-num">68%</span><span class="stat-label">Live Birth Rate</span></div>
        <div class="stat-card"><span class="stat-num">3,200+</span><span class="stat-label">Cycles Performed</span></div>
        <div class="stat-card"><span class="stat-num">15+</span><span class="stat-label">Years Experience</span></div>
      </div>

      <!-- Approach -->
      <div class="content-section reveal">
        <h2>The Approach</h2>
        <p id="approachP1">Our IVF pathway begins with a thorough ovarian reserve assessment and semen analysis to
          determine the ideal stimulation protocol — whether a standard antagonist cycle, a mini-IVF, or a natural-cycle
          approach.</p>
        <p id="approachP2">Fertilization is performed in our in-house embryology lab using conventional IVF or ICSI, with
          laser-assisted hatching available where indicated. Embryos are cultured to blastocyst stage and graded using
          AI-assisted morphology scoring for the highest implantation potential.</p>
      </div>

      <!-- Protocol -->
      <div class="protocol-block reveal">
        <h3>Typical Protocol</h3>
        <ul class="protocol-steps" id="protocolSteps">
          <li class="protocol-step">
            <span class="protocol-num">01</span>
            <div class="protocol-step-body">
              <div class="protocol-step-title">Ovarian Stimulation</div>
              <div class="protocol-step-desc">Individualized FSH/LH dosing monitored every 2–3 days by ultrasound and
                estradiol.</div>
            </div>
          </li>
          <li class="protocol-step">
            <span class="protocol-num">02</span>
            <div class="protocol-step-body">
              <div class="protocol-step-title">Egg Retrieval & Fertilization</div>
              <div class="protocol-step-desc">Ultrasound-guided egg collection under sedation, followed by ICSI or
                conventional IVF in our embryology lab.</div>
            </div>
          </li>
          <li class="protocol-step">
            <span class="protocol-num">03</span>
            <div class="protocol-step-body">
              <div class="protocol-step-title">Embryo Culture & Transfer</div>
              <div class="protocol-step-desc">Blastocyst culture for 5–6 days, AI morphology grading, and a seamless
                single embryo transfer.</div>
            </div>
          </li>
          <li class="protocol-step">
            <span class="protocol-num">04</span>
            <div class="protocol-step-body">
              <div class="protocol-step-title">Luteal Support & Beta hCG</div>
              <div class="protocol-step-desc">Tailored progesterone support with a serum beta hCG test at Day 12
                post-transfer.</div>
            </div>
          </li>
        </ul>
      </div>

      <!-- What to Expect -->
      <div class="content-section reveal">
        <h2>What to Expect</h2>
        <p id="expectIntro">Most IVF cycles span 10–14 days of stimulation followed by retrieval and a 5-day culture
          period. Here is what your timeline typically looks like:</p>
        <ul class="expect-list" id="expectList">
          <li class="expect-item">
            <div class="expect-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)"
                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 11 12 14 22 4" />
              </svg></div>
            Day 1–2: Baseline scan and blood work to confirm readiness to start.
          </li>
          <li class="expect-item">
            <div class="expect-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)"
                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 11 12 14 22 4" />
              </svg></div>
            Day 2–12: Daily or alternate-day monitoring; injections self-administered at home.
          </li>
          <li class="expect-item">
            <div class="expect-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)"
                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 11 12 14 22 4" />
              </svg></div>
            Day 12–14: Trigger injection followed by egg retrieval under sedation (~20 min).
          </li>
          <li class="expect-item">
            <div class="expect-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)"
                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 11 12 14 22 4" />
              </svg></div>
            Day 17–19: Embryo transfer — a gentle, scan-guided procedure requiring no anaesthesia.
          </li>
          <li class="expect-item">
            <div class="expect-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)"
                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 11 12 14 22 4" />
              </svg></div>
            Day 29: Pregnancy blood test (beta hCG).
          </li>
        </ul>
      </div>

      <!-- Safety -->
      <div class="content-section reveal">
        <h2>Safety & Ethical Practice</h2>
        <p>We prioritize your health and safety above all else. Our clinic maintains strict adherence to ethical
          guidelines — you are fully informed of every risk and success probability before treatment begins. No
          unnecessary procedures. Ever.</p>
        <p>All IVF cycles are closely monitored using real-time ultrasound and hormonal assays, ensuring we can adjust
          protocols immediately for your safety and comfort.</p>
      </div>

    </div>

    <!-- SIDEBAR COMPONENT -->

    <aside class="sidebar" id="sidebar">

      <!-- CTA -->
      <div class="sidebar-cta reveal">
        <h4>Ready to consult?</h4>
        <p>Speak with a coordinator or book a direct appointment — no pressure, just clarity.</p>
        <a href="{{ route('frontend.contact') }}" class="btn-cta-white">Book Appointment</a>
        <a href="https://wa.me/919999999999" target="_blank" rel="noopener" class="btn-cta-outline">WhatsApp Us</a>
      </div>

      <!-- Availability -->
      <div class="sidebar-card reveal delay-1">
        <div class="avail-badge">
          <span class="avail-dot"></span>
          Currently accepting new patients
        </div>
      </div>

      <!-- Related Pathways -->
      <div class="sidebar-card reveal delay-1">
        <h4>Related Pathways</h4>
        <ul class="related-list" id="relatedList">
          <li class="related-item"><a href="{{ route('frontend.serviceDetail') }}?s=pcos" class="related-link">PCOS
              Management <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg></a></li>
          <li class="related-item"><a href="{{ route('frontend.serviceDetail') }}?s=male" class="related-link">Male Factor
              Fertility <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg></a></li>
          <li class="related-item"><a href="{{ route('frontend.serviceDetail') }}?s=preservation"
              class="related-link">Fertility Preservation <svg width="13" height="13" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg></a></li>
          <li class="related-item"><a href="{{ route('frontend.serviceDetail') }}?s=endoscopy" class="related-link">Gynae
              Endoscopy <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg></a></li>
        </ul>
      </div>

      <!-- Trust -->
      <div class="sidebar-card reveal delay-2">
        <h4>Our Promise</h4>
        <div class="trust-pills">
          <div class="trust-pill">
            <div class="trust-pill-icon">
              <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
              </svg>
            </div>
            Ethical — no unnecessary procedures
          </div>
          <div class="trust-pill">
            <div class="trust-pill-icon">
              <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 11 12 14 22 4" />
                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
              </svg>
            </div>
            Evidence-based clinical protocols
          </div>
          <div class="trust-pill">
            <div class="trust-pill-icon">
              <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <polyline points="12 6 12 12 16 14" />
              </svg>
            </div>
            24/7 support throughout your journey
          </div>
        </div>
      </div>

      <!-- Quick Contact -->
      <div class="quick-card"
        style="background: var(--midnight); color: #fff; padding:1.5rem; border-radius:12px; margin-top:1rem;">
        <p
          style="font-size:0.65rem; font-weight:700; letter-spacing:1px; text-transform:uppercase; color:var(--blue-mid); margin-bottom:1rem;">
          Quick Support</p>
        <div style="display:flex; align-items:center; gap:0.75rem; margin-bottom:1rem;">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--blue-mid)" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path
              d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
          </svg>
          <div style="font-size:0.8rem;">
            <strong style="display:block;">WhatsApp</strong>
            <a href="https://wa.me/919999999999" style="color:var(--blue-mid); text-decoration:none;">+91 999 999
              9999</a>
          </div>
        </div>
        <div style="display:flex; align-items:center; gap:0.75rem;">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--blue-mid)" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
            <polyline points="22,6 12,13 2,6" />
          </svg>
          <div style="font-size:0.8rem;">
            <strong style="display:block;">Email</strong>
            <a href="mailto:doctoryuvi@nimaaya.com"
              style="color:var(--blue-mid); text-decoration:none;">doctoryuvi@nimaaya.com</a>
          </div>
        </div>
      </div>
    </aside>

    <!-- Sidebar Toggle Trigger -->
    <!-- <div class="sidebar-toggle-btn" id="sidebarToggle">
        Explore Info
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
          stroke-linecap="round" stroke-linejoin="round">
          <path d="M15 18l-6-6 6-6" />
        </svg>
      </div> -->
  </div>

  <!-- PROCESS -->
  <section class="process-section">
    <div class="process-inner">
      <div class="process-header reveal">
        <h2>How your <em>journey</em><br>unfolds with us.</h2>
        <p>A clear, step-by-step process so you always know what to expect — no surprises, no pressure.</p>
      </div>
      <div class="process-steps reveal">
        <div class="step">
          <div class="step-num">01</div>
          <p class="step-title">Initial Consultation</p>
          <p class="step-desc">Meet Dr. Yuvi for a comprehensive first discussion about your history, goals, and the
            best path forward.</p>
        </div>
        <div class="step">
          <div class="step-num">02</div>
          <p class="step-title">Diagnostic Workup</p>
          <p class="step-desc">Thorough investigations for both partners including hormonal, ultrasound, and genetic
            profiling as needed.</p>
        </div>
        <div class="step">
          <div class="step-num">03</div>
          <p class="step-title">Personalised Protocol</p>
          <p class="step-desc">A tailored treatment plan designed specifically around your diagnosis, age, and family
            goals.</p>
        </div>
        <div class="step">
          <div class="step-num">04</div>
          <p class="step-title">Ongoing Support</p>
          <p class="step-desc">Continuous monitoring and emotional support at every cycle, every step, until your goal
            is achieved.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta-section">
    <div class="cta-inner reveal">
      <div class="cta-eyebrow">Still Unsure?</div>
      <h2>Let's find the right <em>pathway</em> for you.</h2>
      <p>Our patient coordinators are here to listen without judgment and guide you toward the most appropriate care —
        at no pressure, whatsoever.</p>
      <div class="cta-btns">
        <a href="{{ route('frontend.contact') }}" class="btn-primary-dark">
          Book Consultation
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14M12 5l7 7-7 7" />
          </svg>
        </a>
        <a href="https://wa.me/919999999999" target="_blank" rel="noopener" class="btn-outline">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path
              d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
          </svg>
          WhatsApp Inquiry
        </a>
      </div>
    </div>
  </section>

  <!-- FOOTER -->






  <a href="{{ route('frontend.quiz') }}" class="mobile-floating-cta">Get Started &rarr;</a>
@endsection