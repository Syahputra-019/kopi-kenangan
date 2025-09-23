@extends('layouts.app')

@section('title', 'Order')

@section('content')
    <section class="relative">
        <img src="{{ asset('images/KK-Dreamy-Choco-Series-Website.webp') }}" alt="Dreamy" class="w-full h-auto">
    </section>
    <section class="p-24">
        <h1 class="text-2xl text-center font-bold">YUK, COBAIN SEKARANG!</h1>
        <div class="flex justify-center p-8">
            <form action="" method="get">
                <button type="submit"
                    class="text-3xl text-center w-[500px] h-24 rounded-full text-[#5C2C06] bg-gradient-to-r from-[#c08a3c] via-[#f7f0d6] to-[#c08a3c]">
                    Klik di sini untuk Promo <br>
                    <span class="font-extrabold">Dreamy Choco Series</span>
                </button>
            </form>
        </div>
        <div class="text-center text-4xl font-extrabold text-[#5C2C06] mt-16">
            <h1>
                Perfect Harmony of Rich Dutch Chocolate, <br>
                Vibrant Orange, Tasty Caramel & Aren.
            </h1>
        </div>
        <div class="flex justify-center p-16 gap-5">
            <div>
                <img src="{{ asset('images/dream-kiri.webp') }}" alt="Dreamy" class="mx-auto w-40 h-64 object-contain">
                <div class="flex justify-center p-8">
                    <form action="" method="get">
                        <button type="submit"
                            class="font-extrabold text-2xl text-center w-[400px] h-20 rounded-full text-[#5C2C06] bg-gradient-to-r from-[#c08a3c] via-[#f7f0d6] to-[#c08a3c]">
                            Dreamy Choco Orange
                        </button>
                    </form>
                </div>
                <p class="text-xl text-center">Perpaduan fresh milk dan cokelat <br> asli Belanda dengan sirup orange</p>
            </div>
            <div>
                <img src="{{ asset('images/dream-choco-kanan.jpeg') }}" alt="Dreamy"
                    class="mx-auto w-40 h-64 object-contain">
                <div class="flex justify-center p-8">
                    <form action="" method="get">
                        <button type="submit"
                            class="font-extrabold text-2xl text-center w-[400px] h-20 rounded-full text-[#5C2C06] bg-gradient-to-r from-[#c08a3c] via-[#f7f0d6] to-[#c08a3c]">
                            Dreamy Salted <br> Caramel Aren Mocha
                        </button>
                    </form>
                </div>
                <p class="text-xl text-center">Perpaduan fresh milk dan cokelat <br> asli Belanda dan espresso dengan <br>
                    gula aren dan salted caramel</p>
            </div>
        </div>
        <div class="flex justify-center gap-5">
            <div>
                <img src="{{ asset('images/dream-3.jpeg') }}" alt="Dreamy" class="mx-auto w-40 h-64 object-contain">
                <div class="flex justify-center p-8">
                    <form action="" method="get">
                        <button type="submit"
                            class="font-extrabold text-2xl text-center w-[400px] h-20 rounded-full text-[#5C2C06] bg-gradient-to-r from-[#c08a3c] via-[#f7f0d6] to-[#c08a3c]">
                            Dreamy Choco Salted Caramel
                        </button>
                    </form>
                </div>
                <p class="text-xl text-center">Perpaduan fresh milk dan cokelat <br> asli Belanda dengan salted caramel </p>
            </div>
            <div>
                <img src="{{ asset('images/dream-4.jpeg') }}" alt="Dreamy" class="mx-auto w-40 h-64 object-contain">
                <div class="flex justify-center p-8">
                    <form action="" method="get">
                        <button type="submit"
                            class="font-extrabold text-2xl text-center w-[400px] h-20 rounded-full text-[#5C2C06] bg-gradient-to-r from-[#c08a3c] via-[#f7f0d6] to-[#c08a3c]">
                            Choco Orange Soft Serve
                        </button>
                    </form>
                </div>
                <p class="text-xl text-center">Ice cream cokelat lembut dengan <br> tambahan rasa orange <br><span
                        class="text-base text-center">*Hanya tersedia di outlet terpilih! Cek <br> highlight Instagram
                        @kopikenangan.id untuk <br> lihat list outlet!</span></p>
            </div>
        </div>
        <div class="flex justify-center pb-4 gap-5">
            <div>
                <img src="{{ asset('images/dream-5.webp') }}" alt="Dreamy" class="mx-auto w-72 h-64 object-contain">
                <div class="flex justify-center p-8">
                    <form action="" method="get">
                        <button type="submit"
                            class="font-extrabold text-2xl text-center w-[400px] h-20 rounded-full text-[#5C2C06] bg-gradient-to-r from-[#c08a3c] via-[#f7f0d6] to-[#c08a3c]">
                            Vanila Milk Bun
                        </button>
                    </form>
                </div>
                <p class="text-xl text-center">Milk bun dengan isian krim vanila <br> dan susu vanila tabur</p>
            </div>
            <div>
                <img src="{{ asset('images/dream-6.webp') }}" alt="Dreamy" class="mx-auto w-72 h-64 object-contain">
                <div class="flex justify-center p-8">
                    <form action="" method="get">
                        <button type="submit"
                            class="font-extrabold text-2xl text-center w-[400px] h-20 rounded-full text-[#5C2C06] bg-gradient-to-r from-[#c08a3c] via-[#f7f0d6] to-[#c08a3c]">
                            Chocolate Milk Bun
                        </button>
                    </form>
                </div>
                <p class="text-xl text-center">Milk bun dengan isian krim cokelat <br> dan susu cokelat tabur</p>
            </div>
        </div>

        {{-- DREAMY CHOCO SERIES SPECIAL OFFER! --}}
        <div class="grid justify-center">
            <H1 class="text-3xl text-center font-extrabold p-16">DREAMY CHOCO SERIES SPECIAL OFFER!</H1>
            <div>
                <img src="{{ asset('images/dream-free.jpeg') }}" alt="dream free" class="w-[1100px] h-auto object-contain">
            </div>
        </div>
        <div>
            <h3 class="text-xl text-center pt-14 pb-10">Syarat dan Ketentuan:</h3>
            <ul class="mr-56 ml-56 list-disc">
                <li>
                    Promo Dreamy Choco Series khusus pembelian langsung di outlet Kopi Kenangan dan Aplikasi Kopi
                    Kenangan, pelanggan dapat membeli 2 minuman Dreamy Choco Series akan mendapatkan 1 produk pilihan
                    gratis. Terdapat perbedaan harga untuk outlet tertentu.
                </li>
                <li>
                    Promo Dreamy Choco Series khusus pembelian melalui GoFood, GrabFood, dan ShopeeFood, pelanggan dapat
                    membeli 3 minuman Dreamy Choco Series akan mendapatkan 1 produk pilihan gratis. Terdapat perbedaan harga
                    untuk outlet tertentu.
                </li>
                <li>
                    Pilihan minuman: Dreamy Choco Orange / Dreamy Choco Salted Caramel / Dreamy Salted Caramel Aren Mocha
                </li>
                <li>
                    Pilihan menu gratis: Dreamy Choco Orange / Kopi Susu Black Aren / Americano
                </li>
                <li>
                    Berlaku hanya opsi Ice & ukuran regular.
                </li>
                <li>
                    Stok tergantung ketersediaan di outlet.
                </li>
                <li>
                    Harga promo tidak termasuk topping tambahan.
                </li>
                <li>
                    Kopi Kenangan berhak menahan dan/atau membatalkan promo dan/atau membatasi layanan, baik untuk semantara
                    maupun permanen, kepada pengguna sewaktu-waktu termasuk jika ditemukan tindakan penyalahgunaan
                    (abusive), kecurangan (fraudulent), dan/atau aktivitas mencurigakan lainnya.
                </li>
                <li>
                    Kopi Kenangan berhak untuk mengubah syarat dan ketentuan tanpa adanya pemberitahuan terlebih dahulu.
                </li>
                <li>
                    Semua produk mengandung bahan olahan susu.
                </li>
            </ul>
        </div>
    </section>
@endsection
