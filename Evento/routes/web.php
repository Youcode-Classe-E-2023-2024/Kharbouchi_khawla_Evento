<?php

use App\Http\Controllers\organisDash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;



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
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/event', function () {
    return view('admin.event');
});
Route::get('/Categorie', function () {
    return view('admin./Categorie');
});
// Authentification //
Route::get('/', function () {
    return view('Auth.login');
});
Route::get('/register', function () {
    return view('Auth.register');
});
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