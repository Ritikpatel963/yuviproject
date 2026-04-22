@extends('frontend.layouts.app')

@section('title', 'gallary Page')
@section('meta_description', 'Welcome to our website')
@section('meta_keywords', 'home, laravel, website')

@section('content')
  <!-- GALLERY PAGE -->
  <header class="gallery-hero-sg">
    <div class="gallery-hero-sg-inner">
      <h1>Our <em style="color:var(--gold);font-style:italic;">Gallery</em></h1>
      <p>A glimpse into our state-of-the-art facilities, patient journeys, and advanced medical care.</p>
    </div>
  </header>

  <section class="gallery-wrapper-sg">
    <div class="gallery-grid-sg">
      <!-- Item 1 -->
      <div class="gallery-item-sg reveal" onclick="openImageLightbox(this)">
        <img src="{{ asset('assets/frontend/img/gallary/WhatsApp Image 2026-04-18 at 10.10.00 AM (1).jpeg') }}"
          alt="Clinic Life" loading="lazy">
        <div class="gallery-overlay-sg">
          <div class="overlay-content-sg">
            <span>Clinic Life</span>
            <h3>Dr. Yuvi in Action</h3>
          </div>
        </div>
      </div>
      <!-- Item 2 -->
      <div class="gallery-item-sg reveal delay-1" onclick="openImageLightbox(this)">
        <img src="{{ asset('assets/frontend/img/gallary/WhatsApp Image 2026-04-18 at 10.10.00 AM.jpeg') }}"
          alt="Clinic Life" loading="lazy">
        <div class="gallery-overlay-sg">
          <div class="overlay-content-sg">
            <span>Clinic Life</span>
            <h3>Modern Consultation</h3>
          </div>
        </div>
      </div>
      <!-- Item 3 -->
      <div class="gallery-item-sg reveal delay-2" onclick="openImageLightbox(this)">
        <img src="{{ asset('assets/frontend/img/gallary/WhatsApp Image 2026-04-18 at 10.10.01 AM (1).jpeg') }}"
          alt="Laboratory" loading="lazy">
        <div class="gallery-overlay-sg">
          <div class="overlay-content-sg">
            <span>Laboratory</span>
            <h3>Advanced Equipment</h3>
          </div>
        </div>
      </div>
      <!-- Item 4 -->
      <div class="gallery-item-sg reveal" onclick="openImageLightbox(this)">
        <img src="{{ asset('assets/frontend/img/gallary/WhatsApp Image 2026-04-18 at 10.10.01 AM.jpeg') }}"
          alt="Facility" loading="lazy">
        <div class="gallery-overlay-sg">
          <div class="overlay-content-sg">
            <span>Facility</span>
            <h3>Premium Lounge</h3>
          </div>
        </div>
      </div>
      <!-- Item 5 -->
      <div class="gallery-item-sg reveal delay-1" onclick="openImageLightbox(this)">
        <img src="{{ asset('assets/frontend/img/gallary/WhatsApp Image 2026-04-18 at 10.10.02 AM.jpeg') }}"
          alt="Clinic Life" loading="lazy">
        <div class="gallery-overlay-sg">
          <div class="overlay-content-sg">
            <span>Clinic Life</span>
            <h3>Patient Care</h3>
          </div>
        </div>
      </div>
      <!-- Item 6 -->
      <div class="gallery-item-sg reveal delay-2" onclick="openImageLightbox(this)">
        <img src="{{ asset('assets/frontend/img/gallary/WhatsApp Image 2026-04-18 at 10.10.04 AM (1).jpeg') }}"
          alt="Experts" loading="lazy">
        <div class="gallery-overlay-sg">
          <div class="overlay-content-sg">
            <span>Experts</span>
            <h3>Our Specialists</h3>
          </div>
        </div>
      </div>
      <!-- Item 7 -->
      <div class="gallery-item-sg reveal" onclick="openImageLightbox(this)">
        <img src="{{ asset('assets/frontend/img/gallary/WhatsApp Image 2026-04-18 at 10.10.04 AM.jpeg') }}"
          alt="Clinic Life" loading="lazy">
        <div class="gallery-overlay-sg">
          <div class="overlay-content-sg">
            <span>Clinic Life</span>
            <h3>Clinical Excellence</h3>
          </div>
        </div>
      </div>
      <!-- Item 8 -->
      <div class="gallery-item-sg reveal delay-1" onclick="openImageLightbox(this)">
        <img src="{{ asset('assets/frontend/img/gallary/WhatsApp Image 2026-04-18 at 10.10.05 AM (1).jpeg') }}"
          alt="Consultation" loading="lazy">
        <div class="gallery-overlay-sg">
          <div class="overlay-content-sg">
            <span>Consultation</span>
            <h3>Personalized Advice</h3>
          </div>
        </div>
      </div>
      <!-- Item 9 -->
      <div class="gallery-item-sg reveal delay-2" onclick="openImageLightbox(this)">
        <img src="{{ asset('assets/frontend/img/gallary/WhatsApp Image 2026-04-18 at 10.10.05 AM.jpeg') }}"
          alt="Facility" loading="lazy">
        <div class="gallery-overlay-sg">
          <div class="overlay-content-sg">
            <span>Facility</span>
            <h3>Patient Comfort</h3>
          </div>
        </div>
      </div>
      <!-- Item 10 -->
      <div class="gallery-item-sg reveal" onclick="openImageLightbox(this)">
        <img src="{{ asset('assets/frontend/img/gallary/WhatsApp Image 2026-04-18 at 10.10.06 AM (1).jpeg') }}"
          alt="Clinic Life" loading="lazy">
        <div class="gallery-overlay-sg">
          <div class="overlay-content-sg">
            <span>Clinic Life</span>
            <h3>Modern Ward</h3>
          </div>
        </div>
      </div>
      <!-- Item 11 -->
      <div class="gallery-item-sg reveal delay-1" onclick="openImageLightbox(this)">
        <img src="{{ asset('assets/frontend/img/gallary/WhatsApp Image 2026-04-18 at 10.10.06 AM (2).jpeg') }}"
          alt="Facility" loading="lazy">
        <div class="gallery-overlay-sg">
          <div class="overlay-content-sg">
            <span>Facility</span>
            <h3>Safe Environment</h3>
          </div>
        </div>
      </div>
      <!-- Item 12 -->
      <div class="gallery-item-sg reveal delay-2" onclick="openImageLightbox(this)">
        <img src="{{ asset('assets/frontend/img/gallary/WhatsApp Image 2026-04-18 at 10.10.06 AM.jpeg') }}"
          alt="Clinic Life" loading="lazy">
        <div class="gallery-overlay-sg">
          <div class="overlay-content-sg">
            <span>Clinic Life</span>
            <h3>Healthcare Excellence</h3>
          </div>
        </div>
      </div>
      <!-- Item 13 -->
      <div class="gallery-item-sg reveal" onclick="openImageLightbox(this)">
        <img src="{{ asset('assets/frontend/img/gallary/WhatsApp Image 2026-04-18 at 10.10.07 AM (1).jpeg') }}"
          alt="Consultation" loading="lazy">
        <div class="gallery-overlay-sg">
          <div class="overlay-content-sg">
            <span>Consultation</span>
            <h3>Expert Guidance</h3>
          </div>
        </div>
      </div>
      <!-- Item 14 -->
      <div class="gallery-item-sg reveal delay-1" onclick="openImageLightbox(this)">
        <img src="{{ asset('assets/frontend/img/gallary/WhatsApp Image 2026-04-18 at 10.10.07 AM (2).jpeg') }}"
          alt="Clinic Life" loading="lazy">
        <div class="gallery-overlay-sg">
          <div class="overlay-content-sg">
            <span>Clinic Life</span>
            <h3>State of the Art</h3>
          </div>
        </div>
      </div>
      <!-- Item 15 -->
      <div class="gallery-item-sg reveal delay-2" onclick="openImageLightbox(this)">
        <img src="{{ asset('assets/frontend/img/gallary/WhatsApp Image 2026-04-18 at 10.10.07 AM.jpeg') }}"
          alt="Laboratory" loading="lazy">
        <div class="gallery-overlay-sg">
          <div class="overlay-content-sg">
            <span>Laboratory</span>
            <h3>Scientific Research</h3>
          </div>
        </div>
      </div>
      <!-- Item 16 -->
      <div class="gallery-item-sg reveal" onclick="openImageLightbox(this)">
        <img src="{{ asset('assets/frontend/img/gallary/WhatsApp Image 2026-04-18 at 10.10.08 AM.jpeg') }}"
          alt="Clinic Life" loading="lazy">
        <div class="gallery-overlay-sg">
          <div class="overlay-content-sg">
            <span>Clinic Life</span>
            <h3>Dedicated Care</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- IMAGE LIGHTBOX -->
  <div class="image-lightbox-sg" id="imageLightbox">
    <button class="close-lightbox-sg" onclick="closeImageLightbox()">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <line x1="18" y1="6" x2="6" y2="18"></line>
        <line x1="6" y1="6" x2="18" y2="18"></line>
      </svg>
    </button>
    <div class="lightbox-content-sg">
      <img id="lightboxImg" src="" alt="Enlarged Gallery Image">
      <div class="lightbox-caption-sg">
        <span id="lightboxCategory"></span>
        <h3 id="lightboxTitle"></h3>
      </div>
    </div>
  </div>

  <a href="{{ route('frontend.quiz') }}" class="mobile-floating-cta">Get Started &rarr;</a>
@endsection