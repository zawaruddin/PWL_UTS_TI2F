<?php

namespace App\Models\aldi_07;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KendaraanUmum extends Model
{
    //
    use HasFactory;
    protected $tabel = 'kendaraan_umums';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'roda',
        'nomor',
        'jenis',
        'tahun',
        'merk',
        'muatan'
    ];
}
