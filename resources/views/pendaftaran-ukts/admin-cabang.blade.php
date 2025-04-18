@extends('template-dashboard.template-niceadmin')

@section('title')
    Peserta UKT
@endsection

@section('content')
    {{-- <div class="pagetitle">
        <h1>Dashboard</h1>
    </div> --}}


    <section class="section">

        <div class="card">
            <div class="card-header">Pendaftar</div>
            <div class="card-body">
                <h2>Total Pendaftar : {{ $total_pendaftar }}</h2>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Peserta UKT</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Tingkat</th>
                                <th>Laki-laki</th>
                                <th>Perempuan</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Siswa 4</td>
                                <td>{{ $mc4_l }}</td>
                                <td>{{ $mc4_p }}</td>
                                <td>{{ $mc4_jml }}</td>
                            </tr>
                            <tr>
                                <td>Siswa 3</td>
                                <td>{{ $mc3_l }}</td>
                                <td>{{ $mc3_p }}</td>
                                <td>{{ $mc3_jml }}</td>
                            </tr>
                            <tr>
                                <td>Siswa 2</td>
                                <td>{{ $mc2_l }}</td>
                                <td>{{ $mc2_p }}</td>
                                <td>{{ $mc2_jml }}</td>
                            </tr>
                            <tr>
                                <td>Siswa 1</td>
                                <td>{{ $mc1_l }}</td>
                                <td>{{ $mc1_p }}</td>
                                <td>{{ $mc1_jml }}</td>
                            </tr>
                            <tr>
                                <td>Siswa Dasar</td>
                                <td>{{ $mc_dasar_l }}</td>
                                <td>{{ $mc_dasar_p }}</td>
                                <td>{{ $mc_dasar_jml }}</td>
                            </tr>
                            <tr class="fw-bold">
                                <td>Total</td>
                                <td>{{ $mc_dasar_l + $mc1_l + $mc2_l + $mc3_l + $mc4_l }}</td>
                                <td>{{ $mc_dasar_p + $mc1_p + $mc2_p + $mc3_p + $mc4_p }}</td>
                                <td>{{ $mc_dasar_jml + $mc1_jml + $mc2_jml + $mc3_jml + $mc4_jml }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                Siswa Percabang
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-striped">
                        <thead>
                            <tr>
                                <th>Cabang</th>
                                <th>Jumlah Siswa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa_cabang as $item)
                                <tr>
                                    <td>{{ $item->cabang->cabang }}</td>
                                    <td>{{ $item->total }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

