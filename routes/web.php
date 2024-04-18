<?php

declare(strict_types=1);

use App\Livewire\Events\CreateEventForm;
use App\Livewire\Events\ListEvents;
use App\Livewire\Pages\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'))->name('home');

Route::middleware(['auth', 'verified'])->group(function (): void {
    Route::get('dashboard', Welcome::class)->name('dashboard');
});

Route::get('events', ListEvents::class)->name('events');

require 'auth.php';
Route::get('/create/event', CreateEventForm::class)->name('create-event')->middleware('auth');
