<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720048
    Nama    : Tzelginia Noer Cahyani
    Kelas   : TI 2F
    Nama sesuai folder controller : tzelginia_18
    
*/

//use App\Http\Controllers\nama_no\NamaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\tzelginia_18\SupermarketController_18;
// silahkan tulis code router dibawah ini 

Route::resource('tzelginia_18', SupermarketController_18::class);
