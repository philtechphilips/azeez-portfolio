@extends('layouts.app')

@section('content')
    @include('includes.navbar')

    <section class="my-20 md:px-32 px-5 flex md:flex-row flex-col gap-10">
        <div class="md:w-1/3 border border-black rounded-[36px]" data-aos="fade-right">
            <img class="rounded-[36px]" src="{{ asset('images/azeez.png') }}" style="box-shadow: -7px 5px 0px 4px #000;">
        </div>

        <div class="md:w-2/3 border md:p-10 p-5 border-black rounded-[36px]" data-aos="fade-left" data-aos-delay="200" style="box-shadow: -7px 5px 0px 4px #000;">
            <h1 class="text-4xl mb-4 font-light font-[Causten-Regular]">Professional background</h1>
            <p class="mb-4 font-[Causten-Regular]">I'm a highly talented and inventive Product Designer with certification
                from Interaction design foundation and Google UX design. I have over 8 years of expertise in sectors ranging
                from finance to entertainment, government, and automobile applications.</p>
            <p class="font-[Causten-Regular]">I have a demonstrated track record of developing aesthetically beautiful and
                user-friendly solutions that drive commercial success by combining a thorough grasp of user-centered design
                concepts with a good eye for aesthetics. Professional background</p>
        </div>
    </section> 

    <section class="my-20 md:px-32 px-5 flex md:flex-row flex-col gap-10 md:pb-60 pb-20">
        <div class="md:w-1/3 border p-10 border-black rounded-[36px]" data-aos="fade-up" data-aos-duration="800" style="box-shadow: -7px 5px 0px 4px #000;">
            <h1 class="text-4xl mb-4 font-light font-[Causten-Regular]">A little more</h1>
            <p class="mb-4 font-[Causten-Regular]">
                If I am not busy designing I will be at events talking about designs.
            </p>
            <p class="font-[Causten-Regular]">
                I am also a proud robot daddy 😁, so if you see me in public do ask about my little Robot.
            </p>
        </div>

        <div class="md:w-1/3  rounded-[36px]" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            <img class="rounded-[36px]" class="w-full" src="{{ asset('images/azeez-2.png') }}" style="box-shadow: -7px 5px 0px 4px #000;">
        </div>

        <div class="md:w-1/3  rounded-[36px]" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <img class="rounded-[36px]" class="w-full" src="{{ asset('images/azeez-3.png') }}" style="box-shadow: -7px 5px 0px 4px #000;">
        </div>
    </section>
@endsection
