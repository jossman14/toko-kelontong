<?php

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

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DetailPenjualanController;


// Route::get('/barang', [BarangController::class, 'index'])->name('barang');
// Route::get('/tambah-barang', [BarangController::class, 'create'])->name('tambah-barang');
// Route::post('/simpan-barang', [BarangController::class, 'store'])->name('simpan-barang');

Route::resource('/barang', 'BarangController');
Route::resource('/detail-penjualan', 'DetailPenjualanController');
Route::get('/user', 'UserController@home');
