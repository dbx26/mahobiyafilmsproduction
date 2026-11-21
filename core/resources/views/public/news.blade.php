@extends('public.layouts.app')

@section('title', 'News & Updates - Mahobiya Films Production')

@section('content')

    <!-- Page Title / Banner -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-item">
                <h2>News &amp; Updates</h2>
                <p>Official Press Room &amp; Studio Dispatches</p>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <span></span>
                    </li>
                    <li>News &amp; Updates</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Section: Studio News & Press Room -->
    <section class="blog-area blog-area-two pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Press Room &amp; Announcements</span>
                <h2>Latest Studio News &amp; Updates</h2>
                <p>Official press releases, theatrical release schedules, trailer announcements, and verified media coverage from Mahobiya Films Production.</p>
            </div>

            <!-- Featured Headline Press Release -->
            <div class="featured-news-card">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-6">
                        <div class="featured-news-img">
                            <img src="{{ asset('images/banner_ramayan.jpg') }}" alt="Mahobiya Films Presents Mahakavya Shri Ramayan Katha">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="featured-news-content">
                            <div class="news-meta-bar">
                                <span class="news-badge">Official Press Announcement</span>
                                <span class="news-date">25 September 2026 &middot; Nationwide Theatrical Release</span>
                            </div>
                            <h3 class="featured-news-title">
                                <a href="{{ route('film.detail', 'mahakavya-shri-ramayan-katha') }}">Mahobiya Films Production Announces Theatrical Release of 'Mahakavya Shri Ramayan Katha'</a>
                            </h3>
                            <p class="featured-news-excerpt">
                                Mahobiya Films Production, founded by Prakash Mahobiya and Sanjay Bundela, today officially announced the nationwide theatrical release of its landmark mythological cinematic feature 'Mahakavya Shri Ramayan Katha'. Directed by Abhishek Singh, the production brings the sacred lore and civilizational ethos of Shri Ramayan to the silver screen simultaneously in Hindi and Chhattisgarhi.
                            </p>
                            <div class="d-flex flex-wrap gap-2">
                                <a href="{{ route('film.detail', 'mahakavya-shri-ramayan-katha') }}" class="showcase-detail-btn">
                                    Explore Film Details <i class='bx bx-right-arrow-alt'></i>
                                </a>
                                <a href="https://www.youtube.com/watch?v=lUhw32rt_dE" class="popup-youtube showcase-detail-btn" style="background-color: transparent; color: #080808; border: 1px solid #c1ab65;">
                                    <i class='bx bx-play'></i> Watch Trailer
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Featured Headline Release -->

            <!-- Verified Studio News & Press Grid -->
            <div class="row">
                <!-- Article 1: Hindi Trailer Release -->
                <div class="col-md-6 mb-4">
                    <div class="blog-item">
                        <a href="https://www.youtube.com/watch?v=lUhw32rt_dE" class="popup-youtube blog-thumb">
                            <img src="{{ asset('images/ramayan_video_preview.jpg') }}" alt="Official Hindi Theatrical Trailer">
                        </a>
                        <div class="blog-bottom">
                            <div class="news-meta">
                                <span class="news-category">Trailer Launch</span>
                                <span class="news-source"><i class='bx bxl-youtube'></i> M Series – Bhilai</span>
                                <span class="news-date">September 2026</span>
                            </div>
                            <h3>
                                <a href="https://www.youtube.com/watch?v=lUhw32rt_dE" class="popup-youtube">Official Hindi Theatrical Trailer Launched on YouTube</a>
                            </h3>
                            <p>The official Hindi theatrical trailer showcases the epic scale, visual effects, and devotional depth of 'Mahakavya Shri Ramayan Katha', introducing Dev Sharma as Lord Ram, Anjali Arora as Mata Sita, and Rajniesh Duggall as Ravan.</p>
                            <a class="blog-btn popup-youtube" href="https://www.youtube.com/watch?v=lUhw32rt_dE">
                                Watch Trailer <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Article 2: Chhattisgarhi Regional Trailer -->
                <div class="col-md-6 mb-4">
                    <div class="blog-item">
                        <a href="https://www.youtube.com/watch?v=-BOLkzuT4MQ" class="popup-youtube blog-thumb">
                            <img src="{{ asset('images/ramayan_cg_trailer.jpg') }}" alt="Dedicated Chhattisgarhi Regional Trailer">
                        </a>
                        <div class="blog-bottom">
                            <div class="news-meta">
                                <span class="news-category">Regional Cinema</span>
                                <span class="news-source"><i class='bx bx-film'></i> Regional Release</span>
                                <span class="news-date">September 2026</span>
                            </div>
                            <h3>
                                <a href="https://www.youtube.com/watch?v=-BOLkzuT4MQ" class="popup-youtube">Dedicated Chhattisgarhi Regional Edition Trailer Unveiled</a>
                            </h3>
                            <p>Bringing civilizational epics to regional audiences, Mahobiya Films unveiled a dedicated Chhattisgarhi edition trailer with authentic regional dialogue and voice rendering for cinema halls across Central India.</p>
                            <a class="blog-btn popup-youtube" href="https://www.youtube.com/watch?v=-BOLkzuT4MQ">
                                Watch Regional Trailer <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Article 3: Original Soundtrack Single with Javed Ali -->
                <div class="col-md-6 mb-4">
                    <div class="blog-item">
                        <a href="https://www.youtube.com/watch?v=f2vO_aI_m98" class="popup-youtube blog-thumb">
                            <img src="{{ asset('images/ramayan_hindi_teaser.jpg') }}" alt="Javed Ali Siya Ram Soundtrack Single">
                        </a>
                        <div class="blog-bottom">
                            <div class="news-meta">
                                <span class="news-category">Music Release</span>
                                <span class="news-source"><i class='bx bx-music'></i> M Series – Bhilai</span>
                                <span class="news-date">August 2026</span>
                            </div>
                            <h3>
                                <a href="https://www.youtube.com/watch?v=f2vO_aI_m98" class="popup-youtube">Playback Singer Javed Ali Collaborates with M Series – Bhilai</a>
                            </h3>
                            <p>Renowned playback artist Javed Ali renders the soulful devotional anthem "Siya Ram", composed by Ashish Donald and Dev Chauhaan with lyrics by Jaidev Jonwal, anchoring an expansive soundtrack featuring Kailash Kher and Shaan.</p>
                            {{-- <a class="blog-btn popup-youtube" href="https://www.youtube.com/watch?v=f2vO_aI_m98">
                                Listen on M Series <i class='bx bx-play-circle'></i>
                            </a> --}}
                        </div>
                    </div>
                </div>

                <!-- Article 4: Media Spotlight on Casting (Anjali Arora & Dev Sharma) -->
                <div class="col-md-6 mb-4">
                    <div class="blog-item">
                        <a href="{{ route('film.detail', 'mahakavya-shri-ramayan-katha') }}" class="blog-thumb">
                            <img src="{{ asset('images/poster_ramayan.jpg') }}" alt="Mahakavya Shri Ramayan Katha Theatrical Poster" style="object-position: center 25%;">
                        </a>
                        <div class="blog-bottom">
                            <div class="news-meta">
                                <span class="news-category">Press Coverage</span>
                                <span class="news-source"><i class='bx bx-news'></i> National Media</span>
                                <span class="news-date">September 2026</span>
                            </div>
                            <h3>
                                <a href="{{ route('film.detail', 'mahakavya-shri-ramayan-katha') }}">Media Spotlight: Anjali Arora &amp; Dev Sharma Headline 'Mahakavya Shri Ramayan Katha'</a>
                            </h3>
                            <p>National publications including India Today and The Indian Express spotlighted Anjali Arora's feature film debut as Mata Sita opposite Dev Sharma's Lord Ram, detailing the cultural reverence and artistic dedication behind the portrayal.</p>
                            <a class="blog-btn" href="{{ route('film.detail', 'mahakavya-shri-ramayan-katha') }}">
                                Explore Film Details <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End News Grid -->

            <!-- Studio Press & Media Inquiries Callout Banner (Moovi Cinema Theme) -->
            <div class="channel-callout-banner mt-4">
                <div class="row align-items-center">
                    <div class="col-lg-8 text-center text-lg-start">
                        <span class="channel-sub-title">Official Studio Press Room</span>
                        <h3>Media, Press &amp; Distribution Inquiries</h3>
                        <p>Film journalists, entertainment publications, trade analysts, and theatrical exhibitors can connect directly with our studio communications desk for official press releases, high-resolution media stills, and interview requests.</p>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end mt-4 mt-lg-0">
                        <a class="banner-btn" href="{{ route('contact') }}">
                            <i class='bx bx-envelope'></i> Contact Media Desk
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Studio Press Inquiries Banner -->

        </div>
    </section>
    <!-- End Section -->

@endsection
