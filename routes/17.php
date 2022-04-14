<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720188
    Nama    : Khairun Nisa
    Kelas   : TI 2F
    Nama sesuai folder controller : nisa_17
    
*/

//use App\Http\Controllers\nama_no\NamaController;

use App\Http\Controllers\nisa_17\TvController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// silahkan tulis code router dibawah ini 
Route::resource('tv', TvController::class);