<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aldi_07\KendaraanUmumController;
use Illuminate\Http\Request;
use App\Models\aldi_07\KendaraanUmum;


// silahkan tulis code router dibawah ini

Route::resource('aldi_07', KendaraanUmumController::class);