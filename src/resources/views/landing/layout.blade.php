<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>PT. Kusuma Putra Sukses</title>

  <link rel="shortcut icon" href="{{ asset('landing/assets/images/favicon.svg') }}" type="image/svg" />

  <link rel="stylesheet" href="{{ asset('landing/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/assets/css/lineicons.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/assets/css/tiny-slider.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/assets/css/glightbox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/assets/css/style.css') }}">
</head>
<body>

@include('landing.partials.navbar')

@yield('content')

@include('landing.partials.footer')

<script src="{{ asset('landing/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('landing/assets/js/tiny-slider.js') }}"></script>
<script src="{{ asset('landing/assets/js/glightbox.min.js') }}"></script>
<script src="{{ asset('landing/assets/js/main.js') }}"></script>

</body>
</html>