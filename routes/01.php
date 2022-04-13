<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 
    Nama    : 
    Kelas   : TI 2F
    Nama sesuai folder controller : 
    
*/

use App\Http\Controllers\rifqi_01\TasController;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// silahkan tulis code router dibawah ini 
Route::resource('tas', TasController::class);
Route::get('delete-tas/{tas}', [TasController::class, 'delete'])->name('delete');