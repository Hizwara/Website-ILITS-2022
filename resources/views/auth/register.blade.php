<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />
 <title>Form Registrasi</title>

 <!-- Icon -->
 <link rel="icon" href="{{asset('dashboard/dist/img/logo.png')}}" />

 <!-- AdminLTE App -->
 <script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>

 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
 <!-- Font Awesome -->
 <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}" />
 <!-- Ionicons -->
 <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
 <!-- Tempusdominus Bootstrap 4 -->
 <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}" />
 <!-- iCheck -->
 <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}" />
 <!-- JQVMap -->
 <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}" />
 <!-- Theme style -->
 <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.css')}}" />
 <!-- overlayScrollbars -->
 <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}" />
 <!-- Daterange picker -->
 <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}" />
 <!-- summernote -->
 <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}" />
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
 <!-- My CSS -->
 <link rel="stylesheet" href="{{asset('css/auth-main.css')}}" />
 <style>
  body {
   padding-top: 20rem;
  }
 </style>
</head>

<body>
 <!-- Preloader -->
 <div class="
                preloader
                flex-column
                justify-content-center
                align-items-center
            ">
  <img class="animation__shake" src="{{asset('dashboard/dist/img/logo.png')}}" alt="AdminLTELogo" height="60" width="60" />
 </div>

 <!DOCTYPE html>
 <html lang="en">

 <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AdminLTE 3 | Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}" />
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}" />
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}" />
 </head>

 <body class="hold-transition register-page">
  <div class="register-box">
   <div class="register-logo">
    <a href="index2.html"><b>Ini Lho ITS</b>2022</a>
   </div>

   <div class="card">
    <div class="card-body register-card-body">
     <p class="login-box-msg">Daftar akun baru</p>

     <form action="index.html" method="post">
      <div class="input-group mb-3">
       <input type="email" class="form-control" placeholder="Email" name="email" />
       <div class="input-group-append">
        <div class="input-group-text">
         <span class="fas fa-envelope"></span>
        </div>
       </div>
      </div>
      <div class="input-group mb-3">
       <input type="password" class="form-control" placeholder="Kata Sandi" name="password" />
       <div class="input-group-append">
        <div class="input-group-text">
         <span class="fas fa-lock"></span>
        </div>
       </div>
      </div>
      <div class="input-group mb-3">
       <input type="password" class="form-control" placeholder="Ketik Ulang Kata Sandi" name="password_confirm" />
       <div class="input-group-append">
        <div class="input-group-text">
         <span class="fas fa-lock"></span>
        </div>
       </div>
      </div>
      <div class="input-group mb-3">
       <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap" />
       <div class="input-group-append">
        <div class="input-group-text">
         <span class="fas fa-user"></span>
        </div>
       </div>
      </div>
      <!-- Dropdown Provinsi & Kabupaten -->
      <select class="custom-select" style="margin-bottom: 15px" name="provinsi_domisili">
       <option selected>Provinsi Domisili</option>
       <option value="1">One</option>
       <option value="2">Two</option>
       <option value="3">Three</option>
      </select>
      <br />
      <select class="custom-select" style="margin-bottom: 15px" name=" kab_domisili">
       <option selected>
        Kabupaten/Kota Domisili
       </option>
       <option value="1">One</option>
       <option value="2">Two</option>
       <option value="3">Three</option>
      </select>
      <br />
      <!-- Akhir Dropdown Provinsi & Kabupaten -->
      <div class="input-group mb-3">
       <input type="text" class="form-control" placeholder="Alamat" name="alamat" />
       <div class="input-group-append">
        <div class="input-group-text">
         <span class="fas fa-home"></span>
        </div>
       </div>
      </div>
      <div class="input-group mb-3">
       <input type="text" class="form-control" placeholder="Asal Sekolah" name="asal_sekolah" />
       <div class="input-group-append">
        <div class="input-group-text">
         <span class="fas fa-school"></span>
        </div>
       </div>
      </div>
      <!-- Dropdown kota/kab asal sekolah -->
      <select class="custom-select" style="margin-bottom: 15px" name="kota_kab_asal_sekolah">
       <option selected>
        Kota/Kabupaten Asal Sekolah
       </option>
       <option value="1">One</option>
       <option value="2">Two</option>
       <option value="3">Three</option>
      </select>
      <!-- Akhir Dropdown kota/kab asal sekolah-->

      <div class="input-group mb-3">
       <input type="text" class="form-control" placeholder="Nomor WhatsApp" name="no_wa" />
       <div class="input-group-append">
        <div class="input-group-text">
         <span class="fab fa-whatsapp"></span>
        </div>
       </div>
      </div>
      <!-- Radio  -->
      <div class="form-check">
       <input class="form-check-input" type="radio" name="is_pelajar_aktif" id="flexRadioDefault1" />
       <label class="form-check-label" for="flexRadioDefault1">
        Pelajar Aktif
       </label>
      </div>
      <div class="form-check">
       <input class="form-check-input" type="radio" name="is_pelajar_aktif" id="flexRadioDefault2" checked />
       <label class="form-check-label" for="flexRadioDefault2">
        Bukan Pelajar Aktif
       </label>
      </div>
      <br />
      <!-- Akhir radio -->
      <div class="input-group mb-3">
       <input type="text" class="form-control" placeholder="Kamu tau ILITS dari mana?" style="padding-bottom: 5rem" name=" text is_pelajar_aktif " />
       <div class="input-group-append">
        <div class="input-group-text">
         <span class="fas fa-question-circle"></span>
        </div>
       </div>
      </div>

      <div class="row">
       <div class="col-8">
        <div class="icheck-primary">
         <input type="checkbox" id="agreeTerms" name="terms" value="agree" />
         <label for="agreeTerms">
          Saya setuju dengan
          <a href="#">S&K</a>
         </label>
        </div>
       </div>
       <!-- /.col -->
       <div class="col-4">
        <button type="submit" class="btn btn-primary btn-block">
         Daftar
        </button>
       </div>
       <!-- /.col -->
      </div>
     </form>

     <a href="login.html" class="text-center">Saya sudah memiliki akun</a>
    </div>
    <!-- /.form-box -->
   </div>
   <!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('assets/dist/js/adminlte.js')}}"></script>
 </body>

 </html>
</body>

</html>