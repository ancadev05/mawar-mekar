@extends('template-dashboard.template-niceadmin')

@section('title')
    Edit Unit
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Edit Unit Latihan</h1>
    </div>
    <form action="{{ url('/unit/' . $unit->id) }}" id="form" method="POST">
        @csrf
        @method('put')
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label" for="cabang_id">Cabang</label>
                <input class="form-control @error('cabang_id') is-invalid @enderror" type="text" name="cabang_id"
                    id="cabang_id" value="{{ $unit->cabang->cabang }}" disabled>
            </div>
            <div class="mb-3">
                <label class="form-label" for="unit">Nama Unit Latihan</label>
                <input class="form-control @error('unit') is-invalid @enderror" type="text" name="unit" id="unit"
                    value="{{ $unit->unit }}" required>
                <div class="invalid-feedback">Masukkan nama unit latihan</div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="alamat">Alamat</label>
                <input class="form-control @error('alamat') is-invalid @enderror" type="text" name="alamat"
                    id="alamat" value="{{ $unit->alamat }}" required>

            </div>
            <div class="mb-3">
                <input type="text" name="pelatih_lama" value="{{ $unit->penanggung_jawab }}" class="form-control">
            </div>
            <div class="mb-3">
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
                    value="{{ $unit->ket }}">
            </div>
        </div>
        <div class="modal-footer">
            <a href="{{ url('/unit') }}" class="btn btn-sm btn-secondary shadown-sm me-2">Kembali</a>
            <button type="submit" class="btn btn-sm btn-primary shadown-sm">Update</button>
        </div>
    </form>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('.multiple-select').select2();
    })
</script>
@endsection
