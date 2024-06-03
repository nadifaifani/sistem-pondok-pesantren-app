<?php

namespace App\Http\Controllers\Wali;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WaliTagihanController extends Controller
{
    public function index()
    {
        $data['title'] = 'Tagihan';

        return view('wali.tagihan.tagihan', [

        ], $data);
    }
}
