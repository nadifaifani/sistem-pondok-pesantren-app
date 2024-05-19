<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPemasukanController extends Controller
{
    public function index()
    {
        $data['title'] = 'Pemasukan';

        return view('admin.pemasukan.pemasukan', [

        ], $data);
    }
}
