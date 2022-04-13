<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Kasir as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquent

class Kasir extends Model
{
    protected $table='kasir';
    protected $primaryKey = 'id_barang';

    protected $fillable = [
        'id_barang' => 'required',
            'Nama' => 'required',
            'kode' => 'required',
            'Jumlah' => 'required', 
    ];

}
