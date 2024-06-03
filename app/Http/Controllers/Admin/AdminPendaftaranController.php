<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPendaftaranController extends Controller
{
    public function index()
    {
        $data['title'] = 'Pendaftaran';

        return view('admin.pendaftaran.pendaftaran', [

        ], $data);
    }
}
