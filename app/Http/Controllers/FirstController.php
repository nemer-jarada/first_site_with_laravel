<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {
        return view('firstsite.index');
    }
    public function about()
    {
        return view('firstsite.about');
    }
    public function contact()
    {
        return view('firstsite.contact');
    }
    public function pricing()
    {
        return view('firstsite.pricing');
    }
    public function faq()
    {
        return view('firstsite.faq');
    }
    public function bloghome()
    {
        return view('firstsite.blog-home');
    }
    public function blogpost()
    {
        return view('firstsite.blog-post');
    }
    public function portfolioover()
    {
        return view('firstsite.portfolio-overview');
    }
    public function portfolioitem()
    {
        return view('firstsite.portfolio-item');
    }
};
