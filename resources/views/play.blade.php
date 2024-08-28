@extends('layouts.app')

@section('content')
    @include('includes.navbar')

    <section class="my-20 md:px-32 px-5 flex md:flex-row flex-col gap-10">
        <div class="md:w-1/3 border border-black rounded-[36px]" data-aos="fade-right">
            <img class="rounded-[36px]" src="{{ asset('play.png') }}" style="box-shadow: -7px 5px 0px 4px #000;">
        </div>

        <div class="md:w-2/3 border md:px-10 pt-5 p-5 border-black rounded-[36px]" data-aos="fade-left" data-aos-delay="200" style="box-shadow: -7px 5px 0px 4px #000;">
            <h1 class="text-4xl mb-4 font-light font-[Causten-Regular]">Playground</h1>
            <p class=" font-light">
                Design is more than just a profession for me; it's an expression of love, creativity, and boundless imagination. From my earliest fascination with shapes and colours, I ventured into various design disciplines, finding joy in telling stories and solving problems through my work. As my portfolio grew, so did my desire to share it with the world, leading to the creation of a design playground—a virtual space where creativity thrives and imagination knows no bounds. Despite the challenges of bringing it to life, the result stands as a vibrant testament to my passion, inviting visitors to explore and be inspired. Through this platform, I've forged meaningful connections with others in the design community, fuelling my desire to push the boundaries of my craft and create experiences that leave a lasting impact. 💛
            </p>
        </div>
    </section>

    <section class="my-20 md:px-32 px-5 flex md:flex-row flex-col gap-10 pb-60">
        <div class="md:w-1/3 border p-10 border-black rounded-[36px]" data-aos="fade-up" data-aos-duration="800" style="box-shadow: -7px 5px 0px 4px #000;">
            <h1 class="text-4xl mb-4 font-light font-[Causten-Regular]">A little more</h1>
            <p class="mb-4 font-[Causten-Regular]">
                If I am not busy designing I will be at events talking about designs.
            </p>
            <p class="font-[Causten-Regular]">
                I am also a proud robot daddy 😁, so if you see me in public do ask about my little Robot.
            </p>
        </div>

        <div class="md:w-1/3 border border-black rounded-[36px]" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            <img class="rounded-[36px]" class="w-full" src="{{ asset('azeez-2.png') }}" style="box-shadow: -7px 5px 0px 4px #000;">
        </div>

        <div class="md:w-1/3 border border-black rounded-[36px]" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <img class="rounded-[36px]" class="w-full" src="{{ asset('azeez-3.png') }}" style="box-shadow: -7px 5px 0px 4px #000;">
        </div>
    </section>
@endsection
