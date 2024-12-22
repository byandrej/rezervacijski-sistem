<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/', [ReservationController::class, 'index'])->name('reservations.view');
Route::post('/rezevarcija', [ReservationController::class, 'store'])->name('reservations.store');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('rooms', 'RoomController');
   // Route::resource('rezervacije', 'ReservationController')->only(['index', 'edit', 'update', 'destroy','create','store']);
});
