<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignatureController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\PropertyController;

Route::get('/signature/create', [SignatureController::class, 'create'])->name('signature.create');
Route::post('/signature/store', [SignatureController::class, 'store'])->name('signature.store');
Route::get('/signature/{id}', [SignatureController::class, 'show'])->name('signature.show');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/properties', [PropertiesController::class, 'propert'])->name('properties');
Route::get('/property', [PropertyController::class, 'detail'])->name('property');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

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
});

require __DIR__.'/auth.php';
