@extends('template-dashboard.template-niceadmin')

@section('title')
    Cabang
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Daftar Cabang</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card p-3">
            <div class="table-responsive">
                <table class="table table-sm table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Cabang</th>
                            <th>No. Cabang</th>
                            <th>Ket</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($cabangs as $item)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $item->cabang }}</td>
                                <td>{{ $item->no_cabang }}</td>
                                <td>{{ $item->ket }}</td>
                            </tr>
                            @php
                                $i++
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

