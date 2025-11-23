<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AdopterController;
use App\Http\Controllers\SpeciesController;
use App\Http\Controllers\VaccineController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('animals', AnimalController::class)->except(['show']);

    Route::resource('adopters', AdopterController::class)->except(['show']);

    Route::get('/species', [SpeciesController::class, 'index'])->name('species.index');
    Route::get('/species/create', [SpeciesController::class, 'create'])->name('species.create');
    Route::post('/species', [SpeciesController::class, 'store'])->name('species.store');
    Route::get('/species/{specie}/edit', [SpeciesController::class, 'edit'])->name('species.edit');
    Route::put('/species/{specie}', [SpeciesController::class, 'update'])->name('species.update');
    Route::delete('/species/{specie}', [SpeciesController::class, 'destroy'])->name('species.destroy');
    
    Route::resource('vaccines', VaccineController::class)->except(['show']);
});

require __DIR__.'/auth.php';
