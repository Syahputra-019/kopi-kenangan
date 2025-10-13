@extends('layouts.app')

@section('title', 'petualangan-rasa-onepiece-tahilalats')

@section('content')
    <section class="relative">
        <img src="{{ asset('images/LP-ONE-PIECE-18.webp') }}" alt="Dreamy" class="w-full h-auto">
    </section>

    <section class="pt-16 lg:pt-24">
        <h3 class="text-xl  font-semibold text-center">
            YUK COBAIN SEKARANG!
        </h3>

        <div class="flex justify-center pt-4 pb-10">
            <form action="" method="get">
                <button type="submit"
                    class="text-xl lg:text-2xl font-extrabold text-yellow-400 text-center w-80 h-16 lg:w-[500px] lg:h-24 rounded-full 
                    bg-gradient-to-r from-[#8b0000] via-[#b22222] to-[#8b0000] shadow-lg">
                    KLIK DI SINI UNTUK <br> PROMO PETUALANGAN RASA
                </button>
            </form>
        </div>
    </section>

    <section class="relative flex justify-center p-8">
        <img src="{{ asset('images/LP-ONE-PIECE-16.webp') }}" alt="Dreamy" class="w-[700px] h-auto">
    </section>

    <section class="flex justify-center p-10 lg:p-32">
        <iframe width="560" height="315"
            src="https://www.youtube.com/embed/fEHt18u6vJ0?autoplay=1&mute=1&si=edgZD41J6Ib85YhE"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </section>

    <section>
        <div class="flex flex-col lg:flex-row justify-center p-10 lg:p-16 gap-5">
            <div>
                <img src="{{ asset('images/PIECE-03.webp') }}" alt="Dreamy" class="mx-auto w-[500px] h-72 object-contain">
                <div class="flex justify-center p-8">
                    <form action="" method="get">
                        <button type="submit"
                            class="font-extrabold text-xl lg:text-2xl text-center w-56 h-16 lg:w-[400px] lg:h-20 rounded-full text-white bg-red-700">
                            Captain Apple Cream
                        </button>
                    </form>
                </div>
                <p class="text-base lg:text-xl text-center">Kesegaran teh dengan sirup apel <br> dipadukan dengan topping
                    cream <br>
                    macchiato</p>
            </div>

            <div>
                <img src="{{ asset('images/PIECE-01.webp') }}" alt="Dreamy" class="mx-auto w-[500px] h-72 object-contain">
                <div class="flex justify-center p-8">
                    <form action="" method="get">
                        <button type="submit"
                            class="font-extrabold text-xl lg:text-2xl text-center w-56 h-16 lg:w-[400px] lg:h-20 rounded-full text-white bg-yellow-700">
                            Master Chef Peach <br> Aren Late
                        </button>
                    </form>
                </div>
                <p class="text-base lg:text-xl text-center">Perpaduan kopi susu dengan sirup <br> peach, gula aren dan
                    topping cream <br>
                    macchiato</p>
            </div>
        </div>

        <div class="flex justify-center pb-16 gap-5">
            <div>
                <img src="{{ asset('images/Sunny2.webp') }}" alt="Dreamy" class="mx-auto w-[500px] h-72 object-contain">
                <div class="flex justify-center p-8">
                    <form action="" method="get">
                        <button type="submit"
                            class="font-extrabold text-xl lg:text-2xl text-center w-56 h-16 lg:w-[400px] lg:h-20 rounded-full text-white bg-amber-900">
                            Sunny Peach <br> Americano
                        </button>
                    </form>
                </div>
                <p class="text-base lg:text-xl text-center">Perpaduan espresso dengan sirup <br> peach yang segar</p>
            </div>
        </div>

        {{-- makanan --}}
        <div class="flex flex-col lg:flex-row justify-center pb-10 lg:pb-16 gap-5">
            <div>
                <img src="{{ asset('images/food-05.webp') }}" alt="Dreamy" class="mx-auto w-[500px] h-72 object-contain">
                <div class="flex justify-center p-8">
                    <form action="" method="get">
                        <button type="submit"
                            class="font-extrabold text-xl lg:text-2xl text-center w-56 h-16 lg:w-[400px] lg:h-20 rounded-full text-white bg-red-700">
                            Red Apple Bun
                        </button>
                    </form>
                </div>
                <p class="text-base lg:text-xl text-center">Roti apel dengan isian selai dan <br> potongan buah apel</p>
            </div>

            <div>
                <img src="{{ asset('images/food-06.webp') }}" alt="Dreamy" class="mx-auto w-[500px] h-72 object-contain">
                <div class="flex justify-center p-8">
                    <form action="" method="get">
                        <button type="submit"
                            class="font-extrabold text-xl lg:text-2xl text-center w-56 h-16 lg:w-[400px] lg:h-20 rounded-full text-white bg-green-700">
                            Macha Bun
                        </button>
                    </form>
                </div>
                <p class="text-base lg:text-xl text-center">Roti matcha dengan isian cream <br> matcha yang manis</p>
            </div>
        </div>

        <div class="flex justify-center pb-16 gap-5">
            <div>
                <img src="{{ asset('images/food-07.webp') }}" alt="Dreamy" class="mx-auto w-[500px] h-72 object-contain">
                <div class="flex justify-center p-8">
                    <form action="" method="get">
                        <button type="submit"
                            class="font-extrabold text-xl lg:text-2xl text-center w-56 h-16 lg:w-[400px] lg:h-20 rounded-full text-white bg-yellow-600">
                            Smoked Chicken <br> Cheese Bread
                        </button>
                    </form>
                </div>
                <p class="text-base lg:text-xl text-center">Roti bertabur keju parmesan yang <br> berisi daging ayam asap
                    dan stik <br>
                    keju</p>
            </div>
        </div>

        {{-- bekal minum --}}
        <div class="flex flex-col lg:flex-row justify-center pb-16 gap-5">
            <div>
                <img src="{{ asset('images/Foldable2.webp') }}" alt="Dreamy"
                    class="mx-auto w-[500px] h-72 object-contain">
                <div class="flex justify-center p-8">
                    <form action="" method="get">
                        <button type="submit"
                            class="font-extrabold text-xl lg:text-2xl text-center w-56 h-16 lg:w-[400px] lg:h-20 rounded-full text-yellow-400 bg-red-900">
                            Foldable Totebag
                        </button>
                    </form>
                </div>
                <p class="text-base lg:text-xl text-center">Tote bag foldable multifungsi dengan desain <br> eksklusif
                    kolaborasi One
                    Piece & Tahilalats</p>
            </div>

            <div>
                <img src="{{ asset('images/Hat-Tumbler.webp') }}" alt="Dreamy"
                    class="mx-auto w-[500px] h-72 object-contain">
                <div class="flex justify-center p-8">
                    <form action="" method="get">
                        <button type="submit"
                            class="font-extrabold text-xl lg:text-2xl text-center w-56 h-16 lg:w-[400px] lg:h-20 rounded-full text-yellow-400 bg-red-900">
                            Hat Tumbler
                        </button>
                    </form>
                </div>
                <p class="text-base lg:text-xl text-center">Tumbler 3D dengan desain ekslusif <br> kolaborasi One Piece &
                    Tahilalats </p>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row justify-center pb-16 gap-5">
            <div>
                <img src="{{ asset('images/Lid-Tumbler-2.webp') }}" alt="Dreamy"
                    class="mx-auto w-[500px] h-72 object-contain">
                <div class="flex justify-center p-8">
                    <form action="" method="get">
                        <button type="submit"
                            class="font-extrabold text-xl lg:text-2xl text-center w-56 h-16 lg:w-[400px] lg:h-20 rounded-full text-yellow-400 bg-red-900">
                            Lit Tumbler
                        </button>
                    </form>
                </div>
                <p class="text-base lg:text-xl text-center">Tumbler stainless steel dengan <br> desain ekslusif kolaborasi
                    One Piece
                    <br> & Tahilalats
                </p>
            </div>

            <div>
                <img src="{{ asset('images/Straw-Tumbler-2.webp') }}" alt="Dreamy"
                    class="mx-auto w-[500px] h-72 object-contain">
                <div class="flex justify-center p-8">
                    <form action="" method="get">
                        <button type="submit"
                            class="font-extrabold text-xl lg:text-2xl text-center w-56 h-16 lg:w-[400px] lg:h-20 rounded-full text-yellow-400 bg-red-900">
                            Straw Tumbler
                        </button>
                    </form>
                </div>
                <p class="text-base lg:text-xl text-center">Tumbler stainless steel dengan sedotan dan <br> desain ekslusif
                    kolaborasi
                    One Piece & <br> Tahilalats </p>
            </div>
        </div>
    </section>

    <section>
        <div class="grid justify-center">
            <H1 class="text-2xl text-center font-extrabold p-16">Petualangan Rasa Series Promo Bundle</H1>
            <div>
                <img src="{{ asset('images/Promo_LP.webp') }}" alt="dream free"
                    class="w-[1100px] h-auto object-contain">
            </div>
        </div>
        <div class="pb-24">
            <h3 class="text-xl text-center pt-8 pb-6 lg:pt-14 lg:pb-10">Syarat dan Ketentuan:</h3>
            <ul class="mx-16 lg:mr-56 lg:ml-56 list-decimal space-y-2">
                <li>
                    Promo Petualangan Rasa Series khusus pembelian langsung di outlet Kopi Kenangan dan Aplikasi Kopi
                    Kenangan, pelanggan dapat membeli 2 produk Petualangan Rasa Series akan mendapatkan 1 collectible card
                    GRATIS. Terdapat perbedaan harga untuk outlet tertentu.
                </li>
                <li>
                    Promo Dreamy Choco Series khusus pembelian melalui GoFood, GrabFood, dan ShopeeFood, pelanggan dapat
                    membeli 3 minuman Dreamy Choco Series akan mendapatkan 1 produk pilihan gratis. Terdapat perbedaan harga
                    untuk outlet tertentu.
                </li>
                <li>
                    Pilihan produk pertama: Captain Apple Cream / Master Chef Peach Aren Latte / Sunny Peach Americano.
                </li>
                <li>
                    Pilihan produk kedua dan ketiga: Captain Apple Cream / Master Chef Peach Aren Latte / Sunny Peach
                    Americano / Red Apple Bun / Matcha Bun / Smoked Chicken Cheese Bread.
                </li>
                <li>
                    Desain collectible card akan diberikan secara acak.
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
                    Kopi Kenangan berhak untuk mengubah syarat dan ketentuan tanpa adanya pemberitahuan terlebih dahulu
                </li>
            </ul>
        </div>
    </section>
@endsection
