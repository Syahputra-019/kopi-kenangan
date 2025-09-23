<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name', 'Kopi-Kenangan'))</title>

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
                    <li><a href="/">Home</a></li>
                    <li><a href="/vip">VIP</a></li>
                    <li><a href="/order">Order</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/career">Carrer</a></li>
                    <li><a href="/download">Download App</a></li>
                </ul>

                <a href="#" class="logok">
                    <img src="{{ asset('images/logo2.jpeg') }}" alt="Logo kanan">
                </a>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>

    {{-- footer --}}
    <footer class="bg-black text-white">
        <section class="flex ml-64 mr-64">
            <div class="pt-16 w-1/2">
                <div class="flex">
                    <img src="{{ asset('images/brand2.png') }}" alt="Logo brand" class="w-16 h-16 object-contain">
                    <img src="{{ asset('images/halal-indo2.png') }}" alt="Logo halal" class="w-16 h-16 object-contain">
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
</body>

</html>
