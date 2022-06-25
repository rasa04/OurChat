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
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    <nav id="app_enter">
        <a id="ourchat" href="{{ route('home') }}">OurChat</a>
        @if (Illuminate\Support\Facades\Route::currentRouteName() == 'login')
            <a id="enter" href="{{ route('register') }}" type="button">Sign up</a>
        @else
            <a id="enter" href="{{ route('login') }}" type="button">Sign in</a>
        @endif
    </nav>
    @yield('content')
</body>

</html>
