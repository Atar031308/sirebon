<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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

Route::group(['middleware' => ['auth','ceklevel:admin,karyawan']], function(){
Route::get('/home', [HomeController::class,'index'])->name('home');
});

Route::group(['middleware' => ['auth','ceklevel:karyawan']], function () {
route::post('/simpan-masuk',[PresensiController::class,'store'])->name('simpan-masuk');
route::get('/presensi-masuk',[PresensiController::class,'index'])->name('presensi-masuk');    
route::get('/presensi-keluar',[PresensiController::class,'keluar'])->name('presensi-keluar');   
Route::post('ubah-presensi',[PresensiController::class,'presensipulang'])->name('ubah-presensi');
Route::get('filter-data',[PresensiController::class,'halamanrekap'])->name('filter-data'); 
Route::get('filter-data/{tglawal}/{tglakhir}',[PresensiController::class,'tampildatakeseluruhan'])->name('filter-data-keseluruhan'); 
});