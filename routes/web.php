<?php
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\KapalRetribusiController;
use App\Http\Controllers\User\Kapalku1Controller;
use App\Http\Controllers\User\KonfirmasiPembayaranController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\Admin\RekeningController;
use App\Http\Controllers\User\kategoriretribusiController;
use App\Http\Controllers\Admin\WajibController;
use App\Http\Controllers\Admin\KapalWajibController;
use App\Http\Controllers\Admin\PembayaranController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\kapalwajibretribusi;






use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;



Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    try {
        $status = Password::sendResetLink($request->only('email'));

    } catch (\Exception $e) {
        return back()->withErrors(['email' => 'Error: ' . $e->getMessage()]);
    }

    return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');



Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');


Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');


Route::get('/', function () {
    return view('/Login.Login-aplikasi');
});


route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth','ceklevel:admin,karyawan']], function () {
    route::get('/home',[HomeController::class,'index'])->name('home');
    route::resource('rekening',RekeningController::class);
    route::resource('wajib',WajibController::class);
    route::resource('kapalku',KapalWajibController::class);
    route::resource('pembayaran',PembayaranController::class);
    route::resource('profil',ProfileController::class);
    route::resource('kategori',KategoriController::class);
    route::resource('kapalku1',Kapalku1Controller::class);
    route::resource('kapalRetribusi',KapalRetribusiController::class);
    route::resource('KonfirmasiPembayaran',KonfirmasiPembayaranController::class);
    Route::post('/konfirmasi/confirm', [KonfirmasiPembayaranController::class, 'confirm'])->name('konfirmasi.confirm');
    Route::put('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('Profile.updatePassword');
    Route::post('/konfirmasi-bayar/{id}/update-status', [KonfirmasiPembayaranController::class, 'updateStatus'])->name('Konfirmasibayar.update-status');
    Route::get('/KapalRetribusi', [KapalRetribusiController::class, 'index'])->name('KapalRetribusi.index');
    Route::get('/Laporan', [Laporancontroller::class, 'index'])->name('Laporan.index');
    route::get('/kapalwajibretribusi', [kapalwajibretribusi::class, 'index']);


});

Route::middleware(['auth'])->group(function () {
    Route::get('/kapalku1', [Kapalku1Controller::class, 'index'])->name('kapalku1.index');
});



Route::group(['middleware' => ['auth','ceklevel:karyawan']], function () {

});


