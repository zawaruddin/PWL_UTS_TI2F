<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tv extends Model
{
    protected $table='tv';
    protected $primaryKey = 'id';

    protected $fillable = [
        'merk',
        'jenis',
        'ukuran',
        'warna',
        'harga',
        'gambar',
    ];   
};
