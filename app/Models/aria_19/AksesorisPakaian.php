<?php

namespace App\Models\aria_19;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AksesorisPakaian extends Model
{
    use HasFactory;
    protected $table = "aksesoris_pakaians";
    protected $fillable = [
        "nama",
        "warna",
        "desc",
        "harga",
    ];
    protected $guarded = ["id"];
}
