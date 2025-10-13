@extends('layouts.app')

@section('title', 'Kenangan-Beans')

@section('content')
    <section class="relative">
        <img src="{{ asset('images/KK-Kenangan-Beans-Website-Header.webp') }}" alt="Dreamy" class="w-full h-auto">
    </section>

    <section class="pt-10 lg:pt-24">
        <h3 class="text-xl font-semibold text-center">BELI LANGSUNG DI SINI</h3>

        <div class="flex justify-center pt-4 pb-10">
            <form action="" method="get">
                <button type="submit"
                    class="text-xl lg:text-3xl text-center w-64 h-16 lg:w-[500px] lg:h-24 rounded-full text-[#2b1402] bg-gradient-to-r from-[#c08a3c] via-[#f7f0d6] to-[#c08a3c]">
                    <span class="font-extrabold">Aplikasi Kopi Kenangan</span>
                </button>
            </form>
        </div>

        <p class="text-xl text-center p-4">Cek Outlet <span class="font-bold">Kenangan Beans</span> di kotamu</p>
    </section>

    <section class="pt-8 pb-6 lg:pt-10 lg:pb-24">
        <div class="pb-4">
            <button onclick="document.getElementById('konten1').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-8 lg:pr-80 lg:pl-80">
                <span>JABODETABEK</span>
                <span>+</span>
            </button>
            <div id="konten1" class="hidden text-sm px-10 lg:pl-80 lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Summarecon Mall Bekasi</p>
                    <p>Summarecon Mall Serpong</p>
                    <p>BP KHI Boulevard</p>
                    <p>Ruko Cikarang Festival</p>
                    <p>Supermall Karawaci</p>
                    <p>BP Cikarang</p>
                    <p>Margo City Depok</p>
                    <p>BP Ciater Pamulang</p>
                    <p>Ruko Palem Semi Karawaci</p>
                    <p>BP Metland</p>
                    <p>Ruko Cordoba Green Lake City</p>
                    <p>Ruko Azores</p>
                    <p>Lotte Mart Bintaro</p>
                    <p>Ruko Topaz Summarecon Bekasi</p>
                    <p>Living World Alam Sutera</p>
                    <p>SPBU Pertamina (Alam Sutera)</p>
                    <p>BP BSD Delatinos</p>
                    <p>Ruko Grand Wisata Bekasi</p>
                    <p>Ruko Gading Serpong</p>
                    <p>Rest Area KM 13,5</p>
                    <p>Summarecon Digital Center (SDC Serpong)</p>
                    <p>Ruko Puri Beta</p>
                    <p>Fakultas Kedokteran UPH</p>
                    <p>Ruko Tole Iskandar</p>
                    <p>Ruko Boulevard Hijau Bekasi</p>
                    <p>Ruko Grand Galaxy City Bekasi</p>
                    <p>Ruko Menjangan</p>
                    <p>SPBU Pertamina (BSD)</p>
                    <p>BP Jababeka Hollywood</p>
                    <p>Ruko Ceger</p>
                    <p>T3 Gate 21 Keberangkatan Bandara Soekarno Hatta</p>
                    <p>Ruko Daan Mogot</p>
                    <p>Padang Merdeka Bez Serpong</p>
                    <p>Botani Square Mall</p>
                    <p>Ruko Graha Raya</p>
                    <p>TerasKota</p>
                    <p>Ruko Kota Wisata</p>
                    <p>Ruko Vasanta Innopark</p>
                    <p>Ruko Waterpark Grand Depok City</p>
                    <p>Universitas Indonesia</p>
                    <p>Marchand Hype Station</p>
                    <p>Bintaro Plaza</p>
                    <p>Ruko Jatimakmur</p>
                    <p>Aeon Mall Sentul City</p>
                    <p>Tokyo Hub Pantai Indah Kapuk 2</p>
                    <p>Ruko Sawangan Depok</p>
                    <p>SPBU Pertamina (Ciputat)</p>
                    <p>T2D Keberangkatan Bandara Soekarno Hatta</p>
                    <p>DMall Depok</p>
                    <p>Ruko Gading Terrace Bekasi</p>
                    <p>Cilegon Centre Mall</p>
                    <p>Dukuh Zamrud</p>
                    <p>Ruko Madison Grande</p>
                    <p>Ruko Perumahan Jatijajar Depok</p>
                    <p>Ruko Taman Galaxy</p>
                    <p>Ruko Nagoya Hill Batam</p>
                    <p>Ruko Barcelona BSD</p>
                    <p>Ruko Jatiuwung Tangerang (FCK)</p>
                    <p>U Town Bintaro</p>
                    <p>Ruko Cimone Pantura Tangerang</p>
                    <p>Kenangan Signature The Breeze</p>
                    <p>Kenangan Signature Botani Square</p>
                    <p>Kenangan Signature Pakuwon Bekasi</p>
                    <p>Kota Kasablanka</p>
                    <p>RC Veteran (Container) Drive Thru</p>
                    <p>Blok M Plaza (LG)</p>
                    <p>Sahid Sudirman</p>
                    <p>Central Park</p>
                    <p>Central Grand Indonesia 2nd Floor</p>
                    <p>Mangkuluhur City (HANA)</p>
                    <p>NEO SOHO (L&C)</p>
                    <p>Mall Kelapa Gading 3</p>
                    <p>Pacific Place</p>
                    <p>Ruko Rawa Belong</p>
                    <p>Food Hub Cyber Tower 2</p>
                    <p>Mall Artha Gading</p>
                    <p>Stasiun Gambir Selatan</p>
                    <p>Graha CIMB Niaga</p>
                    <p>Wisma BNI 46</p>
                    <p>Emporium Pluit</p>
                    <p>Rumah Kenangan</p>
                    <p>Thamrine Nine</p>
                    <p>Ruko Joglo</p>
                    <p>Plaza Indonesia</p>
                    <p>Puri Indah Mall</p>
                    <p>Ruko Rawamangun (Jl. Paus)</p>
                    <p>Pusat Mode Tanah Abang</p>
                    <p>Ruko Radio Dalam</p>
                    <p>Menara Karya</p>
                    <p>Ruko Pondok Bambu</p>
                    <p>Ruko Jalan Bek. Murad</p>
                    <p>Stasiun Palmerah</p>
                    <p>Ruko Boulevard Kelapa Gading</p>
                    <p>Pluit Village</p>
                    <p>Raffles Square Juanda Jakarta</p>
                    <p>Ruko Citra 6</p>
                    <p>Lippo Mall Puri</p>
                    <p>SPBU Pertamina COCO 31.103.03 Cikini</p>
                    <p>Ruko Jalan Tebet Raya</p>
                    <p>Pasaraya Blok M</p>
                    <p>Cipete Raya</p>
                    <p>SPBU Pertamina Kalimalang Duren Sawit</p>
                    <p>Ruko Cipayung</p>
                    <p>Stasiun Senen</p>
                    <p>Ruko Green Lake Sunter</p>
                    <p>Ruko Duta Mas Jelambar</p>
                    <p>Green Pramuka Square</p>
                    <p>Ruko Cideng</p>
                    <p>Ruko Kramat Jaya Koja</p>
                    <p>Ruko Metro Pondok Indah</p>
                    <p>Ruko Taman Mutiara Palem</p>
                    <p>Ruko Citra 7</p>
                    <p>Ruko Danau Sunter Utara</p>
                    <p>Ruko Muara Karang</p>
                    <p>Menara Mandiri</p>
                    <p>Ruko Cempaka Putih</p>
                    <p>Mandiri Lounge Senayan City</p>
                    <p>Mall Taman Anggrek</p>
                    <p>Ruko Mampang Business Park</p>
                    <p>Ruko Arundina Cibubur</p>
                    <p>Utan Kayu (Container)</p>
                    <p>SPBU Pertamina 34.132.05 Perintis Kemerdekaan Jakarta Timur</p>
                    <p>SPBU Pertamina (M. Kahfi II)</p>
                    <p>Kalibata City</p>
                    <p>Ruko MOI</p>
                    <p>FX Mall Sudirman (Relocation)</p>
                    <p>One Bell Park Cinere</p>
                    <p>Menara Standard Chartered</p>
                    <p>AEON Mall Jakarta Garden City</p>
                    <p>Kenangan Heritage</p>
                    <p>Ruko Kalisari</p>
                    <p>Ruko Pecenongan Jakarta Pusat</p>
                    <p>Ruko Sunset Avenue Citra 8</p>
                    <p>Ruko Karang Tengah Lebak Bulus</p>
                    <p>Ruko Sedayu City</p>
                    <p>Ruko Bendungan Hilir (FCK)</p>
                    <p>Ruko Malaka Sari</p>
                    <p>Ruko Mandala Tomang</p>
                    <p>Urban Hub Palmerah</p>
                    <p>Kenangan Signature One Satrio</p>
                    <p>Kenangan Signature Gandaria City</p>
                    <p>Kenangan Signature Emporium Mall Pluit</p>
                    <p>Kenangan Signature Mall of Indonesia</p>
                    <p>Kenangan Signature Agora Mall</p>
                </div>
            </div>
        </div>

        <div class="pb-4">
            <button onclick="document.getElementById('konten2').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-8 lg:pr-80 lg:pl-80">
                <span>Jawa Barat</span>
                <span>+</span>
            </button>
            <div id="konten2" class="hidden text-sm px-10 lg:pl-80 lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Rest Area KM 57</p>
                    <p>RSUP Dr Hasan Sadikin Bandung</p>
                    <p>Ruko Buah Batu</p>
                    <p>Ruko Taman Kopo Indah 2</p>
                    <p>Ruko Otista Subang</p>
                    <p>Ruko Veteran Purwakarta</p>
                    <p>RS Mitra Plumbon (Container)</p>
                    <p>Djunjunan Pasteur Bandung (DT)</p>
                    <p>Metro Indah Mall</p>
                    <p>SPBU 34.40310 Cibiru (Container)</p>
                    <p>Ruko Juanda Cikampek</p>
                    <p>Ruko Padasuka Cimahi</p>
                    <p>Ruko Cibaduyut</p>
                    <p>Ruko Paskal</p>
                    <p>Graha POS RE Martadinata</p>
                    <p>Kenangan Signature Summarecon Mall Bandung</p>
                </div>
            </div>
        </div>

        <div class="pb-4">
            <button onclick="document.getElementById('konten3').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-8 lg:pr-80 lg:pl-80">
                <span>Jawa Tengah</span>
                <span>+</span>
            </button>
            <div id="konten3" class="hidden text-sm px-10 lg:pl-80 lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Ruko Ahmad Yani Cilacap</p>
                    <p>Ruko Citraland Tegal</p>
                    <p>Ruko Jl. Sutarto (RSUD Moewardi)</p>
                    <p>Ramai Malioboro</p>
                    <p>Ruko Suharso Purwokerto</p>
                    <p>Ruko Kaliurang Yogyakarta</p>
                    <p>Ruko Kartini Salatiga</p>
                    <p>SPBU Pertamina COCO 41.552.01 Laksda Adisucipto Yogyakarta</p>
                    <p>Stasiun Tawang</p>
                    <p>Rest Area KM 429 Semarang</p>
                    <p>Rest Area Pendopo B</p>
                    <p>Ruko Banyumanik Semarang</p>
                </div>
            </div>
        </div>

        <div class="pb-4">
            <button onclick="document.getElementById('konten4').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-8 lg:pr-80 lg:pl-80">
                <span>Jawa Timur</span>
                <span>+</span>
            </button>
            <div id="konten4" class="hidden text-sm px-10 lg:pl-80 lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Rest Area KM 754</p>
                    <p>Rest Area KM 726</p>
                    <p>Rest Area KM 66 B (Container) Drive Thru</p>
                    <p>BP Pemuda</p>
                    <p>Pakuwon Mall</p>
                    <p>BP Kertajaya Indah</p>
                    <p>Stasiun Gubeng Surabaya</p>
                    <p>SPBU Pertamina (Ngagel)</p>
                    <p>Tunjungan Plaza 3</p>
                    <p>Ruko G Walk</p>
                    <p>Pakuwon City Mall</p>
                    <p>Ruko Ngagel</p>
                    <p>Ruko Avenue A-6 (MERR Surabaya)</p>
                    <p>Ruko Wiyung Surabaya</p>
                    <p>SPBU Pertamina 54.612.36 Jenggolo</p>
                    <p>SPBU Pertamina 54.612.55 Tropodo Sidoarjo</p>
                    <p>Ruko Hayam Wuruk Kediri</p>
                    <p>Ruko Wachid Hasyim Kediri</p>
                    <p>Sulawesi Surabaya</p>
                    <p>Grand Harvest Surabaya</p>
                    <p>Kenangan Signature Galaxy Mall 3</p>
                </div>
            </div>
        </div>

        <div class="pb-4">
            <button onclick="document.getElementById('konten5').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-8 lg:pr-80 lg:pl-80">
                <span>Bali</span>
                <span>+</span>
            </button>
            <div id="konten5" class="hidden text-sm px-10 lg:pl-80 lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Renon Bali</p>
                </div>
            </div>
        </div>

        <div class="pb-4">
            <button onclick="document.getElementById('konten6').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-8 lg:pr-80 lg:pl-80">
                <span>Sumatera</span>
                <span>+</span>
            </button>
            <div id="konten6" class="hidden text-sm px-10 lg:pl-80 lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Manado Town Square</p>
                    <p>Gatot Subroto Medan (Drive Thru)</p>
                    <p>Centre Point Medan</p>
                    <p>Deli Park</p>
                    <p>Ruko Komplek OCBC Medan</p>
                    <p>Ruko M. Yamin Medan</p>
                    <p>Ruko Jl. Krakatau Medan</p>
                    <p>SPBU H. Anif Cemara Asri</p>
                    <p>Medan Fair</p>
                    <p>Singapore Station 2 Adam Malik</p>
                    <p>Ruko Setiabudi Medan (Relocation)</p>
                    <p>Ruko JCity Square</p>
                    <p>Ruko Sultan Hasanuddin Binjai</p>
                    <p>SPBU 14.203.1156 Lubuk Pakam Medan</p>
                    <p>Ruko MH Thamrin Tebing Tinggi Medan</p>
                    <p>SPBU Pertamina (AR Hakim Medan)</p>
                    <p>Terminal Kedatangan Domestik Bandara Kualanamu Deli Serdang</p>
                    <p>Singapore Station Brig. Katamso</p>
                    <p>Ruko Glugur Darat - UMSU</p>
                    <p>Kenangan Signature Sun Plaza</p>
                    <p>Ruko Palm Spring Batam</p>
                    <p>Grand Batam Mall</p>
                    <p>SPBU 14.251.583 Khatib Sulaeman Padang (Container)</p>
                    <p>Mall SKA Pekanbaru</p>
                    <p>Ruko Tiban Batam</p>
                    <p>Living World Pekanbaru</p>
                    <p>Batam City Square</p>
                    <p>Ruko Demang Palembang</p>
                    <p>Ruko Ahmad Yani Lampung</p>
                    <p>Ruko Gatot Subroto Banjarmasin</p>
                    <p>Duta Mall Banjarmasin</p>
                    <p>Sipin Jambi (Container) Drive Thru</p>
                    <p>Ruko Beringin Jambi</p>
                </div>
            </div>
        </div>

        <div class="pb-4">
            <button onclick="document.getElementById('konten7').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-8 lg:pr-80 lg:pl-80">
                <span>Kalimantan</span>
                <span>+</span>
            </button>
            <div id="konten7" class="hidden text-sm px-10 lg:pl-80 lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Ruko M Yamin Samarinda</p>
                    <p>Ruko Merak Samarinda</p>
                    <p>Ruko Bung Tomo Samarinda</p>
                    <p>Ruko Ahmad Yani Balikpapan</p>
                    <p>Ruko Alaya Samarinda</p>
                    <p>Big Mall Samarinda</p>
                    <p>Ruko Jl. MT Haryono Balikpapan</p>
                    <p>SPBU Karang Asam</p>
                    <p>Samarinda Central Plaza</p>
                    <p>Plaza Bunsay (Drive Thru)</p>
                    <p>E Walk Balikpapan</p>
                    <p>Ruko Ahmad Muksin Tenggarong</p>
                    <p>Ruko Ir H Juanda Samarinda</p>
                </div>
            </div>
        </div>

        <div class="pb-4">
            <button onclick="document.getElementById('konten8').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-8 lg:pr-80 lg:pl-80">
                <span>Sulawesi</span>
                <span>+</span>
            </button>
            <div id="konten8" class="hidden text-sm px-10 lg:pl-80 lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Ruko Edi Sabara Kendari</p>
                    <p>Ruko Andounohu Kendari SPBU Pertamina (Perintis Makassar)</p>
                    <p>Ruko A. Yani Makassar</p>
                    <p>Ruko Alauddin</p>
                    <p>Ruko Perintis Makassar</p>
                    <p>Trans Studio Mall Makassar</p>
                    <p>Mall Ratu Indah Makassar</p>
                    <p>Ruko Citraland Celebes Makassar</p>
                    <p>Ruko Pallangga Gowa</p>
                    <p>Ruko Jendral Sudirman Maros</p>
                </div>
            </div>
        </div>


    </section>
@endsection
