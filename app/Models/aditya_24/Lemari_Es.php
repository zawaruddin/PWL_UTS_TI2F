<?php

namespace App\Models\aditya_24;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lemari_Es extends Model
{
    protected $table='lemari_es'; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswa
    protected $primaryKey = 'id_lemaries'; // Memanggil isi DB Dengan primarykey
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
    'merek',
    'jumlah_pintu',
    'berat',
    'warna',
    'harga'
    ];
}
