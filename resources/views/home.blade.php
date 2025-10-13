@extends('layouts.app')

@section('title', 'Home')

@section('content')
    {{-- video section --}}
    <section class="mt-24 video-promo full-bleed">
        <iframe class="w-full h-[300px] lg:h-[700px]" {{-- responsive fix --}}
            src="https://www.youtube.com/embed/rkfoS9exAkU?autoplay=1&mute=1&controls=0&showinfo=0&modestbranding=1&rel=0&loop=1&playlist=rkfoS9exAkU"
            title="YouTube video player" frameborder="0" allow="autoplay; encrypted-media"
            referrerpolicy="strict-origin-when-cross-origin">
        </iframe>
    </section>

    {{-- judul --}}
    <section class="py-20 md:py-40 text-center px-4">
        <h1 class="text-xl md:text-3xl font-sans font-bold">
            Kopi Kenangan stands for Coffee Memories.
        </h1>
    </section>

    {{-- foto CEO --}}
    <section class="relative flex flex-col md:flex-row items-center md:items-start px-4 md:px-0">
        <figure class="md:ml-[230px] mb-8 md:mb-0">
            <img src="{{ asset('images/CEO-Kopken.jpg') }}" alt="Edward Tirtanata, CEO and Founder"
                class="w-full md:w-[783px] h-auto rounded-lg shadow-md">
        </figure>

        <blockquote
            class="md:absolute md:left-[800px] md:top-1/2 md:-translate-y-1/2 w-full md:w-[500px] text-base md:text-lg bg-gray-100 p-6 md:p-[70px]">
            <p>
                “At Kopi Kenangan, our dream is to serve high quality coffee,
                made with the freshest local ingredients to customers across
                Indonesia – and the rest of the world.”
            </p>
            <footer class="mt-8 font-semibold">
                — Edward Tirtanata, CEO and Founder
            </footer>
        </blockquote>
    </section>

    {{-- News --}}
    <section class="pt-20 md:pt-40 pb-8 md:pb-16 text-center">
        <h1 class="text-2xl md:text-3xl font-sans font-bold">News</h1>
    </section>

    {{-- logo penghargaan --}}
    <section class="flex flex-col md:flex-row justify-center items-stretch gap-8 md:gap-0 px-6 md:ml-[270px] md:mr-[270px]">
        {{-- sertifikat halal --}}
        <article class="flex flex-col items-center text-center p-4 md:w-1/3 bg-white rounded-lg shadow-sm">
            <img src="{{ asset('images/logo-halal.png') }}" alt="Halal"
                class="mx-auto mb-4 w-28 md:w-40 h-28 md:h-40 object-contain">
            <h3 class="mb-4 font-bold">Halal certification</h3>
            <p class="px-2 md:px-6 text-sm md:text-base">
                Grab-and-go coffee chain Kopi Kenangan strengthens its commitment
                to serve the best quality product and become the first Kopi Susu
                Kekinian to obtain Halal Certification from Majelis Ulama Indonesia.
            </p>
        </article>

        {{-- brand --}}
        <article class="flex flex-col items-center text-center p-4 md:w-1/3 bg-white rounded-lg shadow-sm">
            <img src="{{ asset('images/brand.png') }}" alt="WORLD BEST BRAND WINNER 2020"
                class="mx-auto mb-4 w-28 md:w-40 h-28 md:h-40 object-contain">
            <h3 class="mb-4 font-bold text-sm md:text-base">WORLD BEST BRAND WINNER 2020</h3>
            <p class="px-2 md:px-6 text-sm md:text-base">
                Kopi Kenangan has been appointed as the only Brand of The Year
                winner in the Café Chain category from Indonesia by The World
                Branding Awards.
            </p>
        </article>

        {{-- expreso --}}
        <article class="flex flex-col items-center text-center p-4 md:w-1/3 bg-white rounded-lg shadow-sm">
            <img src="{{ asset('images/coffe.png') }}" alt="COFFEE JOURNEY"
                class="mx-auto mb-4 w-28 md:w-40 h-28 md:h-40 object-contain">
            <h3 class="mb-4 font-bold text-sm md:text-base">COFFEE JOURNEY</h3>
            <p class="px-2 md:px-6 text-sm md:text-base">
                At Kopi Kenangan, we make sure you have the best coffee experience.
                We work relentlessly to guarantee we deliver on our promise. From
                harvest, tasting, roasting and working together with the producers
                in Indonesia to produce the best crop to our customers.
            </p>
        </article>
    </section>

    {{-- learn more --}}
    <section class="flex justify-center pt-10 md:pt-16 pb-20 md:pb-40">
        <form action="/about" method="get">
            <button type="submit"
                class="w-40 h-12 md:h-16 text-base md:text-xl font-bold border border-black rounded-full text-black hover:bg-black hover:text-white">
                Learn More
            </button>
        </form>
    </section>

    {{-- app section --}}
    <section class="flex flex-col md:flex-row md:ml-[300px] md:mr-[300px] items-center gap-10 px-6">
        <div class="md:basis-1/3">
            <img src="{{ asset('images/kopi.jpg') }}" alt="Kopi"
                class="w-full max-w-[300px] mx-auto h-auto object-contain">
        </div>

        <div class="md:basis-2/3 md:ml-[100px] mr-5">
            <article class="mb-16 text-center md:text-left">
                <h2 class="text-lg md:text-xl font-bold mb-5">Kopi Kenangan App</h2>
                <p class="text-sm md:text-base font-semibold mb-5">
                    Find out how to get free vouchers, priority access and extra benefits.
                </p>

                <h3 class="font-semibold">Here’s how:</h3>
                <p class="mb-5">Use the Kopi Kenangan app to order, pickup or delivery to skip the queue.</p>
                <ul class="list-outside list-disc mb-5 ml-6 md:ml-8 text-sm md:text-base">
                    <li class="mb-2">Collect Kenangan Points cashback through in-app ordering or scan the QR code.</li>
                    <li>Enjoy exclusive membership deals like free vouchers, birthday drinks, and more!</li>
                </ul>
                <p>Extra convenience. Extra benefits. Only in Kenangan app.</p>
            </article>

            <aside class="flex flex-col sm:flex-row items-center justify-center md:justify-start gap-4">
                <!-- Google Play -->
                <a href="https://play.google.com/store/apps/details?id=app.idmu" target="_blank">
                    <img alt="Get it on Google Play"
                        src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png"
                        class="h-12 object-contain" />
                </a>

                <!-- App Store -->
                <a href="https://apps.apple.com/app/idXXXXXXXXX" target="_blank">
                    <img alt="Download on the App Store"
                        src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg"
                        class="h-12 object-contain" />
                </a>
            </aside>
        </div>
    </section>

    {{-- Promo --}}
    <section class="pt-20 md:pt-40 pb-10 md:pb-16 text-center">
        <h1 class="text-2xl md:text-3xl font-sans font-bold">Promo Of The Month</h1>
    </section>

    <section class="px-4`">
        <div class="flex flex-col md:flex-row justify-center gap-8 md:gap-16">
            <a href=""><img src="{{ asset('images/Promogebyar.jpeg') }}" alt="Promo Gebyar"
                    class="w-full md:w-[352px] h-auto object-contain rounded-lg shadow"></a>
            <a href=""><img src="{{ asset('images/promodiskon.jpeg') }}" alt="Promo diskon"
                    class="w-full md:w-[352px] h-auto object-contain rounded-lg shadow"></a>
        </div>

        <div class="pt-16 pb-10 text-center">
            <h1 class="text-2xl md:text-3xl font-sans font-bold">Beli Di Sini</h1>
        </div>

        <div class="flex flex-col md:flex-row justify-center items-center gap-6 md:gap-16 pb-10">
            <button type="submit"
                class="w-72 md:w-80 h-12 md:h-16 text-lg md:text-2xl font-bold border border-black rounded-full bg-black text-white hover:bg-gray-800">
                Outlet Terdekat
            </button>
            <button type="submit"
                class="w-72 md:w-80 h-12 md:h-16 text-lg md:text-2xl font-bold border border-black rounded-full bg-black text-white hover:bg-gray-800">
                Aplikasi Kopi Kenangan
            </button>
        </div>
    </section>

    {{-- iklan --}}
    <section class="mt-64 mb-16 lg:px-96">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-2 mb-4 justify-items-center">
            <a href="">
                <img src="{{ asset('images/Iklan1.webp') }}" alt="Iklan 1" class="w-48 sm:w-56 md:w-64 object-cover">
            </a>
            <a href="">
                <img src="{{ asset('images/iklan2.webp') }}" alt="Iklan 2" class="w-48 sm:w-56 md:w-64 object-cover">
            </a>
            <a href="">
                <img src="{{ asset('images/iklan3.webp') }}" alt="Iklan 3" class="w-48 sm:w-56 md:w-64 object-cover">
            </a>
            <a href="">
                <img src="{{ asset('images/iklan4.webp') }}" alt="Iklan 4" class="w-48 sm:w-56 md:w-64 object-cover">
            </a>
            <a href="">
                <img src="{{ asset('images/iklan5.webp') }}" alt="Iklan 5" class="w-48 sm:w-56 md:w-64 object-cover">
            </a>
            <a href="">
                <img src="{{ asset('images/iklan6.webp') }}" alt="Iklan 6" class="w-48 sm:w-56 md:w-64 object-cover">
            </a>
            <a href="">
                <img src="{{ asset('images/iklan7.webp') }}" alt="Iklan 7" class="w-48 sm:w-56 md:w-64 object-cover">
            </a>
            <a href="">
                <img src="{{ asset('images/iklan8.webp') }}" alt="Iklan 8" class="w-48 sm:w-56 md:w-64 object-cover">
            </a>
            <a href="">
                <img src="{{ asset('images/iklan9.webp') }}" alt="Iklan 9" class="w-48 sm:w-56 md:w-64 object-cover">
            </a>
        </div>
        <div class="flex justify-center p-8">
            <a href="" class="font-semibold text-center underline underline-offset-4 text-sm md:text-base">
                Follow us @kopikenangan.id
            </a>
        </div>
    </section>
@endsection
