<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#5955D1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Mahobiya Films') }} | Register</title>

    <link rel="icon" href="{{ asset('admin-theme/assets/images/admin-logo.avif') }}">
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
                        style="background-image:url('{{ asset('admin-theme/assets/images/auth-reg.webp') }}')"></div>
                </div>

                <div class="col-xl-4 col-lg-5 col-md-6 align-self-center">
                    <div class="p-4 p-sm-5 maxw-450px m-auto">

                        <div class="mb-4 text-center">
                            <img src="{{ asset('admin-theme/assets/images/admin-logo.avif') }}" height="60">
                        </div>

                        <div class="text-center mb-5">
                            <h5 class="mb-1">Gate Pass</h5>
                            <p>Register to get started.</p>
                        </div>

                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form id="registerForm" action="{{ route('auth.registerSubmit') }}" method="post"
                            autocomplete="off">
                            @csrf

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="mb-4">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" id="txtName" name="name"
                                    value="{{ old('name') }}" placeholder="Enter your name">
                                <small class="text-danger error"></small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" id="txtEmail" name="email"
                                    value="{{ old('email') }}" placeholder="Enter your email address">
                                <small class="text-danger error"></small>
                            </div>

                            <div class="mb-3">
                                <button type="submit" id="btnRegister" class="btn btn-primary w-100">Register</button>
                            </div>

                            <div class="text-center">
                                <a href="{{ route('auth.login') }}" class="text-primary small fw-semibold">
                                    Already have an account? Sign in
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="{{ asset('admin-theme/assets/libs/jquery/jquery.min.js') }}"></script>
    <script>
        $('#btnRegister').click(function(e) {
            e.preventDefault();
            $('.error').text('');
            let name = $('#txtName').val().trim();
            let email = $('#txtEmail').val().trim();
            let ok = true;
            if (!name) {
                $('#txtName').next('.error').text('Name is required');
                ok = false;
            }
            if (!email) {
                $('#txtEmail').next('.error').text('Email is required');
                ok = false;
            }
            if (ok) {
                $('#registerForm').submit();
            }
        });
    </script>
</body>

</html>
