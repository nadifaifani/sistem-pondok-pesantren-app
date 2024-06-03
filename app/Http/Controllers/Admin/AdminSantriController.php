<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminSantriController extends Controller
{
    public function index()
    {
        $data['title'] = 'santri';

        return view('admin.santri.santri', [

        ], $data);
    }
}
