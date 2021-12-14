<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mahasiswa;

class mahasiswa_controller extends Controller
{
    public function surat(){
        $data_mahasiswa = mahasiswa::all();
        return view('mahasiswa.surat',compact('data_mahasiswa'));
    }
    public function suratkeluarmhs(){
        $data_mahasiswa = mahasiswa::all();
        return view('mahasiswa.index',compact('data_mahasiswa'));
    }
    public function suratmasukmhs(){
        $data_mahasiswa = mahasiswa::all();
        return view('mahasiswa.suratmasuk',compact('data_mahasiswa'));
    }
    public function mahasiswa(){
        $data_mahasiswa = mahasiswa::all();
        return view('layout.layout',compact('data_mahasiswa'));
    }

    public function tambah(Request $request){
        mahasiswa::create($request->all());
        return redirect('index')->with('sukses','Surat telah diajukan!');
    }

    public function findidmhs($id){
        $data_mahasiswa = mahasiswa::find($id);
        $data = [
            'title' => 'mahasiswa',
            'data_mahasiswa' => $data_mahasiswa
        ];
        return view('mahasiswa.editmhs',$data);
    }

    public function editmhs($id,Request $request){
        $data_mahasiswa = mahasiswa::find($id);
        $data_mahasiswa->jenis_srt = $request->input('jenis_srt');
        $data_mahasiswa->tgl_pelaksanaan = $request->input('tgl_pelaksanaan');
        $data_mahasiswa->lksi_kgt = $request->input('lksi_kgt');
        $data_mahasiswa->nm_mitra = $request->input('nm_mitra');
        $data_mahasiswa->ket = $request->input('ket');
        $data_mahasiswa->save();
        return redirect()->route('indexmhs');
    }
    
    public function delete($id){
        $data_mahasiswa = mahasiswa::find($id);
        $data_mahasiswa->delete();
        return redirect('mahasiswa')->back();
    }
}
