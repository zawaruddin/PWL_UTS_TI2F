<?php

/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720066
    Nama    : Iqri Mannisa' Buchori
    Kelas   : TI 2F
    Nama sesuai folder controller : iqri_12
    
*/

//use App\Http\Controllers\nama_no\NamaController;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\iqri_12\BarangElektronikController;

Route::resource('elektronik', BarangElektronikController::class);

// silahkan tulis code router dibawah ini 
