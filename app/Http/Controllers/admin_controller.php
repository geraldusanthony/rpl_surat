<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mahasiswa;
use App\beritaacaramhs;
use App\srtpersonaliamhs;
use App\srtpermohonanmhs;
use App\dosen;
use App\beritaacaradsn;
use App\srtpersonaliadsn;
use App\srtpermohonandsn; 

class admin_controller extends Controller
{
    public function adminsuratmasukmhs(){
        $data_mahasiswa = mahasiswa::all();
        return view('admin.suratmasukmhs',compact('data_mahasiswa'));
    }
    public function adminberitaacaramhs(){ 
        $data_beritaacara = beritaacaramhs::all();
        return view('admin.adminberitaacara',compact('data_beritaacara'));
    }
    public function adminpersonaliamhs(){ 
        $data_srtpersonaliamhs = srtpersonaliamhs::all();
        return view('admin.adminpersonaliamhs',compact('data_srtpersonaliamhs'));
    }
    public function adminpermohonanmhs(){ 
        $data_srtpermohonanmhs = srtpermohonanmhs::all();
        return view('admin.adminpermohonanmhs',compact('data_srtpermohonanmhs'));
    }
    public function adminsurattugasdsn(){ 
        $data_dosen = dosen::all();
        return view('admin.adminsurattugasdsn',compact('data_dosen'));
    }
    public function adminberitaacaradsn(){ 
        $data_beritaacaradsn = beritaacaradsn::all();
        return view('admin.adminberitaacaradsn',compact('data_beritaacaradsn'));
    }
    public function adminpersonaliadsn(){ 
        $data_srtpersonalia = srtpersonaliadsn::all();
        return view('admin.adminpersonaliadsn',compact('data_srtpersonalia'));
    }
    public function adminpermohonandsn(){ 
        $data_srtpermohonan = srtpermohonandsn::all();
        return view('admin.adminpermohonandsn',compact('data_srtpermohonan'));
    }


}
