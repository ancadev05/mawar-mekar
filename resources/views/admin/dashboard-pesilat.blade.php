@extends('template-dashboard.template-niceadmin')

@section('title')
    Home
@endsection


@section('content')
    <div class="pagetitle">
        @if (Auth::guard('web')->check())
            <h1>Selamat datang, {{ Auth::guard('web')->user()->name }}</h1>
            <span>(Cabang {{Auth::guard('web')->user()->cabang->no_cabang . ' ' . Auth::guard('web')->user()->cabang->cabang }})</span>
        @else
            <h1>Selamat datang, {{ Auth::guard('pesilat')->user()->nama_pesilat }}</h1>
        @endif
    </div>

    {{-- konten --}}
    <section class="section dashboard">
        <div class="card p-3 mb-3">
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Jenjang</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kader</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>Siswa</td>
                            <td>20</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card p-3 mb-3">
            <h5 class="text-bg-dark text-center p-2">Pendekar</h5>
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Tingkat</th>
                            <th>L</th>
                            <th>P</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kader</td>
                            <td>20</td>
                            <td>20</td>
                            <td>20</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card p-3 mb-3">
            <h5 class="text-bg-primary text-center p-2">Kader</h5>
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Tingkat</th>
                            <th>L</th>
                            <th>P</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kader</td>
                            <td>20</td>
                            <td>20</td>
                            <td>20</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card p-3 mb-3">
            <h5 class="text-bg-warning text-center p-2">Siswa</h5>
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Tingkat</th>
                            <th>L</th>
                            <th>P</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Siswa 4</td>
                            <td>20</td>
                            <td>20</td>
                            <td>20</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
