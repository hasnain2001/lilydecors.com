<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Store;
use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

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

        // Static pages
        $staticRoutes = [
            'blog' => 1.0,
            'stores' => 1.0,
            'category' => 1.0,
            'about' => 0.8,
            'contact' => 0.8,
            'terms-and-condition' => 0.8,
            'privacy' => 0.8,
            'cookies' => 0.8,
            'imprint' => 0.8,
        ];

        foreach ($staticRoutes as $route => $priority) {
            $sitemap->add(Url::create("/$route")->setPriority($priority));
        }

        // 🏬 Dynamic URLs: Stores
        $stores = Store::all();
        foreach ($stores as $store) {
            $sitemap->add(Url::create("/store/{$store->slug}"));
        }

        // 📰 Dynamic URLs: Blogs
        $blogs = Blog::all();
        foreach ($blogs as $blog) {
            $sitemap->add(Url::create("/blog/{$blog->slug}"));
        }

        // 🏷️ Dynamic URLs: Categories
        $categories = Category::all();
        foreach ($categories as $category) {
            $sitemap->add(Url::create("/category/{$category->slug}"));
        }

        // Save the sitemap
        $sitemap->writeToFile(public_path('sitemap.xml'));

        return redirect()->back()->with('success', 'Sitemap created successfully.');
    }
}