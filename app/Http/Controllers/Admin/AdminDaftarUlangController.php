<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDaftarUlangController extends Controller
{
    public function index()
    {
        $data['title'] = 'Daftar Ulang';

        return view('admin.pembayaran.daftar_ulang', [

        ], $data);
    }
}
