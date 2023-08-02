<?php

namespace App\Http\Controllers\SiteController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function booking()
    {
        return view('pages.booking');
    }

    public function contact()
    {
        return view('pages.contact');
    }
    
    public function menu()
    {
        return view('pages.menu');
    }

    public function service()
    {
        return view('pages.service');
    }

    public function team()
    {
        return view('pages.team');
    }

    public function testimonial()
    {
        return view ('pages.testimonial');
    }
}
