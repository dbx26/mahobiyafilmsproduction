<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#5955D1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Mahobiya Films') }} | Verify OTP</title>

    <link rel="icon" href="{{ asset('admin-theme/assets/images/admin-logo.avif') }}">
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/flaticon/css/all/all-single.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/lucide/lucide.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/simplebar/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/node-waves/waves.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-theme/assets/css/styles.css') }}">
    <style>
        /* Single OTP input – ensures typed digits are always visible */
        #otpInput {
            font-size: 1.5rem !important;
            font-weight: 600 !important;
            letter-spacing: 0.5em !important;
            text-align: center !important;
            color: #1a1a1a !important;
            -webkit-text-fill-color: #1a1a1a !important;
            background-color: #fff !important;
            caret-color: #5955D1;
        }
    </style>
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
                    <div class="p-4 p-sm-5 maxw-450px m-auto">

                        <div class="mb-4 text-center">
                            <img src="{{ asset('admin-theme/assets/images/admin-logo.avif') }}" height="60">
                        </div>

                        <div class="text-center mb-5">
                            <h5 class="mb-1">Verify your email</h5>
                            <p>Enter the 6-digit OTP sent to <strong>{{ $masked_email }}</strong></p>
                        </div>

                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form id="verifyOtpForm" action="{{ route('auth.register.verifyOtpSubmit') }}" method="post"
                            autocomplete="off">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">OTP</label>
                                <input type="text" class="form-control" id="otpInput" name="otp" maxlength="6"
                                    pattern="[0-9]*" inputmode="numeric" placeholder="000000" autocomplete="one-time-code"
                                    value="{{ old('otp') }}"
                                    style="color:#1a1a1a; -webkit-text-fill-color:#1a1a1a; background-color:#fff;">
                                <small class="text-danger error d-block text-center"></small>
                            </div>

                            <div id="countdownWrap" class="text-center mb-3">
                                <p class="text-muted small mb-0">
                                    OTP valid for <span id="countdown" class="fw-semibold text-primary">{{ $countdown_display }}</span>
                                    <span class="text-muted">· Resend when timer ends</span>
                                </p>
                            </div>

                            <div class="mb-3">
                                <button type="submit" id="btnVerify" class="btn btn-primary w-100">Verify OTP</button>
                            </div>
                        </form>

                        <div id="resendWrap" class="text-center mb-3" style="display: none;">
                            <form action="{{ route('auth.register.resendOtp') }}" method="post" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-outline-primary btn-sm">Resend OTP</button>
                            </form>
                        </div>

                        <div class="text-center">
                            <a href="{{ route('auth.register') }}" class="text-primary small fw-semibold">
                                Use a different email
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="{{ asset('admin-theme/assets/libs/jquery/jquery.min.js') }}"></script>
    <script>
        (function() {
            var expiryTs = {{ $expiry_ts }};
            var countdownEl = document.getElementById('countdown');
            var countdownWrap = document.getElementById('countdownWrap');
            var resendWrap = document.getElementById('resendWrap');

            function formatTime(seconds) {
                var m = Math.floor(seconds / 60);
                var s = seconds % 60;
                return m + ':' + (s < 10 ? '0' : '') + s;
            }

            function update() {
                var now = Math.floor(Date.now() / 1000);
                var remaining = Math.max(0, expiryTs - now);
                countdownEl.textContent = formatTime(remaining);
                if (remaining <= 0) {
                    countdownWrap.style.display = 'none';
                    resendWrap.style.display = 'block';
                    return true;
                }
                return false;
            }

            update();
            var interval = setInterval(function() {
                if (update()) clearInterval(interval);
            }, 1000);
        })();

        (function() {
            var otpInput = document.getElementById('otpInput');
            var form = document.getElementById('verifyOtpForm');

            otpInput.addEventListener('input', function() {
                this.value = this.value.replace(/\D/g, '').slice(0, 6);
            });

            form.addEventListener('submit', function(e) {
                var otp = otpInput.value.trim();
                var err = form.querySelector('.error');
                if (err) err.textContent = '';
                if (otp.length !== 6) {
                    e.preventDefault();
                    if (err) err.textContent = 'Please enter the 6-digit OTP';
                }
            });
        })();
    </script>
</body>

</html>
