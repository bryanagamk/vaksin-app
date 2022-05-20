<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalVaksinController;
use App\Http\Controllers\JenisVaksinController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\RiwayatController;
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

// Laporan
Route::get('/laporan', [LaporanController::class, 'index'])->middleware(['auth', 'role:admin'])->name('laporan.index');
Route::post('/laporan/{id}', [LaporanController::class, 'attendance'])->middleware(['auth', 'role:admin'])->name('laporan.attendance');

// Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index'])->middleware(['auth', 'role:admin'])->name('pegawai.index');
Route::get('/pegawai/{id}', [PegawaiController::class, 'show'])->middleware(['auth', 'role:admin'])->name('pegawai.show');
// Vaksinator
Route::get('/vaksinator', [VaksinatorController::class, 'index'])->middleware(['auth', 'role:admin'])->name('vaksinator.index');
Route::post('/vaksinator', [VaksinatorController::class, 'store'])->middleware(['auth', 'role:admin'])->name('vaksinator.store');
Route::delete('/vaksinator', [VaksinatorController::class, 'destroy'])->middleware(['auth', 'role:admin'])->name('vaksinator.destroy');
// Jenis Vaksin
Route::get('/jenis_vaksin', [JenisVaksinController::class, 'index'])->middleware(['auth', 'role:admin'])->name('jenis_vaksin.index');
Route::post('/jenis_vaksin', [JenisVaksinController::class, 'store'])->middleware(['auth', 'role:admin'])->name('jenis_vaksin.store');
Route::delete('/jenis_vaksin', [JenisVaksinController::class, 'destroy'])->middleware(['auth', 'role:admin'])->name('jenis_vaksin.destroy');

// Riwayat
Route::get('/riwayat', [RiwayatController::class, 'index'])->middleware(['auth', 'role:user'])->name('riwayat.index');
Route::get('/riwayat/{id}', [RiwayatController::class, 'show'])->middleware(['auth', 'role:user'])->name('riwayat.show');

Route::get('/beranda', [HomeController::class, 'index'])->middleware(['auth', 'role:user|admin'])->name('beranda');
// Jadwal Vaksin
Route::get('/jadwal_vaksinasi', [JadwalVaksinController::class, 'index'])->middleware(['auth', 'role:user|admin'])->name('jadwal_vaksinasi.index');
Route::get('/jadwal_vaksinasi/create', [JadwalVaksinController::class, 'create'])->middleware(['auth', 'role:user|admin'])->name('jadwal_vaksinasi.create');
Route::post('/jadwal_vaksinasi/store', [JadwalVaksinController::class, 'store'])->middleware(['auth', 'role:user|admin'])->name('jadwal_vaksinasi.store');
Route::get('/jadwal_vaksinasi/{id}', [JadwalVaksinController::class, 'show'])->middleware(['auth', 'role:user|admin'])->name('jadwal_vaksinasi.show');
Route::delete('/jadwal_vaksinasi/{id}', [JadwalVaksinController::class, 'destroy'])->middleware(['auth', 'role:user|admin'])->name('jadwal_vaksinasi.destroy');
Route::get('/jadwal_vaksinasi/{id}/edit', [JadwalVaksinController::class, 'edit'])->middleware(['auth', 'role:user|admin'])->name('jadwal_vaksinasi.edit');
Route::post('/jadwal_vaksinasi/{id}/update', [JadwalVaksinController::class, 'update'])->middleware(['auth', 'role:user|admin'])->name('jadwal_vaksinasi.update');
Route::get('/jadwal_vaksinasi/{id}/peserta', [JadwalVaksinController::class, 'member'])->middleware(['auth', 'role:user|admin'])->name('jadwal_vaksinasi.member');
Route::post('/jadwal_vaksinasi/{id}/register', [JadwalVaksinController::class, 'member_register'])->middleware(['auth', 'role:user|admin'])->name('jadwal_vaksinasi.member_register');
Route::delete('/jadwal_vaksinasi/{id}/peserta', [JadwalVaksinController::class, 'member_destroy'])->middleware(['auth', 'role:user|admin'])->name('jadwal_vaksinasi.member_destroy');
Route::post('/jadwal_vaksinasi/{id}/create', [JadwalVaksinController::class, 'member_create'])->middleware(['auth', 'role:user|admin'])->name('jadwal_vaksinasi.member_create');

require __DIR__ . '/auth.php';
