<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AksesorisPakaian extends Model
{
    use HasFactory;

    protected $table = 'aksesoris';
    protected $primaryKey = 'id';

    protected $fillable = [
        'kode_barang',
        'nama',
        'harga',
        'stok'
    ];
}
