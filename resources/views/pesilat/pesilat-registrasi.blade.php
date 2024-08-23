@extends('template-dashboard.template-blank')

@section('title')
    Persiapan Registrasi
@endsection

@section('content')
    <div class="container py-4">

        <div class="alert alert-info">
            <span class="fw-bold">Petunjuk registrasi:</span>
            <ul class="m-0">
                <li>Siapkan terlebih dahulu data yang diperlukan agar memudahkan saat registrasi</li>
                <li>Isian yang memiliki tanda bintan ( <b class="text-danger">*</b> ) berarti isian tersebut wajib diisi</li>
                <li>Isian yang tidak memiliki tanda bintang, boleh kosong dan diupdate kemudian</li>
                <li>Ukuran foto yang diupload 3 x 4 cm</li>
                <li>Foto latar kuning untuk Siswa, latar biru untuk Kader dan Pendekar</li>
                <li>Ukuran foto maksimal 2MB</li>
            </ul>
        </div>

        <section class="section">

            <div class="table-responsive p-3 bg-white">


                {{-- biodata --}}
                <table class="table table-sm" style="font-size: 16px">
                    <tr>
                        <td>NIK</td>
                        <td>: </td>
                        <td rowspan="28" colspan="2">
                            <div class="d-flex flex-column align-items-center mt-2" style="line-height: 1.2em">
                                {{-- <img src="{{ url('assets/img/tanda-tingkat/s3.png') }}" alt="foto" height="30px" class="mb-2"> --}}
                                <div class="text-bg-secondary d-flex justify-content-center align-items-center mb-2"
                                    style="width: 113.38px; height: 151.18px;">Foto 3x4</div>
                                {{-- <img src="" alt="foto" width="113.38px" height="151.18px" class="mb-1"> --}}
                                <span class="fw-bold border-bottom border-1 border-dark">Nama Pesilat</span>
                                <span>NBTS.- NBM.-</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Siswa</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td>No HP</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td colspan="2"> Orang Tua/Wali :</td>
                    </tr>
                    <tr>
                        <td>&nbsp; &nbsp; &nbsp; a. Ayah</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td>&nbsp; &nbsp; &nbsp; b. Ibu</td>
                        <td>: </td>
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
                        <td>: </td>
                    </tr>
                    <tr>
                        <td>&nbsp; &nbsp; &nbsp; b. Ibu</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td>&nbsp; &nbsp; &nbsp; c. Wali</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td>Alamat Orang Tua/Wali</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td>No. HP Orang Tua/Wali</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td>Tingkat Pendidikan</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td>Gelar Akademik</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah / Instansi</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td>-</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Tahun Masuk Tapak Suci</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td>Jenjang</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td>Cabang</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td>Unit Latihan</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td>Tingkatan</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td>UKT Terakhir</td>
                        <td>: </td>
                    </tr>
                </table>

            </div>

            <div class="alert alert-info mt-3">
                Jika data yang dibutuhkan sudah ada, silahkan klik tombol registrasi berikut!
            </div>

            <div class="d-flex justify-content-center">
                <a href="{{ url('/pesilat/create') }}" target="_blank" class="btn btn-sm btn-warning shadow-sm mb-3 w-50">Registrasi Sekarang</a>
            </div>

            
        </section>

    </div>
@endsection
