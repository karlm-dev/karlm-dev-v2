<?php

use function Livewire\Volt\{state};

state([
    'item' => null,
]);
?>

<div>
    <h3 class="mb-4 text-lg font-semibold leading-none tracking-tight">
        {{ $item->name }}
    </h3>
    <ul class="px-4 space-y-2 list-disc list-inside">
        @foreach($item->tools as $tool)
            <li>
                @if(!empty($tool->url))
                    <a href="{{ $tool->url }}" class="font-medium hover:underline" target="_blank">
                        {{ $tool->name }}
                    </a>
                @else
                    {{ $tool->name }}
                @endif
            </li>
        @endforeach
    </ul>
</div>
