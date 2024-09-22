<form action="" id="form" method="POST">
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
            <label class="form-label" for="penanggung_jawab">Penanggung Jawab</label>
            <input class="form-control @error('penanggung_jawab') is-invalid @enderror" type="text"
                name="penanggung_jawab" id="penanggung_jawab" value="{{ $unit->penanggung_jawab }}" required>

        </div>
        <div class="mb-3">
            <label class="form-label" for="ket">Keterangan</label>
            <input class="form-control @error('ket') is-invalid @enderror" type="text" name="ket" id="ket"
                value="{{ $unit->ket }}">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" onclick="update({{ $unit->id }})">Update</button>
    </div>
</form>
