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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css">

</head>
<body>
<div id="app">
    <div class="dashboard container-fluid">
        <div class="row">
            <div class="col-2">
                @include('includes.dashboard-sidebar')
            </div>
            <div class="col-10">
                <div>
                    @include('includes.dashboard-header')
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @include('includes.dashboard-footer')
</div>

</body>
</html>
