@extends('template-dashboard.template-niceadmin')

@section('title')
    Siswa
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Data Siswa</h1>
    </div><!-- End Page Title -->

    <a href="{{ url('/siswa/create') }}" target="_blank" class="btn btn-sm btn-warning shadow-sm mb-3">Registrasi</a>
    <a href="{{ url('/siswa/1') }}" target="_blank" class="btn btn-sm btn-warning shadow-sm mb-3">Lihat</a>

    <section class="section">
        {{-- menampilkan data siswa --}}
        <div class="card p-3">
        </div>
    </section>
@endsection

