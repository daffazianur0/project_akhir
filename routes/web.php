<?php
use App\Http\Controllers\User\KategoriController;
use App\Http\Controllers\User\KonfirmasiPembayaranController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\KapalRetribusiController;
use App\Http\Controllers\User\Kapalku1Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\Admin\RekeningController;
use App\Http\Controllers\Admin\kategoriretribusiController;
use App\Http\Controllers\Admin\WajibController;
use App\Http\Controllers\Admin\KapalWajibController;
use App\Http\Controllers\Admin\PembayaranController;






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
    route::resource('profile',ProfileController::class);
    route::resource('kategori',KategoriController::class);
    route::resource('kapalku1',Kapalku1Controller::class);
    route::resource('kapalRetribusi',KapalRetribusiController::class);
    route::resource('KonfirmasiPembayran',KonfirmasiPembayaranController::class);
});


Route::group(['middleware' => ['auth','ceklevel:karyawan']], function () {

});


