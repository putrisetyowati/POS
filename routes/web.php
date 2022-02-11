<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\RopController;
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

Route::get('/barang', [BarangController::class, 'index'])->name('barang');

Route::get('/kasir', [KasirController::class, 'index'])->name('kasir');

Route::get('/pembelian', [PembelianController::class, 'index'])->name('pembelian');

Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');

Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');

Route::get('/ROP', [RopController::class, 'index'])->name('ROP');