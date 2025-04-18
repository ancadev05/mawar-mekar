@extends('template-dashboard.template-niceadmin')

@section('title')
    Kader
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Daftar Kader</h1>
    </div>


    <section class="section">
        @if (Auth::guard('web')->user()->level_akun_id == 2)
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
        @endif

        <div class="card p-3">
            <div class="table-responsive">
                <table class="table table-sm table-striped table-hover nowrap datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>No. Regis</th>
                            <th>Nama Kader</th>
                            <th>Tingkatan</th>
                            <th>Cabang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($kader as $item)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>
                                    <a href="{{ url('storage/foto-pesilat/' . $item->foto_pesilat) }}" target="_blank" rel="noopener noreferrer">
                                        <img src="{{ url('storage/foto-pesilat/' . $item->foto_pesilat) }}" alt="no_image" srcset="" width="50px">
                                    </a>
                                </td>
                                <td>{{ $item->no_registrasi }}</td>
                                <td>{{ $item->nama_pesilat }}</td>
                                <td>{{ $item->tingkatan->tingkat }}</td>
                                <td>{{ $item->cabang->cabang }}</td>
                                <td>
                                    @if (Auth::guard('web')->user()->level_akun_id == 2)
                                        <a href="{{ url('/pesilat/' . $item->id . '/edit') }}" class="btn btn-sm btn-warning shadow-sm"><i class="bi bi-eye"></i></a>
                                        <form action="{{ url('pesilat/' . $item->id) }}" method="post" class="d-inline-block">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-sm btn-danger shadow-sm delete-btn" type="submit"
                                                data-bs-toggle="tooltip" data-bs-placment="top" title="Hapus"><i
                                                    class="bi bi-trash"></i></button>
                                        </form>
                                    @else
                                        -
                                    @endif
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

