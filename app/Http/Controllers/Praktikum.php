<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Praktikum extends Controller
{
    public function index() {
        $a=3;
        $b=3;
        $hasil = $a+$b;
        return "Hasil penjumlahan a dan b = ".$hasil;
    
    }
}
