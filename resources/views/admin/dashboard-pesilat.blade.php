@extends('template-dashboard.template-niceadmin')

@section('title')
    Home
@endsection


@section('content')
    <div class="pagetitle">
        @if (Auth::guard('web')->check())
            <h1>Selamat datang, {{ Auth::guard('web')->user()->name }}</h1>
            <span>(Cabang
                {{ Auth::guard('web')->user()->cabang->no_cabang . ' ' . Auth::guard('web')->user()->cabang->cabang }})</span>
        @else
            <h1>Selamat datang, {{ Auth::guard('pesilat')->user()->nama_pesilat }}</h1>
        @endif
    </div>

    {{-- konten --}}
    <section class="section dashboard">
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
                            <img src="{{ asset('assets/img/logo-ts.png') }}" alt="" width="40px">
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
                        <img src="{{ url('assets/img/tanda-tingkat/' . $pesilat->tingkatan->melati) }}" alt="foto"
                            height="12px" class="mb-1">
                        <img src="{{ url('storage/foto-pesilat/' . $pesilat->foto_pesilat) }}" alt="foto"
                            width="56.69px" height="75.59px" class="mb-1">
                    </div>
                </div>
            </div>
        </div>
        {{-- end card --}}

        {{-- tombol --}}
        <div class="d-flex justify-content-center">
            @if ($pesilat->validasi == 1)
                <button class="btn btn-sm btn-danger shadow-sm me-1" id="download-card">Download</button>
            @endif
            <a href="{{ url('/pesilat/' . $pesilat->id) }}" class="btn btn-sm btn-success shadow-sm">Detail</a>
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
    </section>
@endsection
