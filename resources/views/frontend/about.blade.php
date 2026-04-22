@extends('frontend.layouts.app')

@section('title', 'About Page')
@section('meta_description', 'Welcome to our website')
@section('meta_keywords', 'home, laravel, website')

@section('content')
  <!-- ABOUT LAYOUT -->
  <div class="about-layout">

    <!-- IMAGE PANEL -->
    <div class="image-panel">
      <img
        src="https://nimaaya.com/wp-content/uploads/2023/07/MinistryOfMemories_NimaayaBarodainauguration_20220130-78_websize-1-683x1024.jpg"
        alt="Dr. Yuvraj Jadeja">
      <div class="image-panel-overlay"></div>
      <div class="image-stats">
        <div class="image-stat">
          <span class="image-stat-num">15+</span>
          <span class="image-stat-label">Years Practice</span>
        </div>
        <div class="image-stat">
          <span class="image-stat-num">5000+</span>
          <span class="image-stat-label">IVF Cycles</span>
        </div>
        <div class="image-stat">
          <span class="image-stat-num">98%</span>
          <span class="image-stat-label">Satisfaction</span>
        </div>
      </div>
    </div>

    <!-- CONTENT PANEL -->
    <div class="content-panel">

      <!-- Intro -->
      <div class="reveal">
        <span class="eyebrow">About The Expert</span>
        <h1 class="doctor-name">Dr. Yuvraj<br>Jadeja</h1>
        <span class="doctor-title">Consultant Fertility & IVF, Gynaecologist Endoscopy Specialist</span>

        <p class="about-bio">
          <strong>A Doctor Who Treats People, Not Reports</strong> Dr. Jadeja believes fertility care should never feel
          rushed or commercialized. Every treatment begins with deep understanding, transparent communication, and ethical
          responsibility. With advanced training in reproductive medicine and assisted reproductive technologies, patients
          receive personalized care rooted in science and compassion.
        </p>


        <!-- <div class="specialties">
            <span class="specialty-chip">Recurrent Implantation Failure</span>
            <span class="specialty-chip">Thin Endometrium</span>
            <span class="specialty-chip">Male Infertility</span>
            <span class="specialty-chip">Poor Ovarian Reserve</span>
            <span class="specialty-chip">Natural Cycle IVF</span>
            <span class="specialty-chip">Minimal Stimulation</span>
          </div> -->

        <div class="intro-chips reveal">
          <span class="intro-chip">15+ Years Experience</span>
          <span class="intro-chip">Ethical IVF Practice</span>
          <span class="intro-chip">Diagnosis-First Care</span>
        </div>

        <!-- Mission, Vision, Values -->
        <div class="values-grid reveal">
          <div class="value-card">
            <div class="v-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
              </svg>
            </div>
            <h3>Mission</h3>
            <p>Deliver ethical, accurate, and personalized fertility care driven by science and compassion.</p>
          </div>
          <div class="value-card">
            <div class="v-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <path d="M12 6v6l4 2" />
              </svg>
            </div>
            <h3>Vision</h3>
            <p>Redefining fertility treatment in India through transparency and patient empowerment.</p>
          </div>
          <div class="value-card">
            <div class="v-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path
                  d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
              </svg>
            </div>
            <h3>Values</h3>
            <p>Integrity · Empathy · Evidence · Respect · Accountability</p>
          </div>
        </div>
      </div>

      <!-- Qualifications 
        <div class="reveal delay-1">
          <div class="section-label">Qualifications</div>
          <div class="qual-list">

            <div class="qual-item">
              <span class="qual-num">01</span>
              <div class="qual-body">
                <span class="qual-degree">MBBS</span>
                <span class="qual-detail">Bachelor of Medicine, Bachelor of Surgery</span>
              </div>
              <span class="qual-badge">Foundation</span>
            </div>

            <div class="qual-item">
              <span class="qual-num">02</span>
              <div class="qual-body">
                <span class="qual-degree">MS (Obs & Gynae)</span>
                <span class="qual-detail">Master of Surgery in Obstetrics & Gynaecology</span>
              </div>
              <span class="qual-badge">Postgraduate</span>
            </div>

            <div class="qual-item">
              <span class="qual-num">03</span>
              <div class="qual-body">
                <span class="qual-degree">Fellowship in ART</span>
                <span class="qual-detail">Advanced training in Assisted Reproductive Technology</span>
              </div>
              <span class="qual-badge">Fellowship</span>
            </div>

            <div class="qual-item">
              <span class="qual-num">04</span>
              <div class="qual-body">
                <span class="qual-degree">Endoscopy Specialist</span>
                <span class="qual-detail">Expertise in advanced laparoscopic & hysteroscopic procedures</span>
              </div>
              <span class="qual-badge">Surgical</span>
            </div>

          </div>
        </div>
        -->

      <!-- Philosophy Quote -->
      <div class="reveal delay-2">
        <div class="philosophy-block">
          <p class="philosophy-text">
            Every fertility journey deserves honesty, safety, and respect — never pressure or shortcuts.
          </p>
          <span class="philosophy-attr">— Dr. Yuvraj Jadeja</span>
        </div>
      </div>

      <!-- Clinical Expertise -->
      <div class="reveal delay-2">
        <div class="section-label">Clinical Expertise</div>
        <div class="expertise-grid">

          <div class="expertise-item">
            <div class="expertise-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <path d="M8 12h8M12 8v8" />
              </svg>
            </div>
            <div class="expertise-text">
              <strong>IVF & ART</strong>
              <span>Advanced fertility treatments designed to maximize your chances of conception.</span>
            </div>
          </div>

          <div class="expertise-item">
            <div class="expertise-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
              </svg>
            </div>
            <div class="expertise-text">
              <strong>PCOS Management</strong>
              <span>Personalized care to balance hormones and improve reproductive health.</span>
            </div>
          </div>

          <div class="expertise-item">
            <div class="expertise-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <circle cx="10" cy="14" r="5" />
                <path d="M21 3l-6 6M15 3h6v6" />
              </svg>
            </div>
            <div class="expertise-text">
              <strong>Male Infertility</strong>
              <span>Specialized evaluation and treatment for male fertility concerns.</span>
            </div>
          </div>

          <div class="expertise-item">
            <div class="expertise-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path
                  d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
              </svg>
            </div>
            <div class="expertise-text">
              <strong>Fertility Preservation</strong>
              <span>Secure your future parenthood with advanced fertility preservation options.</span>
            </div>
          </div>

          <div class="expertise-item">
            <div class="expertise-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2L2 7l10 5 10-5-10-5z" />
                <path d="M2 17l10 5 10-5M2 12l10 5 10-5" />
              </svg>
            </div>
            <div class="expertise-text">
              <strong>Recurrent Pregnancy Loss</strong>
              <span>Compassionate diagnosis and treatment to help you achieve a healthy pregnancy.</span>
            </div>
          </div>

          <div class="expertise-item">
            <div class="expertise-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <line x1="12" y1="8" x2="12" y2="16" />
                <line x1="8" y1="12" x2="16" y2="12" />
              </svg>
            </div>
            <div class="expertise-text">
              <strong>High Risk Pregnancy</strong>
              <span>Expert care for complex pregnancies to protect both mother and baby.</span>
            </div>
          </div>

        </div>
      </div>

      <!-- Awards & Recognition -->
      <div class="reveal delay-2">
        <div class="section-label">Awards & Recognition</div>
        <div class="awards-grid">
          <div class="award-card">
            <div class="award-year">2023</div>
            <div class="award-info">
              <h4 class="award-title">National Fertility Excellence Award</h4>
              <!-- <p class="award-org">Indian Fertility & Healthcare Association</p> -->
            </div>
          </div>

          <div class="award-card">
            <div class="award-year">2022</div>
            <div class="award-info">
              <h4 class="award-title">Medical Times Feature</h4>
              <!-- <p class="award-org">Medical Times India Magazine</p> -->
            </div>
          </div>

          <div class="award-card">
            <div class="award-year">2021</div>
            <div class="award-info">
              <h4 class="award-title">IVF India Speaker</h4>
              <!-- <p class="award-org">Federation of Obstetric & Gynaecological Societies of India</p> -->
            </div>
          </div>
          <!-- <div class="award-card">
                        <div class="award-year">2019</div>
                        <div class="award-info">
                          <h4 class="award-title">Research Excellence Award</h4>
                          <p class="award-org">International Fertility Congress</p>
                        </div>
                      </div> -->
        </div>
      </div>

      <!-- CTA -->
      <div class="reveal delay-3">
        <div class="cta-row">
          <a href="{{ route('frontend.contact') }}" class="btn-primary-dark">
            Book a Consultation
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg>
          </a>
          <a href="{{ route('frontend.services') }}" class="btn-outline">
            View Services
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg>
          </a>
        </div>
      </div>

    </div>
  </div>

  <!-- FOOTER -->


  <a href="{{ route('frontend.quiz') }}" class="mobile-floating-cta">Get Started &rarr;</a>
@endsection