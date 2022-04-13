<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041721099
    Nama    : Rizqi
    Kelas   : TI 2F
    Nama sesuai folder controller : 
    
*/

use App\Http\Controllers\rizqi_26\BarangController;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// silahkan tulis code router dibawah ini 


Route::resource('/barang',BarangController::class);