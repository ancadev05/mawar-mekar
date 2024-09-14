@extends('template-dashboard.template-niceadmin')

@section('title')
    Ijazah
@endsection

@section('content')

    <div class="pagetitle">
        <h1>Ijazah UKT</h1>
    </div>

    <!-- Page body -->
    <section class="section">

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
            
    </section>
@endsection
