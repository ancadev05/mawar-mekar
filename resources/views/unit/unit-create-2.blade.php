@extends('template-dashboard.template-niceadmin')

@section('title')
    Tambah Unit
@endsection

@section('content')
<div class="pagetitle">
    <h1>Tambah Unit Latihan</h1>
</div>    

<div class="card p-3">
    <form action="{{ url('/unit') }}" method="POST">
        @csrf
            <div class="mb-3">
                <label class="form-label" for="cabang_id">Cabang</label>
                <input class="form-control @error('cabang_id') is-invalid @enderror" type="text" name="cabang_id"
                    id="cabang_id" value="{{ $cabang }}" disabled>
            </div>
            <div class="mb-3">
                <label class="form-label" for="unit">Nama Unit Latihan</label>
                <input class="form-control @error('unit') is-invalid @enderror" type="text" name="unit" id="unit"
                    value="{{ old('unit') }}" required>
                <div class="invalid-feedback">Masukkan nama unit latihan</div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="alamat">Alamat</label>
                <input class="form-control @error('alamat') is-invalid @enderror" type="text" name="alamat"
                    id="alamat" value="{{ old('alamat') }}" required>
    
            </div>
            <div class="mb-3 penanggung_jawab">
                <label class="form-label" for="penanggung_jawab">Penanggung Jawab</label>
                <select class="form-select multiple-select" name="penanggung_jawab[]" id="pananggung_jawab"
                    multiple="multiple">
                    <option value="">...</option>
                    @foreach ($kaders as $item)
                        <option value="{{ $item->nama_pesilat . ', ' . $item->tingkatan->singkatan }}">
                            {{ $item->nama_pesilat . ', ' . $item->tingkatan->singkatan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="ket">Keterangan</label>
                <input class="form-control @error('ket') is-invalid @enderror" type="text" name="ket" id="ket"
                    value="{{ old('ket') }}">
            </div>
        <div class="modal-footer">
            <a href="{{ url('/unit') }}" class="btn btn-sm btn-secondary shadow-sm me-2">Batal</a>
            <button type="submit" class="btn btn-sm btn-primary shadow-sm">Simpan</button>
        </div>
    </form>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('.multiple-select').select2();
    })
</script>
@endsection


