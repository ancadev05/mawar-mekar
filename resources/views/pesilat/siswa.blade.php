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
                            <th>No. Regis</th>
                            <th>Nama Siswa</th>
                            <th>Tingkatan</th>
                            <th>Cabang</th>
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
                                <td>{{ $item->no_registrasi }}</td>
                                <td>{{ $item->nama_pesilat }}</td>
                                <td>{{ $item->tingkatan->tingkat }}</td>
                                <td>{{ $item->cabang->cabang }}</td>
                                <td>
                                    <a href="{{ url('/pesilat/' . $item->id) }}" target="_blank"
                                        class="btn btn-sm btn-secondary shadow-sm"><i class="bi bi-eye"></i></a>
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
