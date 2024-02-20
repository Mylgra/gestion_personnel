<?php

use App\Models\Agent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $cessationCarriere= \App\Models\CessationCarriere::all();
    dd($cessationCarriere);
    return view('welcome');
});

// Creation de la route du controller Agent
Route::get('/agents',[AgentController::class,'index'])->name('agent.index');
Route::get('/agents/create',[AgentController::class,'create'])->name('agent.create');
Route::post('/agents/create',[AgentController::class,'store'])->name('agent.store');

// Creation de la route du controller Service
Route::get('/services',[ServiceController::class,'index'])->name('service.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
