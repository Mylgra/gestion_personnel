<?php

declare(strict_types=1);

use App\Http\Controllers\ProfileController;
use App\Livewire\Domains\Agents\CreateAgent;
use App\Livewire\Domains\Agents\ListsAgents;
use App\Livewire\Domains\Agents\ShowAgent;
use App\Livewire\GestionService\Service\CreateService;
use App\Livewire\GestionService\Service\ListService;
use App\Livewire\GestionsService\Fonctions\ListsFonctions;
use App\Livewire\GestionsService\Grades\ListsGrades;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');

Route::get('services', ListService::class)->name('services');
Route::get('services/create', CreateService::class)->name('services.create');
Route::get('grades', ListsGrades::class)->name('grades');
Route::get('fonctions', ListsFonctions::class)->name('fonctions');

Route::get('/agents', ListsAgents::class)->name('agents');
Route::get('agents/create', CreateAgent::class)->name('create-agent');
Route::get('agents/{agent}', ShowAgent::class)->name('show-agent');

Route::get('/dashboard', fn() => view('dashboard'))->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function (): void {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
