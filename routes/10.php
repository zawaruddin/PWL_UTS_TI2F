<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720004
    Nama    : Nesa Itfirul Lail
    Kelas   : TI 2F
    Nama sesuai folder controller : nesa_10
    
*/

use App\Http\Controllers\nesa_10\AnggotaPerpustakaanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// silahkan tulis code router dibawah ini 
Route::resource('anggota_perpustakaans', 'AnggotaPerpustakaanController');

