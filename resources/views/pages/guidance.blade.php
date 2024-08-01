@section('title', 'Guidance')

<x-guest-layout>
    <x-hero />

    <section class="relative bg-gradient-to-b from-custom-licorice from-10% to-custom-eerie_black to-20%">
        <img src="{{ url('/images/Guidance/Guidance Tabs.svg') }}" alt=""
            class="absolute z-0 hidden w-full md:block">

        <div class="relative z-50">
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
                            <li>Peserta merupakan pelajar aktif SMA/SMK/Sederajat</li>
                            <li>1 tim terdiri dari 2 orang anggota dengan ketentuan berasal dari sekolah yang sama
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
                                            <li>Kartu pelajar/surat rekomendasi dalam bentuk PDF</li>
                                            <li>Foto diri dalam bentuk JPG dengan ketentuan rapi berkerah dengan
                                                background berwarna bebas dan polos</li>
                                            <li>Bukti pembayaran pendaftaran</li>
                                            <li>Screenshot bukti follow Instagram <a
                                                    href="https://www.instagram.com/ceccukwms/" target="_blank"
                                                    rel="noopener noreferrer">@ceccukwms</a> dari masing-masing anggota
                                                tim dalam bentuk JPG</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="mx-4 my-4 grid place-items-center gap-3 md:my-0 md:-mt-32 md:grid-cols-2 lg:my-12 lg:gap-0">
                                <div class="grid gap-2 md:mx-6">
                                    <img src="{{ url('/images/Guidance/Alur 2.svg') }}" alt=""
                                        class="mx-auto w-2/5 md:me-auto lg:ms-36">
                                    <div class="grid grid-cols-2 gap-4 font-magic lg:ms-36">
                                        <div>
                                            <ul class="list-disc">
                                                <li>Batch 1</li>
                                                <p>1 Juli - 31 Agustus 2024</p>
                                                <p>Biaya pendaftaran:</p>
                                                <div class="ms-8">
                                                    <li>Opsi 1: Rp80.000/tim</li>
                                                    <li>Opsi 2: Rp200,000/3 tim</li>
                                                </div>
                                            </ul>
                                            <ul class="list-disc">
                                                <li>Batch 2</li>
                                                <p>1 September - 7 Oktober 2024</p>
                                                <p>Biaya pendaftaran:</p>
                                                <ul class="ms-8 list-disc">
                                                    <li>Opsi 1: Rp100.000/tim</li>
                                                    <li>Opsi 2: Rp260,000/3 tim</li>
                                                </ul>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="list-disc">
                                                <li>Biaya pendaftaran dapat ditransfer ke bendahara CECC 2024 melalui
                                                    beberapa
                                                    opsi
                                                    berikut:</li>
                                                <ul class="ms-8 list-disc">
                                                    <li>Bank ....</li>
                                                    <li>Bank ....</li>
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
                                        class="absolute right-0 hidden md:w-20 lg:w-32 lg:mb-12 md:block">
                                <div class="flex items-center gap-3 md:-ms-20 md:me-6 lg:-ms-72 lg:me-8">
                                    <div class="flex-auto">
                                        <img src="{{ url('/images/Guidance/Alur 3.svg') }}" alt=""
                                            class="md:h-28 md:w-fit lg:h-36">
                                    </div>
                                    <div class="flex">
                                        <p class="font-magic">Mengisi data diri dan mengupload berkas pendaftaran</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="z-50 mx-6 my-4 grid grid-cols-2 gap-3 md:mx-0 md:ms-20 md:grid-cols-1 lg:my-16 lg:ms-56">
                                <img src="{{ url('/images/Guidance/Alur 4.svg') }}" alt="" class="md:w-1/5">
                                <div class="font-magic md:w-1/3">
                                    <ul class="ms-8 list-disc">
                                        <li>Konfirmasi pendaftaran</li>
                                        <li>Akun login website</li>
                                        <li>Link WAG CECC 2024</li>
                                    </ul>
                                    <br>
                                    <p>Segala pemberitahuan akan disampaikan melalui IG, FB, Twitter, dan WAG CECC
                                        2024</p>
                                </div>
                            </div>
                            <img src="{{ url('/images/Guidance/Pembaca.svg') }}" alt=""
                                class="relative -z-10 w-full md:-mt-56 lg:-mt-72">
                        </div>

                        <img src="{{ url('/images/Guidance/Tombak.svg') }}" alt=""
                            class="absolute -top-4 left-0 w-48 md:w-60 lg:top-0 lg:w-96">
                        <img src="{{ url('/images/Guidance/Cincin.svg') }}" alt=""
                            class="absolute -top-24 right-0 w-28 md:w-40 lg:w-64">
                    </div>
                </div>

                <div class="hidden" id="silabus" role="tabpanel" aria-labelledby="silabus-tab">
                    <p>Silabus</p>
                </div>

                <div class="hidden" id="penyisihan" role="tabpanel" aria-labelledby="penyisihan-tab">
                    <p>Penyisihan</p>
                </div>

                <div class="hidden" id="semi_final" role="tabpanel" aria-labelledby="semi_final-tab">
                    <p>Semi Final</p>
                </div>

                <div class="hidden" id="final" role="tabpanel" aria-labelledby="final-tab">
                    <p>Final</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-10">
        <x-sponsors />
    </section>
</x-guest-layout>
