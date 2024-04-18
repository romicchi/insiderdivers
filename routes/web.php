<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\LeaderController;

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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('/clients/management', [ClientController::class, 'manage'])->name('clients.management');
Route::get('/trips/management', [TripController::class, 'manage'])->name('trips.management');
Route::get('/flights/management', [FlightController::class, 'manage'])->name('flights.management');
Route::get('/leaders/management', [LeaderController::class, 'manage'])->name('leaders.management');