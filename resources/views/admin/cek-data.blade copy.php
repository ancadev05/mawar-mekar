<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Registrasi</title>

    <meta property="og:title" content="Tapak Suci 177 Gowa" name="title">
    <meta property="og:description" content="Aplikasi database Tapak Suci 177 Gowa" name="description">
    <meta property="og:keywords" content="ts, tapak, suci, gowa, tapak gowa, 177, rgc" name="keywords">
    <meta property="og:image" content="{{ asset('assets/img/logo-ts-gowa.png') }}">
    <meta property="og:url" content="https://pimda.tapaksuci177gowa.or.id">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo-biner.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo-biner.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('niceadmin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('niceadmin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('niceadmin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('niceadmin/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('niceadmin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('niceadmin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('niceadmin/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">


    {{-- sweetalert2 --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/vendor/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">

    {{-- costum css --}}
    <link rel="stylesheet" href="{{ asset('assets/costum-css/style.css') }}" rel="stylesheet">



    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="d-flex flex-col justify-content-center align-items-center min-vh-100"
    style="background-image: linear-gradient(to right bottom, #dc3545, #ea503c, #f56a31, #fc8425, #ff9e17, #ff9e17, #ff9e17, #ff9e17, #fc8425, #f56a31, #ea503c, #dc3545);">

    <div class="" width="300px">
        {{-- car --}}
        <div class="card shadow p-2 bg-white mb-3" style="width: 85.60mm; height: 53.98mm; font-size: 10px"
            id="card">
            <div class="d-flex align-items-center border-bottom border-1 border-dark py-1 mb-1">
                <div class="ms-2 me-1">
                    {{-- <img src="{{ asset('assets/img/logo-ts.png') }}" alt="" width="40px"> --}}
                </div>
                <div class="fw-bold">
                    <div>PIMDA 177 GOWA</div>
                    <div>TAPAK SUCI PUTERA MUHAMMADIYAH</div>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div>
                    <table>
                        <tr>
                            <td>No. Regis</td>
                            <td>: No. Regis</td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>: Nama</td>
                        </tr>
                        <tr>
                            <td>Tempat Tanggal Lahir</td>
                            <td>: Tempat Tanggal Lahir</td>
                        </tr>
                    </table>
                </div>

                <div class="d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ url('assets/img/tanda-tingkat/k4.png') }}" alt="foto" height="13px"
                        class="mb-1">
                    <img src="{{ url('storage/foto-pesilat/iswandi.jpg') }}" alt="foto" width="56.69px"
                        height="75.59px" class="mb-1">
                </div>
            </div>
        </div>
        {{-- end card --}}

        {{-- tombol --}}
        <div>
            <button class="btn btn-sm btn-danger shadow-sm" id="download-card">Download</button>
            <button class="btn btn-sm btn-success shadow-sm">Detail</button>
        </div>
        {{-- end tombol --}}

        {{-- logo --}}
        <div class="d-flex justify-content-center py-4">
            <a href="#" class="logo d-flex flex-column align-items-center w-auto ">
                <img src="assets/img/logo-ts.png" alt="" class="mb-2" id="logo-login" width="60px">
            </a>
        </div>
        {{-- end logo --}}

        {{-- form --}}
        <div class="card p-4 shadow-lg"
            style="background-color: rgba(255, 255, 255, 0.18); 
                            color: rgba(255, 255, 255, 0.18);">

            <form action="{{ url('cari-pesilat') }}" method="GET" class="row g-3 needs-validation" novalidate>
                @csrf

                <div class="input-group mb-2">
                    <input type="search" name="no_registrasi" class="form-control shadow" id="no_registrasi"
                        placeholder="Masukkan No. Registrasi" value="{{ Request::get('registrasi') }}"" required>
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

    {{-- jquery --}}
    <script src="{{ asset('assets/vendor/jquery/jquery-3.7.1.min.js') }}"></script>


    {{-- sweetalert2 --}}
    <script src="{{ asset('assets/vendor/vendor/sweetalert2/sweetalert2.min.js') }}"></script>
    {{-- coutum js --}}
    <script src="{{ asset('assets/costum-js/script.js') }}"></script>

    {{-- alert --}}
    @include('template-dashboard.komponen-niceadmin.alert')

    {{-- script costum --}}
    @yield('script')

</body>

</html>
