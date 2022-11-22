@extends('layouts.main')

@section('content')

<!-- Menu Bantuan Disini -->
<div class="container-xxl bg-light py-6" id="bantuan">
    <div class="container">
        <div class="row text-center">
            <h1 class="display-3 fw-bold">Bantuan</h1>
            <div class="heading-line"></div>
            <p class="lead">Semoga bantuan dibawah ini berguna bagi anda yang membutuhkan</p><br>
        </div>

        <div class="row g-5 py-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" src="assets/img/Pelapor.png">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="d-flex align-items-center mb-4">
                    <h1 class="mb-0">01</h1>
                    <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                    <h5 class="mb-0">Pelapor</h5>
                </div>
                <p class="mb-4">Siapa yang dapat menjadi Pelapor dan melakukan pendaftaran?</p>
                <p><i class="fa fa-check-circle text-primary me-3"></i>Yang dapat menjadi Pelapor dan melakukan
                    pendaftaran adalah warga yang
                    terdaftar di database kependudukan Kota Semarang dan berusia 17 tahun ke atas.</p>
            </div>
        </div>
        <div class="row g-5 py-5 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="d-flex align-items-center mb-4">
                    <h1 class="mb-0">02</h1>
                    <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                    <h5 class="mb-0">Pendaftar</h5>
                </div>
                <p class="mb-4">Tata Cara Pendaftaran</p>
                <p><i class="fa fa-check-circle text-primary me-3"></i>Untuk melakukan pendaftaran silahkan klik
                    Login</p>
                <p><i class="fa fa-check-circle text-primary me-3"></i>Klik Daftar Sekarang</p>
                <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>Masukkan NIK, Nomor KK, Nama
                    Lengkap, No. Telepon(WA), Email, Password, dan Pertanyaan Keamanan pada Formulir Pendaftaran
                </p>
                <br>
                <p><i class="fa fa-check-circle text-primary me-3"></i>Klik Daftar Sekarang</p>
                <p><i class="fa fa-check-circle text-primary me-3"></i>Login menggunakan NIK dan Password yang
                    telah
                    dibuat</p>
                <p><i class="fa fa-check-circle text-primary me-3"></i>Setelah berhasil login, Pelapor harus
                    melengkapi terlebih dahulu Halaman Profil sebelum mengajukan permohonan</p>

            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" src="assets/img/Pendaftaran.png">
            </div>
        </div>
        <div class="row g-5 py-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" src="assets/img/informasiytb.png">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="d-flex align-items-center mb-4">
                    <h1 class="mb-0">03</h1>
                    <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                    <h5 class="mb-0">Infromasi</h5>
                </div>
                <p class="mb-4">Youtube</p>
                <p><i class="fa fa-check-circle text-primary me-3"></i>Untuk video tutorial dapat dilihat pada
                    channel Youtube : Online Dukcapil Kota Pekalongan</p>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Menu Bantuan -->



@endsection