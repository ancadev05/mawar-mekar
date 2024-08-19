<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap5/css/bootstrap.min.css') }}">
</head>
<body class="bg-light">
    <div class="container-fluid bg-white p-3 mb-3 border-bottom border-2 border-danger">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="me-3">
                <img src="{{ asset('assets/img/logo-ts.png') }}" alt="" width="130px">
            </div>
            <div class="text-center d-flex flex-column" style="font-size: 20px">
                <span>PIMPINAN DAERAH 177</span>
                <span>Perguruan Seni Beladiri Indonesia</span>
                <span class="text-danger fw-bold">TAPAK SUCI PUTERA MUHAMMADIYAH</span>
                <span>G O W A</span>
            </div>
        </div>
        
    </div>
    <div class="container">
        <div class="card p-3">
            <div class="p-2 text-bg-warning mb-3">
                <h4 class="text-center">Registrasi Siswa</h4>
            </div>
            <form action="" method="post">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="nama">Nama Lengkap Siswa <span
                                    class="text-danger fw-bold">*</span></label>
                            <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama"
                                id="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="nama">Tempat Lahir <span
                                    class="text-danger fw-bold">*</span></label>
                            <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama"
                                id="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="sn">Tanggal Lahir <span
                                    class="text-danger fw-bold">*</span></label>
                            <input class="form-control @error('sn') is-invalid @enderror" type="date" name="sn"
                                id="sn" value="{{ old('sn') }}">
                            @error('sn')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="jk">Jenis Kelamin <span
                                    class="text-danger fw-bold">*</span></label>
                            <div class="d-flex">
                                <div class="form-check me-3">
                                    <input class="form-check-input @error('jk') is-invalid @enderror"
                                        type="radio" name="jk" id="jk1" value="1"
                                        {{ old('jk') == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="jk1">Laki-Laki</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('jk') is-invalid @enderror"
                                        type="radio" name="jk" id="jk2" value="2"
                                        {{ old('jk') == 2 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="jk2">Perempuan</label>
                                </div>
                                @error('jk')
                                    <small class="invalid-feedback"> {{ $message }} </small>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="agama">Agama <span
                                    class="text-danger fw-bold">*</span></label>
                            <select class="form-select @error('agama') is-invalid @enderror" name="agama" id="agama">
                                <option value="" selected>...</option>
                                <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                            </select>
                            @error('agama')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="alamat">Alamat <span
                                    class="text-danger fw-bold">*</span></label>
                            <input class="form-control @error('alamat') is-invalid @enderror" type="text" name="alamat"
                                id="alamat" value="{{ old('alamat') }}">
                            @error('alamat')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="nama_ayah">Nama Ayah</label>
                            <input class="form-control @error('nama_ayah') is-invalid @enderror" type="text" name="nama_ayah"
                                id="nama_ayah" value="{{ old('nama_ayah') }}">
                            @error('nama_ayah')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="nama_ibu">Nama Ibu</label>
                            <input class="form-control @error('nama_ibu') is-invalid @enderror" type="text" name="nama_ibu"
                                id="nama_ibu" value="{{ old('nama_ibu') }}">
                            @error('nama_ibu')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="tingakt_pendidikan">Tingkat Pendidikan</label>
                            <select class="form-select @error('tingakt_pendidikan') is-invalid @enderror" name="tingakt_pendidikan" id="tingakt_pendidikan">
                                <option value="" selected>...</option>
                                <option value="Islam" {{ old('tingakt_pendidikan') == 'Islam' ? 'selected' : '' }}>Islam</option>
                            </select>
                            @error('tingakt_pendidikan')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="sekolah_instansi">Asal Sekolah / Instansi</label>
                            <input class="form-control @error('sekolah_instansi') is-invalid @enderror" type="text" name="sekolah_instansi"
                                id="sekolah_instansi" value="{{ old('sekolah_instansi') }}">
                            @error('sekolah_instansi')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="tahun_masuk">Tahun Masuk Tapak Suci <span
                                    class="text-danger fw-bold">*</span></label>
                            <input class="form-control @error('tahun_masuk') is-invalid @enderror" type="text" name="tahun_masuk"
                                id="tahun_masuk" value="{{ old('tahun_masuk') }}">
                            @error('tahun_masuk')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="cabang_id">Cabang <span
                                    class="text-danger fw-bold">*</span></label>
                            <select class="form-select @error('cabang_id') is-invalid @enderror" name="cabang_id" id="cabang_id">
                                <option value="" selected>...</option>
                                <option value="Islam" {{ old('cabang_id') == 'Islam' ? 'selected' : '' }}>Islam</option>
                            </select>
                            @error('cabang_id')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="unit_id">Unit Latihan <span
                                    class="text-danger fw-bold">*</span></label>
                            <select class="form-select @error('unit_id') is-invalid @enderror" name="unit_id" id="unit_id">
                                <option value="" selected>...</option>
                                <option value="Islam" {{ old('unit_id') == 'Islam' ? 'selected' : '' }}>Islam</option>
                            </select>
                            @error('unit_id')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="unit_id">Tingkatan  <span
                                    class="text-danger fw-bold">*</span></label>
                            <select class="form-select @error('unit_id') is-invalid @enderror" name="unit_id" id="unit_id">
                                <option value="" selected>...</option>
                                <option value="Islam" {{ old('unit_id') == 'Islam' ? 'selected' : '' }}>Siswa Dasar</option>
                            </select>
                            @error('unit_id')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                    </div>
                </div>
            </form>
        </div>
       
    </div>
</body>
</html>