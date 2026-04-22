@extends('frontend.layouts.app')

@section('title', 'service Page')
@section('meta_description', 'Welcome to our website')
@section('meta_keywords', 'home, laravel, website')

<!-- HERO -->
@section('content')
  <section class="hero_box reveal">
    <div class="hero-inner-box2">
      <div>
        <div class="hero-eyebrow-box2">Clinical Excellence</div>
        <h1>Specialized <br><em>Fertility Pathways.</em></h1>
        <p>Every journey is unique. Our services are built on advanced embryology, surgical precision, and ethical
          transparency — tailored entirely around you.</p>
      </div>
      <div class="hero-stats-box2">
        <div class="hero-stat-box2">
          <span class="hero-stat-num-box2">6</span>
          <span class="hero-stat-label-box2">Specializations</span>
        </div>
        <div class="hero-stat-box2">
          <span class="hero-stat-num-box2">98%</span>
          <span class="hero-stat-label-box2">Satisfaction</span>
        </div>
        <div class="hero-stat-box2">
          <span class="hero-stat-num-box2">15+</span>
          <span class="hero-stat-label-box2">Years Experience</span>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="services-section">
    <div class="section-header reveal">
      <h2>Every pathway,<br>designed with care.</h2>
      <p>From first consultation to new beginnings, our specialized teams guide you through every step with honesty and
        expertise.</p>
    </div>

    <div class="services-grid">

      <!-- 1. IVF -->
      <article class="service-card reveal" data-category="ivf">
        <div class="card-img">
          <div class="card-accent ivf"></div>
          <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&q=80&w=700"
            alt="IVF & Assisted Reproduction">
          <div class="card-img-overlay"></div>

          <span class="card-num">01 / 06</span>
        </div>
        <div class="card-body">
          <span class="card-tag">IVF & ART</span>
          <h3 class="card-title">IVF & Assisted Reproduction</h3>
          <p class="card-desc">Comprehensive ART solutions including IUI, Conventional IVF, ICSI, and laser-assisted
            hatching — designed with transparent success rate reporting and individualized protocols.</p>
          <div class="card-pills">
            <span class="pill">IUI</span>
            <span class="pill">IVF / ICSI</span>
            <span class="pill">Laser Hatching</span>
            <span class="pill">Embryo Transfer</span>
            <span class="pill">PGT-A Testing</span>
          </div>
          <div class="card-footer">
            <a href="{{ route('frontend.serviceDetail') }}?s=ivf" class="card-link">
              Learn More
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
            <span class="availability"><span class="availability-dot"></span>Accepting</span>
          </div>
        </div>
      </article>

      <!-- 2. PCOS -->
      <article class="service-card reveal" data-category="pcos">
        <div class="card-img">
          <div class="card-accent pcos"></div>
          <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&q=80&w=700"
            alt="PCOS & Metabolic Health">
          <div class="card-img-overlay"></div>

          <span class="card-num">02 / 06</span>
        </div>
        <div class="card-body">
          <span class="card-tag">Wellness First</span>
          <h3 class="card-title">PCOS & Metabolic Health</h3>
          <p class="card-desc">Holistic management of polycystic ovarian syndrome through data-driven lifestyle plans,
            hormonal therapy, and targeted interventions that restore natural cycles.</p>
          <div class="card-pills">
            <span class="pill">Hormonal Therapy</span>
            <span class="pill">Ovulation Induction</span>
            <span class="pill">Nutrition Plans</span>
          </div>
          <div class="card-footer">
            <a href="{{ route('frontend.serviceDetail') }}?s=pcos" class="card-link">
              Learn More
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
            <span class="availability"><span class="availability-dot"></span>Accepting</span>
          </div>
        </div>
      </article>

      <!-- 3. Male Fertility -->
      <article class="service-card reveal" data-category="male">
        <div class="card-img">
          <div class="card-accent male"></div>
          <img src="https://images.unsplash.com/photo-1579875465779-30841dc72e8b?auto=format&fit=crop&q=80&w=700"
            alt="Male Factor Fertility">
          <div class="card-img-overlay"></div>

          <span class="card-num">03 / 06</span>
        </div>
        <div class="card-body">
          <span class="card-tag">Andrology</span>
          <h3 class="card-title">Male Factor Fertility</h3>
          <p class="card-desc">Precision diagnostics and surgical intervention for male infertility — including advanced
            sperm retrieval techniques and comprehensive andrology workups.</p>
          <div class="card-pills">
            <span class="pill">TESA / Micro-TESE</span>
            <span class="pill">Semen Analysis</span>
            <span class="pill">DNA Fragmentation</span>
          </div>
          <div class="card-footer">
            <a href="{{ route('frontend.serviceDetail') }}?s=male" class="card-link">
              Learn More
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
            <span class="availability"><span class="availability-dot"></span>Accepting</span>
          </div>
        </div>
      </article>

      <!-- 4. High-Risk Obstetrics -->
      <article class="service-card reveal" data-category="obstetrics">
        <div class="card-img">
          <div class="card-accent obs"></div>
          <img src="https://images.unsplash.com/photo-1532706302136-347336b002ec?auto=format&fit=crop&q=80&w=700"
            alt="High-Risk Obstetrics">
          <div class="card-img-overlay"></div>

          <span class="card-num">04 / 06</span>
        </div>
        <div class="card-body">
          <span class="card-tag">Obstetrics</span>
          <h3 class="card-title">High-Risk Obstetrics</h3>
          <p class="card-desc">Specialized, compassionate care for complex pregnancies — ensuring the highest standards
            of monitoring and safety for both mother and child throughout every trimester.</p>
          <div class="card-pills">
            <span class="pill">Fetal Monitoring</span>
            <span class="pill">Preeclampsia Care</span>
            <span class="pill">Twin Pregnancies</span>
          </div>
          <div class="card-footer">
            <a href="{{ route('frontend.serviceDetail') }}?s=obstetrics" class="card-link">
              Learn More
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
            <span class="availability"><span class="availability-dot"></span>Accepting</span>
          </div>
        </div>
      </article>

      <!-- 5. Fertility Preservation -->
      <article class="service-card reveal" data-category="preservation">
        <div class="card-img">
          <div class="card-accent pres"></div>
          <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?auto=format&fit=crop&w=1600&q=80"
            alt="Fertility Preservation">
          <div class="card-img-overlay"></div>

          <span class="card-num">05 / 06</span>
        </div>
        <div class="card-body">
          <span class="card-tag">Preservation</span>
          <h3 class="card-title">Fertility Preservation</h3>
          <p class="card-desc">Secure egg and embryo cryopreservation for individuals choosing to plan their family on
            their own timeline — including oncofertility for cancer patients.</p>
          <div class="card-pills">
            <span class="pill">Egg Freezing</span>
            <span class="pill">Embryo Cryo</span>
            <span class="pill">Oncofertility</span>
          </div>
          <div class="card-footer">
            <a href="{{ route('frontend.serviceDetail') }}?s=preservation" class="card-link">
              Learn More
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
            <span class="availability"><span class="availability-dot"></span>Accepting</span>
          </div>
        </div>
      </article>

      <!-- 6. Gynae Endoscopy -->
      <article class="service-card reveal" data-category="surgical">
        <div class="card-img">
          <div class="card-accent surg"></div>
          <img src="https://images.unsplash.com/photo-1516549655169-df83a0774514?auto=format&fit=crop&q=80&w=700"
            alt="Gynae Endoscopy">
          <div class="card-img-overlay"></div>

          <span class="card-num">06 / 06</span>
        </div>
        <div class="card-body">
          <span class="card-tag">Surgical</span>
          <h3 class="card-title">Gynae Endoscopy</h3>
          <p class="card-desc">Advanced laparoscopic and hysteroscopic surgeries for uterine anomalies, endometriosis,
            fibroids, and polyps — performed with minimal invasion and maximum precision for faster recovery.</p>
          <div class="card-pills">
            <span class="pill">Laparoscopy</span>
            <span class="pill">Hysteroscopy</span>
            <span class="pill">Endometriosis</span>
            <span class="pill">Fibroid Removal</span>
            <span class="pill">Septum Correction</span>
          </div>
          <div class="card-footer">
            <a href="{{ route('frontend.serviceDetail') }}?s=endoscopy" class="card-link">
              Learn More
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
            <span class="availability"><span class="availability-dot"></span>Accepting</span>
          </div>
        </div>
      </article>

    </div>
  </section>

  <!-- PROCESS SECTION -->
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


  <a href="{{ route('frontend.quiz') }}" class="mobile-floating-cta">Get Started &rarr;</a>
@endsection