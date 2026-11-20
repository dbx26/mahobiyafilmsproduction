@extends('public.layouts.app')

@section('title', 'Our Team - Mahobiya Films Production')

@section('content')
<div class="py-5 text-center" style="background: linear-gradient(180deg, #16181f 0%, #0b0c10 100%); border-bottom: 1px solid rgba(229, 169, 59, 0.2);">
    <div class="container py-4">
        <h1 class="display-4 fw-bold text-white brand-font mb-2">OUR LEADERSHIP &amp; TEAM</h1>
        <p class="text-gold text-uppercase fw-semibold" style="letter-spacing: 2px;">Visionary Producers • Directors • Technicians • Performing Artists</p>
    </div>
</div>

<div class="container py-5">
    <!-- Founders & Producers -->
    <div class="text-center mb-5">
        <span class="text-gold fw-bold text-uppercase small" style="letter-spacing: 1.5px;">Studio Principals</span>
        <h2 class="display-6 fw-bold text-white mt-1">Founders &amp; Board of Directors</h2>
    </div>

    <div class="row g-4 justify-content-center mb-5">
        <!-- Founder 1 -->
        <div class="col-md-6 col-lg-5">
            <div class="film-card p-4 text-center h-100">
                <div class="avatar mx-auto mb-3 rounded-circle d-flex align-items-center justify-content-center bg-dark border border-warning" style="width: 120px; height: 120px;">
                    <i class="bi bi-person text-gold display-4"></i>
                </div>
                <h4 class="fw-bold text-white mb-1">Prakash Mahobiya</h4>
                <p class="text-gold small mb-3">Founder &amp; Director</p>
                <p class="text-white-50 small mb-0">
                    Key principal and visionary founder steering Mahobiya Films Production Private Limited into major Indian mythological and motion picture productions.
                </p>
            </div>
        </div>

        <!-- Founder 2 -->
        <div class="col-md-6 col-lg-5">
            <div class="film-card p-4 text-center h-100">
                <div class="avatar mx-auto mb-3 rounded-circle d-flex align-items-center justify-content-center bg-dark border border-warning" style="width: 120px; height: 120px;">
                    <i class="bi bi-person text-gold display-4"></i>
                </div>
                <h4 class="fw-bold text-white mb-1">Sanjay Bundela</h4>
                <p class="text-gold small mb-3">Founder &amp; Director</p>
                <p class="text-white-50 small mb-0">
                    Co-founder and creative strategist leading production logistics, talent management, artistic partnerships, and regional film collaborations.
                </p>
            </div>
        </div>
    </div>

    <!-- Production & Creative Departments -->
    <div class="film-card p-4 p-md-5 mt-4">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <h3 class="fw-bold text-white brand-font mb-3">Join The Production Crew</h3>
                <p class="text-white-50 mb-4">
                    Mahobiya Films Production consistently engages screenwriters, cinematographers, sound designers, costume specialists, and post-production VFX artists across India.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-gold">
                    Submit Your Portfolio
                </a>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="p-3 rounded border border-secondary text-center" style="background-color: #0b0c10;">
                            <i class="bi bi-camera text-gold fs-3 d-block mb-1"></i>
                            <span class="text-white small fw-bold">Cinematography</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 rounded border border-secondary text-center" style="background-color: #0b0c10;">
                            <i class="bi bi-music-note-beamed text-gold fs-3 d-block mb-1"></i>
                            <span class="text-white small fw-bold">Music &amp; Score</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 rounded border border-secondary text-center" style="background-color: #0b0c10;">
                            <i class="bi bi-palette text-gold fs-3 d-block mb-1"></i>
                            <span class="text-white small fw-bold">VFX &amp; Visuals</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 rounded border border-secondary text-center" style="background-color: #0b0c10;">
                            <i class="bi bi-pencil-square text-gold fs-3 d-block mb-1"></i>
                            <span class="text-white small fw-bold">Writing &amp; Script</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

