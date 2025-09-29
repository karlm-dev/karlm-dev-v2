<?php

use App\Models\ToolCategory;
use function Livewire\Volt\{state};

state([
    'software' =>
        ToolCategory::query()
            ->where('is_hardware', false)
            ->where('is_active', true)
            ->with('tools')
            ->get(),
    'hardware' => ToolCategory::query()
        ->where('is_hardware', true)
        ->where('is_active', true)
        ->with('tools')
        ->get(),
]);

?>

<div class="flex flex-col gap-4 px-2">
    <flux:heading size="xl">
        How I do all the things!
    </flux:heading>

    <flux:tab.group>
        <flux:tabs variant="segmented">
            <flux:tab name="software" icon="rectangle-group">
                Software
            </flux:tab>
            <flux:tab name="hardware" icon="cpu-chip">
                Hardware
            </flux:tab>
        </flux:tabs>

        <flux:tab.panel name="software">
            <flux:card class="space-y-6">
                @foreach($software as $item)
                    <livewire:components.tool-item :item="$item" />
                @endforeach
            </flux:card>
        </flux:tab.panel>

        <flux:tab.panel name="hardware">
            <flux:card class="space-y-6">
                @foreach($hardware as $item)
                    <livewire:components.tool-item :item="$item" />
                @endforeach
            </flux:card>
        </flux:tab.panel>
    </flux:tab.group>
</div>
