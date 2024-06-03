<?php

namespace App\Http\Controllers\Wali;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WaliDaftarPengajarController extends Controller
{
    public function index()
    {
        $data['title'] = 'Daftar Pengajar';

        return view('wali.informasi.daftar_pengajar', [

        ], $data);
    }
}
