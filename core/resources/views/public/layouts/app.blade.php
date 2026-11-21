<!DOCTYPE html>
<html lang="zxx">
    
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Google Fonts: Josefin Sans & Playfair Display -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/') }}/css/bootstrap.min.css">
        <!-- Mean Menu CSS -->
        <link rel="stylesheet" href="{{ asset('assets/') }}/css/meanmenu.css">
        <!-- BoxIcons CSS -->
        <link rel="stylesheet" href="{{ asset('assets/') }}/css/boxicons.min.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('assets/') }}/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{ asset('assets/') }}/css/owl.theme.default.min.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{ asset('assets/') }}/css/magnific-popup.min.css">
        <!-- Timeline CSS -->
        <link rel="stylesheet" href="{{ asset('assets/') }}/css/timeline.css">
        <!-- FlatIcon CSS -->
        <link rel="stylesheet" href="{{ asset('assets/') }}/fonts/flaticon.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?v={{ @filemtime(public_path('assets/css/style.css')) ?: 2 }}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}?v={{ @filemtime(public_path('assets/css/responsive.css')) ?: 2 }}">

        <!-- Title -->
        <title>@yield('title', 'Mahobiya Films Production - Stories Rooted in Heritage, Crafted for the World')</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    </head>
    <body>
        <!-- Preloader -->
        <div class="loader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Start Navbar Area -->
        <div class="navbar-area fixed-top">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('images/logo.png') }}?v={{ @filemtime(public_path('images/logo.png')) ?: 2 }}" alt="Mahobiya Films Production" class="mobile-logo-img">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                            <img src="{{ asset('images/logo.png') }}?v={{ @filemtime(public_path('images/logo.png')) ?: 2 }}" alt="Mahobiya Films Production" class="header-logo-img">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto align-items-center">
                                <li class="nav-item">
                                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('films') }}" class="nav-link {{ request()->routeIs('films') || request()->routeIs('film.detail') ? 'active' : '' }}">Our Films</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('videos') }}" class="nav-link {{ request()->routeIs('videos') ? 'active' : '' }}">Videos</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('team') }}" class="nav-link {{ request()->routeIs('team') ? 'active' : '' }}">Our Team</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('news') }}" class="nav-link {{ request()->routeIs('news') ? 'active' : '' }}">News &amp; Updates</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                                </li>
                            </ul>
                            <div class="side-nav d-flex align-items-center gap-3">
                                <a href="{{ route('contact') }}" class="header-btn d-none d-lg-inline-block">
                                    Get In Touch
                                </a>
                                <button type="button" class="btn modal-btn" data-bs-toggle="modal" data-bs-target="#myModalRight" title="Quick Info">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Sidebar Modal -->
        <div id="myModalRight" class="modal fade modal-right" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="{{ asset('images/logo.png') }}?v={{ @filemtime(public_path('images/logo.png')) ?: 2 }}" alt="Logo" class="modal-logo-img">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h2>About Us</h2>
                        <p>Mahobiya Films Production Private Limited is an active motion picture, television, and OTT film studio based in Bhilai, Chhattisgarh, dedicated to bringing powerful narratives from Central India to audiences worldwide.</p>
                        <div class="image-area">
                            <h2>Featured Release</h2>
                            <div class="sidebar-featured">
                                <h6>Mahakavya Shri Ramayan Katha</h6>
                                <p>Shri Ram Ki • Hindi &amp; Chhattisgarhi</p>
                                <a href="{{ route('film.detail', 'mahakavya-shri-ramayan-katha') }}" class="header-btn">View Details</a>
                            </div>
                        </div>
                        <div class="social-area mt-4">
                            <h3>Our Official Channels</h3>
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
                                    <a href="https://facebook.com" target="_blank" title="Facebook">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sidebar Modal -->

@yield('content')

        <!-- Footer -->
        <footer class="pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <div class="footer-logo">
                                <a class="footer-logo-img" href="{{ route('home') }}">
                                    <img src="{{ asset('images/logo.png') }}?v={{ @filemtime(public_path('images/logo.png')) ?: 2 }}" alt="Mahobiya Films" class="footer-logo-main-img">
                                </a>
                                <p>Mahobiya Films Production Private Limited — Motion picture, television, and OTT film studio based in Bhilai, Chhattisgarh. Stories rooted in heritage, crafted for the world.</p>
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
                                        <a href="https://facebook.com" target="_blank" title="Facebook">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <div class="footer-instagram">
                                <h3>Instagram</h3>
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="{{ asset('assets/') }}/img/home-one/instagram1.jpg" alt="Instagram">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="{{ asset('assets/') }}/img/home-one/instagram2.jpg" alt="Instagram">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="{{ asset('assets/') }}/img/home-one/instagram3.jpg" alt="Instagram">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="{{ asset('assets/') }}/img/home-one/instagram4.jpg" alt="Instagram">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="{{ asset('assets/') }}/img/home-one/instagram5.jpg" alt="Instagram">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="{{ asset('assets/') }}/img/home-one/instagram6.jpg" alt="Instagram">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <div class="footer-link">
                                <h3>Quick Links</h3>
                                <ul>
                                    <li>
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}">About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('films') }}">Our Films</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('videos') }}">Videos</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('team') }}">Our Team</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('news') }}">News &amp; Updates</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <div class="footer-touch">
                                <h3>Get In Touch</h3>
                                <ul>
                                    <li>
                                        <i class='bx bxs-phone-call'></i>
                                        <h4>Phone:</h4>
                                        <a href="tel:+919109141966">+91 91091 41966</a>
                                    </li>
                                    <li>
                                        <i class='bx bx-message-square-detail'></i>
                                        <h4>Email:</h4>
                                        <a href="mailto:mahobiyafilmsproduction@gmail.com">mahobiyafilmsproduction@gmail.com</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-location-plus'></i>
                                        <h4>Address:</h4>
                                        <span>Koushal Tower, Kohka Kurud Main Rd, Bhilai, CG</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- Copyright -->
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-item">
                    <p>&copy; {{ date('Y') }} Mahobiya Films Production Private Limited. All Rights Reserved.</p>
                </div>
            </div>
        </div>
        <!-- End Copyright -->

        <!-- Essential JS -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/') }}/js/bootstrap.bundle.min.js"></script>
		<!-- Form Validator JS -->
		<script src="{{ asset('assets/') }}/js/form-validator.min.js"></script>
		<!-- Contact JS -->
        <script src="{{ asset('assets/') }}/js/contact-form-script.js"></script>
        <!-- Mean Menu JS -->
        <script src="{{ asset('assets/') }}/js/jquery.meanmenu.js"></script>
        <!-- Owl Carousel JS -->
        <script src="{{ asset('assets/') }}/js/owl.carousel.min.js"></script>
        <!-- Magnific Popup JS -->
        <script src="{{ asset('assets/') }}/js/jquery.magnific-popup.min.js"></script>
        <!-- Timeline JS -->
        <script src="{{ asset('assets/') }}/js/timeline.js"></script>
        <!-- Thumb Slider JS -->
        <script src="{{ asset('assets/') }}/js/thumb-slide.js"></script>
        <!-- Custom JS -->
        <script src="{{ asset('assets/') }}/js/custom.js"></script>
    </html>