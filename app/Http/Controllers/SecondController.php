<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function index()
    {
        return view('secondsite.index');
    }
    public function about()
    {
        return view('secondsite.about');
    }
    public function products()
    {
        return view('secondsite.products');
    }
    public function store()
    {
        return view('secondsite.store');
    }
}
