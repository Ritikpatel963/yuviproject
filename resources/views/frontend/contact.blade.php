@extends('frontend.layouts.app')

@section('title', 'contact Page')
@section('meta_description', 'Welcome to our website')
@section('meta_keywords', 'home, laravel, website')

@section('content')
  <!-- HERO -->
  <section class="hero_box4 reveal">
    <div class="hero-inner_2">
      <div class="hero-eyebrow_2">Connect With Us</div>
      <h1>Begin with <em>Clarity.</em></h1>
      <p>Your journey to parenthood starts with a single conversation. We're here to listen, guide, and walk every step
        alongside you.</p>
    </div>
  </section>

  <!-- MAIN TWO-COLUMN LAYOUT -->
  <div class="main">

    <!-- LEFT: FORM COLUMN -->
    <div class="form-col reveal">

      <div class="consult-tabs" role="tablist">
        <button class="tab-btn active" data-tab="clinic" role="tab">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
            <polyline points="9 22 9 12 15 12 15 22" />
          </svg>
          In-Clinic Visit
        </button>
        <button class="tab-btn" data-tab="online" role="tab">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
            <line x1="8" y1="21" x2="16" y2="21" />
            <line x1="12" y1="17" x2="12" y2="21" />
          </svg>
          Online Consultation
        </button>
        <button class="tab-btn" data-tab="whatsapp" role="tab">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path
              d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
          </svg>
          WhatsApp
        </button>
      </div>

      <p class="form-section-title" id="formTitle">Request a Consultation</p>
      <p class="form-section-sub" id="formSub">Fill in your details and we'll reach out within 24 hours to confirm your
        appointment.</p>

      <form id="contactForm" novalidate>
        <div class="form-row">
          <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" placeholder="Jane" required>
          </div>
          <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" placeholder="Doe" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" placeholder="jane@example.com" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone / WhatsApp</label>
            <input type="tel" id="phone" placeholder="+91 98765 43210" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="concern">Primary Concern</label>
            <select id="concern" required>
              <option value="" disabled selected>Select a concern</option>
              <option>IVF / ICSI Treatment</option>
              <option>IUI Consultation</option>
              <option>PCOS / Hormonal Issues</option>
              <option>Male Fertility / Andrology</option>
              <option>Recurrent Pregnancy Loss</option>
              <option>Fertility Preservation</option>
              <option>General Women's Health</option>
              <option>Other</option>
            </select>
          </div>
          <div class="form-group">
            <label for="location">Preferred Location</label>
            <select id="location">
              <option value="" disabled selected>Choose clinic</option>
              <option>Nimaaya Women's Center, Surat</option>
              <option>Nimaaya Baroda, Vadodara</option>
              <option>Online (Video Call)</option>
            </select>
          </div>
        </div>
        <div class="form-row" style="grid-template-columns: 1fr; margin-bottom: 1.2rem;">
          <div class="form-group full">
            <label for="message">Your Story</label>
            <textarea id="message"
              placeholder="Tell us briefly about your fertility journey so far, any previous treatments, and how we can best help you..."></textarea>
          </div>
        </div>
        <div class="form-row" style="grid-template-columns: 1fr; margin-bottom: 0;">
          <div class="form-group full">
            <div class="checkbox-group">
              <input type="checkbox" id="consent" required>
              <label for="consent">I consent to Dr. Yuvi's team contacting me regarding my inquiry. My information will
                be kept strictly confidential and never shared with third parties.</label>
            </div>
          </div>
        </div>
        <button type="submit" class="submit-btn">
          Send Consultation Request
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14M12 5l7 7-7 7" />
          </svg>
        </button>
      </form>

      <div class="success-msg" id="successMsg">
        <div class="success-icon">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5"
            stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg>
        </div>
        <h3>Request Received!</h3>
        <p>Thank you for reaching out. Our team will contact you within 24 hours to confirm your consultation details.
        </p>
      </div>
    </div>

    <!-- RIGHT: INFO COLUMN -->
    <aside class="info-col reveal">
      <div class="info-col-grid">

        <!-- Location 1 -->
        <!-- <div class="location-card">
              <span class="location-tag">Surat</span>
              <h3 class="location-name">Nimaaya Women's Center</h3>
              <p class="location-addr">Near Chikuwadi Char Rasta, Haripura,<br>Surat, Gujarat — 395009</p>
              <a href="https://maps.google.com" target="_blank" rel="noopener" class="location-link">
                Open in Maps
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
              </a>
            </div> -->

        <!-- Location 2 -->
        <div class="location-card">
          <span class="location-tag">Gujarat</span>
          <h3 class="location-name">Vadodara</h3>
          <p class="location-addr">5th floor, Yash complex, Madhu's Icon besides,<br>Gotri Road, Vadodara, Gujarat —
            390021</p>
          <a href="https://maps.google.com" target="_blank" rel="noopener" class="location-link">
            Open in Maps
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg>
          </a>
        </div>

        <!-- Quick Contact -->
        <div class="quick-card">
          <p class="quick-title">Quick Support</p>
          <div class="quick-item">
            <div class="quick-icon">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#9db9d0" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path
                  d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
              </svg>
            </div>
            <div class="quick-item-text">
              <strong>WhatsApp</strong>
              <a href="https://wa.me/912656839900">+91-265-6839900</a>
            </div>
          </div>
          <div class="quick-item">
            <div class="quick-icon">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#9db9d0" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                <polyline points="22,6 12,13 2,6" />
              </svg>
            </div>
            <div class="quick-item-text">
              <strong>Email</strong>
              <a href="mailto:doctoryuvi@nimaaya.com">doctoryuvi@nimaaya.com</a>
            </div>
          </div>
          <div class="quick-item">
            <div class="quick-icon">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#9db9d0" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path
                  d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.91 8.5a16 16 0 0 0 6 6l.86-.86a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 21.6 16z" />
              </svg>
            </div>
            <div class="quick-item-text">
              <strong>Phone</strong>
              <a href="tel:+912656839900">+91-265-6839900</a>
            </div>
          </div>
        </div>

        <!-- Clinic Hours -->
        <div class="hours-card">
          <p class="hours-title">Clinic Hours</p>
          <div class="hours-row"><span>Mon – Fri</span><span>9:00 AM – 6:00 PM</span></div>
          <div class="hours-row"><span>Saturday</span><span>9:00 AM – 2:00 PM</span></div>
          <div class="hours-row"><span>Sunday</span><span style="color:var(--muted); font-weight:400;">Closed</span>
          </div>
          <div class="hours-row" style="border-bottom:none; padding-top:0.8rem;">
            <span style="font-size:0.75rem; color:var(--muted);">Current status</span>
            <span class="hours-badge">Open Now</span>
          </div>
        </div>

      </div>
    </aside>

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
        <div class="trust-text"><strong>100% Confidential</strong><span>Your privacy is sacred</span></div>
      </div>
      <div class="trust-item">
        <div class="trust-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10" />
            <polyline points="12 6 12 12 16 14" />
          </svg>
        </div>
        <div class="trust-text"><strong>24-Hour Response</strong><span>We reply within one day</span></div>
      </div>
      <div class="trust-item">
        <div class="trust-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path
              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
          </svg>
        </div>
        <div class="trust-text"><strong>No-Pressure Consult</strong><span>Honest, ethical guidance</span></div>
      </div>
      <div class="trust-item">
        <div class="trust-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
            <line x1="8" y1="21" x2="16" y2="21" />
            <line x1="12" y1="17" x2="12" y2="21" />
          </svg>
        </div>
        <div class="trust-text"><strong>Online Available</strong><span>Consult from anywhere</span></div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->


  <script>
    // ── Consult tabs ──
    const tabBtns = document.querySelectorAll('.tab-btn');
    const formTitle = document.getElementById('formTitle');
    const formSub = document.getElementById('formSub');
    const tabMeta = {
      clinic: { title: 'Request a Clinic Visit', sub: "Fill in your details and we'll reach out within 24 hours to confirm your appointment." },
      online: { title: 'Book an Online Consultation', sub: 'Consult Dr. Yuvi from the comfort of your home via a secure video call.' },
      whatsapp: { title: 'Connect on WhatsApp', sub: "Send us a message and we'll respond within a few hours on WhatsApp." }
    };
    tabBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        tabBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const meta = tabMeta[btn.dataset.tab];
        if (meta) { formTitle.textContent = meta.title; formSub.textContent = meta.sub; }
      });
    });

    // ── Form submit ──
    const form = document.getElementById('contactForm');
    const successMsg = document.getElementById('successMsg');
    form.addEventListener('submit', e => {
      e.preventDefault();
      const consent = document.getElementById('consent');
      if (!consent.checked) {
        consent.style.outline = '2px solid #e24b4a';
        setTimeout(() => consent.style.outline = '', 2000);
        return;
      }
      form.style.opacity = '0';
      form.style.transform = 'translateY(-10px)';
      form.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
      setTimeout(() => {
        form.style.display = 'none';
        successMsg.classList.add('show');
      }, 300);
    });

    // ── Scroll reveal ──
    const reveals = document.querySelectorAll('.reveal');
    const revealObserver = new IntersectionObserver(entries => {
      entries.forEach((entry, i) => {
        if (entry.isIntersecting) {
          setTimeout(() => entry.target.classList.add('visible'), i * 80);
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });
    reveals.forEach(el => revealObserver.observe(el));
  </script>
  <script>

  </script>
  <a href="{{ route('frontend.quiz') }}" class="mobile-floating-cta">Get Started &rarr;</a>
@endsection