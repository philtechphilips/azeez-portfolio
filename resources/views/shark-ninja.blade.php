@extends('layouts.app')

@section('content')
    <section class="w-full h-[730px] relative md:px-48 px-5 z-50 bg-[#222424]">
        <a href="/" class="flex relative z-[100] pt-20 items-center gap-3">
            <img src="{{ asset('images/back-arrow.svg') }}" alt="">
            <p class="text-white font-medium text-xl">Back</p>
        </a>
        <div class="absolute top-48 right-0 md:left-48 left-5 z-[1000]">
            <h1 class="text-white z-[1000] font-semibold text-4xl mb-12 font-[Inter]" data-aos="fade-up">Shark</h1>

            <div class="flex flex-col gap-1 mb-6">
                <h4 class="text-white font-bold font-[Inter]" data-aos="fade-up">Role</h4>
                <h4 class="text-white font-light font-[Inter]" data-aos="fade-up">Senior Ui Designer</h4>
            </div>

            <div class="flex flex-col gap-1 mb-6">
                <h4 class="text-white font-bold font-[Inter]" data-aos="fade-up">Duration</h4>
                <h4 class="text-white font-light font-[Inter]" data-aos="fade-up">1 month</h4>
            </div>

            <div class="flex flex-col gap-1 mb-6">
                <h4 class="text-white font-bold font-[Inter]" data-aos="fade-up">Tools</h4>
                <h4 class="text-white font-light font-[Inter]" data-aos="fade-up">Figma</h4>
            </div>

            <div class="flex flex-col gap-1 mb-6">
                <h4 class="text-white font-bold font-[Inter]" data-aos="fade-up">Team</h4>
                <h4 class="text-white font-light font-[Inter]" data-aos="fade-up">Accenture song</h4>
            </div>
        </div>

        <img src="{{ asset('images/shark-bg.png') }}" class="hidden md:flex w-full md:h-full top-0 absolute right-0">
        <img src="{{ asset('images/shark mobile-bg.png') }}" class="w-full md:hidden flex md:h-full top-48 absolute right-0">
    </section>

    <section class="w-full bg-[#fff] md:px-48 px-5 flex md:flex-row flex-col justify-between pb-20 pt-20">
        <div class="mb-4">
            <h1 class="text-[#000] text-2xl font-semibold text-center md:text-left font-[Inter]" data-aos="fade-up"
                data-aos-duration="1000">Role</h1>
        </div>

        <div class="md:w-[518px]">
            <p class="text-[#000] text-center md:text-left font-[Inter]" data-aos="fade-up">
                As a Senior Product Designer for the Shark e-commerce website, I led user research and UI/UX design to
                create an engaging shopping experience. I developed prototypes, conducted usability testing, and iteratively
                refined the design based on feedback. Collaborating with cross-functional teams, I ensured the design was
                aligned with business goals and technically feasible. I prioritised responsive and accessible design,
                maintaining the Shark brand's visual identity. Additionally, I optimised performance and presented design
                concepts to stakeholders for alignment and buy-in.
            </p>
        </div>
    </section>

    <section class="w-full bg-[#fff] md:px-48 px-5 flex md:flex-row flex-col justify-between pb-20">
        <img src="{{asset("shark-projects.png")}}" alt="">
    </section>

    <section class="w-full bg-[#fff] md:px-48 px-5 flex md:flex-row flex-col justify-between md:pb-20">
        <div class="mb-4">
            <h1 class="text-[#000] text-2xl font-semibold text-center md:text-left font-[Inter]" data-aos="fade-up"
                data-aos-duration="1000">About</h1>
        </div>

        <div class="md:w-[518px]">
            <p class="text-[#000] text-center md:text-left font-[Inter]" data-aos="fade-up">
                The Shark e-commerce website was designed to enhance the customer buying experience through user-centric design and intuitive UI/UX. We streamlined the checkout process, ensuring a fast and hassle-free purchase journey. The website was made fully responsive and accessible, providing a consistent experience across all devices. Maintaining visual appeal and brand consistency was a key focus, alongside performance optimisation for smooth functionality.
            </p>
        </div>
    </section>

    <section class="w-full bg-[#fff] md:px-48 px-5 flex md:gap-20 gap-10 md:flex-row flex-col justify-between py-20 pt-0">
        <div class="mt-28">
            <img src="{{asset("mask-group.png")}}" alt="">
        </div>

        <div class="mt-0">
            <img src="{{asset("Flying Macbook Air 2022 Perspective Mockup.png")}}" class="md:rounded-[80px] rounded-[40px]" alt="">
        </div>
    </section>

    <section class="w-full bg-[#fff] md:px-48 px-5 justify-between pb-20">
        <div class="mb-0">
            <h1 class="text-[#000] text-lg text-center md:text-left font-[Inter]" data-aos="fade-up"
                data-aos-duration="1000">Design process</h1>
        </div>

            <div class="md:mt-16 mt-7">
                <img src="{{asset("design-process.png")}}" alt="">
            </div>
    </section>

    <section class="w-full bg-[#fff] md:px-48 px-5 justify-between pb-20">
        <div class="mb-0">
            <h1 class="text-[#000] text-xl text-center md:text-left font-[Inter] font-medium" data-aos="fade-up"
                data-aos-duration="1000">Competitors analysis</h1>
        </div>

            <div class="md:mt-16 mt-7">
                <img src="{{asset("competitor.png")}}" alt="">
            </div>
    </section>

    <section class="w-full bg-[#fff] md:px-48 px-5 justify-between pb-20">
        <div class="mb-0">
            <h1 class="text-[#000] text-xl text-center md:text-left font-[Inter] font-medium" data-aos="fade-up"
                data-aos-duration="1000">Colour palette</h1>
        </div>

            <div class="md:mt-16 mt-7">
                <img src="{{asset("colour-pallete.png")}}" alt="">
            </div>
    </section>

    <section class="w-full bg-[#fff] md:px-48 px-5 justify-between pb-20">
        <div class="mb-0">
            <h1 class="text-[#000] text-xl text-center md:text-left font-[Inter] font-medium" data-aos="fade-up"
                data-aos-duration="1000">Typography</h1>
        </div>

            <div class="md:mt-16 mt-7">
                <img src="{{asset("typography.png")}}" alt="">
            </div>
    </section>

    <section class="w-full bg-[#fff] md:px-48 px-5 justify-between pb-20">
        <div class="mb-0">
            <h1 class="text-[#000] text-xl text-center md:text-left font-[Inter] font-medium" data-aos="fade-up"
                data-aos-duration="1000">Typography</h1>
        </div>

            <div class="md:mt-16 mt-7">
                <img src="{{asset("typography.png")}}" alt="">
            </div>
    </section>
@endsection
