<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720115
    Nama    : Aliyya Putri Setiyomadani
    Kelas   : TI 2F
    Nama sesuai folder controller : aliyya_22
    
*/

use App\Http\Controllers\aliyya_22\MotorController;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// silahkan tulis code router dibawah ini 
route::resource('motor', MotorController::class);

route::get('search', [MotorController::class, 'search'])->name('search');
