@extends('template-dashboard.template-niceadmin')

@section('title')
    UKT
@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none mb-3">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        Jadwal UKT
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end mb-2">
        <button class="btn btn-sm btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#ukt-create"><i class="fas fa-plus"></i> &nbsp Tambah</button>
    </div>

    <div class="card p-3">
        <div class="table-responsive">
            <table class="table table-sm table-striped table-hover nowrap">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tempat</th>
                        <th>Alamat</th>
                        <th>Mulai</th>
                        <th>Akhir</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($ukt as $item)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item->tempat }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->tgl_awal }}</td>
                            <td>{{ $item->tgl_akhir }}</td>
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
    <div class="modal modal-blur fade" id="ukt-create" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Jadwal UKT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label" for="tempat">Tempat</label>
                            <input class="form-control @error('tempat') is-invalid @enderror" type="text"
                                name="tempat" id="tempat" value="{{ old('tempat') }}" required>
                            @error('tempat')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="alamat">Alamat</label>
                            <input class="form-control @error('alamat') is-invalid @enderror" type="text"
                                name="alamat" id="alamat" value="{{ old('alamat') }}">
                            @error('alamat')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="tgl_awal">Mulai</label>
                            <input class="form-control @error('tgl_awal') is-invalid @enderror"
                                type="date" name="tgl_awal" id="tgl_awal" value="{{ old('tgl_awal') }}">
                            @error('tgl_awal')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="tgl_akhir">Selesai</label>
                            <input class="form-control @error('tgl_akhir') is-invalid @enderror"
                                type="date" name="tgl_akhir" id="tgl_akhir" value="{{ old('tgl_akhir') }}">
                            @error('tgl_akhir')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="jenjang">Jenjang <span
                                    class="text-danger fw-bold">*</span></label>
                            <select class="form-select @error('jenjang') is-invalid @enderror" name="jenjang" id="jenjang"
                                required>
                                <option value="1" {{ old('jenjang') == '1' ? 'selected' : '' }}>Siswa
                                <option value="2" {{ old('jenjang') == '2' ? 'selected' : '' }}>Kader
                                <option value="3" {{ old('jenjang') == '3' ? 'selected' : '' }}>Pendekar
                            </select>
                            @error('jenjang')
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
