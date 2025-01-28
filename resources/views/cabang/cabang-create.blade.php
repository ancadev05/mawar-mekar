@extends('template-dashboard.template-niceadmin')

@section('title')
    Cabang
@endsection

@section('content')
<!-- Page header -->
    <div class="pagetitle">
        <h1>Tambah Cabang</h1>
    </div>

    <section class="card p-3">
        <form action="">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="no_cabang">No Cabang <span class="text-danger fw-bold">*</span></label>
            <input class="form-control @error('no_cabang') is-invalid @enderror" type="number" name="no_cabang"
                id="no_cabang" value="{{ old('no_cabang') }}" required>
            @error('no_cabang')
                <small class="invalid-feedback"> {{ $message }} </small>
                @enderror
            </div>
        <div class="mb-3">
            <label class="form-label" for="cabang">Cabang <span class="text-danger fw-bold">*</span></label>
            <input class="form-control @error('cabang') is-invalid @enderror" type="text" name="cabang"
                id="cabang" value="{{ old('cabang') }}" required>
            @error('cabang')
                <small class="invalid-feedback"> {{ $message }} </small>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="alamat">Alamat</label>
            <input class="form-control @error('alamat') is-invalid @enderror" type="text" name="alamat"
            id="alamat" value="{{ old('alamat') }}" required>
            @error('alamat')
                <small class="invalid-feedback"> {{ $message }} </small>
                @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="pengurus">Pengurus</label>
            <input class="form-control @error('pengurus') is-invalid @enderror" type="text" name="pengurus"
            id="pengurus" value="{{ old('pengurus') }}" required>
            @error('pengurus')
            <small class="invalid-feedback"> {{ $message }} </small>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="ket">Ket</label>
            <input class="form-control @error('ket') is-invalid @enderror" type="text" name="ket"
            id="ket" value="{{ old('ket') }}" required>
            @error('ket')
            <small class="invalid-feedback"> {{ $message }} </small>
            @enderror
        </div>
        <a href="{{ url('/cabang') }}" class="btn btn-sm btn-danger" type="submit">Batal</a>
        <button class="btn btn-sm btn-primary" type="submit">Submit</button>
    </form>
    </section>
@endsection
