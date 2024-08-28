@extends('template-dashboard.template-niceadmin')

@section('title')
    Unit
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Unit Latihan</h1>
    </div><!-- End Page Title -->

    <section class="section">
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

            <div class="table-responsive">
                <table class="table table-sm table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Unit</th>
                            <th>Penanggung Jawab</th>
                            <th>Cabang</th>
                            <th>Alamat</th>
                            <th>Ket</th>
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
                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
