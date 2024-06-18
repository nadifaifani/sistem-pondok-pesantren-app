<?php

namespace App\Http\Controllers\Admin;

use App\Models\Santri;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;
use App\Models\PointPelanggaran;
use App\Http\Controllers\Controller;

class AdminPointPelanggaranController extends Controller
{
    public function index(Request $request)
    {

        $data['title'] = 'Point Pelanggaran';

        $point_pelanggarans = PointPelanggaran::with('santri')->get();
        return view('admin.penilaian_santri.point_pelanggaran', [

        ], $data);
    }

    public function create()
    {
        $santris = Santri::all();
        return view('admin.pelanggaran.create', compact('santris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'santri_id' => 'required|exists:santris,id',
            'jenis_pelanggaran' => 'required|string|max:255',
            'point' => 'required|integer',
            'keterangan' => 'nullable|string',
        ]);

        PointPelanggaran::create($request->all());

        return redirect()->route('admin.penilaian_santri.pelanggaran')->with('success', 'Pelanggaran berhasil ditambahkan');
    }

    public function edit($id)
    {
        $point_pelanggaran = PointPelanggaran::findOrFail($id);
        $santris = Santri::all();
        return view('admin.pelanggaran.edit', compact('pelanggaran', 'santris'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'santri_id' => 'required|exists:santris,id',
            'jenis_pelanggaran' => 'required|string|max:255',
            'point' => 'required|integer',
            'keterangan' => 'nullable|string',
        ]);

        $point_pelanggaran = PointPelanggaran::findOrFail($id);
        $point_pelanggaran->update($request->all());

        return redirect()->route('admin.pelanggaran.index')->with('success', 'Pelanggaran berhasil diperbarui');
    }

    public function destroy($id)
    {
        $point_pelanggaran = PointPelanggaran::findOrFail($id);
        $point_pelanggaran->delete();

        return redirect()->route('admin.pelanggaran.index')->with('success', 'Pelanggaran berhasil dihapus');
    }
}

