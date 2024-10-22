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
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/home');
        }
        return redirect('/');
    }
    
    public function logout (Request $request){
        Auth::logout();
        return redirect('/');
    }

    
}