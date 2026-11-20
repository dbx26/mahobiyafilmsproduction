@extends('public.layouts.app')

@section('title', 'Films & Projects - Mahobiya Films Production')

@section('content')
<div class="py-5 text-center" style="background: linear-gradient(180deg, #16181f 0%, #0b0c10 100%); border-bottom: 1px solid rgba(229, 169, 59, 0.2);">
    <div class="container py-4">
        <h1 class="display-4 fw-bold text-white brand-font mb-2">FILMS &amp; PRODUCTIONS</h1>
        <p class="text-gold text-uppercase fw-semibold" style="letter-spacing: 2px;">Feature Films • Trailers • Regional Cinema • OTT Series</p>
    </div>
</div>

<div class="container py-5">
    <!-- Film Cards Grid -->
    <div class="row g-4">
        <!-- Film 1: Mahakavya Shri Ramayan Katha Shri Ram Ki -->
        <div class="col-md-6 col-lg-4">
            <div class="film-card h-100 d-flex flex-column">
                <div class="position-relative">
                    <img src="{{ asset('images/logo.png') }}" class="w-100" style="height: 280px; object-fit: contain; background: #000; padding: 20px;" alt="Mahakavya Shri Ramayan">
                    <span class="badge bg-gold text-dark position-absolute top-0 end-0 m-3 fw-bold">CBFC Certified</span>
                </div>
                <div class="p-4 d-flex flex-column flex-grow-1">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <small class="text-gold fw-semibold">Hindi • Motion Picture</small>
                        <small class="text-white-50">2026</small>
                    </div>
                    <h4 class="fw-bold text-white mb-2">Mahakavya Shri Ramayan</h4>
                    <p class="text-white-50 small mb-4 flex-grow-1">
                        Katha Shri Ram Ki — A grand cinematic mythological presentation tracing the divine life, ideals, and valor of Shri Ram with classical orchestration and cutting-edge visual effects.
                    </p>
                    <a href="{{ route('film.detail', 'mahakavya-shri-ramayan') }}" class="btn btn-outline-gold w-100">
                        View Film Details &amp; Cast
                    </a>
                </div>
            </div>
        </div>

        <!-- Film 2: Katha Shri Ram Ki (Official Trailers) -->
        <div class="col-md-6 col-lg-4">
            <div class="film-card h-100 d-flex flex-column">
                <div class="position-relative">
                    <div class="d-flex align-items-center justify-content-center bg-dark" style="height: 280px; border-bottom: 1px solid var(--cinema-border);">
                        <i class="bi bi-play-circle text-gold display-3"></i>
                    </div>
                    <span class="badge bg-primary position-absolute top-0 end-0 m-3">Trailer</span>
                </div>
                <div class="p-4 d-flex flex-column flex-grow-1">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <small class="text-gold fw-semibold">Hindi • Official Promo</small>
                        <small class="text-white-50">2026</small>
                    </div>
                    <h4 class="fw-bold text-white mb-2">Official Trailers &amp; Promos</h4>
                    <p class="text-white-50 small mb-4 flex-grow-1">
                        Official trailer showcase certified by the Central Board of Film Certification (CBFC) in September 2026 for theatrical and digital broadcast.
                    </p>
                    <a href="{{ route('videos') }}" class="btn btn-outline-gold w-100">
                        Watch Official Teaser
                    </a>
                </div>
            </div>
        </div>

        <!-- Film 3: Upcoming Regional Production -->
        <div class="col-md-6 col-lg-4">
            <div class="film-card h-100 d-flex flex-column">
                <div class="position-relative">
                    <div class="d-flex align-items-center justify-content-center bg-dark" style="height: 280px; border-bottom: 1px solid var(--cinema-border);">
                        <i class="bi bi-camera-reels text-gold display-3"></i>
                    </div>
                    <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-3 fw-bold">In Production</span>
                </div>
                <div class="p-4 d-flex flex-column flex-grow-1">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <small class="text-gold fw-semibold">Regional • Central India</small>
                        <small class="text-white-50">Upcoming</small>
                    </div>
                    <h4 class="fw-bold text-white mb-2">Regional Cinema Slate</h4>
                    <p class="text-white-50 small mb-4 flex-grow-1">
                        Upcoming cinematic and OTT series highlighting real-life inspirational narratives, folklore, and drama rooted in Chhattisgarh and Central India.
                    </p>
                    <a href="{{ route('contact') }}" class="btn btn-outline-gold w-100">
                        Inquire / Casting
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

