@section('title', 'Chemical Engineering Challenge & Competition 2024')

<x-guest-layout>
    <x-hero />

    <section
        class="relative bg-gradient-to-b from-custom-licorice from-5% to-custom-eerie_black to-10% p-4 sm:p-6 lg:p-8">
        <img src="{{ url('/images/Home/Apa itu CECC.png') }}" alt="" class="z-10 mx-auto w-11/12 md:w-3/4">
        <img src="{{ url('/images/Home/Visi & Misi.png') }}" alt="" class="z-10 mx-auto w-11/12 lg:w-[100%]"
            loading="lazy">

        <img src="{{ url('/images/Home/Cairan.svg') }}" alt=""
            class="absolute left-0 top-32 w-20 md:top-56 md:w-32 lg:w-80">
        <img src="{{ url('/images/Home/Botol Kiri.svg') }}" alt=""
            class="absolute -bottom-16 left-0 -z-50 w-20 md:-bottom-56 md:w-40 lg:-bottom-96 lg:w-72">
        <img src="{{ url('/images/Home/Blink Oranye Kiri.svg') }}" alt=""
            class="absolute bottom-24 left-16 -z-50 hidden -translate-y-1/2 transform md:block md:w-48 lg:w-64">
        <img src="{{ url('/images/Home/Blink Oranye Tengah.svg') }}" alt=""
            class="absolute bottom-0 left-1/2 -z-50 hidden -translate-x-1/2 -translate-y-1/2 transform md:block md:w-56 lg:w-96">
        <img src="{{ url('/images/Home/Blink Oranye Kanan.svg') }}" alt=""
            class="absolute right-0 top-24 -z-50 w-16 md:w-24 lg:w-64">
    </section>

    <section class="relative">
        <img src="{{ url('/images/Home/Timeline.svg') }}" alt="" class="mx-auto w-1/3 md:w-1/4 lg:w-[40%]">

        <img src="{{ url('/images/Home/Botol Tongkat.svg') }}" alt=""
            class="absolute -top-32 right-0 w-20 md:-top-36 md:w-36 lg:-top-80 lg:w-80">

        <div class="my-2 space-y-4 md:my-0 lg:space-y-0">
            <div class="grid gap-3 md:grid-cols-2 lg:gap-0">
                <img src="{{ url('/images/Home/Penyihir.svg') }}" alt="" class="hidden md:block">
                <div class="flex items-center justify-start gap-3 px-4 py-1 font-magic text-lg md:py-4 lg:px-12">
                    <img src="{{ url('/images/Home/September.svg') }}" alt="" class="w-1/4 lg:w-1/3">
                    <div>
                        <p class="lg:text-2xl">Master in Chemistry, Experiment with Us & Lab Tour</p>
                        <p class="lg:text-2xl">Sabtu, 28 September 2024</p>
                        <p class="lg:text-2xl">(Hybrid)</p>
                    </div>
                </div>
            </div>
            <img src="{{ url('/images/Home/Blink Ungu Atas.svg') }}" alt=""
                class="-z-50 hidden transform md:block md:w-2/5 md:-translate-y-12 md:translate-x-1/2 lg:-translate-y-1/3">
            <div class="grid gap-3 md:grid-cols-2 lg:gap-0">
                <div
                    class="flex items-center justify-start gap-3 px-4 py-1 font-magic text-lg md:-mt-10 md:justify-center md:py-4 lg:px-12">
                    <img src="{{ url('/images/Home/Oktober.svg') }}" alt="" class="w-1/4 lg:w-1/3">
                    <div>
                        <p class="lg:text-2xl">Technical Meeting & Try Out</p>
                        <p class="lg:text-2xl">Sabtu, 12 Oktober 2024</p>
                        <p class="lg:text-2xl">(Online)</p>
                        <br>
                        <p class="lg:text-2xl">Babak Penyisihan</p>
                        <p class="lg:text-2xl">Sabtu, 26 Oktober 2024</p>
                        <p class="lg:text-2xl">(Online)</p>
                    </div>
                </div>
                <img src="{{ url('/images/Home/Kalung.svg') }}" alt=""
                    class="mx-auto hidden w-1/2 md:-mt-10 md:block">
            </div>
            <img src="{{ url('/images/Home/Blink Ungu Tengah.svg') }}" alt=""
                class="-z-50 hidden transform md:block md:w-2/5 md:translate-x-1/4 md:translate-y-0 lg:translate-x-1/3">
            <div
                class="flex items-center gap-3 px-4 py-1 font-magic text-lg md:ms-24 md:justify-center lg:mt-8 lg:px-12 lg:py-4">
                <img src="{{ url('/images/Home/November.svg') }}" alt="" class="w-24 lg:w-48">
                <div>
                    <p class="lg:text-2xl">Babak Semifinal dan Final</p>
                    <p class="lg:text-2xl">Sabtu, 9 November 2024</p>
                    <p class="lg:text-2xl">(Offline)</p>
                    <p class="lg:text-2xl">Universitas Katolik Widya Mandala</p>
                    <p class="lg:text-2xl">Jalan Kalijudan 37 Surabaya</p>
                </div>
            </div>
        </div>
        <img src="{{ url('/images/Home/Blink Ungu Bawah.svg') }}" alt=""
            class="-z-50 mt-0 hidden translate-x-full transform md:left-64 md:block md:w-1/3">
        <img src="{{ url('/images/Home/Pembaca.svg') }}" alt=""
            class="absolute bottom-0 z-10 hidden w-5/12 md:-mb-10 md:block lg:-mb-20" loading="lazy">

        <img src="{{ url('/images/Home/Berlian Hijau.svg') }}" alt=""
            class="absolute bottom-96 mb-24 hidden w-16 md:right-16 md:block lg:right-36">
        <img src="{{ url('/images/Home/Tangan Bola Api.svg') }}" alt=""
            class="absolute right-0 hidden md:-bottom-32 md:block md:w-48 lg:-bottom-32 lg:w-72">
    </section>

    <section class="px-4 md:px-8 lg:px-20">
        <img src="{{ url('/images/Home/Penghargaan.svg') }}" alt=""
            class="m-0 mx-auto w-2/3 md:w-1/2 lg:w-[70%]">

        <img src="{{ url('/images/Home/Juara.svg') }}" alt="" class="mx-auto" loading="lazy">
        <div class="flex justify-center gap-3 text-center font-metal_mania">
            <div class="md:px-4 lg:px-10">
                <p class="text-3xl">Juara 2</p>
                <p class="md:text-lg lg:text-xl">uang tunai <span class="text-xl">Rp 3.000.000,00</span> + plakat +
                    piagam
                    penghargaan</p>
            </div>
            <div class="md:px-4 lg:px-10">
                <p class="text-3xl">Juara I</p>
                <p class="md:text-lg lg:text-xl">uang tunai <span class="text-xl">Rp 5.000.000,00</span> + plakat +
                    piagam
                    penghargaan</p>
            </div>
            <div class="md:px-4 lg:px-10">
                <p class="text-3xl">Juara 3</p>
                <p class="md:text-lg lg:text-xl">uang tunai <span class="text-xl">Rp 2.000.000,00</span> + plakat +
                    piagam
                    penghargaan</p>
            </div>
        </div>
        <br>
        <p class="text-center font-metal_mania md:text-lg lg:px-4 lg:text-xl">Ketiga juara Chemical Engineering
            Challenge and Competition 2024 mendapat fasilitas bebas tes masuk, Uang Sumbangan Pendidikan (USP), dan uang
            kuliah 8 semester jika melanjutkan studi S-1 Program Studi kimia Universitas Katolik Widya Mandala Surabaya
        </p>
    </section>

    <section class="my-5">
        <div class="flex items-center">
            <img src="{{ url('/images/Home/Berlian Pink.svg') }}" alt="" class="h-8 flex-1 md:h-16 lg:h-24">
            <img src="{{ url('/images/Home/Teaser.svg') }}" alt="" class="w-1/2 shrink-0 md:w-1/3">
            <img src="{{ url('/images/Home/Berlian Pink.svg') }}" alt="" class="h-8 flex-1 md:h-16 lg:h-24">
        </div>

        <div x-data="{ currentSlide: 1, totalSlides: 4 }">
            <div class="relative">
                <div x-show="currentSlide === 1" class="mx-auto max-w-fit">
                    <img src="{{ url('/images/Home/Teaser 1.png') }}" class="mx-auto my-5 w-2/3 md:w-1/2"
                        alt="">
                </div>
                <div x-show="currentSlide === 2" class="mx-auto max-w-fit">
                    <img src="{{ url('/images/Home/Teaser 2.png') }}" class="mx-auto my-5 w-2/3 md:w-1/2"
                        alt="">
                </div>
                <div x-show="currentSlide === 3" class="mx-auto max-w-fit">
                    <img src="{{ url('/images/Home/Teaser 3.png') }}" class="mx-auto my-5 w-2/3 md:w-1/2"
                        alt="">
                </div>
                <div x-show="currentSlide === 4" class="mx-auto max-w-fit">
                    <img src="{{ url('/images/Home/Teaser 4.png') }}" class="mx-auto my-5 w-2/3 md:w-1/2"
                        alt="">
                </div>

                <button @click="currentSlide = (currentSlide === 1) ? totalSlides : currentSlide - 1"
                    class="absolute left-0 top-1/2 mx-4 -translate-y-1/2 transform cursor-pointer p-3 focus:scale-100 md:mx-20 md:rounded-full md:bg-white/30 md:backdrop-blur md:hover:bg-custom-ube md:focus:ring md:focus:ring-custom-ube md:focus:ring-opacity-50 lg:mx-48">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>
                </button>
                <button @click="currentSlide = (currentSlide === totalSlides) ? 1 : currentSlide + 1"
                    class="absolute right-0 top-1/2 mx-4 -translate-y-1/2 transform cursor-pointer p-3 focus:scale-100 md:mx-20 md:rounded-full md:bg-white/30 md:backdrop-blur md:hover:bg-custom-ube md:focus:ring md:focus:ring-custom-ube md:focus:ring-opacity-50 lg:mx-48">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </button>

                <div class="mt-4 flex justify-center">
                    <template x-for="slide in Array(totalSlides).fill().map((_, index) => index + 1)">
                        <button @click="currentSlide = slide"
                            :class="{ 'bg-white': currentSlide === slide, 'bg-white/50': currentSlide !== slide }"
                            class="mx-2 h-1 w-4 rounded-lg hover:bg-custom-ube"></button>
                    </template>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-16">
        <x-sponsors />
    </section>
</x-guest-layout>
