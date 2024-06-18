<?php

namespace App\Http\Controllers\Admin;

use App\Models\MataPelajaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class AdminMataPelajaranController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = 'Mata Pelajaran';

        if ($request->ajax()) {
            $data = MataPelajaran::orderBy('created_at', 'desc')->get();
            return DataTables::of($data)
                ->make(true);
        }

        $mataPelajarans = MataPelajaran::orderBy('created_at', 'desc')->get();
        
        return view('admin.penilaian_santri.mata_pelajaran', [
            'mataPelajarans' => $mataPelajarans,
        ], $data);
    }

    public function create()
    {
        $data['title'] = 'Tambah Mata Pelajaran';
        return view('admin.mata_pelajaran.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        MataPelajaran::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('mata_pelajaran')->with('success', 'Mata pelajaran berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $mataPelajaran = MataPelajaran::findOrFail($id);
        $data['title'] = 'Edit Mata Pelajaran';
        return view('admin.mata_pelajaran.edit', [
            'mataPelajaran' => $mataPelajaran,
        ], $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $mataPelajaran = MataPelajaran::findOrFail($id);
        $mataPelajaran->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('mata_pelajaran')->with('success', 'Mata pelajaran berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $mataPelajaran = MataPelajaran::findOrFail($id);
        $mataPelajaran->delete();

        return redirect()->route('mata_pelajaran')->with('success', 'Mata pelajaran berhasil dihapus.');
    }
}
