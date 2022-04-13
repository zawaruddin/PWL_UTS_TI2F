<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720112
    Nama    : Aria Pratama Effendi
    Kelas   : TI 2F
    Nama sesuai folder controller : 
    
*/

use Illuminate\Http\Request;
use App\Models\aria_19\AksesorisPakaian;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aria_19\AksesorisPakaianController;

Route::resource("dashboard", AksesorisPakaianController::class);  
