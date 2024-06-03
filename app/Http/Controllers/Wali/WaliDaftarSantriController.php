<?php

namespace App\Http\Controllers\Wali;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WaliDaftarSantriController extends Controller
{
    public function index()
    {
        $data['title'] = 'Daftar Santri';

        return view('wali.informasi.daftar_santri', [

        ], $data);
    }
}
