<?php

namespace App\Http\Controllers\Admin;

use App\Models\Santri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class AdminSantriController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = 'Santri';

        $santris = Santri::get();

        if ($request->ajax()) {
            $data = Santri::orderBy('created_at', 'desc')->get();
            return DataTables::of($data)
                ->make(true);
        }

        return view('admin.santri.santri', [
            'santris' => $santris,
        ], $data);
    }
}
