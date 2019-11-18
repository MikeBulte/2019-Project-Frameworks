<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NK Carcassonne</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand ml-5" href="{{ url('/') }}"><img src="{{ asset('storage/img/carcassonne-nk-logo.png') }}"
                                                                width="220" height="60">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active ml-3">
                    <a class="nav-link text-primary" href="/">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">OVER HET NK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link border border-primary bg-primary text-white"
                       href="{{ route('login') }}">{{ __('Inschrijven') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border border-primary ml-3 mr-5" href="/login">Inloggen</a>
                </li>
            </ul>
            <!-- Authentication Links -->
        </div>
    </nav>

        @yield('content')
        @include('includes.footer')
    </div>

</body>
</html>
