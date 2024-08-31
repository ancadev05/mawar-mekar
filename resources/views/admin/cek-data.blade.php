<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta property="og:title" content="Tapak Suci 177 Gowa" name="title">
    <meta property="og:description" content="Aplikasi database Tapak Suci 177 Gowa" name="description">
    <meta property="og:keywords" content="ts, tapak, suci, gowa, tapak gowa, 177, rgc" name="keywords">
    <meta property="og:image" content="{{ asset('assets/img/logo-ts-gowa.png') }}">
    <meta property="og:url" content="https://pimda.tapaksuci177gowa.or.id">

    <meta name="author" content="RGC 177">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

    <title>Cek Data</title>

    <link href="{{ asset('adminkit/css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    {{-- bootstrap --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap5/css/bootstrap.min.css') }}">

     {{-- jquery --}}
     <script src="{{ asset('assets/vendor/jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/html2canvas.min.js') }}"></script>

    <style>
        body {
            background-image: linear-gradient(to right bottom, #dc3545, #ea503c, #f56a31, #fc8425, #ff9e17, #ff9e17, #ff9e17, #ff9e17, #fc8425, #f56a31, #ea503c, #dc3545);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>

<body class="h-100  min-vh-100">
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        @if ($pesilat)
                            {{-- car --}}
                            <div class="d-flex justify-content-center">
                                <div class="shadow p-2 bg-white my-3"
                                    style="width: 85.60mm; height: 53.98mm; font-size: 10px; background-color: #dc3545;
background-image: linear-gradient(180deg, #dc3545 0%, #ffc107 100%);"
                                    id="card">
                                    @if ($pesilat->validasi == 0)
                                        <div class="alert alert-danger text-center fw-bold">DATA BELUM DI APPROVE</div>
                                    @else
                                        <div
                                            class="d-flex align-items-center justify-content-center border-bottom border-1 border-white py-1 mb-1">
                                            <div class="ms-2 me-1">
                                                <img src="{{ asset('assets/img/logo-ts.png') }}" alt=""
                                                    width="40px">
                                            </div>
                                            <div class="fw-bold text-white">
                                                <div>PIMDA 177 KABUPATEN GOWA</div>
                                                <div>TAPAK SUCI PUTERA MUHAMMADIYAH</div>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="d-flex justify-content-between align-items-start mt-2 p-1"
                                        style="background-color: rgba(255, 255, 255, 0.3);">
                                        <div>
                                            <table>
                                                <tr>
                                                    <td width="65px">No. Regis</td>
                                                    <td class="align-text-top">:</td>
                                                    <td><b>{{ $pesilat->no_registrasi }}</b></td>
                                                </tr>
                                                <tr>
                                                    <td class="align-text-top">Nama</td>
                                                    <td class="align-text-top">:</td>
                                                    <td>
                                                        {{ strtoupper($pesilat->nama_pesilat) }}{{ $pesilat->gelar_akademik == true ? ', ' . $pesilat->gelar_akademik : $pesilat->gelar_akademik }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat Lahir</td>
                                                    <td class="align-text-top">:</td>
                                                    <td>{{ ucfirst($pesilat->tempat_lahir) }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Lahir</td>
                                                    <td class="align-text-top">:</td>
                                                    <td>{{ tanggalIndonesia($pesilat->tgl_lahir) }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tingkat</td>
                                                    <td class="align-text-top">:</td>
                                                    <td>
                                                        {{ $pesilat->tingkatan->tingkat }}
                                                        {{ $pesilat->jenjang == 1 ? $pesilat->tingkatan->singkatan : '(' . $pesilat->tingkatan->singkatan . ')' }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Cabang</td>
                                                    <td class="align-text-top">:</td>
                                                    <td>{{ $pesilat->cabang->cabang }}</td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <img src="{{ url('assets/img/tanda-tingkat/' . $pesilat->tingkatan->melati) }}"
                                                alt="foto" height="12px" class="mb-1">
                                            <img src="{{ url('storage/foto-pesilat/' . $pesilat->foto_pesilat) }}"
                                                alt="foto" width="56.69px" height="75.59px" class="mb-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- end card --}}

                            {{-- tombol --}}
                            <div class="d-flex justify-content-center">
                                @if ($pesilat->validasi == 1)
                                    <button class="btn btn-sm btn-danger shadow-sm me-1"
                                        id="download-card">Download</button>
                                @endif
                                <a href="{{ url('/pesilat/' . $pesilat->id) }}"
                                    class="btn btn-sm btn-success shadow-sm">Detail</a>
                            </div>
                            {{-- end tombol --}}

                            <script>
                                $(document).ready(function() {
                                    $("#download-card").on("click", function() {
                                        var card = $("#card");

                                        html2canvas(card[0], {
                                            scale: 3, // Meningkatkan skala untuk kualitas lebih tinggi
                                            useCORS: true // Opsional: gunakan ini jika ada konten dari domain lain
                                        }).then(function(canvas) {
                                            // Buat elemen link untuk mengunduh gambar
                                            var link = $("<a>").attr("download", "{{ $pesilat->no_registrasi . '.png' }}")
                                                .attr("href", canvas.toDataURL("image/png"))[0];
                                            link.click();
                                        });
                                    });
                                });
                            </script>
                        @endif



                        {{-- logo --}}
                        <div class="d-flex justify-content-center py-4">
                            <a href="#" class="logo d-flex flex-column align-items-center w-auto ">
                                <img src="assets/img/logo-ts.png" alt="" class="mb-2" width="150px">
                            </a>
                        </div>
                        {{-- end logo --}}

                        {{-- form --}}
                        <div class="card p-4 shadow-lg"
                            style="background-color: rgba(255, 255, 255, 0.18); 
                            color: rgba(255, 255, 255, 0.18);">

                            <form action="{{ url('/') }}" method="post" class="row g-3 needs-validation"
                                novalidate>
                                @csrf

                                <div class="input-group mb-2">
                                    <input type="search" name="no_registrasi" class="form-control shadow"
                                        id="no_registrasi" placeholder="Masukkan No. Registrasi"
                                        value="{{ Request::get('registrasi') }}" required>
                                    <button class="btn btn-warning shadow" type="submit">Cek</button>
                                    <span class="invalid-feedback text-white">Please enter your no_registrasi!</span>
                                </div>

                                <div class="col-12">
                                    <a href="{{ url('/registrasi') }}" target="_blank"
                                        class="btn btn-warning shadow w-100">Registrasi</a>
                                </div>
                            </form>
                        </div>
                        {{-- end form --}}

                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- jquery --}}
    <script src="{{ asset('assets/vendor/jquery/jquery-3.7.1.min.js') }}"></script>
    {{-- app --}}
    <script src="{{ asset('adminkit/js/app.js') }}"></script>
    <script src="{{ asset('assets/vendor/html2canvas.min.js') }}"></script>
    <script src="{{ asset('assets/costum-js/script.js') }}"></script>

</body>

</html>
