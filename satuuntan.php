<html><head>
    <meta charset="UTF-8">
    <title>Sistem Administrasi Terintegrasi</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Sistem Informasi Akademik solusi terbaik Universitas. Langsung Bisa Digunakan, Tidak Ribet dan Pelaporan Beres.">
    <meta name="keywords" content="">
    <meta name="author" content="siAkad Cloud">
    <link href="https://assets.siakadcloud.com/assets/v1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://assets.siakadcloud.com/assets/v1/css/customs/login-v2.css?240723" rel="stylesheet" type="text/css">
    <link rel="icon" type="img/png" href="https://assets.siakadcloud.com/uploads/untan/logoaplikasi/1440.jpg" sizes="16x16">

            <style type="text/css">
            .login-page .form-box .univ-identity-box {
                background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('https://assets.siakadcloud.com/uploads/untan/bgaplikasi/1440.jpg') bottom;
                background-size: cover;
            }

            @media (min-width: 768px) {
                .login-page .form-box .univ-identity-box {
                    border-radius: 10px 0 0 10px;
                }
            }
        </style>
        <style type="text/css">
        html,
        body {
            background: #f2f2f2 url('https://assets.siakadcloud.com/assets/v1/img/pattern/pat_04.png') repeat !important;
			min-height: 100vh;
        }

        .password {
            position: relative;
        }

        .showbtn {
            cursor: pointer;
            overflow: hidden;
            right: 15px;
            position: absolute;
            top: 10px;
            cursor: pointer;
        }

        .login-page .form-box .form-login img.logo {
            max-width: 90%;
        }

        .login-page .form-box {
            border-radius: 10px;
            box-shadow: 0 0 35px 0 rgb(154 161 171 / 20%);
        }

        .btn {
            border-radius: .3rem;
        }

        .btn-login {
            font-size: 14px;
        }

        .login a {
            font-size: 14px;
        }

        .title-login-email {
            display: flex;
            position: relative;
            padding: 1.25rem 0;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .title-line {
            display: flex;
            width: 100%;
            border-top: 1px solid #E0E3E7;
        }

        .title-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 14px;
            line-height: 1.25rem;
            font-weight: 500;
            color: #99A1AE;
            background-color: #ffffff;
            width: 165px;
            text-align: center;
        }

        .form-group {
            font-size: 14px;
        }

        .form-group strong {
            font-weight: 500;
        }

        p {
            font-size: 14px;
        }

        .input-line {
            font-size: 13px;
        }

        @media (min-width: 768px) {
            .form-login {
                padding: 20px 30px !important;
            }
        }

        .div_loading {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 999;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <style type="text/css">
        .icon-input, a,.text-brand {
            color:#0067bd;
        }
        .btn-primary, .alert-primary, .label-primary, body > header .user-menu .dropdown-menu > .user-header{
            background-color:#0067bd;
        }
        body > header .user-menu .dropdown-menu:after{
            border-color: #0067bd;
        }
        .btn-primary:hover,.btn-primary:focus, .btn-primary.focus{
            background-color: #004680;
        }
        a:hover, a:focus, a :active, a :focus{
            color: #004680;
        }
        .btn-primary:hover{
            border-color: #004680;
        }
    </style><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-9GSZKDCXHL&amp;cx=c&amp;gtm=4e5a80"></script><script src="https://www.googletagmanager.com/gtag/js?l=dataLayer" async=""></script></head>

<body class="login-page" style>
    <div class="container">
        <div class="row">
            <div class="form-box col-md-8 col-sm-10 col-xs-12">
                <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 univ-identity-box">
                    <div class="univ-text">
                        <h4 class="welcome text-light">Selamat Datang</h4>
                        <div class="clearfix"></div>
                        <h2 class="no-margin text-light">Sistem Administrasi Terintegrasi</h2>
                        <h3 class="no-margin"><b>Universitas Tanjungpura</b></h3>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 form-login" align="center">
                    <img src="https://assets.siakadcloud.com/uploads/untan/logoaplikasi/1440.jpg" class="logo" style="margin-bottom: 30px;">
                    <b>
                        <span class="text-center" style="font-size:20px; font-weight: 600; display: block">Masuk dan Verifikasi</span>
                    </b>
                    <p style="margin-bottom: 15px;">
                        <strong>Baru!</strong> Nikmati kemudahan sistem autentikasi tunggal untuk mengakses semua layanan dengan satu akun.
                    </p>
                    <form method="post" action="login.php">
						<div class="alert alert-danger alert-dismissable" style="display:none;">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
							<strong>Akun Pengguna</strong>
							dan 
							<strong>Password</strong>
							harus diisi
						</div>
                        <div class="alert alert-danger alert-dismissable temp-error-xhr" style="display:none;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <span id="error-msg"></span>
                        </div>
                        <div class="login">
                                                            <div class="row">
                                                                        <div class="col-md-12">
                                        <a href="https://sso.sevima.com/sessions/google?client_id=84f03a0e-a33a-461e-ba01-4eeb500bcf31&amp;redirect_uri=https://satu.untan.ac.id/gate/authsso&amp;response_type=code" class="btn btn-default btn-block" style="font-weight: 600;">
                                            <img src="https://quantum.sevima.com/assets/images/logo-google.svg" alt=""> Google
                                        </a>
                                    </div>
                                                                    </div>
                                <div class="title-login-email">
                                    <span class="title-line"></span>
                                    <p class="title-text">atau lanjutkan dengan</p>
                                </div>
                            
                            <div class="form-group" style="text-align: left">
                                <span><strong>Email/akun pengguna</strong></span><span style="color:red">*</span>
                                <input type="text" name="email" id="email" class="form-control input-line" placeholder="Masukkan email/NIM/NIP/username yang terdaftar" required="true" autocomplete="off" value="">
                            </div>
                            <div class="form-group" style="text-align: left; margin-bottom: -5px;">
                                <span><strong>Password</strong></span><span style="color:red">*</span>
                                <div class="password">
                                    <input type="password" id="password" name="password" class="form-control input-line" placeholder="Masukkan password" required="true" autocomplete="off">
                                    <span id="iconshow" name="iconshow" onclick="showPass()" class=" showbtn fa fa-eye-slash"></span>
                                </div>
                            </div>
                            <a style="font-size: 13px; padding: 0px 0px 25px 0px;text-decoration-line: underline;font-weight: 600;" href="https://sso.sevima.com/users/password-reset?client_id=84f03a0e-a33a-461e-ba01-4eeb500bcf31&amp;redirect_uri=https://satu.untan.ac.id/gate/login" class="text-center pull-right">Lupa kata sandi?</a>
                            <div class="form-group" align="center">
                                <button type="submit" class="btn btn-flat btn-primary btn-block btn-login">Masuk</button>
                            </div>
                        </div>
                        <input type="hidden" name="__token" value="NzU4MzBiZTMyOGY4ZTUxMDQ0NGI5ZjFiODdjMTY4OTg=">
                        <input type="hidden" name="_token" id="token">
                        <input type="hidden" name="client_id" value="84f03a0e-a33a-461e-ba01-4eeb500bcf31">
                        <input type="hidden" name="redirect_uri" value="https://satu.untan.ac.id/gate/authsso">
                    </form>
                    <div style="margin-top: 30px; font-size: 14px">
                        <small>
                            <span class="text-center text-muted">Powered By</span>
                        </small>
                        <span class="text-center text-grey"><a href="https://sevima.com/" target="_blank"><img width="120" src="https://assets.siakadcloud.com/assets/v1/img/logo-sevima-platform-200.png"></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- jQuery 2.0.2 -->
    <script src="https://assets.siakadcloud.com/assets/v1/js/external/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://assets.siakadcloud.com/assets/v1/js/bootstrap.min.js" type="text/javascript"></script>
    
<script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-analytics.js"></script>
<script>
    if(firebaseConfig == undefined){
        var firebaseConfig = {
            apiKey: "AIzaSyBE85GSM4dBUZ8m9aoJZVpSOQltwQZttDc",
            authDomain: "siakad-cloud-2.firebaseapp.com",
            databaseURL: "https://siakad-cloud-2.firebaseio.com",
            projectId: "siakad-cloud-2",
            storageBucket: "siakad-cloud-2.appspot.com",
            messagingSenderId: "735352312839",
            appId: "1:735352312839:web:9aa5508b27862f29a146a2",
            measurementId: "G-9GSZKDCXHL"
        };
        firebase.initializeApp(firebaseConfig);
    }
</script>
    <script>
        firebase.analytics();
    </script>

    <script type="text/javascript">
        function showPass() {
            if (document.getElementById("password").type == 'password') {
                document.getElementById("password").type = 'text';
                document.getElementById("iconshow").classList.remove('fa-eye-slash');
                document.getElementById("iconshow").classList.add('fa-eye');
            } else {
                document.getElementById("password").type = 'password';
                document.getElementById("iconshow").classList.remove('fa-eye');
                document.getElementById("iconshow").classList.add('fa-eye-slash');
            }
        }

        $('[data-type="login"]').click(function() {
            var email = $('#email').val().trim();
            var password = $('#password').val().trim();
            $('.alert-danger').hide();

            if (email === '' || password === '') {
                $('.alert-danger').first().show();
                return false;
            }

            // Kirim data via AJAX
            $.ajax({
                url: 'process_login.php',
                type: 'POST',
                data: {
                    email: email,
                    password: password,
                    __token: $('input[name="__token"]').val(),
                    _token: $('#token').val(),
                    client_id: $('input[name="client_id"]').val(),
                    redirect_uri: $('input[name="redirect_uri"]').val()
                },
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        // REDIRECT KE DASHBOARD
                        window.location.href = response.redirect;
                    } else {
                        // Tampilkan pesan error
                        $('.temp-error-xhr').show();
                        $('#error-msg').text(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    $('.temp-error-xhr').show();
                    $('#error-msg').text('Terjadi kesalahan sistem. Silakan coba lagi.');
                    console.error(error);
                }
            });

            return false; // Prevent form submit
        });

        $(function() {
           $('#email, #password').on('input', function() {
                $('.alert-danger').hide();
            });
    
            $('#email, #password').keypress(function(e) {
                if (e.which == 10 || e.which == 13) {
                    $('[data-type="login"]').trigger('click');
                }
            });
        });
    </script>
        
            <script type="module" src="https://navigation.sevima.com/build/assets/navigation.js"></script>
        <script>
        $(document).ready(function() {
            window.addEventListener("navigation:load", ({
                detail
            }) => {
                detail?.flush();
            })
        });
    </script>

    

<nav-reset-confirmation><template shadowrootmode="open"><style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
            @import url('https://navigation.sevima.com/build/assets/navigation.css');
        </style><div id="navigation-reset-modal" style="">
            <div class="navigation-reset-modal__content">
                <div class="navigation-reset-modal__content__body">
                    <h2>Apakah Anda yakin mau reset tanda centang di panduan ini?</h2>
                    <p>Setiap tahapan yang sudah anda tandai selesai akan terhapus, tetapi tidak dengan data yang telah di isi.</p>
                </div>
                <div class="navigation-reset-modal__content__footer">
                    <button id="close" class="primary-outline">Batalkan</button>
                    <button id="reset-submit" class="primary-solid">Reset</button>
                </div>
            </div></div></template></nav-reset-confirmation></body></html>