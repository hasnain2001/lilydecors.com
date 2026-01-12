<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('category_id', 1)->where('status', 'published')->latest()->take(3)->get();
        return view('welcome', compact('blogs'));
    }
}
