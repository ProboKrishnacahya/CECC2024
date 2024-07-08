@section('title', 'Chemical Engineering Challenge & Competition 2024')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- HTML Meta Tags --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords"
        content="Chemical Engineering Challenge & Competition 2024, CECC 2024, Teknik Kimia Universitas Katolik Widya Mandala Surabaya, UKWMS" />
    <meta name="description"
        content="Chemical Engineering Challenge & Competition 2024: The Inclusion of Gen-Z in Science & Industry for Circular Economy World." />
    <meta name="owner" content="Teknik Kimia Universitas Katolik Widya Mandala Surabaya." />
    <meta name="theme-color" content="#892C55">

    {{-- Page Title --}}
    <title>@yield('title')</title>

    {{-- Scripts --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Favicon --}}
    <link rel="icon" href="{{ url('images/brand/Logo CECC.svg?v=2') }}" type="image/svg" />
</head>

<body
    class="h-full space-y-8 bg-gradient-to-b from-custom-rich_black to-custom-dark_raspberry font-magical_neverland text-white antialiased">
    <main>
        <section class="bg-home-hero bg-cover bg-center bg-no-repeat">
            <div class="space-y-8 py-16 text-center md:px-32 lg:px-72">
                <div class="flex justify-center gap-3">
                    <img src="{{ url('/images/brand/Logo UKWMS.svg') }}" alt=""
                        class="w-16 transition-all hover:scale-110">
                    <img src="{{ url('/images/brand/Logo DoCE.svg') }}" alt=""
                        class="w-16 transition-all hover:scale-110">
                    <img src="{{ url('/images/brand/Logo CECC.svg') }}" alt=""
                        class="w-16 transition-all hover:scale-110">
                </div>

                <div class="text-custom-sunny" id="home-event_name">
                    <h1 class="text-4xl uppercase md:text-6xl">Chemical Engineering Challenge & Competition</h1>
                    <h1 class="text-4xl md:text-6xl">2024</h1>
                </div>

                <img src="{{ url('/images/home/Tema.svg') }}" alt="" class="mx-auto w-3/4 md:w-2/3">
            </div>
        </section>

        <section class="relative p-4 sm:p-6 lg:p-8">
            <img src="{{ url('/images/home/Apa itu CECC.svg') }}" alt="" class="mx-auto w-5/6 md:w-3/4">
            <img src="{{ url('/images/home/Visi & Misi.svg') }}" alt="" class="z-50 mx-auto w-5/6 md:w-3/4">

            <img src="{{ url('/images/home/Cairan.svg') }}" alt="" class="absolute left-0 top-28 w-20 md:w-32 lg:w-96">
            <img src="{{ url('/images/home/Botol Kiri.svg') }}" alt=""
                class="absolute -bottom-10 left-0 -z-50 w-20 md:-bottom-32 lg:-bottom-64 md:w-48 lg:w-80">
            <img src="{{ url('/images/home/Blink Oranye Tengah.svg') }}" alt=""
                class="absolute bottom-0 left-1/2 -z-50 w-16 -translate-x-1/2 -translate-y-1/2 transform md:w-56 lg:w-80">
            <img src="{{ url('/images/home/Blink Oranye Kanan.svg') }}" alt=""
                class="absolute right-0 top-24 w-16 md:w-32 lg:w-80">
        </section>

        <section class="relative">
            <img src="{{ url('/images/home/Timeline.svg') }}" alt="" class="mx-auto w-1/4">

            <img src="{{ url('/images/home/Botol Tongkat.svg') }}" alt=""
                class="absolute -top-32 right-0 w-20 md:-top-36 lg:-top-80 md:w-36 lg:w-80">

            <div class="grid gap-3 md:grid-cols-2 lg:gap-0">
                <img src="{{ url('/images/home/Penyihir.svg') }}" alt="" class="hidden md:block">
                <div class="flex items-center justify-start gap-3 p-4 font-magic lg:p-0">
                    <img src="{{ url('/images/home/September.svg') }}" alt="" class="w-1/4">
                    <div>
                        <p>Master in Chemistry, Experiment with Us & Lab Tour</p>
                        <p>Sabtu, 28 September 2024 (Hybrid)</p>
                    </div>
                </div>
            </div>
            <div class="grid gap-3 md:grid-cols-2 lg:gap-0">
                <div class="flex items-center justify-start gap-3 p-4 font-magic lg:justify-center lg:p-0">
                    <img src="{{ url('/images/home/Oktober.svg') }}" alt="" class="w-1/4">
                    <div>
                        <p>Technical Meeting & Try Out</p>
                        <p>Sabtu, 12 Oktober 2024 (Online)</p>
                        <br>
                        <p>Babak Penyisihan</p>
                        <p>Sabtu, 26 Oktober 2024 (Online)</p>
                    </div>
                </div>
                <img src="{{ url('/images/home/Kalung.svg') }}" alt="" class="mx-auto hidden w-1/2 md:block">
            </div>
            <div class="flex items-center justify-center gap-3 font-magic md:ms-24">
                <img src="{{ url('/images/home/November.svg') }}" alt="" class="mt-8 w-24 lg:w-40">
                <div>
                    <p>Babak Semifinal dan Final</p>
                    <p>Sabtu, 9 November 2024 (Offline)</p>
                    <p>Universitas Katolik Widya Mandala Jalan Kalijudan 37 Surabaya</p>
                </div>
            </div>

            <img src="{{ url('/images/home/Pembaca.svg') }}" alt="" class="z-50 mt-16 hidden w-2/5 md:block">

            <img src="{{ url('/images/home/Blink Pink Atas.svg') }}" alt=""
                class="absolute left-1/2 top-96 -z-50 mt-36 hidden w-1/3 -translate-x-3/4 -translate-y-1/2 transform md:block">
            <img src="{{ url('/images/home/Blink Pink Tengah.svg') }}" alt=""
                class="absolute left-48 top-96 -z-50 mt-96 hidden w-1/4 md:block">
            <img src="{{ url('/images/home/Blink Pink Bawah.svg') }}" alt=""
                class="absolute left-80 top-96 -z-50 mt-96 hidden w-1/3 pt-64 md:block">
            <img src="{{ url('/images/home/Berlian Hijau.svg') }}" alt=""
                class="absolute bottom-96 right-8 hidden w-20 md:block">
            <img src="{{ url('/images/home/Tangan Bola Api.svg') }}" alt=""
                class="absolute -bottom-32 right-0 hidden w-72 md:block">
            <img src="{{ url('/images/home/Blink Oranye Kiri.svg') }}" alt=""
                class="absolute bottom-96 left-0 mb-48 hidden md:w-32 lg:w-48 md:block">
        </section>

        <section class="p-4 sm:p-6 lg:p-8">
            <img src="{{ url('/images/home/Penghargaan.svg') }}" alt="" class="mx-auto w-1/2">

            <img src="{{ url('/images/home/Juara.svg') }}" alt="" class="mx-auto">
            <div class="flex justify-center gap-3 text-center font-metal_mania">
                <div class="lg:px-10">
                    <p class="text-3xl">Juara 2</p>
                    <p>uang tunai Rp 3.000.000,00 + plakat + piagam penghargaan</p>
                </div>
                <div class="lg:px-10">
                    <p class="text-3xl">Juara I</p>
                    <p>uang tunai Rp 5.000.000,00 + plakat + piagam penghargaan</p>
                </div>
                <div class="lg:px-10">
                    <p class="text-3xl">Juara 3</p>
                    <p>uang tunai Rp 2.000.000,00 + plakat + piagam penghargaan</p>
                </div>
            </div>
            <br>
            <p class="text-center font-metal_mania">Ketiga juara Chemical Engineering Challenge and Competition 2024
                mendapat fasilitas bebas tes masuk,
                Uang Sumbangan Pendidikan (USP), dan uang kuliah 8 semester jika melanjutkan studi S-1 Program Studi
                kimia Universitas Katolik Widya Mandala Surabaya</p>
        </section>

        <section>
            <div class="flex items-center">
                <img src="{{ url('/images/home/Berlian Pink.svg') }}" alt="" class="h-10 flex-1 md:h-24">
                <img src="{{ url('/images/home/Teaser.svg') }}" alt="" class="w-1/3 shrink-0">
                <img src="{{ url('/images/home/Berlian Pink.svg') }}" alt="" class="h-10 flex-1 md:h-24">
            </div>

            <img src="{{ url('/images/home/Bingkai.svg') }}" alt="" class="mx-auto w-5/6 md:w-3/4">

            <div class="mx-auto flex w-5/6 justify-between gap-3">
                <img src="{{ url('/images/home/Supported By.svg') }}" alt="" class="w-1/2 md:w-1/3">
                <img src="{{ url('/images/home/Media Partner.svg') }}" alt="" class="w-1/2 md:w-1/3">
            </div>
        </section>

        <img src="{{ url('/images/home/Background.svg') }}" alt="">
    </main>
</body>

</html>
