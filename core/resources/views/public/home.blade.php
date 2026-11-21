@extends('public.layouts.app')

@section('title', 'Mahobiya Films Production - Stories Rooted in Heritage, Crafted for the World')

@section('content')

    <!-- Section 1 – Main Hero Banner Slider -->
    <div class="banner-wrap">
        <div class="banner-slider owl-theme owl-carousel">
            <!-- Slide 1: Ravidas Ek Vichar -->
            <div class="banner-area banner-img-three">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-10 text-start">
                                    <div class="banner-content text-start">
                                        <span class="sub-title">A PERIOD DRAMA FILM &middot; COMING SOON</span>
                                        <h1>Ravidas Ek Vichar</h1>
                                        <p class="banner-quote">&ldquo;संत रविदास का जीवन, दर्शन और समता का संदेश...&rdquo;</p>
                                        <p>A landmark biographical period drama celebrating the transformative life, profound spiritual philosophy, and eternal message of universal equality.</p>
                                        {{-- <div class="banner-btn-group justify-content-start">
                                            <a class="banner-btn btn-gold" href="{{ route('films') }}">Explore Upcoming Slate</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Mahakavya Shri Ramayan Katha -->
            <div class="banner-area banner-img-two">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-10 text-start">
                                    <div class="banner-content text-start">
                                        {{-- <span class="sub-title">FEATURED THEATRICAL CINEMA &middot; IN CINEMAS 25 SEPT 2026</span> --}}
                                        <h1>Mahakavya Shri Ramayan Katha</h1>
                                        <p class="banner-quote">&ldquo;श्री राम की मर्यादा, पराक्रम और भक्ति की अमर गाथा...&rdquo;</p>
                                        <p>An epic mythological theatrical experience presenting the timeless journey of Shri Ram, released simultaneously in Hindi and Chhattisgarhi language editions across cinemas nationwide.</p>
                                        {{-- <div class="banner-btn-group justify-content-start">
                                            <a class="banner-btn btn-gold" href="{{ route('film.detail', 'mahakavya-shri-ramayan-katha') }}">Explore Film Details</a>
                                            <a class="banner-btn btn-outline popup-youtube" href="https://www.youtube.com/watch?v=lUhw32rt_dE">
                                                <i class='bx bx-play-circle'></i> Watch Official Trailer
                                            </a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Studio Identity -->
            <div class="banner-area banner-img-one">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-10 text-start">
                                    <div class="banner-content text-start">
                                        <span class="sub-title">MAHOBIYA FILMS PRODUCTION</span>
                                        <h1>Stories Rooted in Heritage, Crafted for the World</h1>
                                        <p>From grand cultural epics to inspiring regional narratives, bridging Indian heritage with world-class cinematic excellence for audiences across generations.</p>
                                        {{-- <div class="banner-btn-group justify-content-start">
                                            <a class="banner-btn btn-gold" href="{{ route('films') }}">Explore Our Films</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="banner-social">
            <span>Follow us on:</span>
            <ul>
                <li>
                    <a href="https://youtube.com/@mseries-bhilai" target="_blank" title="YouTube">
                        <i class='bx bxl-youtube'></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/official_mahobiya_film" target="_blank" title="Instagram">
                        <i class='bx bxl-instagram'></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/profile.php?id=61559248942353" target="_blank" title="Facebook">
                        <i class='bx bxl-facebook'></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <!-- End Hero Banner -->

    <!-- Section 2 – Company Introduction -->
    <section class="trust-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">ABOUT MAHOBIYA FILMS</span>
                <h2>Bringing Stories to Life Through Cinema</h2>
            </div>
            <div class="trust-content">
                <p class="lead-text">Mahobiya Films Production Private Limited is a film and digital entertainment production house based in Bhilai, Chhattisgarh.</p>
                <p>Founded in 2023, the company is focused on producing meaningful films and digital content that bring together cultural values, creative storytelling and modern filmmaking with a vision to connect with audiences across regions and generations.</p>
                
                <!-- Studio Hallmark Pillars -->
                <div class="row justify-content-center trust-hallmark-row mt-4 mb-4">
                    <div class="col-6 col-md-4 mb-3">
                        <div class="trust-hallmark-card">
                            <i class='bx bx-camera-movie'></i>
                            <h4>Cultural Cinema</h4>
                            <p>Stories rooted in sacred lore and rich regional heritage</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 mb-3">
                        <div class="trust-hallmark-card">
                            <i class='bx bx-film'></i>
                            <h4>Theatrical Scale</h4>
                            <p>High-definition cinematic production for silver screens</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 mb-3">
                        <div class="trust-hallmark-card">
                            <i class='bx bx-broadcast'></i>
                            <h4>Digital &amp; Music</h4>
                            <p>OTT releases and original soundtrack distribution via M Series</p>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <a class="banner-btn" href="{{ route('about') }}">
                        Discover Our Story <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Company Introduction -->

    <!-- Section 3 – Our Upcoming Movies -->
    <section class="week-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sub-title">WHAT'S NEXT</span>
                <h2>Upcoming Theatrical Slate</h2>
                <p>We are continuously exploring new stories and creative opportunities to bring fresh, transformative cinematic experiences to audiences.</p>
            </div>
            <div class="row justify-content-center align-items-center upcoming-film-row mt-4 mt-lg-5">
                <div class="col-lg-4 col-md-5 mb-4 mb-md-0 text-center">
                    <div class="upcoming-film-poster-wrap">
                        <a href="{{ asset('images/ravidas_ek_vichar.avif') }}" class="popup-image d-block" title="Ravidas Ek Vichar - First Look Poster">
                            <img src="{{ asset('images/ravidas_ek_vichar.avif') }}" alt="Ravidas Ek Vichar - A Period Drama Film">
                            {{-- <span class="upcoming-badge">Coming Soon In Cinemas</span> --}}
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="upcoming-film-content ps-lg-4 text-center text-md-start">
                        <span class="upcoming-genre-tag">A Period Drama Film &bull; Biopic &bull; Social Inspiration</span>
                        <h3 class="upcoming-film-title">Ravidas Ek Vichar</h3>
                        <p class="upcoming-tagline">"संत रविदास का जीवन, दर्शन और समता का संदेश..."</p>
                        <p class="upcoming-film-desc">Mahobiya Films Production proudly presents its upcoming landmark biographical period drama celebrating the transformative life, profound spiritual philosophy, and eternal message of universal equality of Sant Ravidas.</p>
                        <div class="upcoming-film-meta">
                            <span><i class='bx bx-film'></i> Theatrical Release</span>
                            <span><i class='bx bx-time'></i> Coming Soon in Cinemas</span>
                            <span><i class='bx bx-map-pin'></i> Nationwide Release</span>
                        </div>
                        <div class="upcoming-film-actions mt-4">
                            <a class="banner-btn btn-gold me-2" href="{{ route('films') }}">Explore Upcoming Slate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Upcoming Movies -->

    <!-- Section 4 – Featured Work -->
    <section class="work-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">OUR WORK</span>
                <h2>A Story Worth Experiencing</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="film-spotlight-card">
                        <div class="film-spotlight-media">
                            <a href="{{ route('film.detail', 'mahakavya-shri-ramayan-katha') }}">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="{{ asset('images/poster_ramayan.jpg') }}">
                                    <img src="{{ asset('images/banner_ramayan.jpg') }}" alt="Mahakavya Shri Ramayan Katha - Theatrical Feature Film">
                                </picture>
                                <span class="spotlight-play-overlay">
                                    <i class='bx bx-play-circle'></i>
                                </span>
                            </a>
                        </div>
                        <div class="film-spotlight-body">
                            <div class="row align-items-center">
                                <div class="col-lg-7 text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="spotlight-meta-bar justify-content-center justify-content-lg-start">
                                        <span class="spotlight-badge">FEATURE FILM</span>
                                        <span class="spotlight-dot">&bull;</span>
                                        <span class="spotlight-lang">Hindi &amp; Chhattisgarhi</span>
                                        <span class="spotlight-dot">&bull;</span>
                                        <span class="spotlight-date">Released: 25 September 2026</span>
                                    </div>
                                    <h3 class="spotlight-title">Mahakavya Shri Ramayan Katha</h3>
                                    <p class="spotlight-desc">A grand mythological cinematic experience presenting the timeless journey of Shri Ram, released simultaneously across Hindi and Chhattisgarhi language editions nationwide.</p>
                                </div>
                                <div class="col-lg-5 text-center text-lg-end">
                                    <div class="spotlight-actions">
                                        <a class="banner-btn btn-gold me-2" href="{{ route('film.detail', 'mahakavya-shri-ramayan-katha') }}">
                                            Explore Film Details <i class='bx bx-right-arrow-alt'></i>
                                        </a>
                                        <a class="banner-btn btn-outline popup-youtube" href="https://www.youtube.com/watch?v=lUhw32rt_dE">
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
    <!-- End Featured Work -->

    <!-- Section 5 – Our Journey -->
    <div class="history-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">OUR JOURNEY</span>
                <h2>Building a Vision Through Cinema</h2>
                <p class="mt-3">Mahobiya Films Production was established in 2023 with a vision to create meaningful cinematic experiences and bring powerful stories to audiences. Based in Bhilai, Chhattisgarh, the company aims to connect regional storytelling with wider audiences through film and digital entertainment.</p>
            </div>
            <div class="row justify-content-center">
                <!-- Milestone 1: 2023 -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="journey-card">
                        <div class="journey-card-top">
                            <i class='bx bx-building-house'></i>
                        </div>
                        <h3>The Beginning</h3>
                        <p>Mahobiya Films Production Private Limited was incorporated in Bhilai, Chhattisgarh, establishing our foundation for cultural cinema.</p>
                    </div>
                </div>
                <!-- Milestone 2: 2026 -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="journey-card">
                        <div class="journey-card-top">
                            <i class='bx bx-film'></i>
                        </div>
                        <h3>Theatrical Release</h3>
                        <p>Our landmark mythological feature 'Mahakavya Shri Ramayan Katha' was released nationwide in Hindi and Chhattisgarhi editions.</p>
                    </div>
                </div>
                <!-- Milestone 3: Upcoming Horizon -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="journey-card">
                        <div class="journey-card-top">
                            <i class='bx bx-movie-play'></i>
                        </div>
                        <h3>Expanding Slate</h3>
                        <p>First look unveiled for biographical period drama 'Ravidas Ek Vichar', with new inspiring film projects in active development.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Journey -->

    <!-- Section 6 – What We Do (Our Expertise) -->
    <section class="service-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">OUR EXPERTISE</span>
                <h2>Creating Stories for Every Screen</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <i class='flaticon-video-camera-1'></i>
                        <div class="service-inner">
                            <h3>Film Production</h3>
                            <p>Developing and producing feature films with a focus on authentic cultural storytelling, cinematic aesthetics, and benchmark production values.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <i class='flaticon-creative-idea'></i>
                        <div class="service-inner">
                            <h3>Creative Direction</h3>
                            <p>Bringing narrative concepts, visual language, soundtrack design, and evocative cinematography together to create unforgettable viewer experiences.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <i class='flaticon-distribution'></i>
                        <div class="service-inner">
                            <h3>Digital Entertainment</h3>
                            <p>Expanding across OTT streaming platforms, web entertainment, and digital music releases to bring regional talent to nationwide audiences.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End What We Do -->

    <!-- Section 7 – Watch Our Films -->
    <section class="video-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">WATCH &amp; EXPLORE</span>
                <h2>Experience the Story on Screen</h2>
                <p>Explore official theatrical trailers and teasers of Mahakavya Shri Ramayan Katha in Hindi and Chhattisgarhi.</p>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="home-video-card">
                        <div class="week-item week-video-btn-two mb-0">
                            <img src="{{ asset('images/ramayan_video_preview.jpg') }}" alt="Hindi Official Trailer">
                            <a href="https://www.youtube.com/watch?v=lUhw32rt_dE" class="popup-youtube" title="Watch Hindi Official Trailer">
                                <i class='bx bx-play'></i>
                            </a>
                            <span class="home-video-lang">Hindi</span>
                        </div>
                        <div class="home-video-meta text-center mt-3">
                            <span class="home-video-badge">Official Trailer</span>
                            <h4>Hindi Official Trailer</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="home-video-card">
                        <div class="week-item week-video-btn-two mb-0">
                            <img src="{{ asset('images/ramayan_hindi_teaser.jpg') }}" alt="Hindi Official Teaser">
                            <a href="https://www.youtube.com/watch?v=NP5ebSjn-_I" class="popup-youtube" title="Watch Hindi Official Teaser">
                                <i class='bx bx-play'></i>
                            </a>
                            <span class="home-video-lang">Hindi</span>
                        </div>
                        <div class="home-video-meta text-center mt-3">
                            <span class="home-video-badge">Official Teaser</span>
                            <h4>Hindi Official Teaser</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="home-video-card">
                        <div class="week-item week-video-btn-two mb-0">
                            <img src="{{ asset('images/ramayan_cg_trailer.jpg') }}" alt="Chhattisgarhi Official Trailer">
                            <a href="https://www.youtube.com/watch?v=-BOLkzuT4MQ" class="popup-youtube" title="Watch Chhattisgarhi Official Trailer">
                                <i class='bx bx-play'></i>
                            </a>
                            <span class="home-video-lang">Chhattisgarhi</span>
                        </div>
                        <div class="home-video-meta text-center mt-3">
                            <span class="home-video-badge">Official Trailer</span>
                            <h4>Chhattisgarhi Official Trailer</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="home-video-card">
                        <div class="week-item week-video-btn-two mb-0">
                            <img src="{{ asset('images/ramayan_cg_teaser.jpg') }}" alt="Chhattisgarhi Official Teaser">
                            <a href="https://www.youtube.com/watch?v=15O23p7yQu4" class="popup-youtube" title="Watch Chhattisgarhi Official Teaser">
                                <i class='bx bx-play'></i>
                            </a>
                            <span class="home-video-lang">Chhattisgarhi</span>
                        </div>
                        <div class="home-video-meta text-center mt-3">
                            <span class="home-video-badge">Official Teaser</span>
                            <h4>Chhattisgarhi Official Teaser</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a class="banner-btn" href="{{ route('videos') }}">
                    Explore All Videos &amp; Reels <i class='bx bx-right-arrow-alt'></i>
                </a>
            </div>
        </div>
    </section>
    <!-- End Watch Our Films -->

    <!-- Section 8 – Our Leadership -->
    <section class="team-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">THE PEOPLE BEHIND THE VISION</span>
                <h2>Leadership at Mahobiya Films</h2>
                <p>Pioneering cultural cinema rooted in heritage with uncompromising production standards and bold artistic vision.</p>
            </div>
            <div class="row justify-content-center">
                <!-- Prakash Mahobiya -->
                <div class="col-md-6 col-lg-5 mb-4">
                    <div class="team-leadership-card">
                        <div class="leadership-photo-wrap">
                            <img src="{{ asset('images/prakash_mahobiya.jpg') }}" alt="Prakash Mahobiya - Founder & Managing Director">
                        </div>
                        <span class="leadership-badge">Founder &amp; Managing Director</span>
                        <h3 class="leadership-name">Prakash Mahobiya</h3>
                        <span class="leadership-title">Managing Director &amp; Key Principal</span>
                        <p class="leadership-bio">"Committed to pioneering cinema that honors our civilizational heritage while establishing benchmark production standards for audiences across India and beyond."</p>
                        <div class="leadership-social-row">
                            <a href="https://www.instagram.com/prakashmahobiya/" target="_blank" class="leadership-insta-btn" title="Follow Prakash Mahobiya on Instagram">
                                <i class='bx bxl-instagram'></i> @prakashmahobiya
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Sanjay Bundela -->
                <div class="col-md-6 col-lg-5 mb-4">
                    <div class="team-leadership-card">
                        <div class="leadership-photo-wrap">
                            <img src="{{ asset('images/sanjay_bundela.jpg') }}" alt="Sanjay Bundela - Co-Founder & Producer">
                        </div>
                        <span class="leadership-badge">Co-Founder &amp; Producer</span>
                        <h3 class="leadership-name">Sanjay Bundela</h3>
                        <span class="leadership-title">Studio Co-Founder &amp; Producer</span>
                        <p class="leadership-bio">"Dedicated to robust production execution, nurturing creative talent, and building sustainable regional cinema with global digital distribution."</p>
                        <div class="leadership-social-row">
                            <a href="https://www.instagram.com/sanjaybundela_06/" target="_blank" class="leadership-insta-btn" title="Follow Sanjay Bundela on Instagram">
                                <i class='bx bxl-instagram'></i> @sanjaybundela_06
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a class="banner-btn" href="{{ route('team') }}">
                    View Full Team &amp; Production Crew <i class='bx bx-right-arrow-alt'></i>
                </a>
            </div>
        </div>
    </section>
    <!-- End Our Leadership -->

    <!-- Section 9 – Latest News & Updates -->
    <section class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">PRESS ROOM &amp; ANNOUNCEMENTS</span>
                <h2>Latest Studio News &amp; Updates</h2>
            </div>
            <div class="row">
                <!-- Story 1: Ravidas Ek Vichar (Upcoming Project) -->
                <div class="col-sm-6 col-lg-4 mb-4 d-flex">
                    <div class="blog-item w-100 d-flex flex-column">
                        <a href="{{ route('films') }}" class="home-blog-thumb">
                            <div class="home-blog-blur-bg" style="background-image: url('{{ asset('images/ravidas_ek_vichar.avif') }}');"></div>
                            <img src="{{ asset('images/ravidas_ek_vichar.avif') }}" alt="Ravidas Ek Vichar - Upcoming Period Drama Announcement">
                        </a>
                        <div class="blog-bottom d-flex flex-column flex-grow-1">
                            <span class="news-category-badge">Upcoming Production &middot; First Look</span>
                            <h3>
                                <a href="{{ route('films') }}">First Look Unveiled: 'Ravidas Ek Vichar' Announced as Next Period Drama</a>
                            </h3>
                            <p>Mahobiya Films Production officially revealed the first look poster for its upcoming biographical period drama celebrating Sant Ravidas.</p>
                            <a class="blog-btn mt-auto" href="{{ route('films') }}">
                                Explore Upcoming Slate <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Story 2: Mahakavya Shri Ramayan Katha Theatrical Release -->
                <div class="col-sm-6 col-lg-4 mb-4 d-flex">
                    <div class="blog-item w-100 d-flex flex-column">
                        <a href="{{ route('film.detail', 'mahakavya-shri-ramayan-katha') }}" class="home-blog-thumb">
                            <div class="home-blog-blur-bg" style="background-image: url('{{ asset('images/banner_ramayan.jpg') }}');"></div>
                            <img src="{{ asset('images/banner_ramayan.jpg') }}" alt="Mahakavya Shri Ramayan Katha Theatrical Release">
                        </a>
                        <div class="blog-bottom d-flex flex-column flex-grow-1">
                            <span class="news-category-badge">Theatrical Release &middot; 25 Sept 2026</span>
                            <h3>
                                <a href="{{ route('film.detail', 'mahakavya-shri-ramayan-katha') }}">Nationwide Theatrical Release of 'Mahakavya Shri Ramayan Katha'</a>
                            </h3>
                            <p>Official release of the landmark mythological cinematic feature across Hindi and Chhattisgarhi language editions nationwide.</p>
                            <a class="blog-btn mt-auto" href="{{ route('film.detail', 'mahakavya-shri-ramayan-katha') }}">
                                Explore Film Details <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Story 3: Official Hindi Trailer Launch -->
                <div class="col-sm-6 col-lg-4 mb-4 d-flex">
                    <div class="blog-item w-100 d-flex flex-column">
                        <a href="https://www.youtube.com/watch?v=lUhw32rt_dE" class="home-blog-thumb popup-youtube">
                            <div class="home-blog-blur-bg" style="background-image: url('{{ asset('images/ramayan_video_preview.jpg') }}');"></div>
                            <img src="{{ asset('images/ramayan_video_preview.jpg') }}" alt="Official Hindi Trailer Released">
                            <span class="home-thumb-play"><i class='bx bx-play'></i></span>
                        </a>
                        <div class="blog-bottom d-flex flex-column flex-grow-1">
                            <span class="news-category-badge">Trailer Launch &middot; YouTube</span>
                            <h3>
                                <a href="https://www.youtube.com/watch?v=lUhw32rt_dE" class="popup-youtube">Official Hindi Theatrical Trailer Launched on YouTube</a>
                            </h3>
                            <p>Showcasing the epic scale, visual effects, and devotional depth of 'Mahakavya Shri Ramayan Katha' featuring Dev Sharma &amp; Anjali Arora.</p>
                            <a class="blog-btn popup-youtube mt-auto" href="https://www.youtube.com/watch?v=lUhw32rt_dE">
                                Watch Trailer <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a class="banner-btn" href="{{ route('news') }}">
                    View All News &amp; Press <i class='bx bx-right-arrow-alt'></i>
                </a>
            </div>
        </div>
    </section>
    <!-- End Latest News & Updates -->

    <!-- Section 10 – Contact / CTA -->
    <section class="trust-area home-cta-section ptb-100">
        <div class="container">
            <div class="home-cta-box">
                <div class="row align-items-center">
                    <div class="col-lg-8 text-lg-start text-center mb-4 mb-lg-0">
                        <span class="sub-title">CONNECT WITH MAHOBIYA FILMS</span>
                        <h2>Have a Story to Tell? Let's Create Together.</h2>
                        <p class="mb-0">We are always open to creative ideas, talented writers, artists, and meaningful production collaborations in cinema and digital entertainment.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end text-center">
                        <div class="home-cta-actions justify-content-lg-end justify-content-center">
                            <a class="banner-btn me-2 mb-2" href="{{ route('contact') }}">
                                Get In Touch <i class='bx bx-paper-plane'></i>
                            </a>
                            <a class="banner-btn mb-2" href="{{ route('about') }}">
                                Learn More About Us <i class='bx bx-info-circle'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact / CTA -->

@endsection
