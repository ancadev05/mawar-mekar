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

        <form action="{{ url('/pendaftaran-ukt') }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <input type="text" name="no_regis" class="form-control" placeholder="Masukkan no registrasi"
                    aria-describedby="button-addon2">
                <button type="submit" class="btn btn-outline-secondary" type="button" id="button-addon2">Cek</button>
            </div>
        </form>

        @if ($pesilat)
            @if ($status)
                <div class="alert alert-info">
                    Terdaftar sebagai peserta ujian!
                </div>
            @else
                <div class="alert alert-warning">
                    Belum terdaftar sebagai peserta ujian!
                </div>
            @endif
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <td>No. Registrasi</td>
                        <td>: {{ $pesilat->no_registrasi }}</td>
                        <td rowspan="5">
                            <img src="{{ url('storage/foto-pesilat/' . $pesilat->foto_pesilat) }}" alt="foto"
                                width="100px" class="mb-1">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>: {{ $pesilat->nama_pesilat }}</td>
                    </tr>
                    <tr>
                        <td>Tingkat</td>
                        <td>: {{ $pesilat->tingkatan->tingkat }}</td>
                    </tr>
                    <tr>
                        <td>Cabang</td>
                        <td>: {{ $pesilat->cabang->cabang }}</td>
                    </tr>
                    <tr>
                        <td>Unit</td>
                        <td>: {{ $pesilat->unit->unit }}</td>
                    </tr>
                </table>
            </div>

            @if ($status == false)
                <div class="d-flex justify-content-center">
                    <a href="{{ route('ikuti.ujian', $pesilat->id) }}" class="btn btn-warning">Ikuti Ujian</a>
                </div>
            @endif
        @endif

        @if (Session::has('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ Session::get('failed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <br>
                <a href="https://pimda.tapaksuci177gowa.or.id/registrasi" target="_blank">Lakukan registrasi</a>
            </div>
        @endif


    </div>
@endsection
