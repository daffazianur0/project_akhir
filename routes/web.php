<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\Admin\RekeningController;



Route::get('/', function () {
    return view('welcome');
});


route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth','ceklevel:admin,karyawan']], function () {
    route::get('/home',[HomeController::class,'index'])->name('home');
    route::resource('rekening',RekeningController::class);
});

Route::group(['middleware' => ['auth','ceklevel:karyawan']], function () {

});

