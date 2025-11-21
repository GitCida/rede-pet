<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AdopterController;
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

    Route::get('/animals', [AnimalController::class, 'index'])->name('animals.index');
    Route::get('/animals/create', [AnimalController::class, 'create'])->name('animals.create');
    Route::post('/animals', [AnimalController::class, 'store'])->name('animals.store');
    Route::get('/animals/{animal}/edit', [AnimalController::class, 'edit'])->name('animals.edit');
    Route::put('/animals/{animal}', [AnimalController::class, 'update'])->name('animals.update');
    Route::delete('/animals/{animal}', [AnimalController::class, 'destroy'])->name('animals.destroy');

    Route::get('/adopters', [AdopterController::class, 'index'])->name('adopters.index');
    Route::get('/adopters/create', [AdopterController::class, 'create'])->name('adopters.create');
    Route::post('/adopters', [AdopterController::class, 'store'])->name('adopters.store');
    Route::get('/adopters/{adopter}/edit', [AdopterController::class, 'edit'])->name('adopters.edit');
    Route::put('/adopters/{adopter}', [AdopterController::class, 'update'])->name('adopters.update');
    Route::delete('/adopters/{adopter}', [AdopterController::class, 'destroy'])->name('adopters.destroy');
});

require __DIR__.'/auth.php';
