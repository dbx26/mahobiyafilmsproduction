@extends('public.layouts.app')

@section('title', 'Mahobiya Films Production - Motion Picture, Regional Cinema & OTT Studio')

@section('content')
<!-- Hero Section (Moovi Cinema Style) -->
<section class="position-relative py-5" style="background: radial-gradient(circle at 60% 40%, #201314 0%, #090a10 75%); min-height: 85vh; display: flex; align-items: center; border-bottom: 1px solid var(--moovi-border);">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <!-- Left Info Column -->
            <div class="col-lg-7">
                <div class="d-flex flex-wrap gap-2 align-items-center mb-3">
                    <span class="badge tag-red"><i class="bi bi-award-fill me-1"></i> CBFC Certified</span>
                    <span class="badge tag-gold">Released • 25 Sept 2026</span>
                    <span class="badge tag-blue">Hindi &amp; Chhattisgarhi</span>
                </div>

                <h1 class="display-3 fw-bold text-white mb-3 cinema-font lh-1">
                    MAHAKAVYA <br>
                    <span class="text-moovi-red">SHRI RAMAYAN KATHA</span>
                </h1>
                <p class="lead text-secondary mb-4" style="max-width: 620px;">
                    An epic mythological cinematic creation produced by <strong>Prakash Mahobiya &amp; Sanjay Bundela</strong> and directed by <strong>Abhishek Singh</strong>. Bringing the eternal narrative to grand theatrical &amp; digital screens.
                </p>

                <!-- Key Specs Pills -->
                <div class="d-flex flex-wrap gap-4 text-secondary small mb-4 pb-2 border-bottom border-secondary border-opacity-25" style="max-width: 580px;">
                    <div><strong class="text-white">Director:</strong> Abhishek Singh</div>
                    <div><strong class="text-white">Music:</strong> Kailash Kher, Javed Ali</div>
                    <div><strong class="text-white">Genre:</strong> Bollywood Epic</div>
                </div>

                <!-- Action CTA Buttons -->
                <div class="d-flex flex-wrap align-items-center gap-3">
                    <button type="button" class="btn btn-moovi-primary d-flex align-items-center gap-2" onclick="openTrailer('lUhw32rt_dE', 'Mahakavya Shri Ramayan Katha - Official Hindi Trailer')">
                        <i class="bi bi-play-fill fs-5"></i> Watch Trailer
                    </button>
                    <a href="{{ route('film.detail') }}" class="btn btn-moovi-outline">
                        View Film Details
                    </a>
                </div>
            </div>

            <!-- Right Featured Card Column (Moovi Poster Showcase) -->
            <div class="col-lg-5 text-center">
                <div class="movie-card mx-auto p-3 shadow-lg" style="max-width: 420px; background: rgba(18, 19, 28, 0.95);">
                    <div class="movie-poster-box rounded-3 position-relative">
                        <!-- Poster Preview / Brand Banner -->
                        <div class="d-flex flex-column align-items-center justify-content-center p-4 text-center h-100" style="min-height: 280px; background: linear-gradient(135deg, #1f1418 0%, #0d0e15 100%);">
                            <span class="section-tag mb-1">Official Feature</span>
                            <h4 class="epic-font text-white mb-2">श्री रामायण कथा</h4>
                            <p class="text-secondary small mb-3">Dev Sharma • Anjali Arora • Rajniesh Duggall</p>
                            <!-- Play Button with Radar Pulse -->
                            <a href="javascript:void(0)" class="play-trigger-btn pulse-ring" onclick="openTrailer('lUhw32rt_dE', 'Mahakavya Shri Ramayan Katha - Official Trailer')" title="Play Trailer">
                                <i class="bi bi-play-fill"></i>
                            </a>
                        </div>
                    </div>

                    <div class="p-3 text-start">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h5 class="cinema-font text-white mb-0">Hindi &amp; Chhattisgarhi</h5>
                            <span class="badge bg-danger">Full HD</span>
                        </div>
                        <p class="text-secondary small mb-3">Playback vocals by Javed Ali, Kailash Kher, and Vaishali Samant.</p>
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-sm btn-outline-light w-50" onclick="openTrailer('NP5ebSjn-_I', 'Hindi Teaser')">
                                <i class="bi bi-play"></i> Hindi Teaser
                            </button>
                            <button type="button" class="btn btn-sm btn-outline-light w-50" onclick="openTrailer('-BOLkzuT4MQ', 'Chhattisgarhi Trailer')">
                                <i class="bi bi-play"></i> CG Trailer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission Banner (Moovi Philosophy Block) -->
<section class="py-5" style="background: #0d0f17; border-bottom: 1px solid var(--moovi-border);">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="section-tag">Studio Philosophy</span>
                <h2 class="display-5 cinema-font text-white mb-3">
                    Stories Rooted in Heritage, <br>
                    <span class="text-moovi-red">Crafted for the World.</span>
                </h2>
                <p class="text-secondary mb-4" style="line-height: 1.8;">
                    Founded in Bhilai, Chhattisgarh, <strong>Mahobiya Films Production Private Limited</strong> is a dynamic film and digital entertainment studio dedicated to bringing powerful narratives to life. From grand cultural epics to modern OTT experiences, we bridge regional authenticity with world-class cinematic craft.
                </p>
                <div class="d-flex gap-4">
                    <div>
                        <h4 class="cinema-font text-white mb-0">2023</h4>
                        <small class="text-secondary">Year Established</small>
                    </div>
                    <div class="border-start border-secondary border-opacity-25 ps-4">
                        <h4 class="cinema-font text-white mb-0">CBFC</h4>
                        <small class="text-secondary">Certified Quality</small>
                    </div>
                    <div class="border-start border-secondary border-opacity-25 ps-4">
                        <h4 class="cinema-font text-white mb-0">Dual-Language</h4>
                        <small class="text-secondary">Hindi &amp; Regional</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row g-3">
                    <!-- Vision Card -->
                    <div class="col-12">
                        <div class="movie-card p-4">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="rounded-circle bg-danger bg-opacity-10 p-3 text-moovi-red">
                                    <i class="bi bi-eye fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="cinema-font text-white mb-0">Our Vision</h5>
                                    <small class="text-secondary">Global Entertainment Map</small>
                                </div>
                            </div>
                            <p class="text-secondary small mb-0" style="line-height: 1.7;">
                                To put Central India on the global entertainment map as a premier creative powerhouse—celebrated for timeless storytelling, cultural richness, and memorable cinema that resonates across generations.
                            </p>
                        </div>
                    </div>

                    <!-- Mission Card -->
                    <div class="col-12">
                        <div class="movie-card p-4">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="rounded-circle bg-warning bg-opacity-10 p-3 text-moovi-gold">
                                    <i class="bi bi-bullseye fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="cinema-font text-white mb-0">Our Mission</h5>
                                    <small class="text-secondary">Empowering Storytellers</small>
                                </div>
                            </div>
                            <p class="text-secondary small mb-0" style="line-height: 1.7;">
                                To produce high-impact films and digital content by empowering visionary storytellers, nurturing emerging talent, and combining authentic Indian roots with cutting-edge production excellence for theatrical and OTT audiences worldwide.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Official Video Trailers Section -->
<section class="py-5" style="border-bottom: 1px solid var(--moovi-border);">
    <div class="container py-4">
        <div class="d-flex flex-wrap justify-content-between align-items-end mb-5">
            <div>
                <span class="section-tag">Watch &amp; Experience</span>
                <h2 class="display-6 cinema-font text-white mb-0">Official Trailers &amp; Teasers</h2>
            </div>
            <a href="{{ route('videos') }}" class="btn btn-sm btn-moovi-outline mt-3 mt-md-0">
                View All Media <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>

        <div class="row g-4">
            <!-- Video 1: Hindi Trailer -->
            <div class="col-lg-6 col-md-6">
                <div class="movie-card h-100">
                    <div class="ratio ratio-16x9 position-relative bg-black">
                        <iframe src="https://www.youtube.com/embed/lUhw32rt_dE" title="Hindi Official Trailer" allowfullscreen></iframe>
                    </div>
                    <div class="p-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="badge tag-red">Hindi Version</span>
                            <small class="text-secondary">Official Trailer</small>
                        </div>
                        <h5 class="cinema-font text-white mb-1">Mahakavya Shri Ramayan Katha - Trailer</h5>
                        <p class="text-secondary small mb-0">Director Abhishek Singh • Producers Prakash Mahobiya &amp; Sanjay Bundela</p>
                    </div>
                </div>
            </div>

            <!-- Video 2: Chhattisgarhi Trailer -->
            <div class="col-lg-6 col-md-6">
                <div class="movie-card h-100">
                    <div class="ratio ratio-16x9 position-relative bg-black">
                        <iframe src="https://www.youtube.com/embed/-BOLkzuT4MQ" title="Chhattisgarhi Official Trailer" allowfullscreen></iframe>
                    </div>
                    <div class="p-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="badge tag-gold">Chhattisgarhi Version</span>
                            <small class="text-secondary">Official Regional Trailer</small>
                        </div>
                        <h5 class="cinema-font text-white mb-1">महाकाव्य श्री रामायण कथा - ट्रेलर</h5>
                        <p class="text-secondary small mb-0">Featuring Dev Sharma, Anjali Arora, Rajniesh Duggall</p>
                    </div>
                </div>
            </div>

            <!-- Video 3: Hindi Teaser -->
            <div class="col-lg-6 col-md-6">
                <div class="movie-card h-100">
                    <div class="ratio ratio-16x9 position-relative bg-black">
                        <iframe src="https://www.youtube.com/embed/NP5ebSjn-_I" title="Hindi Official Teaser" allowfullscreen></iframe>
                    </div>
                    <div class="p-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="badge tag-red">Hindi Teaser</span>
                            <small class="text-secondary">First Look</small>
                        </div>
                        <h5 class="cinema-font text-white mb-1">Shri Ramayan Katha - Official Teaser</h5>
                        <p class="text-secondary small mb-0">Music &amp; Vocals by Kailash Kher &amp; Javed Ali</p>
                    </div>
                </div>
            </div>

            <!-- Video 4: Chhattisgarhi Teaser -->
            <div class="col-lg-6 col-md-6">
                <div class="movie-card h-100">
                    <div class="ratio ratio-16x9 position-relative bg-black">
                        <iframe src="https://www.youtube.com/embed/15O23p7yQu4" title="Chhattisgarhi Official Teaser" allowfullscreen></iframe>
                    </div>
                    <div class="p-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="badge tag-gold">CG Teaser</span>
                            <small class="text-secondary">First Look</small>
                        </div>
                        <h5 class="cinema-font text-white mb-1">श्री रामायण कथा - आधिकारिक टीजर</h5>
                        <p class="text-secondary small mb-0">Regional Presentation by Mahobiya Films Production</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Star Cast & Playback Singers Section -->
<section class="py-5" style="background: #0d0f17; border-bottom: 1px solid var(--moovi-border);">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="section-tag">The Talent</span>
            <h2 class="display-6 cinema-font text-white">Star Cast &amp; Musical Legends</h2>
            <p class="text-secondary small" style="max-width: 600px; margin: auto;">
                Brought together by director Abhishek Singh and producers Prakash Mahobiya and Sanjay Bundela.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Cast 1 -->
            <div class="col-lg-2 col-md-4 col-6">
                <div class="cast-card">
                    <div class="rounded-circle bg-secondary bg-opacity-25 mx-auto mb-3 d-flex align-items-center justify-content-center text-white" style="width: 80px; height: 80px;">
                        <i class="bi bi-person-fill fs-1"></i>
                    </div>
                    <h6 class="cinema-font text-white mb-0">Dev Sharma</h6>
                    <small class="text-moovi-red">Lead Actor</small>
                </div>
            </div>

            <!-- Cast 2 -->
            <div class="col-lg-2 col-md-4 col-6">
                <div class="cast-card">
                    <div class="rounded-circle bg-secondary bg-opacity-25 mx-auto mb-3 d-flex align-items-center justify-content-center text-white" style="width: 80px; height: 80px;">
                        <i class="bi bi-person-fill fs-1"></i>
                    </div>
                    <h6 class="cinema-font text-white mb-0">Anjali Arora</h6>
                    <small class="text-moovi-red">Lead Actress</small>
                </div>
            </div>

            <!-- Cast 3 -->
            <div class="col-lg-2 col-md-4 col-6">
                <div class="cast-card">
                    <div class="rounded-circle bg-secondary bg-opacity-25 mx-auto mb-3 d-flex align-items-center justify-content-center text-white" style="width: 80px; height: 80px;">
                        <i class="bi bi-person-fill fs-1"></i>
                    </div>
                    <h6 class="cinema-font text-white mb-0">Rajniesh Duggall</h6>
                    <small class="text-moovi-red">Star Cast</small>
                </div>
            </div>

            <!-- Cast 4 -->
            <div class="col-lg-2 col-md-4 col-6">
                <div class="cast-card">
                    <div class="rounded-circle bg-secondary bg-opacity-25 mx-auto mb-3 d-flex align-items-center justify-content-center text-white" style="width: 80px; height: 80px;">
                        <i class="bi bi-person-fill fs-1"></i>
                    </div>
                    <h6 class="cinema-font text-white mb-0">Nirbhay Wadhwa</h6>
                    <small class="text-moovi-red">Key Role</small>
                </div>
            </div>

            <!-- Cast 5 -->
            <div class="col-lg-2 col-md-4 col-6">
                <div class="cast-card">
                    <div class="rounded-circle bg-secondary bg-opacity-25 mx-auto mb-3 d-flex align-items-center justify-content-center text-white" style="width: 80px; height: 80px;">
                        <i class="bi bi-person-fill fs-1"></i>
                    </div>
                    <h6 class="cinema-font text-white mb-0">Sheel Verma</h6>
                    <small class="text-moovi-red">Key Role</small>
                </div>
            </div>
        </div>

        <!-- Music Singers Bar -->
        <div class="movie-card p-4 mt-5 text-center" style="background: linear-gradient(135deg, rgba(229, 9, 20, 0.08) 0%, rgba(18, 19, 28, 0.95) 100%);">
            <span class="section-tag mb-1">Soulful Soundtrack</span>
            <h4 class="cinema-font text-white mb-3">Playback Voices of Mahakavya Shri Ramayan Katha</h4>
            <div class="d-flex flex-wrap justify-content-center gap-4">
                <span class="badge tag-gold px-3 py-2 fs-6"><i class="bi bi-mic me-1"></i> Kailash Kher</span>
                <span class="badge tag-red px-3 py-2 fs-6"><i class="bi bi-mic me-1"></i> Javed Ali</span>
                <span class="badge tag-blue px-3 py-2 fs-6"><i class="bi bi-mic me-1"></i> Vaishali Samant</span>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Projects Teaser Banner -->
<section class="py-5 text-center position-relative" style="background: radial-gradient(circle at 50% 50%, #1a1018 0%, #090a10 80%);">
    <div class="container py-4">
        <span class="section-tag">Future Productions</span>
        <h2 class="display-5 cinema-font text-white mb-3">More Exciting Projects in the Pipeline</h2>
        <p class="text-secondary mx-auto mb-4" style="max-width: 650px;">
            Mahobiya Films Production is actively developing new feature films, historical sagas, and digital OTT series. Announcements for our upcoming slate will be revealed soon.
        </p>
        <a href="{{ route('contact') }}" class="btn btn-moovi-primary">
            Collaborate / Inquire with Studio
        </a>
    </div>
</section>
@endsection
