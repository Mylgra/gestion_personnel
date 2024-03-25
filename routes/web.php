<?php

use App\Livewire\Pages\Auth\LoginComponent;
use Illuminate\Support\Facades\Route;

Route::get('/login', LoginComponent::class)->name('login');

Route::get('/', function () {
    return view('welcome');
})->name('home');
