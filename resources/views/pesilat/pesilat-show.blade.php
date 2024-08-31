@extends('template-dashboard.template-blank')

@section('title')
    No. Registrasi
@endsection

@section('content')
    <div class="container p-3">

        @if ($pesilat->validasi == 0)
            <div class="d-flex justify-content-center">
                <div class="alert alert-danger text-center w-50">
                    <b>Menunggu Validasi dari PIMDA Tapak Suci 177 Gowa</b>
                    <p class="m-0">Silahkan koordinasi ke unit latihan atau ke pengurus cabang masing-masing untuk proses
                        registrasi pendaftaran siswa baru</p>
                </div>
            </div>
            {{-- car --}}
            <div class="d-flex justify-content-center">
                <div class="shadow p-2 bg-white my-3" style="width: 85.60mm; height: 53.98mm; font-size: 10px; background-color: #dc3545;
background-image: linear-gradient(180deg, #dc3545 0%, #ffc107 100%);" id="card">
                    @if ($pesilat->validasi == 0)
                        <div class="alert alert-danger text-center fw-bold">DATA BELUM DI APPROVE</div>
                    @else
                        <div
                            class="d-flex align-items-center justify-content-center border-bottom border-1 border-dark py-1 mb-1">
                            <div class="ms-2 me-1">
                                <img src="{{ asset('assets/img/logo-ts.png') }}" alt="" width="40px">
                            </div>
                            <div class="fw-bold">
                                <div>PIMDA 177 KABUPATEN GOWA</div>
                                <div>TAPAK SUCI PUTERA MUHAMMADIYAH</div>
                            </div>
                        </div>
                    @endif
                    <div class="d-flex justify-content-between align-items-start mt-2" style="background-color: rgba(255, 255, 255, 0.3);">
                        <div>
                            <table>
                                <tr>
                                    <td>No. Regis</td>
                                    <td class="align-text-top">:</td>
                                    <td><b>{{ $pesilat->no_registrasi }}</b></td>
                                </tr>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td class="align-text-top">:</td>
                                    <td>
                                        {{ $pesilat->nama_pesilat }}
                                        {{ $pesilat->gelar_akademik == true ? ', ' . $pesilat->gelar_akademik : $pesilat->gelar_akademik }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td class="align-text-top">:</td>
                                    <td>{{ $pesilat->tempat_lahir }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td class="align-text-top">:</td>
                                    <td>{{ tanggalIndonesia($pesilat->tgl_lahir) }}</td>
                                </tr>
                                <tr>
                                    <td>Tingkat</td>
                                    <td class="align-text-top">:</td>
                                    <td>
                                        {{ $pesilat->tingkatan->tingkat }}
                                        {{ $pesilat->jenjang == 1 ? $pesilat->tingkatan->melati : '(' . $pesilat->tingkatan->singkatan . ')' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cabang</td>
                                    <td class="align-text-top">:</td>
                                    <td>{{ $pesilat->cabang->cabang }}</td>
                                </tr>
                            </table>
                        </div>

                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <img src="{{ url('assets/img/tanda-tingkat/' . $pesilat->tingkatan->melati) }}" alt="foto"
                                height="12px" class="mb-1">
                            <img src="{{ url('storage/foto-pesilat/' . $pesilat->foto_pesilat) }}" alt="foto"
                                width="56.69px" height="75.59px" class="mb-1">
                        </div>
                    </div>
                </div>
            </div>
            {{-- end card --}}
        @else
            <div class="a4 m-auto" id="document-pdf">
                <div class="card p-1">

                    {{-- kop --}}
                    <div
                        class="d-flex justify-content-center align-items-center border-bottom border-2 border-dark pb-1 mb-3">
                        <div class="me-3">
                            <img src="{{ asset('assets/img/logo-ts.png') }}" alt="" width="120px">
                        </div>
                        <div class="text-center d-flex flex-column"
                            style="font-size: 19px; color: blue; line-height: 1.2em">
                            <span class="fw-bold">Pimpinan Daerah 177</span>
                            <span class="fw-bold">Perguruan Seni Beladiri Indonesia</span>
                            <span class="text-danger fw-bold">TAPAK SUCI PUTERA MUHAMMADIYAH</span>
                            <span class="fw-bold">G O W A</span>
                            <span style="font-size: 10px;line-height: 1.2em"><i>Sekretariat : JL. Dr. Wahidin Sudirohusodo
                                    No. 30 Batangkaluku. Telp. 081242855967/082348458887</i></span>
                        </div>
                    </div>


                    {{-- judul --}}
                    <div class="text-center mb-3" style="font-size: 16px">
                        <span class="fw-bold">BIODATA</span><br>
                        <span class="border-top border-1 border-dark">No. Regis : {{ $pesilat->no_registrasi }}</span>
                    </div>

                    {{-- biodata --}}
                    <table class="table table-sm" style="font-size: 16px">
                        <tr>
                            <td>NIK</td>
                            <td>: {{ $pesilat->nik }}</td>
                            <td rowspan="26" colspan="2">
                                <div class="d-flex flex-column align-items-center mt-2" style="line-height: 1.2em">
                                    <img src="{{ url('assets/img/tanda-tingkat/' . $pesilat->tingkatan->melati) }}"
                                        alt="foto" height="30px" class="mb-2">
                                    <img src="{{ url('storage/foto-pesilat/' . $pesilat->foto_pesilat) }}" alt="foto"
                                        width="113.38px" height="151.18px" class="mb-1">
                                    <span class="fw-bold border-bottom border-1 border-black">{{ $pesilat->nama_pesilat }}
                                        {{ ',' . $pesilat->gelar_akademik }} {{ $pesilat->tingkatan->singkatan }}</span>
                                    <span>NBTS. {{ $pesilat->nbts }} NBM. {{ $pesilat->nbm }}</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>: {{ $pesilat->nama_pesilat }}</td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>: {{ $pesilat->tempat_lahir }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>: {{ tanggalIndonesia($pesilat->tgl_lahir) }}</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>: {{ $pesilat->agama }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: {{ $pesilat->alamat }}</td>
                        </tr>
                        <tr>
                            <td>No HP</td>
                            <td>: {{ $pesilat->no_hp }}</td>
                        </tr>
                        <tr>
                            <td>Tingkat Pendidikan</td>
                            <td>: {{ $pesilat->tingkat_pendidikan }}</td>
                        </tr>
                        <tr>
                            <td>Gelar Akademik</td>
                            <td>: {{ $pesilat->gelar_akademik }}</td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah / Instansi</td>
                            <td>: {{ $pesilat->asal_sekolah_instansi }}</td>
                        </tr>
                        <tr>
                            <td colspan="2"> Orang Tua/Wali :</td>
                        </tr>
                        <tr>
                            <td>&nbsp; &nbsp; &nbsp; a. Ayah</td>
                            <td>: {{ $pesilat->nama_ayah }}</td>
                        </tr>
                        <tr>
                            <td>&nbsp; &nbsp; &nbsp; b. Ibu</td>
                            <td>: {{ $pesilat->nama_ibu }}</td>
                        </tr>
                        <tr>
                            <td>&nbsp; &nbsp; &nbsp; c. Wali</td>
                            <td>: {{ $pesilat->nama_wali }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Pekerjaan Orang Tua/Wali :</td>
                        </tr>
                        <tr>
                            <td>&nbsp; &nbsp; &nbsp; a. Ayah</td>
                            <td>: {{ $pesilat->pekerjaan_ayah }}</td>
                        </tr>
                        <tr>
                            <td>&nbsp; &nbsp; &nbsp; b. Ibu</td>
                            <td>: {{ $pesilat->pekerjaan_ibu }}</td>
                        </tr>
                        <tr>
                            <td>&nbsp; &nbsp; &nbsp; c. Wali</td>
                            <td>: {{ $pesilat->pekerjaan_wali }}</td>
                        </tr>
                        <tr>
                            <td>Alamat Orang Tua/Wali</td>
                            <td>: {{ $pesilat->alamat_orangtua_wali }}</td>
                        </tr>
                        <tr>
                            <td>No. HP Orang Tua/Wali</td>
                            <td>: {{ $pesilat->hp_orangtua_wali }}</td>
                        </tr>
                        <tr>
                            <td>Tahun Masuk Tapak Suci</td>
                            <td>: {{ $pesilat->tahun_masuk_ts }}</td>
                        </tr>
                        <tr>
                            <td>Jenjang</td>
                            <td>
                                {{ $pesilat->jenjang == 1 ? ': Siswa' : '' }}
                                {{ $pesilat->jenjang == 2 ? ': Kader' : '' }}
                                {{ $pesilat->jenjang == 3 ? ': Pendekar' : '' }}
                            </td>
                        </tr>
                        <tr>
                            <td>Cabang</td>
                            <td>: {{ $pesilat->cabang->cabang }}</td>
                        </tr>
                        <tr>
                            <td>Unit Latihan</td>
                            <td>: {{ $pesilat->unit->unit }}</td>
                        </tr>
                        <tr>
                            <td>Tingkatan</td>
                            <td>: {{ $pesilat->tingkatan->tingkat }}</td>
                        </tr>
                        <tr>
                            <td>UKT Terakhir</td>
                            <td>: {{ $pesilat->ukt_terakhir }}</td>
                        </tr>
                    </table>
                </div>

            </div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-danger shadow-sm me-2" id="export-pdf">Download</button>
                <a href="{{ url('/pesilat/' . $pesilat->id . '/edit') }}" class="btn btn-warning shadow-sm"><i class="bi bi-pencil-square"></i> Edit</a>
            </div>
        @endif

    </div>
@endsection
