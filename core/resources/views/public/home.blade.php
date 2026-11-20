@extends('public.layouts.app')

@section('title', 'Moovi - Video Production & Release Bootstrap 5 Template')

@section('content')

        <!-- Banner -->
        <div class="banner-wrap">
            <div class="banner-slider owl-theme owl-carousel">
                <div class="banner-area banner-img-one">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="banner-content">
                                <h1>One More Day Till I Fade</h1>
                                <p>Moovi Is High Quality Production House</p>
                                <a class="banner-btn" href="{{ route('videos') }}">More Videos</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-area banner-img-two">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="banner-content">
                                <h1>Get the best movies here</h1>
                                <p>Moovi Is High Quality Production House</p>
                                <a class="banner-btn" href="{{ route('videos') }}">More Videos</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-area banner-img-three">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="banner-content">
                                <h1>Let's make great things</h1>
                                <p>Moovi Is High Quality Production House</p>
                                <a class="banner-btn" href="{{ route('videos') }}">More Videos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-social">
                <span>Follow us on:</span>
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
                        <a href="https://www.instagram.com/" target="_blank">
                            <i class='bx bxl-instagram'></i>
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
        <!-- End Banner -->

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

        <!-- Work -->
        <section class="work-area">
            <div class="container-fluid p-0">
                <div class="section-title">
                    <span class="sub-title">Our Work</span>
                    <h2>Featured Work</h2>
                </div>
                <div class="row m-0">
                    <div class="col-sm-6 col-lg-6 p-0">
                        <a href="{{ route('film.detail', 'work-details') }}">
                            <div class="work-item">
                                <img src="{{ asset('assets/') }}/img/home-one/work1.jpg" alt="Work">
                                <div class="work-content">
                                    <h3>My Dream Stranger</h3>
                                    <span>Music Video</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-6 p-0">
                        <a href="{{ route('film.detail', 'work-details') }}">
                            <div class="work-item">
                                <img src="{{ asset('assets/') }}/img/home-one/work2.jpg" alt="Work">
                                <div class="work-content">
                                    <h3>Back To You</h3>
                                    <span>Advertising Music Video</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-6 p-0">
                        <a href="{{ route('film.detail', 'work-details') }}">
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
                        <a href="{{ route('film.detail', 'work-details') }}">
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

        <!-- History -->
        <div class="history-area pt-100 pb-70">
            <div class="container-fluid p-0">
                <div class="cd-horizontal-timeline">
                    <div class="section-title">
                        <span class="sub-title">History</span>
                        <h2>Our History</h2>
                    </div>
                    <div class="timeline">
                        <div class="events-wrapper">
                            <div class="events">
                                <ul>
                                    <li><a href="#0" data-date="01/01/2005" class="selected">1980</a></li>
                                    <li><a href="#0" data-date="01/01/2007">1995</a></li>
                                    <li><a href="#0" data-date="01/01/2011">2000</a></li>
                                    <li><a href="#0" data-date="01/01/2012">2005</a></li>
                                    <li><a href="#0" data-date="01/01/2013">2015</a></li>
                                </ul>
                
                                <span class="filling-line" aria-hidden="true"></span>
                            </div>
                        </div>
                        <ul class="cd-timeline-navigation">
                            <li>
                                <i class='bx bx-chevron-left'></i>
                            </li>
                            <li>
                                <i class='bx bx-chevron-right'></i>
                            </li>
                        </ul>
                    </div>
                
                    <div class="events-content">
                        <ul>
                            <li class="selected" data-date="01/01/2005">
                                <div class="row align-items-center m-0">
                                    <div class="col-lg-5">
                                        <div class="history-img">
                                            <img src="{{ asset('assets/') }}/img/home-one/history-main.jpg" alt="History">
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="history-content">
                                            <h2>Letâ€™s  make  great  things  together!</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                            <div class="row">
                                                <div class="col-sm-6 col-lg-4">
                                                    <div class="history-inner">
                                                        <i class='flaticon-video-camera'></i>
                                                        <h3>FILM  PRODuction</h3>
                                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-4">
                                                    <div class="history-inner">
                                                        <i class='flaticon-creative-idea'></i>
                                                        <h3>Creative Direction</h3>
                                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                                                    <div class="history-inner">
                                                        <i class='flaticon-eye'></i>
                                                        <h3>Visual Effects</h3>
                                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                
                            <li data-date="01/01/2007">
                                <div class="row align-items-center m-0">
                                    <div class="col-lg-5">
                                        <div class="history-img">
                                            <img src="{{ asset('assets/') }}/img/home-one/history-main.jpg" alt="History">
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="history-content">
                                            <h2>Letâ€™s  make  great  things  together!</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                            <div class="row">
                                                <div class="col-sm-4 col-lg-4">
                                                    <div class="history-inner">
                                                        <i class='flaticon-video-camera'></i>
                                                        <h3>FILM  PRODuction</h3>
                                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-lg-4">
                                                    <div class="history-inner">
                                                        <i class='flaticon-creative-idea'></i>
                                                        <h3>Creative Direction</h3>
                                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-lg-4">
                                                    <div class="history-inner">
                                                        <i class='flaticon-eye'></i>
                                                        <h3>Visual Effects</h3>
                                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                
                            <li data-date="01/01/2011">
                                <div class="row align-items-center m-0">
                                    <div class="col-lg-5">
                                        <div class="history-img">
                                            <img src="{{ asset('assets/') }}/img/home-one/history-main.jpg" alt="History">
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="history-content">
                                            <h2>Letâ€™s  make  great  things  together!</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                            <div class="row">
                                                <div class="col-sm-4 col-lg-4">
                                                    <div class="history-inner">
                                                        <i class='flaticon-video-camera'></i>
                                                        <h3>FILM  PRODuction</h3>
                                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-lg-4">
                                                    <div class="history-inner">
                                                        <i class='flaticon-creative-idea'></i>
                                                        <h3>Creative Direction</h3>
                                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-lg-4">
                                                    <div class="history-inner">
                                                        <i class='flaticon-eye'></i>
                                                        <h3>Visual Effects</h3>
                                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                
                            <li data-date="01/01/2012">
                                <div class="row align-items-center m-0">
                                    <div class="col-lg-5">
                                        <div class="history-img">
                                            <img src="{{ asset('assets/') }}/img/home-one/history-main.jpg" alt="History">
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="history-content">
                                            <h2>Letâ€™s  make  great  things  together!</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                            <div class="row">
                                                <div class="col-sm-4 col-lg-4">
                                                    <div class="history-inner">
                                                        <i class='flaticon-video-camera'></i>
                                                        <h3>FILM  PRODuction</h3>
                                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-lg-4">
                                                    <div class="history-inner">
                                                        <i class='flaticon-creative-idea'></i>
                                                        <h3>Creative Direction</h3>
                                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-lg-4">
                                                    <div class="history-inner">
                                                        <i class='flaticon-eye'></i>
                                                        <h3>Visual Effects</h3>
                                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                
                            <li data-date="01/01/2013">
                                <div class="row align-items-center m-0">
                                    <div class="col-lg-5">
                                        <div class="history-img">
                                            <img src="{{ asset('assets/') }}/img/home-one/history-main.jpg" alt="History">
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="history-content">
                                            <h2>Letâ€™s  make  great  things  together!</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                            <div class="row">
                                                <div class="col-sm-4 col-lg-4">
                                                    <div class="history-inner">
                                                        <i class='flaticon-video-camera'></i>
                                                        <h3>FILM  PRODuction</h3>
                                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-lg-4">
                                                    <div class="history-inner">
                                                        <i class='flaticon-creative-idea'></i>
                                                        <h3>Creative Direction</h3>
                                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-lg-4">
                                                    <div class="history-inner">
                                                        <i class='flaticon-eye'></i>
                                                        <h3>Visual Effects</h3>
                                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End History -->

        <!-- Video -->
        <section class="video-area ptb-100">
            <div class="container-fluid p-0">
                <div class="section-title">
                    <span class="sub-title">Watch Video</span>
                    <h2>Moovi High Quality Video</h2>
                </div>
                <div class="row m-0 align-items-end">
                    <div class="col-lg-3 p-0">
                        <div class="video-item video-two">
                            <img src="{{ asset('assets/') }}/img/home-one/video1.jpg" alt="Video">
                            <a href="https://www.youtube.com/watch?v=aqz-KE-bpKQ" class="popup-youtube">
                                <i class='bx bx-play'></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="video-item">
                            <img src="{{ asset('assets/') }}/img/home-one/video2.jpg" alt="Video">
                            <a href="https://www.youtube.com/watch?v=aqz-KE-bpKQ" class="popup-youtube">
                                <i class='bx bx-play'></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 p-0">
                        <div class="video-item video-two">
                            <img src="{{ asset('assets/') }}/img/home-one/video3.jpg" alt="Video">
                            <a href="https://www.youtube.com/watch?v=aqz-KE-bpKQ" class="popup-youtube">
                                <i class='bx bx-play'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Video -->

        <!-- Team -->
        <section class="team-area pb-70">
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
                    <h2>What Customerâ€™s Say</h2>
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
        <section class="blog-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Our Blog</span>
                    <h2>Latest News</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="blog-item">
                            <a href="{{ route('news') }}">
                                <img src="{{ asset('assets/') }}/img/home-one/blog1.jpg" alt="Blog">
                            </a>
                            <div class="blog-bottom">
                                <span>17 March 2026</span>
                                <h3>
                                    <a href="{{ route('news') }}">Get Ready To Make Awesome</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna .</p>
                                <a class="blog-btn" href="{{ route('news') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="blog-item">
                            <a href="{{ route('news') }}">
                                <img src="{{ asset('assets/') }}/img/home-one/blog2.jpg" alt="Blog">
                            </a>
                            <div class="blog-bottom">
                                <span>18 March 2026</span>
                                <h3>
                                    <a href="{{ route('news') }}">The Best Design Film</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna .</p>
                                <a class="blog-btn" href="{{ route('news') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                        <div class="blog-item">
                            <a href="{{ route('news') }}">
                                <img src="{{ asset('assets/') }}/img/home-one/blog3.jpg" alt="Blog">
                            </a>
                            <div class="blog-bottom">
                                <span>19 March 2026</span>
                                <h3>
                                    <a href="{{ route('news') }}">Enjoy The Movie Drama</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna .</p>
                                <a class="blog-btn" href="{{ route('news') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog -->

@endsection