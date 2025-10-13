@extends('layouts.app')

@section('title', 'Career')

@section('content')
    {{-- VIDEO SECTION --}}
    <section class="video-promo full-bleed">
        <iframe class="w-full h-[200px] sm:h-[300px] lg:h-[700px]"
            src="https://www.youtube.com/embed/rkfoS9exAkU?autoplay=1&mute=1&controls=0&showinfo=0&modestbranding=1&rel=0&loop=1&playlist=rkfoS9exAkU"
            title="YouTube video player" frameborder="0" allow="autoplay; encrypted-media"
            referrerpolicy="strict-origin-when-cross-origin">
        </iframe>
    </section>

    {{-- JOB SEARCH --}}
    <section aria-labelledby="job-search" class="px-4 py-6 bg-white my-8 lg:mt-24 lg:mb-24">
        <h2 id="job-search" class="sr-only">Job Search</h2>

        <form action="/jobs" method="GET" role="search"
            class="max-w-4xl mx-auto flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-2">
            <label for="country" class="sr-only">Pilih Negara</label>
            <select id="country" name="country"
                class="w-full sm:w-auto px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-amber-500">
                <option>Indonesia</option>
            </select>

            <label for="keyword" class="sr-only">Cari pekerjaan</label>
            <input type="search" id="keyword" name="keyword" placeholder="Search for jobs by keyword"
                class="flex-1 px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-amber-500 focus:outline-none w-full sm:w-auto" />

            <button type="submit"
                class="px-4 py-2 bg-black text-white font-bold border border-white rounded-md hover:bg-gray-800 transition w-full sm:w-auto">
                FIND JOBS
            </button>
        </form>
    </section>

    {{-- ABOUT US --}}
    <section class="flex flex-col lg:flex-row justify-center gap-6 lg:gap-10 px-4 lg:px-0">
        <div class="w-full lg:w-1/2 lg:ml-56 p-4 text-center lg:text-left">
            <h3 class="text-xl font-bold mb-4">About us</h3>
            <span class="text-base font-bold">Thoughts from Our Team</span>
            <p class="text-base mt-3 mb-3">
                “The collaboration and teamwork I experienced; opportunities given to me so that I can push myself; and the
                trust given to me by the management team; excites me everyday.
            </p>
            <p class="text-base mb-3">
                The sense of achievement is constant; and I am challenged all the time to bring a simple idea into fruition,
                be it product development or building a new brand for the company.”
            </p>
            <p class="text-sm">
                Veronica Sarah, AVP of RND and Category Product Development
            </p>
        </div>

        <div class="w-full lg:w-1/2 lg:mr-56 h-[300px] sm:h-[400px]">
            <img src="{{ asset('images/veronika.jpeg') }}" alt="Veronika" class="w-full h-full object-cover rounded-md">
        </div>
    </section>

    {{-- OUR MISSION --}}
    <section class="flex flex-col lg:flex-row justify-center gap-6 lg:gap-10 mt-10 px-4 lg:px-0">
        <div class="w-full lg:w-1/2 lg:ml-56 h-[300px] sm:h-[400px]">
            <img src="{{ asset('images/bg-career.jpeg') }}" alt="Career" class="w-full h-full object-cover rounded-md">
        </div>

        <div class="w-full lg:w-1/2 lg:mr-56 p-4 text-center lg:text-left">
            <h3 class="text-xl font-bold mb-4">OUR MISSION</h3>
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

    {{-- OUR TEAM --}}
    <section class="mt-10 pt-4 pb-16 bg-gray-100">
        <h1 class="text-2xl font-bold text-center lg:text-left lg:ml-56 mt-10 mb-10">Our Team</h1>

        {{-- BAGIAN 1 --}}
        <article class="flex flex-col lg:flex-row justify-center gap-6 mx-4 lg:mx-[14rem] mb-10">
            <div class="w-full lg:w-1/2 flex flex-col sm:flex-row gap-4 h-auto sm:h-40">
                <img src="{{ asset('images/career-1.webp') }}" alt="carerr 1"
                    class="w-full sm:w-1/2 h-48 sm:h-full object-cover rounded-md">
                <div class="p-2 sm:px-4">
                    <h3 class="text-base font-bold mb-1">Accounting, Control, Tax and Treasury</h3>
                    <p class="text-sm">It’s more than numbers, we are trusted to ensure our leaders have the most up to date
                        and reliable information to help make the best possible decisions.</p>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex flex-col sm:flex-row gap-4 h-auto sm:h-40">
                <img src="{{ asset('images/career-2.webp') }}" alt="Career 2"
                    class="w-full sm:w-1/2 h-48 sm:h-full object-cover rounded-md">
                <div class="p-2 sm:px-4">
                    <h3 class="text-base font-bold mb-1">Business Development</h3>
                    <p class="text-sm">
                        We are the driving engine that charter new area of growth in Kopi Kenangan; be it retail
                        development,
                        retail experience, product development, or championing new brands.
                    </p>
                </div>
            </div>
        </article>

        {{-- BAGIAN 2 --}}
        <article class="flex flex-col lg:flex-row justify-center gap-6 mx-4 lg:mx-[14rem] mb-10">
            <div class="w-full lg:w-1/2 flex flex-col sm:flex-row gap-4 h-auto sm:h-40">
                <img src="{{ asset('images/career-3.webp') }}" alt="carerr 3"
                    class="w-full sm:w-1/2 h-48 sm:h-full object-cover rounded-md">
                <div class="p-2 sm:px-4">
                    <h3 class="text-base font-bold mb-1">Creative</h3>
                    <p class="text-sm">
                        We are a visual powerhouse. We are all about nurturing imagination and turning thoughts into ideas
                        that give our brands the edge. We connect with our customers through visual storytelling in-store
                        and
                        online.
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex flex-col sm:flex-row gap-4 h-auto sm:h-40">
                <img src="{{ asset('images/career-4.webp') }}" alt="Career 4"
                    class="w-full sm:w-1/2 h-48 sm:h-full object-cover rounded-md">
                <div class="p-2 sm:px-4">
                    <h3 class="text-base font-bold mb-1">Founders’ Office</h3>
                    <p class="text-sm">
                        We work closely with the founders and senior management of the company. We are responsible for
                        formulating and executing long-term strategy and corporate finance.
                    </p>
                </div>
            </div>
        </article>

        {{-- BAGIAN 3 --}}
        <article class="flex flex-col lg:flex-row justify-center gap-6 mx-4 lg:mx-[14rem] mb-10">
            <div class="w-full lg:w-1/2 flex flex-col sm:flex-row gap-4 h-auto sm:h-40">
                <img src="{{ asset('images/career-5.webp') }}" alt="Career 5"
                    class="w-full sm:w-1/2 h-48 sm:h-full object-cover rounded-md">
                <div class="p-2 sm:px-4">
                    <h3 class="text-base font-bold mb-1">Growth and Product</h3>
                    <p class="text-sm">
                        Our team is tasked to think BIG; through analysis of market trends, consumer behavior, and we build
                        digital products to improve experience online.
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex flex-col sm:flex-row gap-4 h-auto sm:h-40">
                <img src="{{ asset('images/career-6.webp') }}" alt="Career 6"
                    class="w-full sm:w-1/2 h-48 sm:h-full object-cover rounded-md">
                <div class="p-2 sm:px-4">
                    <h3 class="text-base font-bold mb-1">Human Resource</h3>
                    <p class="text-sm">
                        People are our top of mind and we see everyone as one big family. We constantly innovate to better
                        employee experience.
                    </p>
                </div>
            </div>
        </article>

        {{-- BAGIAN 4 --}}
        <article class="flex flex-col lg:flex-row justify-center gap-6 mx-4 lg:mx-[14rem] mb-10">
            <div class="w-full lg:w-1/2 flex flex-col sm:flex-row gap-4 h-auto sm:h-40">
                <img src="{{ asset('images/career-7.webp') }}" alt="Career 7"
                    class="w-full sm:w-1/2 h-48 sm:h-full object-cover rounded-md">
                <div class="p-2 sm:px-4">
                    <h3 class="text-base font-bold mb-1">Legal</h3>
                    <p class="text-sm">
                        Our legal team is deeply involved in every aspect of Kopi Kenangan’s businesses, from contracting to
                        compliance for new and existing projects.
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex flex-col sm:flex-row gap-4 h-auto sm:h-40">
                <img src="{{ asset('images/career-8.webp') }}" alt="Career 8"
                    class="w-full sm:w-1/2 h-48 sm:h-full object-cover rounded-md">
                <div class="p-2 sm:px-4">
                    <h3 class="text-base font-bold mb-1">Marketing</h3>
                    <p class="text-sm">
                        We connect with customers through compelling stories, campaigns, and media strategy — building brand
                        loyalty and preference.
                    </p>
                </div>
            </div>
        </article>

        {{-- BAGIAN 5 --}}
        <article class="flex flex-col lg:flex-row justify-center gap-6 mx-4 lg:mx-[14rem] mb-10">
            <div class="w-full lg:w-1/2 flex flex-col sm:flex-row gap-4 h-auto sm:h-40">
                <img src="{{ asset('images/career-9.webp') }}" alt="Career 9"
                    class="w-full sm:w-1/2 h-48 sm:h-full object-cover rounded-md">
                <div class="p-2 sm:px-4">
                    <h3 class="text-base font-bold mb-1">Operations</h3>
                    <p class="text-sm">
                        We push boundaries to improve consumer experience in stores and ensure teams follow SOPs to maintain
                        high service standards.
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex flex-col sm:flex-row gap-4 h-auto sm:h-40">
                <img src="{{ asset('images/career-10.webp') }}" alt="Career 10"
                    class="w-full sm:w-1/2 h-48 sm:h-full object-cover rounded-md">
                <div class="p-2 sm:px-4">
                    <h3 class="text-base font-bold mb-1">Quality Assurance</h3>
                    <p class="text-sm">
                        Our team conducts frequent audits to ensure quality, hygiene, and consistency — delivering the best
                        coffee standards.
                    </p>
                </div>
            </div>
        </article>

        {{-- BAGIAN 6 --}}
        <article class="flex flex-col lg:flex-row justify-center gap-6 mx-4 lg:mx-[14rem] mb-10">
            <div class="w-full lg:w-1/2 flex flex-col sm:flex-row gap-4 h-auto sm:h-40">
                <img src="{{ asset('images/career-11.webp') }}" alt="Career 11"
                    class="w-full sm:w-1/2 h-48 sm:h-full object-cover rounded-md">
                <div class="p-2 sm:px-4">
                    <h3 class="text-base font-bold mb-1">Supply Chain Management</h3>
                    <p class="text-sm">
                        Our team ensures all stores have fresh, quality inventory through a seamless distribution network.
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex flex-col sm:flex-row gap-4 h-auto sm:h-40">
                <img src="{{ asset('images/career-12.webp') }}" alt="Career 12"
                    class="w-full sm:w-1/2 h-48 sm:h-full object-cover rounded-md">
                <div class="p-2 sm:px-4">
                    <h3 class="text-base font-bold mb-1">Technology and Business Intelligence</h3>
                    <p class="text-sm">
                        We are the technical engine; building digital products, software solutions, and data models to
                        support growth.
                    </p>
                </div>
            </div>
        </article>
    </section>
@endsection
