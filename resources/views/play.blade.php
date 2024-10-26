@extends('layouts.app')

@section('content')
    @include('includes.navbar')

    <section class="my-20 md:px-32 px-5 flex md:flex-row flex-col gap-10">
        <div class="md:w-1/3 border border-black rounded-[36px]" data-aos="fade-right">
            <img class="rounded-[36px]" src="{{ asset('images/play.png') }}" style="box-shadow: -7px 5px 0px 4px #000;">
        </div>

        <div class="md:w-2/3 border md:px-10 pt-5 p-5 border-black rounded-[36px]" data-aos="fade-left" data-aos-delay="200"
            style="box-shadow: -7px 5px 0px 4px #000;">
            <h1 class="text-4xl mb-4 font-light font-[Causten-Regular]">Playground</h1>
            <p class=" font-light">
                Design is more than just a profession for me; it's an expression of love, creativity, and boundless
                imagination. From my earliest fascination with shapes and colours, I ventured into various design
                disciplines, finding joy in telling stories and solving problems through my work. As my portfolio grew, so
                did my desire to share it with the world, leading to the creation of a design playground—a virtual space
                where creativity thrives and imagination knows no bounds. Despite the challenges of bringing it to life, the
                result stands as a vibrant testament to my passion, inviting visitors to explore and be inspired. Through
                this platform, I've forged meaningful connections with others in the design community, fuelling my desire to
                push the boundaries of my craft and create experiences that leave a lasting impact. 💛
            </p>
        </div>
    </section>

    <section class="mt-20 md:px-32 px-5 flex md:flex-row flex-col gap-10">
        <div class="md:w-1/2">
            <div class=" border border-black rounded-[36px]" data-aos="fade-up" data-aos-duration="800"
                data-aos-delay="100">
                <img class="rounded-[36px]" class="w-full" src="{{ asset('images/R.png') }}"
                    style="box-shadow: -7px 5px 0px 4px #000;">
            </div>
            <a data-aos="fade-up" data-aos-duration="800" href="https://www.behance.net/gallery/200351057/Type-R"
                onmouseover="changeArrow(this)" onmouseout="resetArrow(this)"
                class="view-button flex items-center cursor-pointer bg-black rounded-full text-white px-3 py-2 gap-1 w-fit mt-6">
                <p>Discover</p>
                <img src="{{ asset('images/arrow short.svg') }}">
            </a>
        </div>
        <div class="md:w-1/2">
            <div class=" border border-black rounded-[36px]" data-aos="fade-up" data-aos-duration="800"
                data-aos-delay="200">
                <img class="rounded-[36px]" class="w-full" src="{{ asset('images/R2.png') }}"
                    style="box-shadow: -7px 5px 0px 4px #000;">
            </div>
            <a data-aos="fade-up" data-aos-duration="800" href="https://www.behance.net/gallery/200351057/Type-R"
                onmouseover="changeArrow(this)" onmouseout="resetArrow(this)"
                class="view-button flex items-center cursor-pointer bg-black rounded-full text-white px-3 py-2 gap-1 w-fit mt-6">
                <p>Discover</p>
                <img src="{{ asset('images/arrow short.svg') }}">
            </a>
        </div>
    </section>

    <section class="pt-20 md:px-32 px-5 flex md:flex-row flex-col gap-10 pb-60">
        <div class="md:w-1/2">
            <div class=" border border-black rounded-[36px]" data-aos="fade-up" data-aos-duration="800"
                data-aos-delay="100">
                <img class="rounded-[36px]" class="w-full" src="{{ asset('images/bola.png') }}"
                    style="box-shadow: -7px 5px 0px 4px #000;">
            </div>
            <a data-aos="fade-up" data-aos-duration="800" href="https://www.behance.net/gallery/122955559/Bola-and-Tola"
                onmouseover="changeArrow(this)" onmouseout="resetArrow(this)"
                class="view-button flex items-center cursor-pointer bg-black rounded-full text-white px-3 py-2 gap-1 w-fit mt-6">
                <p>Discover</p>
                <img src="{{ asset('images/arrow short.svg') }}">
            </a>
        </div>
        <div class="md:w-1/2">
            <div class=" border border-black rounded-[36px]" data-aos="fade-up" data-aos-duration="800"
                data-aos-delay="200">
                <img class="rounded-[36px]" class="w-full" src="{{ asset('images/radbot.png') }}"
                    style="box-shadow: -7px 5px 0px 4px #000;">
            </div>
            <a data-aos="fade-up" data-aos-duration="800" href="https://www.behance.net/gallery/122951453/Radbot"
                onmouseover="changeArrow(this)" onmouseout="resetArrow(this)"
                class="view-button flex items-center cursor-pointer bg-black rounded-full text-white px-3 py-2 gap-1 w-fit mt-6">
                <p>Discover</p>
                <img src="{{ asset('images/arrow short.svg') }}">
            </a>
        </div>
    </section>

    @include('includes.footer')
@endsection

@section('script')
    <script>
        function changeArrow(element) {
            let img = element.querySelector('img');
            img.src = "images/long arrow.svg";
        }

        function resetArrow(element) {
            let img = element.querySelector('img');
            img.src = "images/arrow short.svg";
        }
    </script>
@endsection
