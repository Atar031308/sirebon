<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonfirmasiController extends Controller
{
    public function Konfirmasi_pembayaran(){
        return view('Konfirmasi');
    } 
}
