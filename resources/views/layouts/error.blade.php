<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts._partials.head.analytics_head')

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1A202C">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Liam Thursfield') }}</title>

    <!-- Scripts -->
    @include('layouts._partials.head.routes-script')
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <main>
        <div class="flex flex-col items-center justify-center px-20 py-16 text-center">
            <h1 class="text-red-800 text-6xl">
                @yield('code')
            </h1>
            <h2 class="text-red-900 text-xl">
                @yield('message')
            </h2>
        </div>
    </main>
</div>

@include('layouts._partials.footer.analytics_footer')
</body>
</html>
