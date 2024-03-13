<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class now_playing extends Controller
{
    public function nowplaying(){
        return view('now_playing');
    }
}
