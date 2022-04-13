<?php

namespace App\Models\iqri_12;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elektronik extends Model
{
    use HasFactory;
    protected $table='elektronik'; 
        protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
    'Nama',
    'Merk',
    'Harga',
    'Suplier',
    'Tanggal_Beli',
    ];
}
