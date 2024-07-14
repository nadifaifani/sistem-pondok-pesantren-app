<?php

namespace App\Http\Controllers\Wali;

use App\Models\Santri;
use App\Models\NilaiSantri;
use Illuminate\Http\Request;
use App\Helpers\SemesterHelper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WaliCekNilaiController extends Controller
{
    public function index()
    {
        $data['title'] = 'Cek Nilai Santri';

        $currentSemester = SemesterHelper::getCurrentSemester();

        $id_santri = Auth::user()->id_santri;

        $santri = Santri::where('id_santri', $id_santri)->first();

        // Mengambil nilai santri
        $nilaiSantri = NilaiSantri::where('id_santri', $id_santri)
            ->with('santri')
            ->orderBy('tahun_ajaran', 'asc')
            ->get();
        // Mengurutkan semester genap dulu, kemudian ganjil
        $sortedNilaiSantri = $nilaiSantri->sortBy(function ($item) {
            return [
                $item->tahun_ajaran, // urutkan berdasarkan tahun ajaran dahulu
                $item->semester_ajaran == 'genap' ? 0 : 1, // urutkan semester genap dulu, lalu ganjil
            ];
        });
        // Kelompokkan berdasarkan tahun ajaran dan semester
        $groupedNilaiSantri = $sortedNilaiSantri->groupBy(function ($item) {
            return $item->tahun_ajaran . '-' . $item->semester_ajaran;
        });

        // Rata-rata
        $averageNilai = NilaiSantri::where('id_santri', $id_santri)
            ->where('semester_ajaran', $currentSemester['semester'])
            ->where('tahun_ajaran', $currentSemester['tahun'])
            ->pluck('nilai')
            ->avg();

        return view('wali.progres_santri.cek_nilai', [
            'currentSemester' => $currentSemester,
            'santri' => $santri,
            'groupedNilaiSantri' => $groupedNilaiSantri,
            'averageNilai' => $averageNilai,
        ], $data);
    }

    public function print(Request $request, $id_santri)
    {
        $data['title'] = 'Print Nilai Santri';

        $semester = $request->input('semester');
        $tahun = $request->input('tahun');

        $santri = Santri::where('id_santri', $id_santri)->first();

        // Mengambil nilai santri
        $nilaiSantri = NilaiSantri::where('id_santri', $id_santri)
            ->where('semester_ajaran', $semester)
            ->where('tahun_ajaran', $tahun)
            ->with('santri')
            ->get();

        // Kelompokkan berdasarkan tahun ajaran dan semester
        $groupedNilaiSantri = $nilaiSantri->groupBy(function ($item) {
            return $item->tahun_ajaran . '-' . $item->semester_ajaran;
        });

        // Rata-rata
        $averageNilai = NilaiSantri::where('id_santri', $id_santri)
            ->where('semester_ajaran', $semester)
            ->where('tahun_ajaran', $tahun)
            ->pluck('nilai')
            ->avg();

        return view('wali.progres_santri.print.nilai_print', [
            'semester' => $semester,
            'tahun' => $tahun,
            'santri' => $santri,
            'groupedNilaiSantri' => $groupedNilaiSantri,
            'averageNilai' => $averageNilai,
        ], $data);
    }
}
