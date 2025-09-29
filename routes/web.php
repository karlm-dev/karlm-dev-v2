<?php

use App\Http\Controllers\DownloadResumeController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/', 'home')->name('home');
Volt::route('/resume', 'resume')->name('resume');
// Volt::route('/podcast', 'podcast')->name('podcast');
Volt::route('/uses', 'uses')->name('uses');
// Volt::route('/projects', 'projects')->name('projects');
// Volt::route('/timeline', 'timeline')->name('timeline');
// Volt::route('/blog', 'blog')->name('blog');

Route::get('download-resume', DownloadResumeController::class)->name('download-resume');
