@php
    $multiple_choices = [
        'Dietil eter dan Benzena',
        'Kloroform dan HCl pekat',
        'HCl pekat dan asam asetat',
        'Asam asetat dan Kloroform',
        'HCl pekat dan Benzena',
    ];

    $colors = ['Putih', 'Hijau', 'Kuning'];

    $question_number = collect(range(1, 20))->mapWithKeys(function ($item) use ($colors) {
        return [$item => $colors[array_rand($colors)]];
    });
@endphp

@section('title', 'Quiz')

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

                <div class="space-y-4 rounded-xl bg-custom-american_purple">
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                        <div class="space-y-4 p-4 md:col-span-2 md:pe-0 lg:pb-4 lg:pe-0 lg:ps-6 lg:pt-6">
                            <div class="flex gap-4 rounded-md bg-white p-4">
                                <div class="w-fit">
                                    <p
                                        class="rounded-md bg-custom-american_purple px-3 py-2 text-lg font-medium text-white md:text-xl">
                                        1.</p>
                                </div>
                                <div class="space-y-4 text-start text-black md:text-xl lg:text-2xl">
                                    <p class="font-medium uppercase">Ikatan Kimia</p>
                                    <div class="space-y-2 md:text-lg lg:text-xl">
                                        <p>Perhatikan gambar berikut!</p>
                                        <img src="{{ url('/images/Competition/Quiz Question.svg') }}" alt=""
                                            class="h-auto max-w-full object-contain">
                                        <p>Senyawa di atas merupakan salah satu senyawa yang tergolong ke dalam senyawa
                                            vanilloid dan memiliki inti benzena dari rantai karbon panjang hidrofobik
                                            dengan gugus polar amida. Apabila senyawa tersebut akan dilarutkan, pelarut
                                            manakah yang tidak cocok untuk melarutkan senyawa tersebut?</p>
                                    </div>
                                    <ol class="list-inside space-y-2 font-medium md:text-lg lg:text-xl"
                                        id="competition-multiple_choice">
                                        @foreach ($multiple_choices as $index => $multiple_choice)
                                            @php
                                                $radio_id = 'radio-' . ($index + 1);
                                            @endphp

                                            <div class="flex items-center gap-2">
                                                <input id="{{ $radio_id }}" type="radio"
                                                    value="{{ $multiple_choice }}" name="radio-multiple_choice"
                                                    class="size-6 appearance-none border-0 bg-gray-200 checked:text-blue-600 hover:bg-gray-300 focus:ring focus:ring-blue-600 focus:ring-opacity-50">
                                                <li>
                                                    <label for="{{ $radio_id }}"
                                                        class="cursor-pointer">{{ $multiple_choice }}</label>
                                                </li>
                                            </div>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                            <div class="flex justify-between gap-4 font-bold">
                                <div>
                                    <x-button
                                        class="rounded-lg py-3 focus:ring-0 lg:border-0 lg:bg-transparent lg:px-0 lg:py-0 lg:text-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.75 19.5 8.25 12l7.5-7.5" />
                                        </svg>
                                        <span class="hidden lg:block">Soal sebelumnya</span>
                                    </x-button>
                                </div>
                                <div class="flex items-center gap-2">
                                    <x-checkbox id="ragu-ragu" name="ragu-ragu" />
                                    <label for="ragu-ragu"
                                        class="cursor-pointer md:text-lg lg:text-xl">Ragu-ragu</label>
                                </div>
                                <div>
                                    <x-button
                                        class="rounded-lg py-3 focus:ring-0 lg:border-0 lg:bg-transparent lg:px-0 lg:py-0 lg:text-xl">
                                        <span class="hidden lg:block">Soal selanjutnya</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </x-button>
                                </div>
                            </div>
                        </div>

                        <hr class="md:hidden">

                        <div class="space-y-4 font-medium">
                            <div class="sticky top-0 z-10 space-y-4 p-4 md:ps-0 lg:pb-4 lg:pe-6 lg:ps-0 lg:pt-6">
                                <div class="space-y-4 rounded-md bg-custom-thistle p-4 text-black">
                                    <p class="text-start md:text-xl lg:text-2xl">Nomor Soal</p>
                                    <div
                                        class="grid grid-cols-6 gap-2 md:grid-cols-3 md:gap-y-4 md:text-lg lg:grid-cols-6 lg:gap-y-2 lg:text-xl">
                                        @foreach ($question_number as $index => $color)
                                            <button
                                                class="{{ $color === 'Putih' ? 'bg-white' : ($color === 'Kuning' ? 'bg-custom-maximum_yellow' : ($color === 'Hijau' ? 'bg-custom-screamin_green' : '')) }} size-12 flex items-center justify-center rounded-md shadow-sm">
                                                <p>{{ $index }}</p>
                                            </button>
                                        @endforeach
                                    </div>
                                </div>

                                <div>
                                    <table class="table-auto text-start md:text-lg lg:text-xl">
                                        <tbody class="align-top">
                                            <tr>
                                                <td>Putih</td>
                                                <td>
                                                    <span class="px-1 font-inter">:</span>
                                                </td>
                                                <td>belum menjawab</td>
                                            </tr>
                                            <tr>
                                                <td>Hijau</td>
                                                <td>
                                                    <span class="px-1 font-inter">:</span>
                                                </td>
                                                <td>sudah menjawab</td>
                                            </tr>
                                            <tr>
                                                <td>Kuning</td>
                                                <td>
                                                    <span class="px-1 font-inter">:</span>
                                                </td>
                                                <td>ragu-ragu</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
