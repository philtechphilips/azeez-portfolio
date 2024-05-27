@extends('layouts.app')

@section('content')
    <section class="w-full h-[730px] relative md:px-48 px-5 z-50 bg-black">
        <a href="/" class="flex pt-20 items-center gap-3">
            <img src="{{ asset("back-arrow.svg") }}" alt="">
            <p class="text-white font-medium text-xl">Back</p>
        </a>
        <div class="absolute top-48 right-0 md:left-48 left-5 z-[1000]">
            <h1 class="text-white z-[1000] font-semibold text-4xl mb-12 font-[Inter]" data-aos="fade-up">HSBC</h1>

            <div class="flex flex-col gap-1 mb-6">
                <h4 class="text-white font-bold font-[Inter]" data-aos="fade-up">Role</h4>
                <h4 class="text-white font-light font-[Inter]" data-aos="fade-up">Senior UI designer</h4>
            </div>

            <div class="flex flex-col gap-1 mb-6">
                <h4 class="text-white font-bold font-[Inter]" data-aos="fade-up">Duration</h4>
                <h4 class="text-white font-light font-[Inter]" data-aos="fade-up">4 months</h4>
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

        <img src="{{ asset('hsbc-bg.png') }}" class="w-fit h-full absolute right-0">

    </section>


    <section class="w-full bg-[#000] md:px-48 px-5 flex md:flex-row flex-col justify-between pb-20 pt-20 md:pt-56">
        <div class="mb-4">
            <h1 class="text-[#fff] text-2xl font-semibold text-center md:text-left font-[Inter]" data-aos="fade-up"
                data-aos-duration="1000">Role</h1>
        </div>

        <div class="md:w-[518px]">
            <p class="text-[#fff] text-center md:text-left font-[Inter]" data-aos="fade-up">
                As a Senior UI Designer on the HSBC project, I assisted four other senior designers in leading the
                development of a global design blueprint, supervising a team of 12 designers located throughout six pods in
                Europe. This ambitious project sought to consolidate and standardise the user interface across HSBC's
                various digital platforms, offering a consistent and seamless user experience for our global customer.
            </p>
        </div>
    </section>

    <section
        class="md:px-20 px-5 bg-[#000] md:py-20 py-10 md:gap-16 gap-8 flex items-center md:flex-row flex-col justify-center">
        <img src="{{ asset('mobile-app.png') }}" class="w-full" data-aos="fade-right" data-aos-duration="1000">
    </section>

    <section class="w-full bg-[#000] md:px-48 px-5 flex md:flex-row flex-col justify-between pb-20 md:pt-20">
        <div class="mb-4">
            <h1 class="text-[#fff] text-2xl font-semibold text-center md:text-left font-[Inter]" data-aos="fade-up"
                data-aos-duration="1000">Context</h1>
        </div>

        <div class="md:w-[518px]">
            <p class="text-[#fff] mt-3 text-center md:text-left font-[Inter]" data-aos="fade-up" data-aos-duration="1000">
                As a Senior UI Designer on the HSBC project, I assisted four other senior designers in leading the
                development of a global design blueprint, supervising a team of 12 designers located throughout six pods in
                Europe. This ambitious project sought to consolidate and standardise the user interface across HSBC's
                various digital platforms, offering a consistent and seamless user experience for our global customer.
            </p>
        </div>
    </section>

    <section
        class="md:px-48 px-5 bg-[#000] md:py-20 py-10 md:gap-16 gap-8 flex items-center md:flex-row flex-col justify-center">
        <img src="{{ asset('map.png') }}" class="w-[700px]" data-aos="fade-right" data-aos-duration="1000">
    </section>


    <section class="w-full bg-black md:px-48 px-5 flex md:flex-row flex-col justify-between pb-20">
        <div class="mb-4">
            <h1 class="text-white text-2xl font-semibold text-center md:text-left font-[Inter]" data-aos="fade-up"
                data-aos-duration="1000">Problem Statement</h1>
        </div>

        <div class="md:w-[518px]">
            <p class="text-[#fff] pb-5 text-center md:text-left font-[Inter]" data-aos="fade-up" data-aos-duration="1000">
                HSBC faced challenges in standardising the user journey across global markets, leading to persistent issues
                that cost the business millions annually. Each market had unique characteristics, necessitating the
                development of separate applications without global uniformity.
            </p>
        </div>
    </section>

    <section class="md:px-48 px-5 bg-[#000] md:py-20 py-10 -mt-2 gap-4 flex items-center md:flex-row flex-col justify-center">
        <img src="{{ asset('app.png') }}" class="w-[516px]" data-aos="fade-up" data-aos-duration="1000">
    </section>


    <section class="w-full bg-[#000] md:px-48 px-5 flex md:flex-row flex-col justify-between pb-20">
        <div class="mb-4">
            <h1 class="text-[#fff] text-2xl font-semibold text-center md:text-left font-[Inter]" data-aos="fade-up"
                data-aos-duration="1000">Design process</h1>
        </div>

        <div class="md:w-[518px]">
            <h3 class="font-bold text-center text-white md:text-left font-[Inter]" data-aos="fade-up"
                data-aos-duration="1000">📋
                Research</h3>
            <p class="mt-3 text-white text-center md:text-left font-[Inter]" data-aos="fade-up" data-aos-duration="1000">
                To enhance the user experience within HSBC’s journey flow, I employ "How Might We" (HMW) statements as a
                strategic tool for problem identification and solution brainstorming. Here's how I use this approach:
            </p>
            <p class="mt-8 text-white text-center md:text-left font-normal">
                Understanding the User Journey
                I start by thoroughly analysing the existing user journey to identify critical touch points and potential
                friction areas. This involves mapping out the entire process from the user's perspective, including account
                opening, transactions, customer support, and other interactions.
            </p>
            <p class="mt-8 text-white text-center md:text-left font-normal">
                Gathering Insights
                I collect qualitative and quantitative data from user feedback, surveys, analytics, and usability testing.
                This helps in pinpointing specific pain points and challenges users face during their interactions with
                HSBC’s digital platforms.
            </p>
        </div>
    </section>


    <section class="md:px-20 px-5 bg-[#000] md:py-20 py-10 flex flex-col md:flex-row gap-4 justify-center">
        <img src="{{ asset('shot.png') }}" class="w-[655px]" data-aos="fade-right" data-aos-duration="1000">
        <img src="{{ asset('shots.png') }}" class="w-[398px]" data-aos="fade-right" data-aos-duration="1000">
    </section>

    <section class="w-full bg-[#000] md:px-48 px-5 flex md:flex-row flex-col justify-between pb-20">
        <div class="mb-4">

        </div>

        <div class="md:w-[518px]">
            <p class="mt-3 text-white text-center md:text-left font-[Inter]" data-aos="fade-up" data-aos-duration="1000">
                Framing the Problems
                Using the insights gathered, I formulate "How Might We" statements to reframe problems into opportunities
                for innovation. These statements are crafted to be broad enough to allow creative thinking but focused
                enough to address specific issues.
            </p>
            <p class="mt-8 text-white text-center md:text-left font-normal">
                Collaborative Ideation
                I facilitate brainstorming sessions with cross-functional teams, including designers, developers, product
                managers, and customer service representatives. Each HMW statement serves as a focal point for generating
                diverse ideas and potential solutions.
            </p>
            <p class="mt-8 text-white text-center md:text-left font-normal">
                Encouraging a variety of perspectives ensures that we consider multiple angles and come up with holistic
                solutions to the identified problems.
            </p>
        </div>
    </section>


    <section class="md:px-48 px-5 bg-[#000] md:py-20 py-10 flex items-center md:flex-row  gap-4 flex-col justify-center">
        <img src="{{ asset('apps-grid.png') }}" data-aos="fade-up" data-aos-duration="1000">
    </section>

    <section class="w-full flex bg-[#000] flex-col items-center justify-center -mt-2">
        <div class="w-full md:px-48 px-5 flex md:flex-row flex-col justify-between pb-4 pt-20">
            <div class="mb-4">
                <h3 class="text-white text-[24px] font-semibold text-center md:text-left">Solution</h3>
            </div>

            <div class="md:w-[518px]">
                <p class="text-[#fff] mt-3 text-center md:text-left font-[Inter]" data-aos="fade-up"
                    data-aos-duration="1000">
                    We began by developing a series of "How might we" questions to identify the best possible solutions.
                    Next, we compiled a list of best practices and analysed how they effectively addressed user needs
                    globally. We then created individual user journeys mapped to specific regions, categorising them
                    accordingly. For standalone regions, we highlighted the differences while ensuring alignment with other
                    regions. Throughout the design process, we adhered strictly to the business design system to maintain
                    consistency.
                </p>
            </div>
        </div>
    </section>

    <section class="md:px-48 px-5 bg-[#000] md:pb-10 py-10 flex flex-col gap-4">
        <h4 class="text-white font-semibold text-sm text-center md:text-left" data-aos="fade-up" data-aos-duration="1000">Profile update Blueprint</h4>
        <div class="flex flex-col md:flex-row items-start justify-between">
            <div class="flex md:w-1/3 flex-col">
                <div class="bg-[#DB0011] rounded-lg pl-4 pr-10 py-4 text-white" data-aos="fade-up" data-aos-duration="1000">01_Accounts</div>
                <img class="py-20" src="{{ asset('Account.png') }}" data-aos="fade-right" data-aos-duration="1000">

                <div class="border border-[#D9D9D9] rounded-lg p-5 flex flex-col gap-2" data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="text-white text-xl font-base">01_Home</h1>
                    <p class="text-xs text-white">Display lists of accounts</p>
                    <p class="font-semibold text-[#DB0011] text-xs">Demonstration purpose only</p>
                </div>

                <div class="pt-16 pb-10" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{ asset('3_2.png') }}">
                </div>

                <div class="border border-[#D9D9D9] rounded-lg p-3 flex flex-col gap-2" data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="text-white text-base">03.02_About me - Personal Details</h1>
                    <p class="text-sm font-[Causten-Regular] text-white">About me page consists of three tabs grouping data
                        type. The default tab is Personal Tab. </p>
                    <p class="text-sm font-[Causten-Regular] text-white"> <span class="text-[#00847F]">C_01 Tab
                            notifications</span> If the user needs to be notified of any action, those will be displayed
                        within the tab.</span>If the user needs to be notified of any action, those will be displayed within
                        the tab.</p>
                    <p class="text-sm font-[Causten-Regular] text-white"> <span class="text-[#00847F]">C_02 Category
                            subheadings</span> will display a red dot when action is required. Inline messaging on
                        individual tiles will clarify what action is required.</p>
                    <p class="text-sm font-[Causten-Regular] text-white"> <span class="text-[#00847F]">C_03 Inline
                            information</span> banner provides the information on how the user should proceed if they need
                        to update their information.</p>
                    <p class="text-sm font-[Causten-Regular] text-white"> <span class="text-[#00847F]">C_04 Relationship
                            tiles</span> displays existing relationship details that are stored against the users account
                        and/or will prompt the user to provide their marital status and number of dependents.</p>
                    <p class="text-sm font-[Causten-Regular] text-white"> <span class="text-[#00847F]">C_05 Nationality
                            tile</span> displays an existing nationality that is stored against the users account with
                        inline information banner. It prompts the user to provide additional nationalities.</p>
                    <p class="text-sm font-[Causten-Regular] text-white"> <span class="text-[#00847F]">C_06 Tax
                            tile</span> displays the tax residency provided and indicates if any others are listed.</p>
                    <p class="text-sm font-[Causten-Regular] text-white"> <span class="font-bold">Please note:</span>
                        Neither name nor nationality cannot be changed within the app, so there are no edit option available
                        for these. There is always a preselected marital status, and number of dependents is displayed, as
                        well as at least one tax residency with tax number.</p>
                </div>

                <div class="pt-16 pb-10" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{ asset('tab-notification.png') }}">
                </div>

            </div>

            <div class="hidden md:block" data-aos="fade-up" data-aos-duration="1000">
                <svg width="100" height="300">
                    <line x1="50" y1="0" x2="50" y2="300" stroke="#AEADAD"
                        stroke-width="1" stroke-dasharray="15, 10" />
                </svg>

                <svg width="100" height="300">
                    <line x1="50" y1="0" x2="50" y2="300" stroke="#AEADAD"
                        stroke-width="1" stroke-dasharray="15, 10" />
                </svg>

                <svg width="100" height="300">
                    <line x1="50" y1="0" x2="50" y2="300" stroke="#AEADAD"
                        stroke-width="1" stroke-dasharray="15, 10" />
                </svg>

                <svg width="100" height="300">
                    <line x1="50" y1="0" x2="50" y2="300" stroke="#AEADAD"
                        stroke-width="1" stroke-dasharray="15, 10" />
                </svg>

                <svg width="100" height="300">
                    <line x1="50" y1="0" x2="50" y2="300" stroke="#AEADAD"
                        stroke-width="1" stroke-dasharray="15, 10" />
                </svg>

                <svg width="100" height="300">
                    <line x1="50" y1="0" x2="50" y2="300" stroke="#AEADAD"
                        stroke-width="1" stroke-dasharray="15, 10" />
                </svg>

                <svg width="100" height="300">
                    <line x1="50" y1="0" x2="50" y2="300" stroke="#AEADAD"
                        stroke-width="1" stroke-dasharray="15, 10" />
                </svg>

                <svg width="100" height="300">
                    <line x1="50" y1="0" x2="50" y2="300" stroke="#AEADAD"
                        stroke-width="1" stroke-dasharray="15, 10" />
                </svg>

                <svg width="100" height="300">
                    <line x1="50" y1="0" x2="50" y2="300" stroke="#AEADAD"
                        stroke-width="1" stroke-dasharray="15, 10" />
                </svg>

                <svg width="100" height="300">
                    <line x1="50" y1="0" x2="50" y2="300" stroke="#AEADAD"
                        stroke-width="1" stroke-dasharray="15, 10" />
                </svg>

                <svg width="100" height="300">
                    <line x1="50" y1="0" x2="50" y2="300" stroke="#AEADAD"
                        stroke-width="1" stroke-dasharray="15, 10" />
                </svg>
            </div>

            <div class="flex md:w-1/3 flex-col">
                <div class="bg-[#DB0011] rounded-lg pl-4 pr-10 py-4 text-white" data-aos="fade-up" data-aos-duration="1000">02_Profile</div>
                <img class="py-20" src="{{ asset('profile.png') }}" data-aos="fade-right" data-aos-duration="1000">

                <div class="border border-[#D9D9D9] rounded-lg p-5 flex flex-col gap-2" data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="text-white text-xl font-base">02_Profile</h1>
                    <p class="text-xs text-white">Profile setting with Update your details within the Profile card.</p>
                    <p class="font-semibold text-[#DB0011] text-xs">Demonstration purpose only</p>
                </div>

                <div class="pt-16 pb-10 w-full" data-aos="fade-up" data-aos-duration="1000">
                    <img class="w-full" src="{{ asset('locked.png') }}">
                </div>

                <div class="border border-[#D9D9D9] rounded-lg p-3 flex flex-col gap-2" data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="text-white text-base">Contact details locked error</h1>
                    <p class="text-sm font-[Causten-Regular] text-white">
                        On ‘Chat with us’ the user will be redirected to either the Support chat or FAQ screen.
                    </p>
                    <p class="text-sm font-[Causten-Regular] text-white">On back icon, user will land on 02_My Profile screen.</p>

                    <p class="text-sm font-[Causten-Regular] text-white"> <span class="font-bold">Configurable: No</span></p>

                    <p class="text-sm font-[Causten-Regular] text-white"> <span class="font-bold">Market variance: Yes</span></p>

                    <p class="text-sm font-[Causten-Regular] text-white">When chat functionalities aren’t advanced enough to support the user, tapping on ‘Help’ will redirect the user to the FAQ screen. </p>
                </div>
            </div>

            <div class="hidden md:block" data-aos="fade-up" data-aos-duration="1000">
                <svg width="100" height="300">
                    <line x1="50" y1="0" x2="50" y2="300" stroke="#AEADAD"
                        stroke-width="1" stroke-dasharray="15, 10" />
                </svg>

                <svg width="100" height="300">
                    <line x1="50" y1="0" x2="50" y2="300" stroke="#AEADAD"
                        stroke-width="1" stroke-dasharray="15, 10" />
                </svg>

                <svg width="100" height="300">
                    <line x1="50" y1="0" x2="50" y2="300" stroke="#AEADAD"
                        stroke-width="1" stroke-dasharray="15, 10" />
                </svg>

                <svg width="100" height="300">
                    <line x1="50" y1="0" x2="50" y2="300" stroke="#AEADAD"
                        stroke-width="1" stroke-dasharray="15, 10" />
                </svg>

                <svg width="100" height="300">
                    <line x1="50" y1="0" x2="50" y2="300" stroke="#AEADAD"
                        stroke-width="1" stroke-dasharray="15, 10" />
                </svg>

                <svg width="100" height="300">
                    <line x1="50" y1="0" x2="50" y2="300" stroke="#AEADAD"
                        stroke-width="1" stroke-dasharray="15, 10" />
                </svg>

                <svg width="100" height="300">
                    <line x1="50" y1="0" x2="50" y2="300" stroke="#AEADAD"
                        stroke-width="1" stroke-dasharray="15, 10" />
                </svg>

                <svg width="100" height="300">
                    <line x1="50" y1="0" x2="50" y2="300" stroke="#AEADAD"
                        stroke-width="1" stroke-dasharray="15, 10" />
                </svg>

                <svg width="100" height="300">
                    <line x1="50" y1="0" x2="50" y2="300" stroke="#AEADAD"
                        stroke-width="1" stroke-dasharray="15, 10" />
                </svg>

                <svg width="100" height="300">
                    <line x1="50" y1="0" x2="50" y2="300" stroke="#AEADAD"
                        stroke-width="1" stroke-dasharray="15, 10" />
                </svg>

                <svg width="100" height="300">
                    <line x1="50" y1="0" x2="50" y2="300" stroke="#AEADAD"
                        stroke-width="1" stroke-dasharray="15, 10" />
                </svg>
            </div>

            <div class="flex md:w-1/3 flex-col">
                <div class="bg-[#DB0011] rounded-lg pl-4 pr-10 py-4 text-white" data-aos="fade-up" data-aos-duration="1000">03_About Me</div>

                <img class="py-20 w-full" data-aos="fade-up" data-aos-duration="1000" src="{{ asset('skeleton.png') }}">

                <div class="border border-[#D9D9D9] rounded-lg p-5 flex flex-col gap-2" data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="text-white text-xl font-base">03.01_Loading Screen</h1>
                    <p class="text-xs text-white">Displayed when the personal details are loading.</p>
                    <p class="text-xs text-white">The skeleton loader will disappear as soon as the relevant tab is loaded.</p>
                    <p class="font-semibold text-[#DB0011] text-xs">Please note motion TBD.</p>
                </div>

                <img class="py-8" src="{{ asset('C_01.png') }}" data-aos="fade-up" data-aos-duration="1000">

                <img class="py-8" src="{{ asset('C_02.png') }}" data-aos="fade-up" data-aos-duration="1000">
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
                This project taught me the importance of balancing global consistency with local adaptability. By leveraging
                best practices and meticulous user journey mapping, I contributed to a unified design system that addressed
                unique regional needs while maintaining a seamless global identity. This role not only honed my design
                skills but also deepened my understanding of strategic design implementation on a global scale.
            </p>
        </div>
    </section>
@endsection
