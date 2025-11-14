<?php

use Livewire\Volt\Component;
use Vedmant\FeedReader\Facades\FeedReader;
use Carbon\Carbon;

new class extends Component {
    public function feed()
    {
        return FeedReader::read('https://feeds.transistor.fm/voices-of-the-code');
    }
}; ?>

<div class="px-2">
    <flux:heading size="xl">
        Podcasts
    </flux:heading>

    <h2 class="my-4">
        {{ $this->feed()->get_title() }}
    </h2>

    <ul class="px-4 mb-4 space-y-2 list-disc list-inside">
        @foreach($this->feed()->get_items() as $item)
            <li>
                <flux:link href="{{ $item->get_link() }}">
                    {!! $item->get_title() !!}
                </flux:link>
                - {{ Carbon::parse($item->get_date())->format('m/d/y') }}
            </li>
        @endforeach
    </ul>
</div>
