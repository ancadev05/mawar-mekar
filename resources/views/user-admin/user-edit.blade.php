<form action="" id="form" method="POST">
    @csrf
    @method('put')
    <div class="modal-body">
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label class="form-label" for="name">Nama</label>
                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ $user->name }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="username">Username</label>
                    <input class="form-control @error('username') is-invalid @enderror" type="text" name="username"
                        id="username" value="{{ $user->username }}" disabled>
                    <div class="invalid-feedback">Masukkan nama unit latihan</div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control @error('password') is-invalid @enderror" type="text" name="password"
                        id="password" value="{{ $user->password }}" required>
                    <div class="invalid-feedback">Masukkan nama unit latihan</div>
                </div>
                
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label class="form-label" for="level_akun_id">Level</label>
                    <select class="form-select @error('level_akun_id') is-invalid @enderror select2" name="level_akun_id" id="level_akun_id"
                        required>
                        <option value="" selected>...</option>
                        @foreach ($level_akun as $item)
                            <option value="{{ $item->id }}" {{ $user->level_akun_id == $item->id ? 'selected' : '' }}>
                                {{ $item->level }}</option>
                        @endforeach
                    </select>
        
                </div>
                <div class="mb-3">
                    <label class="form-label" for="cabang_id">Cabang</label>
                    <select class="form-select @error('cabang_id') is-invalid @enderror select2" name="cabang_id" id="cabang_id"
                        required>
                        <option value="" selected>...</option>
                        @foreach ($cabangs as $item)
                            <option value="{{ $item->id }}" {{ $user->cabang_id == $item->id ? 'selected' : '' }}>
                                {{ $item->cabang }}</option>
                        @endforeach
                    </select>
        
                </div>
                <div class="mb-3">
                    <label class="form-label" for="ket">Keterangan</label>
                    <input class="form-control @error('ket') is-invalid @enderror" type="text" name="ket" id="ket"
                        value="{{ $user->ket }}">
                </div>
            </div>
        </div>
        
        
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-sm shadow-sm btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-sm shadow-sm btn-primary" onclick="store()">Save changes</button>
    </div>
</form>
