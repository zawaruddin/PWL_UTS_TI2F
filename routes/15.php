<?php
/*
    UTS Mata Kuliah Pemrograman Web Lanjut

    Catatan, lengkapi data diri anda berikut ini
    
    NIM     : 2041720147
    Nama    : As'ad Muhaimin Iskandar
    Kelas   : TI 2F
    Nama sesuai folder controller : asad_15
    
*/

use App\Http\Controllers\asad_15\KaryawanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// silahkan tulis code router dibawah ini 
Route::get('karyawan', 'asad_15/KaryawanController@index');
