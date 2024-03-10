<?php

use App\Http\Controllers\organisDash;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\client;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;




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
Route::get('/dashboard', [ClientsController::class, 'index']);
Route::get('/event', function () {
    return view('admin.event');
});
Route::delete('/clients/{id}', [ClientsController::class, 'destroy'])->name('clients.destroy');
Route::get('/event', [EventController::class, 'showEvents']);

// validation des events //
Route::post('/events/validate/{id}', [EventController::class, 'validateEvent'])->name('event.validate');


// Authentification //
Route::get('/login', function () {return view('Auth.login');})->name('login');
Route::post('/login', [ClientsController::class, 'login'])->name('login.submit');
Route::get('/', function () {return view('Auth.register'); });
Route::post('/', [ClientsController::class, 'store'])->name('client.store');


// Forgot password //


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

// Organisateur //
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/organisateur', [organisDash::class, 'showDashboard'])->name('dashboard.show');
Route::get('/organisateur', [organisDash::class, 'index'])->name('organisDash');


// Role //
Route::patch('/clients/{client}/updateRole', [ClientsController::class, 'updateRole'])->name('clients.updateRole');
Route::delete('/clients/{client}', [ClientsController::class, 'destroy'])->name('clients.destroy');

// Middlwire //
Route::middleware(['checkrole:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
    Route::get('/event', [EventController::class, 'index'])->name('event.index');
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/events', [EventController::class, 'index'])->name('events.index');


});
Route::middleware(['checkrole:organisateur'])->group(function () {
    Route::get('/ticket', function () {
        return view('organisateur.Ticket');
    });
    Route::get('/organisdash', [organisDash::class, 'showDashboard'])->name('dashboard.show');
    Route::get('/organisateur', [organisDash::class, 'index'])->name('organisDash');
});

// Events //
Route::post('/events', [EventController::class, 'store'])->name('events.store');

Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');

Route::get('/event/{id}', [App\Http\Controllers\EventController::class, 'show'])->name('events.show');

Route::post('/purchase-ticket', [TicketController::class, 'store'])->name('purchase-ticket');



Route::post('/logout', [ClientsController::class, 'logout'])->name('logout');