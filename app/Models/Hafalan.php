<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hafalan extends Model
{
    use HasFactory;
    protected $table = 'hafalans';
    protected $fillable = [
        'santri_id',
        'surah',
        'ayat',
        'tanggal',
    ];

    public function santri()
    {
        return $this->belongsTo(Santri::class, 'santri_id', 'id_santri');
    }
}
