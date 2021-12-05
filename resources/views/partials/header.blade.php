<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-slide-nav">
  <section class="container">
    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse w-75" id="navbarNavAltMarkup">
      <div class="close-mobile d-none align-items-center justify-content-between mb-4">
        <a href="">
          <img src="{{ asset('img/icons/logo-small.png') }}" class="logo-small" alt="Ini Lho ITS! 2022">
        </a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-2x border-0 fa-chevron-left" aria-hidden="true"></i>
        </button>
      </div>
      <div class="mr-auto navbar-nav">
        <div class="d-flex align-items-center">
          <img src="{{ asset('img/icons/home.svg') }}" class="img-responsive img-fluid mr-3" alt="Home">
          <a class="mx-4 nav-link" href="../main">Home</a>
        </div>
        <div class="d-flex align-items-center">
          <img src="{{ asset('img/icons/eventual.svg') }}" class="img-responsive img-fluid mr-3" alt="Eventual">
          <a class="mx-4 nav-link" href="../eventual">Eventual</a>
        </div>
        <div class="d-flex align-items-center">
          <img src="{{ asset('img/icons/fakultas.svg') }}" class="img-responsive img-fluid mr-3" alt="Fakultas">
          <a class="mx-4 nav-link" href="../main#fakultas">Fakultas</a>
        </div>
        <div class="d-flex align-items-center">
          <img src="{{ asset('img/icons/prestasi.svg') }}" class="img-responsive img-fluid mr-3" alt="Prestasi">
          <a class="mx-4 nav-link" href="../main#prestasi">Prestasi</a>
        </div>
        <div class="d-flex align-items-center">
          <img src="{{ asset('img/icons/fasilitas.svg') }}" class="img-responsive img-fluid mr-3" alt="Fasilitas">
          <a class="mx-4 nav-link" href="../fasilitas">Fasilitas</a>
        </div>
        <div class="d-flex align-items-center">
          <img src="{{ asset('img/icons/alumni.svg') }}" class="img-responsive img-fluid mr-3" alt="Alumni">
          <a class="mx-4 nav-link" href="../alumni">Alumni</a>
        </div>
        <div class="d-flex align-items-center">
          <img src="{{ asset('img/icons/beasiswa.svg') }}" class="img-responsive img-fluid mr-3" alt="Beasiswa">
          <a class="mx-4 nav-link" href="../beasiswa">Beasiswa</a>
        </div>
        <div class="d-flex align-items-center">
          <img src="{{ asset('img/icons/open-campus.svg') }}" class="img-responsive img-fluid mr-3" alt="Open campus" style="color: white">
          <div class="dropdown show">
            <a class="mx-4 nav-link dropdown-toggle" onclick="toggleDropdown()" role="button" id="dropdownMenuLink">
              Daftar
            </a>
          
            <div class="dropdown-menu" id="dropdownItemsLink">
              <a class="dropdown-item" href="{{route('open-campus.its-fair.register')}}">ITS Fair</a>
              <a class="dropdown-item" href="{{route('open-campus.fnd.register')}}">Faculty and Department Day</a>
              <a class="dropdown-item" href="{{route('open-campus.odl.register')}}">One Day Lecture</a>
              <a class="dropdown-item" href="{{route('peserta.welcome.register')}}">Welcome</a>
            </div>
          </div>
        </div>
      </div>
      <div class="ml-auto">
        @php
        if (!Auth::user()) {
          $route = '/login';
          $text = 'Masuk';
        } else{
          $text = 'Dashboard';
          if(Auth::user()->user_type=='App\Models\Peserta'){
            $route = '/peserta/welcome';
          } else if(Auth::user()->user_type=='App\Models\Forda'){
            $route = '/forda';
          } else{
            $route = '/admin';
          }
        }
        @endphp
        <a class="nav-link" href="{{$route}}">{{$text}}</a>
      </div>
    </div>
  </section>
</nav>
<script>
  function toggleDropdown(){
    let dropdown = document.getElementById("dropdownItemsLink");
    if(dropdown.style.display=='block'){
      dropdown.style.display = 'none';
    } else{
      dropdown.style.display = 'block';
    }
  }
</script>