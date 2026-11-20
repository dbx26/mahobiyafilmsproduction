@extends('public.layouts.app')

@section('title', 'Mahakavya Shri Ramayan Katha Shri Ram Ki - Mahobiya Films Production')

@section('content')
<div class="py-5" style="background: radial-gradient(circle at 50% 20%, #1e1910 0%, #0b0c10 80%); border-bottom: 1px solid rgba(229, 169, 59, 0.2);">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-4 text-center">
                <div class="film-card p-3 shadow-lg d-inline-block">
                    <img src="{{ asset('images/logo.png') }}" class="img-fluid rounded" alt="Mahakavya Shri Ramayan Poster" style="background: #000; padding: 25px; max-height: 420px; object-fit: contain;">
                </div>
            </div>

            <div class="col-lg-8">
                <div class="d-flex flex-wrap gap-2 mb-3">
                    <span class="badge bg-gold text-dark fw-bold">CBFC Certified</span>
                    <span class="badge border border-secondary text-white-50">Hindi</span>
                    <span class="badge border border-secondary text-white-50">Motion Picture / Mythological</span>
                    <span class="badge border border-secondary text-white-50">2026</span>
                </div>

                <h1 class="display-4 fw-bold text-white brand-font mb-2">Mahakavya Shri Ramayan</h1>
                <h4 class="text-gold mb-4 brand-font">Katha Shri Ram Ki</h4>

                <p class="lead text-white-50 mb-4">
                    Produced by <strong>Mahobiya Films Production Private Limited</strong>, <em>Mahakavya Shri Ramayan Katha Shri Ram Ki</em> is an ambitious visual cinematic tribute that captures the sacred journey, righteous duty (Dharma), and valor of Maryada Purushottam Bhagwan Shri Ram.
                </p>

                <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('videos') }}" class="btn btn-gold btn-lg">
                        <i class="bi bi-play-circle me-1"></i> Watch Official Trailers
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-gold btn-lg">
                        Media &amp; Distribution Inquiries
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row g-5">
        <!-- Main Synopsis & Details -->
        <div class="col-lg-8">
            <h3 class="fw-bold text-white mb-3 brand-font">Film Synopsis</h3>
            <p class="text-white-50 lh-lg mb-4">
                <em>Mahakavya Shri Ramayan Katha Shri Ram Ki</em> brings alive the eternal Sanskrit epic with profound devotional depth and modern cinematic scale. From Ayodhya to Lanka, the film highlights timeless lessons of sacrifice, honour, truth, and victory of light over darkness. Produced under rigorous creative direction, the movie features authentic Vedic set recreations, detailed costume styling, and original symphonic devotional compositions.
            </p>

            <h4 class="fw-bold text-white mb-3 brand-font mt-5">Key Cast &amp; Crew</h4>
            <div class="row g-3">
                <div class="col-sm-6">
                    <div class="p-3 rounded border border-secondary" style="background-color: var(--cinema-dark-alt);">
                        <small class="text-gold text-uppercase fw-semibold d-block">Production House</small>
                        <span class="text-white fw-bold">Mahobiya Films Production Pvt. Ltd.</span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="p-3 rounded border border-secondary" style="background-color: var(--cinema-dark-alt);">
                        <small class="text-gold text-uppercase fw-semibold d-block">Founders &amp; Producers</small>
                        <span class="text-white fw-bold">Prakash Mahobiya &amp; Sanjay Bundela</span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="p-3 rounded border border-secondary" style="background-color: var(--cinema-dark-alt);">
                        <small class="text-gold text-uppercase fw-semibold d-block">CBFC Certification</small>
                        <span class="text-white fw-bold">Certified Trailer (Sept 2026)</span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="p-3 rounded border border-secondary" style="background-color: var(--cinema-dark-alt);">
                        <small class="text-gold text-uppercase fw-semibold d-block">Language &amp; Format</small>
                        <span class="text-white fw-bold">Hindi • Feature Motion Picture</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar / Contact Details -->
        <div class="col-lg-4">
            <div class="film-card p-4">
                <h5 class="text-gold fw-bold mb-3 brand-font">Film Metadata</h5>
                <ul class="list-unstyled small text-white-50 mb-4">
                    <li class="mb-2 d-flex justify-content-between border-bottom border-secondary pb-2">
                        <span>Original Title</span>
                        <span class="text-white fw-semibold text-end">Mahakavya Shri Ramayan</span>
                    </li>
                    <li class="mb-2 d-flex justify-content-between border-bottom border-secondary pb-2">
                        <span>Subtitle</span>
                        <span class="text-white fw-semibold text-end">Katha Shri Ram Ki</span>
                    </li>
                    <li class="mb-2 d-flex justify-content-between border-bottom border-secondary pb-2">
                        <span>Genre</span>
                        <span class="text-white fw-semibold text-end">Epic / Mythological</span>
                    </li>
                    <li class="mb-2 d-flex justify-content-between border-bottom border-secondary pb-2">
                        <span>Primary Language</span>
                        <span class="text-white fw-semibold text-end">Hindi</span>
                    </li>
                    <li class="d-flex justify-content-between">
                        <span>Certification</span>
                        <span class="text-gold fw-semibold text-end">CBFC Certified</span>
                    </li>
                </ul>

                <a href="{{ route('contact') }}" class="btn btn-gold w-100">
                    Distribution &amp; Screening Inquiry
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

