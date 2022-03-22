<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\SecondController;

Route::prefix('first')->name('firstsite.')->controller(FirstController::class)->group(function () {
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

Route::prefix('second')->name('secondsite.')->controller(SecondController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/products', 'products')->name('products');
    Route::get('/store', 'store')->name('store');
});
