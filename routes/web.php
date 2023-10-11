<?php

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


Route::resource('jenis-sampah', 'App\Http\Controllers\JenisSampahController');
Route::get('/', [App\Http\Controllers\KalkulatorBankSampahController::class,'index'])->name('kalkulator');
Route::get('/admin/dashboard', [App\Http\Controllers\KalkulatorBankSampahController::class,'showDashboard'])->name('dashboard');
Route::post('/kalkulator/calculate', [App\Http\Controllers\KalkulatorBankSampahController::class,'calculate'])->name('calculate');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
