<!DOCTYPE html>
<html>

<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap5/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> --}}
    <style>
        body {
            background-image: linear-gradient(to right bottom, #dc3545, #ea503c, #f56a31, #fc8425, #ff9e17, #ff9e17, #ff9e17, #ff9e17, #fc8425, #f56a31, #ea503c, #dc3545);
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
            min-height: 100vh
        }

        .login-form {
            width: 500px;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                    {{-- card --}}
                    <div class="d-flex flex-column align-items-center justify-content-center mt-3">
                        <div class="shadow p-2 bg-white mb-3" style="width: 85.60mm; height: 53.98mm; font-size: 10px"
                            id="card">
                            <div class="d-flex align-items-center border-bottom border-1 border-dark pb-1 mb-1">
                                <div class="ms-2 me-1">
                                    <img src="{{ asset('assets/img/logo-ts.png') }}" alt="" width="40px">
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
                                        <tr>
                                            <td>Cabang</td>
                                            <td>: Ccabang</td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ url('assets/img/tanda-tingkat/k4.png') }}" alt="foto"
                                        height="13px" class="mb-1">
                                    <img src="{{ url('storage/foto-pesilat/iswandi.jpg') }}" alt="foto"
                                        width="56.69px" height="75.59px" class="mb-1">
                                    {{-- <img src="{{ url('assets/img/barcode.png') }}" alt="foto" width="40px" class="mb-1"> --}}
                                </div>
                            </div>
                        </div>

                        {{-- tombol --}}
                        <div>
                            <button class="btn btn-sm btn-danger shadow-sm" id="download-card">Download</button>
                            <button class="btn btn-sm btn-success shadow-sm">Detail</button>
                        </div>
                        {{-- end tombol --}}
                    </div>
                    {{-- end card --}}



                    {{-- logo --}}
                    <div class="d-flex justify-content-center py-4">
                        <a href="#" class="logo d-flex flex-column align-items-center w-auto ">
                            <img src="assets/img/logo-ts.png" alt="" class="mb-2" id="logo-login"
                                width="150px">
                        </a>
                    </div>
                    {{-- end logo --}}

                    {{-- form --}}
                    <div class="card p-4 shadow-lg"
                        style="background-color: rgba(255, 255, 255, 0.18); 
                            color: rgba(255, 255, 255, 0.18);">

                        <form action="{{ url('cari-pesilat') }}" method="GET" class="row g-3 needs-validation"
                            novalidate>
                            @csrf

                            <div class="input-group mb-2">
                                <input type="search" name="no_registrasi" class="form-control shadow"
                                    id="no_registrasi" placeholder="Masukkan No. Registrasi"
                                    value="{{ Request::get('registrasi') }}"" required>
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
    </main>
    {{-- <div class="login-form">

        
    </div> --}}

    {{-- jquery --}}
    <script src="{{ asset('assets/vendor/jquery/jquery-3.7.1.min.js') }}"></script>
    {{-- bootstrap --}}
    <script src="{{ asset('assets/vendor/bootstrap5/js/bootstrap.bundle.min.js') }}"></script>
    {{-- html2canvas --}}
    <script src="{{ asset('assets/vendor/html2canvas.min.js') }}"></script>
    {{-- coutum js --}}
    {{-- <script src="{{ asset('assets/costum-js/script.js') }}"></script> --}}

    <script>
        $(document).ready(function() {
            $("#download-card").on("click", function() {
                var card = $("#card");

                html2canvas(card[0], {
                    scale: 3, // Meningkatkan skala untuk kualitas lebih tinggi
                    useCORS: true // Opsional: gunakan ini jika ada konten dari domain lain
                }).then(function(canvas) {
                    // Buat elemen link untuk mengunduh gambar
                    var link = $("<a>").attr("download", "kartu.png").attr("href", canvas.toDataURL(
                        "image/png"))[0];
                    link.click();
                });
            });
        });
    </script>
</body>

</html>
