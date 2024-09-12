<!DOCTYPE html>
<html lang="en">

<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @hasSection('title')
  <title>blackcore.id | @yield('title')</title>
  @else
  <title>blackcore.id</title>
  @endif

  <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="{{ asset('frontend/plugins/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <!-- themify icon -->
  <link rel="stylesheet" href="{{ asset('frontend/plugins/themify-icons/themify-icons.css') }}">
  <!-- Slick Carousel -->
  <link href="{{ asset('frontend/plugins/slick/slick.css') }}" rel="stylesheet">
  <!-- Slick Carousel Theme -->
  <link href="{{ asset('frontend/plugins/slick/slick-theme.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- CUSTOM CSS -->
  <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

  <!-- FAVICON -->
  <link href="{{ asset('frontend/images/favicon.png') }}" rel="shortcut icon">

  <!--- Notyf -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">

</head>

<body class="body-wrapper">

  @include('frontend.partials.navbar')
  <!--=====================================
=            Homepage Banner            =
======================================-->

<main>
  @yield('content')
</main>

  <!--============================
=            Footer            =
=============================-->

  @include('frontend.partials.footer')

  <!-- JAVASCRIPTS -->

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA" async defer></script>

  <script src="{{ asset('frontend/plugins/jquery/jquery.js') }}"></script>
  <script src="{{ asset('frontend/plugins/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset('frontend/plugins/slick/slick.min.js') }}"></script>
  <script src="{{ asset('frontend/js/custom.js') }}"></script>
  <script src="{{ asset('frontend/js/homepage.js') }}"></script>
  <script src="{{ asset('frontend/js/navbar.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
  <script>
    var notyf = new Notyf();
    @if (session('success'))
      notyf.success({
        message: '{{ session('success') }}',
        duration: 10000,
        dismissible: true,
        position: {
          x: 'right',
          y: 'top'
        }
      });
    @endif

    @if (session('error'))
      notyf.error({
        message: '{{ session('error') }}',
        duration: 10000,
        dismissible: true,
        position: {
          x: 'right',
          y: 'top'
        }
      });
    @endif
  </script>

</body>

</html>
