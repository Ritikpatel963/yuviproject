@extends('frontend.layouts.app')

@section('title', 'blog-details Page')
@section('meta_description', 'Welcome to our website')
@section('meta_keywords', 'home, laravel, website')

@section('content')
  <!-- ARTICLE HERO -->
  <section class="article-hero">
    <div class="article-inner">
      <div class="breadcrumb">
        <a href="{{ route('frontend.index') }}">Home</a> / <a href="{{ route('frontend.blog') }}">Blog</a> /
        <span>Article</span>
      </div>
      <div class="hero-eyebrow">Health Blog</div>
      <h1>Understanding Modern <em>IVF Protocols</em></h1>
      <div class="meta-info">
        <div class="author">
          <div class="author-img"></div>
          <span>Dr. Yuvraj Jadeja</span>
        </div>
        <span>•</span>
        <span>October 12, 2023</span>
        <span>•</span>
        <span>8 min read</span>
      </div>
    </div>
  </section>

  <!-- MAIN CONTENT -->
  <main class="bd-layout">

    <!-- ARTICLE BODY -->
    <article class="bd-article">

      <img src="https://images.unsplash.com/photo-1579154341098-e4e158cc7f55?auto=format&fit=crop&q=80&w=400"
        alt="Medication" class="bd-article__img-float">

      <p class="bd-article__lead">In Vitro Fertilization (IVF) has come a long way since its inception. Today, the focus
        has shifted from standard 'one-size-fits-all' approaches to highly personalized protocols that respect each
        individual's unique biological fingerprint.</p>

      <p class="bd-article__body">When patients first explore IVF, they are often overwhelmed by technical terms like
        'Antagonist Cycles' or 'Frozen Embryo Transfer'. This guide aims to simplify the modern IVF journey and explain
        how we tailor each step to maximize the chances of a healthy baby.</p>

      <h2 class="bd-article__h2">The Shift Toward Personalization</h2>
      <p class="bd-article__body">In the past, stimulation protocols were largely standardized. However, research has
        shown that factors such as AMH levels, antral follicle count, and previous cycle responses play a critical role
        in determining the ideal medication dosage.</p>

      <blockquote class="bd-article__blockquote">
        <span class="bd-article__blockquote-mark">"</span>
        <p>Reproductive medicine is as much an art as it is a science. Personalization isn't just a luxury; it's a
          clinical necessity for higher success rates.</p>
      </blockquote>

      <h2 class="bd-article__h2">Step 1: Ovarian Stimulation</h2>
      <p class="bd-article__body">The goal of this phase is to encourage the ovaries to produce multiple mature eggs.
        Modern protocols use refined gonadotropins that are more precise in their action. Frequent monitoring through
        ultrasounds and blood tests allows us to adjust dosages in real-time, preventing complications like Ovarian
        Hyperstimulation Syndrome (OHSS).</p>

      <h2 class="bd-article__h2">Step 2: The Role of AI in Embryology</h2>
      <p class="bd-article__body">Once eggs are retrieved and fertilized, the embryology lab becomes the center of the
        miracle. We now use Artificial Intelligence and time-lapse imaging to monitor embryo development. This
        non-invasive observation helps identify the most viable embryos for transfer without having to remove them from
        the incubator frequently.</p>

      <img src="https://images.unsplash.com/photo-1579154235884-10f5fe58b37a?auto=format&fit=crop&q=80&w=1000"
        alt="Laboratory equipment" class="bd-article__img-full">

      <h2 class="bd-article__h2">Step 3: Freeze-All Strategy</h2>
      <p class="bd-article__body">A significant advancement in recent years is the 'Freeze-All' protocol. Instead of
        transferring an embryo immediately after egg retrieval, we freeze all high-quality embryos and transfer them in
        a subsequent cycle. This allows the mother's hormonal environment to return to its natural baseline, which has
        been shown to improve implantation rates significantly.</p>

      <h2 class="bd-article__h2">Conclusion</h2>
      <p class="bd-article__body">Modern IVF is about more than just technology; it's about the patient. By combining
        advanced clinical data with a compassionate, individualized approach, we can turn the dream of parenthood into a
        beautiful reality.</p>

      <!-- Tags -->
      <div class="bd-article__tags">
        <a href="#" class="bd-tag">#IVFSuccess</a>
        <a href="#" class="bd-tag">#FertilityJourney</a>
        <a href="#" class="bd-tag">#ModernScience</a>
        <a href="#" class="bd-tag">#Parenthood</a>
        <a href="#" class="bd-tag">#HealthyBeginnings</a>
        <a href="#" class="bd-tag">#DrYuviInsights</a>
      </div>
    </article>

    <!-- RIGHT SIDEBAR -->
    <aside class="bd-sidebar">

      <!-- Logo -->
      <div class="bd-sidebar__brand">
        <img src="{{ asset('assets/frontend/img/63e0fe368fba6.png') }}" alt="Dr Yuvraj Jadeja Logo">
      </div>

      <!-- Categories -->
      <div class="bd-sidebar__card">
        <h4 class="bd-sidebar__card-title">Article Topics</h4>
        <div class="bd-sidebar__tags">
          <span class="bd-sidebar__cat-tag bd-sidebar__cat-tag--primary">Fertility</span>
          <span class="bd-sidebar__cat-tag bd-sidebar__cat-tag--secondary">Clinical Updates</span>
        </div>
      </div>

      <!-- Related Articles -->
      <div class="bd-sidebar__card">
        <h4 class="bd-sidebar__card-title">Related Articles</h4>
        <ul class="bd-related-list">
          <li class="bd-related-item">
            <a href="#" class="bd-related-link">
              <div class="bd-related-thumb">
                <img src="https://images.unsplash.com/photo-1516627145497-ae6968895b74?auto=format&fit=crop&q=80&w=150"
                  alt="PCOS Care">
              </div>
              <div class="bd-related-info">
                <h5 class="bd-related-title">Managing PCOS Naturally for Conception</h5>
                <span class="bd-related-meta">Oct 05, 2023 · Wellness</span>
              </div>
            </a>
          </li>
          <li class="bd-related-item">
            <a href="#" class="bd-related-link">
              <div class="bd-related-thumb">
                <img src="https://images.unsplash.com/photo-1576091160550-2173bdd99602?auto=format&fit=crop&q=80&w=150"
                  alt="Male Fertility">
              </div>
              <div class="bd-related-info">
                <h5 class="bd-related-title">The Truth About Male Fertility Myths</h5>
                <span class="bd-related-meta">Sep 28, 2023 · Andrology</span>
              </div>
            </a>
          </li>
        </ul>
      </div>

      <!-- Newsletter -->
      <div class="bd-sidebar__card bd-sidebar__card--newsletter">
        <h4 class="bd-sidebar__card-title">Health Blog</h4>
        <p class="bd-sidebar__card-text">Receive the latest health tips and clinical updates directly in your inbox.</p>
        <button class="bd-subscribe-btn">Subscribe to Blog</button>
      </div>

      <!-- Consult CTA -->
      <div class="bd-sidebar__card bd-sidebar__card--consult">
        <h4 class="bd-sidebar__card-title bd-sidebar__card-title--blue">Need Clarity?</h4>
        <p class="bd-sidebar__card-text">Schedule a personalized consultation with Dr. Yuvi to discuss your specific
          journey.</p>
        <a href="{{ route('frontend.contact') }}" class="bd-consult-link">Book an Appointment &rarr;</a>
      </div>

      <!-- Quick Contact -->
      <div class="bd-quick-contact">
        <p class="bd-quick-contact__label">Quick Support</p>
        <div class="bd-quick-contact__item">
          <div class="bd-quick-contact__icon">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path
                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
            </svg>
          </div>
          <div class="bd-quick-contact__detail">
            <strong>WhatsApp</strong>
            <a href="https://wa.me/919999999999">+91 999 999 9999</a>
          </div>
        </div>
        <div class="bd-quick-contact__item">
          <div class="bd-quick-contact__icon">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
              <polyline points="22,6 12,13 2,6" />
            </svg>
          </div>
          <div class="bd-quick-contact__detail">
            <strong>Email</strong>
            <a href="mailto:doctoryuvi@nimaaya.com">doctoryuvi@nimaaya.com</a>
          </div>
        </div>
      </div>

    </aside>
  </main>


  <a href="{{ route('frontend.quiz') }}" class="mobile-floating-cta">Get Started &rarr;</a>
@endsection