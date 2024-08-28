<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ getenv('APP_NAME') }}</title>
    <meta name="description" content="UI/ Visual Designer">
    <meta name="keywords" content=".">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="{{ asset('styles/global.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('Asset 4@4x 1.png') }}" sizes="any">
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


    {{-- Toggle Mobile Navigation  --}}
    <script>
        const toggleButton = document.querySelectorAll('.menuButton');
        const menu = document.getElementById('menu');

        toggleButton.forEach(function(button) {
            button.addEventListener('click', function() {
                menu.classList.toggle('translate-x-[500px]');
            })
        });
    </script>
    {{-- Toggle Mobile Navigation --}}

    {{-- Scroll To Top --}}
    <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
    {{-- Scroll To Top --}}

    {{-- Active Page --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Get the current path
            const currentPath = window.location.pathname;

            // Select all links in the navigation
            const navLinks = document.querySelectorAll('ul a');

            // Loop through each link and add underline to the active one
            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('underline'); // Add underline class if active
                }
            });
        });
    </script>

    {{-- Active Page --}}

    {{-- Animate on scroll --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    {{-- Animate on scroll --}}
    @yield('script')
</body>

</html>
