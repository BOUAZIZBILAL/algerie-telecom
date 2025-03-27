<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // Ajout de l'importation manquante
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is où vous pouvez enregistrer les routes Web pour votre application.
| Ces routes sont chargées par le RouteServiceProvider et seront toutes
| assignées au groupe de middleware "web". Faites quelque chose de génial !
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// User Routes
Route::middleware(['auth', 'user-role:user'])->group(function () {
    Route::get("/home", [App\Http\Controllers\HomeController::class, 'userHome'])->name("home");
});

// Admin Routes
Route::middleware(['auth', 'user-role:admin'])->group(function () {
    Route::get("/admin/home", [App\Http\Controllers\HomeController::class, 'adminHome'])->name("admin.home");
    
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Add the profile route
    Route::get('/pages/profile.html', [ProfileController::class, 'show'])->name('profile');
});