<?php

use App\Http\Controllers\FincaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FincaController::class, 'inicio'])->name('inicio');
Route::get('/habitaciones', [FincaController::class, 'habitaciones'])->name('habitaciones');
Route::get('/servicios', [FincaController::class, 'servicios'])->name('servicios');
Route::get('/reservaciones', [FincaController::class, 'reservaciones'])->name('reservaciones');
Route::get('/contacto', [FincaController::class, 'contacto'])->name('contacto');
Route::get('/hotel-estacionamiento-zacatecas', [FincaController::class, 'estacionamiento'])->name('estacionamiento');
