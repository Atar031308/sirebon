<?php

namespace App\Http\Controllers;

use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function halamanLogin(){
        return view('Login.Login-aplikasi');
    }
    
    public function postlogin(Request $request){
        if (Auth::attempt($request->only('email', 'password'))) {
            // Cek peran pengguna
            $user = Auth::user(); // Mendapatkan data pengguna yang sedang login
            
            if ($user->role == 'admin') { // Asumsikan ada field 'role' di tabel users
                return redirect('/home'); // Redirect ke halaman home untuk admin
            } elseif ($user->role == 'karyawan') {
                return redirect('/Profile'); // Redirect ke halaman profile untuk karyawan
            }
            
            // Redirect default jika role tidak dikenali
            return redirect('/default-page');
        }
    
        // Redirect jika login gagal
        return redirect('/')->with('error', 'Email atau password salah!');
    }
    
    public function logout (Request $request){
        Auth::logout();
        return redirect('/');
    }

    
}