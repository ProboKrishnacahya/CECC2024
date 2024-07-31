@section('title', 'Guidance')

<x-guest-layout>
    <x-hero />

    <section class="relative bg-gradient-to-b from-custom-licorice from-10% to-custom-eerie_black to-20%">
        <img src="{{ url('/images/Guidance/Guidance Tabs.svg') }}" alt="" class="absolute -z-50 w-full">

        <div class="z-50 p-4 sm:p-6 lg:px-16">
            <div class="mb-4">
                <ul class="flex flex-wrap justify-center gap-3 font-wonder_magic text-2xl md:gap-0 md:py-0 lg:flex-nowrap lg:py-4"
                    id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist"
                    data-tabs-active-classes="bg-gradient-to-t from-custom-bright_lavender to-custom-cadmium_violet"
                    data-tabs-inactive-classes="bg-gradient-to-b from-custom-shampoo to-custom-bright_lavender">
                    <li class="inline-block lg:w-full" role="presentation">
                        <button
                            class="h-full w-full rounded-3xl border-2 p-4 text-custom-dark_purple hover:brightness-125 md:rounded-b-none md:rounded-t-3xl"
                            id="alur_pendaftaran-tab" data-tabs-target="#alur_pendaftaran" type="button" role="tab"
                            aria-controls="alur_pendaftaran" aria-selected="false">Alur Pendaftaran</button>
                    </li>
                    <li class="inline-block lg:w-full" role="presentation">
                        <button
                            class="h-full w-full rounded-3xl border-2 p-4 text-custom-dark_purple hover:brightness-125 md:rounded-b-none md:rounded-t-3xl"
                            id="silabus-tab" data-tabs-target="#silabus" type="button" role="tab"
                            aria-controls="silabus" aria-selected="false">Silabus</button>
                    </li>
                    <li class="inline-block lg:w-full" role="presentation">
                        <button
                            class="h-full w-full rounded-3xl border-2 p-4 text-custom-dark_purple hover:brightness-125 md:rounded-b-none md:rounded-t-3xl"
                            id="penyisihan-tab" data-tabs-target="#penyisihan" type="button" role="tab"
                            aria-controls="penyisihan" aria-selected="false">Penyisihan</button>
                    </li>
                    <li class="inline-block lg:w-full" role="presentation">
                        <button
                            class="h-full w-full rounded-3xl border-2 p-4 text-custom-dark_purple hover:brightness-125 md:rounded-b-none md:rounded-t-3xl"
                            id="semi_final-tab" data-tabs-target="#semi_final" type="button" role="tab"
                            aria-controls="semi_final" aria-selected="false">Semi Final</button>
                    </li>
                    <li class="inline-block lg:w-full" role="presentation">
                        <button
                            class="h-full w-full rounded-3xl border-2 p-4 text-custom-dark_purple hover:brightness-125 md:rounded-b-none md:rounded-t-3xl"
                            id="final-tab" data-tabs-target="#final" type="button" role="tab" aria-controls="final"
                            aria-selected="false">Final</button>
                    </li>
                </ul>
            </div>
            <div id="default-tab-content">
                <div class="hidden" id="alur_pendaftaran" role="tabpanel" aria-labelledby="alur_pendaftaran-tab">
                    <p>1</p>
                </div>
                <div class="hidden" id="silabus" role="tabpanel" aria-labelledby="silabus-tab">
                    <p>2</p>
                </div>
                <div class="hidden" id="penyisihan" role="tabpanel" aria-labelledby="penyisihan-tab">
                    <p>3</p>
                </div>
                <div class="hidden" id="semi_final" role="tabpanel" aria-labelledby="semi_final-tab">
                    <p>4</p>
                </div>
                <div class="hidden" id="final" role="tabpanel" aria-labelledby="final-tab">
                    <p>5</p>
                </div>
            </div>
        </div>
    </section>


    <section class="mt-10">
        <x-sponsors />
    </section>
</x-guest-layout>
