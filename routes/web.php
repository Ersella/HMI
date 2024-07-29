<?php

use App\Http\Controllers\Admin\AlumniController;
use App\Http\Controllers\Admin\AnggotaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PengurusController;
use App\Http\Controllers\Admin\surat_masukController;
use App\Http\Controllers\Admin\SuratCabangController;
use App\Http\Controllers\Admin\SuratkeluarController;
use App\Http\Controllers\Admin\SuratmasukController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\KeuanganController;
use App\Http\Controllers\Admin\KomisariatController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\TrainingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Front\HomeController;
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

Route::get('/', function () {
    return redirect('home');
});

// Login
Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('home', [HomeController::class, 'home']);
Route::get('daftar-anggota', [HomeController::class, 'daftarAnggota']);
Route::get('history', [HomeController::class, 'history']);
Route::get('gallery', [HomeController::class, 'gallery']);
Route::get('news', [HomeController::class, 'news']);

Route::prefix('admin')->group(function () {
    include "_/admin.php";
});

Route::prefix('cabang')->group(function () {
    include "_/cabang.php";
});

Route::prefix('komisariat')->group(function () {
    include "_/komisariat.php";
});
