@extends('public.layouts.app')

@section('title', 'Works - Moovi')

@section('content')
        <!-- Page Title -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-item">
                    <h2>Work</h2>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <span></span>
                        </li>
                        <li>Work</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Work -->
        <section class="work-area work-area-three pt-100 pb-70">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 col-lg-6">
                        <a href="{{ route('film.detail', 'work-details') }}">
                            <div class="work-item">
                                <img src="{{ asset('assets/') }}/img/home-one/work1.jpg" alt="Work">
                                <div class="work-content">
                                    <h3>My Dream Stranger</h3>
                                    <span>Music ViDEO</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-6">
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
                    <div class="col-sm-6 col-lg-6">
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
                    <div class="col-sm-6 col-lg-6">
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
                    <div class="col-sm-6 col-lg-6">
                        <a href="{{ route('film.detail', 'work-details') }}">
                            <div class="work-item">
                                <img src="{{ asset('assets/') }}/img/home-one/work5.jpg" alt="Work">
                                <div class="work-content">
                                    <h3>Love Me Like You</h3>
                                    <span>Romantic Music ViDEO</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <a href="{{ route('film.detail', 'work-details') }}">
                            <div class="work-item">
                                <img src="{{ asset('assets/') }}/img/home-one/work6.jpg" alt="Work">
                                <div class="work-content">
                                    <h3>Shape Of You</h3>
                                    <span>Advertising Music Video</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <a href="{{ route('film.detail', 'work-details') }}">
                            <div class="work-item">
                                <img src="{{ asset('assets/') }}/img/home-one/work7.jpg" alt="Work">
                                <div class="work-content">
                                    <h3>Imagine Dragons - Believer</h3>
                                    <span>Commercial Music Video</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <a href="{{ route('film.detail', 'work-details') }}">
                            <div class="work-item">
                                <img src="{{ asset('assets/') }}/img/home-one/work8.jpg" alt="Work">
                                <div class="work-content">
                                    <h3>In The End</h3>
                                    <span>Commercial Music Video</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Work -->

        <!-- Footer -->
@endsection