<!-- HERO -->
@extends('frontend.layouts.app')

@section('title', 'Home Page')
@section('meta_description', 'Welcome to our website')
@section('meta_keywords', 'home, laravel, website')

@section('content')
  <section class="hero-box5">
    <div class="hero-glow-1_box5"></div>
    <div class="hero-glow-2_box5"></div>
    <div class="hero-inner-box5">
      <div class="hero-left-box5 reveal-box5 reveal delay-2">
        <div class="hero-eyebrow-box5">
          <span class="hero-eyebrow-dot-box5"></span>
          Ethical Fertility Care · Ahmedabad
        </div>
        <h1>Science, Sensitivity<br>&amp; <em>Ethics</em><br>in Fertility.</h1>
        <p class="hero-lead-box5">Evidence-based fertility and women's health — designed precisely around you, your hopes,
          and your future family.</p>
        <div class="hero-actions-box5">
          <a href="{{ route('frontend.contact') }}" class="btn-hero-primary">
            Book Consultation
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg>
          </a>
          <a href="{{ route('frontend.services') }}" class="btn-hero-ghost">
            Explore Services
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg>
          </a>
        </div>
        <div class="hero-trust-box5">
          <div class="hero-trust-item-box5">
            <div class="hero-trust-icon-box5">
              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="rgba(79,132,174,0.9)" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
              </svg>
            </div>
            Ethics-led practice
          </div>
          <div class="hero-trust-item-box5">
            <div class="hero-trust-icon-box5">
              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="rgba(79,132,174,0.9)" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 11 12 14 22 4" />
              </svg>
            </div>
            Evidence-based protocols
          </div>
          <div class="hero-trust-item-box5">
            <div class="hero-trust-icon-box5">
              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="rgba(79,132,174,0.9)" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <polyline points="12 6 12 12 16 14" />
              </svg>
            </div>
            24/7 patient support
          </div>
        </div>
      </div>

      <div class="hero-right-box5 reveal delay-2">
        <div class="doctor-card-box5">
          <img
            src="https://img-cdn.publive.online/filters:format(webp)/english-betterindia/media/post_attachments/uploads/2022/10/MinistryOfMemories_Headshots-13_websize-1-min-1665749722.jpg"
            alt="Dr. Yuvraj Jadeja">
          <div class="doctor-card-overlay-box5"></div>
          <div class="doctor-card-info-box5">
            <div class="doctor-card-name-box5">Dr. Yuvraj Jadeja</div>
            <div class="doctor-card-role-box5">Reproductive Medicine Specialist</div>
          </div>
        </div>
        <div class="hero-stats-row-box5">
          <div class="hero-stat-box5"><span class="hero-stat-num-box5">15+</span><span class="hero-stat-label-box5">Years
              Experience</span></div>
          <div class="hero-stat-box5"><span class="hero-stat-num-box5">98%</span><span
              class="hero-stat-label-box5">Satisfaction</span></div>
          <div class="hero-stat-box5"><span class="hero-stat-num-box5">5K+</span><span
              class="hero-stat-label-box5">Families Helped</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- TRUST BAND -->
  <div class="trust-band-1">
    <div class="trust-inner-1">
      <div class="trust-item-1">
        <div class="trust-icon-1"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
          </svg></div>
        <div class="trust-text-1"><strong>Ethical Practice</strong><span>No unnecessary procedures</span></div>
      </div>
      <div class="trust-item-1">
        <div class="trust-icon-1"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="9 11 12 14 22 4" />
            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
          </svg></div>
        <div class="trust-text-1"><strong>Evidence-Based</strong><span>Latest clinical protocols</span></div>
      </div>
      <div class="trust-item-1">
        <div class="trust-icon-1"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path
              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
          </svg></div>
        <div class="trust-text-1"><strong>Patient-First</strong><span>Compassionate every step</span></div>
      </div>
      <div class="trust-item-1">
        <div class="trust-icon-1"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10" />
            <polyline points="12 6 12 12 16 14" />
          </svg></div>
        <div class="trust-text-1"><strong>24/7 Support</strong><span>Always here when needed</span></div>
      </div>
    </div>
  </div>

  <!-- DIFFERENTIATOR -->
  <section class="diff-section">
    <div class="diff-inner">
      <div class="diff-grid">
        <div class="diff-left reveal">
          <h2>A Different Kind<br>of <em>Practice</em></h2>
          <p>We believe fertility is personal, not a protocol. Discover a space where rigorous science meets deep
            compassion — where every decision is made for you, not just about you.</p>
          <a href="{{ route('frontend.about') }}" class="btn-crimson-outline">About Dr. Yuvi <svg width="13" height="13"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg></a>
        </div>
        <div class="diff-features reveal delay-1">
          <div class="diff-feature">
            <div class="diff-feature-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8" />
                <line x1="21" y1="21" x2="16.65" y2="16.65" />
              </svg></div>
            <h4>Diagnosis First</h4>
            <p>No assumptions. Full clarity before moving forward.</p>
          </div>
          <div class="diff-feature">
            <div class="diff-feature-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path
                  d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
              </svg></div>
            <h4>Holistic Support</h4>
            <p>Science, technology, and emotional support unified.</p>
          </div>
          <div class="diff-feature">
            <div class="diff-feature-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
              </svg></div>
            <h4>Ethics-Led</h4>
            <p>Transparent, patient-aligned clinical decisions always.</p>
          </div>
          <div class="diff-feature">
            <div class="diff-feature-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="3" width="20" height="14" rx="2" />
                <line x1="8" y1="21" x2="16" y2="21" />
                <line x1="12" y1="17" x2="12" y2="21" />
              </svg></div>
            <h4>Advanced Lab</h4>
            <p>State-of-the-art embryology and surgical setups.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="services-section">
    <div class="section-wrap">
      <div class="section-header reveal">
        <h2>Services Designed<br>Around You</h2>
        <div class="section-header-right">
          <p>Every pathway is built with ethical clarity and clinical precision — from first consult to new beginnings.
          </p>
          <a href="{{ route('frontend.services') }}" class="btn-primary-dark">View All Services <svg width="13"
              height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg></a>
        </div>
      </div>
      <div class="services-list">
        <a href="{{ route('frontend.serviceDetail') }}?s=ivf" class="svc-row reveal"><span class="svc-num">01</span>
          <div class="svc-content">
            <div class="svc-title">IVF & Assisted Reproductive Techniques</div>
            <div class="svc-desc">Personalized, ethical IVF with tiered protocols, transparent probabilities and informed
              decisions at every step.</div>
          </div>
          <div class="svc-pills"><span class="svc-pill">IVF / ICSI</span><span class="svc-pill">IUI</span><span
              class="svc-pill">PGT-A</span></div><svg class="svc-arrow" width="18" height="18" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14M12 5l7 7-7 7" />
          </svg>
        </a>
        <a href="{{ route('frontend.serviceDetail') }}?s=pcos" class="svc-row reveal delay-1"><span
            class="svc-num">02</span>
          <div class="svc-content">
            <div class="svc-title">Intrauterine Insemination</div>
            <div class="svc-desc">Evidence-based, minimally invasive pathway with clear criteria on when it helps — and
              when to escalate.Root-cause hormonal management through lifestyle plans, ovulation induction, and
              targeted therapy.</div>
          </div>
          <div class="svc-pills"><span class="svc-pill">Hormonal Therapy</span><span class="svc-pill">Ovulation
              Induction</span></div><svg class="svc-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14M12 5l7 7-7 7" />
          </svg>
        </a>
        <a href="{{ route('frontend.serviceDetail') }}?s=male" class="svc-row reveal delay-2"><span
            class="svc-num">03</span>
          <div class="svc-content">
            <div class="svc-title">Fertility Preservation</div>
            <div class="svc-desc">Egg freezing with counseling on timelines, ovarian reserve, and realistic outlooks
              tailored to you.</div>
          </div>
          <div class="svc-pills"><span class="svc-pill">Micro-TESE</span><span class="svc-pill">DNA Frag</span></div><svg
            class="svc-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14M12 5l7 7-7 7" />
          </svg>
        </a>
        <a href="{{ route('frontend.serviceDetail') }}?s=preservation" class="svc-row reveal"><span
            class="svc-num">04</span>
          <div class="svc-content">
            <div class="svc-title">PCOS & Hormonal Care</div>
            <div class="svc-desc">Root-cause approach across lifestyle, metabolic health, and individualized medical
              plans.</div>
          </div>
          <div class="svc-pills"><span class="svc-pill">Egg Freezing</span><span class="svc-pill">Oncofertility</span>
          </div><svg class="svc-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14M12 5l7 7-7 7" />
          </svg>
        </a>
        <a href="{{ route('frontend.serviceDetail') }}?s=obstetrics" class="svc-row reveal delay-1"><span
            class="svc-num">05</span>
          <div class="svc-content">
            <div class="svc-title">Male Fertility</div>
            <div class="svc-desc">Dedicated andrology diagnostics and targeted treatment strategies with clear
              communication.
            </div>
          </div>
          <div class="svc-pills"><span class="svc-pill">Fetal Monitoring</span><span class="svc-pill">Preeclampsia</span>
          </div><svg class="svc-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14M12 5l7 7-7 7" />
          </svg>
        </a>
        <a href="{{ route('frontend.serviceDetail') }}?s=endoscopy" class="svc-row reveal delay-2"><span
            class="svc-num">06</span>
          <div class="svc-content">
            <div class="svc-title">High-Risk Pregnancy </div>
            <div class="svc-desc">Specialist monitoring and compassionate support throughout complex pregnancies.</div>
          </div>
          <div class="svc-pills"><span class="svc-pill">Laparoscopy</span><span class="svc-pill">Hysteroscopy</span>
          </div>
          <svg class="svc-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14M12 5l7 7-7 7" />
          </svg>
        </a>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section class="process-section-con">
    <div class="process-inner-con">
      <div class="process-header-con reveal-con">
        <h2>The Journey<br>to <em>Clarity.</em></h2>
        <p>A clear, step-by-step process so you always know what to expect — no surprises, no pressure.</p>
      </div>
      <div class="process-steps-con reveal-con">
        <div class="step-con">
          <div class="step-num-con">I</div>
          <p class="step-title-con">Understanding You</p>
          <p class="step-desc-con">We begin with your story, history, and goals — no assumptions.</p>
        </div>
        <div class="step-con">
          <div class="step-num-con">II</div>
          <p class="step-title-con">Diagnosis</p>
          <p class="step-desc-con">Comprehensive tests with transparent, plain-language explanations.</p>
        </div>
        <div class="step-con">
          <div class="step-num-con">III</div>
          <p class="step-title-con">Your Plan</p>
          <p class="step-desc-con">Options, risks, and probabilities — aligned to your life and goals.</p>
        </div>
        <div class="step-con">
          <div class="step-num-con">IV</div>
          <p class="step-title-con">Treatment</p>
          <p class="step-desc-con">Evidence-based care with continuous monitoring and guidance.</p>
        </div>
        <div class="step-con">
          <div class="step-num-con">V</div>
          <p class="step-title-con">Ongoing Support</p>
          <p class="step-desc-con">Medical follow-ups and emotional support all the way through.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- STORIES -->
  <section class="stories-section">
    <div class="section-wrap">
      <div class="section-header reveal">
        <div>
          <div
            style="display:inline-flex;align-items:center;gap:0.5rem;background:var(--crimson-light);color:var(--crimson);font-size:0.7rem;font-weight:600;letter-spacing:2px;text-transform:uppercase;padding:0.35rem 1rem;border-radius:50px;margin-bottom:0.8rem;">
            Real Results</div>
          <h2>Families <em
              style="font-family:'DM Serif Display',serif;font-style:italic;color:var(--gold);">Reimagined.</em></h2>
        </div>
        <div class="section-header-right">
          <p>Hear directly from couples who navigated the most complex odds and successfully built their families.</p>
          <a href="{{ route('frontend.successStories') }}" class="btn-primary-dark">Browse All Stories <svg width="13"
              height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg></a>
        </div>
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
      </div>
    </div>
  </section>

  <!-- BLOG PREVIEW -->
  <section class="blog-list-section">
    <div class="blog-list-inner">
      <div class="section-header reveal">
        <div>
          <div
            style="display:inline-flex;align-items:center;gap:0.5rem;background:var(--blue-light);color:var(--blue-dark);font-size:0.7rem;font-weight:600;letter-spacing:2px;text-transform:uppercase;padding:0.35rem 1rem;border-radius:50px;margin-bottom:0.8rem;">
            Health Insights</div>
          <h2>Latest from<br>the <em>Blog.</em></h2>
        </div>
        <div class="section-header-right">
          <p>Evidence-based articles, patient guides, and clinical insights to help you navigate your health journey.</p>
          <a href="{{ route('frontend.blog') }}" class="btn-primary-dark">View All Articles <svg width="13" height="13"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg></a>
        </div>
      </div>
      <div class="blog-list-grid">
        <article class="blog-list-card reveal">
          <div class="blog-list-img-wrap">
            <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&q=80&w=600"
              alt="Blog 1" class="blog-list-img">
            <span class="blog-list-badge">IVF Insights</span>
          </div>
          <div class="blog-list-content">
            <div class="blog-list-meta">Oct 12, 2026 · 5 min read</div>
            <h3 class="blog-list-title">Understanding IVF Success Rates: What to Ask Your Doctor</h3>
            <p class="blog-list-excerpt">Demystifying how clinics report success rates and what actually matters for your
              unique diagnosis.</p>
            <a href="#" class="blog-list-link">Read Article <svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg></a>
          </div>
        </article>
        <article class="blog-list-card reveal delay-1">
          <div class="blog-list-img-wrap">
            <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&q=80&w=600"
              alt="Blog 2" class="blog-list-img">
            <span class="blog-list-badge">Women's Health</span>
          </div>
          <div class="blog-list-content">
            <div class="blog-list-meta">Sep 28, 2026 · 4 min read</div>
            <h3 class="blog-list-title">PCOS and Fertility: How Diet Impacts Ovulation</h3>
            <p class="blog-list-excerpt">Actionable metabolic, dietary, and lifestyle changes that can improve ovulation
              in PCOS patients.</p>
            <a href="#" class="blog-list-link">Read Article <svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg></a>
          </div>
        </article>
        <article class="blog-list-card reveal delay-2">
          <div class="blog-list-img-wrap">
            <img src="https://images.unsplash.com/photo-1631549916768-4119b2e5f926?auto=format&fit=crop&q=80&w=600"
              alt="Blog 3" class="blog-list-img">
            <span class="blog-list-badge">Male Fertility</span>
          </div>
          <div class="blog-list-content">
            <div class="blog-list-meta">Sep 15, 2026 · 6 min read</div>
            <h3 class="blog-list-title">Male Factor Infertility: Beyond the Semen Analysis</h3>
            <p class="blog-list-excerpt">Why advanced diagnostics like DNA fragmentation are changing how we treat male
              fertility issues.</p>
            <a href="#" class="blog-list-link">Read Article <svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg></a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="faq-section">
    <div class="faq-inner">
      <div class="faq-left reveal">
        <h2>Common Patient<br><em>Questions</em></h2>
        <p>Seeking treatment can feel overwhelming. We believe in absolute transparency — no question is too small, and no
          concern goes unanswered.</p>
        <a href="{{ route('frontend.contact') }}" class="btn-outline-dark">Ask a Coordinator <svg width="13" height="13"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round">
            <path d="M5 12h14M12 5l7 7-7 7" />
          </svg></a>
      </div>
      <div class="faq-list reveal delay-1">
        <div class="faq-item"><button class="faq-question">How long does an IVF cycle typically take?<div
              class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)"
                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></div></button>
          <div class="faq-answer">
            <p>Typically 4–8 weeks in total — covering initial consultations, ovarian stimulation (10–14 days), egg
              retrieval, fertilization, and embryo transfer.</p>
          </div>
        </div>
        <div class="faq-item"><button class="faq-question">Is financial counseling available?<div class="faq-icon"><svg
                width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></div></button>
          <div class="faq-answer">
            <p>Absolutely. We believe in zero hidden costs. Our financial coordinators establish a clear, transparent cost
              roadmap before any treatment begins — no surprises.</p>
          </div>
        </div>
        <div class="faq-item"><button class="faq-question">What should I bring to my first appointment?<div
              class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)"
                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></div></button>
          <div class="faq-answer">
            <p>Any previous medical records, prior fertility test results, a list of current medications, and history of
              previous treatments. We'll walk through everything together.</p>
          </div>
        </div>
        <div class="faq-item"><button class="faq-question">Do both partners need to attend?<div class="faq-icon"><svg
                width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></div></button>
          <div class="faq-answer">
            <p>For the initial consultation, we strongly encourage both partners to attend for comprehensive assessment.
              Follow-ups can often be managed individually.</p>
          </div>
        </div>
        <div class="faq-item"><button class="faq-question">How is success rate reported honestly?<div class="faq-icon">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg>
            </div></button>
          <div class="faq-answer">
            <p>We report live birth rate per cycle — not just clinical pregnancy rate. We also share age-stratified data
              so your personal probability is always clear before any decision.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta-section">
    <div class="cta-inner reveal">
      <div class="cta-eyebrow">Ready for Clarity?</div>
      <h2>Start Your Family's<br><em>Journey Today.</em></h2>
      <p>Our patient coordinators are here to listen without judgment and guide you toward the most appropriate care — at
        no pressure, whatsoever.</p>
      <div class="cta-btns">
        <a href="{{ route('frontend.contact') }}" class="btn-primary-dark">Schedule Consultation <svg width="15"
            height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
            stroke-linejoin="round">
            <path d="M5 12h14M12 5l7 7-7 7" />
          </svg></a>
        <a href="https://wa.me/919999999999" target="_blank" rel="noopener" class="btn-outline"><svg width="15"
            height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round">
            <path
              d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
          </svg>WhatsApp Inquiry</a>
      </div>
    </div>
  </section>


  <!-- LIGHTBOX HTML -->
  <div class="video-lightbox" id="videoLightbox">
    <div class="video-lightbox-content">
      <button class="video-lightbox-close" id="closeLightbox" aria-label="Close video">&times;</button>
      <div class="video-lightbox-iframe-container">
        <iframe id="lightboxIframe" src="" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
    </div>
  </div>


  <a href="{{ route('frontend.quiz') }}" class="mobile-floating-cta">Get Started &rarr;</a>
@endsection