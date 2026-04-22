<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function blog()
    {
        return view('frontend.blog');
    }

    public function blogDetails()
    {
        return view('frontend.blog-details');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy-policy');
    }

    public function quiz()
    {
        return view('frontend.quiz');
    }

    public function serviceDetail()
    {
        return view('frontend.service-detail');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function successStories()
    {
        return view('frontend.success-stories');
    }
}
