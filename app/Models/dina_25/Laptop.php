<?php
namespace App\Models\dina_25;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;

    protected $table = 'laptop';

    protected $fillable = [
        'merk',
        'harga',
        'processor',
        'ram',
        'penyimpanan',
        'os',
    ];
}