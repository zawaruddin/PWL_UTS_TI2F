<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720116
    Nama    : Arva bayu Susanto
    Kelas   : TI 2F
    Nama sesuai folder controller : RumahController
    
*/

//use App\Http\Controllers\nama_no\NamaController;
use App\Http\Controllers\arva_04\RumahController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// silahkan tulis code router dibawah ini 
Route::resource('rumah', RumahController::class);