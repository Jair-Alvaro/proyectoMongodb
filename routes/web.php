<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/habitacion', [App\Http\Controllers\RoomController::class, 'habitaciones'])->name('habitacion');
Route::get('/reserva', [App\Http\Controllers\BookingController::class, 'reservas'])->name('reserva');
Route::get('/nosotros', [App\Http\Controllers\BookingController::class, 'nosotros'])->name('nosotros');
Route::get('/huesped', [App\Http\Controllers\CustomerController::class, 'huespedes'])->name('huesped');
Route::post('/reservaProceso', [App\Http\Controllers\BookingController::class, 'reservaProceso'])->name('reservaProceso');