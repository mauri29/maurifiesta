<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://ucarecdn.com/d40cad3c-b529-4cdd-aa59-4340e6d5e7d3/Favicon.png" type="image/x-icon">
    <meta property="og:site_name" content="superfiesta.ch">
    <link rel="canonical" href="https://www.superfiesta.ch">
    <meta name="description" content="Willkommen bei Super Fiesta, den besten Ort, um lateinamerikanische Produkte zu finden | Bienvenidos a Super Fiesta, el mejor sitio donde encontrarás los productos de tu tierrita.">
    <meta property="og:image" content="article">
    <meta property="og:image" content="https://ucarecdn.com/d40cad3c-b529-4cdd-aa59-4340e6d5e7d3/Favicon.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/botones.css') }}" rel="stylesheet">
    <link href="{{ asset('css/thumbnail.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adicionales.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        @include('layouts.partials._navigation')
        @include('layouts.partials.alerts')
        @yield('content')
        @include('layouts.partials._footer')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    @include('sweet::alert')
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    @yield('scripts')
</body>
</html>
