<?php

namespace App\Http\Controllers\Wali;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WaliCekNilaiController extends Controller
{
    public function index()
    {
        $data['title'] = 'Cek Nilai';

        return view('wali.progres_santri.cek_nilai', [

        ], $data);
    }
}
