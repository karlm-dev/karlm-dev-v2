@php
    use App\Settings\SiteSettings;
@endphp

<div class="flex flex-wrap px-8 mx-auto space-y-6 align-center">
    <flux:heading size="xl">
        About Me
    </flux:heading>

    <p class="text-lg leading-8 text-wrap">
        {!! app(SiteSettings::class)->blurb !!}
    </p>

    <p class='font-semibold'>
        {!! app(SiteSettings::class)->cta_text !!}
    </p>
</div>
