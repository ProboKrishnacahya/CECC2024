@section('title', 'Competition')

<x-app-layout>
    <div
        class="flex min-h-screen flex-col items-center justify-center space-y-8 bg-home-hero bg-cover bg-center bg-no-repeat p-10 text-center">
        <div>
            <x-cecc />
        </div>

        <div class="space-y-8 font-inter font-bold">
            <h1 class="text-3xl">Babak Penyisihan</h1>
            <div class="mx-auto w-fit">
                <a href="{{ route('competition.quiz') }}">
                    <x-button class="px-6">Mulai</x-button>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
