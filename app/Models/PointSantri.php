<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointSantri extends Model
{
    use HasFactory;
    protected $table = 'id_santri';
    protected $primaryKey = 'id_santri';
    protected $fillable = [
        'jenis_point_santri',
        'jumlah_point_santri',
        'deskripsi_point_santri',
    ];

    
    public function santri()
    {
        return $this->hasMany(Santri::class, 'id_point_santri');
    }


}