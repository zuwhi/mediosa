<?php

use App\Models\RiwayatPasien;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\AnalistikController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\DataPasienController;
use App\Http\Controllers\DataPenyakitController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RiwayatPasienController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [HomeController::class, 'index'])->name('hone');
Route::post('/', [RiwayatPasienController::class, 'showForGuest'])->name('riwayat-guest.index');
Route::prefix('/dashboard')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


    Route::prefix('/analistik')->group(function () {
        Route::get('/', [AnalistikController::class, 'index'])->name('analistik.index');
        Route::post('/getTable', [AnalistikController::class, 'getTable'])->name('analistik.getTable');
        Route::post('/getGrafik', [AnalistikController::class, 'getGrafik'])->name('analistik.getGrafik');
    });
    Route::prefix('/pasien')->group(function () {
        Route::get('/', [DataPasienController::class, 'index'])->name('pasien.index');
        Route::get('/read', [DataPasienController::class, 'read'])->name('pasien.read');
        Route::post('/', [DataPasienController::class, 'store'])->name('pasien.store');
        Route::get('/edit/{id}', [DataPasienController::class, 'edit'])->name('pasien.edit');
        Route::patch('/update/{id}', [DataPasienController::class, 'update'])->name('pasien.update');
        Route::delete('/hapus/{id}', [DataPasienController::class, 'destroy'])->name('pasien.destroy');
    });
    Route::prefix('/diagnosis')->group(function () {
        Route::get('/', [DiagnosisController::class, 'index'])->name('diagnosis.index');
        Route::post('/', [DiagnosisController::class, 'diagnosis'])->name('diagnosis.result');
    });

    Route::prefix('/penyakit')->group(function () {
        Route::get('/', [DataPenyakitController::class, 'index'])->name('penyakit.index');
        Route::post('/', [DataPenyakitController::class, 'store'])->name('penyakit.store');
        Route::get('/edit/{id}', [DataPenyakitController::class, 'edit'])->name('penyakit.edit');
        Route::patch('/update/{id}', [DataPenyakitController::class, 'update'])->name('penyakit.update');
        Route::delete('/hapus/{id}', [DataPenyakitController::class, 'destroy'])->name('penyakit.destroy');
    });

    Route::prefix('/riwayat')->group(function () {
        Route::get('/', [RiwayatPasienController::class, 'index'])->name('riwayat.index');
        Route::post('/', [RiwayatPasienController::class, 'store'])->name('riwayat.store');
        Route::get('/detail/{id}', [RiwayatPasienController::class, 'show'])->name('riwayat.detail');
    });

    Route::prefix('/pengguna')->middleware('admin')->group(function () {
        Route::get('/', [PenggunaController::class, 'index'])->name('pengguna.index');
        Route::post('/', [PenggunaController::class, 'store'])->name('pengguna.store');
        Route::get('/edit/{id}', [PenggunaController::class, 'edit'])->name('pengguna.edit');
        Route::patch('/update/{id}', [PenggunaController::class, 'update'])->name('pengguna.update');
        Route::delete('/hapus/{id}', [PenggunaController::class, 'destroy'])->name('pengguna.destroy');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
