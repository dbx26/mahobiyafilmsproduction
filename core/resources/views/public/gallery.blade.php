@extends('public.layouts.app')

@section('title', 'Photo & Event Gallery - Mahobiya Films Production')

@section('content')
<div class="py-5 text-center" style="background: linear-gradient(180deg, #16181f 0%, #0b0c10 100%); border-bottom: 1px solid rgba(229, 169, 59, 0.2);">
    <div class="container py-4">
        <h1 class="display-4 fw-bold text-white brand-font mb-2">PHOTO &amp; EVENT GALLERY</h1>
        <p class="text-gold text-uppercase fw-semibold" style="letter-spacing: 2px;">Behind The Scenes • Production Shoots • Launch Ceremonies</p>
    </div>
</div>

<div class="container py-5">
    <div class="row g-4">
        <!-- Gallery Item 1 -->
        <div class="col-sm-6 col-lg-4">
            <div class="film-card overflow-hidden">
                <img src="{{ asset('images/logo.png') }}" class="w-100" style="height: 240px; object-fit: contain; background: #000; padding: 20px;" alt="Logo Presentation">
                <div class="p-3">
                    <span class="badge bg-gold text-dark mb-1">Corporate Branding</span>
                    <h6 class="fw-bold text-white mb-0">Official Logo &amp; Identity Reveal</h6>
                </div>
            </div>
        </div>

        <!-- Gallery Item 2 -->
        <div class="col-sm-6 col-lg-4">
            <div class="film-card overflow-hidden">
                <div class="d-flex align-items-center justify-content-center bg-dark" style="height: 240px; border-bottom: 1px solid var(--cinema-border);">
                    <i class="bi bi-camera text-gold display-4"></i>
                </div>
                <div class="p-3">
                    <span class="badge bg-primary mb-1">Shooting Stills</span>
                    <h6 class="fw-bold text-white mb-0">Mahakavya Shri Ramayan Set Production</h6>
                </div>
            </div>
        </div>

        <!-- Gallery Item 3 -->
        <div class="col-sm-6 col-lg-4">
            <div class="film-card overflow-hidden">
                <div class="d-flex align-items-center justify-content-center bg-dark" style="height: 240px; border-bottom: 1px solid var(--cinema-border);">
                    <i class="bi bi-megaphone text-gold display-4"></i>
                </div>
                <div class="p-3">
                    <span class="badge bg-success mb-1">Media Events</span>
                    <h6 class="fw-bold text-white mb-0">Teaser Announcement &amp; Press Meet</h6>
                </div>
            </div>
        </div>

        <!-- Gallery Item 4 -->
        <div class="col-sm-6 col-lg-4">
            <div class="film-card overflow-hidden">
                <div class="d-flex align-items-center justify-content-center bg-dark" style="height: 240px; border-bottom: 1px solid var(--cinema-border);">
                    <i class="bi bi-award text-gold display-4"></i>
                </div>
                <div class="p-3">
                    <span class="badge bg-warning text-dark mb-1">Certification</span>
                    <h6 class="fw-bold text-white mb-0">CBFC Certification Milestone</h6>
                </div>
            </div>
        </div>

        <!-- Gallery Item 5 -->
        <div class="col-sm-6 col-lg-4">
            <div class="film-card overflow-hidden">
                <div class="d-flex align-items-center justify-content-center bg-dark" style="height: 240px; border-bottom: 1px solid var(--cinema-border);">
                    <i class="bi bi-people text-gold display-4"></i>
                </div>
                <div class="p-3">
                    <span class="badge bg-info mb-1">Cast &amp; Crew</span>
                    <h6 class="fw-bold text-white mb-0">Workshop &amp; Character Readings</h6>
                </div>
            </div>
        </div>

        <!-- Gallery Item 6 -->
        <div class="col-sm-6 col-lg-4">
            <div class="film-card overflow-hidden">
                <div class="d-flex align-items-center justify-content-center bg-dark" style="height: 240px; border-bottom: 1px solid var(--cinema-border);">
                    <i class="bi bi-sliders text-gold display-4"></i>
                </div>
                <div class="p-3">
                    <span class="badge bg-secondary mb-1">Studio Sessions</span>
                    <h6 class="fw-bold text-white mb-0">Orchestral Score &amp; Audio Post</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

