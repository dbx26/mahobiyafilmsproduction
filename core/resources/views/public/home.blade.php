@extends('public.layouts.app')

@section('title', 'Mahobiya Films Production - Stories Rooted in Heritage, Crafted for the World')

@section('content')

    <!-- Section 1 – Main Hero Banner -->
    <div class="banner-wrap">
        <div class="banner-slider owl-theme owl-carousel">
            <div class="banner-area banner-img-one">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="banner-content">
                            <span class="sub-title">MAHOBIYA FILMS PRODUCTION</span>
                            <h1>Stories Rooted in Heritage, Crafted for the World.</h1>
                            <p>Bringing powerful stories to life through cinema, culture and creativity. From meaningful regional storytelling to large-scale cinematic experiences, we create films that connect with audiences.</p>
                            <a class="banner-btn" href="{{ route('films') }}">Explore Our Films</a>
                            <a class="banner-btn popup-youtube" href="https://www.youtube.com/watch?v=lUhw32rt_dE">
                                <i class='bx bx-play-circle'></i> Watch Trailer
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-area banner-img-two">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="banner-content">
                            <span class="sub-title">FEATURED FILM</span>
                            <h1>Mahakavya Shri Ramayan Katha</h1>
                            <p>A grand mythological cinematic experience presenting the timeless journey of Shri Ram, released across Hindi and Chhattisgarhi language editions.</p>
                            <a class="banner-btn" href="{{ route('film.detail', 'mahakavya-shri-ramayan-katha') }}">Explore Film Details</a>
                            <a class="banner-btn popup-youtube" href="https://www.youtube.com/watch?v=lUhw32rt_dE">
                                <i class='bx bx-play-circle'></i> Watch Trailer
                            </a>
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
                <p>Mahobiya Films Production Private Limited is a film and digital entertainment production house based in Bhilai, Chhattisgarh.</p>
                <p>Founded in 2023, the company is focused on producing meaningful films and digital content that bring together cultural values, creative storytelling and modern filmmaking.</p>
                <p>With a vision to create stories that connect with audiences across regions and generations, Mahobiya Films aims to contribute to the growing Indian film and entertainment industry.</p>
                <div class="text-center mt-4">
                    <a class="banner-btn" href="{{ route('about') }}">Discover Our Story</a>
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
                <h2>Stories Coming Soon</h2>
                <p>We are continuously exploring new stories and creative opportunities to bring fresh cinematic experiences to audiences.</p>
            </div>
            <div class="row justify-content-center align-items-center mt-5">
                <div class="col-lg-4 col-md-5 mb-4 mb-md-0 text-center">
                    <div class="upcoming-film-poster-wrap">
                        <img src="{{ asset('images/ravidas_ek_vichar.avif') }}" alt="Ravidas Ek Vichar - A Period Drama Film">
                        <span class="upcoming-badge">Coming Soon In Cinemas</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="upcoming-film-content ps-lg-4 text-center text-md-start">
                        <span class="upcoming-genre-tag">A Period Drama Film &bull; Biopic &bull; Social Inspiration</span>
                        <h3 class="upcoming-film-title">Ravidas Ek Vichar</h3>
                        <p class="upcoming-tagline">"संत रविदास का जीवन, दर्शन और समता का संदेश..."</p>
                        <p class="upcoming-film-desc">Mahobiya Films Production proudly presents its upcoming landmark biographical period drama celebrating the transformative life, profound spiritual philosophy, and eternal message of universal equality of Sant Ravidas.</p>
                        <div class="upcoming-film-meta">
                            <span><i class='bx bx-film'></i> Theatrical Release</span>
                            <span><i class='bx bx-time'></i> Coming Soon in Cinemas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Upcoming Movies -->

    <!-- Section 4 – Featured Work -->
    <section class="work-area pt-100 pb-70">
        <div class="container-fluid p-0">
            <div class="section-title">
                <span class="sub-title">OUR WORK</span>
                <h2>A Story Worth Experiencing</h2>
            </div>
            <div class="row m-0 justify-content-center">
                <div class="col-lg-8 p-0">
                    <a href="{{ route('film.detail', 'mahakavya-shri-ramayan-katha') }}">
                        <div class="work-item">
                            <img src="{{ asset('images/banner_ramayan.jpg') }}" alt="Mahakavya Shri Ramayan Katha">
                            <div class="work-content">
                                <h3>Mahakavya Shri Ramayan Katha</h3>
                                <span>Feature Film · Hindi &amp; Chhattisgarhi · Released 25 September 2026</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="text-center mt-4">
                <a class="banner-btn me-2" href="{{ route('film.detail', 'mahakavya-shri-ramayan-katha') }}">Explore Film</a>
                <a class="banner-btn popup-youtube" href="https://www.youtube.com/watch?v=lUhw32rt_dE">
                    <i class='bx bx-play-circle'></i> Watch Trailer
                </a>
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
                <div class="col-md-6 col-lg-5">
                    <div class="service-item text-center">
                        <i class='flaticon-video-camera'></i>
                        <div class="service-inner">
                            <div class="section-title mb-2">
                                <span class="sub-title m-0">2023</span>
                            </div>
                            <h3>The Beginning</h3>
                            <p>Mahobiya Films Production Private Limited was incorporated in Bhilai, Chhattisgarh.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="service-item text-center">
                        <i class='flaticon-director-chair'></i>
                        <div class="service-inner">
                            <div class="section-title mb-2">
                                <span class="sub-title m-0">2026</span>
                            </div>
                            <h3>A Cinematic Project</h3>
                            <p>Mahakavya Shri Ramayan Katha was released in Hindi and Chhattisgarhi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Journey -->

    <!-- Section 6 – What We Do (Our Expertise) -->
    <section class="service-area service-area-two pt-100 pb-70">
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
                            <h3>1. Film Production</h3>
                            <p>Developing and producing films with a focus on creative storytelling and cinematic presentation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <i class='flaticon-creative-idea'></i>
                        <div class="service-inner">
                            <h3>2. Creative Direction</h3>
                            <p>Bringing stories, ideas and creative concepts together to create engaging visual experiences.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <i class='flaticon-distribution'></i>
                        <div class="service-inner">
                            <h3>3. Digital Entertainment</h3>
                            <p>Exploring opportunities in digital content and OTT entertainment for audiences across platforms.</p>
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
                <p>Explore the official trailers and teasers of Mahakavya Shri Ramayan Katha in Hindi and Chhattisgarhi.</p>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="week-item week-video-btn-two">
                        <img src="https://img.youtube.com/vi/lUhw32rt_dE/hqdefault.jpg" alt="Hindi Official Trailer">
                        <a href="https://www.youtube.com/watch?v=lUhw32rt_dE" class="popup-youtube">
                            <i class='bx bx-play'></i>
                        </a>
                    </div>
                    <div class="text-center mt-3">
                        <h4>Hindi Official Trailer</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="week-item week-video-btn-two">
                        <img src="https://img.youtube.com/vi/NP5ebSjn-_I/hqdefault.jpg" alt="Hindi Official Teaser">
                        <a href="https://www.youtube.com/watch?v=NP5ebSjn-_I" class="popup-youtube">
                            <i class='bx bx-play'></i>
                        </a>
                    </div>
                    <div class="text-center mt-3">
                        <h4>Hindi Official Teaser</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="week-item week-video-btn-two">
                        <img src="https://img.youtube.com/vi/-BOLkzuT4MQ/hqdefault.jpg" alt="Chhattisgarhi Official Trailer">
                        <a href="https://www.youtube.com/watch?v=-BOLkzuT4MQ" class="popup-youtube">
                            <i class='bx bx-play'></i>
                        </a>
                    </div>
                    <div class="text-center mt-3">
                        <h4>Chhattisgarhi Official Trailer</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="week-item week-video-btn-two">
                        <img src="https://img.youtube.com/vi/15O23p7yQu4/hqdefault.jpg" alt="Chhattisgarhi Official Teaser">
                        <a href="https://www.youtube.com/watch?v=15O23p7yQu4" class="popup-youtube">
                            <i class='bx bx-play'></i>
                        </a>
                    </div>
                    <div class="text-center mt-3">
                        <h4>Chhattisgarhi Official Teaser</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Watch Our Films -->

    <!-- Section 8 – Our Leadership -->
    <section class="team-area pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">THE PEOPLE BEHIND THE VISION</span>
                <h2>Leadership at Mahobiya Films</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="team-item">
                        <div class="team-top">
                            <img src="{{ asset('images/prakash_mahobiya.jpg') }}" alt="Prakash Mahobiya">
                            <ul>
                                <li>
                                    <a href="https://youtube.com/@mseries-bhilai" target="_blank">
                                        <i class='bx bxl-youtube'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/official_mahobiya_film" target="_blank">
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-bottom">
                            <h3>Prakash Mahobiya</h3>
                            <span>Founder / Key Principal</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="team-item">
                        <div class="team-top">
                            <img src="{{ asset('images/sanjay_bundela.jpg') }}" alt="Sanjay Bundela">
                            <ul>
                                <li>
                                    <a href="https://youtube.com/@mseries-bhilai" target="_blank">
                                        <i class='bx bxl-youtube'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/official_mahobiya_film" target="_blank">
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-bottom">
                            <h3>Sanjay Bundela</h3>
                            <span>Founder / Key Principal</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Leadership -->

    <!-- Section 9 – Latest News & Updates -->
    <section class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">FROM OUR WORLD</span>
                <h2>Latest News &amp; Updates</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <a href="{{ route('film.detail', 'mahakavya-shri-ramayan-katha') }}">
                            <img src="{{ asset('assets/img/home-one/blog1.jpg') }}" alt="Film Release">
                        </a>
                        <div class="blog-bottom">
                            <span>25 September 2026</span>
                            <h3>
                                <a href="{{ route('film.detail', 'mahakavya-shri-ramayan-katha') }}">Mahakavya Shri Ramayan Katha – Film Release</a>
                            </h3>
                            <p>Theatrical release of the epic mythological feature film across Central India and nationwide.</p>
                            <a class="blog-btn" href="{{ route('film.detail', 'mahakavya-shri-ramayan-katha') }}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <a href="https://www.youtube.com/watch?v=lUhw32rt_dE" class="popup-youtube">
                            <img src="{{ asset('assets/img/home-one/blog2.jpg') }}" alt="Hindi Trailer">
                        </a>
                        <div class="blog-bottom">
                            <span>September 2026</span>
                            <h3>
                                <a href="https://www.youtube.com/watch?v=lUhw32rt_dE" class="popup-youtube">Official Hindi Trailer Released</a>
                            </h3>
                            <p>The official Hindi trailer featuring Dev Sharma, Anjali Arora and Rajniesh Duggal is streaming now.</p>
                            <a class="blog-btn popup-youtube" href="https://www.youtube.com/watch?v=lUhw32rt_dE">Watch Trailer</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <a href="https://www.youtube.com/watch?v=-BOLkzuT4MQ" class="popup-youtube">
                            <img src="{{ asset('assets/img/home-one/blog3.jpg') }}" alt="Chhattisgarhi Trailer">
                        </a>
                        <div class="blog-bottom">
                            <span>September 2026</span>
                            <h3>
                                <a href="https://www.youtube.com/watch?v=-BOLkzuT4MQ" class="popup-youtube">Official Chhattisgarhi Trailer Released</a>
                            </h3>
                            <p>Bringing authentic regional language cinema with the dedicated Chhattisgarhi trailer edition.</p>
                            <a class="blog-btn popup-youtube" href="https://www.youtube.com/watch?v=-BOLkzuT4MQ">Watch Trailer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest News & Updates -->

    <!-- Section 10 – Contact / CTA -->
    <section class="trust-area ptb-100 text-center">
        <div class="container">
            <div class="section-title">
                <h2>Have a Story to Tell? Let's Connect.</h2>
                <p>We are always open to creative ideas, meaningful collaborations and new opportunities in the world of cinema and digital entertainment.</p>
            </div>
            <div class="banner-content mt-4">
                <a class="banner-btn" href="{{ route('contact') }}">Get In Touch</a>
            </div>
        </div>
    </section>
    <!-- End Contact / CTA -->

@endsection
