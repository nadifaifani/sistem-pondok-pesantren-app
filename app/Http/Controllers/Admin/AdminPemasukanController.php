<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pemasukan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class AdminPemasukanController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = 'Pemasukan';

        if ($request->ajax()) {
            $data = Pemasukan::with(['user'])->orderBy('tanggal_pemasukan', 'desc')->get();
            return DataTables::of($data)
                ->make(true);
        }

        $pemasukans = Pemasukan::with(['user'])->orderBy('tanggal_pemasukan', 'desc')->get();

        return view('admin.pemasukan.pemasukan', [
            'pemasukans' => $pemasukans,
        ], $data);
    }

    public function create(Request $request)
    {
        $request->validate([
            'jumlah_pemasukan' => 'required|integer',
            'deskripsi_pemasukan' => 'required|string|max:255',
        ]);

        Pemasukan::create([
            'jumlah_pemasukan' => $request->jumlah_pemasukan,
            'tanggal_pemasukan' => now(),
            'deskripsi_pemasukan' => $request->deskripsi_pemasukan,
            'id_admin' => Auth::user()->id_admin,

        ]);

        return redirect()->route('pemasukan')->with('success', 'Pemasukan berhasil ditambahkan.');

    }

    public function edit(Request $request, $id_pemasukan)
    {
        $request->validate([
            'jumlah_pemasukan' => 'required|integer',
            'deskripsi_pemasukan' => 'required|string|max:255',
        ]);

        $pemasukan = Pemasukan::where('id_pemasukan', $id_pemasukan)->first();
        
        if($pemasukan){
            $pemasukan->jumlah_pemasukan = $request->input('jumlah_pemasukan');
            $pemasukan->deskripsi_pemasukan = $request->input('deskripsi_pemasukan');
            $pemasukan->save();

            return redirect()->route('pemasukan')->with('success', 'Data pemasukan berhasil diubah.');
        } else {
            return redirect()->back()->withErrors(['error' => 'Error: Data tidak ditemukan']);
        }

        }

        public function delete(Request $request, $id_pemasukan)
        {
            try {
                // Hapus Pemasukan
                $pemasukan = Pemasukan::where('id_pemasukan', $id_pemasukan);
                if (!$pemasukan) {
                    throw new \Exception('Pemasukan tidak ditemukan.');
                }
                $pemasukan->delete();
    
                return redirect()->back()->with('success', 'Pemasukan berhasil dihapus.');
            } catch (\Illuminate\Validation\ValidationException $e) {
                return redirect()->back()->withErrors($e->errors());
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['error' => 'Error: ' . $e->getMessage()]);
            }
        }
}
