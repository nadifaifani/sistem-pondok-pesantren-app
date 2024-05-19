<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminTamrinController extends Controller
{
    public function index()
    {
        $data['title'] = 'Tamrin';

        return view('admin.pembayaran.tamrin', [

        ], $data);
    }
}
