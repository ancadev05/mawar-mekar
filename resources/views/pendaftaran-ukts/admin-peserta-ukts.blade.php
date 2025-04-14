@extends('template-dashboard.template-niceadmin')

@section('title')
    Peserta
@endsection

@section('content')
    {{-- <div class="pagetitle">
        <h1>Dashboard</h1>
    </div> --}}


    <section class="section">

        <div class="card">
            <div class="card-header">Peserta UKT</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm datatable" >
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tingkat</th>
                                <th>Cabang</th>
                                <th>Dibayarkan</th>
                                <th>Status <br> Pembayaran</th>
                                <th>Ket</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peserta as $index => $item)
                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td>{{ $item->pesilat->nama_pesilat }}</td>
                                    <td>{{ $item->pesilat->tingkatan->tingkat }}</td>
                                    <td>{{ $item->pesilat->cabang->cabang }}</td>
                                    <td class="text-end">{{ format_uang($item->pembayaran) }}</td>
                                    <td>{{ $item->status_pembayaran }}</td>
                                    <td>{{ $item->ket }}</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

