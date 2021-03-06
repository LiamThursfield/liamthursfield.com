<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts._partials.head.analytics_head')

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1A202C">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ $page->getMetadataField('title', 'Liam Thursfield | Web Developer') }}
    </title>

    <meta name="description" content="{{ $page->getMetadataField('description', "Hi, I'm Liam, a web developer based in Staffordshire, England.") }}" >

    @php
        $ogFields = [
            'og_description'    => 'og:description',
            'og_image'          => 'og:image',
            'og_title'          => 'og:title',
            'og_type'           => 'og:type',
            'og_url'            => 'og:url',
        ];
    @endphp

    @foreach($ogFields as $slug => $property)
        @if($page->getMetaDataField($slug))
            <meta property="{{ $property }}" content="{{ $page->getMetaDataField($slug) }}" />
        @endif
    @endforeach

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

    <header-main
        :menu="{{ json_encode($page->getLayoutContentFieldData('header-menu')) }}"
    ></header-main>

    <main>
        @yield('content')
    </main>

    <!-- Page Break -->
    <div class="border border-yellow-500 opacity-25"></div>

    <!-- Footer -->
    <footer class="bg-lilac-900 py-12">
        <div class="container flex flex-col items-center mx-auto relative ">
            <p class="font-bold">
                &copy; {{ \Illuminate\Support\Facades\Date::now()->year }}
                <span class="text-yellow-600">Liam Thursfield</span>
            </p>

            @if($page->getLayoutContentFieldData('footer-text'))
                <div class="mt-2">
                    {!! $page->getLayoutContentFieldData('footer-text') !!}
                </div>
            @endif
        </div>
    </footer>
</div>

@include('layouts._partials.footer.analytics_footer')
</body>
</html>
