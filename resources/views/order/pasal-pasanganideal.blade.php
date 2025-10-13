@extends('layouts.app')

@section('title', 'pasal-pasanganideal')

@section('content')
    <section class="relative">
        <img src="{{ asset('images/Landing-Page-PASAL.webp') }}" alt="Dreamy" class="w-full h-auto">
    </section>

    <section class="pt-16 lg:pt-24">
        <h3 class="text-xl font-semibold text-center p-16">BELI DI SINI</h3>
        <div class="flex flex-col lg:flex-row items-center lg:justify-center  gap-8 lg:gap-24 pt-4 pb-10">
            <form action="" method="get">
                <button type="submit"
                    class="text-xl lg:text-3xl text-center w-56 h-16 lg:w-[400px] lg:h-24 rounded-full text-white bg-black">
                    <span class="font-extrabold">OUTLET TERDEKAT</span>
                </button>
            </form>

            <form action="" method="get">
                <button type="submit"
                    class="text-xl lg:text-3xl text-center w-56 h-16 lg:w-[400px] lg:h-24 rounded-full text-white bg-black">
                    <span class="font-extrabold">Aplikasi <br> Kopi Kenangan</span>
                </button>
            </form>
        </div>
    </section>

    <section class="flex justify-center w-full">
        <img src="{{ asset('images/Cari-Pasal-Text.webp') }}" alt="cari"
            class="w-[800px] h-auto object-contain p-10 lg:p-20">
    </section>

    <section class="flex justify-center p-8 lg:p-16">
        <iframe width="1100" height="650"
            src="https://www.youtube.com/embed/I7I2vPklAOw?autoplay=1&mute=1&si=PaPLoYH5QK5CM6Pv"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="lg:p-8"></iframe>
    </section>

    <section class="my-10 lg:mt-16 lg:mb-16">
        <div class="flex flex-col lg:flex-row justify-center p-8 gap-20 lg:gap-64">
            <div class="place-items-center">
                <img src="{{ asset('images/Landing-Page-PASAL-1.webp') }}" alt="Pasal 1"
                    class="w-64 h-auto object-contain">
                <img src="{{ asset('images/pasal-1.PNG') }}" alt="P-1">
                <p>
                    1 Kopi Kenangan Mantan (R) <br>
                    1 Roti Martabak
                </p>
            </div>

            <div class="place-items-center">
                <img src="{{ asset('images/Landing-Page-PASAL-2.webp') }}" alt="pasal 2"
                    class="w-64 h-auto object-contain">
                <img src="{{ asset('images/pasal-2.PNG') }}" alt="P-2">
                <p>
                    1 Americano (R) <br>
                    1 Roti Coklat Klasik
                </p>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row justify-center p-8 gap-20 lg:gap-64">
            <div class="place-items-center">
                <img src="{{ asset('images/Landing-Page-PASAL-3.webp') }}" alt="Pasal 1"
                    class="w-64 h-auto object-contain">
                <img src="{{ asset('images/pasal-1.PNG') }}" alt="P-1">
                <p>
                    1 Kopi Dolce (R) <br>
                    1 Roti Susu Manis
                </p>
            </div>

            <div class="place-items-center">
                <img src="{{ asset('images/Landing-Page-PASAL-4.webp') }}" alt="pasal 2"
                    class="w-64 h-auto object-contain">
                <img src="{{ asset('images/pasal-2.PNG') }}" alt="P-2">
                <p>
                    1 Dutch Chocolate (R) <br>
                    1 Roti Coklat Klasik
                </p>
            </div>
        </div>
    </section>
@endsection
