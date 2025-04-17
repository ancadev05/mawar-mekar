@extends('template-dashboard.template-niceadmin')

@section('title')
    Id Card
@endsection

@section('content')
    <section class="section">
        <a href="{{ url('/cetak-idcard') }}" class="btn btn-sm btn-primary mb-3" target="_blank">Cetak Idcard</a>
        <div class="d-flex flex-wrap">
            @foreach ($idcard as $item)
                <div style="width: 10.2cm; height: 6.5cm;" class="me-2">
                    <table class="table">
                        <tr>
                            <td>No. Peserta</td>
                            <td>: {{ $item->id }}</td>
                            <td rowspan="5">
                                <img src="{{ url('storage/foto-pesilat/' . $item->pesilat->foto_pesilat) }}" alt=""
                                    width="200px">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Peserta</td>
                            <td>: {{ $item->pesilat->nama_pesilat }}</td>
                        </tr>
                        <tr>
                            <td>Cabang</td>
                            <td>: {{ $item->pesilat->cabang->cabang }}</td>
                        </tr>
                        <tr>
                            <td>Tingkat</td>
                            <td>: {{ $item->pesilat->tingkatan->tingkat }}</td>
                        </tr>
                        <tr>
                            <td>Kelompok</td>
                            <td>: </td>
                        </tr>
                    </table>
                </div>
            @endforeach
        </div>

    </section>
@endsection
