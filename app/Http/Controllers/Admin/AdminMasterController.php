<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminMasterController extends Controller
{
    public function index()
    {
        $data['title'] = 'master_admin';

        return view('admin.master.master_admin', [

        ], $data);
    }
    
}
