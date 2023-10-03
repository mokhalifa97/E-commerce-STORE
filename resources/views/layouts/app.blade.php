<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Surfside Media</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- front styles -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/imgs/theme/favicon.ico') }}">
    <link rel="stylesheet" href=" {{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/css/custom.css') }}">
    @livewireStyles
</head>



<body>
    <div id="app">
        <main >
            @yield('content')
        </main>
    </div>
</body>



    <!-- Vendor JS-->
    <script src=" {{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src=" {{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src=" {{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src=" {{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src=" {{ asset('assets/js/plugins/slick.js') }}"></script>
    <script src=" {{ asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src=" {{ asset('assets/js/plugins/wow.js') }}"></script>
    <script src=" {{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
    <script src=" {{ asset('assets/js/plugins/perfect-scrollbar.js') }}"></script>
    <script src=" {{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
    <script src=" {{ asset('assets/js/plugins/select2.min.js') }}"></script>
    <script src=" {{ asset('assets/js/plugins/waypoints.js') }}"></script>
    <script src=" {{ asset('assets/js/plugins/counterup.js') }}"></script>
    <script src=" {{ asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src=" {{ asset('assets/js/plugins/images-loaded.js') }}"></script>
    <script src=" {{ asset('assets/js/plugins/isotope.js') }}"></script>
    <script src=" {{ asset('assets/js/plugins/scrollup.js') }}"></script>
    <script src=" {{ asset('assets/js/plugins/jquery.vticker-min.js') }}"></script>
    <script src=" {{ asset('assets/js/plugins/jquery.theia.sticky.js') }}"></script>
    <script src=" {{ asset('assets/js/plugins/jquery.elevatezoom.js') }}"></script>
    <!-- Template  JS -->
    <script src=" {{ asset('assets/js/main.js?v=3.3') }}"></script>
    <script src=" {{ asset('assets/js/shop.js?v=3.3"></scr') }}"></script></body>
    @livewireScripts
</html>
