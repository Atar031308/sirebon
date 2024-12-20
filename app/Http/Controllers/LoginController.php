<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function halamanLogin()
    {
        return view('Login.Login-aplikasi');
    }

    // Proses login
    public function postlogin(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        // Ambil input email dan password
        $credentials = $request->only('email', 'password');
    
        // Coba otentikasi
        if (Auth::attempt($credentials)) {
            // Ambil data pengguna yang sedang login
            $user = Auth::user();
    
            // Arahkan pengguna berdasarkan level
            switch ($user->level) {
                case 'admin':
                    return redirect()->route('home.index')->with('success', 'Selamat datang, Admin!');
                case 'wajib_retribusi':
                    return redirect()->route('Profile.index')->with('success', 'Selamat datang di halaman profil Anda!');
                case 'superadmin':
                    return redirect()->route('superadmin.index')->with('success', 'Selamat datang di halaman superadmin!');
                default:
                    return redirect()->back()->with('error', 'Role tidak dikenali!');
            }
        }
    
        // Jika otentikasi gagal
        return redirect()->back()->with('error', 'Email atau password salah!');
    }    
    

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/')->with('success', 'Anda telah berhasil logout.');
    }
}
