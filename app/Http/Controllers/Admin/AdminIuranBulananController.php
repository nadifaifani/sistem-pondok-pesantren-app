<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Helpers\SemesterHelper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class AdminIuranBulananController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = 'Iuran Bulanan';

        $currentSemester = SemesterHelper::getCurrentSemester();

        if ($request->ajax()) {
            // Data untuk tabel yang lunas
            $dataLunas = Pembayaran::orderBy('created_at', 'desc')
                ->where('semester_ajaran', $currentSemester['semester'])
                ->where('tahun_ajaran', $currentSemester['tahun'])
                ->where('jenis_pembayaran', 'iuran_bulanan')
                ->where('status_pembayaran', 'lunas')
                ->with(['santri', 'user'])
                ->get();

            // Data untuk tabel yang belum lunas
            $dataBelumLunas = Pembayaran::orderBy('created_at', 'desc')
                ->where('semester_ajaran', $currentSemester['semester'])
                ->where('tahun_ajaran', $currentSemester['tahun'])
                ->where('jenis_pembayaran', 'iuran_bulanan')
                ->where('status_pembayaran', 'belum_lunas')
                ->with(['santri', 'user'])
                ->get();

            // Kemas kedua set data dalam array atau objek
            $responseData = [
                'data' => [
                    'lunas' => $dataLunas,
                    'belum_lunas' => $dataBelumLunas,
                ]
            ];

            // Kembalikan respons JSON
            return response()->json($responseData);
        }

        $pembayarans = Pembayaran::orderBy('created_at', 'desc')
            ->where('semester_ajaran', $currentSemester['semester'])
            ->where('tahun_ajaran', $currentSemester['tahun'])
            ->where('jenis_pembayaran', 'iuran_bulanan')
            ->where('status_pembayaran', 'belum_lunas')
            ->with(['santri', 'user'])
            ->get();

        return view('admin.pembayaran.iuran_bulanan', [
            'currentSemester' => $currentSemester,
            'pembayarans' => $pembayarans,
        ], $data);
    }

    public function edit(Request $request, $id_santri)
    {
        $currentSemester = SemesterHelper::getCurrentSemester();
        $pembayaran = Pembayaran::where('id_santri', $id_santri)
            ->where('semester_ajaran', $currentSemester['semester'])
            ->where('tahun_ajaran', $currentSemester['tahun'])
            ->where('jenis_pembayaran', 'iuran_bulanan')
            ->where('status_pembayaran', 'belum_lunas')
            ->first();

        if ($pembayaran) {
            $pembayaran->tanggal_pembayaran = now();
            $pembayaran->id_admin = Auth::user()->id_admin;
            $pembayaran->status_pembayaran = 'lunas';
            $pembayaran->save();

            return redirect()->route('iuran_bulanan')->with('success', 'Data pembayaran berhasil ditambahkan.');
        } else {
            return redirect()->back()->withErrors(['error' => 'Error: Data tidak ditemukan']);
        }
    }
}
