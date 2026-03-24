<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Blog;
use App\Models\Coupon;
use App\Models\Category;
use App\Models\Network;
use App\Models\User;
use App\Models\Language;
use Illuminate\Support\Str;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        // Check for exact matches first for redirects
        $store = Store::where('slug', $query)->orWhere('name', $query)->first();
        $blog = Blog::where('slug', $query)->orWhere('name', $query)->first();
        $coupon = Coupon::where('code', $query)->orWhere('name', $query)->first();
        $category = Category::where('slug', $query)->orWhere('name', $query)->first();

        // Redirect to specific pages if exact match found
        if ($store) {
            return redirect()->route('admin.store.show', $store->id);
        }
        if ($blog) {
            return redirect()->route('admin.blog.show', $blog->id);
        }
        if ($coupon) {
            return redirect()->route('admin.coupon.show', $coupon->id);
        }
        if ($category) {
            return redirect()->route('admin.category.show', $category->id);
        }

        // For AJAX requests, return suggestions
        if ($request->ajax()) {
            $suggestions = $this->getSearchSuggestions($query);
            return response()->json($suggestions);
        }

        // Otherwise redirect to comprehensive results page
        return redirect()->route('admin.search.results', ['query' => $query]);
    }

    public function searchResults(Request $request)
    {
        $query = $request->input('query');
        
        // Get all results with pagination
        $results = [
            'stores' => Store::where('name', 'LIKE', "%{$query}%")
                ->orWhere('slug', 'LIKE', "%{$query}%")
                ->with(['category', 'network', 'language', 'user', 'updatedby'])
                ->paginate(10, ['*'], 'stores_page'),
                
            'blogs' => Blog::where('name', 'LIKE', "%{$query}%")
                ->orWhere('content', 'LIKE', "%{$query}%")
                ->orWhere('slug', 'LIKE', "%{$query}%")
                ->with([ 'category'])
                ->paginate(10, ['*'], 'blogs_page'),
                
            'coupons' => Coupon::where('name', 'LIKE', "%{$query}%")
                ->orWhere('code', 'LIKE', "%{$query}%")
                ->with(['store',  'language', 'user', 'updatedby'])
                ->paginate(10, ['*'], 'coupons_page'),
                
            'categories' => Category::where('name', 'LIKE', "%{$query}%")
                ->orWhere('slug', 'LIKE', "%{$query}%")
                ->withCount(['stores', 'blogs', ])
                ->paginate(10, ['*'], 'categories_page')
        ];

        // Preserve query string for pagination
        $results['stores']->appends(['query' => $query]);
        $results['blogs']->appends(['query' => $query]);
        $results['coupons']->appends(['query' => $query]);
        $results['categories']->appends(['query' => $query]);

        $totalResults = $results['stores']->total() + $results['blogs']->total() + 
                       $results['coupons']->total() + $results['categories']->total();

        return view('admin.search.results', compact('results', 'query', 'totalResults'));
    }

    private function getSearchSuggestions($query)
    {
        $stores = Store::where('name', 'LIKE', "{$query}%")
            ->limit(5)
            ->get(['id', 'name', 'slug', 'image'])
            ->map(function($item) {
                return [
                    'type' => 'store',
                    'id' => $item->id,
                    'title' => $item->name,
                    'url' => route('admin.store.show', $item->id),
                    'image' => asset('storage/stores/' . $item->image),
                    'icon' => 'mdi-store'
                ];
            });

        $blogs = Blog::where('title', 'LIKE', "{$query}%")
            ->limit(5)
            ->get(['id', 'title', 'slug', 'featured_image'])
            ->map(function($item) {
                return [
                    'type' => 'blog',
                    'id' => $item->id,
                    'name' => $item->name,
                    'url' => route('admin.blog.show', $item->id),
                    'image' => $item->featured_image ? asset('storage/blogs/' . $item->featured_image) : null,
                    'icon' => 'mdi-post'
                ];
            });

        $coupons = Coupon::where('name', 'LIKE', "{$query}%")
            ->orWhere('code', 'LIKE', "{$query}%")
            ->limit(5)
            ->with('store')
            ->get(['id', 'name', 'code', 'store_id'])
            ->map(function($item) {
                return [
                    'type' => 'coupon',
                    'id' => $item->id,
                    'name' => $item->name,
                    'subtitle' => $item->code,
                    'url' => route('admin.coupon.show', $item->id),
                    'store_name' => $item->store->name ?? null,
                    'icon' => 'mdi-tag'
                ];
            });

        $categories = Category::where('name', 'LIKE', "{$query}%")
            ->limit(5)
            ->get(['id', 'name', 'slug'])
            ->map(function($item) {
                return [
                    'type' => 'category',
                    'id' => $item->id,
                    'title' => $item->name,
                    'url' => route('admin.category.edit', $item->id),
                    'icon' => 'mdi-folder'
                ];
            });

        return [
            'stores' => $stores,
            'blogs' => $blogs,
            'coupons' => $coupons,
            'categories' => $categories,
            'total' => $stores->count() + $blogs->count() + $coupons->count() + $categories->count()
        ];
    }

    public function searchStoresCoupons(Request $request)
    {
        $query = $request->input('query');
        $stores = Store::where('name', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->get();

        return response()->json($stores);
    }
}