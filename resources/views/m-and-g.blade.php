@extends('layouts.app')

@section('content')
    <section class="w-full md:h-[730px] relative md:pl-48 pb-20 pl-5 z-50"
        style="background: url('{{ asset('m&g-bg.png') }}'); background-position: center center;  ">
        <a href="/" class="flex pt-20 items-center gap-3">
            <img src="{{ asset('back-arrow.svg') }}" alt="">
            <p class="text-white font-medium text-xl">Back</p>
        </a>
        <div class="flex md:flex-row flex-col w-full">
            <div class="z-[1000] md:w-1/3 mt-20 flex-wrap">
                <h1 class="text-white z-[1000] font-semibold text-4xl md:mb-12 mb-6 font-[Inter]" data-aos="fade-up">M&G</h1>

                <div class="flex md:flex-col flex-row flex-wrap">

                    <div class="flex flex-col gap-1 mb-6 w-1/2">
                        <h4 class="text-white font-bold font-[Inter]" data-aos="fade-up">Role</h4>
                        <h4 class="text-white font-light font-[Inter]" data-aos="fade-up">Lead product designer</h4>
                    </div>

                    <div class="flex flex-col gap-1 mb-6 w-1/2">
                        <h4 class="text-white font-bold font-[Inter]" data-aos="fade-up">Duration</h4>
                        <h4 class="text-white font-light font-[Inter]" data-aos="fade-up">1 month</h4>
                    </div>

                    <div class="flex flex-col gap-1 mb-6 w-1/2">
                        <h4 class="text-white font-bold font-[Inter]" data-aos="fade-up">Tools</h4>
                        <h4 class="text-white font-light font-[Inter]" data-aos="fade-up">Figma</h4>
                    </div>

                    <div class="flex flex-col gap-1 mb-6 w-1/2">
                        <h4 class="text-white font-bold font-[Inter]" data-aos="fade-up">Team</h4>
                        <h4 class="text-white font-light font-[Inter]" data-aos="fade-up">Accenture song</h4>
                    </div>
                </div>
            </div>

            <div class="md:w-2/3">
                <img src="{{ asset('mac.png') }}" class="w-fit md:-mt-16 mt-10">
            </div>

        </div>
    </section>

    <section class="w-full bg-[#000] md:px-48 px-5 flex md:flex-row flex-col justify-between pb-20 pt-20">
        <div class="mb-4">
            <h1 class="text-[#fff] text-2xl font-semibold text-center md:text-left font-[Inter]" data-aos="fade-up"
                data-aos-duration="1000">Role</h1>
        </div>

        <div class="md:w-[518px]">
            <p class="text-[#fff] text-center md:text-left font-[Inter]" data-aos="fade-up">
                I led the development and implementation of a consolidated investment and advisory solution. I defined a
                clear vision, assembled and led a cross-functional team, and maintained stakeholder engagement to ensure
                alignment with organisational goals. I conducted needs assessments, collaborated with IT to understand what
                was visible from a development perspective. I also organised training sessions to ensure smooth adoption and
                ongoing support. This project enhanced client experience, improved operational efficiency, and ensured
                regulatory compliance.
            </p>
        </div>
    </section>

    <section class="w-full bg-[#000] md:px-48 px-5 flex md:flex-row flex-col justify-between pb-20 pt-20">
        <video src="" controls></video>
    </section>

    <section class="w-full bg-[#000] md:px-48 px-5 flex md:flex-row flex-col justify-between pb-20 pt-20">
        <div class="mb-4">
            <h1 class="text-[#fff] text-2xl font-semibold text-center md:text-left font-[Inter]" data-aos="fade-up"
                data-aos-duration="1000">About</h1>
        </div>

        <div class="md:w-[518px]">
            <p class="text-[#fff] text-center md:text-left font-[Inter]" data-aos="fade-up">
                M&G boasts a rich heritage of historical firsts, reflecting our commitment to innovation and
                customer-centric solutions. M&G pioneers in launching the UK’s first mutual fund and providing essential
                insurance products for the working class, including infantile insurance. This legacy of seeking new, smarter
                ways to help our customers save and invest is deeply embedded in our DNA
            </p>
        </div>
    </section>

    <section class="w-full bg-[#000] md:px-48 px-5 flex md:flex-row flex-col justify-between pb-20 pt-20">
        <div class="mb-4">
            <h1 class="text-[#fff] text-2xl font-semibold text-center md:text-left font-[Inter] mb-8" data-aos="fade-up"
                data-aos-duration="1000">UI Design
            </h1>

            <img src="{{ asset('MacBook Pro and iPhone 15 Pro Mockup.png') }}" alt="">

            <h1 class="text-[#fff] mt-20 text-sm font-semibold text-right font-[Inter] mb-3" data-aos="fade-up"
                data-aos-duration="1000">Components
            </h1>

            <img src="{{ asset('components.png') }}" class="mt-4 mb-20" alt="">

            <h1 class="text-[#fff] text-sm font-semibold text-right font-[Inter] mb-3" data-aos="fade-up"
                data-aos-duration="1000">Website
            </h1>

            <img src="{{ asset('MacBook Pro Screen.png') }}" class="mt-4" alt="">

            <img src="{{ asset('Adviser Landing v1 1.png') }}" class="mt-8" alt="">

            <img src="{{ asset('Customer_Dashboard.png') }}" class="mt-8" alt="">

            <h1 class="text-[#fff] text-sm font-semibold mt-20 text-right font-[Inter] mb-3" data-aos="fade-up"
                data-aos-duration="1000">Mobile
            </h1>

            <div class="flex md:flex-row flex-col gap-20 flex-wrap justify-between">
                <img src="{{ asset('home.png') }}" class="w-[375px] md:pr-20" alt="">
                <img src="{{ asset('ActivePoruduct_Popup.png') }}" class="w-[375px] md:pl-20" alt="">
                <img src="{{ asset('ActivePoruduct_Popup (1).png') }}" class="w-[375px] md:pr-20 md:mt-12" alt="">
                <img src="{{ asset('Help&Support_Popup.png') }}" class="w-[375px] md:pl-20 md:mt-12" alt="">
            </div>
            <div class="flex justify-end">
                <img src="{{ asset('Help&Support_Popup.png') }}" class="w-[375px] md:pl-20 md:mt-12 mt-20" alt="">
            </div>
        </div>


    </section>

    <section class="w-full -mt-1 md:px-48 bg-[#000] px-5 flex md:flex-row flex-col justify-between pb-20 md:pt-20">
        <div class="mb-4">
            <h1 data-aos="fade-right" data-aos-duration="1000"
                class="text-[#fff] text-2xl font-semibold text-center md:text-left font-[Inter]">Takeaways</h1>
        </div>

        <div class="md:w-[518px]">
            <h3 data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000"
                class="font-bold text-white text-center md:text-left font-[Inter]">⭐️
                Develop Design Craft</h3>
            <p data-aos="fade-right" data-aos-duration="1000"
                class="mt-3 text-center md:text-left text-white font-[Inter]">
                Working on the M&G advisory solution provided valuable insights into the importance of user-centric design.
                Prioritising user needs and feedback was crucial in creating an intuitive and effective platform. I learned
                the significance of seamless integration and maintaining consistency in UI/UX to enhance user experience and
                reduce complexity.
            </p>
            <p data-aos="fade-right" data-aos-duration="1000" class="text-center md:text-left text-white font-[Inter]">
                Security was another key learning area, emphasising the need for robust measures like biometric login and
                two-factor authentication to protect user data. Efficient data management proved essential in minimising
                errors and ensuring reliable advisory services.
            </p>
            <p data-aos="fade-right" data-aos-duration="1000" class="text-center md:text-left text-white font-[Inter]">
                Designing with scalability in mind taught me the importance of future-proofing the solution to accommodate
                growth and technological advancements. Clear communication through real-time notifications and alerts was
                vital for keeping users informed and engaged.
            </p>
            <p data-aos="fade-right" data-aos-duration="1000" class="text-center md:text-left text-white font-[Inter]">
                Streamlining workflows increased efficiency, while comprehensive training and support ensured effective
                utilisation of the platform. Establishing a continuous feedback loop was instrumental in making ongoing
                improvements and addressing emerging issues.
            </p>
            <p data-aos="fade-right" data-aos-duration="1000" class="text-center md:text-left text-white font-[Inter]">
                Overall, these experiences underscored the value of a user-focused, secure, and flexible design approach in
                developing successful investment advisory solutions.
            </p>
        </div>
    </section>
@endsection
