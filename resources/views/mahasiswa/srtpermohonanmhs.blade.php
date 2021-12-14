@extends('layout.layout')
@section('content')
<div class="container mt-5">
      <ul class="left"> 
        <h1>Input Surat Permohonan </h1> 
      </ul>
    <br>
<div class="container">
  @if(session('sukses'))
      <div class="alert alert-success" role="alert">
       {{session('sukses')}}
      </div>
  @endif
    <div class="row">
        <div class="col-6">
             <!-- Button trigger modal -->
             <ul class="right">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Ajukan Surat
             </button>
             
            </ul>
        </div>
        <br>
        <table class="table">
              <tr>
               <th>Tanggal Pelaksanaan</th>
               <th>Lokasi Kegiatan</th>
               <th>Nama Mitra</th> 
               <th>Keterangan</th> 
               </tr>
          @foreach ($data_srtpermohonanmhs as $srtpermohonanmhs)
              <tr>
              <td>{{$srtpermohonanmhs->tgl_pelaksanaan}}</td>   
              <td>{{$srtpermohonanmhs->lksi_kgt}}</td> 
              <td>{{$srtpermohonanmhs->nm_mitra}}</td> 
              <td>{{$srtpermohonanmhs->ket}}</td> 
             </tr>
             @endforeach
          
    </div>
          </div>
            </div>  
            </main>
    </div>
    
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pengajuan Surat Permohonan</h5> 
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
      
        <form action="/surat/tambahsrtpermhs" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Pelaksanaan</label> 
            <input name="tgl_pelaksanaan"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
         </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Lokasi Kegiatan</label>
              <input name="lksi_kgt"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
           </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Nama Mitra</label>
            <textarea name="nm_mitra"class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Keterangan</label>
            <textarea name="ket"class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
          </div>
          
      </div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection  