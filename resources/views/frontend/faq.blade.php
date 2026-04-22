<!-- HERO -->
@extends('frontend.layouts.app')

@section('title', 'faq Page')
@section('meta_description', 'Welcome to our website')
@section('meta_keywords', 'home, laravel, website')

@section('content')


  <section class="faq-hero">
    <div class="faq-hero-inner">
      <div class="breadcrumb"><a href="{{ route('frontend.index') }}">Home</a> / FAQ</div>
      <h1>Clear Answers for Your<br><em>Family Journey</em></h1>
      <p>Empowering you with transparent information. If your question isn't answered here, we're just a message away.
      </p>
    </div>
  </section>

  <main class="faq-container">

    <section class="faq-category">
      <h2 class="category-title">General Questions</h2>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question">What should I bring to my first appointment?
            <div class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></div>
          </button>
          <div class="faq-answer">
            <p>Please bring any previous medical records, prior fertility test results, a list of current medications,
              and a history of previous treatments or surgeries. This helps us build a comprehensive picture of your
              health from day one.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question">Do both partners need to attend consultations?
            <div class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></div>
          </button>
          <div class="faq-answer">
            <p>While not strictly mandatory for every visit, we strongly encourage both partners to attend the initial
              and key clinical consultations. Fertility is a shared journey, and assessing the reproductive health of
              both partners ensures a more accurate roadmap.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="faq-category">
      <h2 class="category-title">IVF & Treatments</h2>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question">How long does an IVF cycle typically take?
            <div class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></div>
          </button>
          <div class="faq-answer">
            <p>A standard IVF cycle typically spans 4 to 8 weeks. This includes the preparation phase, approximately
              10–14 days of ovarian stimulation, egg retrieval, fertilization in the lab, and subsequent embryo
              transfer. We tailor the timeline specifically to your protocol.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question">Is the procedure painful?
            <div class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></div>
          </button>
          <div class="faq-answer">
            <p>We prioritize patient comfort at every stage. Minimal discomfort may occur during medication injections,
              but major procedures like egg retrieval are performed under light anesthesia (sedation), so you will not
              feel pain during the process.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question">What is ISCI and how does it differ from standard IVF?
            <div class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></div>
          </button>
          <div class="faq-answer">
            <p>Intracytoplasmic Sperm Injection (ICSI) involves the direct injection of a single sperm into a mature
              egg. While standard IVF relies on natural fertilization in a dish, ICSI is specifically used in cases of
              male factor infertility or previous low fertilization rates to maximize success.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="faq-category">
      <h2 class="category-title">Clinic & Financial</h2>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question">Is there financial counseling available?
            <div class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></div>
          </button>
          <div class="faq-answer">
            <p>Yes. We believe in complete transparency with zero hidden costs. Our dedicated financial coordinators
              work with you to provide a clear, itemized cost roadmap before any treatment begins, ensuring you can plan
              your journey with confidence.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question">What are your clinic hours?
            <div class="faq-icon"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg></div>
          </button>
          <div class="faq-answer">
            <p>Our clinical staff is available Monday through Saturday, from 9:00 AM to 7:00 PM. However, for active
              treatment cycles, we provide 24/7 support channels so you are never alone during critical phases of your
              journey.</p>
          </div>
        </div>
      </div>
    </section>

  </main>

  <section class="cta-section">
    <div class="cta-inner">
      <h2>Still have questions?</h2>
      <p>We're here to provide the clarity you need to move forward with peace of mind.</p>
      <a href="{{ route('frontend.contact') }}" class="btn-primary">
        Speak with a Consultant
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
          stroke-linecap="round" stroke-linejoin="round">
          <line x1="5" y1="12" x2="19" y2="12" />
          <polyline points="12 5 19 12 12 19" />
        </svg>
      </a>
    </div>

    <a href="{{ route('frontend.quiz') }}" class="mobile-floating-cta">Get Started &rarr;</a>
@endsection