@extends('layouts.app')

@section('title', 'Career')

@section('content')
    <section class="video-promo full-bleed">
        <iframe width="100%" height="300"
            src="https://www.youtube.com/embed/rkfoS9exAkU?autoplay=1&mute=1&controls=0&showinfo=0&modestbranding=1&rel=0&loop=1&playlist=rkfoS9exAkU"
            title="YouTube video player" frameborder="0" allow="autoplay; encrypted-media"
            referrerpolicy="strict-origin-when-cross-origin">
        </iframe>
    </section>

    <section aria-labelledby="job-search" class="py-6 bg-white mt-24 mb-24">
        <h2 id="job-search" class="sr-only">Job Search</h2>

        <form action="/jobs" method="GET" role="search" class="max-w-4xl mx-auto flex items-center gap-2">

            <!-- Dropdown Negara -->
            <label for="country" class="sr-only">Pilih Negara</label>
            <select id="country" name="country"
                class="px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-amber-500">
                <option>Indonesia</option>
            </select>

            <!-- Input Keyword -->
            <label for="keyword" class="sr-only">Cari pekerjaan</label>
            <input type="search" id="keyword" name="keyword" placeholder="Search for jobs by keyword"
                class="flex-1 px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-amber-500 focus:outline-none" />

            <!-- Tombol Cari -->
            <button type="submit"
                class="px-4 py-2 bg-black text-white font-bold border border-white rounded-md hover:bg-gray-800 transition">
                FIND JOBS
            </button>
        </form>
    </section>

    <section class=" flex justify-center gap-10">
        <div class=" w-1/2 h-[400px] ml-56 p-4">
            <h3 class="text-xl font-bold mb-4">
                About us
            </h3>
            <span class="text-base font-bold">Thoughts from Our Team</span>
            <p class="text-base mt-3 mb-3">
                “The collaboration and teamwork I experienced; opportunities given to me so that I can push myself; and the
                trust given to me by the management team; excites me everyday.
            </p>
            <P class="text-base mb-3">
                The sense of achievement is constant; and I am challenged all the time to bring a simple idea into fruition,
                be it product development or building a new brand for the company.”
            </P>
            <P class="text-sm">
                Veronica Sarah, AVP of RND and Category Product Development
            </P>
        </div>

        <div class=" w-1/2 h-[400px] mr-56">
            <img src="{{ asset('images/veronika.jpeg') }}" alt="Veronika" class="w-full h-full object-cover">
        </div>
    </section>

    <section class=" flex justify-center gap-10 mt-8">

        <div class=" w-1/2 h-[400px] ml-56">
            <img src="{{ asset('images/bg-career.jpeg') }}" alt="Veronika" class="w-full h-full object-cover">
        </div>

        <div class=" w-1/2 h-[400px] mr-56 p-4">
            <h3 class="text-xl font-bold mb-4">
                OUR MISSION
            </h3>
            <span class="text-base font-bold">Thoughts from Our Team</span>
            <p class="text-base mt-3 mb-3">
                <span class="font-bold">Kopi Kenangan</span> is defined by our culture – one that embrace collaboration,
                agility, flexibility, constant improvement as well as tolerance to mistake. Our people are result-oriented
                and customer centric. We work in teams and move fast to respond to market and consumer needs. Together, we
                bring joy to our consumers by serving quality coffee and delivering better service standards to communities
                - and we're just getting started.
            </p>
        </div>
    </section>

    <section class="mt-10 pt-4 pb-16 bg-gray-100">
        <h1 class="text-2xl font-bold ml-56 mt-10 mb-10">Our Team</h1>
        {{-- 1 --}}
        <article class="flex justify-center gap-6 ml-56 mr-56 mb-10">
            <div class="w-1/2 h-40 flex gap-4 ">
                <img src="{{ asset('images/career-1.webp') }}" alt="carerr 1" class="w-1/2 h-full object-cover">
                <div class="p-2 pr-4 pl-4">
                    <h3 class="text-base font-bold mb-1">Accounting, Control, Tax and Treasury</h3>
                    <p class="text-sm">It’s more than numbers, we are trusted to ensure our leaders have the most up to
                        date and reliable information to help make the best possible decisions.</p>
                </div>
            </div>

            <div class="w-1/2 h-40 flex gap-4 ">
                <img src="{{ asset('images/career-2.webp') }}" alt="Career 2" class="w-1/2 h-full object-cover">
                <div class="p-2 pr-4 pl-4">
                    <h3 class="text-base font-bold mb-1">
                        Business Development
                    </h3>
                    <p class="text-sm">
                        We are the driving engine that charter new area of growth in Kopi Kenangan; be it retail
                        development, retail experience, product development, or championing new brands.
                    </p>
                </div>
            </div>
        </article>
        {{-- 2 --}}
        <article class="flex justify-center gap-6 ml-56 mr-56 mb-10">
            <div class="w-1/2 h-40 flex gap-4 ">
                <img src="{{ asset('images/career-3.webp') }}" alt="carerr 1" class="w-1/2 h-full object-cover">
                <div class="p-2 pr-4 pl-4">
                    <h3 class="text-base font-bold mb-1">
                        Creative
                    </h3>
                    <p class="text-sm">
                        We are a visual powerhouse.
                        We are all about nurturing imagination and turning thoughts into the ideas that give our brands the
                        edge.
                        We connect with our customers
                        through visual storytelling in-store and/or online experience.
                    </p>
                </div>
            </div>

            <div class="w-1/2 h-40 flex gap-4 ">
                <img src="{{ asset('images/career-4.webp') }}" alt="Career 2" class="w-1/2 h-full object-cover">
                <div class="p-2 pr-4 pl-4">
                    <h3 class="text-base font-bold mb-1">
                        Founders’ Office
                    </h3>
                    <p class="text-sm">
                        We work closely with the founders and senior management of the company. We are responsible for
                        formulating and executing the long-term strategy of the company performing Corporate Finance
                        function.
                    </p>
                </div>
            </div>
        </article>
        {{-- 3 --}}
        <article class="flex justify-center gap-6 ml-56 mr-56 mb-10">
            <div class="w-1/2 h-40 flex gap-4 ">
                <img src="{{ asset('images/career-5.webp') }}" alt="carerr 1" class="w-1/2 h-full object-cover">
                <div class="p-2 pr-4 pl-4">
                    <h3 class="text-base font-bold mb-1">
                        Growth and Product
                    </h3>
                    <p class="text-sm">
                        Our team is tasked to think BIG; through analysis of market trends, consumer behavior and we
                        innovate and build digital products to improve consumer experience online.
                    </p>
                </div>
            </div>

            <div class="w-1/2 h-40 flex gap-4 ">
                <img src="{{ asset('images/career-6.webp') }}" alt="Career 2" class="w-1/2 h-full object-cover">
                <div class="p-2 pr-4 pl-4">
                    <h3 class="text-base font-bold mb-1">
                        Human Resource
                    </h3>
                    <p class="text-sm">
                        People are our top of mind and we see everyone in Kopi Kenangan as one big family. We therefore are
                        constantly innovating to better our employee experience.
                    </p>
                </div>
            </div>
        </article>
        {{-- 4 --}}
        <article class="flex justify-center gap-6 ml-56 mr-56 mb-10">
            <div class="w-1/2 h-40 flex gap-4 ">
                <img src="{{ asset('images/career-7.webp') }}" alt="carerr 1" class="w-1/2 h-full object-cover">
                <div class="p-2 pr-4 pl-4">
                    <h3 class="text-base font-bold mb-1">

                        Legal
                    </h3>
                    <p class="text-sm">
                        Our legal team is deeply involved in every aspect of Kopi Kenangan’s businesses and operations. We
                        provide support from contracting to compliance for existing to new projects and expansion plans.
                    </p>
                </div>
            </div>

            <div class="w-1/2 h-40 flex gap-4 ">
                <img src="{{ asset('images/career-8.webp') }}" alt="Career 2" class="w-1/2 h-full object-cover">
                <div class="p-2 pr-4 pl-4">
                    <h3 class="text-base font-bold mb-1">
                        Marketing
                    </h3>
                    <p class="text-sm">
                        We connect our customers through compelling stories, campaigns, and relevant media strategy.
                        Together, we build our brand and shift customers' perception to favour us as their first choice.
                    </p>
                </div>
            </div>
        </article>
        {{-- 5 --}}
        <article class="flex justify-center gap-6 ml-56 mr-56 mb-10">
            <div class="w-1/2 h-40 flex gap-4 ">
                <img src="{{ asset('images/career-9.webp') }}" alt="carerr 1" class="w-1/2 h-full object-cover">
                <div class="p-2 pr-4 pl-4">
                    <h3 class="text-base font-bold mb-1">
                        Operations
                    </h3>
                    <p class="text-sm">
                        We constantly push boundaries to improve our consumer experience at our retail outlets. We ensure
                        our team follow standard operating procedures to drive a high standard of service quality.
                    </p>
                </div>
            </div>

            <div class="w-1/2 h-40 flex gap-4 ">
                <img src="{{ asset('images/career-10.webp') }}" alt="Career 2" class="w-1/2 h-full object-cover">
                <div class="p-2 pr-4 pl-4">
                    <h3 class="text-base font-bold mb-1">
                        Quality Assurance
                    </h3>
                    <p class="text-sm">
                        Our team conduct frequent vendors' audit to ensure Kopi Kenangan’s expectations are met. We conduct
                        internal audit on hygiene, safety and consistency for the best coffee quality.
                    </p>
                </div>
            </div>
        </article>
        {{-- 6 --}}
        <article class="flex justify-center gap-6 ml-56 mr-56 mb-10">
            <div class="w-1/2 h-40 flex gap-4 ">
                <img src="{{ asset('images/career-11.webp') }}" alt="carerr 1" class="w-1/2 h-full object-cover">
                <div class="p-2 pr-4 pl-4">
                    <h3 class="text-base font-bold mb-1">
                        Supply Chain Management
                    </h3>
                    <p class="text-sm">
                        Our team ensures all Kopi Kenangan stores across Indonesia has fresh and quality inventory through
                        seamless distribution network.
                    </p>
                </div>
            </div>

            <div class="w-1/2 h-40 flex gap-4 ">
                <img src="{{ asset('images/career-12.webp') }}" alt="Career 2" class="w-1/2 h-full object-cover">
                <div class="p-2 pr-4 pl-4">
                    <h3 class="text-base font-bold mb-1">
                        Technology and Business Intelligence
                    </h3>
                    <p class="text-sm">
                        We are the technical engines; we build software solution, digital products and tools; as well as
                        train data models to support business growth.
                    </p>
                </div>
            </div>
        </article>
    </section>
@endsection
