<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mebel as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; 

class Mebel extends Model
{
    protected $table='mebel';
    protected $primaryKey = 'id_mebel';

    protected $fillable = [
        'Kode',
        'Nama',
        'Jenis',
        'Harga',
    ];
}
