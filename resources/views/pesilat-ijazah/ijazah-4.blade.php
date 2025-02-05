@extends('template-dashboard.template-niceadmin')

@section('title')
    Ijazah
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Ujian Kenaikan Tingkat Siswa</h1>
    </div>

    <nav class="mb-3">
        <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/ijazah/1') }}">Siswa 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/ijazah/2') }}">Siswa 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/ijazah/3') }}">Siswa 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/ijazah/4') }}">Siswa 4</a>
            </li>
        </ul>
    </nav>

    <!-- Page body -->
    <section class="card p-3">
        <div class="text-center border-bottom border-black">
            <img src="{{ asset('assets/img/logo-ts.png') }}" alt="" width="100px" class="mb-3">
            <h5 class="m-0 fw-bold">Pimpinan Daerah 177</h5>
            <h5 class="m-0 fw-bold">Perguruan Seni Beladiri Indonesia</h5>
            <h5 class="m-0 fw-bold text-danger">TAPAK SUCI PUTERA MUHAMMADIYAH</h5>
            <h5 class="fw-bold">GOWA</h5>
        </div>

        <p class="mt-3 text-center">Menerangkan bahwa:</p>

        {{-- data pesilat --}}
        @php
            $nama = Auth::guard('pesilat')->user()->nama_pesilat;
            $tt = Auth::guard('pesilat')->user()->tempat_lahir;
            $tl = Auth::guard('pesilat')->user()->tgl_lahir;
        @endphp

        <table class="table table-sm mb-4">
            <tr>
                <td class="">Nama</td>
                <td class="fw-bold">: {{ $nama }}</td>
            </tr>
            <tr>
                <td class="">Tempat, Tanggal Lahir</td>
                <td class="fw-bold">: {{ $tt }}, {{ \Carbon\Carbon::parse($tl)->isoFormat('d MMMM Y') }}</td>
            </tr>
        </table>

        <div class="mb-3 text-center">
            <p>Telah mengikuti ujian kenaikan tingkat <b>SISWA DASAR</b> yang diselenggarakan pada tanggal <b>09 Februari
                    2024</b> s/d <b>11 Februari 2024</b> bertempat di <b>SMAN 4 Gowa</b> dan dinyatakan <b>LULUS</b>,
                sehingga kepadanya diberikan hak menduduki tingkat:</p>
            <h4 class="text-center fw-bold">== SISWA EMPAT ==</h4>
            <img src="{{ url('assets/img/tanda-tingkat/s4.png') }}" alt="foto" height="25px" class="mb-1">
        </div>

        <div class="table-responsive">
            <table class="table table-bordered border-black mb-3">
                <thead class="text-center">
                    <tr>
                        <th rowspan="2" class="align-middle">NO</th>
                        <th rowspan="2" class="align-middle">MATA UJIAN</th>
                        <th colspan="2">NILAI</th>
                    </tr>
                    <tr>
                        <th>DENGAN ANGKA</th>
                        <th>DENGAN HURUF</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Al-Islam dan Kemuhammadiyah-an</td>
                        <td class="text-center">75</td>
                        <td>Tujuh Puluh Lima</td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>Pengetahuan Organisasi</td>
                        <td class="text-center">75</td>
                        <td>Tujuh Puluh Lima</td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>Ilmu Pencak Silat</td>
                        <td class="text-center">75</td>
                        <td>Tujuh Puluh Lima</td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td>Kesehatan Olahraga</td>
                        <td class="text-center">75</td>
                        <td>Tujuh Puluh Lima</td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td>Pembinaan Fisik dan Mental</td>
                        <td class="text-center">75</td>
                        <td>Tujuh Puluh Lima</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- tanggal --}}
        <p class="text-end"><u>Gowa, 29 Januari 2024</u></p>

        <div class="text-center fw-bold">
            <p class="m-0 p-9">PIMPINAN DAERAH 177</p>
            <p class="m-0 p-9">Perguruan Seni Beladiri Indonesia</p>
            <p class="m-0 p-9">TAPAK SUCI PUTERA MUHAMMADIYAH</p>
            <p class="m-0 p-9">KABUPATEN GOWA</p>
        </div>

        <div class="d-flex justify-content-around">
            <div class="">
                <p class="text-center">Ketua</p>
                <img src="" alt="" width="100px">
                <div>
                    <p class="m-0"><u><b>Drs. Arifuddin Saeni, P.Ma.</b></u></p>
                    <p class="">NBTS. .......... , NBM. ..........</p>
                </div>
            </div>
            <div class="">
                <p class="text-center">Sekretaris</p>
                <img src="" alt="" width="100px">
                <div>
                    <p class="m-0"><u><b>Rusmanto, S.Pd., M.Pd., P.Ka.</b></u></p>
                    <p class="">NBTS. .......... , NBM. ..........</p>
                </div>
            </div>
        </div>
    </section>
@endsection
