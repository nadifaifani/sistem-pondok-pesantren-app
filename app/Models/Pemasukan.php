<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    use HasFactory;

    protected $table = 'pemasukans';
    protected $primaryKey = 'id_pemasukan';
    protected $fillable = [
        'jumlah_pemasukan',
        'tanggal_pemasukan',
        'deskripsi_pemasukan',
        'id_admin',
    ];


    public function user()
    {
        return $this->hasOne(User::class, 'id_admin');
    }
}
