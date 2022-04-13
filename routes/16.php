<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720148
    Nama    : Moh Nanang Roni
    Kelas   : TI 2F
    Nama sesuai folder controller : 
    
*/

use App\Http\Controllers\nanang_16\MobilController;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// silahkan tulis code router dibawah ini 
Route::resource('mobil', MobilController::class);
