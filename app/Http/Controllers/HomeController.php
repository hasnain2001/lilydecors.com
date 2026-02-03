<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Store;
use Illuminate\Support\Facades\Auth;
use App\Models\Coupon;
use App\Models\Slider;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $roomBlogs = Blog::whereHas('category', function ($q) {
                $q->where('slug', 'living-room');
            })
            ->latest()
            ->take(6)
            ->get();

        $fashionBlogs = Blog::whereHas('category', function ($q) {
                $q->where('slug', 'fashion');
            })
            ->latest()
            ->take(6)
            ->get();
        $blogs = Blog::all(); 
        $categories = Category::where('top_category', 1)->orderBy('name')->get();

        return view('welcome', compact('roomBlogs', 'fashionBlogs', 'blogs', 'categories'));
    }

    public function store(Request $request)
    {
        $stores = Store::withCount('coupons')
                        ->distinct()
                        ->orderBy('created_at','desc')
                        ->paginate(40);

        return view('front-end.stores', compact('stores'));
    }

    public function StoreDetails($slug, Request $request)
    {
        // Fetch the store by slug directly
        $store = Store::where('slug', $slug)->first();

        if (!$store) {
            abort(404); // Store not found
        }

        // Sorting and fetching coupons
        $sort = $request->query('sort', 'all');
        if ($sort === 'codes')
        {
            $coupons = Coupon::where('store_id', $store->id)
                            ->whereNotNull('code')
                            ->orderByRaw('CAST(`order` AS SIGNED) ASC')
                            ->get();
        }
        elseif ($sort === 'deals')
        {
            $coupons = Coupon::where('store_id', $store->id)
                            ->whereNull('code')
                            ->orderByRaw('CAST(`order` AS SIGNED) ASC')
                            ->get();
        }
        elseif ($sort === 'latest')
        {
            $coupons = Coupon::where('store_id', $store->id)
                            ->orderByDesc('created_at')
                            ->orderByRaw('CAST(`order` AS SIGNED) ASC')
                            ->get();
        }
        elseif ($sort === 'popular')
        {
            $coupons = Coupon::where('store_id', $store->id)
                            ->orderByRaw("CASE WHEN authentication = 'featured' THEN 1 ELSE 2 END")
                            ->orderByRaw('CAST(`order` AS SIGNED) ASC')
                            ->get();
        }
        elseif ($sort === 'expiring')
        {
            $coupons = Coupon::where('store_id', $store->id)
                ->orderByRaw("CASE WHEN ending_date >= NOW() THEN 0 ELSE 1 END")
                ->orderBy('ending_date', 'asc')
                ->get();
        }
        else
        {
            $coupons = Coupon::where('store_id', $store->id)
                            ->orderByRaw('CAST(`order` AS SIGNED) ASC')
                            ->get();
        }

        // Count the number of codes and deals
        $codeCount = Coupon::where('store_id', $store->id)
                            ->whereNotNull('code')
                            ->count();
        $dealCount = Coupon::where('store_id', $store->id)
                            ->whereNull('code')
                            ->count();

        // Fetch related stores based on the same category
        $relatedStores = Store::where('category_id', $store->category_id)
                    ->where('id', '!=', $store->id)
                    ->orderBy('created_at','desc')
                    ->take(12)
                    ->get();

        // Fetch related blogs based on the same store
        $relatedblogs = Blog::where('store_id', $store->id)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('front-end.store_detail', compact('store', 'coupons', 'relatedStores','relatedblogs','codeCount', 'dealCount'));
    }

    public function category()
    {
        $categories = Category::all();
        return view('front-end.category', compact('categories'));
    }

    public function CategoryDetails($slug, Request $request)
    {
        $category = Category::where('slug', $slug)->first();
        
        if (!$category) {
            abort(404);
        }
        
        $relatedblogs = Blog::where('category_id', $category->id)
                 ->where('status',1)
                ->orderBy('created_at', 'desc')
                ->take(5)
                ->get();
                
        $stores = Store::where('category_id', $category->id)->get();

        return view('front-end.category_detail', compact('category','relatedblogs','stores'));
    }

    public function blog()
    {
        $blogs = Blog::orderBy('created_at', 'desc')
            ->paginate(10);
        return view('front-end.blog', compact('blogs'));
    }

    public function BlogDetails($slug, Request $request)
    {
        $blog = Blog::where('slug', $slug)->first();
        
        if (!$blog) {
            abort(404);
        }
        
        $relatedBlogs = Blog::where('category_id', $blog->category_id)
                ->where('id', '!=', $blog->id)
                ->orderBy('created_at', 'desc')
                ->take(5)
                ->get();
                
        $relatedstores = Store::where('id', $blog->store_id)->get();

        return view('front-end.blog_detail', compact('blog', 'relatedBlogs','relatedstores'));
    }



    public function expringsoon()
    {
        $coupons = Coupon::whereNotNull('code')
            ->where('status', 1)
            ->whereBetween('ending_date', [
                Carbon::now(),
                Carbon::now()->addDays(10)
            ])
            ->orderBy('ending_date', 'asc')
            ->paginate(10);

        return view('front-end.coupon', compact('coupons'));
    }


    public function todaydeals()
    {
        $coupons = Coupon::orderBy('created_at', 'desc')
            ->whereNull('code')
            ->paginate(10);
        $categories = Category::where('top_category', 1)->orderBy('name')->get();

        return view('front-end.today-deals', compact('coupons', 'categories'));
    }
    public function topstore()
    {
        $stores = Store::withCount('coupons')
                        ->where('top_store', 1)
                        ->orderBy('created_at','desc')
                        ->paginate(40);

        return view('front-end.top-stores', compact('stores'));
    }
    public function newstore()
    {
        $stores = Store::withCount('coupons')
                        ->orderBy('created_at','desc')
                        ->paginate(40);

        return view('front-end.new-stores', compact('stores'));
    }

}