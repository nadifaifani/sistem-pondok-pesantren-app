<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminIuranBulananController extends Controller
{
    public function index()
    {
        $data['title'] = 'Iuran Bulanan';

        return view('admin.pembayaran.iuran_bulanan', [

        ], $data);
    }
}
