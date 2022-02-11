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
    return view('layouts.app');
});


Route::group([
    'prefix' => 'pemilik',
    'namespace' => 'Pemilik',
    'as' => 'pemilik.'
], function () {
    // Route::group(['middleware' => ['auth', 'role:pemilik']], function () {
        Route::resource('kasir', KasirController::class);
        Route::resource('transaksi', TransaksiController::class);
        Route::resource('barang', BarangController::class);
        Route::resource('ROP', ROPController::class);
        Route::resource('pembelian', PembelianController::class);
        Route::resource('laporan', LaporanController::class);
    // });

});



