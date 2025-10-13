@extends('layouts.app')

@section('title', 'kiss-food-selection')

@section('content')
    <section class="relative">
        <img src="{{ asset('images/LP-KISS-OUTLET.webp') }}" alt="Dreamy" class="w-full h-auto">
    </section>

    <section class="pt-16 lg:pt-24">
        <h3 class="text-xl  font-semibold text-center">
            BELI LANGSUNG DI SINI
        </h3>

        <div class="flex justify-center pt-6 pb-10">
            <form action="" method="get">
                <button type="submit"
                    class="text-xl lg:text-2xl font-extrabold text-white text-center w-56 h-16 lg:w-64 lg:h-24 rounded-full 
                    bg-[#8b0000] shadow-lg">
                    APLIKASI <br> KOPI KENANGAN
                </button>
            </form>
        </div>
    </section>

    <section class="flex flex-col lg:flex-row justify-center gap-4">
        <div class="lg:w-1/2 flex justify-center">
            <img src="{{ asset('images/CETLET-09.webp') }}" alt="Cek" class="w-96 lg:w-[500px] h-auto object-contain">
        </div>

        <div class="lg:w-1/2 px-8">
            <div class="lg:mr-96 border-b border-gray-300 py-4">
                <button onclick="document.getElementById('jabodetabek').classList.toggle('hidden')"
                    class="text-base font-bold flex justify-between items-center w-full">
                    <span>JABODETABEK</span>
                    <span>+</span>
                </button>
            </div>
            <div id="jabodetabek" class="hidden text-sm lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Baywalk Pluit</p>
                    <p>BP Ciater Pamulang</p>
                    <p>BP KHI Boulevard</p>
                    <p>BP Metland</p>
                    <p>Cilangkap</p>
                    <p>Cilendek Bogor</p>
                    <p>Cipete Raya</p>
                    <p>City Plaza Wisma Mulia</p>
                    <p>Emporium Mall Pluit</p>
                    <p>Gandaria City</p>
                    <p>Grand Batavia</p>
                    <p>Green Pramuka Square</p>
                    <p>Jaticempaka Kota Bekasi</p>
                    <p>Kalibata City</p>
                    <p>Kemayoran</p>
                    <p>Kyai Maja</p>
                    <p>Lippo Mall Puri 2</p>
                    <p>Living World Alam Sutera</p>
                    <p>Mall @Bassura</p>
                    <p>Mall Cipinang Indah</p>
                    <p>Mall Ciputra Jakarta</p>
                    <p>Mangkuluhur City</p>
                    <p>Margo City Depok</p>
                    <p>One Bell Park Cinere</p>
                    <p>Pacific Place</p>
                    <p>Pasar Pagi Mangga Dua</p>
                    <p>Pasaraya Blok M</p>
                    <p>Plaza Slipi Jaya</p>
                    <p>Pluit Village Mall</p>
                    <p>Puri Indah Mall</p>
                    <p>Raffles Square Juanda Jakarta</p>
                    <p>RC Veteran Container (Drive Thru)</p>
                    <p>Rest Area KM 13,5</p>
                    <p>Ruko Arundina Cibubur</p>
                    <p>Ruko Bandara Mas</p>
                    <p>Ruko Boulevard Kelapa Gading</p>
                    <p>Ruko Ceger</p>
                    <p>Ruko Cempaka Putih</p>
                    <p>Ruko Cideng</p>
                    <p>Ruko Cilandak KKO</p>
                    <p>Ruko Cileungsi</p>
                    <p>Ruko Cipayung</p>
                    <p>Ruko Cisarua Puncak</p>
                    <p>Ruko Citra 6</p>
                    <p>Ruko Cordoba Green Lake City</p>
                    <p>Ruko Daan Mogot</p>
                    <p>Ruko Danau Sunter Utara</p>
                    <p>Ruko Dewi Sartika</p>
                    <p>Ruko Duta Mas Jelambar</p>
                    <p>Ruko Elang Laut</p>
                    <p>Ruko Gading Serpong</p>
                    <p>Ruko Gandul</p>
                    <p>Ruko Grand Galaxy City Bekasi</p>
                    <p>Ruko Green Lake Sunter</p>
                    <p>Ruko Greenvile</p>
                    <p>Ruko Jalan Bek. Murad</p>
                    <p>Ruko Jalan Tebet Raya</p>
                    <p>Ruko Jatimakmur</p>
                    <p>Ruko Joglo</p>
                    <p>Ruko Karang Tengah</p>
                    <p>Ruko Kelapa Dua Depok</p>
                    <p>Ruko Kramat Jaya Koja</p>
                    <p>Ruko Kranggan</p>
                    <p>Ruko Lebak Bulus</p>
                    <p>Ruko Legenda Wisata</p>
                    <p>Ruko Mampang Business Park</p>
                    <p>Ruko Meruya Selatan Jakarta</p>
                    <p>Ruko Metro Pondok Indah</p>
                    <p>Ruko Moh Toha Tangerang</p>
                    <p>Ruko Otista</p>
                    <p>Ruko Parung</p>
                    <p>Ruko Pasar Rebo</p>
                    <p>Ruko Pasirkuda Ciomas</p>
                    <p>Ruko Pesanggrahan</p>
                    <p>Ruko Pomad</p>
                    <p>Ruko Pondok Bambu</p>
                    <p>Ruko Poris</p>
                    <p>Ruko Puri Beta</p>
                    <p>Ruko Radio Dalam</p>
                    <p>Ruko Sukahati Cibinong</p>
                    <p>Ruko Surya Kencana Pamulang</p>
                    <p>Ruko Taman Mutiara Palem</p>
                    <p>Ruko Tapos Pekapuran Depok</p>
                    <p>Ruko Tole Iskandar</p>
                    <p>Ruko Topaz Summarecon Bekasi</p>
                    <p>Ruko UIN</p>
                    <p>Rumah Kenangan</p>
                    <p>Sahid Sudirman</p>
                    <p>Shinta Tangerang</p>
                    <p>Skyline Building</p>
                    <p>Soho Pancoran</p>
                    <p>SPBU 34-16920 Cilangkap</p>
                    <p>SPBU Cibogo</p>
                    <p>SPBU Pertamina COCO 31.103.03 Cikini</p>
                    <p>SPBU Pertamina M. Kahfi II</p>
                    <p>Stasiun Duri</p>
                    <p>Stasiun KCJB Halim</p>
                    <p>Stasiun Senen</p>
                    <p>The Breeze</p>
                    <p>Tokyo Hub Pantai Indah Kapuk 2</p>
                    <p>Universitas Indonesia</p>
                    <p>Wisma KEIAI</p>
                </div>
            </div>

            <div class="lg:mr-96 border-b border-gray-300 py-4">
                <button onclick="document.getElementById('banten').classList.toggle('hidden')"
                    class="text-base font-bold flex justify-between items-center w-full">
                    <span>BANTEN</span>
                    <span>+</span>
                </button>
            </div>
            <div id="banten" class="hidden text-sm lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Ruko Citraland Puri Serang</p>
                    <p>Ruko Serang</p>
                </div>
            </div>

            <div class="lg:mr-96 border-b border-gray-300 py-4">
                <button onclick="document.getElementById('jawabarat').classList.toggle('hidden')"
                    class="text-base font-bold flex justify-between items-center w-full">
                    <span>JAWA BARAT</span>
                    <span>+</span>
                </button>
            </div>
            <div id="jawabarat" class="hidden text-sm lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>BP Rest Area KM 72</p>
                    <p>Cirebon Super Block</p>
                    <p>Djunjunan Pasteur Bandung</p>
                    <p>Grage Mall Cirebon</p>
                    <p>Paris Van Java</p>
                    <p>Plaza Asia</p>
                    <p>Ruko Antapani</p>
                    <p>Ruko Buah Batu</p>
                    <p>Ruko Bungursari</p>
                    <p>Ruko Cibaduyut</p>
                    <p>Ruko Graha Siliwangi Sukabumi</p>
                    <p>Ruko Juanda Cikampek</p>
                    <p>Ruko Kondangjaya Karawang</p>
                    <p>Ruko Kota Baru Parahyangan Bandung</p>
                    <p>Ruko Lembang Bandung Barat</p>
                    <p>Ruko Mall Cikampek</p>
                    <p>Ruko Margacinta</p>
                    <p>Ruko Otista Subang</p>
                    <p>Ruko Perjuangan Cirebon</p>
                    <p>Ruko Rancaekek</p>
                    <p>Ruko Syeh Quro Karawang</p>
                    <p>Ruko Taman Kopo Indah 2</p>
                    <p>Shell Cirebon</p>
                    <p>Shell Citraland Cirebon</p>
                    <p>Ubertos</p>
                </div>
            </div>

            <div class="lg:mr-96 border-b border-gray-300 py-4">
                <button onclick="document.getElementById('jawatengah').classList.toggle('hidden')"
                    class="text-base font-bold flex justify-between items-center w-full">
                    <span>JAWA TENGAH</span>
                    <span>+</span>
                </button>
            </div>
            <div id="jawatengah" class="hidden text-sm lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Bandara Ahmad Yani Semarang</p>
                    <p>DP Mall</p>
                    <p>Jl. Majapahit No. 324 Semarang</p>
                    <p>Lagoon Avenue Sungkono</p>
                    <p>Margorejo Surabaya</p>
                    <p>Pacific Mall Tegal</p>
                    <p>Paragon Mall Semarang</p>
                    <p>Rest Area 260B</p>
                    <p>Rest Area 360B Batang</p>
                    <p>Rest Area KM 429 Semarang</p>
                    <p>Rest Area Pendopo B</p>
                    <p>RSUP Dr. Sardjito Yogyakarta</p>
                    <p>Ruko Ahmad Yani Cilacap</p>
                    <p>Ruko Citraland Tegal</p>
                    <p>Ruko IBC Garut</p>
                    <p>Ruko Jl. Sutarto (RSUD Moewardi)</p>
                    <p>Ruko Kaliurang Yogyakarta</p>
                    <p>Ruko Kawi</p>
                    <p>Ruko Ngaliyan</p>
                    <p>Ruko Sokaraja</p>
                    <p>Ruko Suharso Purwokerto</p>
                    <p>Ruko Tlogosari Semarang</p>
                    <p>Stasiun Solo Balapan</p>
                </div>
            </div>

            <div class="lg:mr-96 border-b border-gray-300 py-4">
                <button onclick="document.getElementById('jawatimur').classList.toggle('hidden')"
                    class="text-base font-bold flex justify-between items-center w-full">
                    <span>JAWA TIMUR</span>
                    <span>+</span>
                </button>
            </div>
            <div id="jawatimur" class="hidden text-sm lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>BP Kertajaya Indah</p>
                    <p>Galaxy Mall 3 Surabaya</p>
                    <p>Rest Area 725A Gresik (Container) Drive Thru</p>
                    <p>Rest Area KM 66 A (Container)</p>
                    <p>Rest Area KM 66 B (Container) Drive Thru</p>
                    <p>Rest Area KM 726</p>
                    <p>Rest Area KM 754</p>
                    <p>RSUD Sidoarjo Jawa Timur</p>
                    <p>Ruko Avenue A-6 (MERR Surabaya)</p>
                    <p>Ruko G Walk</p>
                    <p>Ruko Manyar Surabaya</p>
                    <p>Ruko Ngagel</p>
                    <p>Ruko Wiyung Surabaya</p>
                </div>
            </div>

            <div class="lg:mr-96 border-b border-gray-300 py-4">
                <button onclick="document.getElementById('bali').classList.toggle('hidden')"
                    class="text-base font-bold flex justify-between items-center w-full">
                    <span>BALI</span>
                    <span>+</span>
                </button>
            </div>
            <div id="bali" class="hidden text-sm lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Level 21 Mall Bali</p>
                    <p>Renon Bali</p>
                    <p>Ruko Batubulan</p>
                    <p>Ruko Canggu Raya Bali</p>
                    <p>Ruko Dewi Sri</p>
                    <p>Ruko Teuku Umar Bali</p>
                </div>
            </div>

            <div class="lg:mr-96 border-b border-gray-300 py-4">
                <button onclick="document.getElementById('sumatra').classList.toggle('hidden')"
                    class="text-base font-bold flex justify-between items-center w-full">
                    <span>SUMATRA</span>
                    <span>+</span>
                </button>
            </div>
            <div id="sumatra" class="hidden text-sm lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Opi Mall</p>
                    <p>Palembang Icon</p>
                    <p>Palembang Square</p>
                    <p>Ruko Arau Padang</p>
                    <p>Ruko Demang Palembang</p>
                    <p>Ruko Gajah Mada Padang</p>
                    <p>Ruko Komplek OCBC Medan</p>
                    <p>Ruko Lemabang Palembang</p>
                    <p>Ruko M. Yamin Medan</p>
                    <p>Ruko Merci Medan</p>
                    <p>Ruko Nyak Makam Aceh</p>
                    <p>Ruko Palembang Trade Center</p>
                    <p>Ruko Pematang Siantar</p>
                    <p>Ruko Setiabudi Medan</p>
                    <p>Ruko Sultan Hasanuddin Binjai</p>
                    <p>Ruko Sutomo Padang</p>
                    <p>Ruko Tarandam</p>
                    <p>Singapore Station M. Isa</p>
                    <p>Sipin Jambi Drive Thru (Container)</p>
                    <p>SPBU 14.251.583 Khatib Sulaeman Padang (Container)</p>
                    <p>Thamrin Plaza</p>
                </div>
            </div>

            <div class="lg:mr-96 border-b border-gray-300 py-4">
                <button onclick="document.getElementById('sulawesi').classList.toggle('hidden')"
                    class="text-base font-bold flex justify-between items-center w-full">
                    <span>SULAWESI</span>
                    <span>+</span>
                </button>
            </div>
            <div id="sulawesi" class="hidden text-sm lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Ruko A. Yani Makassar</p>
                    <p>Ruko Alauddin</p>
                    <p>Ruko Edi Sabara Kendari</p>
                    <p>Ruko Rabam Kendari</p>
                    <p>Ruko Sam Ratulangi Manado</p>
                    <p>Ruko Sudirman Manado</p>
                    <p>SPBU Pertamina (Perintis Makassar)</p>
                    <p>Transmart Kawanua</p>
                </div>
            </div>

            <div class="lg:mr-96 border-b border-gray-300 py-4">
                <button onclick="document.getElementById('riau').classList.toggle('hidden')"
                    class="text-base font-bold flex justify-between items-center w-full">
                    <span>RIAU</span>
                    <span>+</span>
                </button>
            </div>
            <div id="riau" class="hidden text-sm lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Botania Batam</p>
                    <p>Grand Batam Mall</p>
                    <p>Mall SKA Pekanbaru</p>
                    <p>Ruko Gobah Pekanbaru</p>
                    <p>Ruko Hang Tuah Ujung</p>
                    <p>Ruko Jl. Riau</p>
                    <p>Ruko Panam Pekanbaru</p>
                    <p>Ruko Sudirman Awal Bros Pekanbaru</p>
                </div>
            </div>

            <div class="lg:mr-96 border-b border-gray-300 py-4">
                <button onclick="document.getElementById('lampung').classList.toggle('hidden')"
                    class="text-base font-bold flex justify-between items-center w-full">
                    <span>LAMPUNG</span>
                    <span>+</span>
                </button>
            </div>
            <div id="lampung" class="hidden text-sm lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Metro Lampung</p>
                    <p>Ruko Ahmad Yani Lampung</p>
                    <p>Ruko Antasari Lampung</p>
                    <p>Ruko Kemiling</p>
                    <p>ZA Pagar Alam Kedaton</p>
                </div>
            </div>

            <div class="lg:mr-96 border-b border-gray-300 py-4">
                <button onclick="document.getElementById('jambi').classList.toggle('hidden')"
                    class="text-base font-bold flex justify-between items-center w-full">
                    <span>JAMBI</span>
                    <span>+</span>
                </button>
            </div>
            <div id="jambi" class="hidden text-sm lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Jambi Prima Mall</p>
                    <p>Ruko Beringin Jambi</p>
                    <p>Ruko Selincah Jambi</p>
                    <p>WTC Batanghari</p>
                </div>
            </div>

            <div class="lg:mr-96 border-b border-gray-300 py-4">
                <button onclick="document.getElementById('kalimantan').classList.toggle('hidden')"
                    class="text-base font-bold flex justify-between items-center w-full">
                    <span>KALIMANTAN</span>
                    <span>+</span>
                </button>
            </div>
            <div id="kalimantan" class="hidden text-sm lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Big Mall Samarinda</p>
                    <p>E Walk Balikpapan</p>
                    <p>Ruko Ahmad Yani Balikpapan</p>
                    <p>Ruko Bung Tomo Samarinda</p>
                    <p>Ruko Jl. MT Haryono Balikpapan</p>
                    <p>Ruko M Yamin Samarinda</p>
                    <p>Ruko Merak Samarinda</p>
                    <p>Ruko MT Haryono Balikpapan 2</p>
                    <p>Ruko Mulawarman Balikpapan</p>
                    <p>SPBU COCO Pasar Kemuning Banjarbaru</p>
                </div>
            </div>

        </div>
    </section>

    <section class="flex flex-col lg:flex-row justify-center gap-4 mt-16 lg:mt-24">
        <div class="lg:w-1/2 flex justify-center">
            <img src="{{ asset('images/CEK-OUTLET-08.webp') }}" alt="Cek"
                class="w-96 lg:w-[500px] h-auto object-contain">
        </div>

        <div class="lg:w-1/2 px-8">
            <div class="lg:mr-96 border-b border-gray-300 py-4">
                <button onclick="document.getElementById('jabodetabek').classList.toggle('hidden')"
                    class="text-base font-bold flex justify-between items-center w-full">
                    <span>JABODETABEK</span>
                    <span>+</span>
                </button>
            </div>
            <div id="jabodetabek" class="hidden text-sm lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Baywalk Pluit</p>
                    <p>BP Ciater Pamulang</p>
                    <p>BP KHI Boulevard</p>
                    <p>BP Metland</p>
                    <p>Cilangkap</p>
                    <p>Cilendek Bogor</p>
                    <p>Cipete Raya</p>
                    <p>City Plaza Wisma Mulia</p>
                    <p>Emporium Mall Pluit</p>
                    <p>Gandaria City</p>
                    <p>Grand Batavia</p>
                    <p>Green Pramuka Square</p>
                    <p>Jaticempaka Kota Bekasi</p>
                    <p>Kalibata City</p>
                    <p>Kemayoran</p>
                    <p>Kyai Maja</p>
                    <p>Lippo Mall Puri 2</p>
                    <p>Living World Alam Sutera</p>
                    <p>Mall @Bassura</p>
                    <p>Mall Cipinang Indah</p>
                    <p>Mall Ciputra Jakarta</p>
                    <p>Mangkuluhur City</p>
                    <p>Margo City Depok</p>
                    <p>One Bell Park Cinere</p>
                    <p>Pacific Place</p>
                    <p>Pasar Pagi Mangga Dua</p>
                    <p>Pasaraya Blok M</p>
                    <p>Plaza Slipi Jaya</p>
                    <p>Pluit Village Mall</p>
                    <p>Puri Indah Mall</p>
                    <p>Raffles Square Juanda Jakarta</p>
                    <p>RC Veteran Container (Drive Thru)</p>
                    <p>Rest Area KM 13,5</p>
                    <p>Ruko Arundina Cibubur</p>
                    <p>Ruko Bandara Mas</p>
                    <p>Ruko Boulevard Kelapa Gading</p>
                    <p>Ruko Ceger</p>
                    <p>Ruko Cempaka Putih</p>
                    <p>Ruko Cideng</p>
                    <p>Ruko Cilandak KKO</p>
                    <p>Ruko Cileungsi</p>
                    <p>Ruko Cipayung</p>
                    <p>Ruko Cisarua Puncak</p>
                    <p>Ruko Citra 6</p>
                    <p>Ruko Cordoba Green Lake City</p>
                    <p>Ruko Daan Mogot</p>
                    <p>Ruko Danau Sunter Utara</p>
                    <p>Ruko Dewi Sartika</p>
                    <p>Ruko Duta Mas Jelambar</p>
                    <p>Ruko Elang Laut</p>
                    <p>Ruko Gading Serpong</p>
                    <p>Ruko Gandul</p>
                    <p>Ruko Grand Galaxy City Bekasi</p>
                    <p>Ruko Green Lake Sunter</p>
                    <p>Ruko Greenvile</p>
                    <p>Ruko Jalan Bek. Murad</p>
                    <p>Ruko Jalan Tebet Raya</p>
                    <p>Ruko Jatimakmur</p>
                    <p>Ruko Joglo</p>
                    <p>Ruko Karang Tengah</p>
                    <p>Ruko Kelapa Dua Depok</p>
                    <p>Ruko Kramat Jaya Koja</p>
                    <p>Ruko Kranggan</p>
                    <p>Ruko Lebak Bulus</p>
                    <p>Ruko Legenda Wisata</p>
                    <p>Ruko Mampang Business Park</p>
                    <p>Ruko Meruya Selatan Jakarta</p>
                    <p>Ruko Metro Pondok Indah</p>
                    <p>Ruko Moh Toha Tangerang</p>
                    <p>Ruko Otista</p>
                    <p>Ruko Parung</p>
                    <p>Ruko Pasar Rebo</p>
                    <p>Ruko Pasirkuda Ciomas</p>
                    <p>Ruko Pesanggrahan</p>
                    <p>Ruko Pomad</p>
                    <p>Ruko Pondok Bambu</p>
                    <p>Ruko Poris</p>
                    <p>Ruko Puri Beta</p>
                    <p>Ruko Radio Dalam</p>
                    <p>Ruko Sukahati Cibinong</p>
                    <p>Ruko Surya Kencana Pamulang</p>
                    <p>Ruko Taman Mutiara Palem</p>
                    <p>Ruko Tapos Pekapuran Depok</p>
                    <p>Ruko Tole Iskandar</p>
                    <p>Ruko Topaz Summarecon Bekasi</p>
                    <p>Ruko UIN</p>
                    <p>Rumah Kenangan</p>
                    <p>Sahid Sudirman</p>
                    <p>Shinta Tangerang</p>
                    <p>Skyline Building</p>
                    <p>Soho Pancoran</p>
                    <p>SPBU 34-16920 Cilangkap</p>
                    <p>SPBU Cibogo</p>
                    <p>SPBU Pertamina COCO 31.103.03 Cikini</p>
                    <p>SPBU Pertamina M. Kahfi II</p>
                    <p>Stasiun Duri</p>
                    <p>Stasiun KCJB Halim</p>
                    <p>Stasiun Senen</p>
                    <p>The Breeze</p>
                    <p>Tokyo Hub Pantai Indah Kapuk 2</p>
                    <p>Universitas Indonesia</p>
                    <p>Wisma KEIAI</p>
                </div>
            </div>

            <div class="lg:mr-96 border-b border-gray-300 py-4">
                <button onclick="document.getElementById('banten').classList.toggle('hidden')"
                    class="text-base font-bold flex justify-between items-center w-full">
                    <span>BANTEN</span>
                    <span>+</span>
                </button>
            </div>
            <div id="banten" class="hidden text-sm lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Ruko Citraland Puri Serang</p>
                    <p>Ruko Serang</p>
                </div>
            </div>

            <div class="lg:mr-96 border-b border-gray-300 py-4">
                <button onclick="document.getElementById('jawabarat').classList.toggle('hidden')"
                    class="text-base font-bold flex justify-between items-center w-full">
                    <span>JAWA BARAT</span>
                    <span>+</span>
                </button>
            </div>
            <div id="jawabarat" class="hidden text-sm lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>BP Rest Area KM 72</p>
                    <p>Cirebon Super Block</p>
                    <p>Djunjunan Pasteur Bandung</p>
                    <p>Grage Mall Cirebon</p>
                    <p>Paris Van Java</p>
                    <p>Plaza Asia</p>
                    <p>Ruko Antapani</p>
                    <p>Ruko Buah Batu</p>
                    <p>Ruko Bungursari</p>
                    <p>Ruko Cibaduyut</p>
                    <p>Ruko Graha Siliwangi Sukabumi</p>
                    <p>Ruko Juanda Cikampek</p>
                    <p>Ruko Kondangjaya Karawang</p>
                    <p>Ruko Kota Baru Parahyangan Bandung</p>
                    <p>Ruko Lembang Bandung Barat</p>
                    <p>Ruko Mall Cikampek</p>
                    <p>Ruko Margacinta</p>
                    <p>Ruko Otista Subang</p>
                    <p>Ruko Perjuangan Cirebon</p>
                    <p>Ruko Rancaekek</p>
                    <p>Ruko Syeh Quro Karawang</p>
                    <p>Ruko Taman Kopo Indah 2</p>
                    <p>Shell Cirebon</p>
                    <p>Shell Citraland Cirebon</p>
                    <p>Ubertos</p>
                </div>
            </div>

            <div class="lg:mr-96 border-b border-gray-300 py-4">
                <button onclick="document.getElementById('jawatengah').classList.toggle('hidden')"
                    class="text-base font-bold flex justify-between items-center w-full">
                    <span>JAWA TENGAH</span>
                    <span>+</span>
                </button>
            </div>
            <div id="jawatengah" class="hidden text-sm lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Bandara Ahmad Yani Semarang</p>
                    <p>DP Mall</p>
                    <p>Jl. Majapahit No. 324 Semarang</p>
                    <p>Lagoon Avenue Sungkono</p>
                    <p>Margorejo Surabaya</p>
                    <p>Pacific Mall Tegal</p>
                    <p>Paragon Mall Semarang</p>
                    <p>Rest Area 260B</p>
                    <p>Rest Area 360B Batang</p>
                    <p>Rest Area KM 429 Semarang</p>
                    <p>Rest Area Pendopo B</p>
                    <p>RSUP Dr. Sardjito Yogyakarta</p>
                    <p>Ruko Ahmad Yani Cilacap</p>
                    <p>Ruko Citraland Tegal</p>
                    <p>Ruko IBC Garut</p>
                    <p>Ruko Jl. Sutarto (RSUD Moewardi)</p>
                    <p>Ruko Kaliurang Yogyakarta</p>
                    <p>Ruko Kawi</p>
                    <p>Ruko Ngaliyan</p>
                    <p>Ruko Sokaraja</p>
                    <p>Ruko Suharso Purwokerto</p>
                    <p>Ruko Tlogosari Semarang</p>
                    <p>Stasiun Solo Balapan</p>
                </div>
            </div>

            <div class="lg:mr-96 border-b border-gray-300 py-4">
                <button onclick="document.getElementById('jawatimur').classList.toggle('hidden')"
                    class="text-base font-bold flex justify-between items-center w-full">
                    <span>JAWA TIMUR</span>
                    <span>+</span>
                </button>
            </div>
            <div id="jawatimur" class="hidden text-sm lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>BP Kertajaya Indah</p>
                    <p>Galaxy Mall 3 Surabaya</p>
                    <p>Rest Area 725A Gresik (Container) Drive Thru</p>
                    <p>Rest Area KM 66 A (Container)</p>
                    <p>Rest Area KM 66 B (Container) Drive Thru</p>
                    <p>Rest Area KM 726</p>
                    <p>Rest Area KM 754</p>
                    <p>RSUD Sidoarjo Jawa Timur</p>
                    <p>Ruko Avenue A-6 (MERR Surabaya)</p>
                    <p>Ruko G Walk</p>
                    <p>Ruko Manyar Surabaya</p>
                    <p>Ruko Ngagel</p>
                    <p>Ruko Wiyung Surabaya</p>
                </div>
            </div>

            <div class="lg:mr-96 border-b border-gray-300 py-4">
                <button onclick="document.getElementById('bali').classList.toggle('hidden')"
                    class="text-base font-bold flex justify-between items-center w-full">
                    <span>BALI</span>
                    <span>+</span>
                </button>
            </div>
            <div id="bali" class="hidden text-sm lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Level 21 Mall Bali</p>
                    <p>Renon Bali</p>
                    <p>Ruko Batubulan</p>
                    <p>Ruko Canggu Raya Bali</p>
                    <p>Ruko Dewi Sri</p>
                    <p>Ruko Teuku Umar Bali</p>
                </div>
            </div>

            <div class="lg:mr-96 border-b border-gray-300 py-4">
                <button onclick="document.getElementById('sumatra').classList.toggle('hidden')"
                    class="text-base font-bold flex justify-between items-center w-full">
                    <span>SUMATRA</span>
                    <span>+</span>
                </button>
            </div>
            <div id="sumatra" class="hidden text-sm lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Opi Mall</p>
                    <p>Palembang Icon</p>
                    <p>Palembang Square</p>
                    <p>Ruko Arau Padang</p>
                    <p>Ruko Demang Palembang</p>
                    <p>Ruko Gajah Mada Padang</p>
                    <p>Ruko Komplek OCBC Medan</p>
                    <p>Ruko Lemabang Palembang</p>
                    <p>Ruko M. Yamin Medan</p>
                    <p>Ruko Merci Medan</p>
                    <p>Ruko Nyak Makam Aceh</p>
                    <p>Ruko Palembang Trade Center</p>
                    <p>Ruko Pematang Siantar</p>
                    <p>Ruko Setiabudi Medan</p>
                    <p>Ruko Sultan Hasanuddin Binjai</p>
                    <p>Ruko Sutomo Padang</p>
                    <p>Ruko Tarandam</p>
                    <p>Singapore Station M. Isa</p>
                    <p>Sipin Jambi Drive Thru (Container)</p>
                    <p>SPBU 14.251.583 Khatib Sulaeman Padang (Container)</p>
                    <p>Thamrin Plaza</p>
                </div>
            </div>

            <div class="lg:mr-96 border-b border-gray-300 py-4">
                <button onclick="document.getElementById('sulawesi').classList.toggle('hidden')"
                    class="text-base font-bold flex justify-between items-center w-full">
                    <span>SULAWESI</span>
                    <span>+</span>
                </button>
            </div>
            <div id="sulawesi" class="hidden text-sm lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Ruko A. Yani Makassar</p>
                    <p>Ruko Alauddin</p>
                    <p>Ruko Edi Sabara Kendari</p>
                    <p>Ruko Rabam Kendari</p>
                    <p>Ruko Sam Ratulangi Manado</p>
                    <p>Ruko Sudirman Manado</p>
                    <p>SPBU Pertamina (Perintis Makassar)</p>
                    <p>Transmart Kawanua</p>
                </div>
            </div>

            <div class="lg:mr-96 border-b border-gray-300 py-4">
                <button onclick="document.getElementById('riau').classList.toggle('hidden')"
                    class="text-base font-bold flex justify-between items-center w-full">
                    <span>RIAU</span>
                    <span>+</span>
                </button>
            </div>
            <div id="riau" class="hidden text-sm lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Botania Batam</p>
                    <p>Grand Batam Mall</p>
                    <p>Mall SKA Pekanbaru</p>
                    <p>Ruko Gobah Pekanbaru</p>
                    <p>Ruko Hang Tuah Ujung</p>
                    <p>Ruko Jl. Riau</p>
                    <p>Ruko Panam Pekanbaru</p>
                    <p>Ruko Sudirman Awal Bros Pekanbaru</p>
                </div>
            </div>

            <div class="lg:mr-96 border-b border-gray-300 py-4">
                <button onclick="document.getElementById('lampung').classList.toggle('hidden')"
                    class="text-base font-bold flex justify-between items-center w-full">
                    <span>LAMPUNG</span>
                    <span>+</span>
                </button>
            </div>
            <div id="lampung" class="hidden text-sm lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Metro Lampung</p>
                    <p>Ruko Ahmad Yani Lampung</p>
                    <p>Ruko Antasari Lampung</p>
                    <p>Ruko Kemiling</p>
                    <p>ZA Pagar Alam Kedaton</p>
                </div>
            </div>

            <div class="lg:mr-96 border-b border-gray-300 py-4">
                <button onclick="document.getElementById('jambi').classList.toggle('hidden')"
                    class="text-base font-bold flex justify-between items-center w-full">
                    <span>JAMBI</span>
                    <span>+</span>
                </button>
            </div>
            <div id="jambi" class="hidden text-sm lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Jambi Prima Mall</p>
                    <p>Ruko Beringin Jambi</p>
                    <p>Ruko Selincah Jambi</p>
                    <p>WTC Batanghari</p>
                </div>
            </div>

            <div class="lg:mr-96 border-b border-gray-300 py-4">
                <button onclick="document.getElementById('kalimantan').classList.toggle('hidden')"
                    class="text-base font-bold flex justify-between items-center w-full">
                    <span>KALIMANTAN</span>
                    <span>+</span>
                </button>
            </div>
            <div id="kalimantan" class="hidden text-sm lg:pr-80">
                <div class="space-y-2 p-4 text-base leading-relaxed">
                    <p>Big Mall Samarinda</p>
                    <p>E Walk Balikpapan</p>
                    <p>Ruko Ahmad Yani Balikpapan</p>
                    <p>Ruko Bung Tomo Samarinda</p>
                    <p>Ruko Jl. MT Haryono Balikpapan</p>
                    <p>Ruko M Yamin Samarinda</p>
                    <p>Ruko Merak Samarinda</p>
                    <p>Ruko MT Haryono Balikpapan 2</p>
                    <p>Ruko Mulawarman Balikpapan</p>
                    <p>SPBU COCO Pasar Kemuning Banjarbaru</p>
                </div>
            </div>
        </div>
    </section>
@endsection
