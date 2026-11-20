@extends('public.layouts.app')

@section('title', 'About Us - Moovi')

@section('content')
        <!-- Page Title -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-item">
                    <h2>About</h2>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <span></span>
                        </li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Service -->
        <section class="service-area service-area-two pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">What We Do</span>
                    <h2>Our Services</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="service-item">
                            <i class='flaticon-video-camera-2'></i>
                            <div class="service-inner">
                                <h3>Array Equipment</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="service-item">
                            <i class='flaticon-video-camera-1'></i>
                            <div class="service-inner">
                                <h3>New Technologies</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="service-item">
                            <i class='flaticon-theater'></i>
                            <div class="service-inner">
                                <h3>Versatile Actors</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="service-item">
                            <i class='flaticon-director-chair'></i>
                            <div class="service-inner">
                                <h3>Top Directions</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="service-item">
                            <i class='flaticon-video-editing'></i>
                            <div class="service-inner">
                                <h3>Video Editing</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="service-item">
                            <i class='flaticon-distribution'></i>
                            <div class="service-inner">
                                <h3>Distribution</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Service -->

        <!-- Week -->
        <section class="week-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">This Week</span>
                    <h2>Our Upcoming Movies</h2>
                </div>
                <div class="outer">
                    <div id="big" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="week-item">
                                <img src="{{ asset('assets/') }}/img/home-one/week1.jpg" alt="Week">
                                <a href="https://www.youtube.com/watch?v=aqz-KE-bpKQ" class="popup-youtube">
                                    <i class='bx bx-play'></i>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="week-item">
                                <img src="{{ asset('assets/') }}/img/home-one/week2.jpg" alt="Week">
                                <a href="https://www.youtube.com/watch?v=aqz-KE-bpKQ" class="popup-youtube">
                                    <i class='bx bx-play'></i>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="week-item">
                                <img src="{{ asset('assets/') }}/img/home-one/week3.jpg" alt="Week">
                                <a href="https://www.youtube.com/watch?v=aqz-KE-bpKQ" class="popup-youtube">
                                    <i class='bx bx-play'></i>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="week-item">
                                <img src="{{ asset('assets/') }}/img/home-one/week13.jpg" alt="Week">
                                <a href="https://www.youtube.com/watch?v=aqz-KE-bpKQ" class="popup-youtube">
                                    <i class='bx bx-play'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="thumbs" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="week-item week-video-btn">
                                <img src="{{ asset('assets/') }}/img/home-one/week4.jpg" alt="Week">
                                <a href="https://www.youtube.com/watch?v=aqz-KE-bpKQ" class="popup-youtube">
                                    <i class='bx bx-play'></i>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="week-item week-video-btn">
                                <img src="{{ asset('assets/') }}/img/home-one/week5.jpg" alt="Week">
                                <a href="https://www.youtube.com/watch?v=aqz-KE-bpKQ" class="popup-youtube">
                                    <i class='bx bx-play'></i>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="week-item week-video-btn">
                                <img src="{{ asset('assets/') }}/img/home-one/week6.jpg" alt="Week">
                                <a href="https://www.youtube.com/watch?v=aqz-KE-bpKQ" class="popup-youtube">
                                    <i class='bx bx-play'></i>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="week-item week-video-btn">
                                <img src="{{ asset('assets/') }}/img/home-one/week14.jpg" alt="Week">
                                <a href="https://www.youtube.com/watch?v=aqz-KE-bpKQ" class="popup-youtube">
                                    <i class='bx bx-play'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Week -->

        <!-- Trust -->
        <section class="trust-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Trust</span>
                    <h2>In Films We Trust</h2>
                </div>
                <div class="trust-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                    <div class="row">
                        <div class="col-6 col-sm-3 col-lg-3">
                            <div class="trust-img">
                                <img src="{{ asset('assets/') }}/img/home-one/trust1.png" alt="Trust">
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 col-lg-3">
                            <div class="trust-img">
                                <img src="{{ asset('assets/') }}/img/home-one/trust2.png" alt="Trust">
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 col-lg-3">
                            <div class="trust-img">
                                <img src="{{ asset('assets/') }}/img/home-one/trust3.png" alt="Trust">
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 col-lg-3">
                            <div class="trust-img">
                                <img src="{{ asset('assets/') }}/img/home-one/trust4.png" alt="Trust">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Trust -->

        <!-- Product -->
        <section class="product-area product-area-two pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Features</span>
                    <h2>Why Choose Us</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="product-item">
                            <img src="{{ asset('assets/') }}/img/home-two/product1.jpg" alt="Product">
                            <h3>Film Production</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="product-item">
                            <img src="{{ asset('assets/') }}/img/home-two/product2.jpg" alt="Product">
                            <h3>Creative Direction</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                        <div class="product-item">
                            <img src="{{ asset('assets/') }}/img/home-two/product3.jpg" alt="Product">
                            <h3>Content Production</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product -->

        <!-- Work -->
        <section class="work-area work-area-two">
            <div class="container-fluid p-0">
                <div class="section-title">
                    <span class="sub-title">Our Work</span>
                    <h2>Featured Work</h2>
                </div>
                <div class="row m-0">
                    <div class="col-sm-6 col-lg-6 p-0">
                        <a href="work-details.html">
                            <div class="work-item">
                                <img src="{{ asset('assets/') }}/img/home-one/work3.jpg" alt="Work">
                                <div class="work-content">
                                    <h3>We Make it awesome</h3>
                                    <span>Commercial Music Video</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-6 p-0">
                        <a href="work-details.html">
                            <div class="work-item">
                                <img src="{{ asset('assets/') }}/img/home-one/work4.jpg" alt="Work">
                                <div class="work-content">
                                    <h3>My Dream Girl</h3>
                                    <span>Commercial Music Video</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Work -->

        <!-- Team -->
        <section class="team-area team-area-two team-area-three pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Our Team</span>
                    <h2>Directors Of Moovi</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="team-item">
                            <div class="team-top">
                                <img src="{{ asset('assets/') }}/img/home-one/team1.jpg" alt="Team">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class='bx bxl-instagram-alt'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-bottom">
                                <h3>Adlock Prince</h3>
                                <span>Director</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team-item">
                            <div class="team-top">
                                <img src="{{ asset('assets/') }}/img/home-one/team2.jpg" alt="Team">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class='bx bxl-instagram-alt'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-bottom">
                                <h3>Tom Henry</h3>
                                <span>Sub. Director</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team-item">
                            <div class="team-top">
                                <img src="{{ asset('assets/') }}/img/home-one/team3.jpg" alt="Team">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class='bx bxl-instagram-alt'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-bottom">
                                <h3>Mic John</h3>
                                <span>Actor</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team-item">
                            <div class="team-top">
                                <img src="{{ asset('assets/') }}/img/home-one/team4.jpg" alt="Team">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class='bx bxl-instagram-alt'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-bottom">
                                <h3>John Punk</h3>
                                <span>Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team -->
 
        <!-- Testimonial -->
        <section class="testimonial-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Testimonial</span>
                    <h2>What Customerâ€™s Says</h2>
                </div>
                <div class="testimonial-slider owl-theme owl-carousel">
                    <div class="testimonial-item">
                        <i class='bx bxs-quote-alt-left'></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis Risus commodo viverra maecenas accumsan lacus vel facilisis</p>
                        <h3>Wahing Bashon</h3>
                    </div>
                    <div class="testimonial-item">
                        <i class='bx bxs-quote-alt-left'></i>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        <h3>Tom Henry</h3>
                    </div>
                    <div class="testimonial-item">
                        <i class='bx bxs-quote-alt-left'></i>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p>
                        <h3>Machiel Shon</h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial -->

        <!-- Blog -->
        <section class="blog-area blog-area-two pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Our Blog</span>
                    <h2>Latest News</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="blog-item">
                            <a href="blog-details.html">
                                <img src="{{ asset('assets/') }}/img/home-one/blog1.jpg" alt="Blog">
                            </a>
                            <div class="blog-bottom">
                                <span>17 March 2026</span>
                                <h3>
                                    <a href="#">Get Ready To Make Awesome</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                                <a class="blog-btn" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="blog-item">
                            <a href="blog-details.html">
                                <img src="{{ asset('assets/') }}/img/home-one/blog2.jpg" alt="Blog">
                            </a>
                            <div class="blog-bottom">
                                <span>18 March 2026</span>
                                <h3>
                                    <a href="blog-details.html">The Best Design Film</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                                <a class="blog-btn" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                        <div class="blog-item">
                            <a href="blog-details.html">
                                <img src="{{ asset('assets/') }}/img/home-one/blog3.jpg" alt="Blog">
                            </a>
                            <div class="blog-bottom">
                                <span>19 March 2026</span>
                                <h3>
                                    <a href="#">Enjoy The Moovi Drama</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                                <a class="blog-btn" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog -->

        <!-- Footer -->
@endsection