@extends('template-dashboard.template-niceadmin')

@section('title')
    Unit
@endsection

@section('datatables-css')
    {{-- datatables --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables/datatables.min.css') }}">
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Unit Latihan</h1>
    </div>

    {{-- konten --}}
    <section class="section">


        <div class="card p-3">
            <form action="{{ url('/unit-import') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="file" class="form-label form-label-sm">File Excel</label>
                <div class="row mb-5">
                    <div class="col-4">
                        <input class="form-control form-control-sm @error('file') is-invalid @enderror" id="file"
                            name="file" type="file" required>
                        @error('file')
                            <small class="invalid-feedback"> {{ $message }} </small>
                        @enderror
                    </div>
                    <div class="col-1">
                        <button class="btn btn-sm btn-success shadow-sm" type="submit">Import</button>
                    </div>
                </div>
            </form>
        </div>


        <div class="card p-3">

            <div class="d-flex justify-content-end">
                <button class="btn btn-sm btn-primary shadow-sm" onclick="create()"><i class="bi bi-plus-lg"></i>
                    Tambah</button>
            </div>


            <div class="table-responsive">
                <table class="table table-sm table-striped table-hover nowrap w-100 datatable" id="read">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Unit</th>
                            <th>Penanggung Jawab</th>
                            <th>Cabang</th>
                            <th>Alamat</th>
                            <th>Ket</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($units as $item)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $item->unit }}</td>
                                <td>{{ $item->penanggung_jawab }}</td>
                                <td>{{ $item->cabang->cabang }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->ket }}</td>
                                <td>
                                    <button onclick="edit({{ $item->id }})" class="btn btn-sm btn-warning shadow-sm"
                                        data-bs-toggle="tooltip" data-bs-placment="top" title="Edit"><i
                                            class="bi bi-pencil-square"></i></button>
                                    <form action="{{ url('unit/' . $item->id) }}" method="post" class="d-inline-block">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm btn-danger shadow-sm delete-btn" type="submit"
                                            data-bs-toggle="tooltip" data-bs-placment="top" title="Hapus"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="unit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="title">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div id="page"></div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {

        })
        // create data
        function create() {
            $.get("{{ url('unit/create') }}", {}, function(data, status) {
                $('#title').html('Tambah Unit')
                $('#page').html(data)
                $('#unit').modal('show')
            });
        }

        // store unit
        function store() {
            e.preventDefault();
            // mengambil semua nilai inputan pada tag form
            let data = $('#form').serialize()

            // proses pengiriman data ke controller untuk disimpan
            $.ajax({
                type: 'post',
                url: "{{ url('unit') }}",
                data: data,
                success: function(data) {
                    $('.btn-close').click()
                },
                error: function(response) {
                    alert('Terjadi kesalahan, silakan coba lagi.')
                }
            })
        }

        // menampilkan data yang ingin diedit
        function edit(id) {
            $.get("{{ url('unit') }}/" + id + "/edit", {}, function(data, status) {
                $('#title').html('Edit unit latihan');
                $('#page').html(data);
                $('#unit').modal('show');
            });
        }

        // proses update data
        function update(id) {
            // mengambil semua nilai inputan pada tag form
            let data = $('#form').serialize()

            // proses pengiriman data ke controller untuk diupdate
            $.ajax({
                type: 'put',
                url: "{{ url('unit') }}/" + id,
                data: data,
                success: function(data) {
                    $('.btn-close').click()
                },
                error: function(response) {
                    alert('Terjadi kesalahan, silakan coba lagi.')
                }
            })
        }
    </script>
@endsection
