<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BioskopController extends Controller
{
    public function login(){
        return view('/Bioskop/login');
    }
    
    public function dashboard(){
        return view('/Bioskop/dashboard');
    }

    public function listbioskop(){
        return view('/Bioskop/listbioskop');
    }
}
