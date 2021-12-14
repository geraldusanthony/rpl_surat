<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\srtpermohonanmhs;

class srtpermohonanmhs_controller extends Controller
{
    public function suratpermohonanmhs(){
        $data_srtpermohonanmhs = srtpermohonanmhs::all();
        return view('mahasiswa.srtpermohonanmhs',compact('data_srtpermohonanmhs'));
    }
    public function permohonanmhs(){
        $data_srtpermohonanmhs = srtpermohonanmhs::all();
        return view('mahasiswa.srtpermohonanmhs',compact('data_srtpermohonanmhs'));
    }
    public function tambahsrtpermhs(Request $request){ 
        srtpermohonanmhs::create($request->all());
        return redirect('srtpermohonanmhs')->with('sukses','Surat telah diajukan!');
    }
}
