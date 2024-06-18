<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Wali\WaliBerandaController;
use App\Http\Controllers\Wali\WaliTagihanController;
use App\Http\Controllers\Admin\AdminMasterController;
use App\Http\Controllers\Admin\AdminSantriController;
use App\Http\Controllers\Admin\AdminTamrinController;
use App\Http\Controllers\Wali\WaliCekNilaiController;
use App\Http\Controllers\Wali\WaliCekPointController;
use App\Http\Controllers\Admin\AdminBerandaController;
use App\Http\Controllers\Admin\AdminHafalanController;
use App\Http\Controllers\Guest\GuestBerandaController;
use App\Http\Controllers\Wali\WaliCekHafalanController;
use App\Http\Controllers\Admin\AdminPemasukanController;
use App\Http\Controllers\Wali\WaliDaftarSantriController;
use App\Http\Controllers\Admin\AdminDaftarUlangController;
use App\Http\Controllers\Admin\AdminPendaftaranController;
use App\Http\Controllers\Admin\AdminPengeluaranController;
use App\Http\Controllers\Guest\GuestPendaftaranController;
use App\Http\Controllers\Admin\AdminIuranBulananController;
use App\Http\Controllers\Wali\WaliDaftarPengajarController;
use App\Http\Controllers\Admin\AdminMataPelajaranController;
use App\Http\Controllers\Admin\AdminLaporanKeuanganController;
use App\Http\Controllers\Wali\WaliDaftarMataPelajaranController;
use App\Http\Controllers\Admin\AdminPointPelanggaranController;
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
Route::middleware(['guest:web,wali_santri'])->group(function () {
  Route::get('/', [GuestBerandaController::class, 'index'])->name('login');
  Route::post('/login', [GuestBerandaController::class, 'login']);
  Route::get('/pendaftaran-santri-baru', [GuestPendaftaranController::class, 'index']);
  Route::post('/pendaftaran-santri-baru', [GuestPendaftaranController::class, 'create']);
  Route::get('/pendaftaran-santri-baru/konfirmasi/{id}', [GuestPendaftaranController::class, 'index_konfirmasi'])->name('guest.pendaftaran.konfirmasi');
});

Route::middleware(['auth:web'])->group(function () {
  Route::get('/admin/beranda', [AdminBerandaController::class, 'index'])->name('admin-beranda');
  Route::get('/admin/daftar_ulang', [AdminDaftarUlangController::class, 'index'])->name('daftar_ulang');
  Route::put('/admin/daftar_ulang/edit/{id}/action', [AdminDaftarUlangController::class, 'edit']);
  Route::get('/admin/iuran_bulanan', [AdminIuranBulananController::class, 'index'])->name('iuran_bulanan');
  Route::put('/admin/iuran_bulanan/edit/{id}/action', [AdminIuranBulananController::class, 'edit']);
  Route::get('/admin/tamrin', [AdminTamrinController::class, 'index'])->name('tamrin');
  Route::put('/admin/tamrin/edit/{id}/action', [AdminTamrinController::class, 'edit']);
  Route::get('/admin/pemasukan', [AdminPemasukanController::class, 'index'])->name('pemasukan');
  Route::post('/admin/pemasukan/create/action', [AdminPemasukanController::class, 'create']);
  Route::put('/admin/pemasukan/edit/{id}/action', [AdminPemasukanController::class, 'edit']);
  Route::delete('/admin/pemasukan/delete/{id}', [AdminPemasukanController::class, 'delete']);
  Route::get('/admin/pengeluaran', [AdminPengeluaranController::class, 'index'])->name('pengeluaran');
  Route::post('/admin/pengeluaran/create/action', [AdminPengeluaranController::class, 'create']);
  Route::put('/admin/pengeluaran/edit/{id}/action', [AdminPengeluaranController::class, 'edit']);
  Route::delete('/admin/pengeluaran/delete/{id}', [AdminPengeluaranController::class, 'delete']);
  Route::get('/admin/laporan_keuangan', [AdminLaporanKeuanganController::class, 'index'])->name('laporan_keuangan');
  Route::get('/admin/laporan_keuangan/pemasukan_data', [AdminLaporanKeuanganController::class, 'getPemasukan'])->name('getPemasukan');
  Route::get('/admin/laporan_keuangan/pengeluaran_data', [AdminLaporanKeuanganController::class, 'getPengeluaran'])->name('getPengeluaran');
  Route::get('/admin/santri', [AdminSantriController::class, 'index'])->name('santri');
  Route::get('/admin/santri/{id}/info', [AdminSantriController::class, 'index_info']);
  Route::put('/admin/santri/pembayaran/{jenis_pembayaran}/{id_pembayaran}/update', [AdminSantriController::class, 'update_pembayaran']);
  Route::get('/admin/santri/create', [AdminSantriController::class, 'index_create']);
  Route::post('/admin/santri/create/action', [AdminSantriController::class, 'create']);
  Route::get('/admin/santri/edit/{id}', [AdminSantriController::class, 'index_edit']);
  Route::put('/admin/santri/edit/{id}/action', [AdminSantriController::class, 'edit']);
  Route::delete('/admin/santri/delete/{id}', [AdminSantriController::class, 'delete']);
  Route::get('/admin/mata_pelajaran', [AdminMataPelajaranController::class, 'index'])->name('mata_pelajaran');
  Route::get('/admin/mata_pelajaran/create', [AdminMataPelajaranController::class, 'create'])->name('mata_pelajaran.create');
  Route::post('/admin/mata_pelajaran/create/action', [AdminMataPelajaranController::class, 'store']);
  Route::get('/admin/mata_pelajaran/edit/{id}', [AdminMataPelajaranController::class, 'edit'])->name('mata_pelajaran.edit');
  Route::put('/admin/mata_pelajaran/edit/{id}/action', [AdminMataPelajaranController::class, 'update']);
  Route::delete('/admin/mata_pelajaran/delete/{id}', [AdminMataPelajaranController::class, 'destroy']);
  Route::get('/admin/hafalan', [AdminHafalanController::class, 'index'])->name('hafalan');
  Route::get('/admin/hafalan/create', [AdminHafalanController::class, 'create'])->name('hafalan.create');
  Route::post('/admin/hafalan/create/action', [AdminHafalanController::class, 'store']);
  Route::get('/admin/hafalan/edit/{id}', [AdminHafalanController::class, 'edit'])->name('hafalan.edit');
  Route::put('/admin/hafalan/edit/{id}/action', [AdminHafalanController::class, 'update']);
  Route::delete('/admin/hafalan/delete/{id}', [AdminHafalanController::class, 'destroy']);
  Route::get('/admin/point_pelanggaran', [AdminPointPelanggaranController::class, 'index'])->name('point_pelanggaran');
  Route::get('/admin/poit_pelanggaran/create', [AdminPointPelanggaranController::class, 'create'])->name('point_pelanggaran.create');
  Route::post('/admin/point_pelanggaran/create/action', [AdminPointPelanggaranController::class, 'store']);
  Route::get('/admin/point_pelanggaran/edit/{id}', [AdminPointPelanggaranController::class, 'edit'])->name('point_pelanggaran.edit');
  Route::put('/admin/point_pelanggaran/edit/{id}/action', [AdminPointPelanggaranController::class, 'update']);
  Route::delete('/admin/point_pelanggaran/delete/{id}', [AdminPointPelanggaranController::class, 'destroy']);
  Route::get('/admin/pendaftaran', [AdminPendaftaranController::class, 'index'])->name('pendaftaran');
  Route::get('/admin/pendaftaran/{id}', [AdminPendaftaranController::class, 'index_info']);
  Route::post('/admin/pendaftaran/verifikasi/{id}', [AdminPendaftaranController::class, 'create']);
  Route::get('/admin/master', [AdminMasterController::class, 'index'])->name('master');
});

Route::middleware(['auth:wali_santri'])->group(function () {
  Route::get('/wali/beranda', [WaliBerandaController::class, 'index'])->name('wali-beranda');
  Route::get('/wali/tagihan', [WaliTagihanController::class, 'index'])->name('tagihan');
  Route::get('/wali/cek_nilai', [WaliCekNilaiController::class, 'index'])->name('cek_nilai');
  Route::get('/wali/cek_hafalan', [WaliCekHafalanController::class, 'index'])->name('cek_hafalan');
  Route::get('/wali/cek_point', [WaliCekPointController::class, 'index'])->name('cek_point');
  Route::get('/wali/daftar_pengajar', [WaliDaftarPengajarController::class, 'index'])->name('daftar_pengajar');
  Route::get('/wali/daftar_santri', [WaliDaftarSantriController::class, 'index'])->name('daftar_santri');
  Route::get('/wali/daftar_mata_pelajaran', [WaliDaftarMataPelajaranController::class, 'index'])->name('daftar_mata_pelajaran');
});

Route::post('/logout', [GuestBerandaController::class, 'logout'])->name('logout');
