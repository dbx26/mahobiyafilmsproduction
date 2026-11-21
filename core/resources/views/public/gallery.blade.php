@extends('public.layouts.app')

@section('title', 'Our Gallery - Mahobiya Films Production')

@section('content')

    <!-- Page Title -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-item">
                <h2>Our Gallery</h2>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <span></span>
                    </li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Intro Text -->
    <section class="trust-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Visual Archives</span>
                <h2>Behind Every Film, There Are Countless Moments</h2>
            </div>
            <div class="trust-content text-center">
                <p>Explore photographs and special moments from our film projects, production activities and promotional events.</p>
            </div>
        </div>
    </section>
    <!-- End Intro Text -->

    <!-- Gallery Grid -->
    <section class="work-area work-area-three pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-4">
                    <div class="work-item">
                        <img src="https://img.youtube.com/vi/lUhw32rt_dE/hqdefault.jpg" alt="Film Posters">
                        <div class="work-content">
                            <h3>Official Film Poster</h3>
                            <span>Film Posters</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-4">
                    <div class="work-item">
                        <img src="https://img.youtube.com/vi/-BOLkzuT4MQ/hqdefault.jpg" alt="Regional Poster">
                        <div class="work-content">
                            <h3>Chhattisgarhi Edition Poster</h3>
                            <span>Film Posters</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-4">
                    <div class="work-item">
                        <img src="https://img.youtube.com/vi/NP5ebSjn-_I/hqdefault.jpg" alt="Promotional Events">
                        <div class="work-content">
                            <h3>Teaser Launch Reveal</h3>
                            <span>Promotional Events</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-4">
                    <div class="work-item">
                        <img src="https://img.youtube.com/vi/15O23p7yQu4/hqdefault.jpg" alt="On-Set Moments">
                        <div class="work-content">
                            <h3>Cinematic Sequence Frame</h3>
                            <span>On-Set Moments</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-4">
                    <div class="work-item">
                        <img src="{{ asset('assets/img/home-one/work3.jpg') }}" alt="Behind The Scenes">
                        <div class="work-content">
                            <h3>Production &amp; Lighting Sets</h3>
                            <span>Behind The Scenes</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-4">
                    <div class="work-item">
                        <img src="{{ asset('assets/img/home-one/work4.jpg') }}" alt="Film Launch Activities">
                        <div class="work-content">
                            <h3>Audio &amp; Vocal Recording Sessions</h3>
                            <span>Film Launch &amp; Activities</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery Grid -->

@endsection
