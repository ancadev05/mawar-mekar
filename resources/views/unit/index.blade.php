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

        @if (Auth::guard('web')->user()->level_akun_id == 2)
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
        @endif



        <div class="card p-3">

            <div class="d-flex justify-content-end mb-3">
                <a href="{{ url('unit/create') }}" class="btn btn-sm btn-primary shadow-sm"><i class="bi bi-plus-lg"></i>
                    Tambah</a>
            </div>
            {{-- <div class="d-flex justify-content-end mb-3">
                <button class="btn btn-sm btn-primary shadow-sm" onclick="create()"><i class="bi bi-plus-lg"></i>
                    Tambah</button>
            </div> --}}


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
                                    <a href="{{ url('unit/' . $item->id . '/edit') }}" onclick="edit({{ $item->id }})" class="btn btn-sm btn-warning shadow-sm"
                                        data-bs-toggle="tooltip" data-bs-placment="top" title="Edit"><i
                                            class="bi bi-pencil-square"></i></a>
                                    {{-- <button onclick="edit({{ $item->id }})" class="btn btn-sm btn-warning shadow-sm"
                                        data-bs-toggle="tooltip" data-bs-placment="top" title="Edit"><i
                                            class="bi bi-pencil-square"></i></button> --}}
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

    {{-- coba --}}
    {{-- <hr>
    <div id="unitLatihan">
        <div class="unit">
            <label for="unit_latihan1">Unit Latihan:</label>
            <input type="text" id="unit_latihan1" name="unit_latihan">
            <label for="alamat1">Alamat:</label>
            <input type="text" id="alamat1" name="alamat">
            <div class="penanggung_jawab">
                <input type="text" name="penanggung_jawab[]">
                <button type="button" class="tambahPenanggungJawab">Tambah</button>
            </div>
        </div>
        <button type="button" id="tambahUnit">Tambah Unit Latihan</button>
        <button type="button" id="simpanData">Simpan Data</button>
    </div> --}}
@endsection

{{-- @section('script')
    <script>
        $(document).ready(function() {
            // Fungsi untuk menambahkan input penanggung jawab baru
            function tambahPenanggungJawab(container) {
                var newInput = $('<input type="text" name="penanggung_jawab[]">');
                container.find('.penanggung_jawab').append(newInput);
            }

            // Ketika tombol "Tambah Penanggung Jawab" diklik
            $(document).on('click', '.tambahPenanggungJawab', function() {
                tambahPenanggungJawab($(this).closest('.unit'));
            });

            // Ketika tombol "Simpan Data" diklik
            $('#simpanData').click(function() {
                var data = [];
                $('#unitLatihan .unit').each(function() {
                    var unitData = {
                        unit_latihan: $(this).find('input[name="unit_latihan"]').val(),
                        alamat: $(this).find('input[name="alamat"]').val(),
                        penanggung_jawab: []
                    };
                    $(this).find('input[name="penanggung_jawab[]"]').each(function() {
                        unitData.penanggung_jawab.push($(this).val());
                    });
                    data.push(unitData);
                });

                // Kirim data ke PHP menggunakan AJAX
                $.ajax({
                    // ... (sama seperti sebelumnya)
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Fungsi untuk menambahkan input penanggung jawab baru
            function tambahPenanggungJawab(container) {
                // var newInput = $('<input type="text" name="penanggung_jawab[]">');
                var newInput = $('#form .penanggung_jawab').clone();
                container.find('.penanggung_jawab').append(newInput);
            }

            // Ketika tombol "Tambah Penanggung Jawab" diklik
            $(document).on('click', '.tambah-penanggung-jawab', function() {
                // tambahPenanggungJawab($(this).closest('.unit'));
                tambahPenanggungJawab($(this));
            });

            $('.multiple-select').select2();
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
            // mengambil semua nilai inputan pada tag form
            let data = $('#form').serialize()

            // proses pengiriman data ke controller untuk disimpan
            $.ajax({
                type: 'get',
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
@endsection --}}
