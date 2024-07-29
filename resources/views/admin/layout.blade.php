<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#2c7be5">
    <link rel="manifest" href="/manifest.json">
    <style data-fullcalendar=""></style>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700|Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap">
    <title>Migrants Sale </title>
   


    <link rel="stylesheet" type="text/css" href="{{ asset('css/theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard/theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard/svg.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/theme-rtl.min.css') }}"> --}}
</head>

<body>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <main class="main" id="main">
        <div class="container">
            @include('admin.navbar')


            <div class="content">
                @include('admin.topbar')
                <main>
                    @yield('content')
                </main>

                <footer class="footer">
                    <div class="justify-content-between text-center fs-10 mt-4 mb-3 row">
                        <div class="col-sm-auto">
                            <p class="mb-0 text-600">Thank you for creating with Migants Sale
                                <span class="d-none d-sm-inline-block">|</span>
                                <br class="d-sm-none"> 2024 ©
                                <a href="https://Migrants Sales.com">Migrants Sales</a>
                            </p>
                        </div>
                        <div class="col-sm-auto">
                            <p class="mb-0 text-600">v4.4.0</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        </div>
        <div class="Toastify"></div>
    </main>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/anchor.min.js') }}"></script>
    <script src="{{ asset('js/echarts.min.js') }}"></script>
    <script src="{{ asset('js/lodash.min.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
    {{-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> --}}
</body>


</html>

