<?php

use App\Http\Controllers\Admin\KapalWajibController;
use App\Http\Controllers\Admin\PembayaranController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\Admin\RekeningController;
use App\Http\Controllers\Admin\kategoriretribusiController;
use App\Http\Controllers\Admin\WajibController;




Route::get('/', function () {
    return view('welcome');
});


route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth','ceklevel:admin,karyawan']], function () {
    route::get('/home',[HomeController::class,'index'])->name('home');
    route::resource('rekening',RekeningController::class);
    route::resource('kategori',kategoriretribusiController::class);
    route::resource('wajib',WajibController::class);
    route::resource('kapalku',KapalWajibController::class);
    route::resource('pembayaran',PembayaranController::class);
});


Route::group(['middleware' => ['auth','ceklevel:karyawan']], function () {

});


