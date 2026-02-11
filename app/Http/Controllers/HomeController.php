<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Store;
use Illuminate\Support\Facades\Auth;
use App\Models\Coupon;
use App\Models\Slider;
use App\Models\Language;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $lang = null)
    {
        $languageCode = $lang ?? 'en';
        app()->setLocale($languageCode);
    // Fetch the language, or default to English
        $language = language::where('code', $languageCode)->firstOr(function () {
            abort(404, 'Language not found');
        });
        $roomBlogs = Blog::whereHas('category', function ($q) {
                $q->where('slug', 'living-room');
            })->where('language_id', $language->id)
            ->latest()
            ->take(6)
            ->get();

        $fashionBlogs = Blog::whereHas('category', function ($q) {
                $q->where('slug', 'fashion');
            })->where('language_id', $language->id)
            ->latest()
            ->take(6)
            ->get();
        $blogs = Blog::where('language_id', $language->id)->get(); 
        $categories = Category::where('top_category', 1)->orderBy('name')->get();

        return view('welcome', compact('roomBlogs', 'fashionBlogs', 'blogs', 'categories'));
    }

    public function store(Request $request, $lang = null)
    {
        app()->setLocale($lang);
        $language = language::where('code', $lang)->first();
        if (!$language) {
            abort(404, 'Language not found');
        }
        $stores = Store::withCount('coupons')
                         ->where('language_id', $language->id)
                        ->distinct()
                        ->orderBy('created_at','desc')
                        ->paginate(40);

        return view('front-end.stores', compact('stores'));
    }

    public function StoreDetails($lang = 'en', $slug, Request $request)
    {
         app()->setLocale($lang);
        // Fetch the store by slug directly
        $store = Store::with('language')->where('slug', $slug)->first();

        if (!$store) {
            abort(404); 
        }

        if (!$store->language) {
            return response()->json(['error' => 'No language select for this store.'], 404);
        }
        if ($lang !== $store->language->code) {
            return redirect()->route('store.details.withLang', [
                'lang' => $store->language->code,
                'slug' => $slug
            ]);
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

      public function category($lang = 'en')
    {
        app()->setLocale($lang);
        $language = language::where('code', $lang)->firstOr(function () {
            abort(404, 'Language not found');
        });
        $categories = Category::where('status', 1)->get();

        return view('front-end.category', compact('categories', 'language'));
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
                ->paginate(5);
                
        $stores = Store::where('category_id', $category->id)->get();

        return view('front-end.category_detail', compact('category','relatedblogs','stores'));
    }

    public function blog($lang = 'en')
    {
        app()->setLocale($lang);

        // Fetch the language, or default to English
        $language = language::where('code', $lang)->firstOr(function () {
            abort(404, 'Language not found');
        });
        $blogs = Blog::orderBy('created_at', 'desc')
        ->where('language_id', $language->id)
            ->paginate(10);
        return view('front-end.blog', compact('blogs', 'language'));
    }

    public function BlogDetails($lang = 'en', $slug, Request $request)
    {
        app()->setLocale($lang);

        // Fetch the language, or default to English
        $language = language::where('code', $lang)->firstOr(function () {
            abort(404, 'Language not found');
        });

        $blog = Blog::with('language')->where('slug', $slug)->first();
        
        if (!$blog) {
            abort(404, 'Blog not found');
        }
        
        if (!$blog->language) {
            return response()->json(['error' => 'No language select for this blog.'], 404);
        }
        
        if ($lang !== $blog->language->code) {
            return redirect()->route('blog.details.withLang', [ 'lang' => $blog->language->code,
                'slug' => $slug
            ]);
        }
        
        $relatedBlogs = Blog::where('category_id', $blog->category_id)
                ->where('id', '!=', $blog->id)
                ->where('language_id', $language->id)
                    ->where('status',1)
                ->orderBy('created_at', 'desc')
                ->take(15)
                ->get();
                
        $relatedstores = Store::where('id', $blog->store_id)
        ->where('language_id', $blog->language_id)->get();

        return view('front-end.blog_detail', compact('blog', 'relatedBlogs','relatedstores'));
    }



    public function expringsoon(Request $request, $lang = null)
    {
        app()->setLocale($lang);
        $language = language::where('code', $lang)->first();
        if (!$language) {
            abort(404, 'Language not found');
        }
        $coupons = Coupon::whereNotNull('code')
        ->where('language_id', $language->id)
            ->where('status', 1)
            ->whereBetween('ending_date', [
                Carbon::now(),
                Carbon::now()->addDays(10)
            ])
            ->orderBy('ending_date', 'asc')
            ->paginate(10);

        return view('front-end.coupon', compact('coupons'));
    }


    public function todaydeals($lang = null)
    {
        app()->setLocale($lang);
        $language = language::where('code', $lang)->first();
        if (!$language) {
            abort(404, 'Language not found');
        }
        $coupons = Coupon::where('language_id', $language->id)
            ->orderBy('created_at', 'desc')
            ->whereNull('code')
            ->paginate(10);
        $categories = Category::where('top_category', 1)->orderBy('name')->get();

        return view('front-end.deals', compact('coupons', 'categories'));
    }
    public function topstore($lang = null)
    {
        app()->setLocale($lang);
        $language = language::where('code', $lang)->first();
        if (!$language) {
            abort(404, 'Language not found');
        }
        $stores = Store::withCount('coupons')
                        ->where('top_store', 1)
                        ->where('language_id', $language->id)
                        ->orderBy('created_at','desc')
                        ->paginate(40);

        return view('front-end.top-stores', compact('stores'));
    }
     public function cashback($lang = null)
    {
        app()->setLocale($lang);
        $language = language::where('code', $lang)->first();
        if (!$language) {
            abort(404, 'Language not found');
        }
        $stores = Store::withCount('coupons')
                        ->where('top_store', 1)
                        ->where('language_id', $language->id)
                        ->orderBy('created_at','desc')
                        ->paginate(40);

        return view('front-end.top-stores', compact('stores'));
    }
     public function trending($lang = null)
    {
        app()->setLocale($lang);
        $language = language::where('code', $lang)->first();
        if (!$language) {
            abort(404, 'Language not found');
        }
        $stores = Store::withCount('coupons')
                        ->where('top_store', 1)
                        ->where('language_id', $language->id)
                        ->orderBy('created_at','desc')
                        ->paginate(40);

        return view('front-end.top-stores', compact('stores'));
    }
     public function coupon($lang = null)
    {
        app()->setLocale($lang);
        $language = language::where('code', $lang)->first();
        if (!$language) {
            abort(404, 'Language not found');
        }
        $coupons = Coupon::with('store')
        ->whereNotNull('code')
                        ->where('language_id', $language->id)
                        ->orderBy('created_at','desc')
                        ->paginate(40);

        return view('front-end.coupon', compact('coupons'));
    }
     public function deal($lang = null)
    {
        app()->setLocale($lang);
        $language = language::where('code', $lang)->first();
        if (!$language) {
            abort(404, 'Language not found');
        }
        $coupons = Coupon::with('store')
         ->whereNull('code')
                        ->where('language_id', $language->id)
                        ->orderBy('created_at','desc')
                        ->paginate(40);
        $categories = Category::where('top_category', 1)->orderBy('name')->get();
        return view('front-end.deals', compact('coupons', 'categories'));
    }
    public function newstore($lang = null)
    {
        app()->setLocale($lang);
        $language = language::where('code', $lang)->first();
        if (!$language) {
            abort(404, 'Language not found');
        }
         $stores = Store::withCount('coupons')
                        ->where('language_id', $language->id)
                        ->orderBy('created_at','desc')
                        ->paginate(40);

        return view('front-end.new-stores', compact('stores'));
    }

}