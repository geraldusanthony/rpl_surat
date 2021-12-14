<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\srtpersonaliadsn;  


class srtpersonaliadsn_controller extends Controller
{
    public function suratpersonalia(){
        $data_srtpersonalia = srtpersonaliadsn::all();
        return view('dosen.srtpersonalia',compact('data_srtpersonalia'));
    }
    public function srtpersonaliadsn(){
        $data_srtpersonalia = srtpersonaliadsn::all();
        return view('dosen.srtpersonalia',compact('data_srtpersonalia'));
    }
    public function tambahsrtpl(Request $request){ 
        srtpersonaliadsn::create($request->all());
        return redirect('srtpersonalia')->with('sukses','Surat telah diajukan!');
    }
}
