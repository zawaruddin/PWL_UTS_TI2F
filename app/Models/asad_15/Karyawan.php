<?php

namespace App\Models\asad_15;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Karyawan as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table='karyawan';
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'Nama',
        'Jabatan',
        'Alamat',
        'Hp',
    ];
}
