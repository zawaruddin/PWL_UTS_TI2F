<?php

namespace App\Models\tzelginia_18;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supermarket_18 extends Model
{
    protected $table = 'supermarket'; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswa
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_brg',
        'merk_brg',
        'kode_brg',
        'harga_brg',
        'stok_brg',

    ];
}
