@extends('layouts.app')

@section('title', 'kenangan-academy')

@section('content')
    <section>
        <div class="relative w-full overflow-visible bg-white">
            <div id="carousel" class="relative w-full overflow-hidden">
                <div id="slider" class="carousel-track flex items-center transition-transform duration-500 ease-in-out">
                    <img src="{{ asset('images/Website-KA-Header-Carousel-1.webp') }}" class="carousel-img" alt="Gambar 1">
                    <img src="{{ asset('images/Website-KA-Header-Carousel-2.webp') }}" class="carousel-img" alt="Gambar 2">
                </div>
            </div>
        </div>
    </section>

    <section class="mt-8 lg:m-16 lg:p-16 px-8 flex flex-col lg:flex-row justify-center gap-10 lg:px-80">
        <div class="lg:w-1/2">
            <img src="{{ asset('images/Kenangan-Academy1.webp') }}" alt="academy" class="w-full h-64 object-cover">
        </div>
        <div class="lg:w-1/2 place-content-center">
            <h1 class="text-xl text-center font-bold p-8">Our Vision</h1>
            <p class="text-base text-center">
                Menjadi pusat pengembangan profesional di bidang food & beverage terbaik di Indonesia.
            </p>
        </div>
    </section>

    <section class="p-8 lg:m-16 lg:p-16 lg:px-80">
        <div class="mb-0 place-items-center">
            <img src="{{ asset('images/Map.webp') }}" alt="peta" class="w-full object-cover">
        </div>
        <div class="flex gap-8 lg:gap-32 lg:ml-24">
            <div>
                <h1 class="text-xl font-bold pb-4">Jakarta</h1>
                <h3 class="text-sm font-semibold pb-4">Store Coverage</h3>
                <p>Jakarta</p>
                <p>Sumatera</p>
                <p>Kalimantan Barat</p>
                <p>Jawa Barat</p>
            </div>

            <div>
                <h1 class="text-xl font-bold pb-4">Surabaya</h1>
                <h3 class="text-sm font-semibold pb-4">Store Coverage</h3>
                <p>Jawa Tengah</p>
                <p>Jawa Timur</p>
                <p>Bali</p>
                <p>Kalimantan Selatan</p>
                <p>Kalimantan Timur</p>
            </div>
        </div>
    </section>

    <section>
        <div class="relative w-full">
            <!-- Gambar background -->
            <img src="{{ asset('images/BG-2.webp') }}" alt="bg" class="w-full h-auto">

            <!-- Tulisan di tengah -->
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white bg-black/30">
                <p class="text-sm lg:text-base p-2 max-w-2xl">
                    Seluruh program pembelajaran di desain untuk mempersiapkan peserta dalam pekerjaannya sehari-hari,
                    yang berfokus pada kompetensi
                </p>
                <h1 class="text-xl lg:text-2xl font-semibold p-2">
                    Hard Skill, Soft Skill, & Career Development
                </h1>
            </div>
        </div>
    </section>

    <section class="p-8 lg:m-16 lg:p-16 lg:px-80">
        <div class="p-4 text-xl lg:p-10 lg:text-2xl font-bold text-center">
            <h1>Learning method</h1>
        </div>
        <div class="place-items-center p-4">
            <img src="{{ asset('images/Pie-Chart.webp') }}" alt="chart" class="w-72 h-72 object-cover">
        </div>

        <div class="flex-col lg:grid lg:grid-cols-3 gap-4 text-center mt-8">
            <div class="p-4">
                <h1 class="text-4xl font-bold pb-8">70%</h1>
                <h3 class="text-base font-semibold">On the Job Experience</h3>
                <p class="p-6">
                    Project & Job Assignment, On the Job Training, dan Role Play.
                </p>
            </div>
            <div class="p-4">
                <h1 class="text-4xl font-bold pb-8">20%</h1>
                <h3 class="text-base font-semibold">Informal Learning</h3>
                <p class="p-6">
                    Mentoring & Coaching.
                </p>
            </div>
            <div class="p-4">
                <h1 class="text-4xl font-bold pb-8">10%</h1>
                <h3 class="text-base font-semibold">formal Learning</h3>
                <p class="p-6">
                    In Class Training, Self Reading, Seminars,
                    dan Sertifikasi.
                </p>
            </div>
        </div>
    </section>

    <section class="p-8 items-center lg:m-16 lg:p-16 lg:px-72">
        <div class="text-xl lg:text-2xl font-bold text-center p-10">
            <h1>meet our trainers</h1>
        </div>
        <div class="flex flex-col lg:flex-row justify-center gap-10 place-content-center">
            <div class="relative lg:w-1/2 overflow-visible bg-white">
                <div id="carousel1" class="relative w-full overflow-hidden">
                    <div id="slider1"
                        class="carousel-track flex items-center transition-transform duration-500 ease-in-out">
                        <img src="{{ asset('images/Foto-Trainers-KA-2.webp') }}" class="carousel-img1 rounded-full"
                            alt="Gambar 1">
                        <img src="{{ asset('images/Foto-Trainers-KA-3.webp') }}" class="carousel-img1" alt="Gambar 2">
                        <img src="{{ asset('images/Foto-Trainers-KA-4.webp') }}" class="carousel-img1" alt="Gambar 2">
                        <img src="{{ asset('images/Foto-Trainers-KA-5.webp') }}" class="carousel-img1" alt="Gambar 2">
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2 place-content-center">
                <ul class="list-decimal text-base">
                    <li>Trainer dengan sertifikasi BNSP</li>
                    <li>Pelatih Profesional Bersertifikat dari Coaching Indonesia</li>
                    <li>Barista Bersertifikat dari Indonesia Coffee Academy</li>
                    <li>Barista Bersertifikat dari ABCD School of Coffee</li>
                    <li>Advanced Sensory Skills oleh First crack Coffee</li>
                    <li>Trainer Sertifikasi Halal dari Majelis Ulama Indonesia</li>
                    <li>Pelatihan Keamanan Pangan (ISO 22002-2: 2013)</li>
                    <li>Pelatih dengan sertifikasi professional SDM dari Universitas Atma Jaya</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="p-8 lg:h-96 lg:m-16 lg:p-16 lg:px-72  items-center flex flex-col lg:flex-row justify-center gap-10">
        <div class="lg:w-1/2 place-content-center">
            <h1 class="text-xl text-center font-bold pb-16">Learning & Development</h1>
            <p class="text-sm font-semibold text-center">more than >5.000 barista certified by Kenangan Academy</p>
        </div>
        <div class="lg:w-1/2">
            <div class="h-1/3 w-48 mb-4 bg-gray-200"></div>
            <div class="h-1/3 w-64 mb-4 bg-red-600 text-center text-white place-content-center">
                <p>>5.000 BARISTA CERTIFIED</p>
            </div>
            <div class="h-1/3 w-32 mb-4 bg-gray-200"></div>
        </div>
    </section>

    <section class="flex flex-col px-8 lg:flex-row justify-center gap-10 lg:px-80 mb-24">
        <!-- Kolom Kiri -->
        <div class="relative lg:w-1/2 overflow-hidden rounded-full">
            <div id="carousel-left" class="flex transition-transform duration-700 ease-in-out">
                <img src="{{ asset('images/Success-Story-2.webp') }}" alt="1" class="w-full flex-shrink-0">
                <img src="{{ asset('images/Success-Story-3.webp') }}" alt="2" class="w-full flex-shrink-0">
                <img src="{{ asset('images/Success-Story-4.webp') }}" alt="3" class="w-full flex-shrink-0">
                <img src="{{ asset('images/Orang-web.webp') }}" alt="4" class="w-full flex-shrink-0">
            </div>
        </div>

        <!-- Kolom Kanan -->
        <div class="relative lg:w-1/2 overflow-hidden rounded-full">
            <div id="carousel-right" class="flex transition-transform duration-700 ease-in-out">
                <img src="{{ asset('images/Success-Story-2-text.webp') }}" alt="1" class="w-full flex-shrink-0">
                <img src="{{ asset('images/Success-Story-3-text.webp') }}" alt="2" class="w-full flex-shrink-0">
                <img src="{{ asset('images/Success-Story-4-text.webp') }}" alt="3" class="w-full flex-shrink-0">
                <img src="{{ asset('images/Quotes.webp') }}" alt="4" class="w-full flex-shrink-0">
            </div>
        </div>
    </section>

    <section class="m-0 p-0">
        <div class="relative w-full">
            <!-- Gambar background -->
            <img src="{{ asset('images/KA-17.webp') }}" alt="bg" class="w-full lg:h-[500px] object-cover">

            <!-- Tulisan di tengah -->
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white bg-black/30">
                <form action="" method="get">
                    <button type="submit"
                        class="z-40 text-xl text-black text-center font-extrabold w-56 h-10 lg:h-16 rounded-full bg-white">
                        Join Us!
                    </button>
                </form>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Ambil elemen track dari masing-masing carousel
            const leftCarousel = document.getElementById("carousel-left");
            const rightCarousel = document.getElementById("carousel-right");

            // Ambil jumlah slide dari masing-masing carousel
            const leftSlides = leftCarousel.querySelectorAll("img");
            const rightSlides = rightCarousel.querySelectorAll("img");

            // Index posisi aktif
            let leftIndex = 0;
            let rightIndex = 0;

            // Fungsi untuk geser slide kiri
            function slideLeft() {
                leftIndex = (leftIndex + 1) % leftSlides.length;
                leftCarousel.style.transform = `translateX(-${leftIndex * 100}%)`;
            }

            // Fungsi untuk geser slide kanan
            function slideRight() {
                rightIndex = (rightIndex + 1) % rightSlides.length;
                rightCarousel.style.transform = `translateX(-${rightIndex * 100}%)`;
            }

            // Jalankan otomatis setiap 3 detik
            setInterval(slideLeft, 3000);
            setInterval(slideRight, 3000);
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // 1️⃣ Ambil elemen penting
            const slider = document.getElementById('slider'); // Elemen track yang berisi semua gambar
            const slides = document.querySelectorAll('.carousel-img1'); // Semua gambar di carousel
            let index = 0; // Untuk menyimpan posisi slide yang sedang tampil

            // 2️⃣ Fungsi untuk mengubah posisi slider
            function showSlide(i) {
                // Geser slider secara horizontal sesuai urutan gambar
                // Misal index = 1 → geser ke kiri sejauh 100%
                slider.style.transform = `translateX(-${i * 100}%)`;
            }

            // 3️⃣ Fungsi untuk menjalankan slide otomatis
            function autoSlide() {
                index = (index + 1) % slides.length; // Kalau sudah di akhir, kembali ke awal
                showSlide(index); // Tampilkan gambar berdasarkan index baru
            }

            // 4️⃣ Jalankan otomatis setiap 3 detik
            let interval = setInterval(autoSlide, 3000);

            // (Opsional) 5️⃣ Jika ingin berhenti sementara saat kursor di atas carousel
            const carousel = document.getElementById('carousel');
            carousel.addEventListener('mouseenter', () => clearInterval(interval));
            carousel.addEventListener('mouseleave', () => interval = setInterval(autoSlide, 3000));

            // Penjelasan tambahan:
            // - setInterval(autoSlide, 3000): menjalankan fungsi autoSlide setiap 3000ms (3 detik)
            // - clearInterval(interval): menghentikan sementara pergeseran otomatis
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // 1️⃣ Ambil elemen penting
            const slider = document.getElementById('slider1'); // Elemen track yang berisi semua gambar
            const slides = document.querySelectorAll('.carousel-img1'); // Semua gambar di carousel
            let index = 0; // Untuk menyimpan posisi slide yang sedang tampil

            // 2️⃣ Fungsi untuk mengubah posisi slider
            function showSlide(i) {
                // Geser slider secara horizontal sesuai urutan gambar
                // Misal index = 1 → geser ke kiri sejauh 100%
                slider.style.transform = `translateX(-${i * 100}%)`;
            }

            // 3️⃣ Fungsi untuk menjalankan slide otomatis
            function autoSlide() {
                index = (index + 1) % slides.length; // Kalau sudah di akhir, kembali ke awal
                showSlide(index); // Tampilkan gambar berdasarkan index baru
            }

            // 4️⃣ Jalankan otomatis setiap 3 detik
            let interval = setInterval(autoSlide, 3000);

            // (Opsional) 5️⃣ Jika ingin berhenti sementara saat kursor di atas carousel
            const carousel = document.getElementById('carousel1');
            carousel.addEventListener('mouseenter', () => clearInterval(interval));
            carousel.addEventListener('mouseleave', () => interval = setInterval(autoSlide, 3000));

            // Penjelasan tambahan:
            // - setInterval(autoSlide, 3000): menjalankan fungsi autoSlide setiap 3000ms (3 detik)
            // - clearInterval(interval): menghentikan sementara pergeseran otomatis
        });
    </script>
@endsection
