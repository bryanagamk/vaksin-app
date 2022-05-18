<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalVaksinController;
use App\Http\Controllers\JenisVaksinController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\VaksinatorController;
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
    return view('welcome');
});

Route::get('/beranda', [HomeController::class, 'index'])->middleware(['auth'])->name('beranda');

// Jadwal Vaksin
Route::get('/jadwal-vaksinasi', [JadwalVaksinController::class, 'index'])->middleware(['auth'])->name('jadwal-vaksinasi');
// Laporan
Route::get('/laporan', [LaporanController::class, 'index'])->middleware(['auth'])->name('laporan');

// Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index'])->middleware(['auth'])->name('pegawai');
// Vaksinator
Route::get('/vaksinator', [VaksinatorController::class, 'index'])->middleware(['auth'])->name('vaksinator');
// Jenis Vaksin
Route::get('/jenis-vaksin', [JenisVaksinController::class, 'index'])->middleware(['auth'])->name('jenis-vaksin');

require __DIR__ . '/auth.php';
