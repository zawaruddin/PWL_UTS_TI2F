<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720236
    Nama    : Aditya Raihan Setyoputra
    Kelas   : TI 2F
    Nama sesuai folder controller : TV
    
*/

//use App\Http\Controllers\nama_no\NamaController;

use App\Http\Controllers\aditya_24\LemariEsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Route::resource('webnya', LemariEsController::class);
// silahkan tulis code router dibawah ini 
