
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('Asset/css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">ADMIN</a> 
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
                        <li><a class="dropdown-item" href="{{route('logoutadmin')}}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="/suratmasukmhs">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Kotak Masuk Mahasiswa
                            </a>
                            <a class="nav-link" href="adminberitaacara">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Berita Acara Mahasiswa
                            </a>
                            <a class="nav-link" href="adminpersonaliamhs">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Surat Personalia Mahasiswa 
                            </a>
                            <a class="nav-link" href="adminpermohonanmhs">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Surat Permohonan Mahasiswa
                            </a>
                            <a class="nav-link" href="surattugasdsn">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Surat Tugas Dosen
                            </a>
                            <a class="nav-link" href="adminberitaacaradsn">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Berita Acara Dosen 
                            </a>
                            <a class="nav-link" href="adminpersonaliadsn">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Surat Personalia Dosen 
                            </a>
                            <a class="nav-link" href="adminpermohonandsn">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Surat Permohonan Dosen
                            </a>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Kotak Keluar  
                            </a>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Tambah Data 
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
    <h1>Daftar Surat Tugas Dosen</h1>  
    <br>
    <table class="table">
        <tr>
               <th>Tanggal Pelasanaan</th> 
               <th>Lokasi Kegiatan</th>
               <th>Nama Mitra</th> 
               <th>Keterangan</th>
               <th>Verifikasi</th> 
               </tr>
          @foreach ($data_dosen as $dosen)
              <tr>
              <td>{{$dosen->tgl_pelaksanaan}}</td> 
              <td>{{$dosen->lksi_kgt}}</td> 
              <td>{{$dosen->nm_mitra}}</td> 
              <td>{{$dosen->ket}}</td> 
              <td><ul class="right">
              <button type="button" class="btn btn-primary" data-toggle="" data-target="#exampleModal">
               Terima
             </button>
             <button type="button" class="btn btn-primary" data-toggle="" data-target="#exampleModal">
               Tolak 
             </button>
            </ul></td>
              </tr>
             @endforeach
          
        </div>
          </div>
            </div>  
             
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
