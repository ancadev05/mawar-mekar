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



        <div class="card p-3 mb-3">
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Jenjang</th>
                            <th>L</th>
                            <th>P</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesilat_total->groupBy('jenjang') as $jenjang => $data_jenjang)
                            <tr>
                                <td>
                                    {{ $jenjang == 3 ? 'Pendekar' : '' }}
                                    {{ $jenjang == 2 ? 'Kader' : '' }}
                                    {{ $jenjang == 1 ? 'Siswa' : '' }}
                                </td>
                                @foreach ($data_jenjang as $item)
                                    <td>{{ $item->jk . ' : ' . $item->total }}</td>
                                    @php
                                        $total[] = $item->total;
                                    @endphp
                                    <td>{{ array_sum($total) }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card p-3 mb-3">
            <h5 class="text-bg-dark text-center p-2">Pendekar</h5>
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Tingkat</th>
                            <th>L</th>
                            <th>P</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kader</td>
                            <td>20</td>
                            <td>20</td>
                            <td>20</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card p-3 mb-3">
            <h5 class="text-bg-primary text-center p-2">Kader</h5>
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Tingkat</th>
                            <th>L</th>
                            <th>P</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kader</td>
                            <td>20</td>
                            <td>20</td>
                            <td>20</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card p-3 mb-3">
            <h5 class="text-bg-warning text-center p-2">Siswa</h5>
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Tingkat</th>
                            <th>L</th>
                            <th>P</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Siswa 4</td>
                            <td>20</td>
                            <td>20</td>
                            <td>20</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
