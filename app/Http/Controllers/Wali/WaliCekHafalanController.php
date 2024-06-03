<?php

namespace App\Http\Controllers\Wali;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WaliCekHafalanController extends Controller
{
    public function index()
    {
        $data['title'] = 'Cek Hafalan';

        return view('wali.progres_santri.cek_hafalan', [

        ], $data);
    }

}
