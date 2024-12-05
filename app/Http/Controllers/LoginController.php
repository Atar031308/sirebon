<?php

namespace App\Http\Controllers;

use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function halamanLogin(){
        return view('Login.Login-aplikasi');
    }

    public function postlogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->level === 'admin') {
                return redirect()->route('home.index')->with('success', 'Selamat datang, Admin!');
            } elseif ($user->level === 'karyawan') {
                return redirect()->route('Profile.index')->with('success', 'Selamat datang di halaman profil Anda!');
            } elseif ($user->level === 'superadmin') {
                return redirect()->route('superadmin.index')->with('success', 'Selamat datang di halaman profil Anda!');
            }
        }

        return redirect()->back()->with('error', 'Username atau password salah!');
    }
    
    public function logout (Request $request){
        Auth::logout();
        return redirect('/');
    }

    
}