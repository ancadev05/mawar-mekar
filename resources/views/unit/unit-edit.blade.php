@extends('template-dashboard.template-tabler')

@section('title')
    Unit
@endsection

@section('content')
    
     <!-- Page header -->
     <div class="page-header d-print-none mb-3">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        Edit Unit Latihan
                    </h2>
                </div>
            </div>
        </div>
    </div>

<div class="card p-3 w-md-50 w-sm-100">
    <form action="{{ url('unit/' . $unit->id) }}" method="post">
        @csrf
        @method('put')
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label" for="cabang_id">Cabang</label>
                <input class="form-control @error('cabang_id') is-invalid @enderror" type="text"
                    name="cabang_id" id="cabang_id" value="{{ $unit->cabang->cabang }}" disabled>
            </div>
            <div class="mb-3">
                <label class="form-label" for="unit">Nama Unit Latihan</label>
                <input class="form-control @error('unit') is-invalid @enderror" type="text"
                    name="unit" id="unit" value="{{ $unit->unit }}" required>
                <div class="invalid-feedback">Masukkan nama unit latihan</div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="alamat">Alamat</label>
                <input class="form-control @error('alamat') is-invalid @enderror" type="text"
                    name="alamat" id="alamat" value="{{ $unit->alamat }}" required>
                @error('alamat')
                    <small class="invalid-feedback"> {{ $message }} </small>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="penanggung_jawab">Penanggung Jawab</label>
                <input class="form-control @error('penanggung_jawab') is-invalid @enderror"
                    type="text" name="penanggung_jawab" id="penanggung_jawab" value="{{ $unit->penanggung_jawab }}" required>
                @error('penanggung_jawab')
                    <small class="invalid-feedback"> {{ $message }} </small>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="ket">Keterangan</label>
                <input class="form-control @error('ket') is-invalid @enderror" type="text" name="ket"
                    id="ket" value="{{ $unit->ket }}">
                @error('ket')
                    <small class="invalid-feedback"> {{ $message }} </small>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-end">
             <button type="button" class="btn btn-sm btn-danger shadow-sm me-2" onclick="history.back()">Back</button>
            <button type="submit" class="btn btn-sm shadow-sm btn-primary">Save changes</button>
        </div>
    </form>
</div>

@endsection

