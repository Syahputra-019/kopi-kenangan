<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name', 'Kopi-Kenangan'))</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Tailwind & Font Awesome -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="font-['Roboto']">
    <header class="lg:text-xl z-10 w-full bg-white fixed top-0 left-0">
        {{-- navigasi --}}
        <nav class="flex items-center justify-between px-4 py-7 md:px-10">
            <!-- Logo kiri -->
            <a href="#" class="logo flex items-center">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="w-20">
            </a>

            <!-- Tombol menu (muncul di mobile saja) -->
            <button id="menu-btn" class="block md:hidden text-2xl" onclick="toggleMenu()">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Navigasi kanan -->
            <div id="nav-kanan"
                class="hidden md:flex flex-col md:flex-row md:items-center gap-4 md:gap-8 absolute md:static top-full left-0 w-full md:w-auto bg-white md:bg-transparent shadow-md md:shadow-none">
                <ul
                    class="navigasi flex flex-col md:flex-row md:items-center w-full md:w-auto text-center md:text-left">
                    <li><a href="/" class="block py-2 px-4 ">Home</a></li>
                    <li><a href="/vip" class="block py-2 px-4 ">VIP</a></li>

                    <!-- Dropdown ORDER -->
                    <li class="relative">
                        <div class="flex items-center justify-center md:justify-start gap-1 py-2 px-4">
                            <a href="/order">Order</a>
                            <button onclick="toggleDropdown('dropdownorder')">
                                <i class="fa fa-caret-down"></i>
                            </button>
                        </div>
                        <div id="dropdownorder"
                            class="absolute hidden bg-white mt-2 rounded-md shadow-lg w-64 left-1/2 md:left-0 -translate-x-1/2 md:translate-x-0 z-50">
                            <a href="/order" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Dreamy
                                Choco Series</a>
                            <a href="/order/Kenangan-Beans"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Kenangan
                                Beans</a>
                            <a href="/order/petualangan-rasa-onepiece-tahilalats"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Petualangan
                                Rasa - One Piece x Tahilalats</a>
                            <a href="/order/kiss-food-selection"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">KISS and
                                Food Selection</a>
                            <a href="/order/pasal-pasanganideal"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Pasangan
                                Ideal</a>
                            <a href="/order/pesta-cashback"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Pesta
                                Cashback</a>
                            <a href="/order/outlets"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Outlets</a>
                            <a href="/order/big-order"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Big
                                Order</a>
                        </div>
                    </li>

                    <!-- Dropdown ABOUT -->
                    <li class="relative">
                        <div class="flex items-center justify-center md:justify-start gap-1 py-2 px-4">
                            <a href="/about">About</a>
                            <button onclick="toggleDropdown('dropdownabout')">
                                <i class="fa fa-caret-down"></i>
                            </button>
                        </div>
                        <div id="dropdownabout"
                            class="absolute hidden bg-white mt-2 rounded-md shadow-lg w-64 left-1/2 md:left-0 -translate-x-1/2 md:translate-x-0 z-50">
                            <a href="/about/news"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">News</a>
                            <a href="/about/kenangan-academy"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Kenangan
                                Academy</a>
                        </div>
                    </li>

                    <li><a href="/career" class="block py-2 px-4 ">Career</a></li>
                    <li><a href="/download" class="block py-2 px-4 ">Download App</a></li>
                </ul>

                <!-- Logo kanan -->
                <a href="#" class="logok hidden md:block">
                    <img src="{{ asset('images/logo2.jpeg') }}" alt="Logo kanan" class="w-20">
                </a>
            </div>
        </nav>
    </header>

    <main class="mt-24">
        @yield('content')
    </main>

    <!-- Footer (tanpa perubahan besar) -->
    <footer class="bg-black text-white">
        <section class="flex flex-col md:flex-row mx-4 md:mx-64 lg:flex-row items-center">
            <div class="pt-16 md:w-1/2 lg:w-1/2">
                <div class="flex">
                    <img src="{{ asset('images/brand2.png') }}" alt="Logo brand" class="w-16 h-16 object-contain">
                    <img src="{{ asset('images/halal-indo2.png') }}" alt="Logo halal" class="w-16 h-16 object-contain">
                </div>
                <p class="text-sm p-5">Hak Cipta ©2020 <span class="font-bold">PT Bumi Berkah Boga</span></p>
            </div>

            <div class="pt-12 md:w-1/2 lg:w-1/2">
                <h2 class="underline underline-offset-1 font-semibold">OUR LOCATION</h2>
                <p class="text-sm pt-4 text-justify">
                    Kenangan Office. Plaza Blok M, lantai 7. Jl.
                    Bulungan No.76, RT.6/RW.6, Kramat Pela, Kec. Kby.
                    Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota
                    Jakarta 12130
                </p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1459184480714!2d106.79502957499058!3d-6.244493193743871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f17ad18e02e7%3A0x2be46f03173d1be!2sKopi%20Kenangan%20x%20Chigo%20Blok%20M%20Plaza!5e0!3m2!1sid!2sid!4v1758304998190!5m2!1sid!2sid"
                    width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="filter grayscale pt-4"></iframe>
            </div>
        </section>

        <section class="pt-8 text-center">
            <div class="flex flex-col md:flex-row justify-center gap-3 text-base font-bold">
                <p>Curhat Yuk 081-7075-6865</p>
                <p class="flex justify-center items-center gap-1"><img src="{{ asset('images/logo-wa.jpg') }}"
                        alt="Logo Wa" class="w-6 h-6 object-contain">Whatsapp Chat Only</p>
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

    <!-- JavaScript -->
    <script>
        function toggleMenu() {
            const nav = document.getElementById("nav-kanan");
            nav.classList.toggle("hidden");
        }

        function toggleDropdown(id) {
            const dropdown = document.getElementById(id);
            dropdown.classList.toggle("hidden");
        }

        window.addEventListener("click", function(e) {
            document.querySelectorAll("[id^='dropdown']").forEach(dropdown => {
                const button = dropdown.previousElementSibling.querySelector("button");
                if (!button.contains(e.target) && !dropdown.contains(e.target)) {
                    dropdown.classList.add("hidden");
                }
            });
        });
    </script>
</body>

</html>
