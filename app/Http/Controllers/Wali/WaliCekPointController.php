<?php

namespace App\Http\Controllers\Wali;

use App\Models\Santri;
use App\Models\PointSantri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WaliCekPointController extends Controller
{
    public function index()
    {
        $data['title'] = 'Cek Point';

        $id_santri = Auth::user()->id_santri;

        $santri = Santri::where('id_santri', $id_santri)->first();

        $point_santris = PointSantri::where('id_santri', $id_santri)
            ->orderBy('tanggal_point_santri', 'desc')
            ->get();

        return view('wali.progres_santri.cek_point', [
            'santri' => $santri,
            'point_santris' => $point_santris
        ], $data);
    }
}
