<?php

use App\Http\Controllers\PublicPagesController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Public facing website routes
Route::get('/', [PublicPagesController::class, 'home'])->name('home');
Route::get('/about', [PublicPagesController::class, 'about'])->name('about');
Route::get('/modules', [PublicPagesController::class, 'modules'])->name('modules');
Route::get('/contact', [PublicPagesController::class, 'contact'])->name('contact');
// Handle form submission
Route::post('/contact', [PublicPagesController::class, 'store'])->name('contact.store');

// Public Opportunities Page (Requirement 1.4)
Route::get('/opportunities', [PublicPagesController::class, 'opportunities'])->name('public.opportunities');
// Public Challenges Page
Route::get('/challenges', [PublicPagesController::class, 'challenges'])->name('public.challenges');

// Admin Login Routes
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Protected Admin Panel Routes
Route::middleware([\App\Http\Middleware\EnsureAdminLoggedIn::class])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
    // Opportunities CRUD
    Route::post('/opportunities', [AdminController::class, 'storeOpportunity'])->name('admin.opportunities.store');
    Route::post('/opportunities/{id}/update', [AdminController::class, 'updateOpportunity'])->name('admin.opportunities.update');
    Route::delete('/opportunities/{id}', [AdminController::class, 'deleteOpportunity'])->name('admin.opportunities.delete');
    
    // Challenges CRUD
    Route::post('/challenges', [AdminController::class, 'storeChallenge'])->name('admin.challenges.store');
    Route::post('/challenges/{id}/update', [AdminController::class, 'updateChallenge'])->name('admin.challenges.update');
    Route::delete('/challenges/{id}', [AdminController::class, 'deleteChallenge'])->name('admin.challenges.delete');
});