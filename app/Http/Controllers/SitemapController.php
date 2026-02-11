<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Store;
use App\Models\Language;
use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Compact;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Str;

class SitemapController extends Controller
{
    public function index()
    {
        $tags = [];
        $stores = Store::all();
        $categories = Category::all();
        return view('sitemap::sitemap', compact('stores', 'categories', 'tags'));
    }
    
    public function generate()
    {
        $sitemap = Sitemap::create();

        // Define available locales
        $locales = Language::pluck('code', 'id')->toArray();

        // Static pages
        $staticRoutes = [
            'blog' => 1.0,
            'store' => 1.0,
            'category' => 1.0,
            'about' => 0.8,
            'contact' => 0.8,
            'terms-and-conditions' => 0.8,
            'privacy-policy' => 0.8,
            'faq' => 0.8,
            'affiliate-disclosure' => 0.8,
            'imprint' => 0.8,
            'how-to' => 0.8,
            'coupon' => 0.8,
            'deal' => 0.8,
            'top-store' => 0.8,
            'cashback' => 0.8,
            'trending' => 0.8,
            'new-store' => 0.8,
            'today-deals' => 0.8,
            'expring-soon' => 0.8
        ];

        
        foreach ($locales as $locale) {
            foreach ($staticRoutes as $route => $priority) {
                $sitemap->add(Url::create("/$locale/$route")->setPriority($priority));
            }
        }
        $stores = Store::all();
        foreach ($stores as $store) {
            $slug = Str::slug($store->slug);
            if (isset($locales[$store->language_id])) {
                $locale = $locales[$store->language_id];
                $url = $locale == 'en' ? "/store/{$slug}" : "/{$locale}/store/{$slug}";
                $sitemap->add(Url::create($url));
            }
        }
        $blogs = Blog::all();
        foreach ($blogs as $blog) {
            $slug = Str::slug($blog->slug);
            if (isset($locales[$blog->language_id])) {
                $locale = $locales[$blog->language_id];
                $url = $locale == 'en' ? "/blog/{$slug}" : "/{$locale}/blog/{$slug}";
                $sitemap->add(Url::create($url));
            }
        }

        // 🏷️ Dynamic URLs: Categories
         $categories = Category::all();
        foreach ($categories as $category) {
            $slug = Str::slug($category->slug);
            $sitemap->add(Url::create("/category/{$slug}"));
        }

        // Save the sitemap
        $sitemap->writeToFile(public_path('sitemap.xml'));

        return redirect()->back()->with('success', 'Sitemap created successfully.');
    }
}