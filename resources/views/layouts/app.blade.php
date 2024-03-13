<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ getenv('APP_NAME') }}</title>
    <meta name="description"
        content="UI/ Visual Designer">
    <meta name="keywords" content=".">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

    <link rel="stylesheet" href="{{ asset('styles/global.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/icon.png') }}" sizes="any">
    @vite('resources/css/app.css')

    <!-- Styles -->
</head>

<body>
    <div id="app">
        <main class="">
            {{-- @include('includes.navbar') --}}
            @yield('content')
            @include('includes.footer')
        </main>
    </div>

    @yield('script')
</body>

</html>
