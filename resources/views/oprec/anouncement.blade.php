<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Pengumuman Anggota Baru Eskalator Cita</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/oprec/oprec-anouncement.css') }}">
</head>

<body>
    <main class="vw-100 vh-100">
        <div class="container-fluid d-flex flex-column justify-content-center align-items-center">
            <div class="container d-flex flex-column">
                <h1 class="status">
                    {{$is_staff ? 'SELAMAT!' : 'MAAF ANDA BELUM LOLOS'}}
                </h1>
                <div class="detail my-4">
                    <div class="mb-3 staff-info">
                        <p>{{ $data ->nama}}</p>
                        <p>{{ $data ->nrp}}</p>
                    </div>
                    <h4 class="helper">
                        {{$is_staff ? 'KAMU MENJADI BAGIAN DARI ESKALATOR CITA' : 'TERIMA KASIH TELAH BERJUANG DAN TETAP SEMANGAT!!'}}
                    </h4>
                </div>
                @if ( $is_staff)
                    <div>
                        <p class="challenge">Yuk cek tantangan pertamamu <button type="button" href="#"
                                class="badge badge-info border-0" data-toggle="modal" data-target="#modal-challenge">di
                                sini</button>
                        </p>
                    </div>
                @endif
            </div>
        </div>

        @if ( $is_staff)
        <div class="modal fade" id="modal-challenge" tabindex="-1" aria-labelledby="modal-challenge-label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-challenge-label">EC's Missions</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <ol type="1">
                                <li class="text-justify">Temukan teman satu divisi/subdivisimu dengan cara:
                                    <ol type="a">
                                        <li>Cari dan like jawaban tebak-tebakan di bawah ini pada kolom komentar postingan Pengumuman Staf Terpilih di Instagram Ini Lho ITS! 2022.</li>
                                        <li>Lihat siapa saja orang yang like jawaban tersebut, maka itu teman satu divisi/subdivisimu</li>
                                        <li>Berikut pertanyaannya: {{ $data->pertanyaan }}</li>
                                    </ol>
                                </li>
                                <li class="text-justify">Setelah menemukan teman satu divisi/subdivisi, ajak zoom bareng, foto bareng, dan bikin
                                    postingan Instagram Feeds se kreatif mungkin tag @inilhoits @kadiv/@kasubdiv (orang yg memberi
                                    jawaban di kolom komentar). Caption bebas, yang penting menyertakan kalimat ???Aku
                                    emang
                                    #EskalatorCitaKeren??? atau ???I???m officially an #EskalatorCitaKeren???. Batas waktunya
                                    sampai
                                    22 September 2021 pukul 18:00 WIB. Postingan paling kreatif akan mendapatkan award
                                    di
                                    Welcome Party Eskalator Cita.</li>
                                <li class="text-justify">Membuat Video Persembahan dengan konten minimal berisi perkenalan masing-masing staf. Video ini akan ditayangkan di Welcome Party Eskalator Cita</li>
                                <li class="text-justify">Datang ke ????Welcome Party Eskalator Cita???? pada hari Kamis, 23 September 2021 pukul
                                    19:00 WIB. Please be on time and use the Virtual Background! ????
                                    <a href="https://intip.in/VGBWelparILITS22"
                                        target="_blank">https://intip.in/VGBWelparILITS22</a>
                                </li>
                            </ol>
                            <div class="px-3 text-right">
                                <a href="{{ route('zoomwp') }}" target="_blank" class="badge badge-info p-2">Link
                                    zoom</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </main>
    <script type="text/javascript">
        ["load", "resize"].forEach((e) => {
        window.addEventListener(e, () => {
            if (document.body.clientWidth > 576) {
                document.getElementsByTagName("main")[0].style.backgroundImage = {{ $is_staff }} ? "url('/images/oprec/bg-anouncement-success.png')" : "url('/images/oprec/bg-anouncement-fail.png')";
            } else {
                document.getElementsByTagName("main")[0].style.backgroundImage = {{ $is_staff }} ? "url('/images/oprec/bg-anouncement-success-mobile.png')" : "url('/images/oprec/bg-anouncement-fail-mobile.png')";
            }
        });
    });
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>