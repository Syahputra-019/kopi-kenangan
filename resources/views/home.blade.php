<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Kopi-Kenangan') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">

    <!-- Styles / Scripts -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="z-10">
        {{-- navigasi --}}
        <nav>
            <a href="#" class="logo">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo">
            </a>
            <div class="nav-kanan">
                <ul class="navigasi">
                    <li><a href="home">Home</a></li>
                    <li><a href="VIP">VIP</a></li>
                    <li><a href="Order">Order</a></li>
                    <li><a href="About">About</a></li>
                    <li><a href="Career">Carrer</a></li>
                    <li><a href="Download-App">Download App</a></li>
                </ul>

                <a href="#" class="logok">
                    <img src="{{ asset('images/logo2.jpeg') }}" alt="Logo kanan">
                </a>
            </div>
        </nav>
    </header>
    <main>
        <section class="video-promo full-bleed">
            <iframe width="100%" height="500"
                src="https://www.youtube.com/embed/rkfoS9exAkU?autoplay=1&mute=1&controls=0&showinfo=0&modestbranding=1&rel=0&loop=1&playlist=rkfoS9exAkU"
                title="YouTube video player" frameborder="0" allow="autoplay; encrypted-media"
                referrerpolicy="strict-origin-when-cross-origin">
            </iframe>
        </section>
        {{-- judul --}}
        <section class="py-40">
            <h1 class="text-3xl text-center font-sans"><b>Kopi Kenangan stands for Coffee Memories.</b></h1>
        </section>
        {{-- foto CEO --}}
        <section class="relative flex">
            <figure class="ml-[230px]">
                <img src="{{ asset('images/CEO-Kopken.jpg') }}" alt="Edward Tirtanata, CEO and Founder"
                    class="w-[783px] h-[920px]">
            </figure>
            <blockquote class="absolute left-[800px] top-1/2 -translate-y-1/2 w-[500px] text-lg bg-gray-100 p-[70px]">
                <p>“At Kopi Kenangan, our dream is to serve
                    high quality coffee, made with the freshest
                    local ingredients to customers across
                    Indonesia – and the rest of the world.”
                </p>
                <footer class="mt-8">
                    — Edward Tirtanata, CEO and Founder
                </footer>
            </blockquote>
        </section>
        {{-- News --}}
        <section class="pt-40 pb-16">
            <h1 class="text-3xl text-center font-sans"><b>News</b></h1>
        </section>
        {{-- logo penghargaan --}}
        <section class="flex justify-center items-stretch ml-[270px] mr-[270px]">
            {{-- sertifikat halal --}}
            <article class="flex flex-col items-center text-center p-4 w-1/3">
                <img src="{{ asset('images/logo-halal.png') }}" alt="Halal"
                    class="mx-auto mb-4 w-40 h-40 object-contain">
                <h3 class="mb-4 font-bold">Halal certification</h3>
                <p class="px-6">
                    Grab-and-go coffee chain Kopi Kenangan strengthens its commitment
                    to serve the best quality product and become the first Kopi Susu
                    Kekinian to obtain Halal Certification from Majelis Ulama Indonesia.
                </p>
            </article>

            {{-- brand --}}
            <article class="flex flex-col items-center text-center p-4 w-1/3">
                <img src="{{ asset('images/brand.png') }}" alt="WORLD BEST BRAND WINNER 2020"
                    class="mx-auto mb-4 w-40 h-40 object-contain">
                <h3 class="mb-4 font-bold">WORLD BEST BRAND WINNER 2020</h3>
                <p class="px-6">
                    Kopi Kenangan has been appointed as the only Brand of The Year
                    winner in the Café Chain category from Indonesia by The World
                    Branding Awards.
                </p>
            </article>

            {{-- expreso --}}
            <article class="flex flex-col items-center text-center p-4 w-1/3">
                <img src="{{ asset('images/coffe.png') }}" alt="COFFEE JOURNEY"
                    class="mx-auto mb-4 w-40 h-40 object-contain">
                <h3 class="mb-4 font-bold">COFFEE JOURNEY</h3>
                <p class="px-6">
                    At Kopi Kenangan, we make sure you have the best coffee experience.
                    We work relentlessly to guarantee we deliver on our promise. From
                    harvest, tasting, roasting and working together with the producers
                    in Indonesia to produce the best crop to our customers.
                </p>
            </article>
        </section>

        <section class="flex justify-center pt-16 pb-40">
            {{-- buttom learn more --}}
            <form action="/about" method="get">
                <button type="submit"
                    class="w-40 h-16 font-bold text-xl border border-black rounded-full text-black hover:bg-black hover:text-white">
                    Learn More
                </button>
            </form>
        </section>

        {{-- app kopken --}}
        <section class="flex flex-row ml-[300px] mr-[300px] ">
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

        {{-- Promo --}}
        <section class="pt-40 pb-16">
            <h1 class="text-3xl text-center font-sans"><b>Promo Of The Month</b></h1>
        </section>

        <section>
            <div class="flex justify-center  gap-16">
                <a href="">
                    <img src="{{ asset('images/Promogebyar.jpeg') }}" alt="Promo Gebyar"
                        class="w-[352px] h-[353px] object-contain">
                </a>
                <a href="">
                    <img src="{{ asset('images/promodiskon.jpeg') }}" alt="Promo diskon"
                        class="w-[352px] h-[353px] object-contain">
                </a>
            </div>

            <div class="pt-16 pb-16">
                <h1 class="text-3xl text-center font-sans"><b>Beli Di Sini</b></h1>
            </div>

            <div class="flex justify-center gap-16 pb-10">
                <form action="/about" method="get">
                    <button type="submit"
                        class="w-80 h-16 font-bold text-2xl border border-black rounded-full bg-black text-white hover:bg-gray-800 ">
                        Outlet Terdekat
                    </button>
                </form>
                <form action="/about" method="get">
                    <button type="submit"
                        class="w-80 h-16 font-bold text-2xl border border-black rounded-full bg-black text-white hover:bg-gray-800">
                        Aplikasi Kopi Kenangan
                    </button>
                </form>
            </div>
        </section>

        {{-- iklan --}}
        <section class="mt-64 mb-16">
            <div class="flex justify-center gap-4 mb-4">
                <a href="">
                    <img src="{{ asset('images/Iklan1.webp') }}" alt="Iklan 1" class="w-64 h-64 object-contain">
                </a>
                <a href="">
                    <img src="{{ asset('images/iklan2.webp') }}" alt="Iklan 2" class="w-64 h-64 object-contain">
                </a>
                <a href="">
                    <img src="{{ asset('images/iklan3.webp') }}" alt="Iklan 3" class="w-64 h-64 object-contain">
                </a>
            </div>
            <div class="flex justify-center gap-4 mb-4">
                <a href="">
                    <img src="{{ asset('images/iklan4.webp') }}" alt="Iklan 4" class="w-64 h-64 object-contain">
                </a>
                <a href="">
                    <img src="{{ asset('images/iklan5.webp') }}" alt="Iklan 5" class="w-64 h-64 object-contain">
                </a>
                <a href="">
                    <img src="{{ asset('images/iklan6.webp') }}" alt="Iklan 6" class="w-64 h-64 object-contain">
                </a>
            </div>
            <div class="flex justify-center gap-4 mb-4">
                <a href="">
                    <img src="{{ asset('images/iklan7.webp') }}" alt="Iklan 7" class="w-64 h-64 object-contain">
                </a>
                <a href="">
                    <img src="{{ asset('images/iklan8.webp') }}" alt="Iklan 8" class="w-64 h-64 object-contain">
                </a>
                <a href="">
                    <img src="{{ asset('images/iklan9.webp') }}" alt="Iklan 9" class="w-64 h-64 object-contain">
                </a>
            </div>
            <div class="flex justify-center p-8">
                <a href="" class="font-semibold text-center underline underline-offset-4 text-base">Follow us
                    @kopikenangan.id</a>
            </div>
        </section>

        {{-- footer --}}
        <footer class="bg-black text-white">
            <section class="flex ml-64 mr-64">
                <div class="pt-16 w-1/2">
                    <div class="flex">
                        <img src="{{ asset('images/brand2.png') }}" alt="Logo brand"
                            class="w-16 h-16 object-contain">
                        <img src="{{ asset('images/halal-indo2.png') }}" alt="Logo halal"
                            class="w-16 h-16 object-contain">
                    </div>
                    <p class="text-sm p-5">Hak Cipta ©2020 <span class="font-bold">PT Bumi Berkah Boga</span></p>
                </div>

                <div class="pt-12 w-1/2">
                    <h2 class="underline underline-offset-1 font-semibold">OUR LOCATION</h2>
                    <p class="text-sm pt-4 text-justify">
                        Kenangan Office. Plaza Blok M, lantai 7. Jl.
                        Bulungan No.76, RT.6/RW.6, Kramat Pela, Kec. Kby.
                        Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota
                        Jakarta 12130Plaza Blok M, lantai 7. Jl. Bulungan
                        No.76, RT.6/RW.6, Kramat Pela, Kec. Kby. Baru,
                        Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12130
                    </p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1459184480714!2d106.79502957499058!3d-6.244493193743871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f17ad18e02e7%3A0x2be46f03173d1be!2sKopi%20Kenangan%20x%20Chigo%20Blok%20M%20Plaza!5e0!3m2!1sid!2sid!4v1758304998190!5m2!1sid!2sid"
                        width="500" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="filter grayscale pt-4"></iframe>
                </div>
            </section>

            <section class=" pt-8">
                <div class="flex justify-center gap-3 text-base font-bold">
                    <p>Curhat Yuk 081-7075-6865</p>
                    <p class="flex"><img src="{{ asset('images/logo-wa.jpg') }}" alt="Logo Wa"
                            class="w-6 h-6 object-contain">Whatsapp Chat Only</p>
                </div>

                <div class="text-center text-sm pt-8 pb-10">
                    <h2 class="font-semibold ">Consumer Complaints Service Contact Information</h2>
                    <p>
                        Directorate General of Consumer Protection and Trade Compliance,
                        Ministry of Trade of the Republic of Indonesia <br>
                        Whatsapp Diktjen PKTN: 0853-1111-1010
                    </p>
                </div>
            </section>
        </footer>
    </main>
</body>

</html>
