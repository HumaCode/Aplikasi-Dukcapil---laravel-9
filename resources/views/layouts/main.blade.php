<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E-Service | {{ $title }} </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    {{--
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    --}}

    <!-- Libraries Stylesheet -->
    <link href="assets/libuser/animate/animate.min.css" rel="stylesheet">
    <link href="assets/libuser/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/cssuser/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/png"
        href="https://disdukcapil.pekalongankota.go.id/template/frontend/img/favicon.png">
    <link rel="apple-touch-icon" type="image/png"
        href="https://disdukcapil.pekalongankota.go.id/template/frontend/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" type="image/png" sizes="72x72"
        href="https://disdukcapil.pekalongankota.go.id/template/frontend/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" type="image/png" sizes="114x114"
        href="https://disdukcapil.pekalongankota.go.id/template/frontend/img/apple-touch-icon-114x114.png">

    <!-- Template Stylesheet -->
    <link href="{{ asset('/') }}assets/cssuser/style.css" rel="stylesheet">


    <!-- Ini Captcha -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>

    <!-- Main Style Css -->
    <link href="{{ asset('/') }}assets/cssuser/form.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">E-Dukcapil</h1>

                </a>
                <button class="navbar-toggler rounded-pill" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="{{ url('home') }}" class="nav-item nav-link {{ ($title == " Home") ? 'active' : ''
                            }}">Home</a>
                        <a href="{{ url('status') }}" class="nav-item nav-link {{ ($title == " Status") ? 'active' : ''
                            }}">Cek
                            Status</a>
                        <a href="#" class="nav-item nav-link {{ ($title == " Berkas") ? 'active' : '' }}">Berkas</a>
                        <a href="{{ url('bantuan') }}" class="nav-item nav-link {{ ($title == " Bantuan") ? 'active'
                            : '' }}">Bantuan</a>
                        <a href="{{ url('data-dukung') }}" class="nav-item nav-link {{ ($title == " Data Dukung")
                            ? 'active' : '' }}">Data Dukung</a>

                        <a href="{{ url('kebijakan') }}" class="nav-item nav-link {{ ($title == " Kebijakan Privasi")
                            ? 'active' : '' }}">Kebijakan</a>
                    </div>
                    <button data-toggle="modal" data-target="#exampleModal"
                        class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Logout</button>


                </div>
            </nav>

            @yield('conten_home')

        </div>
        <!-- Navbar & Hero End -->

        <!-- Bagian Layanan -->
        @yield('content')
        <!-- Bagian Layanan End -->



        <div class="container-fluid bg-dark text-body footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-4">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-2 posisi">
                        <p class="section-title text-white h5 mb-4">Menu<span></span></p>
                        <a class="btn btn-link" href="">Layanan</a>
                        <a class="btn btn-link" href="">Cek Status</a>
                        <a class="btn btn-link" href="">Berkas</a>
                        <a class="btn btn-link" href="">Data Dukung</a>
                        <a class="btn btn-link" href="">Bantuan</a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <p class="section-title text-white h5 mb-4">Alamat<span></span></p>
                        <p class="text-white"><i class="fa fa-map-marker-alt me-3"></i>Jl. Majapahit No.18 Kota
                            Pekalongan
                        </p>
                        <p class="text-white"><i class=" fa fa-phone-alt me-3"></i>(0285) 422814</>
                        <p class="text-white"><i class=" fa fa-envelope me-3"></i>dindukcapil.pekalongankota@gmail.com
                            </>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>

                    </div>
                    <div class="col-md-6 col-lg-3">
                        <img src="assets/img/pekalongan.png" width="100%">
                    </div>
                    <div class="container px-lg-5">
                        <div class="copyright">

                            <div class="text-center text-md-start mb-3 mb-md-0">
                                2022 &copy; <a class="border-bottom" href="#">Dinas Dukcapil Kota Pekalongan</a>, All
                                Right
                                Reserved. Designed By Diskominfo Kota Pekalongan
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Footer End -->

                {{--
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div> --}}


                <!-- Back to Top -->
                <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
            </div>

            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="assets/libuser/wow/wow.min.js"></script>
            <script src="assets/libuser/easing/easing.min.js"></script>
            <script src="assets/libuser/waypoints/waypoints.min.js"></script>
            <script src="assets/libuser/counterup/counterup.min.js"></script>
            <script src="assets/libuser/owlcarousel/owl.carousel.min.js"></script>

            <!-- Template Javascript -->
            <script src="assets/js/main.js"></script>
            <script src="assets/js/jquery-3.3.1.min.js"></script>
            <script src="assets/js/jquery.steps.js"></script>
            <script src="assets/js/form.js"></script>

        </div>
    </div>

</body>

</html>