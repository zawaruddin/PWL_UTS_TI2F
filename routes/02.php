<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720182
    Nama    : Muhammad ALi Reza
    Kelas   : TI 2F
    Nama sesuai folder controller : 
    
*/

//use App\Http\Controllers\nama_no\NamaController;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SepatuController;

Route::resource('sepatu', SepatuController::class);

// silahkan tulis code router dibawah ini 
