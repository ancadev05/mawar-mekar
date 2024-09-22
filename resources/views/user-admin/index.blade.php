@extends('template-dashboard.template-niceadmin')

@section('title')
    User
@endsection

@section('datatables-css')
    {{-- datatables --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables/datatables.min.css') }}">
@endsection

@section('content')
    <div class="pagetitle">
        <h1>User Admin</h1>
    </div>

    {{-- konten --}}
    <section class="section">


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
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Cabang</th>
                            <th>Ket</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($users as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->level_akun->level }}</td>
                                <td>{{ $item->cabang->cabang }}</td>
                                <td>{{ $item->ket }}</td>
                                <td>
                                    <button onclick="edit({{ $item->id }})" class="btn btn-sm btn-warning shadow-sm"
                                        data-bs-toggle="tooltip" data-bs-placment="top" title="Edit"><i
                                            class="bi bi-pencil-square"></i></button>
                                    <form action="{{ url('user/' . $item->id) }}" method="post" class="d-inline-block">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm btn-danger shadow-sm delete-btn" type="submit"
                                            data-bs-toggle="tooltip" data-bs-placment="top" title="Hapus"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
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
            // ok()
        })

        // create data
        function create() {
            $.get("{{ url('user/create') }}", {}, function(data, status) {
                $('#title').html('Tambah User')
                $('#page').html(data)
                $('#modal').modal('show')
            });
        }

        // store unit
        function store() {
            // mengambil semua nilai inputan pada tag form
            let data = $('#form').serialize()

            // proses pengiriman data ke controller untuk disimpan
            $.ajax({
                type: 'get',
                url: "{{ url('user') }}",
                data: data,
                success: function(data) {
                    $('.btn-close').click();
                },
                error: function(response) {
                    alert('Terjadi kesalahan, silakan coba lagi.')
                }
            })
        }

        // menampilkan data yang ingin diedit
        function edit(id) {
            $.get("{{ url('user') }}/" + id + "/edit", {}, function(data, status) {
                $('#title').html('Edit akun');
                $('#page').html(data);
                $('#modal').modal('show');
            });
        }

        // proses update data
        function update(id) {
            // mengambil semua nilai inputan pada tag form
            let data = $('#form').serialize()

            // proses pengiriman data ke controller untuk diupdate
            $.ajax({
                type: 'get',
                url: "{{ url('user') }}/" + id,
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
