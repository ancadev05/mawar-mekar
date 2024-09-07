@extends('template-dashboard.template-tabler')

@section('title')
    Unit
@endsection

@section('datatables-css')
    {{-- datatables --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables/datatables.min.css') }}">
@endsection

@section('content')
    
     <!-- Page header -->
     <div class="page-header d-print-none mb-3">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        Unit Latihan
                    </h2>
                </div>
            </div>
        </div>
    </div>

    {{-- konten --}}
        <div class="card p-3">

            <form action="{{ url('/unit-import') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="file" class="form-label form-label-sm">File Excel</label>
                <div class="row mb-5">
                    <div class="col-4">
                        <input class="form-control form-control-sm @error('file') is-invalid @enderror" id="file"
                            name="file" type="file" required>
                        @error('file')
                            <small class="invalid-feedback"> {{ $message }} </small>
                        @enderror
                    </div>
                    <div class="col-1">
                        <button class="btn btn-sm btn-success shadow-sm" type="submit">Import</button>
                    </div>
                </div>
            </form>

            <div class="d-flex justify-content-end">
                <button class="btn btn-sm btn-primary shadow-sm mb-3" data-bs-toggle="modal" data-bs-target="#unit-create"><i class="fas fa-plus"></i> &nbsp Tambah Unit</button>
            </div>

            <div class="table-responsive">
                <table class="table table-sm table-striped table-hover" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Unit</th>
                            <th>Penanggung Jawab</th>
                            <th>Cabang</th>
                            <th>Alamat</th>
                            <th>Ket</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($units as $item)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $item->unit }}</td>
                                <td>{{ $item->penanggung_jawab }}</td>
                                <td>{{ $item->cabang->cabang }}</td>
                                <td>{{ $item->alamat }}</td>
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

        {{-- modal --}}
    <div class="modal modal-blur fade" id="unit-create" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Unit Latihan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('unit') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label" for="unit">Nama Unit Latihan</label>
                            <input class="form-control @error('unit') is-invalid @enderror" type="text"
                                name="unit" id="unit" value="{{ old('unit') }}" required>
                            @error('unit')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="alamat">Alamat</label>
                            <input class="form-control @error('alamat') is-invalid @enderror" type="text"
                                name="alamat" id="alamat" value="{{ old('alamat') }}" required>
                            @error('alamat')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="penanggung_jawab">Penanggung Jawab</label>
                            <input class="form-control @error('penanggung_jawab') is-invalid @enderror"
                                type="text" name="penanggung_jawab" id="penanggung_jawab" value="{{ old('penanggung_jawab') }}" required>
                            @error('penanggung_jawab')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="ket">Keterangan</label>
                            <input class="form-control @error('ket') is-invalid @enderror" type="text" name="ket"
                                id="ket" value="{{ old('ket') }}">
                            @error('ket')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- /modal --}}
@endsection

@section('datatables-js')
    {{-- datatables --}}
    <script src="{{ asset('assets/vendor/datatables/datatables.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        })
    </script>
@endsection
