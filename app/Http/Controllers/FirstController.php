<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function pricing()
    {
        return view('pricing');
    }
    public function faq()
    {
        return view('faq');
    }
    public function bloghome()
    {
        return view('blog-home');
    }
    public function blogpost()
    {
        return view('blog-post');
    }
    public function portfolioover()
    {
        return view('portfolio-overview');
    }
    public function portfolioitem()
    {
        return view('portfolio-item');
    }
};
