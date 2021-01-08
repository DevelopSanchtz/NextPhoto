<?php

use App\Http\Controllers\sendEmailController;
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

Route::post('/email', [sendEmailController::class, 'sendEmail'])->name('correo');

Route::post('/paqueteUno', [sendEmailController::class, 'paqueteUno'])->name('paqueteUno');

Route::post('/paqueteDos', [sendEmailController::class, 'paqueteDos'])->name('paqueteDos');

Route::post('/bodaxv', [sendEmailController::class, 'bodaxv'])->name('bodaxv');

Route::post('/casuales', [sendEmailController::class, 'casuales'])->name('casuales');