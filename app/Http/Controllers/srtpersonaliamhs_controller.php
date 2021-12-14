<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\srtpersonaliamhs;

class srtpersonaliamhs_controller extends Controller
{
    public function suratpersonaliamhs(){
        $data_srtpersonaliamhs = srtpersonaliamhs::all();
        return view('mahasiswa.srtpersonaliamhs',compact('data_srtpersonaliamhs'));
    }
    public function personalia(){
        $data_srtpersonaliamhs = srtpersonaliamhs::all();
        return view('mahasiswa.srtpersonaliamhs',compact('data_srtpersonaliamhs'));
    }
    public function tambahsrtplmhs(Request $request){ 
        srtpersonaliamhs::create($request->all());
        return redirect('srtpersonaliamhs')->with('sukses','Surat telah diajukan!');
    }
}
