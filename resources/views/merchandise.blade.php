@extends('layouts.app')

@section('title')
  <title>Ini Lho ITS! 2022</title>
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/pages/merchandise.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/components/button-link.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/two-side-carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/partials/section-header.css') }}">
@endsection

@section('content')
  <section id="jumbotron" class="d-flex align-items-center">
    <div class="container text-white d-flex justify-content-center justify-content-sm-between">
      <div class="d-flex flex-column justify-content-center">
        <h1 class="pb-2">Merchandise</h1>
        <h3 class="pb-3">Institut Teknologi Sepuluh Nopember</h3>
        <x-button-link href="#info-unik">Kenali Lebih Lanjut</x-button-link>
      </div>
      <img src="img/merchandise/jumbotron_merch.png" alt="Jumbtoron Icon" class="d-none d-xl-block img-fluid">
    </div>
  </section>

  <section class="body">
    <section id="merchandise-carousel">
      <div class="container text-white">
        <?php
          $nama = array();
          $gambar = array();
          $link = array();
          for($i=1;$i<=3;$i++){
              $nama[]= $merch[$i] -> nama;
              $gambar[] = "../img/merchandise/".$merch[$i] -> gambar;
              $link[] = $merch[$i] -> link;
          }
          $n = join(',',$nama);
          $g = join(',',$gambar);
        ?>
        <x-two-side-carousel titles="{{$n}}" texts="Cek marketplace ILITS 2022 buat dapetin merchandise yang kece! |Cek marketplace ILITS 2022 buat dapetin merchandise yang kece! |Cek marketplace ILITS 2022 buat dapetin merchandise yang kece!" images="{{ $g }}" ></x-two-side-carousel>
      </div>
    </section>
  
    <section id="catalog">
      <div class="container text-white">
        @include("partials.section-header", ["title" => "Katalog Kami!"])
        <div class="row">
        @foreach($merch as $m)
          <div class="col-sm-4 mb-3">
              <a href="{{$m->link}}"><img src="../img/merchandise/{{$m->gambar}}" alt="Merchandise" class="img-fluid mb-3"></a>
              <div class="text-col-product-merchandise mb-3">
                <a href="{{$m->link}}" style="text-decoration:none; color:white"><h4>{{$m->nama}}</h4>
                <h5>{{ $m->harga }}</h5></a>
              </div>
          </div>
        @endforeach
        </div>
    </section>
  </section>
@endsection
