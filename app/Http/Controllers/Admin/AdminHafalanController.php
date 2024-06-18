<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hafalan;

class AdminHafalanController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = 'Hafalan';

        $hafalans = Hafalan::all();
        return view('admin.penilaian_santri.hafalan', [
            'hafalans' => $hafalans,
        ], $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'santri_id' => 'required',
            'surah' => 'required',
            'ayat' => 'required',
            'tanggal' => 'required|date',
        ]);

        Hafalan::create($request->all());
        return redirect()->route('admin.hafalan.index')->with('success', 'Data hafalan berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'santri_id' => 'required',
            'surah' => 'required',
            'ayat' => 'required',
            'tanggal' => 'required|date',
        ]);

        $hafalan = Hafalan::findOrFail($id);
        $hafalan->update($request->all());
        return redirect()->route('admin.hafalan.index')->with('success', 'Data hafalan berhasil diupdate.');
    }

    public function destroy($id)
    {
        $hafalan = Hafalan::findOrFail($id);
        $hafalan->delete();
        return redirect()->route('admin.hafalan.index')->with('success', 'Data hafalan berhasil dihapus.');
    }
}
