<?php

use App\Http\Controllers\organisDash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\DashboardController;




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

Route::get('/dashboard', [DashboardController::class, 'showDashboard']);
Route::get('/event', function () {
    return view('admin.event');
});
Route::get('/Categorie', function () {
    return view('admin./Categorie');
});
Route::delete('/clients/{id}', [ClientsController::class, 'destroy'])->name('clients.destroy');

// Authentification //
Route::get('/login', function () {
    return view('Auth.login');
})->name('login');
Route::post('/login', [ClientsController::class, 'login'])->name('login.submit');

Route::get('/register', function () {
    return view('Auth.register'); 
});
Route::post('/register', [ClientsController::class, 'store'])->name('client.store');
// Forgot password //

// Organisateur //
Route::get('/organisateur', [organisDash::class, 'index'])->name('organisDash');

// Home //
Route::get('/home', function () {
    return view('home');
});
// Detail //
Route::get('/detail', function () {
    return view('details');
});