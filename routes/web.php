<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;

// Frontend Routes
Route::name('frontend.')->group(function () {
    Route::controller(FrontendController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/about', 'about')->name('about');
        Route::get('/blog', 'blog')->name('blog');
        Route::get('/blog-details', 'blogDetails')->name('blogDetails');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/faq', 'faq')->name('faq');
        Route::get('/gallery', 'gallery')->name('gallery');
        Route::get('/privacy-policy', 'privacyPolicy')->name('privacyPolicy');
        Route::get('/quiz', 'quiz')->name('quiz');
        Route::get('/service-detail', 'serviceDetail')->name('serviceDetail');
        Route::get('/services', 'services')->name('services');
        Route::get('/success-stories', 'successStories')->name('successStories');
    });
});


Route::middleware('auth')->controller(DashboardController::class)->group(function () {
    Route::get('/admin', 'index')->name('index');
});

// Authentication
Route::prefix('authentication')->group(function () {
    Route::controller(AuthenticationController::class)->group(function () {
        Route::get('/forgotpassword', 'forgotPassword')->name('forgotPassword');
        Route::get('/signin', 'signin')->name('signin');
        Route::post('/login', 'login')->name('admin.login.post');
        Route::post('/logout', 'logout')->name('admin.logout');
        Route::get('/signup', 'signup')->name('signup');
    });
});
