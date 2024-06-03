<?php

namespace App\Http\Controllers\Wali;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WaliCekPointController extends Controller
{
    public function index()
    {
        $data['title'] = 'Cek Point';

        return view('wali.progres_santri.cek_point', [

        ], $data);
    }
}
