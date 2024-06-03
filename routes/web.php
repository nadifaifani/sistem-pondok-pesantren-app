<?php

use App\Http\Controllers\Admin\AdminBerandaController;
use App\Http\Controllers\Admin\AdminDaftarUlangController;
use App\Http\Controllers\Admin\AdminIuranBulananController;
use App\Http\Controllers\Admin\AdminLaporanKeuanganController;
use App\Http\Controllers\Admin\AdminMasterController;
use App\Http\Controllers\Admin\AdminPemasukanController;
use App\Http\Controllers\Admin\AdminPendaftaranController;
use App\Http\Controllers\Admin\AdminPengeluaranController;
use App\Http\Controllers\Admin\AdminSantriController;
use App\Http\Controllers\Admin\AdminTamrinController;
use App\Http\Controllers\Guest\GuestBerandaController;
use App\Http\Controllers\Guest\GuestPendaftaranController;
use App\Http\Controllers\Wali\WaliBerandaController;
use App\Http\Controllers\Wali\WaliCekHafalanController;
use App\Http\Controllers\Wali\WaliCekNilaiController;
use App\Http\Controllers\Wali\WaliCekPointController;
use App\Http\Controllers\Wali\WaliDaftarMataPelajaranController;
use App\Http\Controllers\Wali\WaliDaftarPengajarController;
use App\Http\Controllers\Wali\WaliDaftarSantriController;
use App\Http\Controllers\Wali\WaliTagihanController;
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
Route::get('/admin/santri', [AdminSantriController::class,'index'])->name('santri');
Route::get('/admin/pendaftaran', [AdminPendaftaranController::class,'index'])->name('pendaftaran');
Route::get('/admin/master', [AdminMasterController::class,'index'])->name('master');
Route::get('/wali/beranda', [WaliBerandaController::class,'index'])->name('wali-beranda');
Route::get('/wali/tagihan', [WaliTagihanController::class,'index'])->name('tagihan');
Route::get('/wali/cek_nilai', [WaliCekNilaiController::class,'index'])->name('cek_nilai');
Route::get('/wali/cek_hafalan', [WaliCekHafalanController::class,'index'])->name('cek_hafalan');
Route::get('/wali/cek_point', [WaliCekPointController::class,'index'])->name('cek_point');
Route::get('/wali/daftar_pengajar', [WaliDaftarPengajarController::class,'index'])->name('daftar_pengajar');
Route::get('/wali/daftar_santri', [WaliDaftarSantriController::class,'index'])->name('daftar_santri');
Route::get('/wali/daftar_mata_pelajaran', [WaliDaftarMataPelajaranController::class,'index'])->name('daftar_mata_pelajaran');