<?php

use App\Models\Event;
use Carbon\Carbon;

use function Livewire\Volt\{state};

state([
    'events' => Event::all()
]);
?>

<div class="flex flex-col gap-6 px-2">
    <flux:heading size="xl">
        Timeline
    </flux:heading>

    <ul class="px-4 space-y-2 list-disc list-inside">
        @foreach ($events as $event)
            <li>
                {{ Carbon::parse($event['date'])->format('M d, Y') }} - {{ $event['title'] }}
            </li>
        @endforeach
    </ul>
</div>
