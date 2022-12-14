<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta section start -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Ini Lho ITS 2020 adalah sebuah event yang membantu calon mahasiswa baru ITS menemukan jurusan yang sesuai minat & bakat yang dimiliki nya. Inilho ITS Memiliki serangkaian event yang terdiri dari: talkshow inspiratif, open campus, welcome, dan lainnya!">
    <meta name="keywords"
        content="ITS, Institut Teknologi Sepuluh Nopember, ILITS, Ini Lho ITS!, ILITS 2022, Ini Lho ITS! 2022">
    <!-- title section start -->
    <title>Pengumuman Anggota Baru Eskalator Cita</title>
    <!-- link section start -->
    <link rel="icon" href="{{ asset('ilits22.ico') }}">
    <link rel="stylesheet" href="{{asset('css/oprec/search/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/oprec/search/bootstrap.min.css')}}">
</head>

<body>
    <div class="content">
        <div class="title">
            <h1>Apakah kalian bagian<br> dari Staff <span>INI LHO ITS! 2022</span> ?</h1>
        </div>
        <form action="{{route('oprec.announcement')}}" method="POST">
            @csrf
            <div class="input-group input-custom">
                <input type="text" id="input" class="form-control form-control-lg" name="nrp"
                    placeholder="Masukkan NRP...">
                <div class="input-group-prepend" title="Cari!">
                    <button class="btn rounded-circle" type="submit"><img
                            src="{{asset('img/form-search/arrow-right.png')}}" alt="arrow-right"></button>
                </div>
            </div>
        </form>
        <div>
            @if(Session::has('message'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('message') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>