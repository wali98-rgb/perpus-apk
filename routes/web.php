<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TransaksiController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});

// Route Anggota
// Route::resource('anggota', [AnggotaController::class]);
Route::get('/anggota', [AnggotaController::class, 'index']);
Route::get('/anggota/create', [AnggotaController::class, 'create']);
Route::post('/anggota', [AnggotaController::class, 'store']);
Route::get('/anggota/{$id}/edit', [AnggotaController::class, 'edit']);
Route::delete('/anggota/{$id}', [AnggotaController::class, 'destroy']);

// Route Kategori
// Route::resource('kategori', 'KategoriController');
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori', [KategoriController::class, 'store']);

// Route Buku
// Route::resource('buku', 'BukuController');
Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/create', [BukuController::class, 'create']);
Route::post('/buku', [BukuController::class, 'store']);

// Route Transaksi
// Route::resource('transaksi', 'TransaksiController');
Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::get('/transaksi/create', [TransaksiController::class, 'create']);
Route::post('/transaksi', [TransaksiController::class, 'store']);
Route::get('transaksi/edit/{id}',[TransaksiController::class, 'edit']);
Route::get('transaksi/showBuku/{id}',[TransaksiController::class, 'showBuku']);
Route::get('transaksi/getAnggota/{id}',[TransaksiController::class, 'getAnggota']);
Route::post('transaksi/update/{id}',[TransaksiController::class, 'update']);
