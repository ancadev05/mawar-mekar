@extends('template-dashboard.template-niceadmin')

@section('title')
    Home
@endsection


@section('content')
    <div class="pagetitle">
        @if (Auth::guard('web')->check())
            <h1>Selamat datang, {{ Auth::guard('web')->user()->name }}</h1>
            <span>(Cabang
                {{ Auth::guard('web')->user()->cabang->no_cabang . ' ' . Auth::guard('web')->user()->cabang->cabang }})</span>
        @else
            <h1>Selamat datang, {{ Auth::guard('pesilat')->user()->nama_pesilat }}</h1>
        @endif
    </div>

    {{-- konten --}}
    <section class="section dashboard">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($pesilat_jenjang as $item)
                <div class="col">
                    <div
                        class="card p-3 
                {{ $item->jenjang == 3 ? 'text-bg-dark' : '' }}
                {{ $item->jenjang == 2 ? 'text-bg-primary' : '' }}
                {{ $item->jenjang == 1 ? 'text-bg-warning' : '' }}
            ">

                        <h3>
                            {{ $item->jenjang == 3 ? 'Pendekar' : '' }}
                            {{ $item->jenjang == 2 ? 'Kader' : '' }}
                            {{ $item->jenjang == 1 ? 'Siswa' : '' }}
                        </h3>

                        @php
                            $l = $pesilat_total
                                ->where('jenjang', $item->jenjang)
                                ->where('jk', 'L')
                                ->first();
                            $p = $pesilat_total
                                ->where('jenjang', $item->jenjang)
                                ->where('jk', 'P')
                                ->first();
                        @endphp

                        <h6>L : {{ $l ? $l->total : 0 }}</h6>
                        <h6>P : {{ $p ? $p->total : 0 }}</h6>
                        <h5>Total : {{ $item->total }}</h5>

                    </div>
                </div>
            @endforeach
        </div>



        
    </section>
@endsection
