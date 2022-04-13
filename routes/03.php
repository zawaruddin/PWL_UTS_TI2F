<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720226
    Nama    : Windo Arya Rizki R
    Kelas   : TI 2F
    Nama sesuai folder controller : windo_03
    
*/

//use App\Http\Controllers\nama_no\NamaController;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\windo_03\SekolahController;

// silahkan tulis code router dibawah ini 
Route::resource('sekolah', SekolahController::class);