<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RekeningController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KapalController;
use App\Http\Controllers\PembayaranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/login.Login-Aplikasi');
});

Route::get('/login', [LoginController::class,'halamanLogin'])->name('login');
Route::post('/postlogin', [LoginController::class,'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth','ceklevel:karyawan,admin']], function () {
    Route::get('/home', [HomeController::class,'index'])->name('home');
    Route::get('/Rekening', [RekeningController::class,'rekening_pembayaran'])->name('rekening_pembayaran');
    Route::get('/Kategori', [KategoriController::class,'Kategori_retribusi'])->name('Kategori_retribusi');
    Route::get('/Kapal', [KapalController::class,'Kapal_retribusi'])->name('Kapal_retribusi');
    Route::get('/Pembayaran', [PembayaranController::class,'Pembayaran_retribusi'])->name('Pembayaran_retribusi');
});