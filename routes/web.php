<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RekeningController;
use App\Http\Controllers\KategoriRetribusiController;
use App\Http\Controllers\KapalController;
use App\Http\Controllers\WajibRetribusiControllerController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\KapalkuController;
use App\Http\Controllers\WajibController;
use App\Http\Controllers\KonfirmasiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SuperAdminController;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;


Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    try {
        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    } catch (\Exception $e) {
        return back()->withErrors(['email' => 'Terjadi kesalahan: ' . $e->getMessage()]);
    }
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

Route::get('/', function () {
    return view('/login.Login-Aplikasi');
});

Route::get('/login', [LoginController::class,'halamanLogin'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'ceklevel:admin,wajib_retribusi,superadmin']], function () {
    Route::resource('home', HomeController::class);
    Route::resource('rekening', RekeningController::class);
    Route::resource('kategori', KategoriRetribusiController::class);
    Route::resource('wajib', WajibController::class);
    Route::resource('Kapal', KapalController::class);
    Route::resource('Pembayaran', PembayaranController::class);
    Route::middleware(['web'])->group(function () {
        Route::put('/konfirmasi/{id}/status', [PembayaranController::class, 'updateStatus'])->name('konfirmasi.updateStatus');
    });
    Route::resource('Kapalku', KapalkuController::class);
    Route::resource('Wajib', WajibController::class);
    Route::resource('Konfirmasi', KonfirmasiController::class);
    Route::post('/konfirmasi/confirm', [KonfirmasiController::class, 'confirm'])->name('konfirmasi.confirm');
    Route::get('/konfirmasi', [KonfirmasiController::class, 'index'])->name('konfirmasi.index');
    Route::resource('Profile', ProfilController::class);
    Route::put('/profile/update-password', [ProfilController::class, 'updatePassword'])->name('Profile.updatePassword');
    Route::resource('superadmin', SuperAdminController::class);
});
