<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720109
    Nama    : Nisrina Hasyimiyyah
    Kelas   : TI 2F
    Nama sesuai folder controller : nisrina_09
    
*/

//use App\Http\Controllers\nama_no\NamaController;

use App\Http\Controllers\AksesorisController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// silahkan tulis code router dibawah ini 
Route::resource('aksesoris', AksesorisController::class);

//Route untuk search
Route::get('/search', [AksesorisController::class, 'search'])->name('search');


