@extends('template-dashboard.template-niceadmin')

@section('title')
    Home
@endsection


@section('content')
    <div class="pagetitle">
        @if (Auth::guard('web')->check())
            <h1>Selamat datang, {{ Auth::guard('web')->user()->name }}</h1>
            <span>(Cabang {{Auth::guard('web')->user()->cabang->no_cabang . ' ' . Auth::guard('web')->user()->cabang->cabang }})</span>
        @else
            <h1>Selamat datang, {{ Auth::guard('pesilat')->user()->nama_pesilat }}</h1>
        @endif
    </div>

    {{-- konten --}}
    <section class="section dashboard">

    </section>
@endsection
