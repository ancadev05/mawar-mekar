<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Idcard</title>

    <link href="{{ asset('niceadmin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('niceadmin/assets/css/style.css') }}" rel="stylesheet"> --}}

</head>

<body>
    <section>
        <div class="d-flex flex-wrap">
            @foreach ($idcard as $item)
                <div style="width: 9cm; height: 6.5cm; font-size: 14px;" class="me-3 mb-3 px-2 border d-flex flex-column justify-content-center align-items-center">
                    <div class="m-0 p-0 border-bottom w-100 text-center mb-2">
                        <h6 class="m-0 p-0">Ujian Kenaikan Tingkat Siswa</h6>
                        <p class="m-0 p-0">18 - 20 April 2025</p>
                    </div>
                    <table class="w-100 me-3">
                        <tr>
                            <td>No. Peserta</td>
                            <td>: {{ $item->id }}</td>
                            <td rowspan="5" class="text-end">
                                <img src="{{ url('storage/foto-pesilat/' . $item->pesilat->foto_pesilat) }}" alt="" style="width: 2cm">
                                {{-- <img src="{{ url('foto.jpg') }}" alt="" style="width: 2cm"> --}}
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Peserta</td>
                            <td>: {{ $item->pesilat->nama_pesilat }}</td>
                        </tr>
                        <tr>
                            <td>Cabang</td>
                            <td>: {{ $item->pesilat->cabang->cabang }}</td>
                        </tr>
                        <tr>
                            <td>Tingkat</td>
                            <td>: {{ $item->pesilat->tingkatan->tingkat }}</td>
                        </tr>
                        <tr>
                            <td>Kelompok</td>
                            <td>: </td>
                        </tr>
                    </table>
                </div>
            @endforeach
        </div>

    </section>

    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</body>

</html>
