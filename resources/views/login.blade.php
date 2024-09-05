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

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo-ts-gowa.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo-ts-gowa.png') }}" rel="apple-touch-icon">

    {{-- <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" /> --}}

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

                        {{-- logo --}}
                        <div class="d-flex justify-content-center py-4">
                            <a href="{{ url('/mawar-mekar') }}"
                                class="logo d-flex flex-column align-items-center w-auto ">
                                <img src="assets/img/logo-ts.png" alt="" class="mb-2" width="150px">
                            </a>
                        </div>
                        {{-- end logo --}}

                        {{-- form --}}
                        <div class="card p-4 shadow-lg"
                            style="background-color: rgba(255, 255, 255, 0.18); 
                            color: rgba(255, 255, 255, 0.18);">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $item)
                                        {{ $item }}
                                    @endforeach
                                </div>
                            @endif

                            <form action="" method="POST" class="row g-3 needs-validation" novalidate>
                                @csrf

                                <div class="col-12">
                                    {{-- <label for="username" class="form-label">Username</label> --}}
                                    <input type="text" name="username" class="form-control" id="username"
                                        placeholder="Username" value="{{ old('username') }}" required>
                                    <div class="invalid-feedback">Please enter your username!</div>
                                </div>

                                <div class="col-12">
                                    {{-- <label for="yourPassword" class="form-label">Password</label> --}}
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Password" required>
                                    <div class="invalid-feedback">Please enter your password!</div>
                                </div>

                                <div class="col-12 d-flex justify-content-center">
                                    <button class="btn btn-danger w-50" type="submit">Login</button>
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
