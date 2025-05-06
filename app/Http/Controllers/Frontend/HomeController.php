<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function destinationWedding()
    {
        return view('frontend.destination-wedding');
    }

    public function aboutus()
    {
        return view('frontend.about-us');
    }

    public function contactUs()
    {
        return view('frontend.contact-us');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }
}
