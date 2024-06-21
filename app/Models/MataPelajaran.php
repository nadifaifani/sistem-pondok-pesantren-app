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
        'nama_mata_pelajaran',
        'deskripsi',
    ];
}
