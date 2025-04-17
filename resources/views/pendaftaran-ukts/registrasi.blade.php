@extends('template-dashboard.template-niceadmin')

@section('title')
    Registrasi
@endsection

@section('content')
    <section class="section">

        <div class="card">
            <div class="card-header">Registrasi</div>
            <div class="card-body">
                <form action="{{ url('/registrasi/' . $peserta->id) }}" method="post">
                    @method('put')
                    @csrf
                    <img src="{{ url('storage/foto-pesilat/' . $peserta->pesilat->foto_pesilat) }}" alt="" width="200px">
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-3">
                            <label class="col-form-label">No. Registrasi</label>
                        </div>
                        <div class="col">
                            <input type="text" value="{{ $peserta->pesilat->no_registrasi }}" class="form-control"
                                disabled>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-3">
                            <label class="col-form-label">Nama</label>
                        </div>
                        <div class="col">
                            <input type="text" value="{{ $peserta->pesilat->nama_pesilat }}" class="form-control"
                                disabled>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-3">
                            <label class="col-form-label">Cabang</label>
                        </div>
                        <div class="col">
                            <input type="text" value="{{ $peserta->pesilat->cabang->cabang }}" class="form-control"
                                disabled>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-3">
                            <label class="col-form-label">Unit</label>
                        </div>
                        <div class="col">
                            <input type="text" value="{{ $peserta->pesilat->unit->unit }}" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-3">
                            <label for="pembayaran" class="col-form-label">Pembayaran</label>
                        </div>
                        <div class="col">
                            <input type="number" name="pembayaran" value="{{ $peserta->pembayaran }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-3">
                            <label for="status_pembayaran" class="col-form-label">Status Pembayaran</label>
                        </div>
                        <div class="col">
                            <select name="status_pembayaran" id="status_pembayaran" class="form-select" required>
                                <option value="lunas" {{ $peserta->status_pembayaran == 'lunas' ? 'selected' : '' }}>LUNAS</option>
                                <option value="belum_lunas" {{ $peserta->status_pembayaran == 'belum_lunas' ? 'selected' : '' }}>BELUM LUNAS</option>
                            </select>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-3">
                            <label for="ket" class="col-form-label">Ket</label>
                        </div>
                        <div class="col">
                             <input type="text" name="ket" value="{{ $peserta->ket }}" class="form-control">
                        </div>
                    </div>

                    <div>
                        <button class="btn btn-sm btn-success">Regis</button>
                        <a href="{{ url('/peserta-ukt') }}" class="btn btn-sm btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </section>
@endsection
