@section('title', 'Guidance')

<x-guest-layout>
    <x-hero />

    <section class="relative bg-gradient-to-b from-custom-licorice from-5% to-custom-eerie_black to-10%">
        <img src="{{ url('/images/Guidance/Guidance Tabs.svg') }}" alt=""
            class="absolute z-0 hidden w-full md:block">

        <div class="relative z-10">
            <div class="mb-4 p-4 md:py-2 lg:mx-24 lg:py-5">
                <ul class="flex flex-wrap justify-center gap-3 font-wonder_magic text-2xl md:gap-0 md:py-0 lg:flex-nowrap lg:py-4"
                    id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist"
                    data-tabs-active-classes="bg-gradient-to-t from-custom-bright_lavender to-custom-cadmium_violet"
                    data-tabs-inactive-classes="bg-gradient-to-b from-custom-shampoo to-custom-bright_lavender">
                    <li class="inline-block lg:w-full" role="presentation">
                        <button
                            class="h-full w-full rounded-2xl border-2 px-5 py-3 text-custom-dark_purple hover:brightness-125 md:rounded-b-none md:rounded-t-[1.75rem] md:px-6 md:py-4 lg:rounded-t-[2.5rem] lg:px-10 lg:py-2"
                            id="alur_pendaftaran-tab" data-tabs-target="#alur_pendaftaran" type="button" role="tab"
                            aria-controls="alur_pendaftaran" aria-selected="false">
                            <div class="hidden lg:block">
                                <p>Alur</p>
                                <p>Pendaftaran</p>
                            </div>
                            <div class="lg:hidden">
                                <p>Alur Pendaftaran</p>
                            </div>
                        </button>
                    </li>
                    <li class="inline-block lg:w-full" role="presentation">
                        <button
                            class="h-full w-full rounded-2xl border-2 px-5 py-3 text-custom-dark_purple hover:brightness-125 md:rounded-b-none md:rounded-t-[1.75rem] md:px-6 md:py-4 lg:rounded-t-[2.5rem] lg:px-10 lg:py-2"
                            id="silabus-tab" data-tabs-target="#silabus" type="button" role="tab"
                            aria-controls="silabus" aria-selected="false">Silabus</button>
                    </li>
                    <li class="inline-block lg:w-full" role="presentation">
                        <button
                            class="h-full w-full rounded-2xl border-2 px-5 py-3 text-custom-dark_purple hover:brightness-125 md:rounded-b-none md:rounded-t-[1.75rem] md:px-6 md:py-4 lg:rounded-t-[2.5rem] lg:px-10 lg:py-2"
                            id="penyisihan-tab" data-tabs-target="#penyisihan" type="button" role="tab"
                            aria-controls="penyisihan" aria-selected="false">Penyisihan</button>
                    </li>
                    <li class="inline-block lg:w-full" role="presentation">
                        <button
                            class="h-full w-full rounded-2xl border-2 px-5 py-3 text-custom-dark_purple hover:brightness-125 md:rounded-b-none md:rounded-t-[1.75rem] md:px-6 md:py-4 lg:rounded-t-[2.5rem] lg:px-10 lg:py-2"
                            id="semi_final-tab" data-tabs-target="#semi_final" type="button" role="tab"
                            aria-controls="semi_final" aria-selected="false">Semi Final</button>
                    </li>
                    <li class="inline-block lg:w-full" role="presentation">
                        <button
                            class="h-full w-full rounded-2xl border-2 px-5 py-3 text-custom-dark_purple hover:brightness-125 md:rounded-b-none md:rounded-t-[1.75rem] md:px-6 md:py-4 lg:rounded-t-[2.5rem] lg:px-10 lg:py-2"
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
                                    class="ms-auto flex w-10 md:w-14 lg:mx-auto lg:w-20">
                            </div>
                            <div>
                                <img src="{{ url('/images/Guidance/Jadwal.svg') }}" alt=""
                                    class="mx-auto w-44 grow md:w-56 lg:w-72">
                            </div>
                            <div>
                                <img src="{{ url('/images/Guidance/Jam Pasir.svg') }}" alt=""
                                    class="me-auto flex w-10 md:w-14 lg:mx-auto lg:w-20">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 place-items-center gap-4">
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
                                    class="ms-auto flex w-24 md:w-36 lg:mx-auto lg:w-44">
                            </div>
                            <div>
                                <img src="{{ url('/images/Guidance/Syarat.svg') }}" alt=""
                                    class="mx-auto ms-2 w-44 grow md:ms-10 md:w-56 lg:w-72">
                            </div>
                            <div>
                                <img src="{{ url('/images/Guidance/Cairan.svg') }}" alt=""
                                    class="me-auto flex w-28 md:w-48 lg:mx-auto lg:w-56">
                            </div>
                        </div>
                        <ul class="mx-8 list-disc font-magic md:mx-32 lg:mx-56">
                            <li class="text-lg lg:text-2xl">Peserta merupakan pelajar aktif SMA/SMK/Sederajat</li>
                            <li class="text-lg lg:text-2xl">1 tim terdiri dari 2 orang anggota dengan ketentuan berasal
                                dari sekolah yang sama</li>
                        </ul>
                    </div>
                    <div class="relative my-5">
                        <img src="{{ url('/images/Guidance/Alur.svg') }}" alt=""
                            class="mx-auto w-44 md:w-56 lg:w-72">
                        <div class="relative">
                            <img src="{{ url('/images/Guidance/Penyihir.svg') }}" alt=""
                                class="hidden md:block md:w-2/3">
                            <img src="{{ url('/images/Guidance/Garis Alur.svg') }}" alt=""
                                class="absolute left-1/2 -z-10 hidden w-2/3 -translate-x-1/2 transform md:top-72 md:block lg:top-96 lg:mt-12">
                            <div class="ms-auto flex w-fit">
                                <img src="{{ url('/images/Guidance/Tanaman Bermata.svg') }}" alt=""
                                    class="ms-auto hidden w-fit md:-mt-10 md:me-28 md:block md:h-28 lg:me-40 lg:h-48">
                                <img src="{{ url('/images/Guidance/Tanaman Kuning.svg') }}" alt=""
                                    class="ms-auto hidden w-fit md:-mt-10 md:block md:h-28 lg:h-48">
                            </div>
                            <div class="mx-4 grid place-items-center gap-3 md:grid-cols-2 lg:gap-0">
                                <img src="{{ url('/images/Guidance/Jamur.svg') }}" alt=""
                                    class="me-auto hidden md:-mt-40 md:ms-48 md:block md:w-1/6 lg:ms-36 lg:mt-0 lg:w-1/3">
                                <div class="flex gap-6 md:mt-6 lg:mt-28">
                                    <div class="flex-auto md:my-auto md:w-1/3 lg:my-px lg:-ms-20">
                                        <img src="{{ url('/images/Guidance/Alur 1.svg') }}" alt="">
                                    </div>
                                    <div class="flex md:w-2/3">
                                        <ul class="list-disc font-magic">
                                            <li class="text-lg lg:text-2xl">Kartu pelajar/surat rekomendasi dalam
                                                bentuk
                                                PDF</li>
                                            <li class="text-lg lg:text-2xl">Foto diri dalam bentuk JPG dengan ketentuan
                                                rapi berkerah dengan background berwarna bebas dan polos</li>
                                            <li class="text-lg lg:text-2xl">Bukti pembayaran pendaftaran</li>
                                            <li class="text-lg lg:text-2xl">Screenshot bukti follow Instagram <a
                                                    href="https://www.instagram.com/ceccukwms/" target="_blank"
                                                    rel="noopener noreferrer">@ceccukwms</a> dari masing-masing anggota
                                                tim dalam bentuk JPG</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="mx-4 my-4 grid place-items-center gap-3 md:my-0 md:-mt-40 md:grid-cols-2 lg:-my-6 lg:gap-0">
                                <div class="grid gap-2 md:mx-6">
                                    <img src="{{ url('/images/Guidance/Alur 2.svg') }}" alt=""
                                        class="me-auto w-2/5 lg:ms-16 lg:w-1/2">
                                    <div class="ms-4 grid grid-cols-2 gap-4 font-magic lg:ms-16">
                                        <div>
                                            <ul class="list-disc">
                                                <li class="text-lg lg:text-2xl">Batch 1</li>
                                                <p class="text-lg lg:text-2xl">1 Juli - 31 Agustus 2024</p>
                                                <p class="text-lg lg:text-2xl">Biaya pendaftaran:</p>
                                                <ul class="ms-8 list-disc">
                                                    <li class="text-lg lg:text-2xl">Opsi 1: Rp80.000/tim</li>
                                                    <li class="text-lg lg:text-2xl">Opsi 2: Rp200,000/3 tim</li>
                                                </ul>
                                            </ul>
                                            <ul class="list-disc">
                                                <li class="text-lg lg:text-2xl">Batch 2</li>
                                                <p class="text-lg lg:text-2xl">1 September - 7 Oktober 2024</p>
                                                <p class="text-lg lg:text-2xl">Biaya pendaftaran:</p>
                                                <ul class="ms-8 list-disc">
                                                    <li class="text-lg lg:text-2xl">Opsi 1: Rp100.000/tim</li>
                                                    <li class="text-lg lg:text-2xl">Opsi 2: Rp260,000/3 tim</li>
                                                </ul>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="list-disc">
                                                <li class="text-lg lg:text-2xl">Biaya pendaftaran dapat ditransfer ke
                                                    bendahara CECC 2024 melalui beberapa opsi berikut:</li>
                                                <ul class="ms-8 list-disc">
                                                    <li class="text-lg lg:text-2xl">Bank ....</li>
                                                    <li class="text-lg lg:text-2xl">Bank ....</li>
                                                </ul>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <img src="{{ url('/images/Guidance/Bunga Kuning.svg') }}" alt=""
                                    class="absolute mx-auto mb-96 hidden w-1/6 lg:me-32 lg:block lg:pb-32">
                                <img src="{{ url('/images/Guidance/Tongkat Topi Penyihir.svg') }}" alt=""
                                    class="mx-auto hidden w-1/3 md:me-10 md:block lg:me-28">
                                <img src="{{ url('/images/Guidance/Tanaman Liar.svg') }}" alt=""
                                    class="absolute mx-auto hidden w-1/6 md:ms-40 md:mt-56 md:block lg:ms-96 lg:mt-96">
                            </div>
                            <div class="mx-4 grid place-items-center gap-3 md:grid-cols-2 lg:mt-28 lg:gap-0">
                                <img src="{{ url('/images/Guidance/Bebek.svg') }}" alt=""
                                    class="me-auto hidden md:ms-40 md:block md:w-1/4 lg:-mt-16 lg:ms-36 lg:w-1/3"
                                    loading="lazy">
                                <img src="{{ url('/images/Guidance/Tongkat Gurita.svg') }}" alt=""
                                    class="absolute right-0 -z-10 mb-6 hidden md:mb-64 md:block md:w-20 lg:w-32">

                                <div class="flex items-center gap-3 md:-ms-20 md:me-6 lg:-ms-72 lg:-mt-10 lg:me-10">
                                    <div class="flex-auto">
                                        <img src="{{ url('/images/Guidance/Alur 3.svg') }}" alt=""
                                            class="h-28 md:h-28 md:w-fit lg:h-48">
                                    </div>
                                    <div class="flex">
                                        <div class="grid">
                                            <p class="font-magic text-lg lg:text-2xl">Mengisi data diri dan</p>
                                            <p class="font-magic text-lg lg:text-2xl">mengupload
                                                berkas pendaftaran</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="z-10 mx-6 my-4 grid grid-cols-2 gap-3 md:mx-0 md:ms-20 md:grid-cols-1 lg:my-16 lg:ms-56">
                                <img src="{{ url('/images/Guidance/Alur 4.svg') }}" alt=""
                                    class="md:w-1/5 lg:w-1/3">
                                <div class="font-magic md:w-1/3">
                                    <ul class="ms-8 list-disc">
                                        <li class="text-lg lg:text-2xl">Konfirmasi pendaftaran</li>
                                        <li class="text-lg lg:text-2xl">Akun login website</li>
                                        <li class="text-lg lg:text-2xl">Link WAG CECC 2024</li>
                                    </ul>
                                    <br>
                                    <p class="text-lg lg:text-2xl">Segala pemberitahuan akan disampaikan melalui IG,
                                        FB, Twitter, dan WAG CECC 2024</p>
                                </div>
                            </div>
                            <img src="{{ url('/images/Guidance/Pembaca.svg') }}" alt=""
                                class="relative -z-10 -mt-16 w-full md:-mt-80 lg:-mt-96" loading="lazy">
                        </div>

                        <img src="{{ url('/images/Guidance/Tombak.svg') }}" alt=""
                            class="absolute -top-4 left-0 w-48 md:w-60 lg:top-0 lg:w-96">
                        <img src="{{ url('/images/Home/Blink Oranye Kanan.svg') }}" alt=""
                            class="absolute -top-8 right-0 -z-50 w-16 md:top-0 md:w-24 lg:w-48">
                        <img src="{{ url('/images/Guidance/Cincin.svg') }}" alt=""
                            class="absolute right-8 top-10 w-14 md:right-14 md:top-48 md:w-24 lg:right-24 lg:w-40">
                    </div>
                </div>

                <div class="hidden" id="silabus" role="tabpanel" aria-labelledby="silabus-tab">
                    <div class="relative my-5">
                        <img src="{{ url('/images/Guidance/Babak Penyisihan.svg') }}" alt=""
                            class="mx-auto w-64 md:w-80 lg:w-96">

                        <img src="{{ url('/images/Guidance/Tombak.svg') }}" alt=""
                            class="absolute left-0 top-12 -z-10 w-40 md:top-2 md:w-60 lg:top-0 lg:w-96">
                        <img src="{{ url('/images/Guidance/Tongkat Bercahaya.svg') }}" alt=""
                            class="absolute right-0 top-24 -z-10 w-24 md:w-48 lg:top-0 lg:w-72">

                        <div class="relative">
                            <img src="{{ url('/images/Guidance/Kimia.svg') }}" alt=""
                                class="mx-auto w-48 md:w-60 lg:w-80">
                            <div class="relative mx-4 grid md:mx-24 md:grid-cols-2 md:gap-4 lg:mx-56 lg:gap-8">
                                <div>
                                    <ul class="list-inside list-image-guidance_silabus font-wonder_magic">
                                        <li class="text-lg lg:text-2xl">Ikatan Kimia</li>
                                        <li class="text-lg lg:text-2xl">Struktur Atom dan Sistem Periodik Unsur</li>
                                        <li class="text-lg lg:text-2xl">Stoikiometri</li>
                                        <li class="text-lg lg:text-2xl">Reaksi Redoks</li>
                                        <li class="text-lg lg:text-2xl">Larutan Elektrolit dan Non<span
                                                class="font-inter">-</span>Elektrolit</li>
                                        <li class="text-lg lg:text-2xl">Termokimia</li>
                                        <li class="text-lg lg:text-2xl">Larutan Penyangga</li>
                                        <li class="text-lg lg:text-2xl">Larutan Asam Basa</li>
                                        <li class="text-lg lg:text-2xl">Kesetimbangan Kimia</li>
                                        <li class="text-lg lg:text-2xl">Koloid</li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="list-inside list-image-guidance_silabus font-wonder_magic">
                                        <li class="text-lg lg:text-2xl">Laju Reaksi</li>
                                        <li class="text-lg lg:text-2xl">Hidrolisis Garam</li>
                                        <li class="text-lg lg:text-2xl">Titrasi Asam Basa</li>
                                        <li class="text-lg lg:text-2xl">Sifat Koligatif Larutan</li>
                                        <li class="text-lg lg:text-2xl">Turunan Alkana dan Gas Mulia</li>
                                        <li class="text-lg lg:text-2xl">Benzena</li>
                                        <li class="text-lg lg:text-2xl">Isomer</li>
                                        <li class="text-lg lg:text-2xl">Reaksi Redoks dan Elektrokimia</li>
                                        <li class="text-lg lg:text-2xl">Polimer dan Biomolekul</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="relative">
                            <img src="{{ url('/images/Guidance/Fisika.svg') }}" alt=""
                                class="mx-auto mt-3 w-48 md:w-60 lg:w-80">

                            <img src="{{ url('/images/Guidance/Botol Ramuan.svg') }}" alt=""
                                class="absolute -top-12 left-0 -z-10 w-32 md:-top-20 md:w-48 lg:w-64">
                            <img src="{{ url('/images/Guidance/Buku.svg') }}" alt=""
                                class="absolute right-2 top-0 w-24 md:right-8 md:w-40 lg:right-24">
                            <img src="{{ url('/images/Home/Blink Oranye Kanan.svg') }}" alt=""
                                class="absolute right-0 top-96 -z-50 w-16 md:top-80 md:w-24 lg:top-56 lg:w-48">

                            <div class="relative mx-4 grid md:mx-24 md:grid-cols-2 md:gap-4 lg:mx-56 lg:gap-8">
                                <div>
                                    <ul class="list-inside list-image-guidance_silabus font-wonder_magic">
                                        <li class="text-lg lg:text-2xl">Besaran dan Satuan</li>
                                        <li class="text-lg lg:text-2xl">Gerak Lurus Beraturan <span
                                                class="font-inter">(</span>GLB<span class="font-inter">)</span> dan
                                            Gerak Lurus Berubah Beraturan <span class="font-inter">(</span>GLBB<span
                                                class="font-inter">)</span>
                                        </li>
                                        <li class="text-lg lg:text-2xl">Gerak Parabola</li>
                                        <li class="text-lg lg:text-2xl">Hukum Newton</li>
                                        <li class="text-lg lg:text-2xl">Gaya Gesek</li>
                                        <li class="text-lg lg:text-2xl">Usaha dan Energi</li>
                                        <li class="text-lg lg:text-2xl">Impuls dan Momentum</li>
                                        <li class="text-lg lg:text-2xl">Hukum Kekekalan Energi</li>
                                        <li class="text-lg lg:text-2xl">Fluida</li>
                                        <li class="text-lg lg:text-2xl">Suhu dan Kalor</li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="list-inside list-image-guidance_silabus font-wonder_magic">
                                        <li class="text-lg lg:text-2xl">Termodinamika</li>
                                        <li class="text-lg lg:text-2xl">Gelombang Mekanik</li>
                                        <li class="text-lg lg:text-2xl">Gelombang Bunyi</li>
                                        <li class="text-lg lg:text-2xl">Elastisitas dan Hukum Hooke</li>
                                        <li class="text-lg lg:text-2xl">Hukum Pascal</li>
                                        <li class="text-lg lg:text-2xl">Hukum Kepler</li>
                                        <li class="text-lg lg:text-2xl">Teori Relativitas</li>
                                        <li class="text-lg lg:text-2xl">Efek Fotolistrik</li>
                                        <li class="text-lg lg:text-2xl">Gelombang Elektromagnetik</li>
                                        <li class="text-lg lg:text-2xl">Fisika Kuantum</li>
                                        <li class="text-lg lg:text-2xl">Hukum Ohm</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="relative">
                            <img src="{{ url('/images/Guidance/Matematika.svg') }}" alt=""
                                class="mx-auto mt-3 w-48 md:w-60 lg:w-80">
                            <div class="relative mx-4 grid md:mx-24 md:grid-cols-2 md:gap-4 lg:mx-56 lg:gap-8">
                                <div>
                                    <ul class="list-inside list-image-guidance_silabus font-wonder_magic">
                                        <li class="text-lg lg:text-2xl">Eksponen</li>
                                        <li class="text-lg lg:text-2xl">Logaritma</li>
                                        <li class="text-lg lg:text-2xl">Persamaan dan Pertidaksamaan Linear</li>
                                        <li class="text-lg lg:text-2xl">Trigonometri</li>
                                        <li class="text-lg lg:text-2xl">Limit Fungsi Aljabar</li>
                                        <li class="text-lg lg:text-2xl">Integral</li>
                                        <li class="text-lg lg:text-2xl">Barisan dan Deret</li>
                                        <li class="text-lg lg:text-2xl">Limit</li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="list-inside list-image-guidance_silabus font-wonder_magic">
                                        <li class="text-lg lg:text-2xl">Turunan</li>
                                        <li class="text-lg lg:text-2xl">Matriks</li>
                                        <li class="text-lg lg:text-2xl">Polinomial</li>
                                        <li class="text-lg lg:text-2xl">Limit Fungsi Trigonometri</li>
                                        <li class="text-lg lg:text-2xl">Turunan Fungsi Trigonometri</li>
                                        <li class="text-lg lg:text-2xl">Vektor</li>
                                        <li class="text-lg lg:text-2xl">Statistika</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="relative">
                            <img src="{{ url('/images/Guidance/Biologi.svg') }}" alt=""
                                class="mx-auto mt-3 w-48 md:w-60 lg:w-80">

                            <img src="{{ url('/images/Home/Blink Oranye Kiri.svg') }}" alt=""
                                class="absolute -left-20 -top-6 -z-50 w-40 md:w-56 lg:w-72">
                            <img src="{{ url('/images/Guidance/Kitab.svg') }}" alt=""
                                class="absolute right-2 top-0 w-32 md:w-52 lg:w-72">

                            <div class="relative mx-4 grid md:mx-24 md:grid-cols-2 md:gap-4 lg:mx-56 lg:gap-8">
                                <div>
                                    <ul class="list-inside list-image-guidance_silabus font-wonder_magic">
                                        <li class="text-lg lg:text-2xl">Keanekaragaman Hayati</li>
                                        <li class="text-lg lg:text-2xl">Fungi</li>
                                        <li class="text-lg lg:text-2xl">Protista</li>
                                        <li class="text-lg lg:text-2xl">Sel</li>
                                        <li class="text-lg lg:text-2xl">Sistem Peredaran Darah</li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="list-inside list-image-guidance_silabus font-wonder_magic">
                                        <li class="text-lg lg:text-2xl">Transport Membran</li>
                                        <li class="text-lg lg:text-2xl">Metabolisme</li>
                                        <li class="text-lg lg:text-2xl">Genetika</li>
                                        <li class="text-lg lg:text-2xl">Bioteknologi</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="relative">
                            <img src="{{ url('/images/Guidance/Ekonomi.svg') }}" alt=""
                                class="mx-auto mt-3 w-48 md:w-60 lg:w-80">

                            <img src="{{ url('/images/Guidance/Tongkat Gurita.svg') }}" alt=""
                                class="absolute right-0 top-0 w-14 md:top-16 md:w-28 lg:w-40">

                            <div class="relative mx-4 grid md:mx-24 md:grid-cols-2 md:gap-4 lg:mx-56 lg:gap-8">
                                <div>
                                    <ul class="list-inside list-image-guidance_silabus font-wonder_magic">
                                        <li class="text-lg lg:text-2xl">Manajemen</li>
                                        <li class="text-lg lg:text-2xl">Faktor Produksi</li>
                                        <li class="text-lg lg:text-2xl">Teori Produksi</li>
                                        <li class="text-lg lg:text-2xl">Permintaan dan Penawaran</li>
                                        <li class="text-lg lg:text-2xl">Sistem Ekonomi</li>
                                        <li class="text-lg lg:text-2xl">Kebijakan Moneter dan Kebijakan Fiskal</li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="list-inside list-image-guidance_silabus font-wonder_magic">
                                        <li class="text-lg lg:text-2xl">Pasar Modal</li>
                                        <li class="text-lg lg:text-2xl">Perpajakan</li>
                                        <li class="text-lg lg:text-2xl">Akuntansi</li>
                                        <li class="text-lg lg:text-2xl">Persamaan Dasar Akuntansi</li>
                                        <li class="text-lg lg:text-2xl">Debit dan Kredit</li>
                                        <li class="text-lg lg:text-2xl">Laporan Keuangan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative mx-4 my-5 md:mx-16 lg:mx-48">
                        <img src="{{ url('/images/Guidance/Babak Semifinal.svg') }}" alt=""
                            class="mx-auto w-64 lg:w-96">

                        <h5 class="font-wonder_magic text-xl lg:text-2xl">
                            Materi yang diberikan sama dengan pada babak penyisihan, akan tetapi tingkat kesulitan lebih
                            tinggi, dan ada tambahan materi dari Teknik Kimia Dasar, yang meliputi<span
                                class="font-inter">:</span>
                        </h5>
                        <ul class="ms-8 list-inside list-image-guidance_silabus font-wonder_magic">
                            <li class="text-lg lg:text-2xl">Kimia Analisa</li>
                            <li class="text-lg lg:text-2xl">Neraca Massa</li>
                            <li class="text-lg lg:text-2xl">Teknologi Pengolahan Limbah</li>
                            <li class="text-lg lg:text-2xl">Technopreneurship</li>
                        </ul>
                    </div>

                    <div class="relative">
                        <img src="{{ url('/images/Guidance/Babak Final.svg') }}" alt=""
                            class="mx-auto w-64 lg:w-96">

                        <img src="{{ url('/images/Guidance/Tongkat Terbalik.svg') }}" alt=""
                            class="absolute left-2 top-32 w-16 md:left-6 md:top-16 md:w-40 lg:left-10 lg:w-60">
                        <img src="{{ url('/images/Guidance/Blink Oranye Kiri.svg') }}" alt=""
                            class="absolute left-0 top-32 -z-20 w-24 md:top-36 md:w-56 lg:w-64">
                        <img src="{{ url('/images/Home/Blink Oranye Kanan.svg') }}" alt=""
                            class="absolute -top-8 right-0 -z-50 w-16 md:top-0 md:w-24 lg:w-48">

                        <div class="mx-4 md:mx-16 lg:mx-56">
                            <img src="{{ url('/images/Guidance/Silabus - Praktikum.svg') }}" alt=""
                                class="mx-auto w-48 md:w-60 lg:w-80">
                            <h5 class="font-wonder_magic text-xl md:text-center lg:text-2xl">Praktikum Sintesis dan Uji
                                Produk berbasis kewirausahaan.
                            </h5>

                            <img src="{{ url('/images/Guidance/Silabus - Studi Kasus.svg') }}" alt=""
                                class="mx-auto mt-3 w-48 md:w-60 lg:w-80">
                            <ul class="list-inside list-image-guidance_silabus font-wonder_magic">
                                <li class="text-xl lg:text-2xl">Pemanfaatan kembali limbah menjadi barang dengan nilai
                                    jual.</li>
                                <li class="text-xl lg:text-2xl">Aplikasi proses hijau dalam rangka mencapai net zero
                                    emission yang
                                    tetap ekonomis.</li>
                                <li class="text-xl lg:text-2xl">Aplikasi material biodegradable sebagai salah solusi
                                    dalam
                                    pengurangan
                                    limbah.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="hidden" id="penyisihan" role="tabpanel" aria-labelledby="penyisihan-tab">
                    <div class="relative my-5">
                        <img src="{{ url('/images/Guidance/Penyisihan.svg') }}" alt=""
                            class="mx-auto w-52 md:w-64 lg:w-80">

                        <img src="{{ url('/images/Guidance/Tombak.svg') }}" alt=""
                            class="absolute left-0 top-12 -z-10 w-40 md:top-2 md:w-60 lg:top-0 lg:w-96">
                        <img src="{{ url('/images/Guidance/Tongkat Bercahaya.svg') }}" alt=""
                            class="absolute right-0 top-24 -z-10 w-24 md:w-48 lg:top-0 lg:w-72">
                        <img src="{{ url('/images/Guidance/Blink Oranye Kiri.svg') }}" alt=""
                            class="absolute left-0 top-56 -z-20 hidden w-24 md:top-80 md:block md:w-36 lg:w-64">
                        <img src="{{ url('/images/Guidance/Cincin.svg') }}" alt=""
                            class="absolute right-2 top-96 hidden w-28 lg:block">
                        <img src="{{ url('/images/Home/Blink Oranye Kanan.svg') }}" alt=""
                            class="absolute bottom-96 right-0 -z-50 w-16 md:w-24 lg:w-48">
                        <img src="{{ url('/images/Guidance/Kitab.svg') }}" alt=""
                            class="absolute bottom-96 -z-10 hidden w-32 md:right-12 md:mb-56 md:block md:w-64 lg:right-24 lg:mb-0 lg:w-96 lg:pb-40">
                        <img src="{{ url('/images/Guidance/Blink Oranye Kiri.svg') }}" alt=""
                            class="absolute bottom-0 left-0 -z-20 hidden w-24 md:block md:w-36 lg:w-64">
                        <img src="{{ url('/images/Home/Blink Oranye Kanan.svg') }}" alt=""
                            class="absolute -bottom-12 right-0 -z-50 w-14 md:-bottom-24 md:w-16 lg:w-36">

                        <ol class="me-4 ms-8 list-decimal font-wonder_magic md:mx-16 lg:mx-40">
                            <li class="text-lg lg:text-2xl">
                                Babak penyisihan akan dilaksanakan secara <span
                                    class="underline underline-offset-auto">daring</span> pada<span
                                    class="font-inter">:</span>
                                <br>
                                <table class="table-auto">
                                    <tbody>
                                        <tr>
                                            <td>
                                                Hari<span class="font-inter">/</span>tanggal
                                            </td>
                                            <td>
                                                <span class="px-1 font-inter">:</span>
                                            </td>
                                            <td>Sabtu, 26 Oktober 2024</td>
                                        </tr>
                                        <tr>
                                            <td>Pukul</td>
                                            <td>
                                                <span class="px-1 font-inter">:</span>
                                            </td>
                                            <td>10.00 <span class="font-inter">-</span> 12.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Media</td>
                                            <td>
                                                <span class="px-1 font-inter">:</span>
                                            </td>
                                            <td>Website CECC 2024</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                            <li class="text-lg lg:text-2xl">
                                Babak penyisihan dilakukan setelah acara pembukaan CECC 2024 hari
                                pertama melalui video conferencing zoom dan website <a
                                    href="{{ route('home') }}">www.cecc2024.com</a>.
                            </li>
                            <li class="text-lg lg:text-2xl">
                                Setiap tim yang berpartisipasi dalam babak penyisihan terdiri atas 2
                                orang siswa<span class="font-inter">/</span>i yang berasal dari sekolah yang sama.
                            </li>
                            <li class="text-lg lg:text-2xl">Setiap tim diharapkan mempersiapkan koneksi internet yang
                                baik pada saat pelaksanaan babak penyisihan, dimana koneksi internet menjadi tanggung
                                jawab peserta CECC 2024.</li>
                            <li class="text-lg lg:text-2xl">
                                Setiap anggota masing<span class="font-inter">-</span>masing tim <span
                                    class="underline underline-offset-auto">wajib</span> bergabung ke dalam zoom
                                meeting dengan kondisi kamera menyala dan microphone mute selama babak penyisihan
                                berlangsung.
                            </li>
                            <li class="text-lg lg:text-2xl">Apabila tim tidak menyalakan kamera, maka panitia yang
                                bertugas akan
                                memberikan peringatan.</li>
                            <li class="text-lg lg:text-2xl">Seluruh tim yang berpartisipasi dalam babak penyisihan akan
                                terbagi ke dalam beberapa breakout room yang dijaga oleh panitia.</li>
                            <li class="text-lg lg:text-2xl">Setiap tim hanya dapat mengerjakan soal pada babak
                                penyisihan selama
                                waktu yang telah ditentukan oleh panitia. Setelah pukul 12.00 WIB, jawaban akan
                                tersubmit secara otomatis dan tidak ada perpanjangan waktu meskipun pengerjaan masih
                                belum selesai.</li>
                            <li class="text-lg lg:text-2xl">Setiap anggota tim dapat mengerjakan soal pada babak
                                penyisihan secara
                                bersamaan atau real time.</li>
                            <li class="text-lg lg:text-2xl">
                                Pengerjaan soal pada babak penyisihan diwajibkan menggunakan
                                laptop<span class="font-inter">/</span>komputer yang dilengkapi kamera webcam dan tidak
                                dianjurkan menggunakan handphone.
                            </li>
                            <li class="text-lg lg:text-2xl">
                                Sebelum babak penyisihan dimulai, peserta akan log in terlebih dahulu
                                melalui website <a href="{{ route('home') }}">www.cecc2024.com</a> menggunakan email
                                dan password yang telah didaftarkan pada saat registrasi.
                            </li>
                            <li class="text-lg lg:text-2xl">Babak penyisihan berupa 50 soal pilihan ganda dengan waktu
                                pengerjaan
                                selama 120 menit, terhitung sejak babak penyisihan dimulai.</li>
                            <li class="text-lg lg:text-2xl">
                                Cakupan materi pada babak penyisihan meliputi<span class="font-inter">:</span>
                                <table class="table-auto">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="{{ url('/images/Guidance/Cairan.svg') }}" alt=""
                                                    class="h-8">
                                            </td>
                                            <td>Kimia</td>
                                            <td>
                                                <span class="px-1 font-inter">:</span>
                                            </td>
                                            <td>30<span class="font-inter">%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ url('/images/Guidance/Cairan.svg') }}" alt=""
                                                    class="h-8">
                                            </td>
                                            <td>Fisika</td>
                                            <td>
                                                <span class="px-1 font-inter">:</span>
                                            </td>
                                            <td>20<span class="font-inter">%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ url('/images/Guidance/Cairan.svg') }}" alt=""
                                                    class="h-8">
                                            </td>
                                            <td>Matematika</td>
                                            <td>
                                                <span class="px-1 font-inter">:</span>
                                            </td>
                                            <td>20<span class="font-inter">%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ url('/images/Guidance/Cairan.svg') }}" alt=""
                                                    class="h-8">
                                            </td>
                                            <td>Biologi</td>
                                            <td>
                                                <span class="px-1 font-inter">:</span>
                                            </td>
                                            <td>15<span class="font-inter">%</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ url('/images/Guidance/Cairan.svg') }}" alt=""
                                                    class="h-8">
                                            </td>
                                            <td>Ekonomi</td>
                                            <td>
                                                <span class="px-1 font-inter">:</span>
                                            </td>
                                            <td>15<span class="font-inter">%</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                            <li class="text-lg lg:text-2xl">
                                Setiap soal memiliki bobot nilai yang sama sebagai berikut<span
                                    class="font-inter">:</span>
                                <table class="table-auto">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="{{ url('/images/Guidance/Cairan.svg') }}" alt=""
                                                    class="h-8">
                                            </td>
                                            <td>Benar</td>
                                            <td>
                                                <span class="px-1 font-inter">:</span>
                                            </td>
                                            <td>
                                                <span class="font-inter">+</span>2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ url('/images/Guidance/Cairan.svg') }}" alt=""
                                                    class="h-8">
                                            </td>
                                            <td>Salah</td>
                                            <td>
                                                <span class="px-1 font-inter">:</span>
                                            </td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ url('/images/Guidance/Cairan.svg') }}" alt=""
                                                    class="h-8">
                                            </td>
                                            <td>Tidak Menjawab</td>
                                            <td>
                                                <span class="px-1 font-inter">:</span>
                                            </td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                            <li class="text-lg lg:text-2xl">Peserta yang terlambat tidak akan mendapatkan tambahan
                                waktu.</li>
                            <li class="text-lg lg:text-2xl">
                                Peserta <span class="underline underline-offset-auto">tidak</span> diperbolehkan
                                membuka literatur dan <span class="underline underline-offset-auto">tidak</span> boleh
                                berkomunikasi dengan pihak lain selain dari anggota tim ketika mengerjakan soal. Apabila
                                ditemukan ada tim yang melanggar, maka akan diberi peringatan.
                            </li>
                            <li class="text-lg lg:text-2xl">Peserta diperbolehkan menggunakan alat bantu hitung seperti
                                kalkulator ketika mengerjakan soal.</li>
                            <li class="text-lg lg:text-2xl">
                                Apabila terdapat kendala pada website <span class="font-inter">(</span>bukan
                                dikarenakan
                                jaringan peserta<span class="font-inter">)</span> dan dialami oleh seluruh peserta,
                                peserta dapat segera menghubungi panitia dan menyertakan bukti tangkapan layar yang
                                membuktikan bahwa
                                terdapat kendala. Selanjutnya, panitia akan memberikan link Google Form sebagai cadangan
                                lembar jawaban.
                            </li>
                            <li class="text-lg lg:text-2xl">
                                Dua puluh lima <span class="font-inter">(</span>25<span class="font-inter">)</span>
                                tim
                                dengan poin tertinggi akan lolos ke babak semifinal.
                            </li>
                            <li class="text-lg lg:text-2xl">Apabila ada tim dengan perolehan poin yang sama, maka tim
                                dengan waktu pengerjaan soal tersingkat akan berada pada peringkat yang lebih tinggi.
                            </li>
                            <li class="text-lg lg:text-2xl">Apabila tim yang sama mendapatkan peringatan sebanyak 3
                                kali, maka tim yang bersangkutan akan didiskualifikasi dari CECC 2024.</li>
                            <li class="text-lg lg:text-2xl">Peserta yang lolos ke babak selanjutnya akan diumumkan
                                melalui media sosial dan website CECC 2024.</li>
                            <li class="text-lg lg:text-2xl">Keputusan panitia adalah bersifat mutlak dan tidak dapat
                                diganggu gugat.</li>
                        </ol>
                    </div>
                </div>

                <div class="hidden" id="semi_final" role="tabpanel" aria-labelledby="semi_final-tab">
                    <div class="relative my-5">
                        <img src="{{ url('/images/Guidance/Semi Final.svg') }}" alt=""
                            class="mx-auto w-52 md:w-64 lg:w-80">

                        <img src="{{ url('/images/Guidance/Tombak.svg') }}" alt=""
                            class="absolute left-0 top-12 -z-10 w-40 md:top-2 md:w-60 lg:top-0 lg:w-96">
                        <img src="{{ url('/images/Guidance/Tongkat Bercahaya.svg') }}" alt=""
                            class="absolute right-0 top-24 -z-10 w-24 md:w-48 lg:top-0 lg:w-72">
                        <img src="{{ url('/images/Guidance/Blink Oranye Kiri.svg') }}" alt=""
                            class="absolute left-0 top-56 -z-20 hidden w-24 md:top-80 md:block md:w-36 lg:w-64">
                        <img src="{{ url('/images/Home/Blink Oranye Kanan.svg') }}" alt=""
                            class="absolute bottom-96 right-0 -z-50 w-16 md:w-24 lg:w-48">
                        <img src="{{ url('/images/Guidance/Blink Oranye Kiri.svg') }}" alt=""
                            class="absolute bottom-0 left-0 -z-20 hidden w-24 md:block md:w-36 lg:w-64">
                        <img src="{{ url('/images/Home/Blink Oranye Kanan.svg') }}" alt=""
                            class="absolute -bottom-12 right-0 -z-50 w-14 md:-bottom-24 md:w-16 lg:w-36">

                        <ol class="mx-4 ms-8 list-decimal font-wonder_magic md:mx-16 lg:mx-40">
                            <li class="text-lg lg:text-2xl">
                                Babak semifinal akan dilaksanakan secara <span
                                    class="underline underline-offset-auto">luring</span> pada<span
                                    class="font-inter">:</span>
                                <br>
                                <table class="table-auto">
                                    <tbody>
                                        <tr>
                                            <td>
                                                Hari<span class="font-inter">/</span>tanggal
                                            </td>
                                            <td>
                                                <span class="px-1 font-inter">:</span>
                                            </td>
                                            <td>Sabtu, 9 November 2024</td>
                                        </tr>
                                        <tr>
                                            <td>Pukul</td>
                                            <td>
                                                <span class="px-1 font-inter">:</span>
                                            </td>
                                            <td>09.00 <span class="font-inter">-</span> 11.40 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Lokasi</td>
                                            <td>
                                                <span class="px-1 font-inter">:</span>
                                            </td>
                                            <td>Universitas Katolik Widya Mandala Jl. Kalijudan 37 Surabaya</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                            <li class="text-lg lg:text-2xl">
                                Setiap anggota masing<span class="font-inter">-</span>masing tim wajib hadir tepat
                                waktu. Tim yang bertanding harus hadir secara lengkap agar diperbolehkan untuk mengikuti
                                babak ini.
                            </li>
                            <li class="text-lg lg:text-2xl">Poin dari babak penyisihan tidak diperhitungkan pada babak
                                semifinal.
                            </li>
                            <li class="text-lg lg:text-2xl">
                                Babak semifinal terdiri atas dua <span class="font-inter">(</span>2<span
                                    class="font-inter">)</span> tahapan yaitu
                                Explorers dan S<span class="font-inter">-</span>MART. Poin yang
                                diperoleh dari tahapan Explorers akan digunakan sebagai modal poin untuk memulai tahapan
                                S<span class="font-inter">-</span>MART.
                            </li>
                            <li class="text-lg lg:text-2xl">
                                Poin yang didapat selama babak semifinal Explorers tidak akan
                                diperhitungkan untuk penentuan babak final, hanya poin dari babak semifinal S<span
                                    class="font-inter">-</span>MART yang akan digunakan.
                            </li>
                            <li class="text-lg lg:text-2xl">Apabila terdapat tim yang memperoleh poin yang sama setelah
                                babak semifinal, maka akan ditentukan berdasarkan waktu pengerjaan tersingkat.</li>
                            <li class="text-lg lg:text-2xl">Setiap tim tidak diperbolehkan menggunakan alat bantu
                                hitung seperti kalkulator ketika mengerjakan soal.</li>
                            <li class="text-lg lg:text-2xl">Setiap tim tidak diperbolehkan untuk mengakses internet
                                pada saat perlombaan berlangsung.</li>
                            <li class="text-lg lg:text-2xl">Setiap tim tidak diperbolehkan untuk berkomunikasi dengan
                                tim lain selama berlangsungnya babak semifinal.</li>
                            <li class="text-lg lg:text-2xl">
                                Hasil poin pada babak S<span class="font-inter">-</span>MART, akan
                                digunakan untuk menentukan lima <span class="font-inter">(</span>5<span
                                    class="font-inter">)</span> tim dengan nilai tertinggi dan waktu pengerjaan
                                tercepat
                                yang akan lolos ke babak final.
                            </li>
                            <li class="text-lg lg:text-2xl">Jika terdapat tim dengan besar poin yang sama, maka
                                pemenang akan ditentukan berdasarkan lama waktu tim tersebut menyelesaikan babak. Jika
                                besar poin dan
                                waktu sama, maka akan ditentukan dengan tambahan pengerjaan soal untuk menentukan
                                pemenang.</li>
                            <li class="text-lg lg:text-2xl">Keputusan panitia adalah bersifat mutlak dan tidak dapat
                                diganggu gugat.</li>
                        </ol>

                        <div class="relative">
                            <img src="{{ url('/images/Guidance/Explorers.svg') }}" alt=""
                                class="mx-auto mt-3 w-48 md:w-60 lg:w-80">

                            <ol class="mx-4 ms-8 list-decimal font-wonder_magic md:mx-16 lg:mx-40">
                                <li class="text-lg lg:text-2xl">Pada tahap ini, akan ada tujuh <span
                                        class="font-inter">(</span>7<span class="font-inter">)</span> ruangan khusus
                                    yang digunakan sebagai tempat pengerjaan soal.</li>
                                <li class="text-lg lg:text-2xl">Di dalam setiap ruangan, akan ada dua <span
                                        class="font-inter">(</span>2<span class="font-inter">)</span> soal dengan
                                    keterangan mata pelajaran per ruangan sebagai berikut, dengan nama ruangan<span
                                        class="font-inter">:</span>
                                    <table class="table-auto">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="{{ url('/images/Guidance/Cairan.svg') }}"
                                                        alt="" class="h-8">
                                                </td>
                                                <td>Kimia, Fisika dan Matematika</td>
                                                <td>
                                                    <span class="px-1 font-inter">:</span>
                                                </td>
                                                <td>Katalisasi</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ url('/images/Guidance/Cairan.svg') }}"
                                                        alt="" class="h-8">
                                                </td>
                                                <td>Kimia, Biologi dan Fisika</td>
                                                <td>
                                                    <span class="px-1 font-inter">:</span>
                                                </td>
                                                <td>Molekuler</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ url('/images/Guidance/Cairan.svg') }}"
                                                        alt="" class="h-8">
                                                </td>
                                                <td>Kimia, Ekonomi dan Fisika</td>
                                                <td>
                                                    <span class="px-1 font-inter">:</span>
                                                </td>
                                                <td>Akumulasi</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ url('/images/Guidance/Cairan.svg') }}"
                                                        alt="" class="h-8">
                                                </td>
                                                <td>Fisika, Biologi dan Matematika</td>
                                                <td>
                                                    <span class="px-1 font-inter">:</span>
                                                </td>
                                                <td>Kinetika</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ url('/images/Guidance/Cairan.svg') }}"
                                                        alt="" class="h-8">
                                                </td>
                                                <td>Fisika, Matematika dan Ekonomi</td>
                                                <td>
                                                    <span class="px-1 font-inter">:</span>
                                                </td>
                                                <td>Amortisasi</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ url('/images/Guidance/Cairan.svg') }}"
                                                        alt="" class="h-8">
                                                </td>
                                                <td>Biologi, Matematika dan Ekonomi</td>
                                                <td>
                                                    <span class="px-1 font-inter">:</span>
                                                </td>
                                                <td>Aglomerasi</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ url('/images/Guidance/Cairan.svg') }}"
                                                        alt="" class="h-8">
                                                </td>
                                                <td>Teknik Kimia Dasar</td>
                                                <td>
                                                    <span class="px-1 font-inter">:</span>
                                                </td>
                                                <td>Atom</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li class="text-lg lg:text-2xl">
                                    Setiap soal memiliki bobot nilai yang sama sebagai berikut<span
                                        class="font-inter">:</span>
                                    <table class="table-auto">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="{{ url('/images/Guidance/Cairan.svg') }}"
                                                        alt="" class="h-8">
                                                </td>
                                                <td>Benar</td>
                                                <td>
                                                    <span class="px-1 font-inter">:</span>
                                                </td>
                                                <td>
                                                    <span class="font-inter">+</span>10
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ url('/images/Guidance/Cairan.svg') }}"
                                                        alt="" class="h-8">
                                                </td>
                                                <td>Salah</td>
                                                <td>
                                                    <span class="px-1 font-inter">:</span>
                                                </td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ url('/images/Guidance/Cairan.svg') }}"
                                                        alt="" class="h-8">
                                                </td>
                                                <td>Tidak Menjawab</td>
                                                <td>
                                                    <span class="px-1 font-inter">:</span>
                                                </td>
                                                <td>0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li class="text-lg lg:text-2xl">Total poin maksimum yang dapat diperoleh dalam tahap
                                    ini adalah 140 poin.</li>
                                <li class="text-lg lg:text-2xl">Akan terdapat beberapa poin gratis, yang diletakkan di
                                    sepuluh <span class="font-inter">(</span>10<span class="font-inter">)</span>
                                    lokasi
                                    sekitar kampus Kalijudan Universitas Katolik Widya Mandala Surabaya.</li>
                                <li class="text-lg lg:text-2xl">Setiap tim akan diberikan satu buah peta yang
                                    menunjukkan denah Kampus Kalijudan Universitas Katolik Widya Mandala Surabaya,
                                    beserta petunjuk<span class="font-inter">-</span>petunjuk mengenai lokasi ruangan
                                    yang dapat dikunjungi peserta.
                                </li>
                                <li class="text-lg lg:text-2xl">Setiap tim diberi kebebasan untuk mengunjungi ruangan
                                    manapun dan kapanpun, selama pada ruangan tersebut masih tersedia tempat kosong.
                                </li>
                                <li class="text-lg lg:text-2xl">Setiap ruangan hanya dapat menampung paling banyak tiga
                                    <span class="font-inter">(</span>3<span class="font-inter">)</span> tim. Apabila
                                    ruangan penuh, maka tim berikutnya dipersilahkan menunggu, atau mencari ruangan
                                    lain.
                                </li>
                                <li class="text-lg lg:text-2xl">Suatu tim hanya diperbolehkan untuk mengunjungi setiap
                                    ruangan dalam peta sebanyak satu kali saja. Ruangan yang sudah dikunjungi akan
                                    diberi stamp oleh panitia pada denah.</li>
                                <li class="text-lg lg:text-2xl">Waktu pengerjaan soal pada masing<span
                                        class="font-inter">-</span>masing ruangan adalah
                                    10 menit. Jika waktu telah berakhir, maka peserta harus langsung menyerahkan
                                    pekerjaan mereka dan bergegas mencari ruangan selanjutnya.</li>
                                <li class="text-lg lg:text-2xl">Waktu total untuk tahap ini adalah 90 menit, dan
                                    setelah waktu berakhir, seluruh ruangan akan ditutup dan seluruh peserta harus
                                    kembali ke ruangan Auditorium Gedung A Lantai 2. Peserta yang masih mengerjakan soal
                                    di suatu ruangan harus langsung menyerahkan pekerjaan mereka.</li>
                            </ol>
                        </div>

                        <div class="relative my-5">
                            <img src="{{ url('/images/Guidance/S-MART.svg') }}" alt=""
                                class="mx-auto mt-3 w-48 md:w-60 lg:w-80">

                            <ol class="mx-4 ms-8 list-decimal font-wonder_magic md:mx-16 lg:mx-40">
                                <li class="text-lg lg:text-2xl">Pada tahap ini, seluruh peserta akan berkumpul di
                                    ruangan Auditorium Gedung A Lantai 2.</li>
                                <li class="text-lg lg:text-2xl">Pada tahapan ini akan disediakan lima <span
                                        class="font-inter">(</span>5<span class="font-inter">)</span> tempat
                                    pengerjaan
                                    soal, dengan setiap tempat akan disediakan 10 paket soal dengan level kesulitan yang
                                    beragam.</li>
                                <li class="text-lg lg:text-2xl">Setiap paket soal akan memiliki harganya masing<span
                                        class="font-inter">-</span>masing
                                    tergantung dengan tingkat kesulitan dari soal tersebut.</li>
                                <li class="text-lg lg:text-2xl">Soal hanya dapat dibeli dengan menggunakan poin yang
                                    telah dikumpulkan selama babak semifinal Explorers.</li>
                                <li class="text-lg lg:text-2xl">Rincian dari tingkat kesulitan dan harga paket soal
                                    yang tersedia sebagai berikut<span class="font-inter">:</span>
                                    <table class="table-auto">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="{{ url('/images/Guidance/Cairan.svg') }}"
                                                        alt="" class="h-8">
                                                </td>
                                                <td>1</td>
                                                <td>
                                                    <span class="px-1 font-inter">:</span>
                                                </td>
                                                <td>2 poin</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ url('/images/Guidance/Cairan.svg') }}"
                                                        alt="" class="h-8">
                                                </td>
                                                <td>3</td>
                                                <td>
                                                    <span class="px-1 font-inter">:</span>
                                                </td>
                                                <td>5 poin</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ url('/images/Guidance/Cairan.svg') }}"
                                                        alt="" class="h-8">
                                                </td>
                                                <td>5</td>
                                                <td>
                                                    <span class="px-1 font-inter">:</span>
                                                </td>
                                                <td>7 poin</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ url('/images/Guidance/Cairan.svg') }}"
                                                        alt="" class="h-8">
                                                </td>
                                                <td>8</td>
                                                <td>
                                                    <span class="px-1 font-inter">:</span>
                                                </td>
                                                <td>10 poin</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li class="text-lg lg:text-2xl">Rincian dari tingkat kesulitan dan harga paket soal
                                    yang tersedia sebagai berikut<span class="font-inter">:</span>
                                    <table class="table-auto">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="{{ url('/images/Guidance/Cairan.svg') }}"
                                                        alt="" class="h-8">
                                                </td>
                                                <td>1</td>
                                                <td>
                                                    <span class="px-1 font-inter">:</span>
                                                </td>
                                                <td>4 poin</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ url('/images/Guidance/Cairan.svg') }}"
                                                        alt="" class="h-8">
                                                </td>
                                                <td>3</td>
                                                <td>
                                                    <span class="px-1 font-inter">:</span>
                                                </td>
                                                <td>10 poin</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ url('/images/Guidance/Cairan.svg') }}"
                                                        alt="" class="h-8">
                                                </td>
                                                <td>5</td>
                                                <td>
                                                    <span class="px-1 font-inter">:</span>
                                                </td>
                                                <td>14 poin</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ url('/images/Guidance/Cairan.svg') }}"
                                                        alt="" class="h-8">
                                                </td>
                                                <td>8</td>
                                                <td>
                                                    <span class="px-1 font-inter">:</span>
                                                </td>
                                                <td>20 poin</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>
                                        <span class="font-inter">(</span><span class="font-inter">*</span>Poin
                                        maksimum
                                        hanya didapat bila jawaban yang dipilih peserta disertai dengan cara
                                        penyelesaian yang jelas, jika tidak hanya separuh dari poin maksimum yang akan
                                        diberikan<span class="font-inter">)</span>
                                    </p>
                                </li>
                                <li class="text-lg lg:text-2xl">Peserta dipersilahkan untuk mengunjungi lokasi yang
                                    sama lebih dari satu kali.</li>
                                <li class="text-lg lg:text-2xl">Peserta dipersilahkan membeli soal sebanyak<span
                                        class="font-inter">-</span>banyaknya
                                    dengan catatan poin yang dimiliki masih tercukupi, dan dapat berhenti ketika poin
                                    telah habis.</li>
                                <li class="text-lg lg:text-2xl">Paket soal yang telah dibeli oleh peserta tidak dapat
                                    dibeli lagi, dan peserta dapat memilih paket soal yang lain.</li>
                                <li class="text-lg lg:text-2xl">Waktu pengerjaan soal pada masing<span
                                        class="font-inter">-</span>masing lokasi adalah
                                    5 menit. Jika waktu telah berakhir, maka peserta harus langsung menyerahkan
                                    pekerjaan mereka dan bergegas mencari lokasi selanjutnya.</li>
                                <li class="text-lg lg:text-2xl">Waktu total untuk tahap ini adalah 70 menit, dan
                                    setelah waktu berakhir, seluruh lokasi akan ditutup. Peserta yang masih mengerjakan
                                    soal di suatu lokasi harus langsung menyerahkan pekerjaan mereka.</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="hidden" id="final" role="tabpanel" aria-labelledby="final-tab">
                    <div class="relative my-5">
                        <img src="{{ url('/images/Guidance/Final.svg') }}" alt=""
                            class="mx-auto w-52 md:w-64 lg:w-80">

                        <img src="{{ url('/images/Guidance/Tombak.svg') }}" alt=""
                            class="absolute left-0 top-12 -z-10 w-40 md:top-2 md:w-60 lg:top-0 lg:w-96">
                        <img src="{{ url('/images/Guidance/Tongkat Bercahaya.svg') }}" alt=""
                            class="absolute right-0 top-24 -z-10 w-24 md:w-48 lg:top-0 lg:w-72">
                        <img src="{{ url('/images/Guidance/Blink Oranye Kiri.svg') }}" alt=""
                            class="absolute left-0 top-56 -z-20 hidden w-24 md:top-80 md:block md:w-36 lg:w-64">
                        <img src="{{ url('/images/Home/Blink Oranye Kanan.svg') }}" alt=""
                            class="absolute bottom-96 right-0 -z-50 w-16 md:w-24 lg:w-48">
                        <img src="{{ url('/images/Guidance/Blink Oranye Kiri.svg') }}" alt=""
                            class="absolute bottom-0 left-0 -z-20 hidden w-24 md:block md:w-36 lg:w-64">
                        <img src="{{ url('/images/Home/Blink Oranye Kanan.svg') }}" alt=""
                            class="absolute -bottom-12 right-0 -z-50 w-14 md:-bottom-24 md:w-16 lg:w-36">

                        <ol class="mx-4 ms-8 list-decimal font-wonder_magic md:mx-16 lg:mx-40">
                            <li class="text-lg lg:text-2xl">
                                Babak final akan dilaksanakan secara <span
                                    class="underline underline-offset-auto">luring</span> pada<span
                                    class="font-inter">:</span>
                                <br>
                                <table class="table-auto">
                                    <tbody class="align-top">
                                        <tr>
                                            <td>
                                                Hari<span class="font-inter">/</span>tanggal
                                            </td>
                                            <td>
                                                <span class="px-1 font-inter">:</span>
                                            </td>
                                            <td>Sabtu, 9 November 2024</td>
                                        </tr>
                                        <tr>
                                            <td>Pukul</td>
                                            <td>
                                                <span class="px-1 font-inter">:</span>
                                            </td>
                                            <td>13.20 <span class="font-inter">-</span> 15.20 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Lokasi</td>
                                            <td>
                                                <span class="px-1 font-inter">:</span>
                                            </td>
                                            <td>
                                                <span>Ruang D104 <span class="font-inter">-</span> D106 Gedung
                                                    Dionisius
                                                    dan
                                                    Laboratorium Kimia Organik dan Kimia Fisika
                                                    <br>
                                                    Universitas Katolik Widya Mandala Surabaya
                                                    <br>
                                                    Jl. Kalijudan 37 Surabaya</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                            <li class="text-lg lg:text-2xl">Babak final diikuti oleh lima <span
                                    class="font-inter">(</span>5<span class="font-inter">)</span> tim yang lolos dari
                                babak semifinal.</li>
                            <li class="text-lg lg:text-2xl">Babak final terdiri atas dua <span
                                    class="font-inter">(</span>2<span class="font-inter">)</span> tahapan yaitu
                                Praktikum dan Studi Kasus.</li>
                            <li class="text-lg lg:text-2xl">Poin dari babak semifinal tidak diperhitungkan pada babak
                                final.</li>
                            <li class="text-lg lg:text-2xl">Tahapan Praktikum dan Studi Kasus berlangsung secara
                                bersamaan dalam ruangan yang berbeda.</li>
                            <li class="text-lg lg:text-2xl">Tim peringkat 1 dan 5 pada babak semifinal akan melakukan
                                Praktikum terlebih dahulu. Sedangkan tim peringkat 2, 3, dan 4 akan melakukan Studi
                                Kasus terlebih dahulu.</li>
                            <li class="text-lg lg:text-2xl">Pemenang dari CECC 2024 ditentukan dari total nilai yang
                                diperoleh dari tahapan Praktikum dan Studi Kasus.</li>
                            <li class="text-lg lg:text-2xl">Apabila dalam penentuan pemenang terdapat perolehan poin
                                yang sama, maka akan dilakukan pengerjaan soal tambahan untuk tim yang bersangkutan
                                hingga diperoleh poin yang berbeda.</li>
                            <li class="text-lg lg:text-2xl">Setiap tim dilarang untuk berkomunikasi dengan tim lain.
                            </li>
                            <li class="text-lg lg:text-2xl">Setiap tim dilarang untuk menggunakan gawai dengan
                                keperluan apapun, kecuali jika panitia mengizinkan.</li>
                            <li class="text-lg lg:text-2xl">Setiap bentuk pelanggaran terhadap peraturan akan
                                didiskualifikasi dari rangkaian kegiatan CECC 2024.</li>
                            <li class="text-lg lg:text-2xl">Keputusan panitia adalah bersifat mutlak dan tidak dapat
                                diganggu gugat.</li>
                        </ol>

                        <div class="relative">
                            <img src="{{ url('/images/Guidance/Final - Praktikum.svg') }}" alt=""
                                class="mx-auto mt-3 w-48 md:w-60 lg:w-80">

                            <ol class="mx-4 ms-8 list-decimal font-wonder_magic md:mx-16 lg:mx-40">
                                <li class="text-lg lg:text-2xl">Tahapan praktikum akan dilakukan di Laboratorium Kimia
                                    Organik dan Kimia Fisika, Universitas Katolik Widya Mandala Surabaya, Kampus
                                    Kalijudan.</li>
                                <li class="text-lg lg:text-2xl">Peserta wajib menggunakan peralatan keamanan
                                    laboratorium seperti jas lab, sarung tangan, masker, dll. Jas lab harap dibawa oleh
                                    masing-masing peserta, peralatan keamanan lab yang lain akan disediakan oleh
                                    panitia.</li>
                                <li class="text-lg lg:text-2xl">Tim tidak diperbolehkan untuk berkomunikasi dengan tim
                                    lain dengan cara apapun.</li>
                                <li class="text-lg lg:text-2xl">Setelah melakukan praktikum, finalis akan menjawab
                                    soal<span class="font-inter">-</span>soal berdasarkan praktikum yang dilakukan.
                                </li>
                                <li class="text-lg lg:text-2xl">Waktu praktikum total yang disediakan adalah 45 menit.
                                </li>
                                <li class="text-lg lg:text-2xl">Sistem penilaian pada tahapan praktikum <span
                                        class="font-inter">(</span>untuk setiap soal<span class="font-inter">)</span>
                                    bergantung pada tingkat kesulitan soal, dan akan disertakan poin maksimumnya pada
                                    soal.</li>
                            </ol>
                        </div>

                        <div class="relative my-5">
                            <img src="{{ url('/images/Guidance/Final - Studi Kasus.svg') }}" alt=""
                                class="mx-auto mt-3 w-48 md:w-60 lg:w-80">

                            <ol class="mx-4 ms-8 list-decimal font-wonder_magic md:mx-16 lg:mx-40">
                                <li class="text-lg lg:text-2xl">Finalis akan memasuki ruangan untuk tahapan studi kasus
                                    dengan topik studi kasus yang berbeda<span class="font-inter">-</span>beda pada
                                    tiap
                                    ruangan. Terdapat tiga <span class="font-inter">(</span>3<span
                                        class="font-inter">)</span>
                                    topik yang dibagikan berkaitan dengan bidang Teknik Kimia, masing<span
                                        class="font-inter">-</span>masing pada ruangan D104, D105 dan D106.</li>
                                <li class="text-lg lg:text-2xl">Tahapan Studi Kasus akan berlangsung selama 14 menit
                                    per ruangan yang terdiri dari 3 menit membaca materi, 4 menit presentasi, dan 7
                                    menit tanya jawab.</li>
                                <li class="text-lg lg:text-2xl">Finalis wajib mengikuti seluruh topik studi kasus
                                    secara bergantian dengan waktu yang diberikan untuk transisi antar ruangan selama 1
                                    menit.</li>
                                <li class="text-lg lg:text-2xl">Waktu total untuk keseluruhan studi kasus adalah 45
                                    menit.</li>
                                <li class="text-lg lg:text-2xl">Sistem penilaian pada tahap studi kasus akan
                                    berdasarkan penilaian juri pada masing<span class="font-inter">-</span>masing
                                    topik.
                                </li>
                                <li class="text-lg lg:text-2xl">Topik yang diberikan untuk studi kasus adalah<span
                                        class="font-inter">:</span>
                                    <ul class="list-inside list-image-guidance_silabus">
                                        <li class="text-lg lg:text-2xl">Pemanfaatan kembali limbah menjadi barang
                                            dengan nilai jual.</li>
                                        <li class="text-lg lg:text-2xl">Aplikasi proses hijau dalam rangka mencapai net
                                            zero emission yang tetap ekonomis.</li>
                                        <li class="text-lg lg:text-2xl">Aplikasi material biodegradable sebagai salah
                                            solusi dalam pengurangan limbah.</li>
                                    </ul>
                                </li>
                                <li class="text-lg lg:text-2xl">Topik terperinci akan dibagikan setelah pengumuman
                                    semifinalis, yakni setelah Babak Penyisihan berakhir.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-16">
        <x-sponsors />
    </section>
</x-guest-layout>
