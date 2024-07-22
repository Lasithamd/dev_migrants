<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MS Sale</title>

  <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/fontawesome.min.css') }}">
    <link rel="stylesheet"href="{{ asset('front/css/all.min.css') }}" >
    <link rel="stylesheet"  href="{{ asset('front/css/select2.min.css') }}" >
    <link rel="stylesheet"  href="{{ asset('front/css/aos.css') }}" >
    <link rel="stylesheet"  href="{{ asset('front/css/feather.css') }}" >
    <link id="preset" rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" >

  
    </head>
    <body class="antialiased">
    @include('layout.navbar')
    @yield('content')

    @include('layout.footer')
 

<script src="{{ asset('front/js/jquery-3.7.1.min.js') }} " type="text/javascript"></script>
<script src="{{ asset('front/js/email-decode.min.js') }} " type="text/javascript"></script>
<script src="{{ asset('front/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('front/js/select2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('front/js/aos.js') }}" type="text/javascript"></script>
<script src="{{ asset('front/js/backToTop.js') }}" type="text/javascript"></script>
<script src="{{ asset('front/js/feather.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('front/js/owl.carousel.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('front/js/script.js') }}" type="text/javascript"></script>
<script src="{{ asset('front/js/rocket-loader.min.js') }}" type="text/javascript"></script>
    </body>
</html>
