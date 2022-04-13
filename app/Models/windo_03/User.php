<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $table="sekolah";
    public $timestamps = false;
    protected $primaryKey= 'nim';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'NPSN',
        'nama_sekolah',
        'alamat',
        'no_telepon',
    ];
}
