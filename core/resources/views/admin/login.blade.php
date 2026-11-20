<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#5955D1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Mahobiya Films') }} | Login</title>

    <link rel="icon" href="{{ asset('admin-theme/assets/images/favicon.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/flaticon/css/all/all-single.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/lucide/lucide.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/simplebar/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/node-waves/waves.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-theme/assets/css/styles.css') }}">
</head>

<body>
    <div class="page-layout">

        <div class="auth-frame-wrapper">
            <div class="row g-0 h-100">

                <div class="col-xl-8 col-lg-7 col-md-6">
                    <div class="auth-frame"
                        style="background-image:url('{{ asset('admin-theme/assets/images/auth-frame.avif') }}')"></div>
                </div>

                <div class="col-xl-4 col-lg-5 col-md-6 align-self-center">
                    <div class="p-4 px-sm-5 py-sm-3 maxw-450px m-auto">

                        <div class="mb-4 text-center">
                            {{-- <img src="{{ asset('admin-theme/assets/images/admin-logo.avif') }}" height="60"> --}}
                            <img src="{{ asset('admin-theme/assets/images/admin-logo.avif') }}" height="60"
                                class="app-logo mb-6" alt="logo">
                        </div>

                        <div class="mb-3">
                            <h5 class="mb-1">Welcome to Mahobiya Films</h5>
                            <p class="mb-4">Sign in to access your secure admin dashboard.</p>
                            {{-- <p class="mb-0 small">Looking for a Gate Pass? <a href="{{ route('auth.register') }}">Click here to register</a></p> --}}
                        </div>

                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form id="loginForm" action="{{ route('auth.loginSubmit') }}" method="post"
                            autocomplete="off">
                            @csrf

                            @if (session('error_message'))
                                <div class="alert alert-danger">
                                    <i class="fi fi-rr-cross fs-6 me-2"></i> {{ session('error_message') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <input type="hidden" id="hiddenSalt" name="salt">

                            <div class="mb-4">
                                <label class="form-label">Username / Email</label>
                                <input placeholder="Enter your email or username" type="text" class="form-control" id="txtUser" name="username"
                                    value="{{ old('username') }}">
                                <small class="text-danger error"></small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Password</label>
                                <div class="password-wrapper">
                                    <input autocomplete="off" type="password" class="form-control pe-5 password-input"
                                        id="txtPass" placeholder="********" name="password">
                                    <button type="button" id="togglePassword" class="toggle-password">
                                        <i class="close fi fi-rr-eye-crossed"></i>
                                        <i class="open fi fi-rr-eye"></i>
                                    </button>
                                </div>
                                <small class="text-danger error"></small>
                            </div>

                            <div class="mb-4">
                                <input type="text" class="form-control" id="txtCaptcha" name="txtCaptcha"
                                    placeholder="Enter CAPTCHA">
                                <small class="text-danger error"></small>
                            </div>

                            <div class="mb-4 text-left p-2">
                                <img style="width: 130px;" id="captcha-image" src="{{ url('/captcha-image') }}">
                                <button type="button" id="reload-captcha" class="btn btn-sm btn-dark mt-2"><i
                                        class="fi fi-rr-refresh"></i></button>
                            </div>


                            <div class="mb-3">
                                <button type="submit" id="btnLogin"
                                    class="btn btn-lg btn-primary w-100">Login</button>
                            </div>
                            <div class="d-flex justify-content-end align-items-center mb-3">
                                <a href="{{ route('auth.forgotPassword') }}" class="text-primary small fw-semibold">
                                    Forgot Password?
                                </a>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="{{ asset('admin-theme/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-theme/assets/js/sha512.js') }}"></script>

    <script>
        function genSalt(n = 6) {
            return [...Array(n)].map(() => "ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz123456789" [Math.floor(Math
                .random() * 58)]).join('');
        }

        function captchaCall() {
            fetch('/captcha-image')
                .then(response => response.blob())
                .then(blob => {
                    var imgUrl = URL.createObjectURL(blob);
                    $('#captcha-image').attr('src', imgUrl);
                })
                .catch(error => console.error('Error fetching image:', error));
        }

        $('#reload-captcha').click(captchaCall);

        $('#togglePassword').click(() => {
            $('#txtPass').attr('type', $('#txtPass').attr('type') === 'password' ? 'text' : 'password');
        });

        $('#btnLogin').click(function(e) {
            e.preventDefault();
            $('.error').text('');
            let u = txtUser.value.trim(),
                p = txtPass.value.trim(),
                c = txtCaptcha.value.trim(),
                ok = true;
            if (!u) {
                $('#txtUser').next('.error').text('Username required');
                ok = false;
            }
            if (!p) {
                $('#txtPass').closest('.mb-4').find('.error').text('Password required');
                ok = false;
            }
            if (!c) {
                $('#txtCaptcha').next('.error').text('CAPTCHA required');
                reloadCaptcha();
                ok = false;
            }
            if (!ok) return;

            let salt = genSalt(),
                sha = new jsSHA("SHA-512", "TEXT");
            sha.update(salt + p + salt);
            hiddenSalt.value = salt;
            txtPass.value = sha.getHash("HEX");
            loginForm.submit();
        });
    </script>
</body>

</html>
