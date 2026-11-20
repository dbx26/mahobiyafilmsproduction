@extends('admin.layouts.app')

@section('title', 'Cards & UI Elements - Admin')

@section('content')
<div class="container-fluid py-3">

    <!-- Breadcrumb & Header -->
    <div class="row align-items-center mb-4">
        <div class="col-md-6">
            <h3 class="fw-bold mb-1">Cards & Widgets</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Components / Cards</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Alert Styles -->
    <div class="row g-3 mb-4">
        <div class="col-12">
            <div class="alert alert-primary d-flex align-items-center mb-0" role="alert">
                <i class="fi fi-rr-info me-2 fs-5"></i>
                <div>Primary notification alert with custom icon support.</div>
            </div>
        </div>
        <div class="col-12">
            <div class="alert alert-success d-flex align-items-center mb-0" role="alert">
                <i class="fi fi-rr-check me-2 fs-5"></i>
                <div>Record saved successfully! This is an example of success notification.</div>
            </div>
        </div>
    </div>

    <!-- Card Styles -->
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Simple Card</h5>
                    <p class="card-text text-muted">Clean standard card container with soft border shadow and padding.</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Action Button</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-transparent border-0 py-3">
                    <h6 class="card-title fw-bold mb-0">Card With Header</h6>
                </div>
                <div class="card-body pt-0">
                    <p class="card-text text-muted">A structured card with a separated header and footer section for organizing content.</p>
                </div>
                <div class="card-footer bg-transparent border-top py-2 text-end">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm bg-dark text-white h-100">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-white">Dark Cinema Card</h5>
                    <p class="card-text text-white-50">High-contrast dark-themed card suited for movie teasers and production highlights.</p>
                    <span class="badge bg-warning text-dark">VIP Release</span>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

