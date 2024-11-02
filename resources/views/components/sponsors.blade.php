@php
    $supportedByLogo = [
        '/images/Sponsors/Supported By/Logo William Hendrawinata Academics.png',
        '/images/Sponsors/Supported By/Logo print & print.png',
        '/images/Sponsors/Supported By/Asia Pacific Resources International Limited Dialog.png',
        '/images/Sponsors/Supported By/PT Dunia Kimia Jaya.png',
        '/images/Sponsors/Supported By/SLC.png',
    ];

    $mediaPartnerLogo = [
        '/images/Sponsors/Media Partner/Logo Lomba SMA.png',
        '/images/Sponsors/Media Partner/Logo Info Event Jatim.png',
        '/images/Sponsors/Media Partner/Logo Info Surabayans.png',
    ];
@endphp

<div class="mx-auto grid w-5/6 grid-cols-1 gap-4 md:grid-cols-2">
    <div class="flex flex-col items-center gap-4">
        <img src="{{ url('/images/Sponsors/Supported By/Supported By.svg') }}" alt="" class="w-2/3 md:w-3/4"
            loading="lazy">
        <div class="grid w-11/12 grid-cols-2 gap-2 md:w-5/6">
            @foreach ($supportedByLogo as $index => $supportedBy)
                <img src="{{ url($supportedBy) }}" alt=""
                    class="{{ $index === 2 ? 'col-span-2 px-2' : '' }} mx-auto h-24 object-contain lg:h-32"
                    loading="lazy">
            @endforeach
        </div>
    </div>

    <div class="flex flex-col items-center gap-4">
        <img src="{{ url('/images/Sponsors/Media Partner/Media Partner.svg') }}" alt="" class="w-2/3 md:w-3/4"
            loading="lazy">
        <div class="grid w-11/12 grid-cols-2 gap-2 md:w-5/6">
            @foreach ($mediaPartnerLogo as $index => $mediaPartner)
                <img src="{{ url($mediaPartner) }}" alt=""
                    class="{{ $index === 2 ? 'col-span-2' : '' }} object-contain" loading="lazy">
            @endforeach
        </div>
    </div>
</div>

<img src="{{ url('/images/Sponsors/Gunung.svg') }}" alt="" loading="lazy">
