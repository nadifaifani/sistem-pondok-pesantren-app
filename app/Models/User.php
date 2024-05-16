<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';

    protected $fillable = [
        'nama_admin',
        'email_admin',
        'password_admin',   'no_hp_admin',
    ];

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'id_admin');
    }

    public function pengeluaran()
    {
        return $this->hasMany(Pengeluaran::class, 'id_admin');
    }
}
