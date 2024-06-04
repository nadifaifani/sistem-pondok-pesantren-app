<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiSantri extends Model
{
    use HasFactory;

    protected $table = 'nilai_santris';
    protected $primaryKey = 'id_nilai';
    protected $fillable = [
        'semester',
        'id_mata_pelajaran',
    ];


    public function MataPelajaran()
    {
        return $this->hasOne(MataPelajaran::class, 'id_mata_pelajaran');
    }
}
