<?php

namespace App\Models\zaidan_28;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquen

class Smartphone extends Model
{
    use HasFactory;
    protected $table = 'smartphone';
    protected $primaryKey = 'id';

    protected $fillable = [
        'Nama',
        'Penyimpanan',
        'Stok',
    ];
}
