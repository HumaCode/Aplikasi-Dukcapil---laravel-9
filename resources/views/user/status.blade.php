@extends('layouts.main')

@section('content')

<br><br><br><br>
<!-- Cek Status Pengajuan -->
<div class="container-xxl py-4" id="status">
    <div class="container">
        <div class="row g-5 flex-column-reverse flex-lg-row">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-4">Cek Status Pengajuan</h1>

                <form>
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                                <label for="subject">Kode Pelayanan</label>
                            </div>
                        </div>
                        <!-- ini captcha -->
                        <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>

                        <div class="col-12">
                            <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">CEK
                                STATUS</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <img img class="img-fluid rounded" data-wow-delay="0.5s" src="assets/img/2678409-removebg-preview.png">
            </div>
        </div>
    </div>
</div>
<!-- Cek Status End -->


@endsection