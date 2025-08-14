@php
    use App\Settings\SiteSettings;
@endphp
<div class="py-8 mx-auto text-center">
    <img class="mx-auto mb-8 bg-center rounded-full size-52" src="{{ asset('assets/profile.jpg') }}"
        alt="My Profile Picture">

    <h1
        class="text-3xl font-bold tracking-tight text-center text-zinc-900 sm:text-4xl md:text-7xl lg:text-8xl dark:text-white">
        Hello, <br class="hidden sm:block">I'm Karl!
    </h1>

    <div class="mx-auto mt-5">
        {{ app(SiteSettings::class)->title }} <br class="md:hidden"> @
        <flux:link href="{{ app(SiteSettings::class)->current_company_url }}" target="_blank">
            {{ app(SiteSettings::class)->current_company_name }}
        </flux:link>
    </div>

    <flux:button class="my-8" href="mailto:{{ app(SiteSettings::class)->email }}" variant="primary">
        Contact Me
    </flux:button>
</div>
