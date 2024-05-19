<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPengeluaranController extends Controller
{
    public function index()
    {
        $data['title'] = 'Pengeluaran';

        return view('admin.pengeluaran.pengeluaran', [

        ], $data);
    }
}
