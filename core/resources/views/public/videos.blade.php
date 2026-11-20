@extends('public.layouts.app')

@section('title', 'Videos & Trailers - Mahobiya Films Production')

@section('content')
<div class="py-5 text-center" style="background: linear-gradient(180deg, #16181f 0%, #0b0c10 100%); border-bottom: 1px solid rgba(229, 169, 59, 0.2);">
    <div class="container py-4">
        <h1 class="display-4 fw-bold text-white brand-font mb-2">VIDEOS &amp; TRAILERS</h1>
        <p class="text-gold text-uppercase fw-semibold" style="letter-spacing: 2px;">Official Film Trailers • Teasers • Interviews • Behind The Scenes</p>
    </div>
</div>

<div class="container py-5">
    <div class="row g-4 justify-content-center">
        <!-- Main Trailer Feature -->
        <div class="col-lg-10 mb-4">
            <div class="film-card p-4">
                <div class="ratio ratio-16x9 rounded overflow-hidden mb-4 bg-black border border-secondary">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <i class="bi bi-play-circle-fill text-gold display-1 mb-3"></i>
                        <h4 class="text-white fw-bold mb-1">Mahakavya Shri Ramayan Katha Shri Ram Ki</h4>
                        <p class="text-white-50 small mb-3">Official CBFC-Certified Teaser Trailer</p>
                        <a href="https://www.youtube.com" target="_blank" class="btn btn-gold btn-sm px-4">
                            <i class="bi bi-youtube me-1"></i> Watch on YouTube Channel
                        </a>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <div>
                        <span class="badge bg-gold text-dark mb-1">Official Trailer</span>
                        <h4 class="fw-bold text-white mb-0">Teaser 1: Katha Shri Ram Ki</h4>
                    </div>
                    <div class="text-white-50 small">
                        CBFC Certified • September 2026
                    </div>
                </div>
            </div>
        </div>

        <!-- YouTube Channel Connect Card -->
        <div class="col-lg-10">
            <div class="p-4 p-md-5 rounded text-center border border-secondary" style="background-color: var(--cinema-dark-alt);">
                <i class="bi bi-youtube text-danger display-4 mb-2 d-block"></i>
                <h3 class="fw-bold text-white mb-2 brand-font">Subscribe to Mahobiya Films on YouTube</h3>
                <p class="text-white-50 mx-auto mb-4" style="max-width: 600px;">
                    Stay updated with all upcoming official trailers, promo teasers, cast interviews, and behind-the-scenes footage by subscribing to our official channel.
                </p>
                <a href="https://www.youtube.com" target="_blank" class="btn btn-gold px-4">
                    Visit Official YouTube Channel
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

