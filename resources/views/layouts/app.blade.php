<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">OurChat</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
            <div class="btn-group d-flex" role="group" aria-label="Basic outlined example">
                <a href="{{ route('register') }}" type="button" class="btn btn-outline-primary">Sign up</a>
                <a href="{{ route('login') }}" type="button" class="btn btn-outline-primary">Sign in</a>
            </div>
        </div>
    </nav>
    <div id="app" class="mt-5">
        @yield('content')
    </div>
</body>

</html>
