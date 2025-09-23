@extends('layouts.app')

@section('title', 'About')

@section('content')
    <section>
        {{-- baris 1 --}}
        <div class="flex justify-center gap-4 p-14">
            <a href="" class="w-1/3 h-[450px]">
                <div class="w-full h-full flex flex-col">
                    <img src="{{ asset('images/about-1.webp') }}" alt="About 1" class="w-full h-2/3 object-cover">
                    <div class="p-2">
                        <h3 class="text-sm text-gray-600">12/11/24</h3>
                        <h1 class="font-bold text-lg">
                            Dari Kedai ke Rumah: Kopi Kenangan Luncurkan Kenangan Beans untuk Hadirkan Seduhan Ala Mantan di
                            Rumah
                        </h1>
                    </div>
                </div>
            </a>

            <a href="" class="w-1/3 h-[450px]">
                <div class="w-full h-full flex flex-col">
                    <img src="{{ asset('images/about-2.webp') }}" alt="About 2" class="w-full h-2/3 object-cover">
                    <div class="p-2">
                        <h3 class="text-sm text-gray-600">10/28/24</h3>
                        <h1 class="font-bold text-lg">
                            Berawal dari sebesar Biji Kopi, Kenali Tanda Awal Kanker Payudara bersama Kopi Kenangan dan
                            Lovepink
                        </h1>
                    </div>
                </div>
            </a>

            <a href="" class="w-1/3 h-[450px]">
                <div class="w-full h-full flex flex-col">
                    <img src="{{ asset('images/about-3.webp') }}" alt="About 3" class="w-full h-2/3 object-cover">
                    <div class="p-2">
                        <h3 class="text-sm text-gray-600">10/18/24</h3>
                        <h1 class="font-bold text-lg">
                            Teman Mantan Kenangan Brands Tinggalkan Kenangan Baik di Surabaya
                        </h1>
                    </div>
                </div>
            </a>
        </div>
    </section>

@endsection
