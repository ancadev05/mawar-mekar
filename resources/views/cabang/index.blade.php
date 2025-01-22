@extends('template-dashboard.template-niceadmin')

@section('title')
    Cabang
@endsection

@section('content')
     <!-- Page header -->
     <div class="pagetitle">
        <h1>Cabang</h1>
    </div>

    <div class="d-flex justify-content-end mb-2">
        <a href="{{ url('/cabang/create') }}" class="btn btn-sm btn-primary shadow-sm"><i class="bi bi-plus-lg"></i> Tambah</a>
    </div>

    <div class="card p-3">
        <div class="table-responsive">
            <table class="table table-sm table-striped table-hover nowrap datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Cabang</th>
                        <th>No. Cabang</th>
                        <th>Pengurus</th>
                        <th>Ket</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($cabangs as $item)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item->cabang }}</td>
                            <td>{{ $item->no_cabang }}</td>
                            <td>{{ $item->pengurus }}</td>
                            <td>{{ $item->ket }}</td>
                            <td>
                                <button class="btn btn-sm btn-warning shadow-sm"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-sm btn-danger shadow-sm"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
