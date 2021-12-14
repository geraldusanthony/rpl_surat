<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\srtpermohonandsn;

class srtpermohonandsn_controller extends Controller
{
    public function suratpermohonan(){
        $data_srtpermohonan = srtpermohonandsn::all();
        return view('dosen.srtpermohonan',compact('data_srtpermohonan'));
    }
    public function permohonan(){
        $data_srtpermohonan = srtpermohonandsn::all();
        return view('dosen.srtpermohonan',compact('data_srtpermohonan'));
    }
    public function tambahsrtper(Request $request){ 
        srtpermohonandsn::create($request->all());
        return redirect('srtpermohonan')->with('sukses','Surat telah diajukan!');
    }
}
