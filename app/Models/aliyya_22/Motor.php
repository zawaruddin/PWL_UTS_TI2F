<?php

namespace App\Models\aliyya_22;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;
    protected $table = "motor22";
    protected $primaryKey = "id_motor";

    protected $fillable = [
        'nama_motor',
        'merk_motor',
        'transmisi',
        'warna_motor',
        'harga'
    ];
}
