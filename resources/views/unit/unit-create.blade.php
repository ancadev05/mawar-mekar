
 {{-- select2 --}}
 {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/select2-4.1.0/css/select2.min.css') }}" rel="stylesheet"> --}}

<form action="" id="form" method="POST">
    @csrf
    <div class="modal-body">
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
            {{-- <div class="input-group"> --}}
                <select class="form-select multiple-select" name="penanggung_jawab[]" id="pananggung_jawab" multiple="multiple">
                    <option value="">...</option>
                    @foreach ($kaders as $item)
                        <option value="{{ $item->nama_pesilat . ', ' . $item->tingkatan->singkatan }}">
                            {{ $item->nama_pesilat . ', ' . $item->tingkatan->singkatan }}</option>
                    @endforeach
                </select>
                {{-- <button type="button" class="btn btn-sm btn-primary shadow-sm tambah-penanggung-jawab"><i class="bi bi-plus-lg"></i></button> --}}
            {{-- </div> --}}
        </div>
        <div class="mb-3">
            <label class="form-label" for="ket">Keterangan</label>
            <input class="form-control @error('ket') is-invalid @enderror" type="text" name="ket" id="ket"
                value="{{ old('ket') }}">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" onclick="store()">Save changes</button>
    </div>
</form>

 {{-- select2 --}}
 {{-- <script src="{{ asset('assets/vendor/select2-4.1.0/js/select2.min.js') }}"></script> --}}
<script>
     $(document).ready(function() {
            

            $('.multiple-select').select2();
        })
</script>