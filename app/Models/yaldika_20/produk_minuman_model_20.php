<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk_minuman_model_20 extends Model
{
    protected $table='minuman'; 
protected $primaryKey = 'id_produk';
protected $fillable = [
'Rasa',
'Ukuran',

];
};
