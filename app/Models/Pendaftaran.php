<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $table = 'pendaftarans';
    protected $primaryKey = 'id_pendaftar';
    protected $fillable = [
        'nama_pendaftar',
        'tempat_tanggal_lahir_pendaftar',
        'jenis_kelamin_pendaftar',
        'alamat_pendaftar',
        'no_hp_pendaftar',
        'email_pendaftar',
        'status_pendaftar',
        'nama_wali_pendaftar',
        'no_hp_wali_pendaftar',
        'ktp_pendaftar',
        'kk_pendaftar',
    ];
    
}
