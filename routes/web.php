<?php

use App\Http\Controllers\Admin\AdminBerandaController;
use App\Http\Controllers\Admin\AdminDaftarUlangController;
use App\Http\Controllers\Admin\AdminIuranBulananController;
use App\Http\Controllers\Admin\AdminLaporanKeuanganController;
use App\Http\Controllers\Admin\AdminPemasukanController;
use App\Http\Controllers\Admin\AdminPengeluaranController;
use App\Http\Controllers\Admin\AdminTamrinController;
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
Route::get('/admin/daftar_ulang', [AdminDaftarUlangController::class,'index'])->name('daftar_ulang');
Route::get('/admin/iuran_bulanan', [AdminIuranBulananController::class,'index'])->name('iuran_bulanan');
Route::get('/admin/tamrin', [AdminTamrinController::class,'index'])->name('tamrin');
Route::get('/admin/pemasukan', [AdminPemasukanController::class,'index'])->name('pemasukan');
Route::get('/admin/pengeluaran', [AdminPengeluaranController::class,'index'])->name('pengeluaran');
Route::get('/admin/laporan_keuangan', [AdminLaporanKeuanganController::class,'index'])->name('laporan_keuangan');
Route::get('/wali/beranda', [WaliBerandaController::class,'index'])->name('wali-beranda');