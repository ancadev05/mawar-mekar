@extends('template-dashboard.template-blank')

@section('title')
    Pendaftaran UKTS
@endsection

@section('content')
    <div class="container">
        <div class="text-center pt-3">
            <h3>Pimda 177 Kabupaten Gowa</h3>
            <h3>Pendaftaran Ujian Kenaikan Tingkat Siswa</h3>
            <h3>Bissoloro, 18 - 20 April 2025</h3=>
                <hr>
        </div>

        @if ($peserta)
            <div class="alert alert-success">
                Anda sudah terdaftar sebagai peserta ujian!
            </div>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <td>No. Registrasi</td>
                        <td>: {{ $peserta->no_registrasi }}</td>
                        <td rowspan="5">
                            <img src="{{ url('storage/foto-pesilat/' . $peserta->foto_pesilat) }}" alt="foto"
                                width="100px" class="mb-1">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>: {{ $peserta->nama_pesilat }}</td>
                    </tr>
                    <tr>
                        <td>Tingkat</td>
                        <td>: {{ $peserta->tingkatan->tingkat }}</td>
                    </tr>
                    <tr>
                        <td>Cabang</td>
                        <td>: {{ $peserta->cabang->cabang }}</td>
                    </tr>
                    <tr>
                        <td>Unit</td>
                        <td>: {{ $peserta->unit->unit }}</td>
                    </tr>
                </table>
            </div>

            <div class="d-flex justify-content-center">
                <a href="{{ route('pendaftaran.ukt') }}" class="btn btn-danger">Kembali</a>
            </div>
        @endif




    </div>
@endsection
