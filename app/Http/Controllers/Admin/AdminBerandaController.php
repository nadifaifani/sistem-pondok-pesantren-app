<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminBerandaController extends Controller
{
    public function index()
    {
        $data['title'] = 'Beranda';

        return view('admin.beranda.beranda', [

        ], $data);
    }
}