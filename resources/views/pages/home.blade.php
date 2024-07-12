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
    class="h-full space-y-8 font-magical_neverland text-white antialiased bg-background">
    <main>
        <section class="bg-home-hero bg-cover bg-center bg-no-repeat">
            <div class="space-y-8 py-16 text-center md:px-8 lg:px-48">
                <div class="flex justify-center gap-3">
                    <img src="{{ url('/images/brand/Logo UKWMS.svg') }}" alt=""
                        class="w-16 transition-all hover:scale-110">
                    <img src="{{ url('/images/brand/Logo DoCE.svg') }}" alt=""
                        class="w-16 transition-all hover:scale-110">
                    <img src="{{ url('/images/brand/Logo CECC.svg') }}" alt=""
                        class="w-16 transition-all hover:scale-110">
                </div>

                <div class="text-custom-sunny" id="home-event_name">
                    <h1 class="text-4xl/tight uppercase md:text-6xl/tight lg:text-7xl/tight">Chemical Engineering
                        Challenge & Competition
                    </h1>
                    <h1 class="text-4xl/tight md:text-6xl/tight lg:text-7xl/tight">2024</h1>
                </div>

                <img src="{{ url('/images/home/Tema.svg') }}" alt="" class="mx-auto w-3/4 md:w-2/3">
            </div>
        </section>

        <section class="relative p-4 sm:p-6 lg:p-8">
            <img src="{{ url('/images/home/Apa itu CECC.svg') }}" alt="" class="z-50 mx-auto w-5/6 md:w-3/4">
            <img src="{{ url('/images/home/Visi & Misi.svg') }}" alt="" class="z-50 mx-auto w-11/12">

            <img src="{{ url('/images/home/Cairan.svg') }}" alt=""
                class="absolute left-0 top-36 w-20 md:top-56 md:w-32 lg:w-80">
            <img src="{{ url('/images/home/Botol Kiri.svg') }}" alt=""
                class="absolute -bottom-10 left-0 -z-50 w-20 md:-bottom-32 md:w-48 lg:-bottom-64 lg:w-80">
            <img src="{{ url('/images/home/Blink Oranye Tengah.svg') }}" alt=""
                class="absolute bottom-0 left-1/2 -z-50 hidden -translate-x-1/2 -translate-y-1/2 transform md:block md:w-56 lg:w-80">
            <img src="{{ url('/images/home/Blink Oranye Kanan.svg') }}" alt=""
                class="absolute right-0 top-24 -z-50 w-16 md:w-32 lg:w-80">
        </section>

        <section class="relative">
            <img src="{{ url('/images/home/Timeline.svg') }}" alt="" class="mx-auto w-1/3 md:w-1/4">

            <img src="{{ url('/images/home/Botol Tongkat.svg') }}" alt=""
                class="absolute -top-32 right-0 w-20 md:-top-36 md:w-36 lg:-top-80 lg:w-80">

            <div class="grid gap-3 md:grid-cols-2 lg:gap-0">
                <img src="{{ url('/images/home/Penyihir.svg') }}" alt="" class="hidden md:block">
                <div class="flex items-center justify-start gap-3 p-4 font-magic text-lg lg:p-0">
                    <img src="{{ url('/images/home/September.svg') }}" alt="" class="w-1/4">
                    <div>
                        <p>Master in Chemistry, Experiment with Us & Lab Tour</p>
                        <p>Sabtu, 28 September 2024 (Hybrid)</p>
                    </div>
                </div>
            </div>
            <div class="grid gap-3 md:grid-cols-2 lg:gap-0">
                <div class="flex items-center justify-start gap-3 p-4 font-magic text-lg lg:justify-center lg:p-0">
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
            <div class="mt-8 flex items-center justify-center gap-3 p-4 font-magic text-lg md:ms-24 lg:p-0">
                <img src="{{ url('/images/home/November.svg') }}" alt="" class="w-24 lg:w-40">
                <div>
                    <p>Babak Semifinal dan Final</p>
                    <p>Sabtu, 9 November 2024 (Offline)</p>
                    <p>Universitas Katolik Widya Mandala Jalan Kalijudan 37 Surabaya</p>
                </div>
            </div>

            <img src="{{ url('/images/home/Pembaca.svg') }}" alt="" class="z-50 mt-24 hidden w-5/12 md:block">

            <img src="{{ url('/images/home/Blink Pink Atas.svg') }}" alt=""
                class="absolute left-1/2 -z-50 mt-36 hidden -translate-x-3/4 -translate-y-1/2 transform md:top-40 md:block md:w-1/4 lg:top-96 lg:w-1/3">
            <img src="{{ url('/images/home/Blink Pink Tengah.svg') }}" alt=""
                class="absolute -z-50 mt-96 hidden md:left-14 md:top-28 md:block md:w-1/5 lg:left-48 lg:top-96 lg:w-1/4">
            <img src="{{ url('/images/home/Blink Pink Bawah.svg') }}" alt=""
                class="absolute -z-50 mt-96 hidden pt-64 md:left-64 md:top-8 md:block md:w-1/4 lg:left-96 lg:top-96 lg:w-1/3">
            <img src="{{ url('/images/home/Berlian Hijau.svg') }}" alt=""
                class="absolute bottom-96 hidden w-16 md:right-16 md:block lg:right-36">
            <img src="{{ url('/images/home/Tangan Bola Api.svg') }}" alt=""
                class="absolute right-0 hidden md:-bottom-16 md:block md:w-48 lg:-bottom-32 lg:w-72">
            <img src="{{ url('/images/home/Blink Oranye Kiri.svg') }}" alt=""
                class="absolute left-0 mb-48 hidden md:bottom-32 md:block md:w-24 lg:bottom-96 lg:w-48">
        </section>

        <section class="p-4 sm:p-6 lg:p-8">
            <img src="{{ url('/images/home/Penghargaan.svg') }}" alt="" class="mx-auto w-2/3 md:w-1/2">

            <img src="{{ url('/images/home/Juara.svg') }}" alt="" class="mx-auto">
            <div class="flex justify-center gap-3 text-center font-metal_mania">
                <div class="md:px-4 lg:px-10">
                    <p class="text-3xl">Juara 2</p>
                    <p>uang tunai Rp 3.000.000,00 + plakat + piagam penghargaan</p>
                </div>
                <div class="md:px-4 lg:px-10">
                    <p class="text-3xl">Juara I</p>
                    <p>uang tunai Rp 5.000.000,00 + plakat + piagam penghargaan</p>
                </div>
                <div class="md:px-4 lg:px-10">
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
                <img src="{{ url('/images/home/Berlian Pink.svg') }}" alt=""
                    class="h-8 flex-1 md:h-16 lg:h-24">
                <img src="{{ url('/images/home/Teaser.svg') }}" alt="" class="w-1/2 shrink-0 md:w-1/3">
                <img src="{{ url('/images/home/Berlian Pink.svg') }}" alt=""
                    class="h-8 flex-1 md:h-16 lg:h-24">
            </div>

            <img src="{{ url('/images/home/Bingkai.svg') }}" alt="" class="mx-auto w-5/6 md:w-3/4">

            <div class="mx-auto flex w-5/6 justify-between gap-3">
                <img src="{{ url('/images/home/Supported By.svg') }}" alt="" class="w-1/2 md:w-1/3">
                <img src="{{ url('/images/home/Media Partner.svg') }}" alt="" class="w-1/2 md:w-1/3">
            </div>
        </section>

        <img src="{{ url('/images/home/Gunung.svg') }}" alt="">
    </main>
</body>

</html>
