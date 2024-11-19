<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WajibRetribusiController extends Controller
{
    public function index(){
        return view('wajib');
}

}