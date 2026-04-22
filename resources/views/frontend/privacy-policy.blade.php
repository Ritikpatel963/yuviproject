@extends('frontend.layouts.app')

@section('title', 'privacy policy Page')
@section('meta_description', 'Welcome to our website')
@section('meta_keywords', 'home, laravel, website')

@section('content')
  <section class="policy-hero">
    <div class="policy-hero-inner">
      <div class="breadcrumb">Trust & Transparency</div>
      <h1>Our Privacy <em>Policy</em></h1>
      <p>Your privacy is our priority. Learn how we handle your clinical data and personal information with the highest
        ethical standards.</p>
    </div>
  </section>

  <main class="content-container">

    <section class="policy-section">
      <h2>1. Commitment to Confidentiality</h2>
      <p>At the practice of Dr. Yuvraj Jadeja, we understand that medical information is highly sensitive. We are
        committed to maintaining the confidentiality of your health information and providing you with a clear
        understanding of how it is used and protected.</p>
      <p>This policy applies to all personal and clinical data collected via our website, during consultations, and
        through our patient management systems.</p>
    </section>

    <section class="policy-section">
      <h2>2. Data We Collect</h2>
      <p>We may collect and process various types of information to provide you with the best possible clinical care:
      </p>
      <ul>
        <li><strong>Personal Information:</strong> Name, contact details (email, phone number), and date of birth.</li>
        <li><strong>Clinical Data:</strong> Medical history, previous treatment records, and information relevant to
          your fertility journey.</li>
        <li><strong>Technical Data:</strong> IP address, browser type, and usage patterns collected via cookies purely
          for website optimization.</li>
      </ul>
    </section>

    <section class="policy-section">
      <h2>3. Purpose of Processing</h2>
      <p>Your information is used strictly for high-quality clinical and administrative purposes:</p>
      <ul>
        <li>To assess your reproductive health and design personalized treatment protocols.</li>
        <li>To communicate regarding appointments, test results, and care management.</li>
        <li>To comply with regulatory and ethical standards in medical practice.</li>
        <li>To improve our service delivery and patient experience.</li>
      </ul>
    </section>

    <section class="policy-section">
      <h2>4. Data Security & Storage</h2>
      <p>We implement advanced technical and organizational measures to safeguard your data against unauthorized access,
        loss, or alteration. All electronic records are stored on secure servers with restricted access, and physical
        records are managed under strict clinical protocols.</p>
      <p>We do not share your clinical or personal information with third parties for marketing purposes. Disclosure
        only occurs when legally required or with your explicit medical consent for coordination of care.</p>
    </section>

    <section class="policy-section">
      <h2>5. Patient Rights</h2>
      <p>As a patient, you have specific rights regarding your data:</p>
      <ul>
        <li><strong>Access:</strong> The right to request a copy of your clinical records.</li>
        <li><strong>Correction:</strong> The right to update or correct any inaccurate personal information.</li>
        <li><strong>Erasure:</strong> The right to request data deletion, subject to medical record retention laws.</li>
        <li><strong>Withdrawal:</strong> The right to withdraw consent for non-clinical communication at any time.</li>
      </ul>
    </section>

    <section class="policy-section">
      <h2>6. Cookie Policy</h2>
      <p>Our website uses minimal cookies to enhance your browsing experience. These do not store personal identifiable
        information and are used primarily for measuring site performance and usability.</p>
    </section>

    <section class="policy-section">
      <h2>7. Contact Us</h2>
      <p>If you have any questions or concerns regarding this Privacy Policy or our data handling practices, please
        contact our privacy coordinator at:</p>
      <p><strong>Email:</strong> privacy@docteryuvi.com<br><strong>Location:</strong> Ahmedabad, India</p>
    </section>

    <div class="last-updated">Last Updated: April 13, 2026</div>

  </main>




  <a href="{{ route('frontend.quiz') }}" class="mobile-floating-cta">Get Started &rarr;</a>
@endsection