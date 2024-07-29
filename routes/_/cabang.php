<?php

use App\Http\Controllers\Cabang\AlumniController;
use App\Http\Controllers\Cabang\DashboardController;
use App\Http\Controllers\Cabang\KeuanganController;
use App\Http\Controllers\Cabang\PengurusController;
use App\Http\Controllers\Cabang\SuratCabangController;
use App\Http\Controllers\Cabang\SuratkeluarController;
use App\Http\Controllers\Cabang\SuratKohatiController;
use App\Http\Controllers\Cabang\SuratmasukController;
use App\Http\Controllers\Cabang\TrainingController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', DashboardController::class);
Route::resource('alumni', AlumniController::class);
Route::resource('pengurus', PengurusController::class);
Route::resource('surat-cabang', SuratCabangController::class);
Route::resource('surat-masuk', SuratmasukController::class);
Route::resource('surat-keluar', SuratkeluarController::class);
Route::get('surat-cabang/cetak/{id}', [SuratCabangController::class, 'cetakData']);
Route::resource('training', TrainingController::class);
Route::resource('keuangan', KeuanganController::class);
Route::resource('surat-kohati', SuratKohatiController::class);
Route::get('surat-kohati/cetak/{id}', [SuratKohatiController::class, 'cetakData']);
