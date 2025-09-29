@php
    use App\Settings\SiteSettings;

    $name = app(SiteSettings::class)->first_name . ' ' . app(SiteSettings::class)->last_name;
    $email = app(SiteSettings::class)->email;
    $website = app(SiteSettings::class)->website;
    $socialMediaLinks = app(SiteSettings::class)->links;
    $address = app(SiteSettings::class)->address;
@endphp

<div class="flex flex-col gap-1">
    <flux:heading class="mb-4 font-semibold" size="xl">
        {{ $name }}
    </flux:heading>

    @if($address)
        <p class="mb-2">
            {{ $address }}
        </p>
    @endif

    <a href="mailto:{{ $email }}">
        {{ $email }}
    </a>

    <div class="flex flex-col">
        @if($website)
            <a href="{{ $website }}">
                {{ $website }}
            </a>
        @endif

        @if($socialMediaLinks)
            @foreach($socialMediaLinks as $link)
                @if($link['show_on_resume'])
                    <a href="{{ $link['url'] }}" class="my-2">
                        {{ $link['label'] }}
                    </a>
                @endif
            @endforeach
        @endif
    </div>
</div>
