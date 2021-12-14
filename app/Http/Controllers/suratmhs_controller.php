<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\layout; 

class suratmhs_controller extends Controller
{
    public function surat(){ 
        return view('layout.layout');
    }
}
