<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaliSantri extends Model
{
    use HasFactory;

    protected $table = 'wali_santri';
    protected $primaryKey = 'id_wali_santri';
    protected $fillable = [
        'nama_wali_santri', 
        'email_wali_santri', 
        'password_wali_santri', 
        'no_hp', 
        'alamat_wali_santri', 
        'id_santri',
    ];

    public function santri()
    {
        return $this->belongsTo(Santri::class, 'id_santri');
    }
}
