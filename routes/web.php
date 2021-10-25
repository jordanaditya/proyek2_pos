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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/menu/menu', [App\Http\Controllers\MenuController::class, 'index'])->name('menu');


Route::get('/riwayat/riwayat', [App\Http\Controllers\RiwayatController::class, 'index'])->name('riwayat');


Route::get('/laporan/laporan', [App\Http\Controllers\LaporanController::class, 'index'])->name('laporan');