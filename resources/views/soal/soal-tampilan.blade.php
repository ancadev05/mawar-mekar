@extends('template-dashboard.template-blank')

@section('title')
    Soal
@endsection

@section('content')
    <div class="container">

        <div class="mb-5">
            <div class="btn btn-secondary">1</div>
            <div class="btn btn-secondary">1</div>
            <div class="btn btn-secondary">1</div>
            <div class="btn btn-secondary">30</div>
        </div>

        {{-- soal --}}
        <div class="card pt-3">
            <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus ea, nemo officiis mollitia labore
                    debitis distinctio tenetur veritatis earum eos?</p>

                {{-- opsional --}}
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioDefault" id="opsi-1">
                    <label class="form-check-label" for="opsi-1">
                        Default radio
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioDefault" id="opsi-2">
                    <label class="form-check-label" for="opsi-2">
                        Default radio
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioDefault" id="opsi-3">
                    <label class="form-check-label" for="opsi-3">
                        Default radio
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioDefault" id="opsi-4">
                    <label class="form-check-label" for="opsi-4">
                        Default radio
                    </label>
                </div>
            </div>
        </div>
        {{-- /soal --}}
    </div>
@endsection
