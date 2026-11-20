<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Mahobiya Films Production - Motion Picture & OTT Production')</title>
    <meta name="description" content="Official website of Mahobiya Films Production Private Limited. Motion picture, television, and OTT film studio based in Bhilai, Chhattisgarh. Creators of Mahakavya Shri Ramayan Katha.">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    <!-- Google Fonts: Syne & Outfit (Moovi Modern Cinema Style) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Syne:wght@600;700;800&family=Cinzel:wght@600;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 & Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Moovi Cinema Styling -->
    <style>
        :root {
            --moovi-bg: #090a10;
            --moovi-card: #12131c;
            --moovi-card-hover: #191b26;
            --moovi-border: rgba(255, 255, 255, 0.08);
            --moovi-red: #e50914;
            --moovi-red-glow: rgba(229, 9, 20, 0.4);
            --moovi-gold: #f5a623;
            --moovi-gold-glow: rgba(245, 166, 35, 0.3);
            --moovi-text: #e2e8f0;
            --moovi-muted: #8e95a5;
        }

        body {
            font-family: 'Outfit', sans-serif;
            background-color: var(--moovi-bg);
            color: var(--moovi-text);
            overflow-x: hidden;
            line-height: 1.6;
        }

        h1, h2, h3, h4, .cinema-font {
            font-family: 'Syne', sans-serif;
            font-weight: 700;
            letter-spacing: -0.5px;
            color: #ffffff;
        }

        .epic-font {
            font-family: 'Cinzel', serif;
            letter-spacing: 1px;
        }

        .text-moovi-red { color: var(--moovi-red) !important; }
        .text-moovi-gold { color: var(--moovi-gold) !important; }

        .btn-moovi-primary {
            background: linear-gradient(135deg, #e50914 0%, #b80610 100%);
            color: #ffffff;
            font-weight: 600;
            border: none;
            padding: 0.75rem 1.75rem;
            border-radius: 50px;
            box-shadow: 0 8px 24px var(--moovi-red-glow);
            transition: all 0.3s cubic-bezier(0.2, 0.8, 0.2, 1);
        }
        .btn-moovi-primary:hover {
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 12px 28px rgba(229, 9, 20, 0.6);
        }

        .btn-moovi-outline {
            background: transparent;
            color: #ffffff;
            font-weight: 600;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 0.75rem 1.75rem;
            border-radius: 50px;
            transition: all 0.3s ease;
        }
        .btn-moovi-outline:hover {
            background: rgba(255, 255, 255, 0.08);
            border-color: #ffffff;
            color: #ffffff;
            transform: translateY(-2px);
        }

        /* Navbar */
        .moovi-nav {
            background: rgba(9, 10, 16, 0.85);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid var(--moovi-border);
            transition: all 0.3s ease;
        }
        .moovi-nav .nav-link {
            color: #cbd5e1;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            transition: color 0.2s ease;
            font-size: 0.95rem;
        }
        .moovi-nav .nav-link:hover,
        .moovi-nav .nav-link.active {
            color: var(--moovi-red);
        }

        /* Movie Poster Card (Moovi style) */
        .movie-card {
            background: var(--moovi-card);
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid var(--moovi-border);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
        }
        .movie-card:hover {
            transform: translateY(-8px);
            border-color: rgba(229, 9, 20, 0.4);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.8), 0 0 30px rgba(229, 9, 20, 0.15);
        }
        .movie-poster-box {
            position: relative;
            overflow: hidden;
            background: #000;
            aspect-ratio: 16/10;
        }
        .movie-poster-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        .movie-card:hover .movie-poster-box img {
            transform: scale(1.05);
        }
        .play-trigger-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            background: var(--moovi-red);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.5rem;
            box-shadow: 0 0 0 0 rgba(229, 9, 20, 0.7);
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .play-trigger-btn:hover {
            color: #fff;
            transform: translate(-50%, -50%) scale(1.1);
            box-shadow: 0 0 0 15px rgba(229, 9, 20, 0);
        }

        /* Pulse Radar Effect */
        .pulse-ring {
            animation: pulse-animation 2s infinite;
        }
        @keyframes pulse-animation {
            0% { box-shadow: 0 0 0 0 rgba(229, 9, 20, 0.7); }
            70% { box-shadow: 0 0 0 18px rgba(229, 9, 20, 0); }
            100% { box-shadow: 0 0 0 0 rgba(229, 9, 20, 0); }
        }

        /* Meta tags */
        .tag-pill {
            font-size: 0.75rem;
            font-weight: 600;
            padding: 0.25rem 0.65rem;
            border-radius: 6px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .tag-red { background: rgba(229, 9, 20, 0.15); color: #ff4d4d; border: 1px solid rgba(229, 9, 20, 0.3); }
        .tag-gold { background: rgba(245, 166, 35, 0.15); color: #f5a623; border: 1px solid rgba(245, 166, 35, 0.3); }
        .tag-blue { background: rgba(59, 130, 246, 0.15); color: #60a5fa; border: 1px solid rgba(59, 130, 246, 0.3); }

        /* Cast avatar card */
        .cast-card {
            background: var(--moovi-card);
            border-radius: 12px;
            padding: 1.25rem;
            border: 1px solid var(--moovi-border);
            text-align: center;
            transition: all 0.3s ease;
        }
        .cast-card:hover {
            transform: translateY(-5px);
            border-color: rgba(229, 9, 20, 0.4);
            background: var(--moovi-card-hover);
        }

        /* Section Headings */
        .section-tag {
            display: inline-block;
            font-size: 0.8rem;
            font-weight: 700;
            color: var(--moovi-red);
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 0.5rem;
        }

        /* Footer */
        .moovi-footer {
            background: #05060a;
            border-top: 1px solid var(--moovi-border);
            padding: 5rem 0 2rem;
        }
        .footer-link {
            color: var(--moovi-muted);
            text-decoration: none;
            transition: color 0.2s ease;
            display: block;
            margin-bottom: 0.5rem;
        }
        .footer-link:hover {
            color: var(--moovi-red);
        }

        /* Social icons */
        .social-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--moovi-card);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            border: 1px solid var(--moovi-border);
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .social-btn:hover {
            background: var(--moovi-red);
            border-color: var(--moovi-red);
            color: #fff;
            transform: translateY(-3px);
        }
    </style>
    @yield('styles')
</head>
<body>

    <!-- Sticky Navigation Bar -->
    <nav class="navbar navbar-expand-lg sticky-top moovi-nav py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Mahobiya Films" height="42" onerror="this.style.display='none'">
                <div class="d-flex flex-column">
                    <span class="cinema-font text-white fs-5 lh-1">MAHOBIYA</span>
                    <span class="small text-moovi-red text-uppercase fw-bold" style="font-size: 0.65rem; letter-spacing: 2px;">Films Production</span>
                </div>
            </a>

            <button class="navbar-toggler border-0 shadow-none text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
                <i class="bi bi-list fs-2"></i>
            </button>

            <div class="collapse navbar-collapse" id="navContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Studio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('films') || request()->routeIs('film.detail') ? 'active' : '' }}" href="{{ route('films') }}">Filmography</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('videos') ? 'active' : '' }}" href="{{ route('videos') }}">Trailers &amp; Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('team') ? 'active' : '' }}" href="{{ route('team') }}">Cast &amp; Crew</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('news') ? 'active' : '' }}" href="{{ route('news') }}">News &amp; Press</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>

                <div class="d-flex align-items-center gap-3">
                    <a href="https://youtube.com/@mseries-bhilai?si=2rgj2j17JiqAzvuD" target="_blank" class="btn btn-sm btn-moovi-primary d-flex align-items-center gap-2">
                        <i class="bi bi-youtube"></i> M Series Channel
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>

    <!-- Global Video Lightbox Modal (For YouTube Trailer Popups) -->
    <div class="modal fade" id="trailerModal" tabindex="-1" aria-labelledby="trailerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content bg-black border-secondary">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title text-white cinema-font" id="trailerModalLabel">Watch Official Trailer</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" onclick="stopTrailerVideo()"></button>
                </div>
                <div class="modal-body p-0 pt-2">
                    <div class="ratio ratio-16x9">
                        <iframe id="trailerIframe" src="" title="Movie Trailer" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cinema Footer -->
    <footer class="moovi-footer">
        <div class="container">
            <div class="row g-5 mb-5">
                <!-- Brand Info -->
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" height="40" onerror="this.style.display='none'">
                        <span class="cinema-font text-white fs-4">MAHOBIYA FILMS</span>
                    </div>
                    <p class="text-secondary small mb-4" style="line-height: 1.8;">
                        <strong>Mahobiya Films Production Private Limited</strong> is a full-scale cinematic studio producing grand cultural epics, regional cinema, and premium digital OTT streaming releases. Certified by CBFC.
                    </p>
                    <div class="text-secondary" style="font-size: 0.8rem;">
                        <div><strong>CIN:</strong> U59111CT2023PTC015188</div>
                        <div><strong>RoC:</strong> 015188 (RoC Chhattisgarh)</div>
                    </div>
                </div>

                <!-- Navigation Links -->
                <div class="col-lg-2 col-md-6">
                    <h5 class="cinema-font text-white mb-3 fs-6 text-uppercase text-moovi-red">Quick Links</h5>
                    <a href="{{ route('home') }}" class="footer-link">Home</a>
                    <a href="{{ route('about') }}" class="footer-link">About Studio</a>
                    <a href="{{ route('films') }}" class="footer-link">Our Films</a>
                    <a href="{{ route('videos') }}" class="footer-link">Trailers &amp; Videos</a>
                    <a href="{{ route('team') }}" class="footer-link">Cast &amp; Crew</a>
                    <a href="{{ route('news') }}" class="footer-link">News &amp; Media</a>
                    <a href="{{ route('contact') }}" class="footer-link">Contact</a>
                </div>

                <!-- Featured Project -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="cinema-font text-white mb-3 fs-6 text-uppercase text-moovi-red">Current Release</h5>
                    <div class="d-flex gap-3 align-items-center mb-3">
                        <div class="rounded bg-black p-2 border border-secondary text-center" style="width: 60px;">
                            <i class="bi bi-film text-moovi-gold fs-4"></i>
                        </div>
                        <div>
                            <h6 class="text-white mb-0 fw-bold">Mahakavya Shri Ramayan Katha</h6>
                            <small class="text-secondary d-block">CBFC Certified • Released</small>
                            <span class="badge tag-gold mt-1">Hindi &bull; Chhattisgarhi</span>
                        </div>
                    </div>
                    <p class="small text-secondary mb-0">Starring Dev Sharma, Anjali Arora, Rajniesh Duggall, Nirbhay Wadhwa.</p>
                </div>

                <!-- Office Contact Info -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="cinema-font text-white mb-3 fs-6 text-uppercase text-moovi-red">Studio Office</h5>
                    <p class="text-secondary small mb-2">
                        <i class="bi bi-geo-alt text-moovi-red me-2"></i>
                        Koushal Tower, Kohka Kurud Main Road (Kurud Road), Kohka, Bhilai, Durg, CG - 490023
                    </p>
                    <p class="text-secondary small mb-2">
                        <i class="bi bi-telephone text-moovi-red me-2"></i>
                        <a href="tel:+919109141966" class="text-secondary text-decoration-none">+91 91091 41966</a> /
                        <a href="tel:+918966002047" class="text-secondary text-decoration-none">+91 89660 02047</a>
                    </p>
                    <p class="text-secondary small mb-3">
                        <i class="bi bi-envelope text-moovi-red me-2"></i>
                        <a href="mailto:mahobiyafilmsproduction@gmail.com" class="text-secondary text-decoration-none">mahobiyafilmsproduction@gmail.com</a>
                    </p>

                    <div class="d-flex gap-2">
                        <a href="https://www.instagram.com/official_mahobiya_film" target="_blank" class="social-btn" title="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://youtube.com/@mseries-bhilai?si=2rgj2j17JiqAzvuD" target="_blank" class="social-btn" title="YouTube">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="https://www.facebook.com" target="_blank" class="social-btn" title="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </div>
                </div>
            </div>

            <hr class="border-secondary opacity-25 mb-4">

            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 text-secondary small">
                <div>
                    &copy; {{ date('Y') }} <strong>Mahobiya Films Production Private Limited</strong>. All rights reserved.
                </div>
                <div>
                    Incorporated in Bhilai, Chhattisgarh &bull; Ministry of Corporate Affairs, India
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Trailer Lightbox Controller -->
    <script>
        function openTrailer(videoId, title) {
            var iframe = document.getElementById('trailerIframe');
            var modalTitle = document.getElementById('trailerModalLabel');
            if (modalTitle && title) {
                modalTitle.textContent = title;
            }
            if (iframe) {
                iframe.src = "https://www.youtube.com/embed/" + videoId + "?autoplay=1&rel=0";
            }
            var modal = new bootstrap.Modal(document.getElementById('trailerModal'));
            modal.show();
        }

        function stopTrailerVideo() {
            var iframe = document.getElementById('trailerIframe');
            if (iframe) {
                iframe.src = "";
            }
        }

        document.getElementById('trailerModal')?.addEventListener('hidden.bs.modal', function () {
            stopTrailerVideo();
        });
    </script>
    @yield('scripts')
</body>
</html>
