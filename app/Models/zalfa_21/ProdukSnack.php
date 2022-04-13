<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukSnack extends Model
{
    use HasFactory;

    protected $table = 'produk_snack';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'merk',
        'jenis',
        'berat',
        'harga',
        'expired_date',
    ];
}
