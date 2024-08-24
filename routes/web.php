<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\PesilatController;
use App\Http\Controllers\SiswaController;
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

Route::get('/', [AdminController::class, 'cekdata']);
Route::get('/mawar-mekar', [AdminController::class, 'dashboard']);

Route::get('/registrasi', [PesilatController::class, 'registrasi']);
Route::get('/cari-pesilat', [PesilatController::class, 'caripesilat']);
Route::resource('/pesilat', PesilatController::class);

// cabang
Route::resource('/cabang', CabangController::class);

Route::get('/regis', function () {
    return view('siswa.siswa-registrasi');
});

Route::resource('/siswa', SiswaController::class);
