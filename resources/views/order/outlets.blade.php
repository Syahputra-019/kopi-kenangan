@extends('layouts.app')

@section('title', 'outlets')

@section('content')
    <section class="relative">
        <img src="{{ asset('images/DSC09498.webp') }}" alt="Dreamy" class="w-full h-screen object-cover opacity-3">
    </section>

    <section class="p-8">
        <div class="p-8 lg:p-24 place-items-center">
            <h1 class="text-xl lg:text-2xl text-center font-bold">
                new outlets
            </h1>
        </div>

        <div class="flex flex-col lg:flex-row justify-center gap-4 lg:gap-10 mx-8 lg:ml-40 lg:mr-40 text-center">
            <div class="lg:w-1/3">
                <h3 class="text-base font-bold p-4">SPBU Pertamina(Cibitung Bekasi)</h3>
                <p class="text-sm">
                    SPBU Pertamina 34.17548 Cibitung Bekasi (Container), Jl Raya Gading Griya Lestari Blok G.I / 27
                </p>
            </div>
            <div class="lg:w-1/3">
                <h3 class="text-base font-bold p-4">Ruko Cikarang Utara</h3>
                <p class="text-sm">
                    Ruko Cikarang Utara, Jl. RE. Martadinata No.17, Karangbaru, Kec.Cikarang Utara, Bekasi - Jawa Barat
                </p>
            </div>
            <div class="lg:w-1/3">
                <h3 class="text-base font-bold p-4">City Walk Gajah Mada - Chigo</h3>
                <p class="text-sm">
                    Citywalk Gajah Mada, Lantai Ground Floor, Jl. Gajah Mada No.19-26,Petojo Utara, Kota Jakarta Pusat,
                    10130
                </p>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row justify-center gap-4 lg:gap-10 mx-8 lg:ml-40 lg:mr-40 text-center mt-10">
            <div class="lg:w-1/3">
                <h3 class="text-base font-bold p-4">Summarecon Mall Serpong - Chigo</h3>
                <p class="text-sm">
                    Summarecon Mall Serpong, 2F-249, Jl. Boulevard Raya Gading Serpong, Pakulonan Barat, Kec. Klp. Dua,
                    Tangerang, Banten 15810
                </p>
            </div>
            <div class="lg:w-1/3">
                <h3 class="text-base font-bold p-4">Ruko Sepatan Tangerang</h3>
                <p class="text-sm">
                    Ruko Sepatan Tangerang, Jl. Raya Mauk km 11 no 88 Sepatan, Kecamatan Sepatan, Tangerang Banten 1552
                </p>
            </div>
            <div class="lg:w-1/3">
                <h3 class="text-base font-bold p-4">Ruko Rawa Belong - Chigo</h3>
                <p class="text-sm">
                    Ruko Rawa Belong, Jalan Kebon Jeruk Raya No 11, Rt 006 Rw 012, Jakarta Barat 11530
                </p>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row justify-center gap-4 lg:gap-10 mx-8 lg:ml-40 lg:mr-40 text-center mt-10">
            <div class="lg:w-1/3">
                <h3 class="text-base font-bold p-4">Ruko UIN - Chigo</h3>
                <p class="text-sm">
                    Ruko UIN, l. IR. H Juanda No. 107, Pisangan, Ciputat Timur, Tangerang, Banten 15412
                </p>
            </div>
            <div class="lg:w-1/3">
                <h3 class="text-base font-bold p-4">SPBU Pertamina (Teluk Jambe)</h3>
                <p class="text-sm">
                    SPBU Pertamina 34.41323 Teluk Jambe (Container), Jl. Raya Teluk Jambe No. 5, Telukjambe, Kecamatan,
                    Telukjambe Tim, kabupaten karawang, jawa barat 41361
                </p>
            </div>
            <div class="lg:w-1/3">
                <h3 class="text-base font-bold p-4">Ruko Azeros - Chigo</h3>
                <p class="text-sm">
                    Ruko Azores, Perumahan Banjar WIjaya Blok B7A No 15, Tangerang 15142
                </p>
            </div>
        </div>
    </section>

    <section class="place-items-center p-8 lg:p-24">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d63226.50089744793!2d112.6008836539679!3d-7.930918499172158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1759732830804!5m2!1sid!2sid"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            class="relative w-full h-80 lg:w[700px] lg:h-[700px]"></iframe>

        <div class="p-10 lg:p-20">
            <h3 class="text-xl lg:text-2xl text-center font-bold p-4">868 outlets in 64 Cities</h3>
            <p class="text-sm lg:text-base text-center">Find your nearest Kopi Kenangan outlet!</p>
        </div>

        <div class="pb-4 w-full">
            <button onclick="document.getElementById('jakarta').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-0 lg:pr-40 lg:pl-40">
                <span>Jakarta</span>
                <span>+</span>
            </button>
            <div id="jakarta" class="hidden text-sm px-0 lg:pr-40 lg:pl-40">
                <div class="flex justify-center gap-4 p-2 lg:gap-8 lg:p-4">
                    {{-- 1 --}}
                    <div class="w-1/2 space-y-2 pl-4 text-base leading-relaxed">
                        <p>RDTX Tower (HANA)</p>
                        <p>Tempo Scan Tower</p>
                        <p>Menara Karya</p>
                        <p>Electronic City</p>
                        <p>Mayapada Hospital</p>
                        <p>Lippo Mall Puri</p>
                        <p>Pejaten Village</p>
                        <p>Kyai Maja</p>
                        <p>Mall Kelapa Gading 3</p>
                        <p>Thamrin Residence (HANA)</p>
                        <p>Wisma KEIAI</p>
                        <p>Mall @BASSURA CITY</p>
                        <p>Sopo Del Tower</p>
                        <p>Kelapa Gading Barat (HANA)</p>
                        <p>Lippo Plaza Kramat Jati</p>
                        <p>AEON Mall Jakarta Garden City</p>
                        <p>Pusat Grosir Cililitan</p>
                        <p>Central Park</p>
                        <p>Emporium Pluit</p>
                        <p>Blok M Plaza</p>
                        <p>Mall Metro Cipulir</p>
                        <p>La Codefin Kemang</p>
                        <p>The Vida Kebon Jeruk</p>
                        <p>Grab Kitchen Fatmawati</p>
                        <p>Grab Kitchen Tendean</p>
                        <p>Padang Merdeka Kota Tua</p>
                        <p>Grab Kitchen Kramat</p>
                        <p>Ruko Tanjung Duren</p>
                        <p>Gedung Aurum Container</p>
                        <p>Tamini Square</p>
                        <p>Wisma BNI 46</p>
                        <p>Grab Kitchen Tomang</p>
                        <p>Grab Kitchen Pasar Minggu</p>
                        <p>Bidakara</p>
                        <p>Shell Pasar Minggu</p>
                        <p>Shell Gunung Sahari</p>
                        <p>RS. Saint Carolus</p>
                        <p>The Crest West Vista</p>
                        <p>SPBU Jalan Supomo</p>
                        <p>Ruko Jalan Bek. Murad</p>
                        <p>Mandiri Lounge Senayan City</p>
                        <p>Mall Artha Gading</p>
                        <p>Ruko MOI</p>
                        <p>Shell Kedoya (Container)</p>
                        <p>Green Terrace Mall</p>
                        <p>Ruko Rawa Belong</p>
                        <p>Ruko Cideng</p>
                        <p>Point Square</p>
                        <p>Ruko Jalan Tebet Raya</p>
                        <p>Ruko Radio Dalam</p>
                        <p>Ruko Citra 6</p>
                        <p>Ruko Taman Mutiara Palem</p>
                        <p>Plaza Bintaro Satoe (Superindo)</p>
                        <p>SPBU Pertamina COCO Lenteng Agung</p>
                        <p>Cibis Tower 9</p>
                        <p>Generali Tower</p>
                        <p>Naga Swalayan Ciracas</p>
                    </div>
                    {{-- 2 --}}
                    <div class="space-y-2 w-1/2 text-base leading-relaxed">
                        <p>Menara Standart Chartered</p>
                        <p>Setiabudi One</p>
                        <p>Kota Kasablanka</p>
                        <p>Grand Indonesia (L&amp;C)</p>
                        <p>Plaza Oleos (HANA)</p>
                        <p>Capital Place</p>
                        <p>Skyline Building</p>
                        <p>Graha CIMB Niaga</p>
                        <p>Sahid Sudirman</p>
                        <p>Cibubur Junction</p>
                        <p>Pasaraya Blok M</p>
                        <p>Summitmas Tower</p>
                        <p>Plaza Festival</p>
                        <p>Baywalk Mall Pluit</p>
                        <p>Menara Jamsostek</p>
                        <p>Lotte Mart Fatmawati</p>
                        <p>City Plaza Jatinegara</p>
                        <p>Gandaria City</p>
                        <p>Mall Taman Anggrek</p>
                        <p>Citywalk Gajah Mada (L&amp;C)</p>
                        <p>ITC Cempaka Mas</p>
                        <p>ITC Mangga Dua</p>
                        <p>Plaza Indonesia</p>
                        <p>Smartfren Sabang</p>
                        <p>Mall Ciputra Jakarta</p>
                        <p>Lippo Mall Puri (2)</p>
                        <p>NEO SOHO (L&amp;C)</p>
                        <p>Grab Kitchen Cengkareng</p>
                        <p>UOB Plaza</p>
                        <p>Citra Towers Kemayoran</p>
                        <p>Cilandak Town Square</p>
                        <p>Lokasari Square</p>
                        <p>Plaza Senayan</p>
                        <p>Ruko PIK</p>
                        <p>Artha Graha</p>
                        <p>Shell Antasari</p>
                        <p>RS. Polri</p>
                        <p>Thamrin City</p>
                        <p>SPBU Arta Gading</p>
                        <p>Menara Digitaraya</p>
                        <p>One Bell Park Cinere</p>
                        <p>Ruko Cempaka Putih</p>
                        <p>Ruko Rawamangun (Jl. Paus)</p>
                        <p>Cik Ditiro Menteng (Container)</p>
                        <p>Lotte Grosir Kelapa Gading</p>
                        <p>Plaza Kuningan</p>
                        <p>Shell Cipinang</p>
                        <p>Plaza Kalibata</p>
                        <p>Ruko Lebak Bulus</p>
                        <p>Food Hub Cyber Tower 2</p>
                        <p>Metro Park Residence</p>
                        <p>Ruko Metro Pondok Indah</p>
                        <p>Senayan Park</p>
                        <p>FX Mall Sudirman</p>
                        <p>BP Meruya (Container)</p>
                        <p>Superindo M. Kahfi (Container)</p>
                        <p>Ruko Cipayung</p>
                        <p>SPBU Pertamina COCO S Parman</p>
                        <p>BP Meruya (Container)</p>
                    </div>
                    {{-- 3 --}}
                    <div class="space-y-2 w-1/2 pr-4 text-base leading-relaxed">
                        <p>Menara Standart Chartered</p>
                        <p>Setiabudi One</p>
                        <p>Kota Kasablanka</p>
                        <p>Grand Indonesia (L&amp;C)</p>
                        <p>Plaza Oleos (HANA)</p>
                        <p>Capital Place</p>
                        <p>Skyline Building</p>
                        <p>Graha CIMB Niaga</p>
                        <p>Sahid Sudirman</p>
                        <p>Cibubur Junction</p>
                        <p>Pasaraya Blok M</p>
                        <p>Summitmas Tower</p>
                        <p>Plaza Festival</p>
                        <p>Baywalk Mall Pluit</p>
                        <p>Menara Jamsostek</p>
                        <p>Lotte Mart Fatmawati</p>
                        <p>City Plaza Jatinegara</p>
                        <p>Gandaria City</p>
                        <p>Mall Taman Anggrek</p>
                        <p>Citywalk Gajah Mada (L&amp;C)</p>
                        <p>ITC Cempaka Mas</p>
                        <p>ITC Mangga Dua</p>
                        <p>Plaza Indonesia</p>
                        <p>Smartfren Sabang</p>
                        <p>Mall Ciputra Jakarta</p>
                        <p>Lippo Mall Puri (2)</p>
                        <p>NEO SOHO (L&amp;C)</p>
                        <p>Grab Kitchen Cengkareng</p>
                        <p>UOB Plaza</p>
                        <p>Citra Towers Kemayoran</p>
                        <p>Cilandak Town Square</p>
                        <p>Lokasari Square</p>
                        <p>Plaza Senayan</p>
                        <p>Ruko PIK</p>
                        <p>Artha Graha</p>
                        <p>Shell Antasari</p>
                        <p>RS. Polri</p>
                        <p>Thamrin City</p>
                        <p>SPBU Arta Gading</p>
                        <p>Menara Digitaraya</p>
                        <p>One Bell Park Cinere</p>
                        <p>Ruko Cempaka Putih</p>
                        <p>Ruko Rawamangun (Jl. Paus)</p>
                        <p>Cik Ditiro Menteng (Container)</p>
                        <p>Lotte Grosir Kelapa Gading</p>
                        <p>Plaza Kuningan</p>
                        <p>Shell Cipinang</p>
                        <p>Plaza Kalibata</p>
                        <p>Ruko Lebak Bulus</p>
                        <p>Food Hub Cyber Tower 2</p>
                        <p>Metro Park Residence</p>
                        <p>Ruko Metro Pondok Indah</p>
                        <p>Senayan Park</p>
                        <p>FX Mall Sudirman</p>
                        <p>BP Meruya (Container)</p>
                        <p>Superindo M. Kahfi (Container)</p>
                        <p>Ruko Cipayung</p>
                        <p>SPBU Pertamina COCO S Parman</p>
                        <p>BP Meruya (Container)</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-4 w-full">
            <button onclick="document.getElementById('Tangerang').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-0 lg:pr-40 lg:pl-40">
                <span>Tangerang</span>
                <span>+</span>
            </button>
            <div id="Tangerang" class="hidden text-sm px-0 lg:pr-40 lg:pl-40">
                <div class="flex justify-center gap-4 lg:gap-8 p-2 lg:p-4">
                    {{-- 1 --}}
                    <div class="w-1/2 space-y-2 pl-4 text-base leading-relaxed">
                        <p>Summarecon Mall Serpong</p>
                        <p>Giant Supermarket Bintaro</p>
                        <p>The Breeze</p>
                        <p>Lotte Mart Bintaro</p>
                        <p>Aeon Mall BSD</p>
                        <p>Paramount BSD</p>
                        <p>BP Metland</p>
                        <p>Bintaro Jaya Exchange</p>
                        <p>TerasKota</p>
                        <p>Transpark Bintaro</p>
                        <p>Ruko UIN</p>
                        <p>Mall Balekota Tangerang</p>
                        <p>CBD Ciledug</p>
                        <p>Padang Merdeka Bintaro</p>
                        <p>Living Plaza Pamulang</p>
                    </div>
                    {{-- 2 --}}
                    <div class="space-y-2 w-1/2 text-base leading-relaxed">
                        <p>Bandara Soekarno Hatta Terminal 2D</p>
                        <p>Living World Alam Sutera</p>
                        <p>AEON BSD (Food Court)</p>
                        <p>Garuda HQ</p>
                        <p>Supermall Karawaci</p>
                        <p>Bintaro Plaza</p>
                        <p>Shell Serpong</p>
                        <p>Shell Pamulang</p>
                        <p>BP Ciater Pamulang</p>
                        <p>Ruko Tangerang City</p>
                        <p>Ruko Cipondoh</p>
                        <p>Ruko Palem Semi Karawaci</p>
                        <p>RS Medika BSD</p>
                        <p>Mall Ciputra Citraraya</p>
                        <p>Giant Ekspres Pondok Cabe Gaplek</p>
                    </div>
                    {{-- 3 --}}
                    <div class="space-y-2 w-1/2 pr-4 text-base leading-relaxed">
                        <p>BP BSD Delatinos</p>
                        <p>Grab Kitchen Pondok Aren</p>
                        <p>Grab Kitchen Karawaci</p>
                        <p>Giant Supermarket BSD</p>
                        <p>Living Plaza Bintaro</p>
                        <p>Shell Suwarna Cengkareng</p>
                        <p>City Plaza Kotabumi</p>
                        <p>Shell Puspitek</p>
                        <p>Tangerang City Mall</p>
                        <p>Giant Supermarket Rempoa</p>
                        <p>Ruko Azores</p>
                        <p>Ruko Daan Mogot</p>
                        <p>Padang Merdeka Bez Serpong</p>
                        <p>Summarecon Digital Center (SDC Serpong)</p>
                        <p>Ruko Curug</p>
                        <p>SPBU DODO Pertamina Cirendeu Raya</p>
                        <p>Serpong Paradise Walk</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-4 w-full">
            <button onclick="document.getElementById('Sidoarjo').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-0 lg:pr-40 lg:pl-40">
                <span>Sidoarjo</span>
                <span>+</span>
            </button>
            <div id="Sidoarjo" class="hidden text-sm px-0 lg:pr-40 lg:pl-40">
                <div class="flex justify-center gap-4 lg:gap-8 p-2 lg:p-4">
                    {{-- 1 --}}
                    <div class="w-1/2 space-y-2 pl-4 text-base leading-relaxed">
                        <p>Suncity Sidoarjo</p>
                        <p>Transmart Sidoarjo</p>
                    </div>
                    {{-- 2 --}}
                    <div class="space-y-2 w-1/2 text-base leading-relaxed">

                    </div>
                    {{-- 3 --}}
                    <div class="space-y-2 w-1/2 pr-4 text-base leading-relaxed">

                    </div>
                </div>
            </div>
        </div>

        <div class="pb-4 w-full">
            <button onclick="document.getElementById('Semarang').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-0 lg:pr-40 lg:pl-40">
                <span>Semarang</span>
                <span>+</span>
            </button>
            <div id="Semarang" class="hidden text-sm px-0 lg:pr-40 lg:pl-40">
                <div class="flex justify-center gap-4 lg:gap-8 p-2 lg:p-4">
                    {{-- 1 --}}
                    <div class="w-1/2 space-y-2 pl-4 text-base leading-relaxed">
                        <p>Paragon Mall Semarang</p>
                        <p>DP Mall</p>
                        <p>Transmart Majapahit Semarang</p>
                        <p>Stasiun Tawang</p>
                    </div>
                    {{-- 2 --}}
                    <div class="space-y-2 w-1/2 text-base leading-relaxed">
                        <p>SIM Square</p>
                        <p>Rest Area KM 429 Semarang</p>
                        <p>Gedung Pelni</p>
                        <p>Ruko Ngaliyan</p>
                    </div>
                    {{-- 3 --}}
                    <div class="space-y-2 w-1/2 pr-4 text-base leading-relaxed">
                        <p>Queen City Semarang</p>
                        <p>Tentrem Mall Semarang</p>
                        <p>Ruko UNDIP</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-4 w-full">
            <button onclick="document.getElementById('Bandung').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-0 lg:pr-40 lg:pl-40">
                <span>Bandung</span>
                <span>+</span>
            </button>
            <div id="Bandung" class="hidden text-sm px-0 lg:pr-40 lg:pl-40">
                <div class="flex justify-center gap-4 lg:gap-8 p-2 lg:p-4">
                    {{-- 1 --}}
                    <div class="w-1/2 space-y-2 pl-4 text-base leading-relaxed">
                        <p>Bandung Indah Plaza</p>
                        <p>Festival Citylink Bandung</p>
                        <p>Istana Plaza</p>
                        <p>Grab Kitchen Bandung Tubis</p>
                        <p>Grab Kitchen Moh.Ramdan Bandung</p>
                        <p>Transmart Buah Batu Square Bandung</p>
                        <p>Ruko Paskal</p>
                        <p>Miko Mall</p>
                    </div>
                    {{-- 2 --}}
                    <div class="space-y-2 w-1/2 text-base leading-relaxed">
                        <p>Ubertos</p>
                        <p>Limijati Container (Riau Bandung)</p>
                        <p>Bursa Efek Bandung</p>
                        <p>Paris Van Java</p>
                        <p>Metro Indah Mall</p>
                        <p>Ruko Jalan Setia Budi</p>
                        <p>Ruko Surya Sumantri</p>
                        <p>Cihampelas Walk</p>
                    </div>
                    {{-- 3 --}}
                    <div class="space-y-2 w-1/2 pr-4 text-base leading-relaxed">
                        <p>Bandung Electronic Center</p>
                        <p>Toserba Yogya (Pahlawan)</p>
                        <p>Toserba Yogya (Ciumbuleuit)</p>
                        <p>Braga City Walk</p>
                        <p>Toserba Yogya (Sunda)</p>
                        <p>Ruko Buah Batu</p>
                        <p>Ramayana Mal Padalarang</p>
                        <p>Ruko Cibaduyut</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-4 w-full">
            <button onclick="document.getElementById('Sumedang').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-0 lg:pr-40 lg:pl-40">
                <span>Sumedang</span>
                <span>+</span>
            </button>
            <div id="Sumedang" class="hidden text-sm px-0 lg:pr-40 lg:pl-40">
                <div class="flex justify-center gap-4 lg:gap-8 p-2 lg:p-4">
                    {{-- 1 --}}
                    <div class="w-1/2 space-y-2 pl-4 text-base leading-relaxed">
                        <p>Stand Alone Ijen Malang</p>
                    </div>
                    {{-- 2 --}}
                    <div class="space-y-2 w-1/2 text-base leading-relaxed">

                    </div>
                    {{-- 3 --}}
                    <div class="space-y-2 w-1/2 pr-4 text-base leading-relaxed">

                    </div>
                </div>
            </div>
        </div>

        <div class="pb-4 w-full">
            <button onclick="document.getElementById('Solo').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-0 lg:pr-40 lg:pl-40">
                <span>Solo</span>
                <span>+</span>
            </button>
            <div id="Solo" class="hidden text-sm px-0 lg:pr-40 lg:pl-40">
                <div class="flex justify-center gap-4 lg:gap-8 p-2 lg:p-4">
                    {{-- 1 --}}
                    <div class="w-1/2 space-y-2 pl-4 text-base leading-relaxed">
                        <p>Solo Paragon</p>
                        <p>Hartono Mall Solo</p>
                        <p>Solo Square</p>
                        <p>Solo Grand Mall</p>
                        <p>The Park Mall Solo</p>
                        <p>Ruko Adi Sucipto</p>
                    </div>
                    {{-- 2 --}}
                    <div class="space-y-2 w-1/2 text-base leading-relaxed">

                    </div>
                    {{-- 3 --}}
                    <div class="space-y-2 w-1/2 pr-4 text-base leading-relaxed">

                    </div>
                </div>
            </div>
        </div>

        <div class="pb-4 w-full">
            <button onclick="document.getElementById('Bogor').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-0 lg:pr-40 lg:pl-40">
                <span>Bogor</span>
                <span>+</span>
            </button>
            <div id="Bogor" class="hidden text-sm px-0 lg:pr-40 lg:pl-40">
                <div class="flex justify-center gap-4 lg:gap-8 p-2 lg:p-4">
                    {{-- 1 --}}
                    <div class="w-1/2 space-y-2 pl-4 text-base leading-relaxed">
                        <p>Botani Square Mall</p>
                        <p>Lippo Plaza Ekalokasari</p>
                        <p>Transmart Yasmin Bogor</p>
                        <p>Bogor Trade Mall</p>
                        <p>Mall Boxies 123</p>
                    </div>
                    {{-- 2 --}}
                    <div class="space-y-2 w-1/2 text-base leading-relaxed">
                        <p>Ruko Legenda Wisata</p>
                        <p>Ruko Kota Wisata</p>
                        <p>Lotte Grosir Pakansari</p>
                        <p>SPBU Cibogo</p>
                        <p>Cibinong City Mall</p>
                    </div>
                    {{-- 3 --}}
                    <div class="space-y-2 w-1/2 pr-4 text-base leading-relaxed">
                        <p>Toserba Yogya (Grand Dramaga)</p>
                        <p>Metland Cileungsi</p>
                        <p>Aeon Mall Sentul City</p>
                        <p>Plaza Jambu Dua</p>
                        <p>Superindo Limus Pratama</p>
                        <p>SPBU Pertamina COCO Mayor Oking Cibinong (Container)</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-4 w-full">
            <button onclick="document.getElementById('Karawang').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-0 lg:pr-40 lg:pl-40">
                <span>Karawang</span>
                <span>+</span>
            </button>
            <div id="Karawang" class="hidden text-sm px-0 lg:pr-40 lg:pl-40">
                <div class="flex justify-center gap-4 lg:gap-8 p-2 lg:p-4">
                    {{-- 1 --}}
                    <div class="w-1/2 space-y-2 pl-4 text-base leading-relaxed">
                        <p>Resinda Park Mall</p>
                        <p>BP Karawang Barat</p>
                        <p>Rest Area KM 62B</p>
                    </div>
                    {{-- 2 --}}
                    <div class="space-y-2 w-1/2 text-base leading-relaxed">
                        <p>Toserba Yogya (Karawang)</p>
                        <p>Rest Area KM 57</p>
                    </div>
                    {{-- 3 --}}
                    <div class="space-y-2 w-1/2 pr-4 text-base leading-relaxed">
                        <p>Shell Galuhmas</p>
                        <p>Ruko Mall Cikampek</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-4 w-full">
            <button onclick="document.getElementById('Lampung').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-0 lg:pr-40 lg:pl-40">
                <span>Lampung</span>
                <span>+</span>
            </button>
            <div id="Lampung" class="hidden text-sm pc-0 lg:pr-40 lg:pl-40">
                <div class="flex justify-center gap-2 lg:gap-8 lg:p-4">
                    {{-- 1 --}}
                    <div class="w-1/2 space-y-2 pl-4 text-base leading-relaxed">
                        <p>City Plaza Ramayana Lampung</p>
                        <p>Transmart Lampung</p>
                        <p>Ruko Antasari Lampung</p>
                        <p>Ruko Ahmad Yani Lampung</p>
                    </div>
                    {{-- 2 --}}
                    <div class="space-y-2 w-1/2 text-base leading-relaxed">

                    </div>
                    {{-- 3 --}}
                    <div class="space-y-2 w-1/2 pr-4 text-base leading-relaxed">

                    </div>
                </div>
            </div>
        </div>

        <div class="pb-4 w-full">
            <button onclick="document.getElementById('Makassar').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-0 lg:pr-40 lg:pl-40">
                <span>Makassar</span>
                <span>+</span>
            </button>
            <div id="Makassar" class="hidden text-sm px-0 lg:pr-40 lg:pl-40">
                <div class="flex justify-center gap-4 lg:gap-8 p-2 lg:p-4">
                    {{-- 1 --}}
                    <div class="w-1/2 space-y-2 pl-4 text-base leading-relaxed">
                        <p>Trans Studio Mall Makassar</p>
                        <p>Phinisi Point Makassar</p>
                        <p>Nipah Mall</p>
                    </div>
                    {{-- 2 --}}
                    <div class="space-y-2 w-1/2 text-base leading-relaxed">
                        <p>Panakkukang Mall</p>
                        <p>Panakkukang Square</p>
                    </div>
                    {{-- 3 --}}
                    <div class="space-y-2 w-1/2 pr-4 text-base leading-relaxed">
                        <p>Mall Ratu Indah Makassar</p>
                        <p>Makassar Town Square</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-4 w-full">
            <button onclick="document.getElementById('Palembang').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-0 lg:pr-40 lg:pl-40">
                <span>Palembang</span>
                <span>+</span>
            </button>
            <div id="Palembang" class="hidden text-sm px-0 lg:pr-40 lg:pl-40">
                <div class="flex justify-center gap-4 lg:gap-8 p-2 lg:p-4">
                    {{-- 1 --}}
                    <div class="w-1/2 space-y-2 pl-4 text-base leading-relaxed">
                        <p>Palembang Icon</p>
                        <p>Palembang Square</p>
                        <p>Palembang Square Extension</p>
                        <p>Opi Mall</p>
                    </div>
                    {{-- 2 --}}
                    <div class="space-y-2 w-1/2 text-base leading-relaxed">
                        <p>Singapore Station M. Isa</p>
                        <p>Palembang Indah Mall</p>
                        <p>Dermaga Point</p>
                    </div>
                    {{-- 3 --}}
                    <div class="space-y-2 w-1/2 pr-4 text-base leading-relaxed">
                        <p>Kenten Food Market</p>
                        <p>Ruko Palembang Trade Center</p>
                        <p>Ruko Lemabang Palembang</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-4 w-full">
            <button onclick="document.getElementById('Bekasi').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-0 lg:pr-40 lg:pl-40">
                <span>Bekasi</span>
                <span>+</span>
            </button>
            <div id="Bekasi" class="hidden text-sm px-0 lg:pr-40 lg:pl-40">
                <div class="flex justify-center gap-4 lg:gap-8 p-2 lg:p-4">
                    {{-- 1 --}}
                    <div class="w-1/2 space-y-2 pl-4 text-base leading-relaxed">
                        <p>Transmart Juanda Bekasi</p>
                        <p>Mall Lippo Cikarang</p>
                        <p>Revo Town</p>
                        <p>Blu Plaza</p>
                        <p>Mega Bekasi Hypermall</p>
                        <p>Rest Area KM 39 Cikampek</p>
                        <p>Plasa Cibubur</p>
                        <p>Living Plaza Kota Harapan Indah</p>
                        <p>Plaza Pondok Gede</p>
                        <p>BP Cikarang</p>
                        <p>Ruko Galaxy Bekasi</p>
                    </div>
                    {{-- 2 --}}
                    <div class="space-y-2 w-1/2 text-base leading-relaxed">
                        <p>Metropolitan Mall Bekasi</p>
                        <p>Summarecon Mall Bekasi</p>
                        <p>BP KHI Boulevard</p>
                        <p>BP Jababeka Hollywood</p>
                        <p>Living World Plaza Jababeka</p>
                        <p>Mall Ciputra Cibubur</p>
                        <p>Naga Swalayan Hankam (Container)</p>
                        <p>Naga Swalayan Pekayon</p>
                        <p>Ruko Grand Wisata Bekasi</p>
                        <p>Grand Icon Caman</p>
                        <p>District 1 Meikarta</p>
                    </div>
                    {{-- 3 --}}
                    <div class="space-y-2 w-1/2 pr-4 text-base leading-relaxed">
                        <p>Ruko Grand Kota Bintang</p>
                        <p>Grand Mal Bekasi</p>
                        <p>Citrus Department Store</p>
                        <p>Ruko Bintara</p>
                        <p>Ruko Jatiasih</p>
                        <p>Ruko Kemang Pratama Bekasi</p>
                        <p>Ruko Gading Terrace Bekasi</p>
                        <p>Rest Area KM 19 (Container)</p>
                        <p>Naga Swalayan Wisma Asri (Container)</p>
                        <p>Dapur Kitchen Bekasi</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-4 w-full">
            <button onclick="document.getElementById('Surabaya').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-0 lg:pr-40 lg:pl-40">
                <span>Surabaya</span>
                <span>+</span>
            </button>
            <div id="Surabaya" class="hidden text-sm px-0 lg:pr-40 lg:pl-40">
                <div class="flex justify-center gap-4 lg:gap-8 p-2 lg:p-4">
                    {{-- 1 --}}
                    <div class="w-1/2 space-y-2 pl-4 text-base leading-relaxed">
                        <p>Tunjungan Plaza 3</p>
                        <p>Grand City Surabaya</p>
                        <p>Lenmarc Mall Surabaya</p>
                        <p>Ciputra World Surabaya</p>
                        <p>Pakuwon Mall</p>
                        <p>Royal Residence Square</p>
                        <p>Galaxy Mall 3 Surabaya</p>
                        <p>Ruko Mulyosari Surabaya</p>
                        <p>Ruko G Walk</p>
                    </div>
                    {{-- 2 --}}
                    <div class="space-y-2 w-1/2 text-base leading-relaxed">
                        <p>Graha Pena Surabaya</p>
                        <p>City Of Tomorrow Surabaya</p>
                        <p>BP Kertajaya Indah</p>
                        <p>Surabaya Town Square</p>
                        <p>Pasar Atom Mall</p>
                        <p>Royal Plaza Surabaya</p>
                        <p>Ruko Ngagel</p>
                        <p>East Coast Centre Mall</p>
                        <p>Transmart Rungkut Surabaya</p>
                    </div>
                    {{-- 3 --}}
                    <div class="space-y-2 w-1/2 pr-4 text-base leading-relaxed">
                        <p>BP Pemuda</p>
                        <p>BP Margorejo</p>
                        <p>WTC Surabaya</p>
                        <p>BG Junction</p>
                        <p>Lagoon Avenue Sungkono</p>
                        <p>Bengawan Darmo</p>
                        <p>Rest Area KM 754 (Container)</p>
                        <p>East Coast Centre Mall</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-4 w-full">
            <button onclick="document.getElementById('Yogyakarta').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-0 lg:pr-40 lg:pl-40">
                <span>Yogyakarta</span>
                <span>+</span>
            </button>
            <div id="Yogyakarta" class="hidden text-sm px-0 lg:pr-40 lg:pl-40">
                <div class="flex justify-center gap-4 lg:gap-8 p-2 lg:p-4">
                    {{-- 1 --}}
                    <div class="w-1/2 space-y-2 pl-4 text-base leading-relaxed">
                        <p>Hartono Mall Jogja</p>
                        <p>Jogja City Mall</p>
                        <p>Galeria Mall</p>
                        <p>Sleman City Hall</p>
                    </div>
                    {{-- 2 --}}
                    <div class="space-y-2 w-1/2 text-base leading-relaxed">
                        <p>Lippo Plaza Jogja</p>
                        <p>Malioboro Mall</p>
                        <p>Ramai Malioboro</p>
                    </div>
                    {{-- 3 --}}
                    <div class="space-y-2 w-1/2 pr-4 text-base leading-relaxed">
                        <p>Wisma Hartono</p>
                        <p>Ruko Jalan Seturan</p>
                        <p>Ruko Malioboro 39</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-4 w-full">
            <button onclick="document.getElementById('Gresik').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-0 lg:pr-40 lg:pl-40">
                <span>Gresik</span>
                <span>+</span>
            </button>
            <div id="Gresik" class="hidden text-sm px-0 lg:pr-40 lg:pl-40">
                <div class="flex justify-center gap-4 lg:gap-8 p-0 lg:p-4">
                    {{-- 1 --}}
                    <div class="w-1/2 space-y-2 pl-4 text-base leading-relaxed">
                        <p>Icon Mall Gresik</p>
                        <p>Rest Area KM 726</p>
                    </div>
                    {{-- 2 --}}
                    <div class="space-y-2 w-1/2 text-base leading-relaxed">

                    </div>
                    {{-- 3 --}}
                    <div class="space-y-2 w-1/2 pr-4 text-base leading-relaxed">

                    </div>
                </div>
            </div>
        </div>

        <div class="pb-4 w-full">
            <button onclick="document.getElementById('Depok').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-0 lg:pr-40 lg:pl-40">
                <span>Depok</span>
                <span>+</span>
            </button>
            <div id="Depok" class="hidden text-sm px-0 lg:pr-40 lg:pl-40">
                <div class="flex justify-center gap-4 lg:gap-8 p-2 lg:p-4">
                    {{-- 1 --}}
                    <div class="w-1/2 space-y-2 pl-4 text-base leading-relaxed">
                        <p>Pesona Square Depok</p>
                        <p>DMall Depok</p>
                        <p>Trans Studio Mall Cibubur</p>
                        <p>Cinere Bellevue</p>
                        <p>Mall Cinere</p>
                        <p>Transmart Depok</p>
                    </div>
                    {{-- 2 --}}
                    <div class="space-y-2 w-1/2 text-base leading-relaxed">
                        <p>SPBU Pertamina COCO Margonda (Container)</p>
                        <p>Lippo Cinere</p>
                        <p>Universitas Indonesia</p>
                        <p>Ruko Margonda</p>
                        <p>Giant Supermarket Bojong Sari</p>
                        <p>Giant Supermarket Cimanggis</p>
                    </div>
                    {{-- 3 --}}
                    <div class="space-y-2 w-1/2 pr-4 text-base leading-relaxed">
                        <p>SPBU Buperta Cibubur</p>
                        <p>The Park Sawangan</p>
                        <p>Ruko Waterpark Grand Depok City</p>
                        <p>Ruko Sawangan Depok</p>
                        <p>Living Plaza Cinere</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-4 w-full">
            <button onclick="document.getElementById('Cirebon').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-0 lg:pr-40 lg:pl-40">
                <span>Cirebon</span>
                <span>+</span>
            </button>
            <div id="Cirebon" class="hidden text-sm px-0 lg:pr-40 lg:pl-40">
                <div class="flex justify-center gap-4 lg:gap-8 p-2 lg:p-4">
                    {{-- 1 --}}
                    <div class="w-1/2 space-y-2 pl-4 text-base leading-relaxed">
                        <p>Cirebon Super Block</p>
                        <p>Shell Cirebon</p>
                        <p>Toserba Yogya (Cherbon Junction)</p>
                    </div>
                    {{-- 2 --}}
                    <div class="space-y-2 w-1/2 text-base leading-relaxed">

                    </div>
                    {{-- 3 --}}
                    <div class="space-y-2 w-1/2 pr-4 text-base leading-relaxed">

                    </div>
                </div>
            </div>
        </div>

        <div class="pb-4 w-full">
            <button onclick="document.getElementById('Banten').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-0 lg:pr-40 lg:pl-40">
                <span>Banten</span>
                <span>+</span>
            </button>
            <div id="Banten" class="hidden text-sm px-0 lg:pr-40 lg:pl-40">
                <div class="flex justify-center gap-4 lg:gap-8 p-2 lg:p-4">
                    {{-- 1 --}}
                    <div class="w-1/2 space-y-2 pl-4 text-base leading-relaxed">
                        <p>Ruko Serang</p>
                    </div>
                    {{-- 2 --}}
                    <div class="space-y-2 w-1/2 text-base leading-relaxed">

                    </div>
                    {{-- 3 --}}
                    <div class="space-y-2 w-1/2 pr-4 text-base leading-relaxed">

                    </div>
                </div>
            </div>
        </div>

        <div class="pb-4 w-full">
            <button onclick="document.getElementById('Batu').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-0 lg:pr-40 lg:pl-40">
                <span>Batu</span>
                <span>+</span>
            </button>
            <div id="Batu" class="hidden text-sm px-0 lg:pr-40 lg:pl-40">
                <div class="flex justify-center gap-4 lg:gap-8 p-2 lg:p-4">
                    {{-- 1 --}}
                    <div class="w-1/2 space-y-2 pl-4 text-base leading-relaxed">
                        <p>Lippo Plaza Batu</p>
                    </div>
                    {{-- 2 --}}
                    <div class="space-y-2 w-1/2 text-base leading-relaxed">

                    </div>
                    {{-- 3 --}}
                    <div class="space-y-2 w-1/2 pr-4 text-base leading-relaxed">

                    </div>
                </div>
            </div>
        </div>

        <div class="pb-4 w-full">
            <button onclick="document.getElementById('Purwakarta').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-0 lg:pr-40 lg:pl-40">
                <span>Purwakarta</span>
                <span>+</span>
            </button>
            <div id="Purwakarta" class="hidden text-sm px-0 lg:pr-40 lg:pl-40">
                <div class="flex justify-center gap-4 lg:gap-8 p-2 lg:p-4">
                    {{-- 1 --}}
                    <div class="w-1/2 space-y-2 pl-4 text-base leading-relaxed">
                        <p>BP Rest Area KM 72</p>
                    </div>
                    {{-- 2 --}}
                    <div class="space-y-2 w-1/2 text-base leading-relaxed">

                    </div>
                    {{-- 3 --}}
                    <div class="space-y-2 w-1/2 pr-4 text-base leading-relaxed">

                    </div>
                </div>
            </div>
        </div>

        <div class="pb-4 w-full">
            <button onclick="document.getElementById('Cilebon').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-0 lg:pr-40 lg:pl-40">
                <span>Cilebon</span>
                <span>+</span>
            </button>
            <div id="Cilebon" class="hidden text-sm px-0 lg:pr-40 lg:pl-40">
                <div class="flex justify-center gap-4 lg:gap-8 p-2 lg:p-4">
                    {{-- 1 --}}
                    <div class="w-1/2 space-y-2 pl-4 text-base leading-relaxed">
                        <p>Cilegon Centre Mall</p>
                        <p>Mall of Serang</p>
                        <p>City Mall Cilegon</p>
                        <p>Ciplaz Ramayana Cilegon</p>
                        <p>Transmart Cilegon</p>
                    </div>
                    {{-- 2 --}}
                    <div class="space-y-2 w-1/2 text-base leading-relaxed">

                    </div>
                    {{-- 3 --}}
                    <div class="space-y-2 w-1/2 pr-4 text-base leading-relaxed">

                    </div>
                </div>
            </div>
        </div>

        <div class="pb-4 w-full">
            <button onclick="document.getElementById('Malang').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-0 lg:pr-40 lg:pl-40">
                <span>Malang</span>
                <span>+</span>
            </button>
            <div id="Malang" class="hidden text-sm px-0 lg:pr-40 lg:pl-40">
                <div class="flex justify-center gap-4 lg:gap-8 p-2 lg:p-4">
                    {{-- 1 --}}
                    <div class="w-1/2 space-y-2 pl-4 text-base leading-relaxed">
                        <p>Malang Town Square</p>
                        <p>Malang City Point</p>
                        <p>Dinoyo Mall Malang</p>
                    </div>
                    {{-- 2 --}}
                    <div class="space-y-2 w-1/2 text-base leading-relaxed">
                        <p>Transmart MX Mall Malang</p>
                        <p>Ruko Jalan Soekarno Hatta</p>
                        <p>Ruko Sarinah Malang</p>
                    </div>
                    {{-- 3 --}}
                    <div class="space-y-2 w-1/2 pr-4 text-base leading-relaxed">
                        <p>Ruko Kawi</p>
                        <p>Stand Alone Ijen Malang</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-4 w-full">
            <button onclick="document.getElementById('Medan').classList.toggle('hidden')"
                class="text-base font-bold flex justify-between items-center w-full px-0 lg:pr-40 lg:pl-40">
                <span>Medan</span>
                <span>+</span>
            </button>
            <div id="Medan" class="hidden text-sm px-0 lg:pr-40 lg:pl-40">
                <div class="flex justify-center gap-4 lg:gap-8 p-2 lg:p-4">
                    {{-- 1 --}}
                    <div class="w-1/2 space-y-2 pl-4 text-base leading-relaxed">
                        <p>Sun Plaza</p>
                        <p>Deli Park</p>
                        <p>Medan Fair</p>
                        <p>Thamrin Plaza</p>
                        <p>Binjai Supermall</p>
                        <p>Centre Point Medan</p>
                        <p>Ruko Iskandar Muda Medan</p>
                        <p>SPBU Pertamina DODO Sisingamangaraja No 76 Medan Amplas</p>
                    </div>
                    {{-- 2 --}}
                    <div class="space-y-2 w-1/2 text-base leading-relaxed">
                        <p>Manhattan Time Square</p>
                        <p>Bandara Kualanamu Medan</p>
                        <p>Irian Supermarket Marelan</p>
                        <p>Suzuya Plaza Marelan</p>
                        <p>Lippo Plaza Medan</p>
                        <p>Ruko Komplek OCBC Medan</p>
                        <p>Ruko JCity Jl. Karyawisata No 9 Medan</p>
                        <p>SPBU Pertamina DODO AR Hakim No 118 Medan</p>
                    </div>
                    {{-- 3 --}}
                    <div class="space-y-2 w-1/2 pr-4 text-base leading-relaxed">
                        <p>Singapore Station Brig. Katamso</p>
                        <p>Suzuya Plaza Tamora</p>
                        <p>Singapore Station 2 Adam Malik</p>
                        <p>SPBU H. Anif Cemara Asri</p>
                        <p>Suzuya Plaza Binjai</p>
                        <p>Mansur Residence</p>
                        <p>Ruko Komplek OCBC Medan</p>
                        <p>SPBU Pertamina DODO Gaperta Helvetia Medan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
