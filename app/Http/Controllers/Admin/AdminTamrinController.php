<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Helpers\SemesterHelper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class AdminTamrinController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = 'Tamrin';

        $currentSemester = SemesterHelper::getCurrentSemester();

        if ($request->ajax()) {
            $tahun = $request->input('tahun');
            
            $queryLunas = Pembayaran::orderBy('created_at', 'desc')
                ->where('semester_ajaran', $currentSemester['semester'])
                ->where('tahun_ajaran', $currentSemester['tahun'])
                ->where('jenis_pembayaran', 'tamrin')
                ->where('status_pembayaran', 'lunas')
                ->with(['santri', 'user']);
                
            $queryBelumLunas = Pembayaran::orderBy('created_at', 'desc')
                ->where('semester_ajaran', $currentSemester['semester'])
                ->where('tahun_ajaran', $currentSemester['tahun'])
                ->where('jenis_pembayaran', 'tamrin')
                ->where('status_pembayaran', 'belum_lunas')
                ->with(['santri', 'user']);
        
            if (!empty($tahun)) {
                $queryLunas->whereYear('tanggal_pembayaran', $tahun);
                $queryBelumLunas->where('tahun_ajaran', $tahun);
            }
        
            $dataLunas = $queryLunas->get();
            $dataBelumLunas = $queryBelumLunas->get();
        
            $responseData = [
                'data' => [
                    'lunas' => $dataLunas,
                    'belum_lunas' => $dataBelumLunas,
                ]
            ];
        
            return response()->json($responseData);
        }

        $pembayarans = Pembayaran::orderBy('created_at', 'desc')
            ->where('semester_ajaran', $currentSemester['semester'])
            ->where('tahun_ajaran', $currentSemester['tahun'])
            ->where('jenis_pembayaran', 'tamrin')
            ->where('status_pembayaran', 'belum_lunas')
            ->with(['santri', 'user'])
            ->get();

        $years = Pembayaran::selectRaw('YEAR(tanggal_pembayaran) as year')            
            ->whereNotNull('tanggal_pembayaran')
            ->distinct()
            ->pluck('year');

        return view('admin.pembayaran.tamrin', [
            'currentSemester' => $currentSemester,
            'pembayarans' => $pembayarans,
            'years' => $years,
        ], $data);
    }

    public function edit(Request $request, $id_santri)
    {
        $currentSemester = SemesterHelper::getCurrentSemester();
        $pembayaran = Pembayaran::where('id_santri', $id_santri)
            ->where('semester_ajaran', $currentSemester['semester'])
            ->where('tahun_ajaran', $currentSemester['tahun'])
            ->where('jenis_pembayaran', 'tamrin')
            ->where('status_pembayaran', 'belum_lunas')
            ->first();

        if ($pembayaran) {
            $pembayaran->tanggal_pembayaran = now();
            $pembayaran->id_admin = Auth::user()->id_admin;
            $pembayaran->status_pembayaran = 'lunas';
            $pembayaran->save();

            return redirect()->route('tamrin')->with('success', 'Data pembayaran berhasil ditambahkan.');
        } else {
            return redirect()->back()->withErrors(['error' => 'Error: Data tidak ditemukan']);
        }
    }
}
