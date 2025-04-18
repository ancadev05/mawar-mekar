@extends('template-dashboard.template-blank')

@section('title')
    Soal UKTS
@endsection

@section('content')
    <div class="container">

        <h3 class="text-center mt-2 mb-4">SILAHKAN PILIH SOAL SESAUI TINGKATAN</h3>

        <div class="d-flex flex-column align-items-center">
            <a href="https://forms.gle/s21vUTPp6gQDXdRJ7" class="btn btn-warning mb-3">Soal Tingkat Siswa Dasar</a>
            <a href="https://forms.gle/xT7sSinmPv3K7ZuW6" class="btn btn-warning mb-3">Soal Tingkat Siswa Satu</a>
            <a href="https://forms.gle/DEUKNGHATL14t33r8" class="btn btn-warning mb-3">Soal Tingkat Siswa Dua</a>
            <a href="https://forms.gle/DqKaAPRjTMQFHNe7A" class="btn btn-warning mb-3">Soal Tingkat Siswa Tiga</a>
            <a href="#" class="btn btn-warning mb-3">Soal Tingkat Siswa Empat</a>
        </div>

    </div>
@endsection
