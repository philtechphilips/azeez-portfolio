@extends('layouts.app')


@section('content')
    @include('includes.navbar')

    <section
        class="flex flex-col-reverse md:flex-row items-center justify-center md:justify-between md:px-28 px-5 md:gap-48 gap-10 cursor-pointer pt-5 pb-20 hero">
        <div class="image-ai" class="md:w-[515px] h-[586px]">
            <img src="{{ asset('image 11.png') }}" class="md:w-[515px] md:h-[586px]">
        </div>
        <div class="skill" class="w-[342px] h-[373.54px]">
            <img src="{{ asset('image 12.png') }}" class="md:w-[342px] md:h-[373.54px]">
        </div>
    </section>

    <section class="flex flex-col justify-center md:px-28 px-5 pb-28">
        <div class="flex flex-col items-center justify-center gap-3 mb-8 w-full">
            <h1 class="font-semibold">Selected work</h1>
            <img src="{{ asset('down.svg') }}" class="animate-bounce infinite">
        </div>

        <div class="flex flex-wrap gap-4 justify-center gap-y-10">
            <div class="w-[510px]">
                <img src="{{ asset('pro-1.png') }}" class="w-[510px]">
                <div class="flex flex-col gap-1 mt-8">
                    <h1 class="text-3xl font-medium">HSBC</h1>
                    <p class="text-[#A0A09F]">Lead Product Designer</p>
                    <p>Global component harmonisation to ensure the development of
                        user-friendly interactions in accordance with best standards.</p>
                    <a href="/hsbc" onmouseover="changeArrow(this)" onmouseout="resetArrow(this)"
                        class="view-button flex items-center cursor-pointer bg-black rounded-full text-white px-3 py-2 gap-1 w-fit mt-6">
                        <p>Discover</p>
                        <img src="{{ asset('arrow short.svg') }}">
                    </a>
                </div>
            </div>

            <div class="w-[510px]">
                <img src="{{ asset('pro-2.png') }}" class="w-[510px]">
                <div class="flex flex-col gap-1 mt-8">
                    <h1 class="text-3xl font-medium">Post office</h1>
                    <p class="text-[#A0A09F]">Lead UI Designer, UX Designer, Design system expert</p>
                    <p>Comprehensive design system for a front office ePos solution establishing core principles.</p>
                    <a href="/hsbc" onmouseover="changeArrow(this)" onmouseout="resetArrow(this)"
                        class="view-button flex items-center cursor-pointer bg-black rounded-full text-white px-3 py-2 gap-1 w-fit mt-6">
                        <p>Discover</p>
                        <img src="{{ asset('arrow short.svg') }}">
                    </a>
                </div>
            </div>

            <div class="w-[510px]">
                <img src="{{ asset('pro-2.png') }}" class="w-[510px]">
                <div class="flex flex-col gap-1 mt-8">
                    <h1 class="text-3xl font-medium">M&G</h1>
                    <p class="text-[#A0A09F] font-light">Lead Designer</p>
                    <p>Global component harmonisation to ensure the development of
                        user-friendly interactions in accordance with best standards.
                    </p>
                    <a href="/hsbc" onmouseover="changeArrow(this)" onmouseout="resetArrow(this)"
                        class="view-button flex items-center cursor-pointer bg-black rounded-full text-white px-3 py-2 gap-1 w-fit mt-6">
                        <p>Discover</p>
                        <img src="{{ asset('arrow short.svg') }}">
                    </a>
                </div>
            </div>

            <div class="w-[510px]">
                <img src="{{ asset('pro-2.png') }}" class="w-[510px]">
                <div class="flex flex-col gap-1 mt-8">
                    <h1 class="text-3xl font-medium">Vodafone</h1>
                    <p class="text-[#A0A09F]">Lead UI Designer, UX Designer</p>
                    <p>
                        Global component harmonisation to ensure the development of
                        user-friendly interactions in accordance with best standards.
                    </p>
                    <a href="/hsbc" onmouseover="changeArrow(this)" onmouseout="resetArrow(this)"
                        class="view-button flex items-center cursor-pointer bg-black rounded-full text-white px-3 py-2 gap-1 w-fit mt-6">
                        <p>Discover</p>
                        <img src="{{ asset('arrow short.svg') }}">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('script')
    <script>
        const skillImage = document.querySelector('.image-ai img');

        document.querySelector('.hero').addEventListener('mouseover', function() {
            skillImage.src = 'Frame.png';
        });

        document.querySelector('.hero').addEventListener('mouseout', function() {
            skillImage.src = 'image 11.png';
        });
    </script>

    <script>
        function changeArrow(element) {
            let img = element.querySelector('img');
            img.src = "long arrow.svg";
        }

        function resetArrow(element) {
            let img = element.querySelector('img');
            img.src = "arrow short.svg";
        }
    </script>
@endsection
