<?php

use App\Http\Controllers\HomeController;
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

// Vaksinator
Route::get('/vaksinator', [VaksinatorController::class, 'index'])->middleware(['auth'])->name('vaksinator');

require __DIR__ . '/auth.php';
