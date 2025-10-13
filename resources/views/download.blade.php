@extends('layouts.app')

@section('title', 'Download App')

@section('content')

    {{-- APP KOPKEN --}}
    <section
        class="flex flex-col lg:flex-row mt-16 lg:mt-40 px-4 sm:px-8 lg:px-0 lg:ml-[300px] lg:mr-[300px] items-center lg:items-start gap-10 lg:gap-0">
        <div class="w-full lg:basis-1/3 flex justify-center lg:justify-start">
            <img src="{{ asset('images/kopi.jpg') }}" alt="Kopi"
                class="w-[250px] sm:w-[280px] lg:w-[300px] h-[350px] sm:h-[400px] lg:h-[450px] object-contain">
        </div>

        <div class="w-full lg:basis-2/3 lg:ml-[100px] lg:mr-5 text-center lg:text-left">
            <article class="mb-10 lg:mb-16">
                <h2 class="text-xl font-bold mb-5">Kopi Kenangan App</h2>
                <p class="text-base font-semibold mb-5">
                    Find out how to get free vouchers, priority access and extra benefits.
                </p>

                <h3 class="font-semibold">Here’s how:</h3>
                <p class="mb-5">Use the Kopi Kenangan app to order, you may select pickup or delivery to skip the queue
                </p>

                <ul class="list-disc list-outside mb-5 ml-6 text-left inline-block">
                    <li class="mb-2">
                        Collect Kenangan Points cashback through in-app ordering OR scan the QR code at the cashier.
                    </li>
                    <li>
                        Enjoy exclusive membership deals like free vouchers, birthday drinks, priority access to new
                        products and more!
                    </li>
                </ul>
                <p>Extra convenience. Extra benefits. Only in Kenangan app.</p>
            </article>

            <aside class="flex flex-col sm:flex-row justify-center lg:justify-start items-center gap-4 sm:gap-6">
                <!-- Google Play -->
                <a href="https://play.google.com/store/apps/details?id=app.idmu" target="_blank"
                    class="flex justify-center">
                    <div class="w-56 h-14 flex items-center justify-center">
                        <img alt="Get it on Google Play"
                            src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png"
                            class="max-h-full max-w-full object-contain" />
                    </div>
                </a>

                <!-- App Store -->
                <a href="https://apps.apple.com/app/idXXXXXXXXX" target="_blank" class="flex justify-center">
                    <div class="w-56 h-14 flex items-center justify-center">
                        <img alt="Download on the App Store"
                            src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg"
                            class="max-h-full max-w-full object-contain" />
                    </div>
                </a>
            </aside>
        </div>
    </section>

    {{-- TIPS & TRICKS --}}
    <section class="p-4 sm:p-8 mt-16 lg:mt-32">
        <h1 class="text-2xl sm:text-3xl font-bold text-center">Tips and Tricks</h1>

        {{-- 1 --}}
        <div
            class="flex flex-col lg:flex-row justify-center items-center lg:items-start gap-8 mt-12 lg:mt-24 px-4 lg:ml-56 lg:mr-56">
            <div class="w-full lg:w-1/2 h-auto sm:h-72">
                <img src="{{ asset('images/orang-dw.webp') }}" alt="orang"
                    class="w-full h-full object-contain rounded-md">
            </div>
            <div class="w-full lg:w-1/2 h-auto sm:h-72 text-center lg:text-left">
                <h3 class="text-xl font-bold mb-4 sm:mb-6 pt-2">Order Ahead To Skip The Queue</h3>
                <p class="text-base mb-4 sm:pr-10">
                    We all know how busy your morning can get. How about saving some time by collecting your morning coffee
                    without waiting?
                </p>
                <p class="text-base sm:pr-10">
                    <span class="font-bold">Use our Kopi Kenangan app</span> to order ahead and pick up in-stores. Treat
                    yourself with a fresh start of the day without standing in line.
                </p>
            </div>
        </div>

        {{-- 2 --}}
        <div
            class="flex flex-col-reverse lg:flex-row justify-center items-center lg:items-start gap-8 mt-12 lg:mt-24 px-4 lg:ml-56 lg:mr-56">
            <div class="w-full lg:w-1/2 h-auto sm:h-72 text-center lg:text-left">
                <h3 class="text-xl font-bold mb-4 sm:mb-6 pt-2">Kenangan Points</h3>
                <p class="text-base mb-4 sm:pr-10">
                    Collect Kenangan Points cashback on every transaction if you order in-app or scan QR code at our cashier
                    counter. Use them as cash for your next transaction with no minimum order!
                </p>
                <p class="text-base sm:pr-10">
                    <span class="font-bold">Keep in mind: 1 Kenangan Point = 1 Rp</span>
                </p>
            </div>
            <div class="w-full lg:w-1/2 h-auto sm:h-72">
                <img src="{{ asset('images/kenangan-poin.webp') }}" alt="kenangan poin"
                    class="w-full h-full object-contain rounded-md">
            </div>
        </div>

        {{-- 3 --}}
        <div
            class="flex flex-col lg:flex-row justify-center items-center lg:items-start gap-8 mt-12 lg:mt-24 px-4 lg:ml-56 lg:mr-56">
            <div class="w-full lg:w-1/2 h-auto sm:h-72">
                <img src="{{ asset('images/promotion.webp') }}" alt="promotion"
                    class="w-full h-full object-contain rounded-md">
            </div>
            <div class="w-full lg:w-1/2 h-auto sm:h-72 text-center lg:text-left">
                <h3 class="text-xl font-bold mb-4 sm:mb-6 pt-2 underline">
                    <a href="#">Promotions</a>
                </h3>
                <p class="text-base mb-4 sm:pr-10">
                    Don’t want to miss out on all the promotions and discounts? Wake up everyday and check out what’s new in
                    our Kenangan APP!
                </p>
                <p class="text-base sm:pr-10">
                    We may also surprise you with vouchers for free! Follow us on Instagram
                    <span class="font-bold">(@kopikenangan.id)</span> to keep you posted on more amazing app exclusive
                    benefits.
                </p>
            </div>
        </div>
    </section>

    {{-- MEMBERSHIP --}}
    <section class="p-4 sm:p-8 mt-16 lg:mt-24">
        <div class="px-4 lg:ml-56 lg:mr-56 text-center lg:text-left">
            <h1 class="text-xl font-bold mb-4">Membership Benefits</h1>
            <p class="mb-6 sm:pr-10 lg:pr-56">
                At Kopi Kenangan, the more you spend, the more you save! Upgrade your membership tier by making more
                purchases. In return, you will get % increases on Kenangan Points cashback, more free vouchers, priority
                access to new products and more!
            </p>

            <h2 class="font-bold mb-4">Check out your membership page for more information</h2>

            <div class="flex justify-center">
                <img src="{{ asset('images/member.webp') }}" alt="Member"
                    class="w-[350px] sm:w-[500px] lg:w-[1000px] h-auto object-contain">
            </div>
        </div>

        <div class="text-base underline text-center pt-16 pb-8">
            <p><a href="#">Delete my Kopi Kenangan App Account</a></p>
        </div>
    </section>

@endsection
