<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        view()->share('navItems', [
            [
                'url' => '/',
                'icon' => 'home',
                'title' => 'Home',
            ],
            [
                'url' => '/resume',
                'icon' => 'book-open',
                'title' => 'Resume',
            ],
            // [
            //     'url' => '/podcast',
            //     'icon' => 'microphone',
            //     'title' => 'Podcast',
            // ],
            [
                'url' => '/uses',
                'icon' => 'computer-desktop',
                'title' => 'Uses',
            ],
            // [
            //     'url' => '/projects',
            //     'icon' => 'folder',
            //     'title' => 'Projects',
            // ],
            // [
            //     'url' => '/timeline',
            //     'icon' => 'calendar-days',
            //     'title' => 'Timeline',
            // ],
            // [
            //     'url' => '/blog',
            //     'icon' => 'newspaper',
            //     'title' => 'Blog',
            // ],
        ]);
    }
}
