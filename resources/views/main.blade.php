@extends("layouts.app")

@section('title')
  <title>Ini Lho ITS! 2022</title>
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/pages/main.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/floating-objects/main.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/components/map.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/button-link.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/two-side-color-carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/carousel-with-header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/carousel-with-floating-header-and-button.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/two-side-card.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/five-items-grid.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/three-cards-carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/three-cards.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/two-side-carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/banner-with-corner-header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/partials/section-header.css') }}">
@endsection

@section('content')
  <section class="mt-5 overflow-hidden d-flex justify-content-center flex-column position-relative" id="jumbotron">
    <article class="container text-white">
      <div class="fo-logo d-flex flex-column align-items-end">
        <img src="{{ asset("img/logo.svg") }}" alt="Ini Lho ITS! 2022" draggable="false" class="img-fluid">
        <img src="{{ asset("img/logo-layer.svg") }}" alt="Layer" draggable="false">
      </div>
      <div class="col-12 d-flex flex-column justify-content-center align-items-start">
        {{-- <h1 class="mb-3">INI LHO <br> ITS! 2022</h1> --}}
        <img src="{{ asset("img/main/main-title.png") }}" alt="Ini Lho ITS! 2022" draggable="false" class="mb-2 img-fluid logo-type">
        <x-button-link href="#tentang" angle="20deg" colorFrom="#3b71c7" colorTo="#59d3da">Kenali
          Lebih
          Lanjut
        </x-button-link>
      </div>
    </article>
  </section>

  <section class="overflow-hidden d-flex justify-content-center flex-column position-relative" id="tentang">
    <img src="{{ asset("img/icons/star.svg") }}" alt="Star icon" class="star-1 position-absolute">
    <img src="{{ asset("img/icons/star.svg") }}" alt="Star icon" class="star-2 position-absolute">
    <img src="{{ asset("img/icons/star.svg") }}" alt="Star icon" class="star-3 position-absolute">
    <img src="{{ asset("img/icons/star.svg") }}" alt="Star icon" class="star-4 position-absolute">
    <img src="{{ asset("img/icons/star.svg") }}" alt="Star icon" class="star-5 position-absolute">
    <article class="container py-5 text-center text-white d-flex flex-column align-items-center position-relative">
      <img src="{{ asset("img/icons/star.svg") }}" alt="Star icon" class="star-6 position-absolute">
      @include("partials.section-header", ["title" => "Apa itu ILITS?"])
      <p>"Kenali Dirimu, Kenali Masa Depanmu, Di Ini Lho ITS! 2022"
        Ini Lho ITS! 2022 membantu calon mahasiswa baru ITS dalam menemukan jurusan yang sesuai minat & bakat yang
        dimilikinya. Ini Lho ITS! 2022 memiliki serangkaian event yang terdiri dari Open Campus, Visit, dan Welcome</p>
    </article>
  </section>

  <section class="overflow-hidden text-white d-flex justify-content-center flex-column position-relative" id="virtual-expo">
    <img src="{{ asset("img/icons/circle-pink.svg") }}" alt="Circle icon" class="circle position-absolute">
    <article class="container text-center position-relative">
      <x-map text="Virtual Tour ITS" href="/" withLayer="true"
        src="https://arek.its.ac.id/virtual-expo/">
        <span>Virtual Expo</span>
        {{-- <a href="" class="d-flex jusitfy-content-center align-items-center text-decoration-none">
          <i class="text-white fa fa-3x fa-arrow-right" aria-hidden="true"></i>
        </a> --}}
      </x-map>
    </article>
  </section>

  {{-- <section class="d-flex justify-content-center flex-column" id="informasi-umum">
    <article class="container text-white">
      <div class="container">
        @include('partials.section-header', ["title" => "Yuk, Kepoin Kita Lebih Lanjut!"])
        <x-two-side-carousel titles="Web Series ILITS,Web Series ILITS,Web Series ILITS"
          texts="Seperti apa sih ITS itu? Yuk kenali ITS lebih dalam dengan cara yang asyik dalam web series ILITS!|Seperti apa sih ITS itu? Yuk kenali ITS lebih dalam dengan cara yang asyik dalam web series ILITS!|Seperti apa sih ITS itu? Yuk kenali ITS lebih dalam dengan cara yang asyik dalam web series ILITS!"
          images="img/main/web-series.png,img/main/web-series.png,img/main/web-series.png"
          buttonTexts="Tonton Sekarang!,Tonton Sekarang!,Tonton Sekarang!" />
      </div>
    </article>
  </section> --}}
  <?php
    $nama = array();
    $deskripsi = array();
    foreach($eventual as $e){
      $nama[] = $e->nama;
      $deskripsi[] = $e->deskripsi;
    }
    $n = join(',',$nama);
    $d = join('|',$deskripsi);
  ?>
  <section class="overflow-hidden text-white d-flex justify-content-center flex-column position-relative" id="acara">
    <img src="{{ asset("img/icons/ring-cyan.svg") }}" alt="Ring icon" class="ring-cyan position-absolute">
    <img src="{{ asset("img/icons/hollow-rec.svg") }}" alt="Hollow rectangle icon" class="hollow-rec position-absolute">
    <article class="container d-flex flex-column align-items-center">
      <x-carousel-with-header buttonText="Kenali Lebih Lanjut" headerTitle="Ada acara apa aja di ILITS! 2022?"
        titles="{{$n}}"
        texts="{{$d}}"
        images="img/main/open-campus.png,img/main/open-campus.png,img/main/open-campus.png" />
    </article>
  </section>

  {{-- <section class="d-flex justify-content-center align-items-center" id="informasi-penting">
    <article class="text-white d-flex justify-content-center align-items-center flex-column">
      <h2 class="mb-4 text-center">Pendaftaran Try Out ILITS! <br> Sudah Dibuka </h2>
      <x-button-link href="#" angle="45deg" colorFrom="#8060C9" colorTo="#59D3DA">Daftar
      </x-button-link>
    </article>
  </section> --}}

  <section class="z-10 overflow-hidden d-flex justify-content-center align-items-center flex-column position-relative" id="fakultas">
    <img src="{{ asset("img/icons/ring-pink.svg") }}" alt="Ring icon" class="ring-pink position-absolute">
    <img src="{{ asset("img/icons/rec-pink.svg") }}" alt="Ring icon" class="rec-pink position-absolute">
    <img src="{{ asset("img/icons/star.svg") }}" alt="Ring icon" class="star-1 position-absolute">
    <img src="{{ asset("img/icons/star.svg") }}" alt="Ring icon" class="star-2 position-absolute">

    <article class="container mb-5 text-center text-white">
      @include("partials.section-header", ["title" => "Kenali Fakultas Impianmu"])

      {{-- @include('partials.section-header', ["title" => "Kenali Fakultas Impianmu!"]) --}}
      <div class="row">
        <div class="mb-5 col-lg-4 col-md-6 col-12">
          <button type="button" onClick="chooseFakultas(4)" data-target="#fakultasPilihan" class="px-3 py-3 text-white border-0 w-100 h-100">Teknologi Industri dan Rekayasa Sistem</button>
        </div>
        <div class="mb-5 col-lg-4 col-md-6 col-12">
          <button type="button" onClick="chooseFakultas(2)" data-target="#fakultasPilihan" class="px-3 py-3 text-white border-0 w-100 h-100">Sains dan Analitika Data</button>
        </div>
        <div class="mb-5 col-lg-4 col-md-6 col-12">
          <button type="button" onClick="chooseFakultas(6)" data-target="#fakultasPilihan" class="px-3 py-3 text-white border-0 w-100 h-100">Teknik Sipil, Perencanaan, dan Kebumian</button>
        </div>
        <div class="mb-5 col-lg-4 col-md-6 col-12">
          <button type="button" onClick="chooseFakultas(3)" data-target="#fakultasPilihan" class="px-3 py-3 text-white border-0 w-100 h-100">Teknologi Elektro dan Informatika Cerdas</button>
        </div>
        <div class="mb-5 col-lg-4 col-md-6 col-12">
          <button type="button" onClick="chooseFakultas(5)" data-target="#fakultasPilihan" class="px-3 py-3 text-white border-0 w-100 h-100">Teknologi Kelautan</button>
        </div>
        <div class="mb-5 col-lg-4 col-md-6 col-12">
          <button type="button" onClick="chooseFakultas(1)" data-target="#fakultasPilihan" class="px-3 py-3 text-white border-0 w-100 h-100">Desain Kreatif dan Bisnis Digital</button>
        </div>
        <div class="mx-auto col-lg-4 col-md-6 col-12">
          <button type="button" onClick="chooseFakultas(7)" data-target="#fakultasPilihan" class="px-3 text-white border-0 w-100 h-100">Vokasi</button>
        </div>
      </div>
    </article>

    <article id="fakultasPilihan" class="container mt-5 text-white d-flex flex-column align-items-center">
      <x-two-side-card id="sneakpeek" title="{{$fakultas[0]->nama}}"
        text="{{$fakultas[0]->deskripsi}}"
        image="{{$fakultas[0]->foto}}"
        link="../fakultas/{{$fakultas[0]->slug}}"
        buttonText="Lihat Fakultas"/>
    </article>
  </section>

  <?php
    $nama = array();
    $deskripsi = array();
    $foto = array();
    foreach($prestasi as $p){
      $nama[] = $p->nama;
      $deskripsi[] = $p->deskripsi;
      $foto[] = "../img/main/".$p->foto;
    }
    $n = join(',',$nama);
    $d = join('|',$deskripsi);
    $f = join(',',$foto);
  ?>
  <section class="overflow-hidden text-white d-flex justify-content-center align-items-center flex-column position-relative" id="prestasi">
    <img src="{{ asset("img/icons/circle-gradation-2.svg") }}" alt="Circle icon" class="circle position-absolute">
    <article class="container">
      @include("partials.section-header", ["title" => "Segudang Prestasi!"])
      <x-three-cards-carousel titles="{{$n}}"
        texts="{{$d}}"
        images="{{$f}}"
        carouselId="MainPrestasiCarousel" />
    </article>
  </section>

  <section class="overflow-hidden text-white d-flex justify-content-center align-items-center flex-column position-relative" id="fasilitas">
    <img src="{{ asset("img/icons/star.svg") }}" alt="Star icon" class="star position-absolute">
    <article class="container d-flex flex-column align-items-center position-relative">
      <img src="{{ asset("img/icons/ring-thin-cyan.svg") }}" alt="Ring icon" class="ring-thin-cyan position-absolute">
    <?php
    $nama = array();
    $deskripsi = array();
    $foto = array();
    foreach($fasilitas as $f){
      $nama[] = $f->judul;
      $deskripsi[] = $f->deskripsi;
      $foto[] = "../img/fasilitas/".$f->foto;
    }
    $n = join(',',$nama);
    $d = join('|',$deskripsi);
    $f = join(',',$foto);
  ?>
      <x-carousel-with-floating-header-and-button headerTitle="Fasilitas Apa Saja Yang Ada di ITS"
        titles="{{$n}}"
        texts="{{$d}}"
        buttonText="Kenali Lebih Lanjut"
        images="{{$f}}"
        routeTo="{{route('fasilitas')}}"
        />
      </div>
    </article>
  </section>

  {{-- <section class="text-white d-flex justify-content-center align-items-center flex-column" id="tim-its">
    <article class="container">
      @include('partials.section-header', ["title" => "Kenalan dengan Tim di ITS!"])
      <x-three-cards title1="Bayucaraka" title2="Ichiro" title3="Sapu Angin" img1="img/main/prestasi-1.png"
        img2="img/main/prestasi-2.png" img3="img/main/prestasi-3.png" :list1="array('Juara 1 Mobil terbang','
          Juara 2 Mobil terbang cepat','
          Juara 3 Mobil terbang stabil','
          Juara 4 Mobil terbang nasional')" :list2="array('Juara 1 Mobil terbang','
          Juara 2 Mobil terbang cepat','
          Juara 3 Mobil terbang stabil','
          Juara 4 Mobil terbang nasional')" :list3="array('Juara 1 Mobil terbang','
          Juara 2 Mobil terbang cepat','
          Juara 3 Mobil terbang stabil','
          Juara 4 Mobil terbang nasional')" />
      <x-button-link href="" class="mx-auto mt-4">Intip Tim Lainnya!</x-button-link>
    </article>
  </section> --}}

  <section class="overflow-hidden text-white d-flex justify-content-center align-items-center flex-column position-relative" id="alumni">
    <img src="{{ asset("img/icons/star.svg") }}" alt="Star icon" class="star position-absolute">
    <article class="container">
      @include('partials.section-header', ["title" => "Jadilah Penerus Mereka!"])
      <div class="container row">
        @foreach($alumni as $a)
        <div class="col-lg">
          <x-figure-image img="img/main/alumni-1.png" title="{{$a->nama}}" text="{{$a->deskripsi}}" />
        </div>
        @endforeach
      </div>
    </article>
  </section>

  <section class="overflow-hidden text-white d-flex justify-content-center align-items-center flex-column position-relative" id="beasiswa">
    <img src="{{ asset("img/icons/circle-gradation-2.svg") }}" alt="Circle icon" class="circle position-absolute">
    <img src="{{ asset("img/icons/star.svg") }}" alt="Star icon" class="star position-absolute">
    <article class="container">
      {{-- @include('partials.section-header', ["title" => "Pilihan Beasiswa Untukmu!"]) --}}
      @foreach($beasiswa as $b)
      <x-banner-with-corner-header title="{{$b->nama}}" image="img/main/banner.png" href="https://docs.google.com/spreadsheets/d/1Fn-sQoZr0_qxe2ZjRBD9Altse_ewDp--UVAughZo5Zk/edit#gid=0" />
      @endforeach
    </article>
  </section>

  <section class="overflow-hidden text-white d-flex justify-content-center align-items-center flex-column position-relative" id="sponsor">
    {{-- <img src="{{ asset("img/icons/ring-gradation.svg") }}" alt="Ring icon" class="ring position-absolute"> --}}
    <img src="{{ asset("img/icons/star.svg") }}" alt="Star icon" class="star position-absolute">
    <article class="container">
      @include('partials.section-header', ["title" => "Sponsor & Media Partner"])
      <div class="text-center">
        <img class="w-50 pb-5" src="{{asset('/img/sponsor/ln.png')}}" alt="Lulus Negeri">
        <img class="w-50 py-2" src="{{asset('/img/sponsor/blp.png')}}" alt="Bumi Lingga Pertiwi">
        <img class="w-50 pt-5" src="{{asset('/img/sponsor/pdams.jpg')}}" alt="PDAM Surya Sembada Surabaya">
      </div>
    </article>
  </section>
@endsection

@push('scripts')
  <script src="{{ asset('js/components/map.js') }}" defer></script>
  <script>
      function chooseFakultas(id) {
      $.ajax({
        url: '../choose-fakultas/'+id,
        type: 'GET',
        data: {},
        dataType: "JSON",
        success: function(res) {
          $('div#tombol-fakultas > a#fakultas-tombol').attr("href","../fakultas/"+res.slug);
          $('#fakultas-pilihan-image').attr("src","../img/fakultas/"+res.foto);
          $('#fakultas-pilihan-image').attr("alt",res.nama);
          $('#fakultas-pilihan-judul').text(res.nama);
          $('#fakultas-pilihan-deskripsi').text(res.deskripsi);
        },
        error: function(xhr, ajaxOptions, thrownError) {
          console.log(xhr.responseText);
        }
      });
    window.location.href = "https://inilho.its.ac.id/#fakultasPilihan";
    }
  </script>
@endpush
