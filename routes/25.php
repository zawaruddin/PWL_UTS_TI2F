<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720055
    Nama    : Dina Rifa Rosyida
    Kelas   : TI 2F
    Nama sesuai folder controller : dina_25
    
*/

//use App\Http\Controllers\nama_no\NamaController;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\dina_25\LaptopController;

// silahkan tulis code router dibawah ini 
Route::resource('laptop', LaptopController::class);

Route::get('/search', [LaptopController::class, 'search'])->name('laptop.search');