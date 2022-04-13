<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720124 
    Nama    : Wazir Qorni Abud
    Kelas   : TI 2F
    Nama sesuai folder controller : 
    
*/

//use App\Http\Controllers\nama_no\NamaController;
use App\Http\Controllers\wazir_23\MesinCuciController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// silahkan tulis code router dibawah ini 

Route::resource('mesin', MesinCuciController::class);
