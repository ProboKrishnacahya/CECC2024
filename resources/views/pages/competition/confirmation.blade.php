@section('title', 'Confirmation')

<x-app-layout>
    <div
        class="flex min-h-screen flex-col items-center justify-center space-y-8 bg-home-hero bg-cover bg-center bg-no-repeat p-10 text-center">
        <div>
            <x-cecc />
        </div>

        <div class="space-y-8 font-inter font-bold">
            <h1 class="text-3xl">Apakah sudah yakin dengan jawabanmu?</h1>
            <div class="mx-auto flex w-fit gap-4">
                <a href="#">
                    <x-button class="px-6">Ya</x-button>
                </a>
                <a href="{{ route('competition.after-quiz') }}">
                    <x-button class="px-6">Tidak</x-button>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
