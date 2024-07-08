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

<body>
    <main class="container mx-auto max-w-7xl space-y-8 p-4 sm:p-6 lg:p-8">
        <div class="space-y-8 text-white antialiased">{{ $slot }}</div>
    </main>
</body>

</html>
