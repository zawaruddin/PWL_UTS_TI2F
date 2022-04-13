<?php

namespace App\Models\wazir_23;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MesinCuci extends Model
{
    use HasFactory;
    protected $table = 'mesin_cuci';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'totalcucian', 'deskripsi'];
}
