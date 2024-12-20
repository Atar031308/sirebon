<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function halamanLogin(){
        return view('Login.Login-aplikasi');
    }

    public function postlogin(Request $request)
    {
        // Ambil hanya username dan password dari input
        $credentials = $request->only('username', 'password');
    
        // Cek kredensial menggunakan Auth::attempt(), ini sudah memverifikasi password dengan bcrypt
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            // Mengecek level pengguna setelah berhasil login
            if ($user->level === 'admin') {
                return redirect()->route('home.index')->with('success', 'Selamat datang, Admin!');
            } elseif ($user->level === 'wajib_retribusi') {
                return redirect()->route('Profile.index')->with('success', 'Selamat datang di halaman profil Anda!');
            } elseif ($user->level === 'Superadmin') {
                return redirect()->route('superadmin.index')->with('success', 'Selamat datang di halaman profil Anda!');
            }
        }
    
        // Jika login gagal, kembali ke halaman sebelumnya dengan pesan error
        return redirect()->back()->with('error', 'Username atau password salah!');
    }
    
    
    // Fungsi untuk logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
