{{-- Desktop navigation --}}
<header class="w-full bg-white py-3 md:px-28 px-5 header-shadow z-[1000] mb-[2px]">
    <nav class="flex items-center justify-between">
        <img src="{{ asset('Asset 4@4x 1.png') }}">

        <ul class="hidden md:flex items-center gap-12">
            <li class="font-bold"><a href="/work">Work</a></li>
            <li class="font-bold"><a href="/work">Play </a></li>
            <li class="font-bold"><a href="/work">About</a></li>
            <li class="font-bold"><a href="/work">Resume</a></li>
        </ul>

        <i class="ri-menu-2-line text-3xl md:hidden flex menuButton"></i>
    </nav>

    <nav id="menu" class="md:hidden fixed z-[1000] top-0 left-0 w-full bg-gray-50 h-screen px-5 py-10 translate-x-[500px] duration-[300ms] ease-in transform">
        <div class="flex justify-between items-center">
            <img src="{{ asset('Asset 4@4x 1.png') }}">
            <i class="ri-close-line text-3xl menuButton"></i>
        </div>

        <ul class="flex flex-col gap-16 mt-10 justify-center items-center">
            <li><a href="" class="text-3xl">Work</a></li>
            <li><a href="" class="text-3xl">Play</a></li>
            <li><a href="" class="text-3xl">About</a></li>
            <li><a href="" class="text-3xl">Resume</a></li>
        </ul>
    </nav>

</header>
{{-- Desktop navigation --}}
