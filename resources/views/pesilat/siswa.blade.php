@extends('template-dashboard.template-niceadmin')

@section('title')
    Siswa
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Data Siswa</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card p-3 mb-3">
            <form action="{{ url('/pesilat-import') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="file" class="form-label form-label-sm">File Excel</label>
                <div class="row">
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
        </div>

        <div class="card p-3">
            <div class="table-responsive">
                <table class="table table-sm table-striped table-hover nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No. Regis</th>
                            <th>Nama Siswa</th>
                            <th>Tingkatan</th>
                            <th>Cabang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($pesilats as $item)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $item->no_registrasi }}</td>
                                <td>{{ $item->nama_pesilat }}</td>
                                <td>{{ $item->tingkatan->tingkat }}</td>
                                <td>{{ $item->cabang->cabang }}</td>
                                <td>
                                    <button class="btn btn-sm btn-warning shadow-sm">Edit</button>
                                    <button class="btn btn-sm btn-danger shadow-sm">Hapus</button>
                                </td>
                            </tr>
                            @php
                                $i++
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

