<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\beritaacaramhs; 

class beritaacaramhs_controller extends Controller
{
    public function suratbamhs(){
        $data_beritaacaramhs = beritaacaramhs::all();
        return view('mahasiswa.beritaacara',compact('data_beritaacaramhs'));
    }
    public function beritaacaraamhs(){
        $data_beritaacara = beritaacaramhs::all();
        return view('mahasiswa.beritaacara',compact('data_beritaacara'));
    }
    public function tambahsrtbamhs(Request $request){ 
        beritaacaramhs::create($request->all());
        return redirect('beritaacara')->with('sukses','Surat telah diajukan!');
    }
}
