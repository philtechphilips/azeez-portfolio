{{-- Desktop navigation --}}
<div class="flex justify-center items-center">
    <header class="w-full max-w-[1520px] bg-white py-3 md:px-28 px-5 header-shadow z-[1000] mb-[2px]">
        <nav class="flex items-center justify-between">
            <a href="/">
                <img src="{{ asset('images/Asset 4@4x 1.png') }}">
            </a>

            <ul class="hidden md:flex items-center gap-12">
                <li class="font-bold"><a href="/work">Work</a></li>
                <li class="font-bold"><a href="/play">Play </a></li>
                <li class="font-bold"><a href="/about">About</a></li>
                <li class="font-bold"><a target="_blank" href="https://drive.google.com/file/d/1DLDW7IUnKwsL1IPC_KGHtbYqLvND_HsD/view?usp=drive_link">Resume</a></li>
            </ul>

            <i class="ri-menu-2-line text-3xl md:hidden flex menuButton"></i>
        </nav>

        <nav id="menu"
            class="md:hidden fixed z-[1000] top-0 left-0 w-full bg-gray-50 h-screen px-5 py-10 translate-x-[500px] duration-[300ms] ease-in transform">
            <div class="flex justify-between items-center">
                <a href="/">
                    <img src="{{ asset('images/Asset 4@4x 1.png') }}">
                </a>
                <i class="ri-close-line text-3xl menuButton"></i>
            </div>

            <ul class="flex flex-col gap-16 mt-10 justify-center items-center">
                <li><a href="/" class="text-3xl">Work</a></li>
                <li><a href="/play" class="text-3xl">Play</a></li>
                <li><a href="/about" class="text-3xl">About</a></li>
                <li><a target="_blank" href="https://drive.google.com/file/d/1DLDW7IUnKwsL1IPC_KGHtbYqLvND_HsD/view?usp=drive_link" class="text-3xl">Resume</a></li>
            </ul>
        </nav>

    </header>
</div>

{{-- Desktop navigation --}}
