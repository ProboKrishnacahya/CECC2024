<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- HTML Meta Tags --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords"
        content="Chemical Engineering Challenge & Competition 2024, CECC 2024, Teknik Kimia Universitas Katolik Widya Mandala Surabaya, UKWMS" />
    <meta name="description" content="The Inclusion of Gen-Z in Science & Industry for Circular Economy World." />
    <meta name="owner" content="Teknik Kimia Universitas Katolik Widya Mandala Surabaya." />
    <meta name="theme-color" content="#57184A">

    {{-- Page Title --}}
    <title>@yield('title')</title>

    {{-- Scripts --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Styles --}}
    @livewireStyles

    {{-- Favicon --}}
    <link rel="icon" href="{{ url('images/brand/Logo CECC.svg?v=2') }}" type="image/svg" />
</head>

<body
    class="h-full space-y-8 bg-custom-american_purple bg-background bg-cover font-magical_neverland text-white antialiased">
    @if (!request()->is('404'))
        @livewire('navigation-menu')
    @endif

    <main>{{ $slot }}</main>

    @livewireScripts
</body>

</html>
