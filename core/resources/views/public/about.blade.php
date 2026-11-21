@extends('public.layouts.app')

@section('title', 'About Us - Mahobiya Films Production')

@section('content')

    <!-- Cinematic Hero Banner (Unified Header & Breadcrumb) -->
    @php
        $bannerFile = null;
        foreach (['images/about_banner.avif', 'images/about_banner.webp', 'images/about_banner.jpg', 'images/about_banner.png'] as $candidate) {
            if (file_exists(public_path($candidate))) {
                $bannerFile = $candidate;
                break;
            }
        }
    @endphp
    <div class="about-hero-banner" @if($bannerFile) style="background-image: url('{{ asset($bannerFile) }}?v={{ filemtime(public_path($bannerFile)) }}');" @endif>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="hero-inner">
                        <ul class="hero-breadcrumb">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <span></span>
                            </li>
                            <li>About Us</li>
                        </ul>
                        <h1>About Mahobiya Films Production</h1>
                        <p class="hero-subtitle">Stories Rooted in Heritage, Crafted for the World.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Banner -->

    <!-- Section 1 – Who We Are -->
    <section class="trust-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Who We Are</span>
                <h2>A Vision for Meaningful Cinema</h2>
            </div>
            <div class="trust-content">
                <p class="lead-text">Mahobiya Films Production Private Limited is a film and digital entertainment production company established in Bhilai, Chhattisgarh, in 2023.</p>
                <p>We believe cinema is more than entertainment. It is a powerful way to share stories, culture, emotions and ideas with people.</p>
                <p>Our focus is on bringing creative stories to life through film production and digital entertainment while connecting regional creativity with a wider audience.</p>
            </div>
        </div>
    </section>
    <!-- End Who We Are -->

    <!-- Section 2 & 3 – Vision & Mission -->
    <section class="service-area service-area-two pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Core Principles</span>
                <h2>Our Vision &amp; Mission</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-6">
                    <div class="service-item">
                        <i class='flaticon-video-camera-2'></i>
                        <div class="service-inner">
                            <h3>Our Vision</h3>
                            <p>To put Central India on the global entertainment map as a premier creative powerhouse—celebrated for timeless storytelling, cultural richness, and memorable cinema that resonates across generations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="service-item">
                        <i class='flaticon-director-chair'></i>
                        <div class="service-inner">
                            <h3>Our Mission</h3>
                            <p>To produce high-impact films and digital content by empowering visionary storytellers, nurturing emerging talent, and combining authentic Indian roots with cutting-edge production excellence for theatrical and OTT audiences worldwide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Vision & Mission -->

    <!-- Section 4 – What Drives Us -->
    <section class="product-area product-area-two pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Our Approach</span>
                <h2>What Drives Us</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="product-item">
                        <img src="{{ asset('assets/img/home-two/product1.jpg') }}" alt="Powerful Storytelling">
                        <h3>Powerful Storytelling</h3>
                        <p>Bringing meaningful and engaging stories to the screen.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="product-item">
                        <img src="{{ asset('assets/img/home-two/product2.jpg') }}" alt="Cultural Connection">
                        <h3>Cultural Connection</h3>
                        <p>Celebrating Indian heritage and regional creativity.</p>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="product-item">
                        <img src="{{ asset('assets/img/home-two/product3.jpg') }}" alt="Creative Excellence">
                        <h3>Creative Excellence</h3>
                        <p>Combining creative ideas with modern filmmaking practices.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product -->

    <!-- Section 5 – Featured Film -->
    <section class="work-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Featured Production</span>
                <h2>Mahakavya Shri Ramayan Katha</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <a href="{{ route('film.detail', 'mahakavya-shri-ramayan-katha') }}">
                        <div class="work-item" style="border-radius: 6px;">
                            <img src="{{ asset('images/banner_ramayan.jpg') }}" alt="Mahakavya Shri Ramayan Katha">
                            <div class="work-content">
                                <h3>Mahakavya Shri Ramayan Katha</h3>
                                <span>Explore Feature Film</span>
                            </div>
                        </div>
                    </a>
                    <div class="text-center mt-4">
                        <a class="banner-btn" href="{{ route('film.detail', 'mahakavya-shri-ramayan-katha') }}">Explore Film</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Work -->

    <!-- Section 6 – Leadership -->
    <section class="team-area team-area-two team-area-three pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Leadership</span>
                <h2>The People Behind The Vision</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="team-item">
                        <div class="team-top">
                            <img src="{{ asset('images/prakash_mahobiya.jpg') }}" alt="Prakash Mahobiya">
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-instagram-alt'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-bottom">
                            <h3>Prakash Mahobiya</h3>
                            <span>Founder &amp; Managing Director</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="team-item">
                        <div class="team-top">
                            <img src="{{ asset('images/sanjay_bundela.jpg') }}" alt="Sanjay Bundela">
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-instagram-alt'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-bottom">
                            <h3>Sanjay Bundela</h3>
                            <span>Co-Founder &amp; Director</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team -->

@endsection
