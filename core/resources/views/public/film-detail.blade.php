@extends('public.layouts.app')

@section('title', 'Work Details - Moovi')

@section('content')
        <!-- Page Title -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-item">
                    <h2>Work Details</h2>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <span></span>
                        </li>
                        <li>Work Details</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Work Details -->
        <div class="work-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="work-details-item">
                            <div class="work-details-img">
                                <img src="{{ asset('assets/') }}/img/home-one/work5.jpg" alt="Work">
                                <a href="https://www.youtube.com/watch?v=aqz-KE-bpKQ" class="popup-youtube">
                                    <i class='bx bx-play'></i>
                                </a>
                            </div>
                            <div class="work-details-content">
                                <ul>
                                    <li>Music Video</li>
                                    <li>
                                        <span>/</span>
                                    </li>
                                    <li>10.10.2020</li>
                                    <li>
                                        <span>/</span>
                                    </li>
                                    <li>by <a href="#">Tom Henry</a></li>
                                </ul>
                                <h3>MY DREAM STRAINGER</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</p>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
                            </div>
                            <div class="work-details-quote">
                                <i class='bx bxs-quote-left'></i>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab cumque iure reiciendis maiores ipsum itaque placeat rem modi saepe minima sit eveniet officiis magni culpa, impedit explicabo non assumenda.</p>
                                <div class="link">
                                    <a href="#">- Tom Henry</a>
                                </div>
                            </div>
                        </div>
                        <div class="week-area">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="week-item week-video-btn-two">
                                        <img src="{{ asset('assets/') }}/img/home-one/week4.jpg" alt="Week">
                                        <a href="https://www.youtube.com/watch?v=aqz-KE-bpKQ" class="popup-youtube">
                                            <i class='bx bx-play'></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="week-item week-video-btn-two">
                                        <img src="{{ asset('assets/') }}/img/home-one/week5.jpg" alt="Week">
                                        <a href="https://www.youtube.com/watch?v=aqz-KE-bpKQ" class="popup-youtube">
                                            <i class='bx bx-play'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="work-details-item">
                            <div class="work-details-search">
                                <form>
                                    <input type="text" class="form-control" placeholder="Search Here">
                                    <button type="submit" class="btn search-btn">
                                        <i class='bx bx-search-alt'></i>
                                    </button>
                                </form>
                            </div>
                            <div class="work-details-work">
                                <h3>Popular Work</h3>
                                <div class="work-inner">
                                    <ul class="align-items-center">
                                        <li>
                                            <img src="{{ asset('assets/') }}/img/work-details1.jpg" alt="Work">
                                        </li>
                                        <li>
                                            <h4>
                                                <a href="#">My Dream Stranger</a>
                                            </h4>
                                            <span>10/10/2020</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="work-inner">
                                    <ul class="align-items-center">
                                        <li>
                                            <img src="{{ asset('assets/') }}/img/work-details2.jpg" alt="Work">
                                        </li>
                                        <li>
                                            <h4>
                                                <a href="#">Back To You</a>
                                            </h4>
                                            <span>11/10/2020</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="work-inner">
                                    <ul class="align-items-center">
                                        <li>
                                            <img src="{{ asset('assets/') }}/img/work-details3.jpg" alt="Work">
                                        </li>
                                        <li>
                                            <h4>
                                                <a href="#">We Make It Awesome</a>
                                            </h4>
                                            <span>12/10/2020</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="work-inner">
                                    <ul class="align-items-center">
                                        <li>
                                            <img src="{{ asset('assets/') }}/img/work-details4.jpg" alt="Work">
                                        </li>
                                        <li>
                                            <h4>
                                                <a href="#">My Dream Girl</a>
                                            </h4>
                                            <span>13/10/2020</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="work-details-cate">
                                <h3>Categories</h3>
                                <ul>
                                    <li>
                                        <a href="#">Actor</a>
                                    </li>
                                    <li>
                                        <a href="#">Director</a>
                                    </li>
                                    <li>
                                        <a href="#">Award</a>
                                    </li>
                                    <li>
                                        <a href="#">Camera</a>
                                    </li>
                                    <li>
                                        <a href="#">Film</a>
                                    </li>
                                    <li>
                                        <a href="#">Trailer</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Work Details -->

        <!-- Footer -->
@endsection