<?php
require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/employee.php';

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\SearchController;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;

 Route::middleware([Localization::class])->group(function () {
    Route::group(['prefix' => '{lang}',], function () {
    Route::get('/about', function () {return view('front-end.about');})->name('about');
    Route::get('/imprint', function () {return view('front-end.imprint');})->name('imprint');
    Route::get('/contact', function () {return view('front-end.contact');})->name('contact');
    Route::get('/privacy-policy', function () {return view('front-end.privacy-policy');})->name('privacy-policy');
    Route::get('/terms-and-conditions', function () {return view('front-end.terms-and-conditions');})->name('terms-and-conditions');
    Route::get('/faq', function () {return view('front-end.faq');})->name('faq');
    Route::get('/affiliate-disclosure', function () {return view('front-end.affiliate-disclosure');})->name('affiliate-disclosure');
    Route::get('/how-to', function () {return view('front-end.how-to');})->name('how-to');
   });
      });
    Route::middleware(['auth','role:user'])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');
    });

    Route::controller(ProfileController::class)->name('profile.')->middleware('auth')->group(function () {
    Route::get('/profile', 'edit')->name('edit');
    Route::patch('/profile', 'update')->name('update');
    Route::delete('/profile', 'destroy')->name('destroy');
    });
    Route::controller(HomeController::class)->group(function () {
    Route::get('/{lang?}', 'index')->name('index');
   Route::get('/{lang?}/blog', 'blog')->name('blog');    
   Route::get('/blog/{slug}',function($slug) {return app(HomeController::class)->BlogDetails('en', $slug, request());})->name('blog.details');
   Route::get('/{lang}/blog/{slug}', 'BlogDetails')->name('blog.details.withLang');
     Route::get('/{lang?}/category', 'category')->name('category');
   
    Route::get('/{lang?}/store', 'store')->name('store');
    Route::get('store/{slug}', function($slug) {return app(HomeController::class)->StoreDetails('en', $slug, request());})->name('store.details');
   Route::get('/{lang}/store/{slug}', 'StoreDetails')->name('store.details.withLang');
    Route::get('/{lang?}/coupon', 'coupon')->name('coupon');
    Route::get('/{lang?}/deal', 'deal')->name('deal');
    Route::get('/{lang?}/top-store', 'topstore')->name('top-store');
    Route::get('/{lang?}/cashback', 'cashback')->name('cashback');
    Route::get('/{lang?}/trending', 'trending')->name('trending');
    Route::get('/{lang?}/new-store', 'newstore')->name('new-store');
    Route::get('/{lang?}/today-deals', 'todaydeals')->name('today-deals');
    Route::get('/{lang?}/expring-soon', 'expringsoon')->name('expring-soon');
    });
     Route::get('/category/{slug}',[HomeController::class, 'CategoryDetails'])->name('category.details');
     Route::get('/contact/store',[HomeController::class, 'contactStore'])->name('contact.store');

    Route::controller(SearchController::class)->group(function () {
        Route::get('/home/search', 'search')->name('search');
        Route::get('/home/search-results', 'searchResults')->name('search_results');
     });


 Route::controller(CouponController::class)->group(function () {
        Route::post('/update-clicks', 'updateClicks')->name('update.clicks');
        Route::get('/clicks/{couponId}',  'openCoupon')->name('open.coupon');
     });
     Route::controller(SitemapController::class)->group(function () {
        Route::get('/sitemap.xml', 'index')->name('sitemap');
        Route::get('/generate-sitemap', 'generate')->name('generate.sitemap');
     });

