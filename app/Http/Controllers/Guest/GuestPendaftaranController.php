<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestPendaftaranController extends Controller
{
    public function index()
    {
        $data['title'] = 'Pendaftaran Santri Baru';

        return view('guest.pendaftaran.pendaftaran', [

        ], $data);
    }
}
