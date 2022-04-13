<?php

namespace App\Models\rifqi_01;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jenis',
        'harga'
    ];
}
