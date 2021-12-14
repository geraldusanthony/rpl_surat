<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\beritaacaradsn; 

class beritaacaradsn_controller extends Controller
{
    public function suratberitaacara(){
        $data_beritaacaradsn = beritaacaradsn::all();
        return view('dosen.beritaacaradsn',compact('data_beritaacaradsn'));
    }
    public function beritaacaradsn(){
        $data_beritaacaradsn = beritaacaradsn::all();
        return view('dosen.beritaacaradsn',compact('data_beritaacaradsn'));
    }
    public function tambahsrtba(Request $request){ 
        beritaacaradsn::create($request->all());
        return redirect('beritaacaradsn')->with('sukses','Surat telah diajukan!');
    }

}
