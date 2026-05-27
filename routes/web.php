<?php

use App\Http\Controllers\PublicPagesController;
use Illuminate\Support\Facades\Route;

// Public facing website routes
Route::get('/', [PublicPagesController::class, 'home'])->name('home');
Route::get('/about', [PublicPagesController::class, 'about'])->name('about');
Route::get('/modules', [PublicPagesController::class, 'modules'])->name('modules');
Route::get('/contact', [PublicPagesController::class, 'contact'])->name('contact');
// Handle form submission
Route::post('/contact', [PublicPagesController::class, 'store'])->name('contact.store');