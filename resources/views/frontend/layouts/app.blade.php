<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dr. Yuvraj Jadeja | Ethical Fertility & Women's Health</title>
  <meta name="description" content="Ethical, evidence-based fertility and women's health care in Ahmedabad.">
  <link rel="icon" type="image/png" href="{{ asset('assets/frontend/img/favicon.png') }}">
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600&display=swap"
    rel="stylesheet">
  <!-- Bootstrap first so custom CSS can override it -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- Custom CSS last — always wins -->
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
  <style>
    /* ── Neutralize Bootstrap resets that break the custom navbar ── */
    .nav-center,
    .nav-center li {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .nav-center a,
    .drawer-link {
      text-decoration: none;
    }

    .nav {
      padding: 0;
    }

    .nav-inner {
      padding-left: 2rem;
      padding-right: 2rem;
    }

    .brand {
      padding: 0;
    }
  </style>
</head>

<body>
  <!-- PRELOADER -->
  <div class="preloader-screen" id="preloader">
    <div class="preloader-wrapper">
      <img class="spinner-img" src="{{ asset('assets/frontend/img/preloader.png') }}" alt="Dr. Yuvi Logo" />
      <div class="dots-pre">
        <div class="dot-pre"></div>
        <div class="dot-pre"></div>
        <div class="dot-pre"></div>
        <div class="dot-pre"></div>
        <div class="dot-pre"></div>
      </div>
      <div class="label-pre">Loading</div>
    </div>
  </div>

  <!-- Header -->
  @include('frontend.layouts.header')

  <!-- Main Content -->
  <main>
    @yield('content')
  </main>

  <!-- Footer -->
  @include('frontend.layouts.footer')

  <!-- Frontend JS -->

  <script src="{{ asset('assets/frontend/js/custom.js') }}"></script>
  @stack('scripts')

</body>

</html>