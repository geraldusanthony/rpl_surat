<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dosen;

class dosen_controller extends Controller
{
    public function suratdsn(){
        $data_dosen = dosen::all();
        return view('dosen.suratdsn',compact('data_dosen'));
    }
    public function suratkeluardsn(){
        $data_dosen = dosen::all();
        return view('dosen.suratkeluardsn',compact('data_dosen'));
    }
    public function suratmasukdsn(){
        $data_dosen = dosen::all();
        return view('dosen.suratmasukdsn',compact('data_dosen'));
    }
    public function dosen(){
        $data_dosen = dosen::all();
        return view('dosen.dosen',compact('data_dosen'));
    }
    public function tambahsrt(Request $request){ 
        dosen::create($request->all());
        return redirect('dosen')->with('sukses','Surat telah diajukan!');
    }
    public function findiddsn($id){
        $data_dosen = dosen::find($id);
        $data = [
            'title' => 'dosen',
            'data_dosen' => $data_dosen
        ];
        return view('dosen.editdsn',$data);
    }
    public function editdsn($id,Request $request){
        $data_dosen = dosen::find($id);
        $data_dosen->tgl_pelaksanaan = $request->input('tgl_pelaksanaan');
        $data_dosen->lksi_kgt = $request->input('lksi_kgt');
        $data_dosen->nm_mitra = $request->input('nm_mitra');
        $data_dosen->ket = $request->input('ket');
        $data_dosen->save();
        return redirect()->route('indexdsn');
    }
    public function delete($id){
        $data_dosen = dosen::find($id);
        $data_dosen->delete();
        return redirect('dosen')->back(); 
    }
    

}
