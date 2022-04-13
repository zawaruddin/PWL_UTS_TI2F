<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720255
    Nama    : Firdaus Bia Firmansyah
    Kelas   : TI 2F
    Nama sesuai folder controller : firdaus_05
    
*/

//use App\Http\Controllers\nama_no\NamaController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MebelController;
use Illuminate\Http\Request;

// silahkan tulis code router dibawah ini 

Route::resource('mebel', MebelController::class);