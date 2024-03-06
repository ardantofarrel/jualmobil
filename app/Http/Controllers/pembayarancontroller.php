<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pembayarancontroller extends Controller
{
    public function pembayaran(){
        return view('pembayaran');
    }
}
