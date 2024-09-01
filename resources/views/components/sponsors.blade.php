@php
    $supportedByLogo = [
        '/images/Sponsors/Supported By/Logo William Hendrawinata Academics.png',
        '/images/Sponsors/Supported By/Logo print & print.png',
    ];

    $mediaPartnerLogo = [
        '/images/Sponsors/Media Partner/Logo Lomba SMA.png',
        '/images/Sponsors/Media Partner/Logo Info Event Jatim.png',
        '/images/Sponsors/Media Partner/Logo Info Surabayans.png',
    ];
@endphp

<div class="mx-auto grid w-5/6 grid-cols-2 gap-4">
    <div class="grid place-items-center gap-4">
        <img src="{{ url('/images/Sponsors/Supported By/Supported By.svg') }}" alt="" class="w-2/3 md:w-3/4"
            loading="lazy">
        <div class="grid w-11/12 grid-cols-2 place-items-start gap-2 md:w-5/6">
            @foreach ($supportedByLogo as $supportedBy)
                <img src="{{ url($supportedBy) }}" alt="" class="h-full" loading="lazy">
            @endforeach
        </div>
    </div>

    <div class="grid place-items-center gap-4">
        <img src="{{ url('/images/Sponsors/Media Partner/Media Partner.svg') }}" alt="" class="w-2/3 md:w-3/4"
            loading="lazy">
        <div class="grid w-11/12 grid-cols-2 place-items-start gap-2 md:w-5/6">
            @foreach ($mediaPartnerLogo as $mediaPartner)
                <img src="{{ url($mediaPartner) }}" alt="" class="h-full" loading="lazy">
            @endforeach
        </div>
    </div>
</div>

<img src="{{ url('/images/Sponsors/Gunung.svg') }}" alt="" loading="lazy">
