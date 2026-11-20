@extends('admin.layouts.app')

@section('title', 'Admin Dashboard - Mahobiya Films Production')

@section('content')
<div class="container-fluid py-3">

    <!-- Page Header -->
    <div class="row align-items-center mb-4">
        <div class="col-md-6">
            <h3 class="fw-bold mb-1">Dashboard</h3>
            <p class="text-muted mb-0">Welcome to the Mahobiya Films Production Management Portal.</p>
        </div>
        <div class="col-md-6 text-md-end mt-3 mt-md-0">
            <a href="{{ route('admin.components.tables') }}" class="btn btn-outline-primary me-2">
                <i class="fi fi-rr-table me-1"></i> View Tables
            </a>
            <a href="{{ route('admin.components.forms') }}" class="btn btn-primary">
                <i class="fi fi-rr-plus me-1"></i> Sample Form
            </a>
        </div>
    </div>

    <!-- Stat Cards -->
    <div class="row g-3 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar avatar-md rounded-3 bg-primary-subtle text-primary d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                        <i class="fi fi-rr-film fs-3"></i>
                    </div>
                    <div>
                        <span class="text-muted d-block text-uppercase fw-semibold" style="font-size: 0.75rem;">Films & Projects</span>
                        <h4 class="fw-bold mb-0">5</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar avatar-md rounded-3 bg-success-subtle text-success d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                        <i class="fi fi-rr-users-alt fs-3"></i>
                    </div>
                    <div>
                        <span class="text-muted d-block text-uppercase fw-semibold" style="font-size: 0.75rem;">Cast & Crew</span>
                        <h4 class="fw-bold mb-0">28</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar avatar-md rounded-3 bg-warning-subtle text-warning d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                        <i class="fi fi-rr-picture fs-3"></i>
                    </div>
                    <div>
                        <span class="text-muted d-block text-uppercase fw-semibold" style="font-size: 0.75rem;">Photo & Media</span>
                        <h4 class="fw-bold mb-0">142</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar avatar-md rounded-3 bg-info-subtle text-info d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                        <i class="fi fi-rr-envelope fs-3"></i>
                    </div>
                    <div>
                        <span class="text-muted d-block text-uppercase fw-semibold" style="font-size: 0.75rem;">Contact Inquiries</span>
                        <h4 class="fw-bold mb-0">12</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Active Projects & Quick Information -->
    <div class="row g-4 mb-4">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-transparent border-0 d-flex justify-content-between align-items-center py-3">
                    <h5 class="card-title fw-bold mb-0">Featured Project Showcase</h5>
                    <span class="badge bg-primary-subtle text-primary">CBFC Certified</span>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-column flex-md-row gap-4 align-items-center">
                        <img src="{{ asset('images/logo.png') }}" class="rounded-3 shadow-sm" style="width: 130px; object-fit: contain; background: #1a1a2e; padding: 10px;" alt="Mahakavya Shri Ramayan">
                        <div class="flex-grow-1">
                            <h4 class="fw-bold text-dark">Mahakavya Shri Ramayan Katha Shri Ram Ki</h4>
                            <p class="text-muted mb-2">
                                Hindi Feature Film produced by <strong>Mahobiya Films Production Private Limited</strong>.
                                Directed with grand mythological vision, classical cinematography, and high-fidelity VFX.
                            </p>
                            <div class="d-flex flex-wrap gap-2 pt-2">
                                <span class="badge bg-light text-dark border">Language: Hindi</span>
                                <span class="badge bg-light text-dark border">Category: Motion Picture / Drama</span>
                                <span class="badge bg-light text-dark border">Status: Post-Production / Teasers Out</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-transparent border-0 py-3">
                    <h5 class="card-title fw-bold mb-0">Company Info</h5>
                </div>
                <div class="card-body pt-0">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3 d-flex justify-content-between">
                            <span class="text-muted">CIN</span>
                            <span class="fw-semibold">U59111CT2023PTC015188</span>
                        </li>
                        <li class="mb-3 d-flex justify-content-between">
                            <span class="text-muted">Incorporated</span>
                            <span class="fw-semibold">Sept 15, 2023</span>
                        </li>
                        <li class="mb-3 d-flex justify-content-between">
                            <span class="text-muted">Location</span>
                            <span class="fw-semibold">Bhilai, Chhattisgarh</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span class="text-muted">Contact</span>
                            <span class="fw-semibold">+91 91091 41966</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

