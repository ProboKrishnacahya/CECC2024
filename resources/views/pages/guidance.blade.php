@section('title', 'Guidance')

<x-guest-layout>
    <x-hero />

    <section class="relative bg-gradient-to-b from-custom-licorice from-5% to-custom-eerie_black to-10%">
        <img src="{{ url('/images/Guidance/Guidance Tabs.svg') }}" alt=""
            class="absolute z-0 hidden w-full md:block">

        <div class="relative z-10">
            <div class="mb-4 p-4 lg:px-16 lg:py-5">
                <ul class="flex flex-wrap justify-center gap-3 font-wonder_magic text-2xl md:gap-0 md:py-0 lg:flex-nowrap lg:py-4"
                    id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist"
                    data-tabs-active-classes="bg-gradient-to-t from-custom-bright_lavender to-custom-cadmium_violet"
                    data-tabs-inactive-classes="bg-gradient-to-b from-custom-shampoo to-custom-bright_lavender">
                    <li class="inline-block lg:w-full" role="presentation">
                        <button
                            class="h-full w-full rounded-3xl border-2 p-4 text-custom-dark_purple hover:brightness-125 md:rounded-b-none md:rounded-t-3xl"
                            id="alur_pendaftaran-tab" data-tabs-target="#alur_pendaftaran" type="button" role="tab"
                            aria-controls="alur_pendaftaran" aria-selected="false">Alur Pendaftaran</button>
                    </li>
                    <li class="inline-block lg:w-full" role="presentation">
                        <button
                            class="h-full w-full rounded-3xl border-2 p-4 text-custom-dark_purple hover:brightness-125 md:rounded-b-none md:rounded-t-3xl"
                            id="silabus-tab" data-tabs-target="#silabus" type="button" role="tab"
                            aria-controls="silabus" aria-selected="false">Silabus</button>
                    </li>
                    <li class="inline-block lg:w-full" role="presentation">
                        <button
                            class="h-full w-full rounded-3xl border-2 p-4 text-custom-dark_purple hover:brightness-125 md:rounded-b-none md:rounded-t-3xl"
                            id="penyisihan-tab" data-tabs-target="#penyisihan" type="button" role="tab"
                            aria-controls="penyisihan" aria-selected="false">Penyisihan</button>
                    </li>
                    <li class="inline-block lg:w-full" role="presentation">
                        <button
                            class="h-full w-full rounded-3xl border-2 p-4 text-custom-dark_purple hover:brightness-125 md:rounded-b-none md:rounded-t-3xl"
                            id="semi_final-tab" data-tabs-target="#semi_final" type="button" role="tab"
                            aria-controls="semi_final" aria-selected="false">Semi Final</button>
                    </li>
                    <li class="inline-block lg:w-full" role="presentation">
                        <button
                            class="h-full w-full rounded-3xl border-2 p-4 text-custom-dark_purple hover:brightness-125 md:rounded-b-none md:rounded-t-3xl"
                            id="final-tab" data-tabs-target="#final" type="button" role="tab" aria-controls="final"
                            aria-selected="false">Final</button>
                    </li>
                </ul>
            </div>
            <div id="default-tab-content">
                <div class="hidden" id="alur_pendaftaran" role="tabpanel" aria-labelledby="alur_pendaftaran-tab">
                    <div class="relative my-5">
                        <img src="{{ url('/images/Guidance/Blink Oranye Kiri.svg') }}" alt=""
                            class="absolute left-0 top-12 -z-10 w-32 md:-top-8 md:w-60 lg:w-72">
                        <img src="{{ url('/images/Guidance/Tongkat Bercahaya.svg') }}" alt=""
                            class="absolute -top-6 right-0 w-24 md:top-0 md:w-40 lg:w-56">

                        <div class="flex items-center justify-center gap-3">
                            <div>
                                <img src="{{ url('/images/Guidance/Jam Pasir.svg') }}" alt=""
                                    class="ms-auto flex w-8 md:w-12 lg:mx-auto">
                            </div>
                            <div>
                                <img src="{{ url('/images/Guidance/Jadwal.svg') }}" alt=""
                                    class="mx-auto w-40 grow lg:w-64">
                            </div>
                            <div>
                                <img src="{{ url('/images/Guidance/Jam Pasir.svg') }}" alt=""
                                    class="me-auto flex w-8 md:w-12 lg:mx-auto">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 place-items-center gap-3">
                            <img src="{{ url('/images/Guidance/Batch 1.svg') }}" alt=""
                                class="ms-auto w-5/6 md:w-3/4">
                            <img src="{{ url('/images/Guidance/Batch 2.svg') }}" alt=""
                                class="me-auto w-5/6 md:w-3/4">
                        </div>
                    </div>
                    <div class="p-4 lg:px-16 lg:py-5">
                        <div class="flex items-center justify-center gap-3">
                            <div>
                                <img src="{{ url('/images/Guidance/Buku.svg') }}" alt=""
                                    class="ms-auto flex w-24 md:w-36 lg:mx-auto">
                            </div>
                            <div>
                                <img src="{{ url('/images/Guidance/Syarat.svg') }}" alt=""
                                    class="mx-auto ms-2 w-40 grow md:ms-10 lg:w-64">
                            </div>
                            <div>
                                <img src="{{ url('/images/Guidance/Cairan.svg') }}" alt=""
                                    class="me-auto flex w-28 md:w-48 lg:mx-auto">
                            </div>
                        </div>
                        <ul class="mx-8 list-disc font-magic md:mx-32 lg:mx-48">
                            <li class="text-lg">Peserta merupakan pelajar aktif SMA/SMK/Sederajat</li>
                            <li class="text-lg">1 tim terdiri dari 2 orang anggota dengan ketentuan berasal dari sekolah
                                yang sama
                            </li>
                        </ul>
                    </div>
                    <div class="relative my-5">
                        <img src="{{ url('/images/Guidance/Alur.svg') }}" alt=""
                            class="mx-auto w-40 lg:w-64">
                        <div class="relative">
                            <img src="{{ url('/images/Guidance/Penyihir.svg') }}" alt=""
                                class="hidden md:block md:w-2/3">
                            <img src="{{ url('/images/Guidance/Garis Alur.svg') }}" alt=""
                                class="absolute left-1/2 -z-10 hidden w-2/3 -translate-x-1/2 transform md:top-56 md:block lg:top-96">
                            <div class="ms-auto flex w-fit">
                                <img src="{{ url('/images/Guidance/Tanaman Bermata.svg') }}" alt=""
                                    class="ms-auto hidden w-fit md:-mt-8 md:me-28 md:block md:h-28 lg:me-40 lg:h-48">
                                <img src="{{ url('/images/Guidance/Tanaman Kuning.svg') }}" alt=""
                                    class="ms-auto hidden w-fit md:-mt-8 md:block md:h-28 lg:h-48">
                            </div>
                            <div class="mx-4 grid place-items-center gap-3 md:grid-cols-2 lg:gap-0">
                                <img src="{{ url('/images/Guidance/Jamur.svg') }}" alt=""
                                    class="me-auto hidden md:-mt-32 md:ms-36 md:block md:w-1/6 lg:ms-36 lg:mt-0 lg:w-1/3">
                                <div class="flex gap-6 md:mt-6 lg:me-8">
                                    <div class="flex-auto">
                                        <img src="{{ url('/images/Guidance/Alur 1.svg') }}" alt="">
                                    </div>
                                    <div class="flex">
                                        <ul class="list-disc font-magic">
                                            <li class="text-lg">Kartu pelajar/surat rekomendasi dalam bentuk PDF</li>
                                            <li class="text-lg">Foto diri dalam bentuk JPG dengan ketentuan rapi
                                                berkerah dengan
                                                background berwarna bebas dan polos</li>
                                            <li class="text-lg">Bukti pembayaran pendaftaran</li>
                                            <li class="text-lg">Screenshot bukti follow Instagram <a
                                                    href="https://www.instagram.com/ceccukwms/" target="_blank"
                                                    rel="noopener noreferrer">@ceccukwms</a> dari masing-masing anggota
                                                tim dalam bentuk JPG</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="mx-4 my-4 grid place-items-center gap-3 md:my-0 md:-mt-40 md:grid-cols-2 lg:my-12 lg:gap-0">
                                <div class="grid gap-2 md:mx-6">
                                    <img src="{{ url('/images/Guidance/Alur 2.svg') }}" alt=""
                                        class="mx-auto w-2/5 md:me-auto lg:ms-36">
                                    <div class="ms-4 grid grid-cols-2 gap-4 font-magic lg:ms-36">
                                        <div>
                                            <ul class="list-disc">
                                                <li class="text-lg">Batch 1</li>
                                                <p class="text-lg">1 Juli - 31 Agustus 2024</p>
                                                <p class="text-lg">Biaya pendaftaran:</p>
                                                <ul class="ms-8 list-disc">
                                                    <li>Opsi 1: Rp80.000/tim</li>
                                                    <li>Opsi 2: Rp200,000/3 tim</li>
                                                </ul>
                                            </ul>
                                            <ul class="list-disc">
                                                <li class="text-lg">Batch 2</li>
                                                <p class="text-lg">1 September - 7 Oktober 2024</p>
                                                <p class="text-lg">Biaya pendaftaran:</p>
                                                <ul class="ms-8 list-disc">
                                                    <li class="text-lg">Opsi 1: Rp100.000/tim</li>
                                                    <li class="text-lg">Opsi 2: Rp260,000/3 tim</li>
                                                </ul>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="list-disc">
                                                <li class="text-lg">Biaya pendaftaran dapat ditransfer ke bendahara
                                                    CECC 2024 melalui beberapa opsi berikut:</li>
                                                <ul class="ms-8 list-disc">
                                                    <li class="text-lg">Bank ....</li>
                                                    <li class="text-lg">Bank ....</li>
                                                </ul>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('/images/Guidance/Bunga Kuning.svg') }}" alt=""
                                    class="absolute mx-auto mb-96 me-48 hidden w-1/6 lg:block">
                                <img src="{{ url('/images/Guidance/Tongkat Topi Penyihir.svg') }}" alt=""
                                    class="mx-auto hidden w-1/3 md:me-10 md:block lg:me-28">
                                <img src="{{ url('/images/Guidance/Tanaman Liar.svg') }}" alt=""
                                    class="absolute mx-auto hidden w-1/6 md:ms-56 md:mt-56 md:block lg:ms-96 lg:mt-96">
                            </div>
                            <div class="mx-4 grid place-items-center gap-3 md:grid-cols-2 lg:mt-56 lg:gap-0">
                                <img src="{{ url('/images/Guidance/Bebek.svg') }}" alt=""
                                    class="me-auto hidden md:ms-16 md:block md:w-1/4 lg:ms-36">
                                <img src="{{ url('/images/Guidance/Tongkat Gurita.svg') }}" alt=""
                                    class="absolute right-0 mb-6 hidden md:block md:w-20 lg:w-32">
                                <div class="flex items-center gap-3 md:-ms-20 md:me-6 lg:-ms-72 lg:me-8">
                                    <div class="flex-auto">
                                        <img src="{{ url('/images/Guidance/Alur 3.svg') }}" alt=""
                                            class="md:h-28 md:w-fit lg:h-36">
                                    </div>
                                    <div class="flex">
                                        <p class="font-magic text-lg">Mengisi data diri dan mengupload berkas
                                            pendaftaran</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="z-10 mx-6 my-4 grid grid-cols-2 gap-3 md:mx-0 md:ms-20 md:grid-cols-1 lg:my-16 lg:ms-56">
                                <img src="{{ url('/images/Guidance/Alur 4.svg') }}" alt="" class="md:w-1/5">
                                <div class="font-magic md:w-1/3">
                                    <ul class="ms-8 list-disc">
                                        <li class="text-lg">Konfirmasi pendaftaran</li>
                                        <li class="text-lg">Akun login website</li>
                                        <li class="text-lg">Link WAG CECC 2024</li>
                                    </ul>
                                    <br>
                                    <p class="text-lg">Segala pemberitahuan akan disampaikan melalui IG, FB, Twitter,
                                        dan WAG CECC 2024</p>
                                </div>
                            </div>
                            <img src="{{ url('/images/Guidance/Pembaca.svg') }}" alt=""
                                class="relative -z-10 w-full md:-mt-64 lg:-mt-80">
                        </div>

                        <img src="{{ url('/images/Guidance/Tombak.svg') }}" alt=""
                            class="absolute -top-4 left-0 w-48 md:w-60 lg:top-0 lg:w-96">
                            <img src="{{ url('/images/Home/Blink Oranye Kanan.svg') }}" alt=""
                            class="absolute -top-8 right-0 -z-50 w-16 md:top-0 md:w-24 lg:w-48">
                        <img src="{{ url('/images/Guidance/Cincin.svg') }}" alt=""
                            class="absolute top-10 md:top-48 right-8 md:right-14 lg:right-24 w-14 md:w-24 lg:w-40">
                    </div>
                </div>

                <div class="hidden" id="silabus" role="tabpanel" aria-labelledby="silabus-tab">
                    <div class="relative my-5">
                        <img src="{{ url('/images/Guidance/Babak Penyisihan.svg') }}" alt=""
                            class="mx-auto w-64 lg:w-80">

                        <img src="{{ url('/images/Guidance/Tombak.svg') }}" alt=""
                            class="absolute left-0 top-24 -z-10 w-40 md:top-12 md:w-60 lg:top-0 lg:w-96">
                        <img src="{{ url('/images/Guidance/Tongkat Bercahaya.svg') }}" alt=""
                            class="absolute right-0 top-40 -z-10 w-24 md:top-24 md:w-48 lg:top-0 lg:w-72">

                        <div class="relative">
                            <img src="{{ url('/images/Guidance/Kimia.svg') }}" alt=""
                                class="mx-auto w-48 lg:w-64">
                            <div class="relative mx-4 grid md:mx-16 md:grid-cols-2 md:gap-4 lg:mx-40">
                                <div>
                                    <ul class="list-inside list-image-guidance_silabus font-wonder_magic">
                                        <li class="text-lg">Ikatan Kimia</li>
                                        <li class="text-lg">Struktur Atom dan Sistem Periodik Unsur</li>
                                        <li class="text-lg">Stoikiometri</li>
                                        <li class="text-lg">Reaksi Redoks</li>
                                        <li class="text-lg">Larutan Elektrolit dan Non<span
                                                class="font-sans">-</span>Elektrolit</li>
                                        <li class="text-lg">Termokimia</li>
                                        <li class="text-lg">Larutan Penyangga</li>
                                        <li class="text-lg">Larutan Asam Basa</li>
                                        <li class="text-lg">Kesetimbangan Kimia</li>
                                        <li class="text-lg">Koloid</li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="list-inside list-image-guidance_silabus font-wonder_magic">
                                        <li class="text-lg">Laju Reaksi</li>
                                        <li class="text-lg">Hidrolisis Garam</li>
                                        <li class="text-lg">Titrasi Asam Basa</li>
                                        <li class="text-lg">Sifat Koligatif Larutan</li>
                                        <li class="text-lg">Turunan Alkana dan Gas Mulia</li>
                                        <li class="text-lg">Benzena</li>
                                        <li class="text-lg">Isomer</li>
                                        <li class="text-lg">Reaksi Redoks dan Elektrokimia</li>
                                        <li class="text-lg">Polimer dan Biomolekul</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="relative">
                            <img src="{{ url('/images/Guidance/Fisika.svg') }}" alt=""
                                class="mx-auto mt-3 w-48 lg:w-64">

                            <img src="{{ url('/images/Guidance/Botol Ramuan.svg') }}" alt=""
                                class="absolute -top-12 left-0 -z-10 w-32 md:-top-20 md:w-48 lg:w-64">
                            <img src="{{ url('/images/Guidance/Buku.svg') }}" alt=""
                                class="absolute right-2 top-0 w-24 md:right-8 md:w-40 lg:right-24">
                            <img src="{{ url('/images/Home/Blink Oranye Kanan.svg') }}" alt=""
                                class="absolute right-0 top-96 -z-50 w-16 md:top-80 md:w-24 lg:top-56 lg:w-48">

                            <div class="relative mx-4 grid md:mx-16 md:grid-cols-2 md:gap-4 lg:mx-40">
                                <div>
                                    <ul class="list-inside list-image-guidance_silabus font-wonder_magic">
                                        <li class="text-lg">Besaran dan Satuan</li>
                                        <li class="text-lg">
                                            Gerak Lurus Beraturan <span class="font-sans">(</span>GLB<span
                                                class="font-sans">)</span> dan
                                            Gerak Lurus Berubah Beraturan <span class="font-sans">(</span>GLBB<span
                                                class="font-sans">)</span>
                                        </li>
                                        <li class="text-lg">Gerak Parabola</li>
                                        <li class="text-lg">Hukum Newton</li>
                                        <li class="text-lg">Gaya Gesek</li>
                                        <li class="text-lg">Usaha dan Energi</li>
                                        <li class="text-lg">Impuls dan Momentum</li>
                                        <li class="text-lg">Hukum Kekekalan Energi</li>
                                        <li class="text-lg">Fluida</li>
                                        <li class="text-lg">Suhu dan Kalor</li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="list-inside list-image-guidance_silabus font-wonder_magic">
                                        <li class="text-lg">Termodinamika</li>
                                        <li class="text-lg">Gelombang Mekanik</li>
                                        <li class="text-lg">Gelombang Bunyi</li>
                                        <li class="text-lg">Elastisitas dan Hukum Hooke</li>
                                        <li class="text-lg">Hukum Pascal</li>
                                        <li class="text-lg">Hukum Kepler</li>
                                        <li class="text-lg">Teori Relativitas</li>
                                        <li class="text-lg">Efek Fotolistrik</li>
                                        <li class="text-lg">Gelombang Elektromagnetik</li>
                                        <li class="text-lg">Fisika Kuantum</li>
                                        <li class="text-lg">Hukum Ohm</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="relative">
                            <img src="{{ url('/images/Guidance/Matematika.svg') }}" alt=""
                                class="mx-auto mt-3 w-48 lg:w-64">
                            <div class="relative mx-4 grid md:mx-16 md:grid-cols-2 md:gap-4 lg:mx-40">
                                <div>
                                    <ul class="list-inside list-image-guidance_silabus font-wonder_magic">
                                        <li class="text-lg">Eksponen</li>
                                        <li class="text-lg">Logaritma</li>
                                        <li class="text-lg">Persamaan dan Pertidaksamaan Linear</li>
                                        <li class="text-lg">Trigonometri</li>
                                        <li class="text-lg">Limit Fungsi Aljabar</li>
                                        <li class="text-lg">Integral</li>
                                        <li class="text-lg">Barisan dan Deret</li>
                                        <li class="text-lg">Limit</li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="list-inside list-image-guidance_silabus font-wonder_magic">
                                        <li class="text-lg">Turunan</li>
                                        <li class="text-lg">Matriks</li>
                                        <li class="text-lg">Polinomial</li>
                                        <li class="text-lg">Limit Fungsi Trigonometri</li>
                                        <li class="text-lg">Turunan Fungsi Trigonometri</li>
                                        <li class="text-lg">Vektor</li>
                                        <li class="text-lg">Statistika</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="relative">
                            <img src="{{ url('/images/Guidance/Biologi.svg') }}" alt=""
                                class="mx-auto mt-3 w-48 lg:w-64">

                            <img src="{{ url('/images/Home/Blink Oranye Kiri.svg') }}" alt=""
                                class="absolute -left-20 -top-6 -z-50 w-40 md:w-56 lg:w-72">
                            <img src="{{ url('/images/Guidance/Kitab.svg') }}" alt=""
                                class="absolute right-2 top-0 w-32 md:w-52 lg:w-64">

                            <div class="relative mx-4 grid md:mx-16 md:grid-cols-2 md:gap-4 lg:mx-40">
                                <div>
                                    <ul class="list-inside list-image-guidance_silabus font-wonder_magic">
                                        <li class="text-lg">Keanekaragaman Hayati</li>
                                        <li class="text-lg">Fungi</li>
                                        <li class="text-lg">Protista</li>
                                        <li class="text-lg">Sel</li>
                                        <li class="text-lg">Sistem Peredaran Darah</li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="list-inside list-image-guidance_silabus font-wonder_magic">
                                        <li class="text-lg">Transport Membran</li>
                                        <li class="text-lg">Metabolisme</li>
                                        <li class="text-lg">Genetika</li>
                                        <li class="text-lg">Bioteknologi</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="relative">
                            <img src="{{ url('/images/Guidance/Ekonomi.svg') }}" alt=""
                                class="mx-auto mt-3 w-48 lg:w-64">

                            <img src="{{ url('/images/Guidance/Tongkat Gurita.svg') }}" alt=""
                                class="absolute right-0 top-0 w-14 md:top-16 md:w-28 lg:w-40">

                            <div class="relative mx-4 grid md:mx-16 md:grid-cols-2 md:gap-4 lg:mx-40">
                                <div>
                                    <ul class="list-inside list-image-guidance_silabus font-wonder_magic">
                                        <li class="text-lg">Manajemen</li>
                                        <li class="text-lg">Faktor Produksi</li>
                                        <li class="text-lg">Teori Produksi</li>
                                        <li class="text-lg">Permintaan dan Penawaran</li>
                                        <li class="text-lg">Sistem Ekonomi</li>
                                        <li class="text-lg">Kebijakan Moneter dan Kebijakan Fiskal</li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="list-inside list-image-guidance_silabus font-wonder_magic">
                                        <li class="text-lg">Pasar Modal</li>
                                        <li class="text-lg">Perpajakan</li>
                                        <li class="text-lg">Akuntansi</li>
                                        <li class="text-lg">Persamaan Dasar Akuntansi</li>
                                        <li class="text-lg">Debit dan Kredit</li>
                                        <li class="text-lg">Laporan Keuangan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative mx-4 my-5 md:mx-16 lg:mx-40">
                        <img src="{{ url('/images/Guidance/Babak Semifinal.svg') }}" alt=""
                            class="mx-auto w-64 lg:w-80">

                        <h5 class="font-wonder_magic text-xl">
                            Materi yang diberikan sama dengan pada babak penyisihan, akan tetapi tingkat kesulitan lebih
                            tinggi, dan ada tambahan materi dari Teknik Kimia Dasar, yang meliputi<span
                                class="font-sans">:</span>
                        </h5>
                        <ul class="ms-8 list-inside list-image-guidance_silabus font-wonder_magic">
                            <li class="text-lg">Kimia Analisa</li>
                            <li class="text-lg">Neraca Massa</li>
                            <li class="text-lg">Teknologi Pengolahan Limbah</li>
                            <li class="text-lg">Technopreneurship</li>
                        </ul>
                    </div>

                    <div class="relative">
                        <img src="{{ url('/images/Guidance/Babak Final.svg') }}" alt=""
                            class="mx-auto w-64 lg:w-80">

                        <img src="{{ url('/images/Guidance/Tongkat Terbalik.svg') }}" alt=""
                            class="absolute left-2 top-32 w-16 md:left-6 md:top-16 md:w-40 lg:left-10 lg:w-60">
                        <img src="{{ url('/images/Guidance/Blink Oranye Kiri.svg') }}" alt=""
                            class="absolute left-0 top-32 -z-20 w-24 md:top-36 md:w-56 lg:w-64">
                        <img src="{{ url('/images/Home/Blink Oranye Kanan.svg') }}" alt=""
                            class="absolute -top-8 right-0 -z-50 w-16 md:top-0 md:w-24 lg:w-48">

                        <div class="mx-4 md:mx-16 lg:mx-40">
                            <img src="{{ url('/images/Guidance/Praktikum.svg') }}" alt=""
                                class="mx-auto w-48 lg:w-64">
                            <h5 class="font-wonder_magic text-xl md:text-center">Praktikum Sintesis dan Uji Produk
                                berbasis kewirausahaan.
                            </h5>

                            <img src="{{ url('/images/Guidance/Studi Kasus.svg') }}" alt=""
                                class="mx-auto mt-3 w-48 lg:w-64">
                            <ul class="list-inside list-image-guidance_silabus font-wonder_magic">
                                <li class="text-xl">Pemanfaatan kembali limbah menjadi barang dengan nilai jual.</li>
                                <li class="text-xl">Aplikasi proses hijau dalam rangka mencapai net zero emission yang
                                    tetap ekonomis.</li>
                                <li class="text-xl">Aplikasi material biodegradable sebagai salah solusi dalam
                                    pengurangan
                                    limbah.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="hidden" id="penyisihan" role="tabpanel" aria-labelledby="penyisihan-tab">
                    <div class="relative my-5">
                        <img src="{{ url('/images/Guidance/Penyisihan.svg') }}" alt=""
                            class="mx-auto w-64 lg:w-80">

                        <img src="{{ url('/images/Guidance/Tombak.svg') }}" alt=""
                            class="absolute left-0 top-24 -z-10 w-40 md:top-12 md:w-60 lg:top-0 lg:w-96">
                        <img src="{{ url('/images/Guidance/Tongkat Bercahaya.svg') }}" alt=""
                            class="absolute right-0 top-40 -z-10 w-24 md:top-24 md:w-48 lg:top-0 lg:w-72">
                        <img src="{{ url('/images/Guidance/Blink Oranye Kiri.svg') }}" alt=""
                            class="absolute left-0 top-56 -z-20 hidden w-24 md:top-80 md:block md:w-36 lg:w-64">
                        <img src="{{ url('/images/Guidance/Cincin.svg') }}" alt=""
                            class="absolute right-2 top-96 hidden w-28 lg:block">
                        <img src="{{ url('/images/Home/Blink Oranye Kanan.svg') }}" alt=""
                            class="absolute bottom-96 right-0 -z-50 w-16 md:w-24 lg:w-48">
                        <img src="{{ url('/images/Guidance/Kitab.svg') }}" alt=""
                            class="absolute bottom-96 md:mb-56 lg:mb-0 md:right-12 lg:right-24 hidden w-32 md:block md:w-64 lg:w-80">
                        <img src="{{ url('/images/Guidance/Blink Oranye Kiri.svg') }}" alt=""
                            class="absolute bottom-0 left-0 -z-20 hidden w-24 md:block md:w-36 lg:w-64">
                        <img src="{{ url('/images/Home/Blink Oranye Kanan.svg') }}" alt=""
                            class="absolute -bottom-12 right-0 -z-50 w-14 md:-bottom-24 md:w-16 lg:w-36">

                        <ol class="me-4 ms-8 list-decimal font-wonder_magic md:mx-16 lg:mx-40">
                            <li class="text-lg">
                                Babak penyisihan akan dilaksanakan secara <span
                                    class="underline underline-offset-auto">daring</span> pada<span
                                    class="font-sans">:</span>
                                <br>
                                <table class="table-auto">
                                    <tbody>
                                        <tr>
                                            <td>
                                                Hari<span class="font-sans">/</span>tanggal
                                            </td>
                                            <td>
                                                <span class="font-sans">:</span>
                                            </td>
                                            <td>Sabtu, 26 Oktober 2024</td>
                                        </tr>
                                        <tr>
                                            <td>Pukul</td>
                                            <td>
                                                <span class="font-sans">:</span>
                                            </td>
                                            <td>10.00 <span class="font-sans">-</span> 12.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Media</td>
                                            <td>
                                                <span class="font-sans">:</span>
                                            </td>
                                            <td>Website CECC 2024</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                            <li class="text-lg">
                                Babak penyisihan dilakukan setelah acara pembukaan CECC 2024 hari
                                pertama melalui video conferencing zoom dan website <a
                                    href="/">www.cecc2024.com</a>.
                            </li>
                            <li class="text-lg">
                                Setiap tim yang berpartisipasi dalam babak penyisihan terdiri atas 2
                                orang siswa<span class="font-sans">/</span>i yang berasal dari sekolah yang sama.
                            </li>
                            <li class="text-lg">Setiap tim diharapkan mempersiapkan koneksi internet yang baik pada
                                saat pelaksanaan babak penyisihan, dimana koneksi internet menjadi tanggung jawab
                                peserta CECC 2024.</li>
                            <li class="text-lg">
                                Setiap anggota masing<span class="font-sans">-</span>masing tim <span
                                    class="underline underline-offset-auto">wajib</span> bergabung ke dalam zoom
                                meeting dengan kondisi kamera menyala dan microphone mute selama babak penyisihan
                                berlangsung.
                            </li>
                            <li class="text-lg">Apabila tim tidak menyalakan kamera, maka panitia yang bertugas akan
                                memberikan peringatan. Seluruh tim yang berpartisipasi dalam babak penyisihan akan
                                terbagi ke dalam beberapa breakout room yang dijaga oleh panitia.</li>
                            <li class="text-lg">Setiap tim hanya dapat mengerjakan soal pada babak penyisihan selama
                                waktu yang telah ditentukan oleh panitia. Setelah pukul 12.00 WIB, jawaban akan
                                tersubmit secara otomatis dan tidak ada perpanjangan waktu meskipun pengerjaan masih
                                belum selesai.</li>
                            <li class="text-lg">Setiap anggota tim dapat mengerjakan soal pada babak penyisihan secara
                                bersamaan atau real time.</li>
                            <li class="text-lg">
                                Sebelum babak penyisihan dimulai, peserta akan log in terlebih dahulu
                                melalui website <a href="/">www.cecc2024.com</a> menggunakan email dan password
                                yang telah didaftarkan pada saat registrasi.
                            </li>
                            <li class="text-lg">
                                Pengerjaan soal pada babak penyisihan diwajibkan menggunakan
                                laptop<span class="font-sans">/</span>komputer yang dilengkapi kamera webcam dan tidak
                                dianjurkan menggunakan
                                handphone.
                            </li>
                            <li class="text-lg">Babak penyisihan berupa 50 soal pilihan ganda dengan waktu pengerjaan
                                selama 120 menit, terhitung sejak babak penyisihan dimulai.</li>
                            <li class="text-lg">
                                Cakupan materi pada babak penyisihan meliputi<span class="font-sans">:</span>
                                <ul class="list-inside list-image-guidance_silabus font-wonder_magic">
                                    <li class="text-lg">Kimia<span class="font-sans">:</span> 30<span
                                            class="font-sans">%</span></li>
                                    <li class="text-lg">Fisika<span class="font-sans">:</span> 20<span
                                            class="font-sans">%</span></li>
                                    <li class="text-lg">Matematika<span class="font-sans">:</span> 20<span
                                            class="font-sans">%</span></li>
                                    <li class="text-lg">Biologi<span class="font-sans">:</span> 15<span
                                            class="font-sans">%</span></li>
                                    <li class="text-lg">Ekonomi<span class="font-sans">:</span> 15<span
                                            class="font-sans">%</span></li>
                                </ul>
                            </li>
                            <li class="text-lg">
                                Setiap soal memiliki bobot nilai yang sama sebagai berikut<span
                                    class="font-sans">:</span>
                                <ul class="list-inside list-image-guidance_silabus font-wonder_magic">
                                    <li class="text-lg">Benar<span class="font-sans">:</span> <span
                                            class="font-sans">+</span>2</li>
                                    <li class="text-lg">Salah<span class="font-sans">:</span> 0</li>
                                    <li class="text-lg">Tidak Menjawab<span class="font-sans">:</span> 0</li>
                                </ul>
                            </li>
                            <li class="text-lg">Peserta yang terlambat tidak akan mendapatkan tambahan waktu.</li>
                            <li class="text-lg">
                                Peserta <span class="underline underline-offset-auto">tidak</span> diperbolehkan
                                membuka literatur dan <span class="underline underline-offset-auto">tidak</span> boleh
                                berkomunikasi dengan pihak lain selain dari anggota tim ketika mengerjakan soal. Apabila
                                ditemukan ada tim yang melanggar, maka akan diberi peringatan.
                            </li>
                            <li class="text-lg">Peserta diperbolehkan menggunakan alat bantu hitung seperti kalkulator
                                ketika mengerjakan soal.</li>
                            <li class="text-lg">
                                Apabila terdapat kendala pada website <span class="font-sans">(</span>bukan dikarenakan
                                jaringan peserta<span class="font-sans">)</span> dan dialami oleh seluruh peserta,
                                peserta dapat segera
                                menghubungi panitia dan menyertakan bukti tangkapan layar yang membuktikan bahwa
                                terdapat kendala. Selanjutnya, panitia akan memberikan link Google Form sebagai cadangan
                                lembar jawaban.
                            </li>
                            <li class="text-lg">
                                Dua puluh lima <span class="font-sans">(</span>25<span class="font-sans">)</span> tim
                                dengan poin tertinggi akan lolos ke babak semifinal.
                            </li>
                            <li class="text-lg">Apabila ada tim dengan perolehan poin yang sama, maka tim dengan waktu
                                pengerjaan soal tersingkat akan berada pada peringkat yang lebih tinggi.</li>
                            <li class="text-lg">Apabila tim yang sama mendapatkan peringatan sebanyak 3 kali, maka tim
                                yang bersangkutan akan didiskualifikasi dari CECC 2024.</li>
                            <li class="text-lg">Peserta yang lolos ke babak selanjutnya akan diumumkan melalui media
                                sosial dan website CECC 2024.</li>
                            <li class="text-lg">Keputusan panitia adalah bersifat mutlak dan tidak dapat diganggu
                                gugat.</li>
                        </ol>
                    </div>
                </div>

                <div class="hidden" id="semi_final" role="tabpanel" aria-labelledby="semi_final-tab">
                    <div class="relative my-5">
                        <img src="{{ url('/images/Guidance/Penyisihan.svg') }}" alt=""
                            class="mx-auto w-40 lg:w-64">
                        <ol class="mx-4 list-decimal font-wonder_magic md:mx-16 lg:mx-40">
                            <li class="text-lg">
                                Babak semifinal akan dilaksanakan secara <span
                                    class="underline underline-offset-auto">luring</span> pada<span
                                    class="font-sans">:</span>
                                <br>
                                Hari<span class="font-sans">/</span>tanggal<span class="font-sans">:</span> Sabtu, 9
                                November 2024
                                <br>
                                Pukul<span class="font-sans">:</span> 09.00 <span class="font-sans">-</span> 11.40 WIB
                                <br>
                                Lokasi<span class="font-sans">:</span> Universitas Katolik Widya Mandala Jl. Kalijudan
                                37 Surabaya
                                <br>
                            </li>
                            <li class="text-lg">
                                Setiap anggota masing<span class="font-sans">-</span>masing tim wajib hadir tepat
                                waktu. Tim yang bertanding harus hadir secara lengkap agar diperbolehkan untuk mengikuti
                                babak ini.
                            </li>
                            <li class="text-lg">Poin dari babak penyisihan tidak diperhitungkan pada babak semifinal.
                            </li>
                            <li class="text-lg">
                                Babak semifinal terdiri atas dua <span class="font-sans">(</span>2<span
                                    class="font-sans">)</span> tahapan yaitu
                                Explorers dan S<span class="font-sans">-</span>MART. Poin yang
                                diperoleh dari tahapan Explorers akan digunakan sebagai modal poin untuk memulai tahapan
                                S<span class="font-sans">-</span>MART.
                            </li>
                            <li class="text-lg">
                                Poin yang didapat selama babak semifinal Explorers tidak akan
                                diperhitungkan untuk penentuan babak final, hanya poin dari babak semifinal S<span
                                    class="font-sans">-</span>MART yang akan digunakan.
                            </li>
                            <li class="text-lg">Apabila terdapat tim yang memperoleh poin yang sama setelah babak
                                semifinal, maka akan
                                ditentukan berdasarkan waktu pengerjaan tersingkat.</li>
                            <li class="text-lg">Setiap tim tidak diperbolehkan menggunakan alat bantu hitung seperti
                                kalkulator ketika
                                mengerjakan soal.</li>
                            <li class="text-lg">Setiap tim tidak diperbolehkan untuk berkomunikasi dengan tim lain
                                selama berlangsungnya
                                babak semifinal.</li>
                            <li class="text-lg">
                                Hasil poin pada babak S<span class="font-sans">-</span>MART, akan
                                digunakan untuk menentukan lima <span class="font-sans">(</span>5<span
                                    class="font-sans">)</span> tim dengan nilai tertinggi dan waktu pengerjaan tercepat
                                yang akan lolos ke babak final.
                            </li>
                            <li class="text-lg">Jika terdapat tim dengan besar poin yang sama, maka pemenang akan
                                ditentukan berdasarkan lama waktu tim tersebut menyelesaikan babak. Jika besar poin dan
                                waktu sama, maka akan ditentukan dengan tambahan pengerjaan soal untuk menentukan
                                pemenang.</li>
                            <li class="text-lg">Keputusan panitia adalah bersifat mutlak dan tidak dapat diganggu
                                gugat.</li>
                        </ol>
                    </div>
                </div>

                <div class="hidden" id="final" role="tabpanel" aria-labelledby="final-tab">
                    <div class="my-5 lg:px-16 lg:py-5">
                        <p class="text-lg">Final</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-10">
        <x-sponsors />
    </section>
</x-guest-layout>
