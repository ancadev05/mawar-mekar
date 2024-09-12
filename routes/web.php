<?php

use Maatwebsite\Excel\Row;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UktController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\KaderController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\IjazahController;
use App\Http\Controllers\PesilatController;
use App\Http\Controllers\PendekarController;

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

// route bagi yang belum login
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AdminLoginController::class, 'index'])->name('login');
    Route::post('/login', [AdminLoginController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {


    Route::get('/logout', [AdminLoginController::class, 'logout']);



    Route::get('/', [AdminController::class, 'cekdata']);
    Route::post('/', [AdminController::class, 'cekdata']);
    Route::get('/mawar-mekar', [AdminController::class, 'dashboard']);

    // registrasi dan cari data pesilat
    Route::get('/registrasi', [PesilatController::class, 'registrasi']);
    // Route::get('/cari-pesilat', [AdminController::class, 'cekdata']);
    // Route::get('/cari-pesilat', [PesilatController::class, 'caripesilat']);

    // route yang hanya bisa diakses setelah login
    // Route::middleware(['auth.user'])->group(function () {

        // route untuk import data pesilat
        Route::post('/pesilat-import', [AdminController::class, 'pesilatimport']);

        Route::get('/pendekar', [PendekarController::class, 'index']);
        Route::get('/kader', [KaderController::class, 'index']);
        Route::get('/siswa', [SiswaController::class, 'index']);

        Route::resource('/pesilat', PesilatController::class);

        // cabang
        Route::resource('/cabang', CabangController::class);

        // unit
        Route::post('/unit-import', [UnitController::class, 'unitimport']);
        Route::resource('/unit', UnitController::class);

        // ukt
        Route::resource('/ukt', UktController::class);

        // ijazah
        Route::resource('/ijazah', IjazahController::class);
    // });
});
