@extends('public.layouts.app')

@section('title', 'Mahakavya Shri Ramayan Katha - Film Details | Mahobiya Films Production')

@section('content')

    <!-- Page Title -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-item">
                <h2>Mahakavya Shri Ramayan Katha</h2>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <span></span>
                    </li>
                    <li><a href="{{ route('films') }}">Our Films</a></li>
                    <li>
                        <span></span>
                    </li>
                    <li>Film Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Work Details -->
    <div class="work-details-area pt-100 pb-70">
        <div class="container">
            <!-- Top Section: Video & Film Synopsis + Sidebar Info -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="work-details-item">
                        <div class="work-details-img">
                            <img src="{{ asset('images/ramayan_video_preview.jpg') }}" alt="Mahakavya Shri Ramayan Katha Official Trailer Preview">
                            <a href="https://www.youtube.com/watch?v=lUhw32rt_dE" class="popup-youtube">
                                <i class='bx bx-play'></i>
                            </a>
                        </div>
                        <div class="work-details-content">
                            <ul>
                                <li>Feature Film</li>
                                <li>
                                    <span>/</span>
                                </li>
                                <li>Hindi &amp; Chhattisgarhi</li>
                                <li>
                                    <span>/</span>
                                </li>
                                <li>Released: 25 September 2026</li>
                            </ul>
                            <h3>Mahakavya Shri Ramayan Katha</h3>
                            <p>Mahakavya Shri Ramayan Katha is a cinematic film project presented by Mahobiya Films Production, bringing the timeless cultural and storytelling heritage of Shri Ramayan to the screen. The film is available in Hindi and Chhattisgarhi, bringing its cinematic presentation to audiences in both languages.</p>
                        </div>
                        <div class="work-details-quote">
                            <i class='bx bxs-quote-left'></i>
                            <p>A Timeless Story. A Cinematic Experience.</p>
                            <div class="link">
                                <a href="#">- Mahobiya Films Production</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="work-details-item">
                        <div class="work-details-work">
                            <h3>Film Information</h3>
                            <div class="work-inner">
                                <ul>
                                    <li>
                                        <h4>Release Date</h4>
                                        <span>25 September 2026</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="work-inner">
                                <ul>
                                    <li>
                                        <h4>Language</h4>
                                        <span>Hindi &amp; Chhattisgarhi</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="work-inner">
                                <ul>
                                    <li>
                                        <h4>Category</h4>
                                        <span>Feature Film</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="work-inner">
                                <ul>
                                    <li>
                                        <h4>Status</h4>
                                        <span>Released</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="work-inner">
                                <ul>
                                    <li>
                                        <h4>Director</h4>
                                        <span>Abhishek Singh</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="work-inner">
                                <ul>
                                    <li>
                                        <h4>Producers</h4>
                                        <span>Prakash Mahobiya &amp; Sanjay Bundela</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="work-inner">
                                <ul>
                                    <li>
                                        <h4>Production Banner</h4>
                                        <span>Mahobiya Films Production</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="work-inner">
                                <ul>
                                    <li>
                                        <h4>Origin</h4>
                                        <span>Bhilai, Chhattisgarh, India</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Section -->

            <!-- Full-Width Section: Star Cast & Lead Performers -->
            <div class="film-cast-section">
                <div class="section-header">
                    <span class="sub-title">The Faces of Our Cinema</span>
                    <h3>Star Cast &amp; Lead Performers</h3>
                </div>

                <div class="cast-grid-five">
                    <!-- Dev Sharma -->
                    <div class="team-cast-card">
                        <div class="team-cast-avatar">
                            <img src="{{ asset('images/cast/dev_sharma.jpg') }}" alt="Dev Sharma - Lord Shri Ram">
                        </div>
                        <h5 class="team-cast-name">Dev Sharma</h5>
                        <span class="team-cast-character">Lord Shri Ram</span>
                    </div>

                    <!-- Anjali Arora -->
                    <div class="team-cast-card">
                        <div class="team-cast-avatar">
                            <img src="{{ asset('images/cast/anjali_arora.jpg') }}" alt="Anjali Arora - Mata Sita">
                        </div>
                        <h5 class="team-cast-name">Anjali Arora</h5>
                        <span class="team-cast-character">Mata Sita</span>
                    </div>

                    <!-- Rajniesh Duggall -->
                    <div class="team-cast-card">
                        <div class="team-cast-avatar">
                            <img src="{{ asset('images/cast/rajniesh_duggall.jpg') }}" alt="Rajniesh Duggall - Ravan">
                        </div>
                        <h5 class="team-cast-name">Rajniesh Duggall</h5>
                        <span class="team-cast-character">Ravan</span>
                    </div>

                    <!-- Sheel Verma -->
                    <div class="team-cast-card">
                        <div class="team-cast-avatar">
                            <img src="{{ asset('images/cast/sheel_verma.jpg') }}" alt="Sheel Verma - Lakshman">
                        </div>
                        <h5 class="team-cast-name">Sheel Verma</h5>
                        <span class="team-cast-character">Lakshman</span>
                    </div>

                    <!-- Nirbhay Wadhwa -->
                    <div class="team-cast-card">
                        <div class="team-cast-avatar">
                            <img src="{{ asset('images/cast/nirbhay_wadhwa.jpg') }}" alt="Nirbhay Wadhwa - Lord Hanuman">
                        </div>
                        <h5 class="team-cast-name">Nirbhay Wadhwa</h5>
                        <span class="team-cast-character">Lord Hanuman</span>
                    </div>
                </div>
            </div>

            <!-- Full-Width Section: Creative Crew & Filmmakers -->
            <div class="film-cast-section">
                <div class="section-header">
                    <span class="sub-title">Behind The Scenes</span>
                    <h3>Filmmakers &amp; Creative Team</h3>
                </div>
                <div class="crew-grid">
                    <div class="crew-card">
                        <span class="crew-role">Director</span>
                        <h4 class="crew-name">Abhishek Singh</h4>
                    </div>
                    <div class="crew-card">
                        <span class="crew-role">Producers</span>
                        <h4 class="crew-name">Prakash Mahobiya &amp; Sanjay Bundela</h4>
                    </div>
                    <div class="crew-card">
                        <span class="crew-role">Co-Producers</span>
                        <h4 class="crew-name">Honey Kuldeep Agarwal &amp; Monika Sen</h4>
                    </div>
                    <div class="crew-card">
                        <span class="crew-role">Creative Director</span>
                        <h4 class="crew-name">Deekshit Kaul</h4>
                    </div>
                    <div class="crew-card">
                        <span class="crew-role">Music Directors</span>
                        <h4 class="crew-name">Dev Chauhaan &amp; Ashish Donald</h4>
                    </div>
                    <div class="crew-card">
                        <span class="crew-role">Lyricist</span>
                        <h4 class="crew-name">Jaidev Jonwal</h4>
                    </div>
                    <div class="crew-card">
                        <span class="crew-role">Cinematography (DOP)</span>
                        <h4 class="crew-name">Kunal V. Kadam &amp; Ravi Parcha</h4>
                    </div>
                    <div class="crew-card">
                        <span class="crew-role">Film Editor</span>
                        <h4 class="crew-name">Ajay Varma</h4>
                    </div>
                </div>
            </div>

            <!-- Full-Width Section: Music Department & Playback Singers -->
            <div class="film-cast-section">
                <div class="section-header">
                    <span class="sub-title">Soundtrack &amp; Devotion</span>
                    <h3>Playback Singers</h3>
                </div>
                <div class="music-artists-list">
                    <span class="music-artist-pill"><i class='bx bx-music'></i> Javed Ali</span>
                    <span class="music-artist-pill"><i class='bx bx-music'></i> Kailash Kher</span>
                    <span class="music-artist-pill"><i class='bx bx-music'></i> Shaan</span>
                    <span class="music-artist-pill"><i class='bx bx-music'></i> Shahid Mallya</span>
                    <span class="music-artist-pill"><i class='bx bx-music'></i> Vaishali Samant</span>
                    <span class="music-artist-pill"><i class='bx bx-music'></i> Farhad Bhiwandiwala</span>
                </div>
            </div>

            <!-- Full-Width Section: Watch the Official Trailers -->
            <div class="film-cast-section">
                <div class="section-header">
                    <span class="sub-title">Watch The Official Trailers</span>
                    <h3>Trailers &amp; Teasers</h3>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="week-item week-video-btn-two">
                            <img src="{{ asset('images/ramayan_video_preview.jpg') }}" alt="Hindi Official Trailer">
                            <a href="https://www.youtube.com/watch?v=lUhw32rt_dE" class="popup-youtube">
                                <i class='bx bx-play'></i>
                            </a>
                        </div>
                        <h4 class="trailer-title">Hindi Official Trailer</h4>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="week-item week-video-btn-two">
                            <img src="{{ asset('images/ramayan_hindi_teaser.jpg') }}" alt="Hindi Official Teaser">
                            <a href="https://www.youtube.com/watch?v=NP5ebSjn-_I" class="popup-youtube">
                                <i class='bx bx-play'></i>
                            </a>
                        </div>
                        <h4 class="trailer-title">Hindi Official Teaser</h4>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="week-item week-video-btn-two">
                            <img src="{{ asset('images/ramayan_cg_trailer.jpg') }}" alt="Chhattisgarhi Official Trailer">
                            <a href="https://www.youtube.com/watch?v=-BOLkzuT4MQ" class="popup-youtube">
                                <i class='bx bx-play'></i>
                            </a>
                        </div>
                        <h4 class="trailer-title">Chhattisgarhi Official Trailer</h4>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="week-item week-video-btn-two">
                            <img src="{{ asset('images/ramayan_cg_teaser.jpg') }}" alt="Chhattisgarhi Official Teaser">
                            <a href="https://www.youtube.com/watch?v=15O23p7yQu4" class="popup-youtube">
                                <i class='bx bx-play'></i>
                            </a>
                        </div>
                        <h4 class="trailer-title">Chhattisgarhi Official Teaser</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Work Details -->

@endsection
