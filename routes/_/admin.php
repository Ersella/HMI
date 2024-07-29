<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\GalleryDetailController;
use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\ModuleController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PenggunaController;
use Illuminate\Support\Facades\Route;


Route::get('dashboard', DashboardController::class);
Route::resource('module', ModuleController::class);
Route::resource('pengguna', PenggunaController::class);
Route::post('module/add-role', [ModuleController::class, 'addRole']);
Route::get('module/delete-role/{role}', [ModuleController::class, 'deleteRole']);
Route::resource('galery', GalleryController::class);
Route::resource('galery-detail', GalleryDetailController::class);
Route::resource('news', NewsController::class);
Route::resource('history', HistoryController::class);
