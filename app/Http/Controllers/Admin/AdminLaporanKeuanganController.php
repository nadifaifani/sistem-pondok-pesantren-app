<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLaporanKeuanganController extends Controller
{
    public function index()
    {
        $data['title'] = 'Laporan Keuangan';

        return view('admin.laporan_keuangan.laporan_keuangan', [

        ], $data);
    }
}
