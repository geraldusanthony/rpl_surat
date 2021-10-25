@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('Asset/css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">MAHASISWA</a> 
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="/surat">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Pengajuan Surat 
                            </a>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Kotak Masuk  
                            </a>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Kotak Keluar 
                            </a>
                </div>
        </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Admin
            </div>
        </nav>
    </div>
        <div id="layoutSidenav_content">
                <main>
                    <tr>
                    <div class="card mb-4">
                        <div class="card-body">
                            @if(session('sukses'))
                                <div class="alert alert-success" role="alert">
                                    {{session('sukses')}}
                                </div>
                            @endif
                            </div>
                        </div>
                        <div class="row">

        </div>
        <table class="table">
          <tr>
               <th>Jenis Surat</th>
               <th>Tanggal Pelasanaan</th> 
               <th>Lokasi Kegiatan</th>
               <th>Nama Mitra</th> 
               <th>Keterangan</th> 
               </tr>
          @foreach ($data_mahasiswa as $mahasiswa)
              <tr>
                  <td>{{$mahasiswa->jenis_srt}}</td>
                  <td>{{$mahasiswa->tgl_pelaksanaan}}</td> 
                  <td>{{$mahasiswa->klsi_kgt}}</td> 
                  <td>{{$mahasiswa->nm_mitra}}</td> 
                  <td>{{$mahasiswa->ket}}</td> 
             </tr>
          @endforeach
            </div>
            <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Surat</h5> 
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
        <form action="/mahasiswa/create" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label for="exampleInputEmail1">Jenis Surat</label>
            <select class="selectpicker form-control">
                <option>Surat A</option>
                <option>Surat B</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Pelaksanaan</label> 
            <input name="tgl_pelaksanaan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
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
        </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('Asset/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('Asset/assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('Asset/assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('Asset/js/datatables-simple-demo.js')}}"></script>
    </body>
</html>
