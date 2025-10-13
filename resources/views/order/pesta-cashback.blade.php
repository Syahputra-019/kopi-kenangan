@extends('layouts.app')

@section('title', 'pesta-cashback')

@section('content')
    <section class="relative">
        <img src="{{ asset('images/Pesta-Cashback-Jan2025-Website.webp') }}" alt="Dreamy" class="w-full h-auto">
    </section>

    <section class="lg:pt-24">
        <h3 class="text-xl font-semibold text-center p-8 lg:p-16">DAPETIN CASHBACK-NYA DI SELURUH OUTLET KOPI KENANGAN!</h3>
        <div class="place-items-center gap-6 lg:gap-24 pt-4 lg:pb-10">
            <form action="" method="get">
                <button type="submit"
                    class="text-xl text-center w-72 h-20 lg:w-[500px] lg:h-24 rounded-full text-white bg-black">
                    <span class="font-extrabold">BELI DI OUTLET KOPI KENANGAN TERDEKAT</span>
                </button>
            </form>
            <div class="flex justify-between gap-56 lg:gap-[600px]">
                <img src="{{ asset('images/Coin-1.webp') }}" alt="coin" class="w-24 lg:w-40 h-auto object-contain">
                <img src="{{ asset('images/Coin-1.webp') }}" alt="coin" class="w-16 lg:w-24 h-auto object-contain">
            </div>
        </div>
    </section>

    <section class="mb-4 lg:mb-24">
        <div class="pb-4 lg:pb-24">
            <h3 class="text-xl text-center py-4 lg:pt-14 lg:pb-10">Syarat dan Ketentuan:</h3>
            <ul class="mx-12 lg:mr-56 lg:ml-56 list-decimal space-y-2">
                <li>
                    Promo berlaku 6, 13, 20, dan 25-31 Januari 2025
                </li>
                <li>
                    Promo Pesta Cashback tersedia di seluruh outlet Kopi Kenangan melalui pembelian langsung di outlet
                </li>
                <li>
                    Promo Pesta Cashback 30% berlaku Payday (tanggal 25-30/31) setiap bulannya untuk pembelian langsung di
                    seluruh outlet Kopi Kenangan dengan minimal pembelian Rp55.000 dan maksimum cashback 20.000 Kenangan
                    Points per transaksi (maksimal 1x transaksi/pengguna/hari)
                </li>
                <li>
                    Promo Pesta Cashback 20% berlaku setiap hari Senin setiap bulannya untuk pembelian langsung dengan
                    minimal pembelian Rp50.000 dan maksimum cashback 15.000 Kenangan Points per transaksi (maksimal 1x
                    transaksi/pengguna/hari)
                </li>
                <li>
                    Promo berlaku khusus menu non promo dan tidak bisa digabungkan dengan promo lain
                </li>
                <li>
                    Promo tidak berlaku untuk upgrade beans (JUWARA BEANS), topping, packaging, dan takeaway charge

                </li>
                <li>
                    Promo berlaku di seluruh outlet Kopi Kenangan
                </li>
                <li>
                    Promo berlaku untuk semua metode pembayaran yang tersedia di outlet
                </li>
                <li>
                    Setiap transaksi akan dikonversikan menjadi Cinta sebagai Kenangan Loyalty (1 Cinta untuk setiap Rp
                    5.000)
                </li>
                <li>
                    Ongkos kirim, total diskon, dan total yang dibayarkan dengan Kenangan Points (sebagian atau seluruhnya)
                    tidak diikutsertakan dalam perhitungan konversi Cinta
                </li>
                <li>
                    Kopi Kenangan berhak menahan dan/atau membatalkan promo dan/atau membatasi layanan, baik untuk semantara
                    maupun permanen, kepada pengguna sewaktu-waktu termasuk jika ditemukan tindakan penyalahgunaan
                    (abusive), kecurangan (fraudulent), dan/atau aktivitas mencurigakan lainnya
                </li>
                <li>
                    Kopi Kenangan berhak untuk mengubah syarat dan ketentuan tanpa adanya pemberitahuan terlebih dahulu
                </li>
            </ul>
        </div>
    </section>
@endsection
