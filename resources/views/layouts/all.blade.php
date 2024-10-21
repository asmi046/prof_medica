<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">

    <meta property="og:locale" content="ru_RU" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="{{ \Request::url() }}" />
    <meta property="og:site_name" content="ПрофМедика" />
    <meta property="og:image" content="{{ asset('img/og_img.webp') }}" />
    <meta property="og:image:type" content="image/webp" />
    <meta name="twitter:card" content="summary_large_image" />

    <link rel="icon" type="image/png" href="{{ asset('/img/favicons/icon256.png') }}" sizes="256x256">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicons/icon128.png') }}" sizes="128x128">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicons/icon64.png') }}" sizes="64x64">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicons/icon32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicons/icon16.png') }}" sizes="16x16">
    <link rel="icon" type="image/svg" href="{{ asset('/img/favicons/fav.svg') }}" sizes="any">



    <meta name="_token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js', 'public/scss/main.scss'])
</head>

<body>
    @include("allicon")

    <main id="main">
        <x-header></x-header>
        @yield('main')
        <x-footer></x-footer>
    </main>
</body>

</html>
