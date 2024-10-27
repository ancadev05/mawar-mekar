@extends('template-dashboard.template-niceadmin')

@section('title')
    Siswa
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Daftar Siswa</h1>
    </div>

    <section class="section">

        <button class="btn btn-sm btn-outline-secondary shadow-sm mb-3" id="copy-button"><i class="bi bi-copy"></i> Copy link
            registrasi</button>
        {{-- <input type="hidden"  value=""> --}}
        <div class="d-none" id="copy-text">https://pimda.tapaksuci177gowa.or.id/registrasi</div>

        <div class="card p-3">
            <div class="table-responsive">
                <table class="table table-sm table-striped table-hover nowrap datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>No. Regis</th>
                            <th>Nama Siswa</th>
                            <th>Tingkatan</th>
                            @if (Auth::guard('web')->user()->level_akun_id == 2)
                                <th>Cabang</th>
                            @else
                                <th>Cabang</th>
                            @endif
                            <th>Approval</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($siswa as $item)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>
                                    <a href="{{ url('storage/foto-pesilat/' . $item->foto_pesilat) }}" target="_blank"
                                        rel="noopener noreferrer">
                                        <img src="{{ url('storage/foto-pesilat/' . $item->foto_pesilat) }}" alt="no_image"
                                            srcset="" width="50px">
                                    </a>
                                </td>
                                <td>{{ $item->no_registrasi }}</td>
                                <td>{{ $item->nama_pesilat }}</td>
                                <td>{{ $item->tingkatan->tingkat }}</td>
                                @if (Auth::guard('web')->user()->level_akun_id == 2)
                                    <td>{{ $item->cabang->cabang }}</td>
                                @else
                                    {{-- <td>{{ $item->unit->alamat }}</td> --}}
                                    <td>{{ $item->unit->unit }}</td>
                                @endif
                                <td class="text-center">
                                    @if ($item->validasi == 1)
                                        <i class="bi bi-check-circle-fill text-success"></i>
                                    @else
                                        <i class="bi bi-x-circle-fill text-danger"></i>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('/pesilat/' . $item->id) }}" target="_blank"
                                        class="btn btn-sm btn-secondary shadow-sm"><i class="bi bi-eye"></i></a>
                                    <a href="{{ url('/pesilat/' . $item->id . '/edit') }}" target="_blank"
                                        class="btn btn-sm btn-warning shadow-sm"><i class="bi bi-pencil-square"></i></a>
                                    <form action="{{ url('pesilat/' . $item->id) }}" method="post" class="d-inline-block">
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
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#copy-button').click(function() {
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val($('#copy-text').text()).select();
                document.execCommand("copy");
                $temp.remove();

                alert("Teks berhasil disalin!");
            });
        });
    </script>
@endsection
