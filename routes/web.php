<?php

use App\Http\Controllers\FirstController;
use Illuminate\Support\Facades\Route;

Route::name('firstsite.')->controller(FirstController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/pricing', 'pricing')->name('pricing');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/bloghome', 'bloghome')->name('bloghome');
    Route::get('/blogpost', 'blogpost')->name('blogpost');
    Route::get('/portfolioover', 'portfolioover')->name('portfolioover');
    Route::get('/portfolioitem', 'portfolioitem')->name('portfolioitem');
});
