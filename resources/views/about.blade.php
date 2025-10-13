@extends('layouts.app')

@section('title', 'About')

@section('content')
    <section class="relative">
        <img src="{{ asset('images/DSC03241.webp') }}" alt="Dreamy" class="w-full h-auto">
        <div class="absolute inset-0 bg-gray-200/50">
            <div class="mt-24 ml-4 lg:mt-[600px] lg:ml-[150px]">
                <p class="text-sm lg:text-base font-bold">Mission</p>
                <p class="text-base lg:text-xl pt-4">
                    Our mission is to spread our passion for high quality <br>
                    coffee from Indonesia to the rest of Asia.</p>
            </div>
        </div>
    </section>

    <section class="flex flex-col p-8 lg:flex-row justify-center gap-6 lg:p-24">
        <div class="items-center lg:w-1/2 lg:ml-40">
            <img src="{{ asset('images/KOPI_KENANGAN_63326Green.webp') }}" alt="k"
                class="w-full h-auto object-cover">
        </div>
        <div class="lg:w-1/2 lg:mr-40 place-content-center pl-4">
            <h1 class="text-xl font-bold pb-6">FIRST SOUTHEAST ASIAN F&B NEW RETAIL UNICORN</h1>
            <p>
                Kopi Kenangan is one of the fastest growing grab-and-go coffee chain in Indonesia. The idea of Kopi Kenangan
                started because the founders have the mission to spread their passion for Indonesian coffee as a local brand
                from Indonesia to the rest of the world.
            </p>
        </div>
    </section>

    <section class="p-8 lg:p-24 mb-4 lg:mb-24">
        <div class="text-2xl pb-8 lg:text-3xl text-center font-bold lg:pb-24">
            <h1>We started operation in 2017, and todaY:</h1>
        </div>
        {{-- conten pertama --}}
        <div class="flex flex-col gap-4 px-8 lg:flex-row justify-center w-full lg:gap-10 lg:px-40 lg:h-80">
            {{-- conten kiri --}}
            <div class="lg:w-1/2">
                <div class="flex flex-col lg:flex-row justify-center gap-8 mb-8">
                    {{-- conten kiri 1 --}}
                    <div class="lg:w-1/2 place-content-center text-center">
                        <h1 class="text-base lg:text-xl font-bold">Our Team</h1>
                        <p class="text-base lg:text-xl">
                            International experience
                            and exposure
                        </p>
                    </div>
                    <div class="lg:w-1/2">
                        <img src="{{ asset('images/KNG01823.webp') }}" alt="2" class="w-full h-40 object-cover">
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row justify-center gap-4">
                    {{-- conten kiri 2 --}}
                    <div class="lg:w-1/2">
                        <img src="{{ asset('images/KK-menu-group-shot_.webp') }}" alt="2"
                            class="w-full h-40 object-cover">
                    </div>
                    <div class="lg:w-1/2 place-content-center text-center">
                        <h1 class="text-base lg:text-xl font-bold">Coffee Sold</h1>
                        <p class="text-base lg:text-xl">
                            30 million cups in year 2020
                        </p>
                    </div>
                </div>
            </div>

            {{-- conten kanan --}}
            <div class="lg:w-1/2">
                <img src="{{ asset('images/DSC00036-(1).webp') }}" alt="conten kanan"
                    class="lg:h-full h-80 w-full object-cover">
            </div>
        </div>

        {{-- content 2 --}}
        <div class="flex flex-col px-8 lg:flex-row justify-center w-full gap-10 mt-16 lg:px-40 h-80">
            <div class="lg:w-1/2 place-content-center">
                <img src="{{ asset('images/DSC09436-DONE.webp') }}" alt="2"
                    class="w-full lg:h-full h-80 object-cover">
                <h1 class="text-base lg:text-xl text-center font-bold pt-6">Employees</h1>
                <p class="text-base lg:text-xl text-center pt-2">More than 5000</p>
            </div>

            <div class="lg:w-1/2 place-content-center">
                <img src="{{ asset('images/17.32.00.webp') }}" alt="2" class="w-full lg:h-full h-80 object-cover">
                <h1 class="text-base lg:text-xl text-center font-bold pt-6">Our Footprints</h1>
                <p class="text-base lg:text-xl text-center pt-2">More than 800 stores across 45 cities in Indonesia</p>
            </div>
        </div>
    </section>

    <section class="mb-16">
        <div class="text-2xl lg:text-3xl text-center font-bold pt-10 pb-16">
            <h1>Our Leadership</h1>
        </div>
        <div class="flex-row lg:grid lg:grid-cols-5 gap-2 px-8 lg:px-40 text-center">
            <div class="p-4">
                <h1 class="text-base font-bold">Edward Tirtanata</h1>
                <p class="text-sm">Co-Founder & Group CEO</p>
            </div>
            <div class="p-4">
                <h1 class="text-base font-bold">James Prananto</h1>
                <p class="text-sm">Co-Founder</p>
            </div>
            <div class="p-4">
                <h1 class="text-base font-bold">Cynthia Chaerunissa</h1>
                <p class="text-sm">Director</p>
            </div>
            <div class="p-4">
                <h1 class="text-base font-bold">Zeng Fengping</h1>
                <p class="text-sm">Chief Technology Officer</p>
            </div>
            <div class="p-4">
                <h1 class="text-base font-bold">Gemini Aryanto</h1>
                <p class="text-sm">Group Chief People & Culture Officer</p>
            </div>
        </div>
    </section>

    <section class="mb-16">
        <div class="text-2xl lg:text-3xl text-center font-bold pt-10 pb-16">
            <h1>Kopi kenangan OFFICES</h1>
        </div>
        {{-- content 1 --}}
        <div class="flex flex-col px-8 lg:flex-row justify-center gap-16 lg:px-80 mb-24">
            <div class="lg:w-1/2 h-80 space-y-2">
                <img src="{{ asset('images/DSC03206-HDR.webp') }}" alt="1" class="w-full h-3/4 object-cover">
                <h1 class="text-xl font-semibold">KENANGAN OFFICE INDONESIA</h1>
                <p class="text-sm">Plaza Blok M, lantai 7</p>
                <p class="text-base">Jl. Bulungan No.76, RT.6/RW.6, Kramat Pela, Kec. Kby. Baru, Kota Jakarta Selatan,
                    Daerah Khusus Ibukota
                    Jakarta 12130</p>
            </div>
            <div class="lg:w-1/2 h-80 space-y-2">
                <img src="{{ asset('images/KNG01307.webp') }}" alt="1" class="w-full h-3/4 object-cover">
                <h1 class="text-xl font-semibold">KENANGAN ACADEMY</h1>
                <p class="text-base">Jl. Sultan Iskandar Muda No.61, RT.3/RW.2, Kby. Lama Utara, Kec. Kby. Lama, Kota
                    Jakarta Selatan, Daerah
                    Khusus Ibukota Jakarta 12240</p>
            </div>
        </div>
        {{-- content 2 --}}
        <div class="flex flex-col px-8 lg:flex-row justify-center gap-16 lg:px-80 mb-40">
            <div class="lg:w-1/2 h-80 space-y-2">
                <img src="{{ asset('images/461_Aperia.webp') }}" alt="1" class="w-full h-3/4 object-cover">
                <h1 class="text-xl font-semibold">KENANGAN OFFICE SINGAPORE</h1>
                <p class="text-base">10 Kallang Avenue, Aperia Tower 2, #05-13, Singapore 339510</p>
            </div>
            <div class="lg:w-1/2 h-80 space-y-2">
                <img src="{{ asset('images/Menaraa.webp') }}" alt="1" class="w-full h-3/4 object-cover">
                <h1 class="text-xl font-semibold">MALAYSIA OFFICE</h1>
                <p class="text-sm">Kopi Kenangan Sdn Bhd</p>
                <p class="text-base">Unit 1302, Level 13, Uptown 2, No. 2, Jalan SS21/37, Damansara Uptown, 47400, Petaling
                    Jaya, Selangor Darul Ehsan</p>
            </div>
        </div>
    </section>

@endsection
