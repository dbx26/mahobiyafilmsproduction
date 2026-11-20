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
