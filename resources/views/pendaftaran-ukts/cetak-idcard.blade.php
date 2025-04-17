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
                <div style="width: 10.2cm; height: 6.5cm;" class="me-2">
                    <table class="table">
                        <tr>
                            <td>No. Peserta</td>
                            <td>: {{ $item->id }}</td>
                            <td rowspan="5">
                                <img src="{{ url('storage/foto-pesilat/' . $item->pesilat->foto_pesilat) }}"
                                    alt="" width="3cm">
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
