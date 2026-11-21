@extends('public.layouts.app')

@section('title', 'Our Films - Mahobiya Films Production')

@section('content')

    <!-- Page Title / Banner -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-item">
                <h2>Our Films</h2>
                <p>Stories That Come Alive on Screen.</p>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <span></span>
                    </li>
                    <li>Our Films</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Film Catalog Section (Crisp White Background) -->
    <section class="work-area work-area-two pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sub-title">Cinematic Catalog</span>
                <h2>Stories That Come Alive on Screen</h2>
                <p class="catalog-intro-text">Explore the films and cinematic projects produced by Mahobiya Films Production. Every project represents our interest in storytelling, creativity and bringing meaningful experiences to audiences.</p>
            </div>

            <div class="row justify-content-center">
                <!-- Film Card: Mahakavya Shri Ramayan Katha -->
                <div class="col-lg-10">
                    <div class="film-card-horizontal">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-5 col-lg-4">
                                <div class="film-card-poster">
                                    <img src="{{ asset('images/poster_ramayan.jpg') }}" alt="Mahakavya Shri Ramayan Katha">
                                    <span class="film-badge">Feature Film</span>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8">
                                <div class="film-card-body">
                                    <span class="film-genre">Feature Film &middot; Hindi &amp; Chhattisgarhi</span>
                                    <h3>
                                        <a href="{{ route('film.detail', 'mahakavya-shri-ramayan-katha') }}">Mahakavya Shri Ramayan Katha</a>
                                    </h3>
                                    <div class="film-meta">
                                        <span><i class='bx bx-calendar'></i> Released: 25 September 2026</span>
                                    </div>
                                    <p class="film-synopsis">A cinematic presentation inspired by the timeless story of Shri Ramayan.</p>
                                    <div class="film-action">
                                        <a href="{{ route('film.detail', 'mahakavya-shri-ramayan-katha') }}" class="film-card-btn">Explore Film Details <i class='bx bx-right-arrow-alt'></i></a>
                                        <a href="https://www.youtube.com/watch?v=lUhw32rt_dE" class="film-trailer-btn popup-youtube">
                                            <i class='bx bx-play-circle'></i> Watch Trailer
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Film Catalog Section -->

    <!-- Upcoming Projects Section (Dark Cinema Background) -->
    <section class="trust-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sub-title">What's Next</span>
                <h2>More Exciting Projects Coming Soon</h2>
            </div>
            <div class="trust-content text-center">
                <p>We are continuously exploring new stories and creative opportunities to bring fresh cinematic experiences to audiences.</p>
                <div class="mt-4">
                    <a class="banner-btn" href="{{ route('contact') }}">Get In Touch</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Upcoming Projects Section -->

@endsection
