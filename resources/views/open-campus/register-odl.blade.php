@extends('open-campus.main')

@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/open-campus/register-fnd.css') }}">
@endsection

@section('open-campus-content')
  <!-- header section start -->
  <header class="content d-flex text-center justify-content-center align-items-center">
      <div class="container">
          <div class="row">
              <div class="col">
                  <h1 class="content-title">One Day<br>Lecture</h1>
              </div>
          </div>
          <div class="row my-3">
              <div class="col">
                  <h5 class="content-text">Rasakan Pengalaman Berkuliah Langsung di ITS!</h5>
              </div>
          </div>
          <div class="row my-4">
              <div class="col">
                  <a href="{{ route('open-campus.odl.register-form') }}" class="btn-content"> Daftar Sekarang! </a>
              </div>
          </div>
      </div>
  </header>
  <!-- header end -->
@endsection

