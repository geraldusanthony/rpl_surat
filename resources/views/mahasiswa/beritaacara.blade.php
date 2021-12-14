@extends('layout.layout')
@section('content')
      
<div class="container mt-5 ">
<ul class="left"> 
        <h1 >Input Berita Acara </h1> 
      </ul>
<div class="container ">
  @if(session('sukses'))
      <div class="alert alert-success" role="alert">
       {{session('sukses')}}
      </div>
  @endif
    <div class="row m-5">
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
               <th>Anggota</th> 
               <th>Tanggal Pelasanaan</th> 
               <th>Lokasi Kegiatan</th>
               <th>Nama Mitra</th> 
               <th>Keterangan</th> 
               </tr>
          @foreach ($data_beritaacara as $beritaacaramhs)
              <tr>
              <td>{{$beritaacaramhs->anggota}}</td>
              <td>{{$beritaacaramhs->tgl_pelaksanaan}}</td> 
              <td>{{$beritaacaramhs->lksi_kgt}}</td> 
              <td>{{$beritaacaramhs->nm_mitra}}</td> 
              <td>{{$beritaacaramhs->ket}}</td> 
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
  <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pengajuan Berita Acara</h5> 
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
      
        <form action="/surat/tambahsrtbamhs" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label for="exampleInputEmail1">Anggota </label> 
            <input name="anggota"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
          </div>
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
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html> -->
