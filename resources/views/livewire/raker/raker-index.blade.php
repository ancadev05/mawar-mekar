<div>
    <div class="card">
        <div class="card-img-top">
            <img src="{{ url('assets/img/raker.jpeg') }}" alt="" width="100%">
        </div>
        {{-- <h4 class="m-0 p-0">RAPAT KERJA PIMDA 177</h4>
        <h4 class="m-0 p-0">TAPAK SUCI PUTERA MUHAMMADIYAH</h4>
        <h4 class="m-0 p-0">KABUPATEN GOWA</h4> --}}

    </div>

    <section class="card pt-3">
        <div class="card-body">
            <form wire:submit="save">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="pesilat_id">Nama</label>
                    <select wire:model.live="pesilat_id" class="form-select" id="pesilat_id" required>
                        <option value="" selected>...</option>
                        @foreach ($pesilats as $item)
                            <option value="{{ $item->id }}"> {{ $item->nama_pesilat }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="mb-3">
                            <label for="tingkatan_id" class="form-label">Tingkatan</label>
                            <input wire:model="tingkatan_id" id="tingkatan_id" type="text" class="form-control"
                                readonly>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mb-3">
                            <label for="cabang_id" class="form-label">Cabang</label>
                            <input wire:model="cabang_id" id="cabang_id" type="text" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 mb-3">
                            <label class="form-label" for="pesilat_id">Kehadiran</label>
                            <select wire:model="kehadiran" class="form-select" id="kehadiran" required>
                                <option value="" selected>...</option>
                                <option value="1">Siap Hadir</option>
                                <option value="2">Berhalangan</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input wire:model="jabatan" id="jabatan" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mb-3">
                                <label for="ket" class="form-label">Ket</label>
                                <input wire:model="ket" id="ket" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </section>

    <div class="card pt-3">
        <div class="card-header">
            Peserta Raker
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Cabang</th>
                            <th>Jabatan</th>
                            <th>Ket</th>
                            <th>Kehadiran</th>
                            <th><i class="bi bi-gear"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="{{ url('assets/img/foto-kader.jpg') }}" alt="" width="40px"
                                    class="rou rounded-5"></td>
                            <td>Hamzah</td>
                            <td>Limbung</td>
                            <td>Pelatih</td>
                            <td>sukses</td>
                            <td><span class="badge text-bg-success">Siap Hadir</span></td>
                            <td><button class=""><i class="bi bi-pencil-square"></i></button></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="{{ url('assets/img/foto-kader.jpg') }}" alt="" width="40px"
                                    class="rou rounded-5"></td>
                            <td>Hamzah</td>
                            <td>Limbung</td>
                            <td>Pelatih</td>
                            <td>sukses</td>
                            <td><span class="badge text-bg-success">Siap Hadir</span></td>
                            <td><button class=""><i class="bi bi-pencil-square"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
