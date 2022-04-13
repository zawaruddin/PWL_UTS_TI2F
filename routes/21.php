<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720103
    Nama    : Zalfa' Putri Nabilah
    Kelas   : TI 2F
    Nama sesuai folder controller : 
    
*/

//use App\Http\Controllers\nama_no\NamaController;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\zalfa_21\ProduckSnackController;
use App\Http\Controllers\zalfa_21\SearchController;

// silahkan tulis code router dibawah ini 
Route::resource('produksnack', ProduckSnackController::class);
Route::get('/index/search', [SearchController::class, 'search'])->name('index.search');