<?php

namespace App\Models\arva_04;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rumah extends Model
{
    use HasFactory;
    protected $table="rumah"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    public $timestamps= false;
    protected $primaryKey = 'type'; // Memanggil isi DB Dengan primarykey

    protected $fillable = [
        'Type',
        'Blok',
        'Harga',
    ];
}
