@extends('public.layouts.app')

@section('title', 'News & Updates - Mahobiya Films Production')

@section('content')
<div class="py-5 text-center" style="background: linear-gradient(180deg, #16181f 0%, #0b0c10 100%); border-bottom: 1px solid rgba(229, 169, 59, 0.2);">
    <div class="container py-4">
        <h1 class="display-4 fw-bold text-white brand-font mb-2">NEWS &amp; ANNOUNCEMENTS</h1>
        <p class="text-gold text-uppercase fw-semibold" style="letter-spacing: 2px;">Press Releases • CBFC Certifications • Film Updates</p>
    </div>
</div>

<div class="container py-5">
    <div class="row g-4">
        <!-- News Article 1 -->
        <div class="col-lg-6">
            <div class="film-card p-4 h-100">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge bg-gold text-dark fw-bold">Official Milestone</span>
                    <small class="text-white-50">September 2026</small>
                </div>
                <h4 class="fw-bold text-white mb-2">CBFC Certification Received for "Mahakavya Shri Ramayan Katha Shri Ram Ki"</h4>
                <p class="text-white-50 small lh-base mb-3">
                    Mahobiya Films Production Private Limited was officially certified by the Central Board of Film Certification (CBFC) in September 2026 as the producer for the promotional trailers of Hindi feature film <em>Mahakavya Shri Ramayan Katha Shri Ram Ki</em>.
                </p>
                <div class="small text-gold">
                    <i class="bi bi-check-circle-fill me-1"></i> Certified for Theatrical &amp; Digital Broadcast
                </div>
            </div>
        </div>

        <!-- News Article 2 -->
        <div class="col-lg-6">
            <div class="film-card p-4 h-100">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge bg-primary fw-bold">Expansion</span>
                    <small class="text-white-50">September 2023 - Present</small>
                </div>
                <h4 class="fw-bold text-white mb-2">Studio Foundation &amp; Regional Cinema Slate</h4>
                <p class="text-white-50 small lh-base mb-3">
                    Incorporated on September 15, 2023, Mahobiya Films Production Private Limited has embarked on a multi-genre pipeline covering both grand mythological features and regional stories from Chhattisgarh and Central India.
                </p>
                <div class="small text-gold">
                    <i class="bi bi-camera-reels me-1"></i> Motion Pictures &amp; OTT Productions
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

