<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tampilan_controlle extends Controller
{
    public function login(){
        return view('login.login');
    }
    public function loginadmin(){
        return view('login.loginadmin');
    }
    public function logindosen(){
        return view('login.logindosen');
    }
    
    public function viewdosen(){
        return view('dosen.dosen');
    }
    public function viewadmin(){
        return view('admin.admin');
    }
    public function viewmhs(){
        return view('layout.layout');
    }
    public function beritaacaradsn(){
        return view('dosen.beritaacaradsn');
    }
    public function srtpersonalia(){
        return view('dosen.srtpersonalia');
    }
    public function srtpermohonan(){
        return view('dosen.srtpermohonan');
    }
    public function bamhs(){
        return view('mahasiswa.beritaacara');
    }
    public function srtpersonaliamhs(){
        return view('mahasiswa.srtpersonaliamhs');
    }
    public function srtpermohonanmhs(){
        return view('mahasiswa.srtpermohonanmhs');
    }





    

}
