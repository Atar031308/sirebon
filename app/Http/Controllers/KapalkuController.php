<?php

namespace App\Http\Controllers;
use App\Models\Wajib_retribusi;
use Illuminate\Http\Request;

class KapalkuController extends Controller
{
    public function index(){
        return view('Kapalku');
    } 

    public function create(){

    
        return view('Admin.Kapalku.create');
    
    }
}
