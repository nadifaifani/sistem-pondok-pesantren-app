<?php

use App\Http\Controllers\Admin\AdminBerandaController;
use App\Http\Controllers\Guest\GuestBerandaController;
use App\Http\Controllers\Guest\GuestPendaftaranController;
use App\Http\Controllers\Wali\WaliBerandaController;
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
Route::get('/', [GuestBerandaController::class,'index'])->name('login');
Route::get('/pendaftaran-santri-baru', [GuestPendaftaranController::class,'index']);
Route::get('/admin/beranda', [AdminBerandaController::class,'index'])->name('admin-beranda');
Route::get('/wali/beranda', [WaliBerandaController::class,'index'])->name('wali-beranda');