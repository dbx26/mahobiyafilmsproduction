@extends('public.layouts.app')

@section('title', 'Videos & Trailers - Mahobiya Films Production')

@section('content')

    <!-- Page Title / Banner -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-item">
                <h2>Videos &amp; Trailers</h2>
                <p>Stories Brought to Life on Screen</p>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <span></span>
                    </li>
                    <li>Videos</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Section 1: Official Trailers & Teasers (Organized by Film) -->
    <section class="week-area week-area-two pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sub-title">Watch Our Stories Come Alive</span>
                <h2>Official Trailers &amp; Teasers</h2>
                <p style="color: #666666; max-width: 680px; margin: 0 auto 40px;">Explore official film trailers, teasers, and previews organized by theatrical release.</p>
            </div>

            <!-- Movie-Wise Releases: Under The Same Roof -->
            @foreach($movies as $movie)
                <div class="movie-showcase-panel">
                    <!-- Roof Header: Movie Identity -->
                    <div class="showcase-header">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="showcase-poster">
                                        <img src="{{ asset($movie['poster']) }}" alt="{{ $movie['title'] }}">
                                    </div>
                                    <div class="showcase-info">
                                        <div class="showcase-meta-bar">
                                            <span class="showcase-badge">{{ $movie['category'] }}</span>
                                            <span class="showcase-dot">&middot;</span>
                                            <span class="showcase-lang">{{ $movie['language'] }}</span>
                                            <span class="showcase-dot">&middot;</span>
                                            <span class="showcase-date">Released: {{ $movie['release_date'] }}</span>
                                        </div>
                                        <h3 class="showcase-title">{{ $movie['title'] }}</h3>
                                        <p class="showcase-synopsis">A cinematic presentation inspired by the timeless cultural story of Shri Ramayan.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                                <div class="d-flex align-items-center justify-content-lg-end gap-2 flex-wrap">
                                    {{-- <span class="showcase-count-pill">
                                        <i class='bx bx-film'></i> {{ count($movie['videos']) }} Videos
                                    </span> --}}
                                    <a href="{{ route('film.detail', $movie['slug']) }}" class="showcase-detail-btn">
                                        Explore Film Details <i class='bx bx-right-arrow-alt'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Under The Same Roof: All Videos Of This Film -->
                    <div class="showcase-body">
                        <div class="row">
                            @foreach($movie['videos'] as $video)
                                <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                                    <div class="showcase-video-item">
                                        <div class="showcase-video-thumb">
                                            <img src="{{ asset($video['thumbnail']) }}" alt="{{ $video['title'] }}">
                                            <a href="{{ $video['youtube_url'] }}" class="popup-youtube showcase-play-btn">
                                                <i class='bx bx-play'></i>
                                            </a>
                                            <span class="showcase-video-lang">{{ $video['language'] }}</span>
                                        </div>
                                        <div class="showcase-video-meta">
                                            <h5 class="showcase-video-type">{{ $video['type'] }}</h5>
                                            <a href="{{ $video['youtube_url'] }}" class="showcase-video-link popup-youtube">
                                                <i class='bx bx-play-circle'></i> Watch Video
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Upcoming Productions Callout -->
            <div class="upcoming-movie-callout text-center p-4">
                <span class="sub-title" style="color: #c1ab65; font-family: 'Josefin Sans', sans-serif; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px;">Upcoming Film Projects</span>
                <h4 style="font-family: 'Josefin Sans', sans-serif; font-size: 20px; font-weight: 700; color: #080808; margin: 6px 0 8px;">More Cinematic Projects In Production</h4>
                <p style="color: #666666; font-size: 14px; max-width: 620px; margin: 0 auto;">Official trailers and teaser announcements for our upcoming theatrical releases will appear here as new projects are unveiled.</p>
            </div>
        </div>
    </section>
    <!-- End Section 1 -->

    <!-- Section 2: Official Streaming Destination – Latest 10 Trending Reels (Dark Cinema Background) -->
    <section class="trust-area pt-100 pb-100">
        <div class="container">
            <div class="section-title text-center">
                <span class="sub-title">Official Streaming Destination</span>
                <h2>Latest Trending Reels &amp; Shorts</h2>
                <p style="color: #cccccc; max-width: 680px; margin: 0 auto;">Catch exclusive behind-the-scenes moments, cast interactions, song promos, and announcements directly from M Series – Bhilai.</p>
            </div>

            <!-- Dynamic YouTube Shorts & Reels Showcase Grid -->
            <div class="reels-grid">
                @forelse($shorts as $reel)
                    <a href="{{ $reel['url'] }}" class="reel-card popup-youtube">
                        <div class="reel-card-thumb">
                            <img src="{{ $reel['thumb_url'] }}" alt="{{ $reel['title'] }}" onerror="this.onerror=null;this.src='{{ $reel['fallback_thumb'] ?? ('https://i.ytimg.com/vi/' . $reel['id'] . '/hqdefault.jpg') }}';">
                        </div>
                        <div class="reel-card-overlay">
                            {{-- <div class="reel-top-bar">
                                <span class="reel-badge">{{ $reel['tag'] ?? 'Short' }}</span>
                                <span class="reel-yt-icon"><i class='bx bxl-youtube'></i></span>
                            </div> --}}
                            <div class="reel-play-btn">
                                <i class='bx bx-play'></i>
                            </div>
                            <div class="reel-bottom-info">
                                <h5 class="reel-title">{{ $reel['title'] }}</h5>
                                {{-- @if(!empty($reel['views']))
                                    <p class="reel-views"><i class='bx bx-show'></i> {{ $reel['views'] }}</p>
                                @endif --}}
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="col-12 text-center text-muted py-4">
                        <p>No shorts available at the moment. Please visit our YouTube channel.</p>
                    </div>
                @endforelse
            </div>
            <!-- End Reels Showcase Grid -->

            <!-- Channel Streaming Callout Banner (Moovi Cinema Theme) -->
            <div class="channel-callout-banner">
                <div class="row align-items-center">
                    <div class="col-lg-8 text-center text-lg-start">
                        <span class="channel-sub-title">Official Streaming Destination</span>
                        <h3>Visit M Series – Bhilai on YouTube</h3>
                        <p>Discover complete soundtracks, devotional chants, song promos, theatrical teasers, and exclusive cast interviews on our official streaming channel.</p>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end mt-4 mt-lg-0">
                        <a class="banner-btn" href="https://youtube.com/@mseries-bhilai" target="_blank">
                            <i class='bx bxl-youtube'></i> Subscribe on YouTube
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section 2 -->

@endsection
