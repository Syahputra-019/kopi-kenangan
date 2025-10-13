@extends('layouts.app')

@section('title', 'big-order')

@section('content')
    <section>
        <div class="relative w-full overflow-visible bg-white">
            <!-- Slider Container -->
            <div id="carousel-container" class="relative w-full overflow-hidden">
                <div id="slider" class="carousel-track flex items-center transition-transform duration-500 ease-in-out">
                    <!-- Duplikat gambar (untuk infinite loop) -->
                    <img src="{{ asset('images/Custom-Merch-KK-Web.webp') }}" class="carousel-img" alt="Gambar 5 (clone prev)">
                    <img src="{{ asset('images/Custom-Merch-KK-Web.webp') }}" class="carousel-img" alt="Gambar 1">
                    <img src="{{ asset('images/Landing-Page-03.webp') }}" class="carousel-img" alt="Gambar 2">
                    <img src="{{ asset('images/Landing-Page-04.webp') }}" class="carousel-img" alt="Gambar 3">
                    <img src="{{ asset('images/Landing2Page-02.webp') }}" class="carousel-img" alt="Gambar 4">
                    <img src="{{ asset('images/Landing-Page-01.webp') }}" class="carousel-img" alt="Gambar 5">
                    <img src="{{ asset('images/Custom-Merch-KK-Web.webp') }}" class="carousel-img"
                        alt="Gambar 1 (clone next)">
                </div>

                <!-- Tombol Navigasi -->
                <button id="prev"
                    class="absolute top-1/2 left-4 -translate-y-1/2 bg-white bg-opacity-80 hover:bg-opacity-100 text-gray-800 text-2xl font-bold w-10 h-10 rounded-full shadow-md flex items-center justify-center cursor-pointer z-10 transition-all duration-300">
                    ←
                </button>
                <button id="next"
                    class="absolute top-1/2 right-4 -translate-y-1/2 bg-white bg-opacity-80 hover:bg-opacity-100 text-gray-800 text-2xl font-bold w-10 h-10 rounded-full shadow-md flex items-center justify-center cursor-pointer z-10 transition-all duration-300">
                    →
                </button>
            </div>
        </div>
    </section>

    <section class="flex flex-col lg:flex-row justify-center gap-4 lg:gap-8 p-4 lg:p-10 m-2 lg:m-6">
        <div class="lg:w-1/2 lg:ml-40 p-6">
            <h3 class="text-base font-semibold pb-4 ">Big Order Benefit</h3>
            <h1 class="text-2xl lg:text-3xl font-extrabold pb-12">
                Get Special Price! <br>
                Discount Up to 20% <br>
                FREE Delivery - FREE Barista - FREE Booth*
            </h1>
            <h2 class="text-xl">for Paket Kenangan Bersama & Paket E-Voucher</h2>
            <div class="pt-8">
                <form action="" method="get">
                    <button type="submit" class="text-sm text-center text-white bg-black rounded-full w-full h-10">
                        Download Packages
                    </button>
                </form>
            </div>
            <div class="pt-8">
                <form action="" method="get">
                    <button type="submit" class="text-sm text-center bg-green-400 rounded-full w-full h-10">
                        Contact via WhatsApp
                    </button>
                </form>
            </div>
            <p class="text-sm pt-8">*Terms and Conditions applies</p>
        </div>
        <div class="w-full h-80 lg:w-1/2 lg:mr-40 p-4 relative lg:h-auto overflow-hidden object-cover">
            <img src="{{ asset('images/Landing-Page-03.webp') }}"
                class="slide absolute inset-0 w-full h-full object-cover opacity-100 transition-opacity duration-700"
                alt="1">
            <img src="{{ asset('images/Landing-Page-04.webp') }}"
                class="slide absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-700"
                alt="1">
            <img src="{{ asset('images/Landing2Page-02.webp') }}"
                class="slide absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-700"
                alt="1">
        </div>
    </section>

    <section class="m-2 p-6 lg:m-6 lg:p-10">
        <div>
            <h1 class="text-2xl lg:text-4xl text-center font-extrabold p-8">KOPI KENANGAN BIG ORDER</h1>
            <p class="text- base px-2 lg:text-xl text-center lg:pr-48 lg:pl-48">
                For your special occasions, we have Kopi Kenangan BIG ORDER. From office gathering, meetings, birthday’s,
                weddings or any special events, you will get the best services & high quality products, with affordable
                price and great benefits, special price, discounts and our certified barista to make your numerous freshly
                made Kopi Kenangan drinks.
            </p>
        </div>

        <div class="mx-10 pt-8 lg:mr-40 lg:ml-40 lg:pt-24">
            <img src="{{ asset('images/ICON-updated.webp') }}" alt="icn" class="w-full h-auto">
        </div>
    </section>

    <section class="m-2 p-0 lg:m-6 lg:p-10">
        <div class="text-2xl pb-4 lg:text-3xl text-center font-bold lg:pb-10">
            <h1>What our clients say about us</h1>
        </div>

        <div>
            <section class="relative w-full flex items-center justify-center overflow-hidden py-4 lg:py-16">
                <div class="w-full max-w-6xl relative overflow-hidden">
                    <!-- Container Carousel -->
                    <div id="carousel" class="flex transition-transform duration-700 ease-in-out">

                        <!-- SLIDE 1 -->
                        <div class="min-w-full flex flex-col md:flex-row items-center gap-10 p-8">
                            <img src="{{ asset('images/f1d99708-09a0-4be6-a4e8-53ecc54b908d.webp') }}"
                                alt="Kopi Kenangan Booth" class="w-full h-[500px] md:w-1/2 shadow-lg object-cover">
                            <div class="md:w-1/2 text-center md:text-left place-items-center">
                                <img src="{{ asset('images/hyundai.jpg') }}" alt="Hyundai Logo"
                                    class="w-32 mx-auto md:mx-0 mb-4 ">
                                <p class="text-lg text-center p-8 leading-relaxed text-gray-700">
                                    All the products we ordered for our events specifically Iced Kopi Kenangan Mantan & Iced
                                    Thai tea were all very delicious and highly maintained quality while providing products
                                    in a massive amount. Thank you also for a great service!
                                </p>
                            </div>
                        </div>

                        <!-- SLIDE 2 -->
                        <div class="min-w-full flex flex-col md:flex-row items-center gap-10 p-8">
                            <img src="{{ asset('images/3dad3f20-2fdc-4e5e-8bda-8652db3cfbae.webp') }}"
                                alt="Kopi Kenangan Event" class="w-full h-[500px] md:w-1/2 shadow-lg object-cover">
                            <div class="md:w-1/2 text-center md:text-left place-items-center">
                                <img src="{{ asset('images/bca.jpg') }}" alt="bca" class="w-32 mx-auto md:mx-0 mb-4 ">
                                <p class="text-lg text-center p-8 leading-relaxed text-gray-700">
                                    These Kopi Kenangan Mantan E-Vouchers provided by Kopi Kenangan is a nice and pretty
                                    customizable
                                    vouchers that answer many things for our needs especially for our activation reward
                                    program on our
                                    previous event "BCA Virtual Expo". It serves as a great rewards for our clients
                                    throughout the virtual
                                    expo events.
                                </p>
                            </div>
                        </div>

                        <!-- SLIDE 3 -->
                        <div class="min-w-full flex flex-col md:flex-row items-center gap-10 p-8">
                            <img src="{{ asset('images/ad816bca-6c90-4418-8762-9cfec36346b3.webp') }}"
                                alt="Kopi Kenangan Booth" class="w-full h-[500px] md:w-1/2 shadow-lg object-cover">
                            <div class="md:w-1/2 text-center md:text-left place-items-center">
                                <img src="{{ asset('images/pertamina.jpg') }}" alt="prtamina"
                                    class="w-32 mx-auto md:mx-0 mb-4 ">
                                <p class="text-lg text-center p-8 leading-relaxed text-gray-700">
                                    Thank you for collaborating with My Pertamina in our apps reward loyalty point program
                                    in these past years. We always believe Kopi Kenangan to provide the best customizable
                                    E-Voucher denomination value according to our needs of the E-Vouchers with the best
                                    price
                                    and also thank you for your fast and helpful response during the progress of
                                    implementing
                                    the e-vouchers. We love it because it all good and maintained.
                                </p>
                            </div>
                        </div>

                        <!-- SLIDE 4 -->
                        <div class="min-w-full flex flex-col md:flex-row items-center gap-10 p-8">
                            <img src="{{ asset('images/3bd9a26a-f135-46c3-86df-8abbf9e68907.webp') }}"
                                alt="Kopi Kenangan Gojek" class="w-full h-[500px] md:w-1/2 shadow-lg object-cover">
                            <div class="md:w-1/2 text-center md:text-left place-items-center">
                                <img src="{{ asset('images/ms.jpg') }}" alt="ms"
                                    class="w-32 mx-auto md:mx-0 mb-4 ">
                                <p class="text-lg text-center p-8 leading-relaxed text-gray-700">
                                    Thank you for your support on providing us E-Vouchers for our client reward activation
                                    program.
                                    It sure helps and impacted us a lot on the increasing sales and goals of our products.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </section>

    <section class="m-2 p-0 lg:m-6 lg:p-10">
        <div>
            <h1 class="text-2xl lg:text-3xl text-center font-bold pb-4 lg:pb-16">
                Clien
            </h1>
        </div>
        <div class="mx-8 lg:mr-48 lg:ml-48 place-content-center">
            <img src="{{ asset('images/client.PNG') }}" alt="client" class="w-full h-auto">
        </div>
    </section>

    <section class="p-2 mb-16">
        <div class="text-2xl lg:text-3xl text-center font-bold pt-4 pb-10">
            <h1>Order now to get a great deal!</h1>
        </div>
        <div class="text-base text-center pb-8">
            <h3 class=" font-bold">Fill in our forms :</h3>
            <a href="tinyurl.com/kkbulkorder" class="underline pt-2">tinyurl.com/kkbulkorder</a>
        </div>
        <div class="text-base text-center pb-8">
            <h3 class=" font-bold">Our email :</h3>
            <a href="tinyurl.com/kkbulkorder" class=" pt-2">events@kopikenangan.com</a>
        </div>

        <div class="flex flex-col lg:flex-row justify-center items-center gap-8">
            <div>
                <form action="" method="get">
                    <button class="text-sm text-center text-white bg-black w-64 h-10 rounded-full">Download
                        Packages</button>
                </form>
            </div>
            <div>
                <form action="" method="get">
                    <button class="text-sm text-center bg-green-400 w-64 h-10 rounded-full">Contact via WhatsApp</button>
                </form>
            </div>
        </div>
    </section>

    <style>
        /* Gambar Carousel */
        .carousel-img {
            width: 70vw;
            height: auto;
            object-fit: cover;
            flex-shrink: 0;
            margin: 0;
            border-radius: 0rem;
            opacity: 1;
            transition: all 0.4s ease;
        }

        /* Gambar aktif (tengah) lebih besar dan terang */
        .carousel-img.active {
            transform: none;
            opacity: 1;
        }

        /* Transisi instant (saat reset posisi duplikat) */
        .carousel-track.no-transition {
            transition: none !important;
        }

        /* Hover tombol */
        #prev:hover,
        #next:hover {
            transform: scale(1.15);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }
    </style>

    <script>
        const slider = document.getElementById('slider');
        const prevBtn = document.getElementById('prev');
        const nextBtn = document.getElementById('next');
        const images = document.querySelectorAll('.carousel-img');

        let currentIndex = 1;
        const totalImages = 5;

        function getImageWidth() {
            // ambil ukuran gambar sebenarnya
            const rect = images[0].getBoundingClientRect();
            return rect.width;
        }

        function updateSlider(transition = true) {
            const imageWidth = getImageWidth();
            const offset = (window.innerWidth - imageWidth) / 2; // biar center
            if (!transition) slider.classList.add('no-transition');
            else slider.classList.remove('no-transition');

            // perhitungan posisi yang benar (biar pas di tengah)
            const translateX = -((currentIndex * imageWidth) - offset);
            slider.style.transform = `translateX(${translateX}px)`;

            images.forEach((img, i) => img.classList.toggle('active', i === currentIndex));

            // pastikan transisi diaktifkan lagi setelah reset
            setTimeout(() => slider.classList.remove('no-transition'), 50);
        }

        function nextSlide() {
            currentIndex++;
            updateSlider(true);
            if (currentIndex >= totalImages + 1) {
                setTimeout(() => {
                    currentIndex = 1;
                    updateSlider(false);
                }, 500);
            }
        }

        function prevSlide() {
            currentIndex--;
            updateSlider(true);
            if (currentIndex <= 0) {
                setTimeout(() => {
                    currentIndex = totalImages;
                    updateSlider(false);
                }, 500);
            }
        }

        nextBtn.addEventListener('click', nextSlide);
        prevBtn.addEventListener('click', prevSlide);
        window.addEventListener('resize', () => updateSlider(false));

        // Jalankan pertama kali
        updateSlider(false);
    </script>

    <script>
        // Ambil semua elemen gambar
        const slides = document.querySelectorAll('.slide');
        let currentSlide = 0;

        // Fungsi ganti slide
        function nextSlide() {
            slides[currentSlide].classList.remove('opacity-100');
            slides[currentSlide].classList.add('opacity-0');

            currentSlide = (currentSlide + 1) % slides.length;

            slides[currentSlide].classList.remove('opacity-0');
            slides[currentSlide].classList.add('opacity-100');
        }

        // Jalankan otomatis setiap 5 detik
        setInterval(nextSlide, 3000);
    </script>


    <script>
        // CAROUSEL TESTIMONI (klien)
        const testimonialCarousel = document.getElementById('carousel');
        const testimonialSlides = testimonialCarousel.children;
        let testimonialIndex = 0;

        function updateTestimonialCarousel() {
            testimonialCarousel.style.transform = `translateX(-${testimonialIndex * 100}%)`;
        }

        setInterval(() => {
            testimonialIndex = (testimonialIndex + 1) % testimonialSlides.length;
            updateTestimonialCarousel();
        }, 3000);
    </script>
@endsection
