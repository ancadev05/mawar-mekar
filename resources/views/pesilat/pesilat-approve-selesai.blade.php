@extends('template-dashboard.template-niceadmin')

@section('title')
    Approve Pesilat
@endsection

@section('datatables-css')
    {{-- datatables --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables/datatables.min.css') }}">
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Selesai Approve</h1>
    </div>

    {{-- konten --}}
    <section class="section">

        <div class="card p-3">

            <div class="table-responsive">
                <table class="table table-sm table-striped table-hover nowrap w-100 datatable" id="read">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No. Registrasi</th>
                            <th>Cabang</th>
                            <th>Unit Latihan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($pesilats as $item)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $item->no_registrasi }}</td>
                                <td>{{ $item->cabang->cabang }}</td>
                                <td>{{ $item->unit->unit }}</td>
                                <td>
                                    <form action="{{ url('pesilat-approve-batal/' . $item->id) }}" method="post" class="d-inline-block">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="btn btn-sm btn-warning shadow-sm"><i class="bi bi-x-lg"></i></button>
                                    </form>
                                    <button class="btn btn-sm btn-danger shadow-sm"><i class="bi bi-trash"></i></button>
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
