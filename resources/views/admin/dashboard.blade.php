@extends('template-dashboard.template-tabler')

@section('title')
    Home
@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        Home
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <section class="section">

        <div class="card p-3">
            @if (Auth::guard('web')->check())
                <h1>Hallo, {{ Auth::guard('web')->user()->name }}</h1>
            @elseif (Auth::guard('pesilat')->check())
                <h1>Hallo, {{ Auth::guard('pesilat')->user()->nama_pesilat }}</h1>
            @endif
        </div>


    </section>
@endsection
