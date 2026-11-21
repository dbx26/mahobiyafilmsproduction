<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_public_routes_return_successful_response(): void
    {
        $routes = ['/', '/about', '/films', '/films/sample-film', '/team', '/gallery', '/videos', '/news', '/contact', '/auth/login', '/auth/register', '/auth/forgot-password'];
        foreach ($routes as $route) {
            $response = $this->get($route);
            $response->assertStatus(200);
        }

        $aboutResponse = $this->get('/about');
        $aboutResponse->assertSee('page-title-area');
        $aboutResponse->assertSee('page-title-item');
        $aboutResponse->assertSee('trust-area');
        $aboutResponse->assertSee('service-area-two');
        $aboutResponse->assertSee('product-area-two');
        $aboutResponse->assertSee('work-area');
        $aboutResponse->assertSee('team-area-three');
        $aboutResponse->assertSee('About Us');
        $aboutResponse->assertSee('Stories Rooted in Heritage, Crafted for the World');
        $aboutResponse->assertSee('A Vision for Meaningful Cinema');
        $aboutResponse->assertSee('Our Vision');
        $aboutResponse->assertSee('Our Mission');
        $aboutResponse->assertSee('What Drives Us');
        $aboutResponse->assertSee('Mahakavya Shri Ramayan Katha');
        $aboutResponse->assertSee('Prakash Mahobiya');
        $aboutResponse->assertSee('Sanjay Bundela');

        $filmsResponse = $this->get('/films');
        $filmsResponse->assertSee('Our Films');
        $filmsResponse->assertSee('Stories That Come Alive on Screen.');
        $filmsResponse->assertSee('Explore the films and cinematic projects produced by Mahobiya Films Production.');
        $filmsResponse->assertSee('Mahakavya Shri Ramayan Katha');
        $filmsResponse->assertSee('Feature Film &middot; Hindi &amp; Chhattisgarhi', false);
        $filmsResponse->assertSee('Released: 25 September 2026');
        $filmsResponse->assertSee('A cinematic presentation inspired by the timeless story of Shri Ramayan.');
        $filmsResponse->assertSee('Explore Film Details');
        $filmsResponse->assertSee('work-area-two');
        $filmsResponse->assertSee('film-card-horizontal');
        $filmsResponse->assertSee('Ravidas Ek Vichar');
        $filmsResponse->assertSee('ravidas_ek_vichar.avif');

        $filmDetailResponse = $this->get('/films/mahakavya-shri-ramayan-katha');
        $filmDetailResponse->assertStatus(200);
        $filmDetailResponse->assertSee('ramayan_video_preview.jpg');
        $filmDetailResponse->assertSee('Mahakavya Shri Ramayan Katha');
        $filmDetailResponse->assertSee('Abhishek Singh');
        $filmDetailResponse->assertSee('Prakash Mahobiya &amp; Sanjay Bundela', false);
        $filmDetailResponse->assertSee('film-cast-section');
        $filmDetailResponse->assertSee('Star Cast &amp; Lead Performers', false);
        $filmDetailResponse->assertSee('images/cast/dev_sharma.jpg');
        $filmDetailResponse->assertSee('images/cast/anjali_arora.jpg');
        $filmDetailResponse->assertSee('images/cast/rajniesh_duggall.jpg');
        $filmDetailResponse->assertSee('images/cast/sheel_verma.jpg');
        $filmDetailResponse->assertSee('images/cast/nirbhay_wadhwa.jpg');
        $filmDetailResponse->assertSee('Dev Sharma');
        $filmDetailResponse->assertSee('Lord Shri Ram');
        $filmDetailResponse->assertSee('Anjali Arora');
        $filmDetailResponse->assertSee('Mata Sita');
        $filmDetailResponse->assertSee('Rajniesh Duggall');
        $filmDetailResponse->assertSee('Ravan');
        $filmDetailResponse->assertSee('Filmmakers &amp; Creative Team', false);
        $filmDetailResponse->assertSee('Playback Singers');
        $filmDetailResponse->assertSee('Javed Ali');

        $videosResponse = $this->get('/videos');
        $videosResponse->assertStatus(200);
        $videosResponse->assertSee('week-area-two');
        $videosResponse->assertSee('movie-showcase-panel');
        $videosResponse->assertSee('showcase-header');
        $videosResponse->assertSee('showcase-body');
        $videosResponse->assertSee('Official Trailers &amp; Teasers', false);
        $videosResponse->assertSee('ramayan_video_preview.jpg');
        $videosResponse->assertSee('ramayan_hindi_teaser.jpg');
        $videosResponse->assertSee('ramayan_cg_trailer.jpg');
        $videosResponse->assertSee('ramayan_cg_teaser.jpg');
        $videosResponse->assertSee('channel-callout-banner');
        $videosResponse->assertSee('reels-grid');
        $videosResponse->assertSee('reel-card');
        $videosResponse->assertSee('oar2.jpg');
        $videosResponse->assertSee('Latest Trending Reels &amp; Shorts', false);
        $videosResponse->assertSee('Visit M Series – Bhilai on YouTube');

        $teamResponse = $this->get('/team');
        $teamResponse->assertStatus(200);
        $teamResponse->assertSee('team-leadership-section');
        $teamResponse->assertSee('team-leadership-card');
        $teamResponse->assertSee('Prakash Mahobiya');
        $teamResponse->assertSee('Sanjay Bundela');
        $teamResponse->assertSee('Jugal Kishor Tiwari');
        $teamResponse->assertSee('Executive Producer');
        $teamResponse->assertSee('Executive Studio Leadership');
        $teamResponse->assertSee('team-divisions-section');
        $teamResponse->assertSee('division-card');
        $teamResponse->assertSee('Creative Development &amp; Script', false);
        $teamResponse->assertSee('Theatrical Production &amp; Logistics', false);
        $teamResponse->assertSee('Music &amp; Audio (M Series – Bhilai)', false);
        $teamResponse->assertSee('team-footprint-section');
        $teamResponse->assertSee('studio-fact-card');
        $teamResponse->assertSee('Bhilai, Chhattisgarh');
        $teamResponse->assertSee('prakashmahobiya');
        $teamResponse->assertSee('sanjaybundela_06');
        $teamResponse->assertSee('Collaborate With Mahobiya Films Production');

        $newsResponse = $this->get('/news');
        $newsResponse->assertStatus(200);
        $newsResponse->assertSee('blog-area-two');
        $newsResponse->assertSee('featured-news-card');
        $newsResponse->assertSee('banner_ramayan.jpg');
        $newsResponse->assertSee('Latest Studio News &amp; Updates', false);
        $newsResponse->assertSee('Official Hindi Theatrical Trailer Launched on YouTube');
        $newsResponse->assertSee('Dedicated Chhattisgarhi Regional Edition Trailer Unveiled');
        $newsResponse->assertSee('Playback Singer Javed Ali Collaborates with M Series – Bhilai');
        $newsResponse->assertSee('Media Spotlight: Anjali Arora &amp; Dev Sharma Headline', false);
        $newsResponse->assertSee('channel-callout-banner');
        $newsResponse->assertSee('Media, Press &amp; Distribution Inquiries', false);

        $contactResponse = $this->get('/contact');
        $contactResponse->assertStatus(200);
        $contactResponse->assertSee('contact-area');
        $contactResponse->assertSee('contact-form-card');
        $contactResponse->assertSee('contact-info-card');
        $contactResponse->assertSee('contact-map-wrapper');
        $contactResponse->assertSee('Koushal Tower');
        $contactResponse->assertSee('mahobiyafilmsproduction@gmail.com');
        $contactResponse->assertSee('+91 91091 41966');
    }

    public function test_contact_form_submission_redirects_with_success_message(): void
    {
        $response = $this->post('/contact/submit', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+91 98765 43210',
            'subject' => 'Theatrical Screening Inquiry',
            'message' => 'We would love to screen your feature film in our auditorium.',
        ]);

        $response->assertStatus(302);
        $response->assertSessionHas('success');
    }

    public function test_admin_routes_return_successful_response(): void
    {
        $adminRoutes = [
            '/admin/dashboard',
            '/admin/components/tables',
            '/admin/components/forms',
            '/admin/components/cards',
            '/auth/change-password',
        ];

        foreach ($adminRoutes as $route) {
            $response = $this->withSession([
                'user_id' => 1,
                'user_email' => 'admin@mahobiyafilms.com',
                'user_full_name' => 'Admin User',
            ])->get($route);

            $response->assertStatus(200);
        }
    }
}
