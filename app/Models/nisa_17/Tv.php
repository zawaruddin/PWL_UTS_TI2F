<?php

namespace App\Models\nisa_17;

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
