<?php
require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/employee.php';

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

    Route::get('/about', function () {return view('front-end.about');})->name('about');
    Route::get('/contact', function () {return view('front-end.contact');})->name('contact');
    Route::get('/privacy-policy', function () {return view('front-end.privacy-policy');})->name('privacy-policy');
    Route::get('/terms-and-conditions', function () {return view('front-end.terms-and-conditions');})->name('terms-and-conditions');
    Route::get('/faq', function () {return view('front-end.faq');})->name('faq');

    Route::middleware(['auth','role:user'])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');
    });

    Route::controller(ProfileController::class)->name('profile.')->middleware('auth')->group(function () {
    Route::get('/profile', 'edit')->name('edit');
    Route::patch('/profile', 'update')->name('update');
    Route::delete('/profile', 'destroy')->name('destroy');
    });
    Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog/{slug}', 'BlogDetails')->name('blog.details');
     Route::get('/category', 'category')->name('category');
    Route::get('/category/{slug}', 'CategoryDetails')->name('category.details');
    Route::get('/store', 'store')->name('store');
    Route::get('/store/{slug}', 'StoreDetails')->name('store.details');
    Route::get('/coupon', 'coupon')->name('coupon');
    Route::get('/coupon/{slug}', 'couponDetails')->name('coupon.details');
    Route::get('/deals', 'deals')->name('deals');
    Route::get('/search', 'search')->name('search');
    });




