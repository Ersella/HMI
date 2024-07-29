<?php

use App\Http\Controllers\Komisariat\anggotaController;
use App\Http\Controllers\Komisariat\DashboardController;
use App\Http\Controllers\Komisariat\SuratKeluarController;
use App\Http\Controllers\Komisariat\SuratMasukController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', DashboardController::class);
Route::resource('anggota', anggotaController::class);
Route::resource('surat-masuk', SuratMasukController::class);
Route::resource('surat-keluar', SuratKeluarController::class);
