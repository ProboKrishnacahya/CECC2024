@section('title', 'Chemical Engineering Challenge & Competition 2024')

<x-guest-layout>
    <x-hero />

    <section
        class="relative bg-gradient-to-b from-custom-licorice from-5% to-custom-eerie_black to-10% p-4 sm:p-6 lg:p-8">
        <img src="{{ url('/images/Home/Apa itu CECC.png') }}" alt="" class="z-10 mx-auto w-5/6 md:w-3/4">
        <img src="{{ url('/images/Home/Visi & Misi.png') }}" alt="" class="z-10 mx-auto w-11/12 lg:w-[100%]">

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

        <div class="my-2 space-y-4 md:my-0">
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
            <div class="grid gap-3 md:grid-cols-2 lg:gap-0">
                <div
                    class="flex items-center justify-start gap-3 px-4 py-1 font-magic text-lg md:justify-center md:py-4 lg:px-12">
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
                <img src="{{ url('/images/Home/Kalung.svg') }}" alt="" class="mx-auto hidden w-1/2 md:block">
            </div>
            <div
                class="flex items-center gap-3 px-4 py-1 font-magic text-lg md:ms-24 md:mt-8 md:justify-center md:py-4 lg:px-12">
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

        <img src="{{ url('/images/Home/Pembaca.svg') }}" alt="" class="z-10 hidden w-5/12 md:block">

        <img src="{{ url('/images/Home/Blink Ungu Atas.svg') }}" alt=""
            class="absolute left-1/2 -z-50 mt-36 hidden -translate-x-3/4 -translate-y-1/2 transform md:top-40 md:block md:w-1/3 lg:top-96 lg:mt-48">
        <img src="{{ url('/images/Home/Blink Ungu Tengah.svg') }}" alt=""
            class="absolute -z-50 mt-96 hidden md:left-24 md:top-48 md:block md:w-1/4 lg:left-48 lg:top-96 lg:pt-28">
        <img src="{{ url('/images/Home/Blink Ungu Bawah.svg') }}" alt=""
            class="absolute -z-50 mt-96 hidden pt-64 md:left-64 md:top-28 md:block md:w-1/3 lg:left-96 lg:top-96 lg:pt-96">
        <img src="{{ url('/images/Home/Berlian Hijau.svg') }}" alt=""
            class="absolute bottom-96 mb-24 hidden w-16 md:right-16 md:block lg:right-36">
        <img src="{{ url('/images/Home/Tangan Bola Api.svg') }}" alt=""
            class="absolute right-0 hidden md:-bottom-32 md:block md:w-48 lg:-bottom-32 lg:w-72">
    </section>

    <section class="px-4 md:px-8 lg:px-20">
        <img src="{{ url('/images/Home/Penghargaan.svg') }}" alt="" class="mx-auto w-2/3 md:w-1/2 lg:w-3/4">

        <img src="{{ url('/images/Home/Juara.svg') }}" alt="" class="mx-auto">
        <div class="flex justify-center gap-3 text-center font-metal_mania">
            <div class="md:px-4 lg:px-14">
                <p class="text-3xl">Juara 2</p>
                <p class="lg:text-lg">uang tunai <span class="text-xl">Rp 3.000.000,00</span> + plakat + piagam
                    penghargaan</p>
            </div>
            <div class="md:px-4 lg:px-10">
                <p class="text-3xl">Juara I</p>
                <p class="lg:text-lg">uang tunai <span class="text-xl">Rp 5.000.000,00</span> + plakat + piagam
                    penghargaan</p>
            </div>
            <div class="md:px-4 lg:px-10">
                <p class="text-3xl">Juara 3</p>
                <p class="lg:text-lg">uang tunai <span class="text-xl">Rp 2.000.000,00</span> + plakat + piagam
                    penghargaan</p>
            </div>
        </div>
        <br>
        <p class="text-center font-metal_mania lg:text-lg">Ketiga juara Chemical Engineering Challenge and Competition
            2024
            mendapat fasilitas bebas tes masuk, Uang Sumbangan Pendidikan (USP), dan uang kuliah 8 semester jika
            melanjutkan studi S-1 Program Studi kimia Universitas Katolik Widya Mandala Surabaya</p>
    </section>

    <section class="my-5">
        <div class="flex items-center">
            <img src="{{ url('/images/Home/Berlian Pink.svg') }}" alt="" class="h-8 flex-1 md:h-16 lg:h-24">
            <img src="{{ url('/images/Home/Teaser.svg') }}" alt="" class="w-1/2 shrink-0 md:w-1/3">
            <img src="{{ url('/images/Home/Berlian Pink.svg') }}" alt="" class="h-8 flex-1 md:h-16 lg:h-24">
        </div>

        <img src="{{ url('/images/Home/Bingkai.svg') }}" alt="" class="mx-auto my-5 w-5/6 md:w-3/4 lg:px-6">
    </section>

    <section class="mt-10">
        <x-sponsors />
    </section>
</x-guest-layout>
