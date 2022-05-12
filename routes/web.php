<?php

use App\Http\Controllers\BalitaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IbuHamilController;
use App\Http\Controllers\ImunisasiController;
use App\Http\Controllers\KematianController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PenimbanganController;
use App\Http\Controllers\VitaminController;
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
    return redirect('/login');
});

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('balita', [BalitaController::class, 'index'])->name('balita-index');
    Route::get('balita/detail/{id}', [BalitaController::class, 'show'])->name('balita-show');
    Route::get('balita/hapus/{id}', [BalitaController::class, 'destroy'])->name('balita-destroy');
    Route::get('balita/tambah-data', [BalitaController::class, 'tambah'])->name('balita-tambah-data');
    Route::post('balita/tambah-data', [BalitaController::class, 'store'])->name('balita-tambah-store');
    Route::get('balita/{id}/edit', [BalitaController::class, 'edit'])->name('balita-edit');
    Route::post('balita/{id}/update', [BalitaController::class, 'update'])->name('balita-update');

    Route::get('ibu-hamil', [IbuHamilController::class, 'index'])->name('ibu-hamil-index');
    Route::get('ibu-hamil/detail/{id}', [IbuHamilController::class, 'show'])->name('ibu-hamil-detail');
    Route::get('ibu-hamil/create', [IbuHamilController::class, 'tambah'])->name('ibu-hamil-tambah-data');
    Route::post('ibu-hamil/store-data', [IbuHamilController::class, 'store'])->name('ibu-hamil-store');
    Route::get('ibu-hamil/tambah-edit/{id}', [IbuHamilController::class, 'edit'])->name('ibu-hamil-edit');
    Route::put('ibu-hamil/tambah-update/{id}', [IbuHamilController::class, 'update'])->name('ibu-hamil-update');
    Route::get('ibu-hamil/hapus/{id}', [IbuHamilController::class, 'destroy'])->name('ibu-hamil-hapus');

    Route::resource('penimbangan', PenimbanganController::class);

    Route::resource('imunisasi', ImunisasiController::class);

    Route::resource('vitamin', VitaminController::class);

    Route::resource('kematian', KematianController::class);

    Route::get('laporan', [LaporanController::class, 'index'])->name('laporan');
    Route::get('laporan/balita-print', [LaporanController::class, 'balitaPrint'])->name('laporan-balita');
    Route::get('laporan/ibu-hamil-print', [LaporanController::class, 'ibuHamilPrint'])->name('laporan-ibu-hamil');
    Route::get('laporan/kematian-print', [LaporanController::class, 'kematianPrint'])->name('laporan-kematian');
    Route::get('laporan/imunisasi-print', [LaporanController::class, 'imunisasiPrint'])->name('laporan-imunisasi');
    Route::get('laporan/vitamin-print', [LaporanController::class, 'vitaminPrint'])->name('laporan-vitamin');
    Route::get('laporan/penimbangan-print', [LaporanController::class, 'penimbanganPrint'])->name('laporan-penimbangan');
});



