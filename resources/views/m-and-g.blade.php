@extends('layouts.app')

@section('content')
    <section class="w-full md:h-[730px] relative md:pl-48 pb-20 pl-5 z-50"
        style="background: url('{{ asset('images/m&g-bg.png') }}'); background-position: center center;  ">
        <a href="/" class="flex pt-20 items-center gap-3">
            <img src="{{ asset('images/back-arrow.svg') }}" alt="">
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
                <img src="{{ asset('images/mac.png') }}" class="w-fit md:-mt-16 mt-10">
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

    <section class="w-full bg-[#000] md:px-48  -mt-5 px-5 flex md:flex-row flex-col justify-between pb-20 pt-20">
        <video src="" controls></video>
    </section>

    <section class="w-full bg-[#000] md:px-48 px-5  -mt-5 flex md:flex-row flex-col justify-between pb-20 pt-20">
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

    <section class="w-full bg-[#000] -mt-5 md:px-48 px-5 flex flex-col justify-between pt-20">
        <div class="mb-4">
            <h1 class="text-[#fff] text-2xl font-semibold text-center md:text-left font-[Inter]" data-aos="fade-up"
                data-aos-duration="1000">Challenges</h1>
        </div>

        <div class="flex md:flex-row flex-col md:gap-12 gap-4">
            <div class="flex md:flex-row flex-col gap-4">
                <div data-aos="fade-up" data-aos-delay="100" class="bg-white text-xl p-6 rounded-2xl pb-16">
                    <h6 class="text-[#808080] font-semibold">Intuitive Issue Selection</h6>
                    <p class="pt-2">Craft a user-friendly interface for seamless selection of user & advisor issues,
                        allowing users to easily interact with their advisors faster and better.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200" class="bg-white text-xl p-6 rounded-2xl relative pb-16">
                    <h6 class="text-[#808080] font-semibold">Gamified impact</h6>
                    <p class="pt-2">
                        Introduce gamification to measure user impact, offering users achievements and feedback on how their
                        involvement drives positive change.
                    </p>
                    <img src="{{ asset('images/2.png') }}" class="absolute -top-5 -right-5" alt="">
                </div>
            </div>
            <div class="bg-white text-xl p-6 relative rounded-2xl pb-16" data-aos="fade-up" data-aos-delay="300">
                <h6 class="text-[#808080] font-semibold">Mobile-First Design</h6>
                <p class="pt-2">
                    Implement a mobile-first approach across all features, ensuring seamless experience and functionality on
                    smartphones
                </p>
                <img src="{{ asset('images/1.png') }}" class="absolute -top-5 -right-5" alt="">
            </div>
        </div>

        <div class="flex gap-20 mt-4 w-full md:flex-row flex-col border-b border-[#B3B1B1] pb-20">
            <div data-aos="fade-up" data-aos-delay="100"
                class="bg-[#4B4B4B] hidden md:block text-xl md:w-1/2 p-6 relative rounded-2xl pb-16">
                <h6 class="text-[#808080] font-semibold" style="visibility: hidden;">Gamified impact</h6>
                <p class="pt-2" style="visibility: hidden;">
                    Introduce gamification to measure user impact, offering users achievements and feedback on how their
                    involvement drives positive change.
                </p>
            </div>


            <div class="flex gap-6 w-full">
                <div data-aos="fade-up" data-aos-delay="200"
                    class="bg-[#00444B] text-xl md:w-1/2 p-6  relative rounded-2xl pb-16">
                    <h6 class="text-[#98EAF2] font-semibold">Inclusive Interaction</h6>
                    <p class="pt-2 text-white">
                        Ensure a seamless in interaction between the users platform and the advisory platform
                    </p>
                    <img src="{{ asset('images/8.png') }}" class="absolute -top-5 -right-5" alt="">
                </div>
                <div data-aos="fade-up" data-aos-delay="300"
                    class="bg-[#4B4B4B] hidden md:block text-xl w-1/2  p-6 relative rounded-2xl pb-16">
                    <h6 class="text-[#808080] font-semibold" style="visibility: hidden;">Gamified impact</h6>
                    <p class="pt-2" style="visibility: hidden;">
                        Introduce gamification to measure user impact, offering users achievements and feedback on how their
                        involvement drives positive change.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full bg-[#000] md:px-48 px-5 pt-20">
        <div class="flex md:flex-row flex-col justify-between">
            <div class="mb-4">
                <h1 class="text-[#fff] text-2xl font-semibold text-center md:text-left font-[Inter]" data-aos="fade-up"
                    data-aos-duration="1000">Solution</h1>
            </div>

            <div class="md:w-[518px]">
                <h1 class="text-white font-bold mb-3 text-center md:text-left" data-aos="fade-up">📋 Research</h1>
                <p class="text-[#fff] text-center md:text-left font-[Inter]" data-aos="fade-up">
                    To ensure we met all stakeholders' needs, my initial task was to have the team identify our users and
                    stakeholders, along with their pain points. We organised a workshop specifically designed to pinpoint
                    stakeholders and understand their challenges.
                </p>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center w-full py-20">
            <div class="flex md:flex-row flex-col gap-5">
                <img src="{{ asset('images/customer.png') }}" data-aos="fade-up" data-aos-delay="200" class="md:w-1/2"
                    alt="">
                <img src="{{ asset('images/advisor.png') }}" data-aos="fade-up" data-aos-delay="400" class="md:w-1/2"
                    alt="">
            </div>
            <div class="flex justify-center md:-mt-10 mt-5">
                <img src="{{ asset('images/m-and-g.png') }}" data-aos="fade-up" data-aos-delay="600" class="md:w-1/2"
                    alt="">
            </div>
        </div>

        <div class="flex justify-end pb-28">
            <div class="md:w-[518px]">
                <h1 class="text-white font-bold mb-3 text-center md:text-left" data-aos="fade-up">💥 Pain points</h1>
                <p class="text-[#fff] text-center md:text-left font-[Inter]" data-aos="fade-up">
                    Following the workshop, I proceeded to compile all the pain points from both the users and the
                    stakeholders.
                </p>
            </div>
        </div>

        <div class="pb-20 ">
            <div class="flex gap-16 items-end">
                <img src="{{ asset('images/complex.png') }}" data-aos="fade-up" data-aos-delay="50" class="md:w-[600px]"
                    alt="">
                <img src="{{ asset('images/Union (1).png') }}"data-aos="fade-up" data-aos-delay="100"
                    class="w-48 hidden md:block" alt="">
            </div>

            <div class="flex gap-20 items-start md:ml-28 pl-16 md:mt-10">
                <img src="{{ asset('images/Union.png') }}" data-aos="fade-up" data-aos-delay="150"
                    class="w-48 hidden md:block" alt="">
                <img src="{{ asset('images/inefficiency.png') }}" data-aos="fade-up" data-aos-delay="200" class="md:w-[600px]"
                    alt="">
            </div>

            <div class="flex gap-16 md:ml-28 pr-16 md:mt-10 items-end">
                <img src="{{ asset('images/data.png') }}" data-aos="fade-up" data-aos-delay="250" class="md:w-[600px]"
                    alt="">
                <img src="{{ asset('images/Union (1).png') }}" data-aos="fade-up" data-aos-delay="300"
                    class="w-48 hidden md:block" alt="">
            </div>
        </div>
    </section>

    <section class="w-full bg-[#000] -mt-4 md:px-48 px-5 pb-20">
        <div class="flex flex-col md:flex-row gap-2">
            <div class="md:w-[40%]">
                <img src="{{ asset('images/5.png') }}" alt="" data-aos="fade-up">
            </div>
            <div class="md:w-[60%]">
                <div class="w-full flex gap-2">
                    <div class="flex gap-2 flex-col">
                        <img src="{{ asset('images/6.png') }}" alt="" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('images/7.png') }}" alt="" data-aos="fade-up" data-aos-delay="200">
                    </div>
                    <div data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('images/12.png') }}" alt="">
                    </div>
                </div>
                <div class="md:-mt-8  md:w-[110%]" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('images/10.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <div class="w-full bg-[#000] md:px-48 px-5 pb-20">
        <div class="flex justify-end">
            <div class="md:w-[518px]">
                <h1 class="text-white font-bold mb-3 text-center md:text-left" data-aos="fade-up">UI exploration</h1>
                <p class="text-[#fff] text-center md:text-left font-[Inter]" data-aos="fade-up">
                    Informed by our comprehensive research and aligned with M&G vision, we curated a mood-board featuring
                    four distinct styles.
                    These styles were categorised as follows: Modern and Clean, Serious and Professional and Bold &
                    Colourful.
                </p>
            </div>
        </div>

        <div class="flex w-full flex-col md:flex-row">
            <div data-aos="fade-up"
                class="bg-[#5F9396] mt-10 flex md:gap-1 md:flex-nowrap flex-wrap md:w-1/2 md:p-8 p-4 gap-3">
                <img src="{{ asset('images/4 4.png') }}" class="md:w-1/4" alt="">
                <img src="{{ asset('images/5 3.png') }}" class="md:w-1/4" alt="">
                <img src="{{ asset('images/6 3.png') }}" class="md:w-1/4" alt="">
                <img src="{{ asset('images/7 3.png') }}" class="md:w-1/4" alt="">
            </div>
            <div data-aos="fade-up"
                class="bg-[#D9D9D9] mt-10 flex md:gap-1 md:flex-nowrap flex-wrap md:rounded-tr-3xl md:w-1/2 md:p-8 p-4 gap-3">
                <img src="{{ asset('images/2 6.png') }}" class="md:w-1/4" alt="">
                <img src="{{ asset('images/3 6.png') }}" class="md:w-1/4" alt="">
                <img src="{{ asset('images/4 6.png') }}" class="md:w-1/4" alt="">
                <img src="{{ asset('images/5 5.png') }}" class="md:w-1/4" alt="">
            </div>
        </div>
        <div class="flex w-full flex-col md:flex-row md:mt-0 mt-10">
            <div data-aos="fade-up"
                class="bg-[#D9D9D9] md:rounded-bl-3xl flex md:flex-nowrap flex-wrap md:gap-1 md:w-1/2 md:p-8 p-4 gap-3">
                <img src="{{ asset('images/1-2.png') }}" class="md:w-1/4" alt="">
                <img src="{{ asset('images/2-2.png') }}" class="md:w-1/4" alt="">
                <img src="{{ asset('images/3-3.png') }}" class="md:w-1/4" alt="">
                <img src="{{ asset('images/4-4.png') }}" class="md:w-1/4" alt="">
            </div>
            <div data-aos="fade-up"
                class="bg-[#5F9396] flex md:gap-1 mt-10 md:mt-0 md:flex-nowrap flex-wrap md:w-1/2 md:p-8 p-4 gap-3">
                <img src="{{ asset('images/3-6.png') }}" class="md:w-1/4" alt="">
                <img src="{{ asset('images/4-6.png') }}" class="md:w-1/4" alt="">
                <img src="{{ asset('images/5-5.png') }}" class="md:w-1/4" alt="">
                <img src="{{ asset('images/7-4.png') }}" class="md:w-1/4" alt="">
            </div>
        </div>

        <div class="mb-4 flex justify-end w-full">
            <h1 class="text-[#fff] mt-20 text-sm font-semibold text-right font-[Inter] mb-3" data-aos="fade-up"
                data-aos-duration="1000">Wireframe
            </h1>
        </div>

        <div class="bg-[#212121] md:p-12 p-5 rounded-3xl" data-aos="fade-up" data-aos-delay="300">
            <div class="flex md:flex-row flex-col gap-4">
                <img data-aos="fade-up" src="{{ asset('images/Customer Landing.png') }}" class="md:w-1/2" alt="">
                <img data-aos="fade-up" src="{{ asset('images/Money out - digital - combined withdrawals.png') }}"
                    class="md:w-1/2" alt="">
            </div>
            <div class="flex md:flex-row flex-col gap-4 mt-4">
                <img data-aos="fade-up" src="{{ asset('images/Money out - paper.png') }}" class="md:w-1/2" alt="">
                <img data-aos="fade-up" src="{{ asset('images/Money out - digital - combined withdrawals (1).png') }}"
                    class="md:w-1/2" alt="">
            </div>
        </div>
    </div>

    <div class="w-full bg-[#000] md:px-48 px-5 flex md:flex-row flex-col justify-between -mt-4 pb-20">
        <div class="mb-4">
            <h1 class="text-[#fff] text-2xl font-semibold text-center md:text-left font-[Inter] mb-8" data-aos="fade-up"
                data-aos-duration="1000">UI Design
            </h1>

            <img src="{{ asset('images/MacBook Pro and iPhone 15 Pro Mockup.png') }}" data-aos="fade-up" data-aos-delay="100"
                alt="">

            <h1 class="text-[#fff] mt-20 text-sm font-semibold text-right font-[Inter] mb-3" data-aos="fade-up"
                data-aos-duration="1000">Components
            </h1>

            <img src="{{ asset('images/components.png') }}" data-aos="fade-up" data-aos-delay="200" class="mt-4 mb-20"
                alt="">

            <h1 class="text-[#fff] text-sm font-semibold text-right font-[Inter] mb-3" data-aos="fade-up"
                data-aos-duration="1000">Website
            </h1>

            <img src="{{ asset('images/MacBook Pro Screen.png') }}" data-aos="fade-up" data-aos-delay="300" class="mt-4"
                alt="">

            <img src="{{ asset('images/Adviser Landing v1 1.png') }}" data-aos="fade-up" data-aos-delay="400" class="mt-8"
                alt="">

            <img src="{{ asset('images/Customer_Dashboard.png') }}" data-aos="fade-up" data-aos-delay="500" class="mt-8"
                alt="">

            <h1 class="text-[#fff] text-sm font-semibold mt-20 text-right font-[Inter] mb-3" data-aos="fade-up"
                data-aos-duration="1000">Mobile
            </h1>

            <div class="flex md:flex-row flex-col gap-20 flex-wrap justify-between">
                <img src="{{ asset('images/home.png') }}" data-aos="fade-up" data-aos-delay="600" class="w-[375px] md:pr-20"
                    alt="">
                <img src="{{ asset('images/ActivePoruduct_Popup.png') }}" data-aos="fade-up" data-aos-delay="700"
                    class="w-[375px] md:pl-20" alt="">
                <img src="{{ asset('images/ActivePoruduct_Popup (1).png') }}" data-aos="fade-up" data-aos-delay="800"
                    class="w-[375px] md:pr-20 md:mt-12" alt="">
                <img src="{{ asset('images/Help&Support_Popup.png') }}" class="w-[375px] md:pl-20 md:mt-12" data-aos="fade-up"
                    data-aos-delay="900" alt="">
            </div>
            <div class="flex justify-end">
                <img src="{{ asset('images/Help&Support_Popup.png') }}" data-aos="fade-up" data-aos-delay="1000"
                    class="w-[375px] md:pl-20 md:mt-12 mt-20" alt="">
            </div>
        </div>


    </div>

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
