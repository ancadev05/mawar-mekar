@extends('template-dashboard.template-blank')

@section('title')
    No. Registrasi
@endsection

@section('content')
    <div class="container p-3">

        <div class="a4 m-auto">
            <div class="card p-1">
    
                {{-- kop --}}
                <div class="d-flex justify-content-center align-items-center border-bottom border-2 border-dark pb-1 mb-3">
                    <div class="me-3">
                        <img src="{{ asset('assets/img/logo-ts.png') }}" alt="" width="120px">
                    </div>
                    <div class="text-center d-flex flex-column" style="font-size: 19px; color: blue; line-height: 1.2em">
                        <span class="fw-bold">Pimpinan Daerah 177</span>
                        <span class="fw-bold">Perguruan Seni Beladiri Indonesia</span>
                        <span class="text-danger fw-bold">TAPAK SUCI PUTERA MUHAMMADIYAH</span>
                        <span class="fw-bold">G O W A</span>
                        <span  style="font-size: 10px;line-height: 1.2em"><i>Sekretariat : JL. Dr. Wahidin Sudirohusodo No. 30 Batangkaluku. Telp. 081242855967/082348458887</i></span>
                    </div>
                </div>
    
                {{-- judul --}}
                <div class="text-center mb-3" style="font-size: 16px">
                    <span class="fw-bold">BIODATA</span><br>
                    <span class="border-top border-1 border-dark">No. Regis : 177.02.2012.0001</span>
                </div>
    
                {{-- biodata --}}
                <table class="table table-sm" style="font-size: 16px">
                    <tr>
                        <td>NIK</td>
                        <td>: 1234567890123456</td>
                        <td rowspan="26" colspan="2">
                            <div class="d-flex flex-column align-items-center mt-2" style="line-height: 1.2em">
                                <img src="{{ url('assets/img/tanda-tingkat/s3.png') }}" alt="foto" height="30px" class="mb-2">
                                <img src="{{ url('assets/img/foto-siswa.jpg') }}" alt="foto" width="113.38px" height="151.18px" class="mb-1">
                                <span class="fw-bold">Hamzah, K.Ma.</span>
                                <span>NBTS. NBM</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Siswa</td>
                        <td>: Muhammad Al Fatih</td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>: Makassar</td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>: 31 Januari 2000</td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>: Islam</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: Jl. Monumen Emmy Saelan Makassar</td>
                    </tr>
                    <tr>
                        <td>No HP</td>
                        <td>: 085695605182</td>
                    </tr>
                    <tr>
                        <td>Tingkat Pendidikan</td>
                        <td>: Perguruan Tinggi</td>
                    </tr>
                    <tr>
                        <td>Gelar Akademik</td>
                        <td>: S.Pd.</td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah / Instansi</td>
                        <td>: SMK Negeri 1 Takalar</td>
                    </tr>
                    <tr>
                        <td colspan="2"> Orang Tua/Wali :</td>
                    </tr>
                    <tr>
                        <td>&nbsp; &nbsp; &nbsp; a. Ayah</td>
                        <td>: Hidayat</td>
                    </tr>
                    <tr>
                        <td>&nbsp; &nbsp; &nbsp; b. Ibu</td>
                        <td>: Kartini</td>
                    </tr>
                    <tr>
                        <td>&nbsp; &nbsp; &nbsp; c. Wali</td>
                        <td>: -</td>
                    </tr>
                    <tr>
                        <td colspan="2">Pekerjaan Orang Tua/Wali :</td>
                    </tr>
                    <tr>
                        <td>&nbsp; &nbsp; &nbsp; a. Ayah</td>
                        <td>: Petani</td>
                    </tr>
                    <tr>
                        <td>&nbsp; &nbsp; &nbsp; b. Ibu</td>
                        <td>: Ibu Rumah Tangga</td>
                    </tr>
                    <tr>
                        <td>&nbsp; &nbsp; &nbsp; c. Wali</td>
                        <td>: -</td>
                    </tr>
                    <tr>
                        <td>Alamat Orang Tua/Wali</td>
                        <td>: Bajeng, Kec. Limbung</td>
                    </tr>
                    <tr>
                        <td>No. HP Orang Tua/Wali</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td>Tahun Masuk Tapak Suci</td>
                        <td>: 2012</td>
                    </tr>
                    <tr>
                        <td>Jenjang</td>
                        <td>: Siswa</td>
                    </tr>
                    <tr>
                        <td>Cabang</td>
                        <td>: Limbung</td>
                    </tr>
                    <tr>
                        <td>Unit Latihan</td>
                        <td>: SMA Muhammadiyah Limbung</td>
                    </tr>
                    <tr>
                        <td>Tingkatan</td>
                        <td>: Siswa 3 (MC3)</td>
                    </tr>
                    <tr>
                        <td>UKT Terakhir</td>
                        <td>: Malino</td>
                    </tr>
                </table>
            </div>
           
        </div>

        <div class="d-flex justify-content-center">
            <button class="btn btn-danger">Download</button>
        </div>

    </div>
@endsection
