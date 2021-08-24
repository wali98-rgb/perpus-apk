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
Route::delete('/anggota/delete', [AnggotaController::class, 'destroy']);

// Route Kategori
Route::resource('kategori', 'KategoriController');
Route::resource('buku', 'BukuController');
Route::resource('transaksi', 'TransaksiController');

Route::get('transaksi/edit/{id}',[TransaksiController::class, 'edit']);
Route::get('transaksi/showBuku/{id}','TransaksiController@showBuku');
Route::get('transaksi/getAnggota/{id}','TransaksiController@getAnggota');
Route::post('transaksi/update/{id}','TransaksiController@update');
