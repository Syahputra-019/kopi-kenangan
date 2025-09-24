@extends('layouts.app')

@section('title', 'Download App')

@section('content')

    {{-- app kopken --}}
    <section class="flex flex-row mt-40 ml-[300px] mr-[300px] ">
        <div class="basis-1/3">
            <img src="{{ asset('images/kopi.jpg') }}" alt="Kopi" class="w-[300px] h-[450px] object-contain">
        </div>

        <div class="basis-2/3 ml-[100px] mr-5">
            <article class="mb-16">
                <h2 class="text-xl font-bold mb-5">Kopi Kenangan App</h2>
                <p class="text-base font-semibold mb-5">Find out how to get free vouchers, priority access and extra
                    benefits.</p>

                <h3 class="font-semibold">Here’s how:</h3>
                <p class="mb-5">Use the Kopi Kenangan app to order, you may select pickup or delivery to skip the
                    queue</p>
                <ul class="list-outside list-disc mb-5 ml-8">
                    <li class="mb-2">Collect Kenangan Points cashback through in-app ordering OR scan the QR code
                        at the cashier.
                    </li>
                    <li>Enjoy exclusive membership deals like free vouchers, birthday drinks, priority access to new
                        products and more!</li>
                </ul>
                <p>Extra convenience. Extra benefits. Only in Kenangan app.</p>
            </article>

            <aside class="flex">
                <!-- Google Play -->
                <a href="https://play.google.com/store/apps/details?id=app.idmu" target="_blank">
                    <div class="w-64 h-14 flex items-center justify-center ">
                        <img alt="Get it on Google Play"
                            src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png"
                            class="max-h-full max-w-full object-contain" />
                    </div>
                </a>

                <!-- App Store -->
                <a href="https://apps.apple.com/app/idXXXXXXXXX" target="_blank">
                    <div class="w-64 h-14 flex items-center justify-center ">
                        <img alt="Download on the App Store"
                            src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg"
                            class="max-h-full max-w-full object-contain" />
                    </div>
                </a>
            </aside>
        </div>
    </section>

    <section class=" p-8 mt-32">
        <h1 class="text-3xl font-bold text-center">Tips and Tricks</h1>
        <div class="mr-56 ml-56 flex justify-center gap-10 mt-24">
            <div class="w-1/2 h-72">
                <img src="{{ asset('images/orang-dw.webp') }}" alt="orang" class="w-full h-full object-contain ">
            </div>
            <div class="w-1/2 h-72">
                <h3 class="text-xl font-bold mb-6 pt-4">
                    Order Ahead To Skip The Queue</h3>
                <p class="text-base mb-4 pr-40">
                    We all know how busy your morning can get. How about saving some time by collecting your morning coffee
                    without waiting?
                </p>
                <p class="text-base pr-40">
                    <span class="font-bold">Use our Kopi Kenangan app</span> to order ahead and pick up in-stores. Treat
                    yourself with a fresh start of the
                    day without standing in line.
                </p>
            </div>
        </div>

        <div class="mr-56 ml-56 flex justify-center gap-10 mt-24">
            <div class="w-1/2 h-72 ml-16">
                <h3 class="text-xl font-bold mb-6 pt-4">
                    Kenangan Points</h3>
                <p class="text-base mb-4 pr-24">
                    Collect Kenangan Points cashback on every transaction if you order in-app or scan QR code at our cashier
                    counter. Use them as cash for your next transaction with no minimum order!
                </p>
                <p class="text-base pr-24">
                    <span class="font-bold">Keep in mind: 1 Kenangan Point = 1 Rp</span>
                </p>
            </div>
            <div class="w-1/2 h-72 mr-16">
                <img src="{{ asset('images/kenangan-poin.webp') }}" alt="kenangan poin"
                    class="w-full h-full object-contain ">
            </div>
        </div>

        <div class="mr-56 ml-56 flex justify-center gap-10 mt-24">
            <div class="w-1/2 h-72">
                <img src="{{ asset('images/promotion.webp') }}" alt="orang" class="w-full h-full object-contain ">
            </div>
            <div class="w-1/2 h-72">
                <h3 class="text-xl font-bold mb-6 pt-4 underline">
                    <a href="">Promotions</a>
                </h3>
                <p class="text-base mb-4 pr-40">
                    Don’t want to miss out on all the promotions and discounts? Wake up everyday and check out what’s new in
                    our Kenangan APP!
                </p>
                <p class="text-base pr-40">
                    We may also surprise you with vouchers for free! Follow us on Instagram <span
                        class="font-bold">(@kopikenangan.id)</span> to keep you posted on more amazing app exclusive
                    benefits.
                </p>
            </div>
        </div>
    </section>

    <section class="p-8 mt-24">
        <div class="mr-56 ml-56">
            <h1 class="text-xl font-bold mb-4">Membership Benefits</h1>
            <p class="pr-56 mb-6">
                At Kopi Kenangan, the more you spend, the more you save! Upgrade your membership tier by making more
                purchases. In return, you will get % increases on Kenangan Points cashback, more free vouchers, priority
                access to new products and more!
            </p>

            <h2 class="font-bold mb-4">Check out your membership page for more information</h2>
            <div class="flex items-center justify-center">
                <img src="{{ asset('images/member.webp') }}" alt="Member" class="w-[700px] h-[500px] object-contain">
            </div>
        </div>

        <div class="text-base underline text-center pt-20 pb-8">
            <p><a href="">Delete my Kopi Kenangan App Account</a></p>
        </div>
    </section>

@endsection
