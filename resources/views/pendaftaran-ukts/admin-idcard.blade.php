@extends('template-dashboard.template-niceadmin')

@section('title')
    Id Card
@endsection

@section('content')
    <section class="section">
        <a href="{{ url('/cetak-idcard') }}" class="btn btn-sm btn-primary mb-3" target="_blank">Cetak Idcard</a>
        <div class="d-flex flex-wrap">
            @foreach ($idcard as $item)
                <div style="width: 9cm; height: 6.5cm; font-size: 14px;" class="me-3 mb-3 px-2 border d-flex justify-content-center align-items-center">
                    <table class="w-100 me-3">
                        <tr>
                            <td>No. Peserta</td>
                            <td>: {{ $item->id }}</td>
                            <td rowspan="5">
                                <img src="{{ url('storage/foto-pesilat/' . $item->pesilat->foto_pesilat) }}" alt="" style="width: 2cm">
                                {{-- <img src="{{ url('foto.jpg') }}" alt="" style="width: 3cm"> --}}
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
