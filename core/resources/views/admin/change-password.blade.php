@extends('admin.layouts.app')
@section('title', 'Change Your Password')
@section('styles')
@endsection

@section('scripts')
    <script>
        document.querySelectorAll(".auth-pass-inputgroup").forEach(function(group) {
            group.querySelectorAll(".password-addon").forEach(function(btn) {
                btn.addEventListener("click", function() {
                    var input = group.querySelector(".password-input");
                    if (input) {
                        input.type = input.type === "password" ? "text" : "password";
                    }
                });
            });
        });
    </script>
@endsection
<style>
    .ri-eye-fill {
        color: #000 !important;
    }
</style>

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="app-page-head d-flex align-items-center justify-content-between">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"> <a href="#" onclick="history.back(); return false;"><i
                                        class="fi fi-rr-home"></i> Home</a></li>
                            <li class="breadcrumb-item active">Change Your Password</li>
                        </ol>
                    </nav>
                </div>
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <center>
                            {{-- <h4 class="mb-sm-0">Change Your Password Here..</h4> --}}
                        </center>
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                            
                            
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-2">
                            <div class="card-body p-4">
                                <div class="text-center mt-3 mb-5">
                                    
                                    <h5 class="text-primary">Change Your Password</h5>
                                    {{-- <p class="text-muted">Change Your Password</p> --}}
                                </div>
                                <div class="p-2 mt-1">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <!-- Show Success Message -->
                                    @if (session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif

                                    <!-- Show Error Message -->
                                    @if (session('error'))
                                        <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif
                                    <form action="{{ route('auth.passwordUpdate') }}" method="post" autocomplete="off">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="password" class="form-label">New Password *</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" class="form-control pe-5 password-input"
                                                    placeholder="Enter New password" id="password-input"
                                                    name="new_password">
                                                <button
                                                    class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                    type="button" id="password-addon"><i class="fa fa-eye"></i></button>
                                            </div>
                                        </div>

                                        <div class="mb-3">

                                            <label class="form-label" for="password-input">Confirm New Password *</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" class="form-control pe-5 password-input"
                                                    placeholder="Enter Confirm New password" id="password-input"
                                                    name="confirm_password">
                                                <button
                                                    class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                    type="button" id="password-addon"><i class="fa fa-eye"></i></button>
                                            </div>
                                        </div>
                                        <small class="text-muted">
                                            Password must contain:
                                            <ul class="mb-0">
                                                <li>Minimum 8 characters</li>
                                                <li>At least 1 uppercase letter (A-Z)</li>
                                                <li>At least 1 lowercase letter (a-z)</li>
                                                <li>At least 1 number (0-9)</li>
                                                <li>At least 1 special character (@ $ ! % * ? &)</li>
                                            </ul>
                                        </small>

                                        <div class="mt-4">
                                            <button class="btn btn-primary w-100" type="submit">Change Password</button>
                                        </div>

                                        <!-- <h5 style="text-align: center;margin-top: 10px;"><a href="dashboard" style="font-size: 14px;"><i class="bx bx-left-arrow-alt"></i> Back to HomePage</a></h5> -->

                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                    </div>
                </div>
                <!--end row-->

            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    </div>
@endsection
