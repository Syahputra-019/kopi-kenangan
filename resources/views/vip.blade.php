@extends('layouts.app')

@section('title', 'VIP')

@section('content')
    <section>
        <div class="relative">
            <!-- Gambar -->
            <img src="{{ asset('/images/VIP.webp') }}" alt="" class="lg:w-full lg:auto">

            <!-- Tombol di atas gambar -->
            <div class="absolute lg:absolute bottom-5 lg:bottom-5 left-1/2 transform -translate-x-1/2 z-1">
                <form action="" method="get">
                    <button type="submit"
                        class="w-24 h-6 lg:w-64 lg:h-16 lg:mb-16 text-sm lg:text-2xl font-bold text-white bg-amber-500 shadow-lg shadow-amber-700 rounded-full">
                        JOIN NOW
                    </button>
                </form>
            </div>
        </div>
    </section>

    <section class="p-8 flex flex-col lg:flex-row bg-[#e7be96e9]">
        <div class="flex pb-4 flex-col lg:flex-row lg:w-1/2 text-xl lg:text-3xl font-bold lg:px-64 lg:py-24">
            <p>Tentang Loyalty Kenangan VIP</p>
        </div>
        <div class="text-base lg:w-1/2 lg:text-xl lg:pr-64 lg:py-24">
            <p>
                Kenangan VIP merupakan program loyalty dari Kenangan
                Brands yang dihadirkan khusus untuk teman mantan
                dimana nantinya akan ada banyak benefit
                spesial untuk para teman mantan.
            </p>
        </div>
    </section>

    <section class="p-8 lg:p-24">
        <h1 class="text-xl pb-4 lg:text-3xl font-bold text-center lg:p-8">Apa yang akan Kamu Dapatkan?</h1>
        <p class="text-base lg:text-xl text-center lg:pb-5">
            Setiap Teman Mantan yang berpartisipasi dalam program loyalty
            Kenangan VIP dapat menikmati beberapa keuntungan
            menarik yang berbeda setiap tingkatan level loyalty yang mereka miliki.
        </p>
        <p class="text-base lg:text-xl text-center pb-0">
            Adapun keuntungan-keuntungan tersebut dapat dilihat seperti berikut:
        </p>
        <div class="p-6 md:p-10 lg:p-16">
            <!-- Baris pertama -->
            <div class="grid grid-cols-2 gap-6 mb-8 lg:flex lg:justify-center lg:gap-14 lg:mb-14">
                <img src="{{ asset('images/ragular.webp') }}" alt="Regular" class="w-full lg:w-72 h-auto object-contain">
                <img src="{{ asset('images/hbd.webp') }}" alt="HBD" class="w-full lg:w-72 h-auto object-contain">
                <img src="{{ asset('images/spesial.png') }}" alt="Spesial" class="w-full lg:w-72 h-auto object-contain">
            </div>

            <!-- Baris kedua -->
            <div class="grid grid-cols-2 gap-6 lg:flex lg:justify-center lg:gap-20">
                <img src="{{ asset('images/exlusive.png') }}" alt="Exclusive" class="w-full lg:w-72 h-auto object-contain">
                <img src="{{ asset('images/black-reward.png') }}" alt="Reward"
                    class="w-full lg:w-72 h-auto object-contain">
            </div>
        </div>

        <div class="flex justify-center py-4 text-sm lg:text-base text-center lg:pb-8">
            <p>*Regular Cashback hanya berlaku untuk Level Gold & Level Black</p>
        </div>
    </section>

    <section class="bg-black lg:min-h-screen">
        <div class="">
            <div class="">
                <h1 class="text-lg p-8 mx-8 lg:text-3xl font-bold text-white text-center lg:p-20">Hanya Butuh Beberapa
                    Langkah
                    untuk Bergabung:
                </h1>
                <div class="flex justify-center gap-4 lg:gap-16 lg:pb-10">
                    <form action="/about" method="get">
                        <button type="submit"
                            class="w-24 h-8 text-base lg:w-56 lg:h-16 font-bold lg:text-2xl rounded-full bg-white text-black border-4 border-[#eea76d]">
                            Via Online
                        </button>
                    </form>
                    <form action="/about" method="get">
                        <button type="submit"
                            class="w-24 h-8 text-base lg:w-56 lg:h-16 font-bold lg:text-2xl rounded-full bg-white text-black border-4 border-[#eea76d]">
                            Via Store
                        </button>
                    </form>
                </div>
            </div>
            <!-- Gambar -->
            <div class="flex flex-col items-center my-4 lg:flex-row lg:justify-center lg:gap-5 lg:mt-16">
                <img src="{{ asset('images/download-1.png') }}" alt="1"
                    class="lg:w-[350px] lg:h-[500px] object-contain">
                <img src="{{ asset('images/isi-2.png') }}" alt="2" class="lg:w-[350px] lg:h-[500px] object-contain">
                <img src="{{ asset('images/mulai-3.png') }}" alt="3"
                    class="lg:w-[350px] lg:h-[500px] object-contain">
            </div>
        </div>

        <div class="text-base p-8 text-center lg:text-xl text-white lg:p-24">
            <p>Lihat progress level dan berbagai keuntungan dari Kenangan VIP di aplikasi Kopi Kenangan</p>
        </div>
    </section>

    {{-- level vip --}}
    <section class="bg-[#e7be96e9]">
        <div>
            <h1
                class="text-xl px-24 py-8 lg:text-3xl text-center font-bold lg:max-w-4xl lg:mx-auto lg:mr-96 lg:ml-96 lg:pt-24 lg:pb-8">
                Semakin
                Tinggi Levelmu,
                Semakin Banyak Keuntunganmu
            </h1>
        </div>
        <div class="flex justify-center">
            <img src="{{ asset('images/tabelvip.webp') }}" alt="Tabel" class="lg:max-w-[900px] lg:h-auto object-contain">
        </div>

        <div class="text-base lg:text-xl text-center max-w-4xl mx-auto">
            <p class="p-8">
                Untuk dapat menikmati benefit yang lebih menguntungkan,
                Teman Mantan harus terus bertransaksi dan mengumpulkan
                akumulasi transaksi dalam waktu 1 tahun terhitung dari
                awal tahun. Adapun setiap level loyalty Kenangan VIP
                memiliki syarat mininum total transaksi yang berbeda-beda.
            </p>
        </div>

        <div class="text-base lg:text-xl text-center lg:mx-96 lg:pb-24">
            <p class="pb-8">
                Adapun syarat tersebut dapat dilihat seperti dibawah ini:
            </p>
            <img src="{{ asset('images/VIP-Level.webp') }}" alt="Level Vip"
                class="lg:max-w-[1000] lg:h-auto object-contain ">
        </div>
    </section>

    <section class="flex flex-col lg:flex-row lg:justify-center">
        <div class="text-xl p-8 lg:w-1/3 lg:text-3xl font-bold lg:p-24 lg:text-center">
            <h1>FAQ</h1>
        </div>
        <div class="p-8 lg:w-1/2 lg:pt-24 lg:pr-24">
            {{-- FAQ 1 --}}
            <div class="pb-8 lg:pb-14">
                <button onclick="document.getElementById('konten').classList.toggle('hidden')" class="text-xl font-bold">
                    + Apa itu Kenangan VIP loyalty program?
                </button>
                <div id="konten" class="hidden text-sm p-10">
                    <p>
                        Kenangan VIP loyalty program adalah program loyalty terbaru
                        dari Kenangan Brands yang akan hadir mulai tanggal 1 Januari
                        2024 dengan keuntungan & tingkatan yang baru. Selain itu,
                        perhitungan tingkatan didasarkan pada transaksi mulai 1 Januari - 31
                        Desember 2023. Selanjutnya, perhitungan tingkatan akan mengikuti tahun berjalan.
                    </p>
                </div>
            </div>
            {{-- FAQ 2 --}}
            <div class="pb-8 lg:pb-14">
                <button onclick="document.getElementById('konten2').classList.toggle('hidden')" class="text-xl font-bold">
                    + Apakah Cinta tetap ada pada Kenangan VIP loyalty program?
                </button>
                <div id="konten2" class="hidden text-sm p-10">
                    <p>
                        Mulai tanggal 1 Januari 2024, cinta sudah tidak berlaku lagi sebagai
                        acuan progress level loyalty. Namun, hal tersebut digantikan dengan
                        total nilai transaksi sebagai alat ukur progress loyalty yang baru.
                        Level membership terbaru pada Kenangan VIP dibagi menjadi 3 yaitu: Silver, Gold, & Black.
                    </p>
                </div>
            </div>
            {{-- FAQ 3 --}}
            <div class="pb-8 lg:pb-14">
                <button onclick="document.getElementById('konten3').classList.toggle('hidden')"
                    class="text-left text-xl font-bold">
                    + Bagaimana menentukan level baru saya di Kenangan
                    <br>
                    VIP loyalty program?
                </button>
                <div id="konten3" class="hidden text-sm p-10">
                    <p class="pb-4">
                        Terhitung 1 Januari 2024, alat ukur penentuan
                        progress level loyalty yang digunakan yaitu
                        nilai total yang dibayarkan untuk setiap kali
                        transaksi yang kamu lakukan dan setiap level
                        memiliki minimum total nilai transaksi untuk
                        naik atau mempertahankan level, berikut detailnya :
                    </p>
                    <p class="pb-4">
                        Silver : Tidak ada minimal jumlah transaksi
                        <br>
                        Gold : Jumlah transaksi yang dibutuhkan sebesar Rp700.000
                        <br>
                        Black : Jumlah transaksi yang dibutuhkan sebesar Rp10.000.000
                    </p>
                    <p class="pb-4">
                        Terhitung 1 Januari 2024, alat ukur penentuan
                        progress level loyalty yang digunakan yaitu
                        nilai total yang dibayarkan untuk setiap kali
                        transaksi yang kamu lakukan dan setiap level
                        memiliki minimum total nilai transaksi untuk
                        naik atau mempertahankan level, berikut detailnya :
                    </p>
                    <p class="pb-4">
                        Terhitung 1 Januari 2024, alat ukur penentuan
                        progress level loyalty yang digunakan yaitu
                        nilai total yang dibayarkan untuk setiap kali
                        transaksi yang kamu lakukan dan setiap level
                        memiliki minimum total nilai transaksi untuk
                        naik atau mempertahankan level, berikut detailnya :
                    </p>
                </div>
            </div>
            {{-- FAQ 4 --}}
            <div class="pb-8 lg:pb-14">
                <button onclick="document.getElementById('konten4').classList.toggle('hidden')" class="text-xl font-bold">
                    + Apakah yang dimaksud dengan Birthday Treats?
                </button>
                <div id="konten4" class="hidden text-sm p-10">
                    <p class="pb-4">
                        Birthday Treats merupakan salah satu hadiah yang diberikan
                        khusus untuk level membership level Gold & Black. Di mana:
                    </p>
                    <P class="pb-4">
                        - Gold membership hanya akan mendapatkan 1 E-voucher ulang tahun
                        yang akan dibagikan di bulan ulang tahun member & lewat aplikasi Kopi Kenangan.
                    </P class="pb-4">
                    - Sedangkan, untuk Black membership mendapatkan 3 E-voucher ulang tahun
                    yang akan dibagikan di bulan ulang tahun member & lewat aplikasi Kopi Kenangan.
                    <p class="pb-4">
                        *Catatan:
                    </P>
                    <p class="pb-4">
                        E-Voucher spesial khusus untuk black member mungkin akan berbeda-beda setiap bulannya dan dapat
                        berubah tanpa pemberitahuan sebelumnya.
                    </p>
                </div>
            </div>
            {{-- FAQ 5 --}}
            <div class="pb-8 lg:pb-14">
                <button onclick="document.getElementById('konten5').classList.toggle('hidden')" class="text-xl font-bold">
                    + Apakah yang dimaksud dengan Exclusive Promotion?
                </button>
                <div id="konten5" class="hidden text-sm p-10">
                    <p class="pb-4">
                        Exclusive Promotion merupakan keuntungan khusus untuk
                        Black Members dimana nantinya akan ada Cashback/Diskon khusus yang diberikan setiap bulannya.

                    </p>
                    <p class="pb-4">
                        <span class="pb-4">*Catatan:</span>
                        <br>
                        Keuntungan berupa Cashback/Diskon sepenuhnya diatur oleh
                        Kopi Kenangan & dapat berubah sewaktu-waktu tanpa pemberitahuan sebelumnya.
                    </p>
                </div>
            </div>
            {{-- FAQ 6 --}}
            <div>
                <button onclick="document.getElementById('konten6').classList.toggle('hidden')" class="text-xl font-bold">
                    + Apakah yang dimaksud dengan Black Reward Treats?
                </button>
                <div id="konten6" class="hidden text-sm p-10">
                    <p class="pb-4">
                        Black Reward Treats merupakan salah satu keuntungan khusus bagi Black Members dimana nantinya akan
                        ada program spesial di aplikasi Kopi Kenangan setiap bulannya. Nantinya, masing-masing Black Members
                        dapat berpartisipasi dan mendapatkan reward khusus yang berbeda beda setiap bulannya.
                    </p>
                    <p class="pb-4">
                        *Catatan:
                    </p>
                    <p class="pb-4">
                        - Informasi terkait game/quiz khusus berikut akan di informasikan
                        lewat Email ataupun Push Notification setiap bulannya kepada Black Members.
                    </p>
                    <p class="pb-4">
                        - Hadiah sepenuhnya diatur oleh Kopi Kenangan & dapat berubah
                        sewaktu-waktu tanpa pemberitahuan sebelumnya.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="flex justify-center mx-10 lg:pt-40 lg:pb-14">
        <a href="">
            <img src="{{ asset('images/kenanganapp.webp') }}" alt="Kenangan app"
                class="w-full lg:w-[900px] h-auto object-contain">
        </a>
    </section>
@endsection
