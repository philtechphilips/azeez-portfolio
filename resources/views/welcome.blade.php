@extends('layouts.app')


@section('content')
    @include('includes.navbar')
<div class="max-w-[1440px] flex justify-center">
    <section
        class="flex flex-col md:flex-row items-center justify-center md:justify-between md:px-28 px-5 md:gap-48 gap-10 cursor-pointer pt-5 pb-20 hero">
        <div class="image-ai" class="md:w-[515px] h-[586px]">
            <img src="{{ asset('images/image 11.png') }}" data-aos="fade-right" data-aos-duration="800"
                class="md:w-[515px] md:h-[586px]">
        </div>
        <div class="w-[342px] h-[373.54px] animate-bounce infinite">
            <img src="{{ asset('images/image 12.png') }}" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200"
                class="md:w-[342px] md:h-[373.54px]">
        </div>
    </section>
</div>
    <section class="flex flex-col justify-center md:px-28 px-5 pb-28">
        <div class="flex flex-col items-center justify-center gap-3 mb-8 w-full">
            <h1 class="font-semibold">Selected work</h1>
            <img src="{{ asset('images/down.svg') }}" class="animate-bounce infinite">
        </div>

        <div class="flex flex-wrap gap-4 justify-center gap-y-10">
            <div class="w-[510px]">
                <img src="{{ asset('images/hsbc-home.png') }}" data-aos="fade-up" data-aos-duration="800" class="w-[510px] border rounded-3xl border-black">
                <div class="flex flex-col gap-1 mt-8">
                    <h1 class="text-3xl font-medium" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">HSBC
                    </h1>
                    <p class="text-[#A0A09F]" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">Lead Product
                        Designer</p>
                    <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Global component harmonisation to
                        ensure the development of
                        user-friendly interactions in accordance with best standards.</p>
                    <a data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" href="/hsbc"
                        onmouseover="changeArrow(this)" onmouseout="resetArrow(this)"
                        class="view-button flex items-center cursor-pointer bg-black rounded-full text-white px-3 py-2 gap-1 w-fit mt-6">
                        <p>Discover</p>
                        <img src="{{ asset('images/arrow short.svg') }}">
                    </a>
                </div>
            </div>

            <div class="w-[510px]">
                <img src="{{ asset('images/post-office-home.svg') }}" data-aos="fade-up" data-aos-duration="800" class="w-[510px] border rounded-3xl border-black">
                <div class="flex flex-col gap-1 mt-8">
                    <h1 class="text-3xl font-medium" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">Post
                        office</h1>
                    <p class="text-[#A0A09F]" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">Lead UI
                        Designer, UX Designer, Design system expert</p>
                    <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Comprehensive design system for a
                        front office ePos solution establishing core principles.</p>
                    <a data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" href="/post-office"
                        onmouseover="changeArrow(this)" onmouseout="resetArrow(this)"
                        class="view-button flex items-center cursor-pointer bg-black rounded-full text-white px-3 py-2 gap-1 w-fit mt-6">
                        <p>Discover</p>
                        <img src="{{ asset('images/arrow short.svg') }}">
                    </a>
                </div>
            </div>

            <div class="w-[510px]">
                <img src="{{ asset('images/m-and-g-home.svg') }}" data-aos="fade-up" data-aos-duration="800" class="w-[510px]">
                <div class="flex flex-col gap-1 mt-8">
                    <h1 class="text-3xl font-medium" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">M&G
                    </h1>
                    <p class="text-[#A0A09F] font-light" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        Lead Designer</p>
                    <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Global component harmonisation to
                        ensure the development of
                        user-friendly interactions in accordance with best standards.
                    </p>
                    <a data-aos="fade-up" data-aos-duration="800" data-aos-duration="400" href="/m-and-g"
                        onmouseover="changeArrow(this)" onmouseout="resetArrow(this)"
                        class="view-button flex items-center cursor-pointer bg-black rounded-full text-white px-3 py-2 gap-1 w-fit mt-6">
                        <p>Discover</p>
                        <img src="{{ asset('images/arrow short.svg') }}">
                    </a>
                </div>
            </div>

            <div class="w-[510px]">
                <img src="{{ asset('images/shark.svg') }}" class="w-[510px]" data-aos="fade-up" data-aos-duration="800">
                <div class="flex flex-col gap-1 mt-8">
                    <h1 class="text-3xl font-medium" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        Shark Ninja</h1>
                    <p class="text-[#A0A09F]" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">Senior UI Designer</p>
                    <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        Global component harmonisation to ensure the development of
                        user-friendly interactions in accordance with best standards.
                    </p>
                    <a data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" href="/shark-ninja"
                        onmouseover="changeArrow(this)" onmouseout="resetArrow(this)"
                        class="view-button flex items-center cursor-pointer bg-black rounded-full text-white px-3 py-2 gap-1 w-fit mt-6">
                        <p>Discover</p>
                        <img src="{{ asset('images/arrow short.svg') }}">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- In your home.blade.php or relevant Blade view -->
@if(session('success'))
<script>
    $(document).ready(function() {
        toastr.success("{{ session('success') }}");
    });
</script>
@endif

@endsection


@section('script')
    <script>
        const skillImage = document.querySelector('.image-ai img');

        document.querySelector('.hero').addEventListener('mouseover', function() {
            skillImage.src = 'images/Frame.svg';
        });

        document.querySelector('.hero').addEventListener('mouseout', function() {
            skillImage.src = 'images/image 11.svg';
        });
    </script>

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

    <script>
        window.addEventListener('scroll', function() {
            const scrollY = window.scrollY;
            const skillImage = document.querySelector('.image-ai img');

            if (scrollY > 10) {
                skillImage.src = 'images/Frame.svg';
            }else{
                skillImage.src = 'images/image 11.svg';
            }
        });
    </script>
@endsection
