@extends('public.layouts.app')

@section('title', 'About Us - Mahobiya Films Production')

@section('content')

    <!-- Page Title / Banner -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-item">
                <h2>About Us</h2>
                <p>Stories Rooted in Heritage, Crafted for the World</p>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <span></span>
                    </li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Section 1 – Who We Are -->
    <section class="trust-area about-vision-section pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <!-- Column 1: Cinematic Visual First -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="about-vision-media">
                        <div class="vision-media-frame">
                            <img src="{{ asset('images/about_banner.avif') }}?v={{ @filemtime(public_path('images/about_banner.avif')) ?: 2 }}" alt="A Vision for Meaningful Cinema - Mahobiya Films Production">
                            <div class="vision-media-overlay"></div>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Studio Narrative -->
                <div class="col-lg-6">
                    <div class="about-vision-narrative ps-lg-3">
                        <div class="section-title text-start mb-3">
                            <span class="sub-title">Who We Are</span>
                            <h2>A Vision for Meaningful Cinema</h2>
                        </div>
                        <div class="narrative-body">
                            <p class="lead-text">Mahobiya Films Production Private Limited is a film and digital entertainment production company established in Bhilai, Chhattisgarh, in 2023.</p>
                            <p>We believe cinema is more than entertainment. It is a powerful way to share stories, culture, emotions and ideas with people.</p>
                            <p>Our focus is on bringing creative stories to life through film production and digital entertainment while connecting regional creativity with a wider audience.</p>
                        </div>
                        <div class="about-pillars-list">
                            <div class="pillar-item">
                                <div class="pillar-icon"><i class="flaticon-video-camera-2"></i></div>
                                <div class="pillar-info">
                                    <h4>Heritage &amp; Cultural Roots</h4>
                                    <p>Bringing authentic Indian folklore and meaningful regional narratives to the forefront.</p>
                                </div>
                            </div>
                            <div class="pillar-item">
                                <div class="pillar-icon"><i class="flaticon-director-chair"></i></div>
                                <div class="pillar-info">
                                    <h4>Theatrical &amp; OTT Scale</h4>
                                    <p>High-definition cinematic production engineered for silver screens and digital streaming worldwide.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="product-item">
                        <img src="{{ asset('assets/img/home-one/blog4.jpg') }}" alt="Powerful Storytelling - Theatrical Cinema">
                        <h3>Powerful Storytelling</h3>
                        <p>Bringing meaningful and engaging stories to the screen.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="product-item">
                        <img src="{{ asset('images/ramayan_spotlight.jpg') }}" alt="Cultural Connection - Indian Heritage">
                        <h3>Cultural Connection</h3>
                        <p>Celebrating Indian heritage and regional creativity.</p>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4 mb-4">
                    <div class="product-item">
                        <img src="{{ asset('assets/img/home-one/blog2.jpg') }}" alt="Creative Excellence - Modern Production">
                        <h3>Creative Excellence</h3>
                        <p>Combining creative ideas with modern filmmaking practices.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product -->

    <!-- Section 5 – Featured Film -->
    <section class="work-area about-featured-work pt-100 pb-100">
        <div class="container">
            <div class="section-title text-center">
                <span class="sub-title">Featured Production</span>
                <h2>Mahakavya Shri Ramayan Katha</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="work-details-item mb-0">
                        <!-- Cinematic Widescreen Banner with Video Play Lightbox -->
                        <div class="work-details-img">
                            <img src="{{ asset('images/banner_ramayan.jpg') }}" alt="Mahakavya Shri Ramayan Katha - Theatrical Banner">
                            <a href="https://www.youtube.com/watch?v=lUhw32rt_dE" class="popup-youtube" aria-label="Watch Trailer">
                                <i class='bx bx-play'></i>
                            </a>
                        </div>

                        <!-- Moovi Theme Editorial Narrative & Metadata -->
                        <div class="work-details-content text-center mb-0">
                            <ul class="work-meta-list">
                                <li>Epic Mythological Saga</li>
                                <li><span>/</span></li>
                                <li>Hindi &amp; Chhattisgarhi</li>
                                <li><span>/</span></li>
                                <li>Theatrical Release: 25 September 2026</li>
                            </ul>
                            <p>Mahakavya Shri Ramayan Katha is Mahobiya Films' flagship cinematic production. Rooted in India's grandest epic, the film combines timeless storytelling with cutting-edge visual effects, an evocative orchestral score, and an ensemble cast to deliver a transformative theatrical experience for audiences worldwide.</p>
                            <div class="work-details-btn-wrap mt-4">
                                <a href="{{ route('film.detail', 'mahakavya-shri-ramayan-katha') }}" class="banner-btn">
                                    Explore Film Details <i class='bx bx-right-arrow-alt'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Work -->

    <!-- Section 6 – Leadership -->
    <section class="team-area team-area-two team-area-three pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sub-title">Studio Leadership</span>
                <h2>The People Behind The Vision</h2>
                <p>Guided by visionary leadership, deep-rooted passion for cultural storytelling, and commitment to world-class cinematic excellence.</p>
            </div>
            <div class="row justify-content-center">
                <!-- Prakash Mahobiya -->
                <div class="col-md-6 col-lg-6 mb-4">
                    <div class="team-leadership-card">
                        <div class="leadership-photo-wrap">
                            <img src="{{ asset('images/prakash_mahobiya.jpg') }}" alt="Prakash Mahobiya - Founder &amp; Managing Director">
                        </div>
                        <span class="leadership-badge">Founder &amp; Managing Director</span>
                        <h3 class="leadership-name">Prakash Mahobiya</h3>
                        <span class="leadership-title">Managing Director &amp; Visionary Principal</span>
                        <div class="leadership-pills">
                            <span class="leadership-pill">Studio Vision</span>
                            <span class="leadership-pill">Creative Direction</span>
                            <span class="leadership-pill">Theatrical Scale</span>
                        </div>
                        <p class="leadership-bio">"Committed to pioneering cinema that honors our civilizational heritage while establishing benchmark production standards for audiences across India and beyond."</p>
                        <div class="text-center mt-auto">
                            <a href="https://www.instagram.com/prakashmahobiya/" target="_blank" class="leadership-insta-btn" title="Follow Prakash Mahobiya on Instagram">
                                <i class='bx bxl-instagram'></i> @prakashmahobiya
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Sanjay Bundela -->
                <div class="col-md-6 col-lg-6 mb-4">
                    <div class="team-leadership-card">
                        <div class="leadership-photo-wrap">
                            <img src="{{ asset('images/sanjay_bundela.jpg') }}" alt="Sanjay Bundela - Co-Founder &amp; Director">
                        </div>
                        <span class="leadership-badge">Co-Founder &amp; Producer</span>
                        <h3 class="leadership-name">Sanjay Bundela</h3>
                        <span class="leadership-title">Studio Co-Founder &amp; Producer</span>
                        <div class="leadership-pills">
                            <span class="leadership-pill">Executive Production</span>
                            <span class="leadership-pill">Line Operations</span>
                            <span class="leadership-pill">Music Label (M Series)</span>
                        </div>
                        <p class="leadership-bio">"Dedicated to robust production execution, nurturing creative talent, and building sustainable regional cinema with global digital distribution."</p>
                        <div class="text-center mt-auto">
                            <a href="https://www.instagram.com/sanjaybundela_06/" target="_blank" class="leadership-insta-btn" title="Follow Sanjay Bundela on Instagram">
                                <i class='bx bxl-instagram'></i> @sanjaybundela_06
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team -->

@endsection
