<?php

use App\Http\Controllers\organisDash;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\client;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;




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
Route::get('/home', [HomeController::class, 'index'])->name('home');


// Detail //
Route::get('/detail', function () {
    return view('details');
});


// categories //
Route::get('/Categorie', function () {
    $categories = Category::all(); 
    return view('admin.Categorie', ['categories' => $categories]);
});
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}/delete', [CategoryController::class, 'softDelete'])->name('categories.softDelete');

