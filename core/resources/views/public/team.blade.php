@extends('public.layouts.app')

@section('title', 'Our Team - Mahobiya Films Production')

@section('content')

    <!-- Page Title / Banner -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-item">
                <h2>Our Team</h2>
                <p>Studio Leadership &amp; Production Organization</p>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <span></span>
                    </li>
                    <li>Our Team</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Section 1: Office of the Founders & Executive Leadership (Crisp White Surface) -->
    <section class="team-leadership-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Office of the Founders</span>
                <h2>Executive Studio Leadership</h2>
                <p>Pioneering cultural cinema rooted in authentic heritage with uncompromising production standards and visionary studio leadership.</p>
            </div>

            <div class="row justify-content-center">
                <!-- Prakash Mahobiya -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="team-leadership-card">
                        <div class="leadership-photo-wrap">
                            <img src="{{ asset('images/prakash_mahobiya.jpg') }}" alt="Prakash Mahobiya">
                        </div>
                        <span class="leadership-badge">Founder &amp; Managing Director</span>
                        <h3 class="leadership-name">Prakash Mahobiya</h3>
                        <span class="leadership-title">Managing Director &amp; Key Principal</span>
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
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="team-leadership-card">
                        <div class="leadership-photo-wrap">
                            <img src="{{ asset('images/sanjay_bundela.jpg') }}" alt="Sanjay Bundela">
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

                <!-- Jugal Kishor Tiwari -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="team-leadership-card">
                        <div class="leadership-photo-wrap">
                            <img src="{{ asset('images/jugal_kishor_tiwari.avif') }}" alt="Jugal Kishor Tiwari - Executive Producer">
                        </div>
                        <span class="leadership-badge">Executive Producer</span>
                        <h3 class="leadership-name">Jugal Kishor Tiwari</h3>
                        <span class="leadership-title">Executive Producer &amp; Operations</span>
                        <div class="leadership-pills">
                            <span class="leadership-pill">Production Control</span>
                            <span class="leadership-pill">Resource Planning</span>
                            <span class="leadership-pill">Project Execution</span>
                        </div>
                        <p class="leadership-bio">"Ensuring creative visions translate seamlessly onto screen through rigorous production planning, strategic coordination, and operational excellence."</p>
                        <div class="text-center mt-auto">
                            <a href="https://www.instagram.com/jugaltiwari24/" target="_blank" class="leadership-insta-btn" title="Follow Jugal Kishor Tiwari on Instagram">
                                <i class='bx bxl-instagram'></i> @jugaltiwari24
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section 1 -->

    <!-- Section 2: Studio Divisions & Operational Desks (Cinema Dark Background) -->
    <section class="team-divisions-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Studio Organization</span>
                <h2>Internal Divisions &amp; Operational Desks</h2>
                <p>Mahobiya Films Production operates across five dedicated functional divisions to oversee development, filming, music, and distribution.</p>
            </div>

            <div class="row justify-content-center">
                <!-- Division 1 -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="division-card">
                        <div class="division-icon">
                            <i class='bx bx-edit-alt'></i>
                        </div>
                        <span class="division-dept">Development Cell</span>
                        <h3 class="division-title">Creative Development &amp; Script</h3>
                        <p class="division-desc">Conducting meticulous cultural research, mythological lore adaptation, screenplay development, and multi-lingual dialogue translation (Hindi &amp; Chhattisgarhi).</p>
                    </div>
                </div>

                <!-- Division 2 -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="division-card">
                        <div class="division-icon">
                            <i class='bx bx-video-recording'></i>
                        </div>
                        <span class="division-dept">Physical Production</span>
                        <h3 class="division-title">Theatrical Production &amp; Logistics</h3>
                        <p class="division-desc">Managing on-location shooting infrastructure across Central India, high-definition cinema camera packages, lighting rigs, set design, and production crews.</p>
                    </div>
                </div>

                <!-- Division 3 -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="division-card">
                        <div class="division-icon">
                            <i class='bx bx-headphone'></i>
                        </div>
                        <span class="division-dept">Music Label</span>
                        <h3 class="division-title">Music &amp; Audio (M Series – Bhilai)</h3>
                        <p class="division-desc">Composing original cinematic scores, traditional devotional bhajans, high-fidelity studio recording, and digital soundtrack streaming syndication.</p>
                    </div>
                </div>

                <!-- Division 4 -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="division-card">
                        <div class="division-icon">
                            <i class='bx bx-slider-alt'></i>
                        </div>
                        <span class="division-dept">Post-Production</span>
                        <h3 class="division-title">Post-Production &amp; Visual Artistry</h3>
                        <p class="division-desc">Overseeing 4K master theatrical editing, digital intermediate color grading, visual effects coordination, foley sound design, and theatrical teaser mastering.</p>
                    </div>
                </div>

                <!-- Division 5 -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="division-card">
                        <div class="division-icon">
                            <i class='bx bx-broadcast'></i>
                        </div>
                        <span class="division-dept">Release &amp; Syndication</span>
                        <h3 class="division-title">Distribution, Marketing &amp; PR</h3>
                        <p class="division-desc">Executing theatrical screen distribution, digital OTT syndication, YouTube streaming release campaigns, press releases, and nationwide media coordination.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section 2 -->

    <!-- Section 3: Studio Footprint & Production Facts (Crisp White Surface) -->
    <section class="team-footprint-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Production Footprint</span>
                <h2>Studio Operations At A Glance</h2>
                <p>Key operational pillars supporting our theatrical releases, music label, and creative collaborations.</p>
            </div>

            <div class="row">
                <!-- Fact 1 -->
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="studio-fact-card">
                        <div class="fact-icon">
                            <i class='bx bx-map-pin'></i>
                        </div>
                        <h3 class="fact-title">Bhilai, Chhattisgarh</h3>
                        <p class="fact-desc">Central Studio Headquarters &amp; Regional Filming Base in Central India.</p>
                    </div>
                </div>

                <!-- Fact 2 -->
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="studio-fact-card">
                        <div class="fact-icon">
                            <i class='bx bx-globe'></i>
                        </div>
                        <h3 class="fact-title">Dual Language Releases</h3>
                        <p class="fact-desc">Producing commercial cinema simultaneously in Hindi and Chhattisgarhi.</p>
                    </div>
                </div>

                <!-- Fact 3 -->
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="studio-fact-card">
                        <div class="fact-icon">
                            <i class='bx bxs-music'></i>
                        </div>
                        <h3 class="fact-title">M Series – Bhilai</h3>
                        <p class="fact-desc">Dedicated music subsidiary producing original devotional and cinematic tracks.</p>
                    </div>
                </div>

                <!-- Fact 4 -->
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="studio-fact-card">
                        <div class="fact-icon">
                            <i class='bx bx-movie-play'></i>
                        </div>
                        <h3 class="fact-title">Theatrical &amp; Digital</h3>
                        <p class="fact-desc">Multi-screen theatrical bookings paired with international digital reach.</p>
                    </div>
                </div>
            </div>

            <!-- Studio Collaboration Callout Banner -->
            <div class="channel-callout-banner mt-5">
                <div class="row align-items-center">
                    <div class="col-lg-8 text-center text-lg-start">
                        <span class="channel-sub-title">Join Our Creative Roster</span>
                        <h3>Collaborate With Mahobiya Films Production</h3>
                        <p>We are constantly seeking visionary directors, screenwriters, cinematographers, sound designers, and production crew. Connect directly with our studio desk to pitch stories or submit your portfolio.</p>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end mt-4 mt-lg-0">
                        <div class="d-flex flex-column flex-sm-row justify-content-lg-end gap-2">
                            <a class="banner-btn" href="{{ route('contact') }}">
                                <i class='bx bx-envelope'></i> Contact Studio Desk
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section 3 -->

@endsection
