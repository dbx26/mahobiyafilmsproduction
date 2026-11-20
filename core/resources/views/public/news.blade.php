@extends('public.layouts.app')

@section('title', 'Blog - Moovi')

@section('content')
        <!-- Page Title -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-item">
                    <h2>Blog</h2>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <span></span>
                        </li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Blog -->
        <section class="blog-area blog-area-two pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="blog-item">
                            <a href="blog-details.html">
                                <img src="{{ asset('assets/') }}/img/home-one/blog1.jpg" alt="Blog">
                            </a>
                            <div class="blog-bottom">
                                <span>17 March 2026</span>
                                <h3>
                                    <a href="blog-details.html">Get Ready To Make Awesome</a>
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
                    <div class="col-sm-6 col-lg-4">
                        <div class="blog-item">
                            <a href="blog-details.html">
                                <img src="{{ asset('assets/') }}/img/home-one/blog3.jpg" alt="Blog">
                            </a>
                            <div class="blog-bottom">
                                <span>19 March 2026</span>
                                <h3>
                                    <a href="blog-details.html">Enjoy The Movie Drama</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                                <a class="blog-btn" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="blog-item">
                            <a href="blog-details.html">
                                <img src="{{ asset('assets/') }}/img/home-one/blog4.jpg" alt="Blog">
                            </a>
                            <div class="blog-bottom">
                                <span>20 March 2026</span>
                                <h3>
                                    <a href="blog-details.html">It Has Been Most Watched</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                                <a class="blog-btn" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="blog-item">
                            <a href="blog-details.html">
                                <img src="{{ asset('assets/') }}/img/home-one/blog5.jpg" alt="Blog">
                            </a>
                            <div class="blog-bottom">
                                <span>21 March 2026</span>
                                <h3>
                                    <a href="blog-details.html">The Movie Has Been Awarded</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                                <a class="blog-btn" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="blog-item">
                            <a href="blog-details.html">
                                <img src="{{ asset('assets/') }}/img/home-one/blog6.jpg" alt="Blog">
                            </a>
                            <div class="blog-bottom">
                                <span>22 March 2026</span>
                                <h3>
                                    <a href="blog-details.html">Watch The Best Film</a>
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