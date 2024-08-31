@extends('template-dashboard.template-adminkit')

@section('title')
    Cabang
@endsection

@section('content')
    <h1 class="h3 mb-3"><strong>Cabang</strong></h1>

    <div class="card p-3">
        <div class="table-responsive">
            <table class="table table-sm table-striped table-hover nowrap">
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
                                <button class="btn btn-sm btn-warning shadow-sm"><i class="far fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger shadow-sm"><i class="far fa-trash-alt"></i></button>
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
