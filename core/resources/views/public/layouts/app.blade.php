<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from https://templates.envytheme.com/moovi/default/index.html by HTTrack Website Copier/3.x [XR&CO], Wed, 18 Nov 2026 22:08:48 GMT -->
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        <link rel="stylesheet" href="{{ asset('assets/') }}/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('assets/') }}/css/responsive.css">

        <!-- Title -->
        <title>@yield('title', 'Moovi - Video Production & Release Bootstrap 5 Template')</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('assets/') }}/img/favicon.png">
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
                    <img src="{{ asset('assets/') }}/img/logo.png" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('assets/') }}/img/logo.png" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle active">Home <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('home') }}" class="nav-link active">Home Page One</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-2.html" class="nav-link">Home Page Two</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-3.html" class="nav-link">Home Page Three</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-4.html" class="nav-link">Home Page Four</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Pages <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="feature.html" class="nav-link">Feature</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('team') }}" class="nav-link">Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="testimonial.html" class="nav-link">Testimonial</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="partners.html" class="nav-link">Partners</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pricing-plan.html" class="nav-link">Pricing Plans</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="timeline.html" class="nav-link">Timeline</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="faq.html" class="nav-link">FAQ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="404.html" class="nav-link">404 Error Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="terms-and-conditions.html" class="nav-link">Terms & Conditions</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">About <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('about') }}" class="nav-link">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="about-me.html" class="nav-link">About Me</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Works <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('films') }}" class="nav-link">Works</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="work-details.html" class="nav-link">Work Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Videos <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('videos') }}" class="nav-link">Videos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="video-details.html" class="nav-link">Video Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Blog <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('news') }}" class="nav-link">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-details.html" class="nav-link">Blog Details</a>
                                        </li>
                                    </ul>
                                </li> 
                                <li class="nav-item">
                                    <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                                </li>
                            </ul>
                            <div class="side-nav">
                                <div class="nav-srh">
                                    <div class="search-toggle">
                                        <button class="search-icon icon-search"><i class='bx bx-search-alt'></i></button>
                                        <button class="search-icon icon-close"><i class='bx bx-x'></i></button>
                                    </div>
                                    <div class="search-area">
                                        <form>
                                            <input type="text" class="src-input" id="search-terms" placeholder="Search here..." />
                                            <button type="submit" name="submit" value="Go" class="search-icon"><i class='bx bx-search-alt'></i></button>
                                        </form>
                                    </div>
                                </div>
                                <button type="button" class="btn modal-btn" data-bs-toggle="modal" data-bs-target="#myModalRight">
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
                        <img src="{{ asset('assets/') }}/img/logo-two.png" alt="Logo">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h2>About Us</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic aliquid quas qui minus! Dolor, ad. Odit, ullam perspiciatis nesciunt numquam explicabo, sunt ipsa libero ipsum maiores officia eius reprehenderit exercitationem.</p>
                        <div class="image-area">
                            <h2>Instagram</h2>
                            <div class="row">
                                <div class="col-6 col-lg-4">
                                    <a href="#">
                                        <img src="{{ asset('assets/') }}/img/home-one/instagram1.jpg" alt="Instagram">
                                    </a>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <a href="#">
                                        <img src="{{ asset('assets/') }}/img/home-one/instagram2.jpg" alt="Instagram">
                                    </a>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <a href="#">
                                        <img src="{{ asset('assets/') }}/img/home-one/instagram3.jpg" alt="Instagram">
                                    </a>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <a href="#">
                                        <img src="{{ asset('assets/') }}/img/home-one/instagram4.jpg" alt="Instagram">
                                    </a>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <a href="#">
                                        <img src="{{ asset('assets/') }}/img/home-one/instagram5.jpg" alt="Instagram">
                                    </a>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <a href="#">
                                        <img src="{{ asset('assets/') }}/img/home-one/instagram6.jpg" alt="Instagram">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="social-area">
                            <h3>Our Social Contact</h3>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class='bx bxl-facebook' ></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com/" target="_blank">
                                        <i class='bx bxl-twitter' ></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class='bx bxl-linkedin' ></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class='bx bxl-instagram' ></i>
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
                                <a class="footer-logo-img" href="#">
                                    <img src="{{ asset('assets/') }}/img/logo.png" alt="Logo">
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aviverra</p>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com/" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.pinterest.com/" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
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
                                <h3>Useful Links</h3>
                                <ul>
                                    <li>
                                        <a href="{{ route('home') }}" target="_blank">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}" target="_blank">About</a>
                                    </li>

                                     <li>
                                        <a href="{{ route('films') }}" target="_blank">Works</a>
                                    </li>
                                    <li>
                                        <a href="video.html" target="_blank">Videos</a>
                                    </li>
                                    <li>
                                        <a href="blog.html" target="_blank">Blog</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}" target="_blank">Contact</a>
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
                                        <a href="tel:882569756">882-569-756</a>
                                    </li>
                                    <li>
                                        <i class='bx bx-message-square-detail'></i>
                                        <h4>Email:</h4>
                                        <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#11787f777e517c7e7e67783f727e7c"><span class="__cf_email__" data-cfemail="30595e565f705d5f5f46591e535f5d">[email&#160;protected]</span></a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-location-plus'></i>
                                        <h4>Address:</h4>
                                        <span>3254-425 NW-2nd Ave, Miami USA</span>
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
                    <p>Â© Moovi is Proudly Owned by <a href="https://envytheme.com/" target="_blank">EnvyTheme</a></p>
                </div>
            </div>
        </div>
        <!-- End Copyright -->

        <!-- Essential JS -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{ asset('assets/') }}/js/jquery.min.js"></script>
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