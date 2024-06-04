<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    use HasFactory;

    protected $table = 'mata_pelajarans';
    protected $primaryKey = 'id_mata_pelajaran';
    protected $fillable = [
        'fiqih',
        'hadist',
        'bahasa_arab',
        'nahwu',
        'shorof',
        'hafalan',
        'id_nilai',
    ];


    public function NilaiSantri()
    {
        return $this->belongsTo(NilaiSantri::class, 'id_nilai');
    }
}
