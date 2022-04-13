<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720133
    Nama    : Muhammad Zaidan Fikri
    Kelas   : TI 2F
    Nama sesuai folder controller : 
    
*/

//use App\Http\Controllers\nama_no\NamaController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\zaidan_28\SmartphoneController;
use Illuminate\Http\Request;

Route::resource('hp', SmartphoneController::class);
// silahkan tulis code router dibawah ini 
