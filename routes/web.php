<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\KaderController;
use App\Http\Controllers\PesilatController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UnitController;
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

// registrasi dan cari data pesilat
Route::get('/registrasi', [PesilatController::class, 'registrasi']);
Route::get('/cari-pesilat', [PesilatController::class, 'caripesilat']);

Route::post('/pesilat-import', [KaderController::class, 'pesilatimport']);
Route::get('/pendekar', [PesilatController::class, 'pendekar']);
Route::get('/kader', [KaderController::class, 'index']);
Route::get('/siswa', [PesilatController::class, 'siswa']);
Route::resource('/pesilat', PesilatController::class);

// cabang
Route::resource('/cabang', CabangController::class);

// unit
Route::post('/unit-import', [UnitController::class, 'unitimport']);
Route::resource('/unit', UnitController::class);


