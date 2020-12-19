<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanUtamaConntroller extends Controller
{
    public function halutama(){
        return view('halutama');
    }
}
