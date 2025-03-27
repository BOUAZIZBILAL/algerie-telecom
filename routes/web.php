<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // Ajout de l'importation manquante
<<<<<<< HEAD
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



// Route to display the role choice
Route::get('/choose-role', function () {
    return view('auth.choose-role');
})->name('choose-role');

// Admin login form
Route::get('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'showAdminLoginForm'])
    ->name('login.admin');

// Admin login POST
Route::post('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin'])
    ->name('login.admin.submit');

// Employee login form
Route::get('/login/employee', [App\Http\Controllers\Auth\LoginController::class, 'showEmployeeLoginForm'])
    ->name('login.employee');

// Employee login POST
Route::post('/login/employee', [App\Http\Controllers\Auth\LoginController::class, 'employeeLogin'])
    ->name('login.employee.submit');
>>>>>>> c4f5a2e (Initial commit)
