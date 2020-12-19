<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalmonController extends Controller
{
    public function salmon(){
        return view('salmon');
    }
}
