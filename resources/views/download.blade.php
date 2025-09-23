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

@endsection
