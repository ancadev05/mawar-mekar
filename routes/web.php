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
use App\Http\Controllers\UserAdminController;

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
Route::post('/', [AdminController::class, 'cekdata']);
Route::get('/registrasi', [PesilatController::class, 'registrasi']);
Route::get('/pesilat-create2', [PesilatController::class, 'create2']);
Route::post('/pesilat-store2', [PesilatController::class, 'store2']);
Route::get('/pesilat-show2/{id}', [PesilatController::class, 'show2']);

// route bagi yang belum login
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AdminLoginController::class, 'index'])->name('login');
    Route::post('/login', [AdminLoginController::class, 'login']);
});

// route yang hanya bisa diakses setelah login
Route::middleware(['general'])->group(function () {

    Route::get('/mawar-mekar/pimda', [AdminController::class, 'dashboard'])->middleware('user.akses:2');
    Route::get('/mawar-mekar/cabang', [AdminController::class, 'dashboard_cabang'])->middleware('user.akses:3');
    Route::get('/mawar-mekar/pesilat', [AdminController::class, 'dashboard_pesilat'])->middleware('pesilat.akses:1');

    // route untuk import data pesilat
    Route::post('/pesilat-import', [AdminController::class, 'pesilatimport']);

    Route::get('/pendekar', [PendekarController::class, 'index'])->middleware('user.akses:2');
    Route::get('/kader', [KaderController::class, 'index']);
    Route::get('/siswa', [SiswaController::class, 'index']);

    Route::resource('/pesilat', PesilatController::class);

    // approve pesilat
    Route::get('/pesilat-approve', [AdminController::class, 'pesilatapprove'])->middleware('user.akses:2');
    Route::put('/pesilat-approve/{id}', [AdminController::class, 'approve'])->middleware('user.akses:2');
    Route::put('/pesilat-approve-batal/{id}', [AdminController::class, 'approve_batal'])->middleware('user.akses:2');
    Route::get('/pesilat-approve-selesai', [AdminController::class, 'pesilat_approve_selesai'])->middleware('user.akses:2');

    // cabang
    Route::resource('/cabang', CabangController::class)->middleware('user.akses:2');

    // unit
    Route::post('/unit-import', [UnitController::class, 'unitimport']);
    Route::get('/get-unit', [UnitController::class, 'getUnit']);
    Route::resource('/unit', UnitController::class);

    // ukt
    Route::resource('/ukt', UktController::class)->middleware('user.akses:2');

    // ijazah
    Route::resource('/ijazah', IjazahController::class)->middleware('pesilat.akses:1');

    // user admin 
    Route::resource('/user', UserAdminController::class);

    // logout
    Route::get('/logout', [AdminLoginController::class, 'logout']);
});
