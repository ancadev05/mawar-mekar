@extends('template-dashboard.template-tabler')

@section('title')
    Cabang
@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        Ijazah UKT
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">

            <div class="card p-3">
                <div class="d-flex justify-content-end mb-3">
                    <button class="btn btn-sm btn-primary shadow-sm">+ Tambah</button>
                </div>
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tingkatan</th>
                            <th>No. Ijazah</th>
                            <th>File Ijazah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Siswa Satu</td>
                            <td>4829hfry</td>
                            <td></td>
                            <td>
                                <button class="btn btn-sm btn-warning shadow-sm">Edit</button>
                                <button class="btn btn-sm btn-danger shadow-sm">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
@endsection
