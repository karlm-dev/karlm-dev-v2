<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Karl M. | Developer</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
    @fluxAppearance
</head>

<body class="min-h-screen bg-zinc-50 dark:bg-zinc-900 dark:text-zinc-400 text-zinc-500">
    <flux:header class="border-b bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-800" container sticky>
        <flux:sidebar.toggle class="lg:hidden" icon="bars-3" inset="left" />

        <flux:brand class="max-lg:hidden dark:hidden" name="karlm" href="/" />
        <flux:brand class="max-lg:hidden! hidden dark:flex" name="karlm." href="/" />

        <flux:navbar class="-mb-px max-lg:hidden">
            {{-- <flux:navbar.item href="{{ $url }}" icon="{{ $icon }}">
                {{ $title }}
            </flux:navbar.item> --}}
        </flux:navbar>

        <flux:spacer />

        {{-- <flux:navbar>
            <livewire:partials.command />
        </flux:navbar> --}}
    </flux:header>

    <flux:sidebar class="border-r lg:hidden bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-700" stashable
        sticky>
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

        <flux:brand class="px-2 dark:hidden" name="karlm." href="/" />
        <flux:brand class="hidden px-2 dark:flex" name="karlm." href="/" />

        <flux:navlist variant="outline">
            {{-- <flux:navlist.item href="{{ $url }}" icon="{{ $icon }}">
                {{ $title }}
            </flux:navlist.item> --}}
        </flux:navlist>
    </flux:sidebar>

    <flux:main class="flex flex-col justify-between" container>
        {{ $slot }}

        <footer class="flex flex-wrap items-center justify-center mt-16">
            <p>Made with ❤️ using Laravel & Livewire.</p>
        </footer>
    </flux:main>

    <flux:toast />
    @fluxScripts
</body>

</html>
