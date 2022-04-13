<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Sepatu as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Sepatu extends Model
{
    protected $table='sepatu'; 
    protected $primaryKey = 'id'; 
    use HasFactory;

    protected $fillable = [
        'warna',
        'ukuran',
        'bahan',
        'harga',
        ];
}
