<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicPageController extends Controller
{
    /**
     * Home Page
     */
    public function home()
    {
        return view('public.home');
    }

    /**
     * About Us / Company Profile
     */
    public function about()
    {
        return view('public.about');
    }

    /**
     * Films & Projects Catalog
     */
    public function films()
    {
        return view('public.films');
    }

    /**
     * Individual Film Details
     */
    public function filmDetail($slug = 'mahakavya-shri-ramayan')
    {
        return view('public.film-detail', compact('slug'));
    }

    /**
     * Team / Cast & Crew
     */
    public function team()
    {
        return view('public.team');
    }

    /**
     * Photo & Event Gallery
     */
    public function gallery()
    {
        return view('public.gallery');
    }

    /**
     * Videos & Trailers
     */
    public function videos()
    {
        return view('public.videos');
    }

    /**
     * News & Updates / Media Coverage
     */
    public function news()
    {
        return view('public.news');
    }

    /**
     * Contact Us Page
     */
    public function contact()
    {
        return view('public.contact');
    }

    /**
     * Handle Contact Form Submission
     */
    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:120',
            'email' => 'required|email|max:120',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:200',
            'message' => 'required|string|max:2000',
        ]);

        // Future: Save to DB or trigger email
        return back()->with('success', 'Thank you! Your message has been received. Our production team will get in touch with you shortly.');
    }
}

