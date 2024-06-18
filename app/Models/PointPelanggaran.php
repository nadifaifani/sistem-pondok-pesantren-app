<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointPelanggaran extends Model
{
    use HasFactory;

    protected $table = 'point_pelanggarans'; // Nama tabel di database

    protected $fillable = [
        'santri_id',
        'tanggal',
        'keterangan',
        'point', // Jumlah point pelanggaran yang diberikan
    ];

    // Relasi dengan model Santri
    public function santri()
    {
        return $this->belongsTo(Santri::class, 'santri_id', 'id_santri');
    }
}

