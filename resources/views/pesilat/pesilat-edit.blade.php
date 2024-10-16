@extends('template-dashboard.template-blank')

@section('title')
    Registrasi
@endsection

@section('content')
    <div class="container my-3">
        <div class="card p-3">
            <div class="p-2 mb-3 border-bottom border-2 border-dark">
                <h4 class="text-center">BIODATA</h4>
            </div>
            <form action="{{ url('pesilat/' . $pesilat->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="nik">NIK <span class="text-danger fw-bold">*</span></label>
                            <input class="form-control @error('nik') is-invalid @enderror" type="number" name="nik"
                                id="nik" maxlength="16" minlength="16" value="{{ $pesilat->nik }}" required>
                            @error('nik')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="nama_pesilat">Nama Lengkap Tanpa Gelar <span
                                    class="text-danger fw-bold">*</span></label>
                            <input class="form-control @error('nama_pesilat') is-invalid @enderror" type="text"
                                name="nama_pesilat" id="nama_pesilat" value="{{ $pesilat->nama_pesilat }}" required>
                            @error('nama_pesilat')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="tempat_lahir">Tempat Lahir <span
                                    class="text-danger fw-bold">*</span></label>
                            <input class="form-control @error('tempat_lahir') is-invalid @enderror" type="text"
                                name="tempat_lahir" id="tempat_lahir" value="{{ $pesilat->tempat_lahir }}" required>
                            @error('tempat_lahir')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="tgl_lahir">Tanggal Lahir <span
                                    class="text-danger fw-bold">*</span></label>
                            <input class="form-control @error('tgl_lahir') is-invalid @enderror" type="date"
                                name="tgl_lahir" id="tgl_lahir" value="{{ $pesilat->tgl_lahir }}" required>
                            @error('tgl_lahir')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="jk">Jenis Kelamin <span
                                    class="text-danger fw-bold">*</span></label>
                            <div class="d-flex">
                                <div class="form-check me-3">
                                    <input class="form-check-input @error('jk') is-invalid @enderror" type="radio"
                                        name="jk" id="jk1" value="L"
                                        {{ $pesilat->jk == 'L' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="jk1">Laki-Laki</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('jk') is-invalid @enderror" type="radio"
                                        name="jk" id="jk2" value="P"
                                        {{ $pesilat->jk == 'P' ? 'checked' : '' }}>
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
                            <select class="form-select @error('agama') is-invalid @enderror" name="agama" id="agama"
                                required>
                                <option value="Islam" {{ $pesilat->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                            </select>
                            @error('agama')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="alamat">Alamat <span
                                    class="text-danger fw-bold">*</span></label>
                            <input class="form-control @error('alamat') is-invalid @enderror" type="text" name="alamat"
                                id="alamat" value="{{ $pesilat->alamat }}" required>
                            @error('alamat')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="no_hp">No. HP</label>
                            <input class="form-control @error('no_hp') is-invalid @enderror" type="text" name="no_hp"
                                id="no_hp" value="{{ $pesilat->no_hp }}" required>
                            @error('no_hp')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="nama_ayah">Nama Ayah</label>
                            <input class="form-control @error('nama_ayah') is-invalid @enderror" type="text"
                                name="nama_ayah" id="nama_ayah" value="{{ $pesilat->nama_ayah }}">
                            @error('nama_ayah')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="nama_ibu">Nama Ibu</label>
                            <input class="form-control @error('nama_ibu') is-invalid @enderror" type="text"
                                name="nama_ibu" id="nama_ibu" value="{{ $pesilat->nama_ibu }}">
                            @error('nama_ibu')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="nama_wali">Nama Wali</label>
                            <input class="form-control @error('nama_wali') is-invalid @enderror" type="text"
                                name="nama_wali" id="nama_wali" value="{{ $pesilat->nama_wali }}">
                            @error('nama_wali')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="pekerjaan_ayah">Pekerjaan Ayah</label>
                            <input class="form-control @error('pekerjaan_ayah') is-invalid @enderror" type="text"
                                name="pekerjaan_ayah" id="pekerjaan_ayah" value="{{ $pesilat->pekerjaan_ayah }}">
                            @error('pekerjaan_ayah')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="pekerjaan_ibu">Pekerjaan Ibu</label>
                            <input class="form-control @error('pekerjaan_ibu') is-invalid @enderror" type="text"
                                name="pekerjaan_ibu" id="pekerjaan_ibu" value="{{ $pesilat->pekerjaan_ibu }}">
                            @error('pekerjaan_ibu')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="pekerjaan_wali">Pekerjaan Wali</label>
                            <input class="form-control @error('pekerjaan_wali') is-invalid @enderror" type="text"
                                name="pekerjaan_wali" id="pekerjaan_wali" value="{{ $pesilat->pekerjaan_wali }}">
                            @error('pekerjaan_wali')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="alamat_orangtua_wali">Alamat Orang Tua/Wali</label>
                            <input class="form-control @error('alamat_orangtua_wali') is-invalid @enderror"
                                type="text" name="alamat_orangtua_wali" id="alamat_orangtua_wali"
                                value="{{ $pesilat->alamat_orangtua_wali }}">
                            @error('alamat_orangtua_wali')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="hp_orangtua_wali">No. HP Orang Tua/Wali</label>
                            <input class="form-control @error('hp_orangtua_wali') is-invalid @enderror" type="text"
                                name="hp_orangtua_wali" id="hp_orangtua_wali" value="{{ $pesilat->hp_orangtua_wali }}">
                            @error('hp_orangtua_wali')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="tingkat_pendidikan">Tingkat Pendidikan</label>
                            <select class="form-select @error('tingkat_pendidikan') is-invalid @enderror"
                                name="tingkat_pendidikan" id="tingkat_pendidikan">
                                @foreach ($tingkat_pendidikan as $item)
                                    <option value="{{ $item }}"
                                        {{ $pesilat->tingkat_pendidikan == $item ? 'selected' : '' }}>{{ $item }}
                                    </option>
                                @endforeach
                            </select>
                            @error('tingkat_pendidikan')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="gelar_akademik">Gelar Akademik</label>
                            <input class="form-control @error('gelar_akademik') is-invalid @enderror" type="text"
                                name="gelar_akademik" id="gelar_akademik" value="{{ $pesilat->gelar_akademik }}">
                            @error('gelar_akademik')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="asal_sekolah_instansi">Asal Sekolah / Instansi</label>
                            <input class="form-control @error('asal_sekolah_instansi') is-invalid @enderror"
                                type="text" name="asal_sekolah_instansi" id="asal_sekolah_instansi"
                                value="{{ $pesilat->asal_sekolah_instansi }}">
                            @error('asal_sekolah_instansi')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="tahun_masuk_ts">Tahun Masuk Tapak Suci <span
                                    class="text-danger fw-bold">*</span></label>
                            <input class="form-control @error('tahun_masuk_ts') is-invalid @enderror" type="number"
                                name="tahun_masuk_ts" id="tahun_masuk_ts" value="{{ $pesilat->tahun_masuk_ts }}"
                                required>
                            @error('tahun_masuk_ts')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="jenjang">Jenjang <span
                                    class="text-danger fw-bold">*</span></label>
                            <select class="form-select @error('jenjang') is-invalid @enderror" name="jenjang"
                                id="jenjang" required>
                                @php
                                    $jenjang = $pesilat->jenjang;
                                @endphp
                                <option value="1" {{ $jenjang == '1' ? 'selected' : '' }}>Siswa
                                <option value="2" {{ $jenjang == '2' ? 'selected' : '' }}>Kader
                                <option value="3" {{ $jenjang == '3' ? 'selected' : '' }}>Pendekar
                            </select>
                            @error('jenjang')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="cabang_id">Cabang <span
                                    class="text-danger fw-bold">*</span></label>
                            <select class="form-select @error('cabang_id') is-invalid @enderror select2" name="cabang_id"
                                id="cabang_id" required>
                                <option value="" selected>...</option>
                                @foreach ($cabangs as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $pesilat->cabang_id == $item->id ? 'selected' : '' }}>{{ $item->cabang }}
                                    </option>
                                @endforeach
                            </select>
                            @error('cabang_id')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="unit_id">Unit Latihan <span
                                    class="text-danger fw-bold">*</span></label>
                            <select class="form-select @error('unit_id') is-invalid @enderror select2" name="unit_id"
                                id="unit_id">
                                <option value="" selected>...</option>
                                @foreach ($units as $item)
                                <option value="{{ $item->id }}"
                                    {{ $pesilat->unit_id == $item->id ? 'selected' : '' }}>{{ $item->unit }}
                                </option>
                            @endforeach
                            </select>
                            @error('unit_id')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="tingkatan_id">Tingkatan <span
                                    class="text-danger fw-bold">*</span></label>
                            <select class="form-select @error('tingkatan_id') is-invalid @enderror" name="tingkatan_id"
                                id="tingkatan_id">
                                <option value="" selected>...</option>
                                @foreach ($tingkatans as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $pesilat->tingkatan_id == $item->id ? 'selected' : '' }}>
                                        {{ $item->tingkat . ' (' . $item->singkatan . ')' }}</option>
                                @endforeach
                            </select>
                            @error('tingkatan_id')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="nbts">NBTS</label>
                            <input class="form-control @error('nbts') is-invalid @enderror" type="number"
                                name="nbts" id="nbts" value="{{ $pesilat->nbts }}">
                            @error('nbts')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="nbm">NBM</label>
                            <input class="form-control @error('nbm') is-invalid @enderror" type="number" name="nbm"
                                id="nbm" value="{{ $pesilat->nbm }}">
                            @error('nbm')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="ukt_terakhir">UKT Terakhir</label>
                            <input class="form-control @error('ukt_terakhir') is-invalid @enderror" type="text"
                                name="ukt_terakhir" id="ukt_terakhir" value="{{ $pesilat->ukt_terakhir }}">
                            @error('ukt_terakhir')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            {{-- foto lama --}}
                            <input type="hidden" name="file_lama" value="{{ $pesilat->foto_pesilat }}">

                            <label for="foto-pesilat" class="form-label">Pas Foto <span
                                    class="text-danger fw-bold">*</span></label>
                            <input class="form-control @error('foto-pesilat') is-invalid @enderror" id="foto-pesilat"
                                name="foto-pesilat" type="file">
                            @error('foto-pesilat')
                                <small class="invalid-feedback"> {{ $message }} </small>
                            @enderror
                            <img id="preview_foto" src="{{ url('storage/foto-pesilat/' . $pesilat->foto_pesilat) }}"
                                alt="Image Preview" style="width: 200px; height: auto;" class="mt-2">
                        </div>
                    </div>
                </div>

                {{-- konfirmasi --}}
                <div class="alert alert-info">
                    Pastikan data yang diisi sudah benar sebelum di submit!
                </div>

                <div class="d-flex justify-content-center">
                    <div>
                        <button type="submit" class="btn btn-sm btn-primary shadow-sm me-2">Simpan</button>
                    </div>
                    {{-- menu kembali untuk admin cabang  --}}
                    <div>
                        @if (Auth::guard('web')->check())
                            <a href="{{ url('/siswa') }}" class="btn btn-sm btn-danger shadow-sm me-2">Kembali</a>
                        @endif
                    </div>
                </div>

            </form>
        </div>

    </div>
@endsection

{{-- script --}}
@section('script')
    <script>
        $(document).ready(function() {
            $('.select2').select2();
            // menampilkan preview foto
            $('#foto-pesilat').change(function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $('#preview_foto').attr('src', e.target.result).show();
                    };
                    reader.readAsDataURL(file);
                }
            });

            // manampilkan daftar unit sesuai cabang yang dipilih
            $('#cabang_id').on('change', function() {
                var cabangId = $(this).val();

                // Kirim permintaan AJAX ke route Laravel untuk mendapatkan juri berdasarkan gelanggangId
                $.ajax({
                    url: "{{ url('/get-unit') }}",
                    method: 'get',
                    data: {
                        cabang_id: cabangId
                    },
                    success: function(data) {
                        // console.log('ok');
                        // console.log(data);
                        // Kosongkan select juri terlebih dahulu
                        $('#unit_id').empty();

                        // Isi select juri dengan data yang diterima
                        $.each(data, function(key, value) {
                            $('#unit_id').append('<option value="' + value.id + '">' +
                                value.unit + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Terjadi kesalahan:', error);
                        // console.log(data);
                    }
                });
            });

            // manampilkan tingkatan sesuai jenjang yang dipilih
            $('#jenjang').on('change', function() {
                var jenjang = $(this).val();

                // Kirim permintaan AJAX ke route Laravel untuk mendapatkan juri berdasarkan gelanggangId
                $.ajax({
                    url: "{{ url('/tingkatan') }}",
                    method: 'get',
                    data: {
                        jenjang: jenjang
                    },
                    success: function(data) {
                        // console.log('ok');
                        // console.log(data);
                        // Kosongkan select juri terlebih dahulu
                        $('#tingkatan_id').empty();

                        // Isi select juri dengan data yang diterima
                        $.each(data, function(key, value) {
                            $('#tingkatan_id').append('<option value="' + value.id +
                                '">' +
                                value.tingkat + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Terjadi kesalahan:', error);
                        // console.log(data);
                    }
                });
            });
        });
    </script>
@endsection
