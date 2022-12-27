<?php

use App\Http\Controllers\BahasaController;
use App\Http\Controllers\BahasaIndonesiaController;
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

Route::get('/', [BahasaController::class, 'proses'], ['status']);
Route::get('bahasa_indonesia', [BahasaController::class, 'index'], ['status'])->name('bahasa_indonesia');

Route::get('/resID', [BahasaIndonesiaController::class, 'index']);