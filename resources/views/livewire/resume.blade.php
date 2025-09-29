<?php

use Livewire\Volt\Component;
use App\Settings\SiteSettings;

new class extends Component {
    //
}; ?>

<div class="px-2">
    <div class="flex flex-wrap gap-14">
        <x-resume.header />
        <x-resume.body />
    </div>

    @if(app(SiteSettings::class)->allow_resume_download)
        <div class="flex justify-center w-full mt-8">
            <flux:button :href="route('download-resume')">
                Download my Resume
            </flux:button>
        </div>
    @endif
</div>
