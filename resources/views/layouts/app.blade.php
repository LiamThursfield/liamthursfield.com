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

    <header-main></header-main>

    <main>
        @yield('content')
    </main>

    <!-- Page Break -->
    <div class="border border-yellow-500 opacity-25"></div>

    <!-- Footer -->
    <footer class="bg-lilac-900 py-12">
        <div class="container flex flex-col items-center mx-auto relative ">
            <p class="font-bold">
                &copy; 2020
                <span class="text-yellow-600">Liam Thursfield</span>
            </p>

            <p class="font-serif mt-3 opacity-50 text-sm">
                More content coming soon...
            </p>
        </div>
    </footer>
</div>

@include('layouts._partials.footer.analytics_footer')
</body>
</html>
