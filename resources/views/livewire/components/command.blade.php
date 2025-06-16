<?php

use Livewire\Volt\Component;

new class extends Component {
    public function goTo($url)
    {
        return redirect($url);
    }
} ?>

<div class="w-48">
    <flux:modal.trigger name="search" shortcut="slash">
        <flux:input as="button" placeholder="Search..." icon="magnifying-glass" kbd="/" />
    </flux:modal.trigger>

    <flux:modal class="min-h-[30rem] w-full max-w-[30rem] px-6" name="search" variant="bare"
        x-on:keydown.cmd.k.document="$el.showModal()">
        <flux:command class="border-none shadow-lg">
            <flux:command.input placeholder="Search..." closable />
            <flux:command.items>
                @foreach($navItems as $item)
                    <flux:command.item icon="{{ $item['icon'] }}" wire:click="goTo('{{ $item['url'] }}')">
                        {{ $item['title'] }}
                    </flux:command.item>
                @endforeach
            </flux:command.items>
        </flux:command>
    </flux:modal>
</div>
