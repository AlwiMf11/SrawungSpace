<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show the home page.
     */
    public function home()
    {
        $events = Event::orderBy('date', 'asc')->take(3)->get();

        return view('pages.home', compact('events'));
    }

    /**
     * Show the about page.
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Show the community activities page.
     */
    public function community()
    {
        return view('pages.community');
    }

    /**
     * Show the gallery page.
     */
    public function gallery()
    {
        return view('pages.gallery');
    }

    /**
     * Show the contact page.
     */
    public function contact()
    {
        return view('pages.contact');
    }
}
