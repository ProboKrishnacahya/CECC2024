@php
    $answers = collect(range(1, 10))->map(function () {
        return rand(0, 1) ? 'Sudah terjawab' : 'Ragu-ragu';
    });
@endphp

@section('title', 'After Quiz')

<x-app-layout>
    <div
        class="flex min-h-screen flex-col items-center justify-center space-y-8 bg-home-hero bg-cover bg-center bg-no-repeat px-4 pb-4 pt-20 text-center md:px-8 md:pb-8 lg:px-10 lg:pb-10">
        <div class="space-y-8">
            <div>
                <x-logo />
            </div>
            <div>
                <x-event-name />
            </div>
        </div>

        <div class="w-full space-y-8 font-inter">
            <div class="space-y-4">
                <div class="flex justify-end">
                    <x-timer />
                </div>

                <div class="space-y-8 rounded-xl bg-custom-american_purple p-4">
                    <table class="mx-auto border-separate border-spacing-x-4">
                        <thead>
                            <tr>
                                <th class="rounded-t-md bg-white px-6 pb-2 pt-4">
                                    <h3
                                        class="rounded-lg bg-custom-american_purple px-4 py-2 text-lg font-bold md:text-xl">
                                        Nomor
                                    </h3>
                                </th>
                                <th class="rounded-t-md bg-white px-6 pb-2 pt-4">
                                    <h3
                                        class="rounded-lg bg-custom-american_purple px-4 py-2 text-lg font-bold md:text-xl">
                                        Jawaban
                                    </h3>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="align-top">
                            @foreach ($answers as $index => $answer)
                                <tr>
                                    <td class="{{ $loop->last ? 'rounded-b-md' : '' }} bg-white px-6 py-2">
                                        <p class="text-custom-american_purple md:text-lg">{{ $loop->iteration }}</p>
                                    </td>
                                    <td class="{{ $loop->last ? 'rounded-b-md' : '' }} bg-white px-6 py-2">
                                        <p
                                            class="{{ $answer === 'Sudah terjawab' ? 'text-custom-american_purple font-medium' : ($answer === 'Ragu-ragu' ? 'text-custom-brass' : '') }} md:text-lg">
                                            {{ $answer }}</p>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex justify-between gap-4 font-bold">
                <a href="{{ route('competition.quiz') }}">
                    <x-button class="uppercase md:px-6 md:text-2xl">Kembali</x-button>
                </a>
                <a href="{{ route('competition.confirmation') }}">
                    <x-button class="uppercase md:px-6 md:text-2xl">Kumpulkan</x-button>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
