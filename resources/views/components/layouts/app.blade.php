<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Raker' }}</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo-biner.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo-biner.png') }}" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('niceadmin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('niceadmin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('niceadmin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('niceadmin/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container py-4">
        
        {{ $slot }}

    </div>

    {{-- jquery --}}
    <script src="{{ asset('assets/vendor/jquery/jquery-3.7.1.min.js') }}"></script>
</body>

</html>
