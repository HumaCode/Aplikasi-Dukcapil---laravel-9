<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script> --}}
    <title>
        Login E-Dukcapil
    </title>

    {{--
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    --}}


    <link rel="stylesheet" href="{{ asset('/') }}assets/css/stylelogin.css" />


    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="{{ asset('/') }}assets/js/sweetalert2.all.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    {{--
    <link href="{{ captcha_layout_stylesheet_url() }}" type="text/css" rel="stylesheet"> --}}

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/png"
        href="https://disdukcapil.pekalongankota.go.id/template/frontend/img/favicon.png">
    <link rel="apple-touch-icon" type="image/png"
        href="https://disdukcapil.pekalongankota.go.id/template/frontend/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" type="image/png" sizes="72x72"
        href="https://disdukcapil.pekalongankota.go.id/template/frontend/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" type="image/png" sizes="114x114"
        href="https://disdukcapil.pekalongankota.go.id/template/frontend/img/apple-touch-icon-114x114.png">

</head>

<body>
    <div class="container">

        {{-- flashdata --}}
        <div class="flash-data" data-flashdata="{!! session()->get('error') !!}"></div>
        <div class="flash-data-success" data-flashdata-success="{{ session('success') }}"></div>


        <div class="forms-container">
            <div class="signin-signup">
                <form action="{{ url('login/proses') }}" method="post" class="sign-in-form">
                    @csrf
                    <h2 class="title">Login E-Dukcapil</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="number" min="0" name="nik" placeholder="Masukan NIK" />
                    </div>


                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" />
                    </div>

                    <p class="social-text"><a href="password">Lupa Kata Sandi?</p></a>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>
                            @if($errors->has('g-recaptcha-response'))
                            <span class="invalid-feedback" style="display: block">
                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>


                    <input type="submit" value="Login" class="btn solid" />

                </form>


                <form action="{{ url('register/proses') }}" method="post" class="sign-up-form">
                    @csrf

                    <h2 class="title">Daftar Akun</h2>
                    <div class="input-regis">
                        <i class="fas fa-id-card"></i>
                        <input type="number" min="0" name="nik" placeholder="Nomor Induk Kependudukan" maxlength="16" />
                    </div>
                    <div class="input-regis">
                        <i class="fas fa-file-invoice"></i>
                        <input type="number" min="0" name="no_kk" placeholder="Nomor Kartu Keluarga" />
                    </div>
                    <div class="input-regis">
                        <i class="fas fa-user"></i>
                        <input type="text" name="nama_leng" placeholder="Nama Lengkap" maxlength="250" />
                    </div>
                    <div class="input-regis">
                        <i class="fas fa-phone"></i>
                        <input type="number" min="0" name="tlp" placeholder="No. Telepon" maxlength="13" />
                    </div>
                    <div class="input-regis">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" />
                    </div>
                    <div class="input-regis">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" minlength="8" />
                    </div>

                    <!-- ini captcha -->
                    {{-- <div class="g-recaptcha" data-sitekey="6LfHcSUjAAAAAMM3nZKEbxDQODUkCY4x-njz0uZH"></div> --}}

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>
                            @if($errors->has('g-recaptcha-response'))
                            <span class="invalid-feedback" style="display: block">
                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>


                    <input type="submit" class="btn" value="Sign up" />
                </form>
            </div>
        </div>


        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Anda belum memiliki akun?</h3>
                    <p>
                        Silahkan daftar akun terlebih dahulu jika anda belum memiliki akun agar bisa mengakses
                        E-Dukcapil
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        DAFTAR
                    </button>
                </div>

                <img src="{{ asset('/') }}assets/img/log.svg" class="image" alt="" />

            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Sudah memiliki akun?</h3>
                    <p>
                        Silahkan login jika anda sudah memiliki akun nikmati akses layanan E-Dukcapil dengan mudah
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="{{ asset('/') }}assets/img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    {{-- <script src="applogin.js"></script> --}}
    <script src="{{ asset('/') }}assets/js/applogin.js"></script>
    <script src="{{ asset('/') }}assets/js/myscript.js"></script>


</body>

</html>