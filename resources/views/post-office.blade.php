@extends('layouts.app')

@section('content')
    <section class="w-full h-[736px] relative md:px-48 px-5 z-50" style="background-image: url('{{ asset('bg.png') }}');">
        <div class="absolute top-48 right-0 md:left-48 left-5 z-[1000]">
            <h1 class="text-white z-[1000] font-semibold text-4xl mb-12">Post office</h1>

            <div class="flex flex-col gap-1 mb-6">
                <h4 class="text-white font-bold">Role</h4>
                <h4 class="text-white font-light">Senior product designer </h4>
            </div>

            <div class="flex flex-col gap-1 mb-6">
                <h4 class="text-white font-bold">Duration</h4>
                <h4 class="text-white font-light">1 year & 3 months</h4>
            </div>

            <div class="flex flex-col gap-1 mb-6">
                <h4 class="text-white font-bold">Tools</h4>
                <h4 class="text-white font-light">Figma, Miro, Jira</h4>
            </div>

            <div class="flex flex-col gap-1 mb-6">
                <h4 class="text-white font-bold">Team</h4>
                <h4 class="text-white font-light">Accenture song</h4>
            </div>
        </div>


        <img class="absolute top-0 right-0 left-0  w-full h-[736px] z-0" src="{{ asset('Rectangle 8.png') }}">

    </section>
    <section class="w-full md:px-48 px-5 flex md:flex-row flex-col justify-between pb-20 mt-20">
        <div class="mb-4">
            <h1 class="text-[#262626] text-2xl font-semibold text-center md:text-left">Role</h1>
        </div>

        <div class="md:w-[518px]">
            <p class="text-[#4f4f4f] text-center md:text-left">
                The Central design team, of which I was a part, was distinct from the offshore Ui/UX Team. Our primary task
                involved understanding the existing solution, developing a comprehensive Design System utilizing an atomic
                framework, and managing the deployment of this system across various Pods.
                In my role as a Senior designer, I collaborated with two other designers, a tester, and the Design lead. A
                significant aspect of my responsibilities entailed overseeing how the Dev team, offshore team, and
                stakeholders engaged with and utilized the components, ensuring consistency and efficiency throughout.
                Additionally, I played a substantial role in crafting components, meticulously considering diverse use cases
                and ensuring their seamless integration and compatibility with existing elements.
            </p>
        </div>
    </section>

    <section
        class="md:px-48 px-5 bg-[#f5f5f5] md:py-20 py-10 md:gap-16 gap-8 flex items-center md:flex-row flex-col justify-center">
        <img src="{{ asset('image 21.png') }}">
        <img src="{{ asset('image 31.png') }}">
    </section>

    <section class="md:px-48 px-5 md:py-20 py-10 md:gap-24 gap-8 flex md:flex-row items-start flex-col justify-center">
        <div class="flex flex-col gap-3">
            <p class="text-[#9E9E9E] text-[10px]">A visual representation of how the teams are connected</p>
            <img src="{{ asset('image 5.png') }}">
        </div>
        <div class="flex flex-col gap-3">
            <p class="text-[#9E9E9E] text-[10px]">A visual representation of how the design system is reviewded</p>
            <img src="{{ asset('image 9.png') }}">
        </div>
    </section>

    <section class="w-full md:px-48 px-5 flex md:flex-row flex-col justify-between pb-20 md:mt-20">
        <div class="mb-4">
            <h1 class="text-[#262626] text-2xl font-semibold text-center md:text-left">Context</h1>
        </div>

        <div class="md:w-[518px]">
            <h3 class="font-bold text-center md:text-left">📋 Overview</h3>
            <p class="text-[#4f4f4f] mt-3 text-center md:text-left">
                The ePos solution for post offices serves as a front-office application utilised by postmasters to manage
                routine transactions, including stamp purchases, letter handling, and cash exchanges. Previously known as
                Horizon, the former postmaster solution proved highly inefficient in terms of usability, leading to the
                incarceration of numerous postmasters.
            </p>
        </div>
    </section>

    <section class="w-full md:px-48 px-5 flex md:flex-row flex-col justify-between pb-20">
        <div class="mb-4">
            <h1 class="text-[#262626] text-2xl font-semibold text-center md:text-left">Problem Statement</h1>
        </div>

        <div class="md:w-[518px]">
            <p class="text-[#4f4f4f] bg-[#F4F4F4] p-5 text-center md:text-left">
                💥The Post Office faces recurring challenges arising from postmasters reporting discrepancies in client
                payments and experiencing delays in the system, leading to considerable financial losses for postmasters and
                discontent among customers due to prolonged queues at post offices. These issues are compounded by the
                origins of the Horizon problem, which stem from an external application. Updates to the system come at a
                significant cost to the Post Office and provide only temporary relief, exacerbating the situation. The
                organisation lacks the necessary internal expertise to effectively resolve the Horizon issue, prompting the
                pursuit of external assistance from Accenture to tackle this ongoing problem.
            </p>
        </div>
    </section>

    <section class="md:px-48 px-5 bg-[#f5f5f5] md:py-20 py-10 gap-4 flex items-center md:flex-row flex-col justify-center">
        <img src="{{ asset('image 1.png') }}">
        <img src="{{ asset('justice image.png') }}">
    </section>

    <section class="md:px-48 px-5 bg-[#fff] md:py-20 py-10 flex flex-col gap-4 justify-center">
        <p class="text-[#9E9E9E]">A visual representation of the Horizon Solution</p>
        <img src="{{ asset('image 4.png') }}">
    </section>

    <section class="w-full md:px-48 px-5 flex md:flex-row flex-col justify-between pb-20 md:pt-20">
        <div class="mb-4">
            <h1 class="text-[#262626] text-2xl font-semibold text-center md:text-left">Challenge Encountered</h1>
        </div>

        <div class="md:w-[518px]">
            <p class="text-[#4f4f4f] text-center md:text-left">This project provided me with the opportunity to hone my
                critical thinking skills, meticulous attention to detail, and human-centred design approach, as I explored
                ways to enhance a seemingly simple tool with useful features. I actively sought chances to experiment with
                innovative interactions and design patterns, while also delving into edge cases that were not initially
                addressed in the project brief.
                Collaborating closely with engineering enabled me to grasp the importance of considering edge cases and
                understanding backend logic, crucial for building a component within the Design Library System. Ultimately,
                I successfully delivered a Design system that is both intuitive and functional, integrating a visual system
                that subtly guides users towards available shortcuts while granting them complete control and flexibility.
                Knowing that teams across Postoffice will utilise my Design system is the most gratifying aspect of this
                experience for me.
            </p>
        </div>
    </section>

    <section class="w-full md:px-48 px-5 flex md:flex-row flex-col justify-between pb-20">
        <div class="mb-4">
            <h1 class="text-[#262626] text-2xl font-semibold text-center md:text-left">Design process</h1>
        </div>

        <div class="md:w-[518px]">
            <h3 class="font-bold text-center md:text-left">📋 Research</h3>
            <p class="text-[#4f4f4f] mt-3 text-center md:text-left">
                I had to visit multiple post offices in London to observe how postmasters were using the Horizon application
                and understand the challenges they faced. Our approach involved conducting thorough qualitative research,
                engaging with postmasters to gather their insights on the solution and its application in meeting customer
                requirements.
            </p>
        </div>
    </section>

    <section class="md:px-48 px-5 bg-[#f5f5f5] md:py-20 py-10 flex items-center md:flex-row  gap-4 flex-col justify-center">
        <img src="{{ asset('image 6.png') }}" class="w-[258px] h-[352px]">
        <img src="{{ asset('image 7.png') }}" class="w-[258px] h-[352px]">
        <img src="{{ asset('image 8.png') }}" class="w-[258px] h-[352px]">
    </section>

    <section class="w-full flex flex-col items-center justify-center">
        <div class="w-full md:px-48 px-5 flex md:flex-row flex-col justify-between pb-20 pt-20">
            <div class="mb-4">
            </div>

            <div class="md:w-[518px]">
                <h3 class="font-bold text-center md:text-left">📋 Ideate & Component creation</h3>
                <p class="text-[#4f4f4f] mt-3 text-center md:text-left">
                    I designed several components aligned with the screen ratios provided by the Pods and conducted initial
                    testing to assess their suitability for postmaster touch interactions in terms of size and usability.
                    Following the results, we proceeded to construct the components using atomic frameworks, beginning with
                    atoms, then progressing to organisms and molecules. Within the design system, we integrated several
                    guiding principles and implemented versioning to facilitate easy progress tracking and adherence to
                    deadlines.
                </p>
            </div>
        </div>
    </section>

    <section class="md:px-48 px-5 bg-[#f5f5f5] md:py-20 py-10 flex items-center md:flex-row flex-col justify-center">
        <img src="{{ asset('change.png') }}">
    </section>

    <section class="md:px-48 px-5 bg-[#fff] md:py-20 py-10 flex md:flex-row flex-col justify-between md:items-start">
        <h1 class="text-xl text-[#262626] font-semibold text-center md:text-left">Change log</h1>
        <p class="text-[#4F4F4F] md:w-[518px] text-center md:text-left">I created a change log to keep the design team,
            development team, and stakeholders informed about the modifications made within the design system.</p>
    </section>

    <section class="md:px-48 px-5 bg-[#f5f5f5] md:py-20 py-10 flex items-center md:flex-row flex-col justify-center">
        <img src="{{ asset('change-log.png') }}" class="w-[334px]">
    </section>

    <section class="md:px-48 px-5 bg-[#fff] md:py-20 py-10 flex md:flex-row flex-col justify-between md:items-start">
        <h1 class="text-xl text-[#262626] font-semibold text-center md:text-left">How to use</h1>
        <p class="text-[#4F4F4F] md:w-[518px] text-center md:text-left">I developed comprehensive documentation detailing
            the utilisation of the components, featuring a visual, step-by-step guide.</p>
    </section>

    <section class="md:px-48 px-5 bg-[#f5f5f5] md:py-20 py-10 flex md:flex-row flex-col justify-between">
        <img src="{{ asset('image-2.png') }}">
    </section>


    <section class="md:px-48 px-5 bg-[#fff] md:py-20 py-10 flex md:flex-row flex-col justify-between md:items-end">
        <h1 class="text-xl text-[#262626] font-semibold text-center md:text-left">Design System</h1>
        <p class="text-[#4F4F4F] md:w-[518px] text-center md:text-left">I structured my project to be scalable, aiming to
            transform it into a reusable component within Postoffice Design Library System for various teams to integrate
            into their custom solutions. I provided detailed development notes and delivered a meticulously organised final
            Figma file, enabling engineers to seamlessly initiate implementation without requiring extensive input from the
            design team.</p>
    </section>

    <section class="md:px-48 px-5 bg-[#f5f5f5] md:py-20 py-10">
        <img src="{{ asset('Screenshot 2024-02-12 at 21.50 1.png') }}">
    </section>

    <section class="w-full flex flex-col items-center justify-center">
        <div class="w-full md:px-48 px-5 flex md:flex-row flex-col justify-between md:pb-20 pt-20">
            <div class="mb-4">
                <h1 class="text-[#262626] text-2xl font-semibold text-center md:text-left">Outcome</h1>
            </div>

            <div class="md:w-[518px]">
                <h3 class="font-bold text-center md:text-left">📋 Research</h3>
                <p class="text-[#4f4f4f] mt-3 text-center md:text-left">I had to visit multiple post offices in London to
                    observe how postmasters were using the Horizon application and understand the challenges they faced. Our
                    approach involved conducting thorough qualitative research, engaging with postmasters to gather their
                    insights on the solution and its application in meeting customer requirements.</p>
            </div>
        </div>
        <img src="{{ asset('post-office-project.png') }}" class="md:w-[785px] w-[350px]">
    </section>

    <section class="w-full md:px-48 px-5 flex md:flex-row flex-col justify-between pb-20 md:pt-20 mt-20">
        <div class="mb-4">
            <h1 class="text-[#262626] text-2xl font-semibold text-center md:text-left">Takeaways</h1>
        </div>

        <div class="md:w-[518px]">
            <h3 class="font-bold text-center md:text-left">⭐️ Develop Design Craft</h3>
            <p class="text-[#4f4f4f] mt-3 text-center md:text-left">This project provided me with the opportunity to hone
                my
                critical thinking skills, meticulous attention to detail, and human-centred design approach, as I explored
                ways to enhance a seemingly simple tool with useful features. I actively sought chances to experiment with
                innovative interactions and design patterns, while also delving into edge cases that were not initially
                addressed in the project brief.
                Collaborating closely with engineering enabled me to grasp the importance of considering edge cases and
                understanding backend logic, crucial for building a component within the Design Library System. Ultimately,
                I successfully delivered a Design system that is both intuitive and functional, integrating a visual system
                that subtly guides users towards available shortcuts while granting them complete control and flexibility.
                Knowing that teams across Postoffice will utilise my Design system is the most gratifying aspect of this
                experience for me.</p>

            <h3 class="font-bold mt-10 text-center md:text-left">💛 Embrace the Adventure</h3>
            <p class="text-[#4f4f4f] mt-3 text-center md:text-left">During my time on the project, I met inspiring people
                who
                have all pushed and guided me to grow. I came into it thinking that I would just be working on my craft, but
                I also discovered opportunities to work on my soft skills such as confidence, communication, and leadership.
                I had to be proactive inleading conversations, updating stakeholders, and driving a point-of-view. By
                asking questions, I could get ahead of potential roadblocks and help user efficiency across Plus tools.
                I want to give a special shoutout to my amazing manager Stephanie Szabo, and my awesome mentor Edwin de
                Jongh for supporting my growth and for teaching me lessons that I will carry on to my future endeavors! </p>
        </div>
    </section>
@endsection
