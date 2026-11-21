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
                <!-- Film Card: Ravidas Ek Vichar (Upcoming Film Highlight) -->
                <div class="col-lg-10 mb-4">
                    <div class="film-card-horizontal upcoming-film-card">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-5 col-lg-4">
                                <div class="film-card-poster">
                                    <a href="{{ asset('images/ravidas_ek_vichar.avif') }}" class="popup-image d-block w-100 h-100" title="Ravidas Ek Vichar - Official Poster">
                                        <img src="{{ asset('images/ravidas_ek_vichar.avif') }}" alt="Ravidas Ek Vichar - A Period Drama Film">
                                        <span class="film-badge" style="background-color: #c1ab65; color: #080808; border-color: #c1ab65;"><i class='bx bx-star'></i> Upcoming Project</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8">
                                <div class="film-card-body">
                                    <div>
                                        <span class="upcoming-project-badge"><i class='bx bx-sparkles'></i> Next Studio Production</span>
                                    </div>
                                    <span class="film-genre">A Period Drama Film &middot; Biopic &middot; Social Inspiration</span>
                                    <h3>Ravidas Ek Vichar</h3>
                                    <p class="film-tagline-quote">"संत रविदास का जीवन, दर्शन और समता का संदेश..."</p>
                                    <div class="film-meta">
                                        <span><i class='bx bx-calendar-star'></i> Theatrical Release &middot; Coming Soon in Cinemas</span>
                                    </div>
                                    <p class="film-synopsis">Mahobiya Films Production proudly presents its upcoming landmark biographical period drama celebrating the transformative life, profound spiritual philosophy, and eternal message of universal equality of Sant Ravidas.</p>
                                    {{-- <div class="film-action">
                                        <a href="{{ asset('images/ravidas_ek_vichar.avif') }}" class="film-card-btn popup-image">
                                            <i class='bx bx-fullscreen'></i> View First Look Poster
                                        </a>
                                        <a href="{{ route('news') }}" class="film-trailer-btn">
                                            <i class='bx bx-news'></i> Read Press Announcement
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
