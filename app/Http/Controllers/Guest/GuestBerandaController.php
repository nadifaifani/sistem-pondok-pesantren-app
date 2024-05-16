<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestBerandaController extends Controller
{
    public function index()
    {
        $data['title'] = 'Beranda';

        $imageFiles = glob(public_path('images/pondok/area_pondok/*'));
        $imageFiles = array_diff($imageFiles, ['.', '..']);
        $imageNames = [];
        foreach ($imageFiles as $imageFile) {
            $imageNames[] = basename($imageFile);
        }

        return view('guest.beranda.beranda', [
            'imageNames' => $imageNames,
        ], $data);
    }
}
