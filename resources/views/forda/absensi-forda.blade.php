<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ini Lho ITS! 2022 - Dashboard</title>
  <!-- Icon -->
  <link rel="icon" href="dist/img/logo.png')}}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('dashboard/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('dashboard/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dashboard/dist/css/adminlte.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/logo.png" alt="Logo ILITS 2022" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
          <li class="nav-item">
            <div class="user-panel mt-1 mb-2 d-flex">
              <div class="info">
                <a href="#" class="d-block">Admin</a>
              </div>
              <div class="image">
                <img src="{{asset('dashboard/dist/img/avatar5.png')}}" class="img-circle elevation-1" alt="User Image">
              </div>
            </div>
        </li>
        </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link logo-switch">
      <img src="{{asset('dashboard/dist/img/logo-with-text.png')}}" alt="Logo ILITS 2022" class="brand-image-xl logo-xl">
      <img src="{{asset('dashboard/dist/img/logo.png')}}" alt="Logo ILITS 2022" class="brand-image-xs logo-xs" style="left: 12px">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header"></li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Dashboard Admin
              </p>
            </a>
          </li>
          <li class="nav-header"></li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-check-circle"></i>
              <p>
                Konfirmasi Peserta
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link menu-open active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Absensi Peserta
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-wrench"></i>
              <p>
                Peserta Salah Forda
                <span class="badge badge-danger right">1</span>
              </p>
            </a>
          </li>
          <li class="nav-header"></li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Keluar
              </p>
            </a>
          </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard Admin</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box border-info elevation-2">
              <div class="inner">
                <p class="text-info">Forda</p>

                <h3>Surabaya</h3>
              </div>
              <div class="icon">
                <i class="ion ion-ios-people"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box border-primary elevation-2">
              <div class="inner">
                <p class="text-primary">Jumlah peserta terdaftar</p>

                <h3>123</h3>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box border-success elevation-2">
              <div class="inner">
                <p class="text-success">Jumlah peserta terkonfirmasi</p>

                <h3>123</h3>
              </div>
              <div class="icon">
                <i class="ion ion-ios-checkmark"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box border-warning elevation-2">
              <div class="inner">
                <p class="text-warning">Jumlah peserta Hadir</p>

                <h3>123</h3>
              </div>
              <div class="icon">
                <i class="ion ion-android-warning"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Absensi Peserta</h3>

                    <div class="card-tools my-2">
                      <div class="input-group input-group-sm" style="width: 265px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                              <th>Nama</th>
                              <th>Email</th>
                              <th>Asal Sekolah</th>
                              <th>No. Telp</th>
                              <th>Jurusan Tryout</th>
                              <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($forda as $f) {?>
                            @if($f->user)
                            @if($f->user->email_verified_at)
                            <tr>
                                <td><?= $f->nama_lengkap;?></td>
                                <td><?= $f->user->email;?></td>
                                <td><?= $f->asal_sekolah;?></td>
                                <td><?= $f->no_wa;?></td>
                                <td style="text-transform:capitalize"><?= $f->pilihan_tryout;?></td>
                              @if ($f->user->tryoutUser->status_absen==true)
                                <td class="text-success">Hadir</td>
                              @endif
                              <td class="text-danger">Belum Hadir</td>
                            </tr>
                            @endif
                            @endif
                            <?php }?>
                            </tbody>
                            <tfoot>
                            <tr>
                              <th>Nama</th>
                              <th>Email</th>
                              <th>Asal Sekolah</th>
                              <th>No. Telp</th>
                              <th>Jurusan Tryout</th>
                              <th>Status</th>
                            </tr>
                            </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <a href="https://inilho.its.ac.id/">Ini Lho ITS! 2022</a>.</strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('dashboard/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('dashboard/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('dashboard/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dashboard/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dashboard/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>