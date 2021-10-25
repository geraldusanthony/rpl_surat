<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tampilan_controlle extends Controller
{
    public function login(){
        return view('login.login');
    }
    public function viewdosen(){
        return view('dosen.dosen');
    }
    public function viewadmin(){
        return view('admin.admin');
    }
}
