@extends('admin.layouts.app')

@section('title', 'Form Elements & Layouts - Admin')

@section('content')
<div class="container-fluid py-3">

    <!-- Breadcrumb & Header -->
    <div class="row align-items-center mb-4">
        <div class="col-md-6">
            <h3 class="fw-bold mb-1">Form Elements & Layouts</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Components / Forms</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 text-md-end mt-3 mt-md-0">
            <a href="{{ route('admin.components.tables') }}" class="btn btn-outline-secondary">
                <i class="fi fi-rr-arrow-left me-1"></i> Back to Tables
            </a>
        </div>
    </div>

    <div class="row g-4">
        <!-- Main Form Column -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-transparent border-0 py-3">
                    <h5 class="card-title fw-bold mb-0">Film & Media Entry Form Example</h5>
                    <small class="text-muted">Boilerplate form covering standard inputs, textareas, dropdowns, and file upload inputs.</small>
                </div>
                <div class="card-body">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Row 1: Title and Category -->
                        <div class="row g-3 mb-3">
                            <div class="col-md-8">
                                <label class="form-label fw-semibold">Film / Project Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="title" placeholder="e.g. Mahakavya Shri Ramayan Katha" required>
                                <div class="form-text">Official registered title of the film or video.</div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-semibold">Release Year</label>
                                <input type="number" class="form-control" name="release_year" placeholder="2026" min="2000" max="2099">
                            </div>
                        </div>

                        <!-- Row 2: Genre, Language, Status -->
                        <div class="row g-3 mb-3">
                            <div class="col-md-4">
                                <label class="form-label fw-semibold">Category / Genre</label>
                                <select class="form-select" name="category">
                                    <option value="">Select Genre</option>
                                    <option value="motion_picture">Motion Picture</option>
                                    <option value="trailer">Official Trailer / Teaser</option>
                                    <option value="regional">Regional Film</option>
                                    <option value="ott">OTT Web Release</option>
                                    <option value="bts">Behind The Scenes</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-semibold">Language</label>
                                <select class="form-select" name="language">
                                    <option value="Hindi" selected>Hindi</option>
                                    <option value="Chhattisgarhi">Chhattisgarhi</option>
                                    <option value="Bhojpuri">Bhojpuri</option>
                                    <option value="English">English</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-semibold">Status</label>
                                <select class="form-select" name="status">
                                    <option value="upcoming">Upcoming</option>
                                    <option value="in_production">In Production</option>
                                    <option value="cbfc_certified">CBFC Certified</option>
                                    <option value="released">Released</option>
                                </select>
                            </div>
                        </div>

                        <!-- Row 3: YouTube & Trailer URL -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">YouTube / Trailer Video URL</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="fi fi-rr-video-camera"></i></span>
                                <input type="url" class="form-control" name="trailer_url" placeholder="https://www.youtube.com/watch?v=...">
                            </div>
                        </div>

                        <!-- Row 4: Cast and Crew Details -->
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Director(s)</label>
                                <input type="text" class="form-control" name="director" placeholder="Director name(s)">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Producer(s)</label>
                                <input type="text" class="form-control" name="producer" placeholder="Producer name(s)">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold">Key Cast Members</label>
                                <input type="text" class="form-control" name="cast" placeholder="Actors, supporting cast (comma-separated)">
                            </div>
                        </div>

                        <!-- Row 5: Synopsis / Description -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Film Synopsis / Description</label>
                            <textarea class="form-control" rows="4" name="synopsis" placeholder="Write the film synopsis or project summary here..."></textarea>
                        </div>

                        <!-- Row 6: Poster Upload -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Poster / Banner Image Upload</label>
                            <input class="form-control" type="file" name="poster_file" accept="image/*" id="posterFileInput">
                            <div class="form-text">Supported formats: JPG, PNG, WebP (Max size: 5MB).</div>
                        </div>

                        <!-- Actions -->
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary px-4">
                                <i class="fi fi-rr-disk me-1"></i> Save Record
                            </button>
                            <button type="reset" class="btn btn-light px-4">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Right Side: Secondary UI Widgets -->
        <div class="col-lg-4">
            <!-- Publishing Meta Card -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-transparent border-0 py-3">
                    <h5 class="card-title fw-bold mb-0">Publishing Options</h5>
                </div>
                <div class="card-body pt-0">
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="switchFeatured" checked>
                        <label class="form-check-label fw-semibold" for="switchFeatured">Show on Home Page</label>
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="switchActive" checked>
                        <label class="form-check-label fw-semibold" for="switchActive">Active / Publicly Visible</label>
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="switchCBFC">
                        <label class="form-check-label fw-semibold" for="switchCBFC">CBFC Verification Badge</label>
                    </div>
                </div>
            </div>

            <!-- Helpful Hints Card -->
            <div class="card border-0 shadow-sm bg-primary-subtle text-primary">
                <div class="card-body">
                    <h6 class="fw-bold mb-2"><i class="fi fi-rr-info me-1"></i> Developer Tip</h6>
                    <p class="small mb-0">
                        Use this form layout as a template when creating backend management views for Films, Cast & Crew, Photo Gallery, and News updates.
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

