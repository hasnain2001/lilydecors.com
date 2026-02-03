@extends('layouts.master')
@section('title','search | Latest Discount Codes of ' . date('Y') . ' | Best Offers and Deals')
@section('description', 'Explore our amazing stores and offers. Find the best products and services in one place.')
@section('keywords', 'stores, offers, products, services')
@section('author', 'john doe')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/search.css') }}">
@endpush

@section('content')
<!-- Search Header -->
<div class="search-header">
    <div class="container">
        <div class="search-header-content">
            <h1>Search Results</h1>
            <p class="lead mb-0">Found results for: <span class="search-query">"{{ $query }}"</span></p>
        </div>
    </div>
</div>

<div class="container animate-fade-in">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="breadcrumb-custom mb-4">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/" class="text-decoration-none">
                    <i class="fas fa-home me-1"></i>Home
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Search Results</li>
        </ol>
    </nav>

    <!-- Search Filters -->
    <div class="card search-filters-card">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-6 mb-3 mb-md-0">
                    <h3 class="results-title mb-0">
                        Search Results
                        <small class="text-muted fs-6">for "{{ $query }}"</small>
                    </h3>
                </div>
                <div class="col-md-6">
                    <form method="GET" action="{{ route('search_results') }}">
                        <input type="hidden" name="query" value="{{ $query }}">
                        <select name="type" class="form-select type-select" onchange="this.form.submit()">
                            <option value="all" {{ $searchType == 'all' ? 'selected' : '' }}>All Results</option>
                            <option value="stores" {{ $searchType == 'stores' ? 'selected' : '' }}>Stores</option>
                            <option value="coupons" {{ $searchType == 'coupons' ? 'selected' : '' }}>Coupons</option>
                            <option value="categories" {{ $searchType == 'categories' ? 'selected' : '' }}>Categories</option>
                            <option value="blogs" {{ $searchType == 'blogs' ? 'selected' : '' }}>Blogs</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Results Summary -->
    @if($searchType == 'all')
    <div class="row mb-4">
        <div class="col-12">
            <div class="summary-badges d-flex flex-wrap gap-3">
                <a href="{{ route('search_results', ['query' => $query, 'type' => 'stores']) }}" class="text-decoration-none">
                    <span class="badge bg-primary">
                        <i class="fas fa-store me-1"></i>Stores: {{ $totalStores }}
                    </span>
                </a>
                <a href="{{ route('search_results', ['query' => $query, 'type' => 'coupons']) }}" class="text-decoration-none">
                    <span class="badge bg-success">
                        <i class="fas fa-tag me-1"></i>Coupons: {{ $totalCoupons }}
                    </span>
                </a>
                <a href="{{ route('search_results', ['query' => $query, 'type' => 'categories']) }}" class="text-decoration-none">
                    <span class="badge bg-warning text-dark">
                        <i class="fas fa-folder me-1"></i>Categories: {{ $totalCategories }}
                    </span>
                </a>
                <a href="{{ route('search_results', ['query' => $query, 'type' => 'blogs']) }}" class="text-decoration-none">
                    <span class="badge bg-info">
                        <i class="fas fa-blog me-1"></i>Blogs: {{ $totalBlogs }}
                    </span>
                </a>
            </div>
        </div>
    </div>
    @endif
    <!-- Blogs Results -->
    @if(($searchType == 'all' || $searchType == 'blogs') && $blogs->count() > 0)
    <div class="card result-section-card">
        <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">
                <i class="fas fa-blog me-2"></i>Blog Posts
                @if($searchType == 'all')
                    ({{ $blogs->count() }} of {{ $totalBlogs }})
                @else
                    ({{ $blogs->total() }})
                @endif
            </h5>
            @if($searchType == 'all' && $totalBlogs > $blogs->count())
                <a href="{{ route('search_results', ['query' => $query, 'type' => 'blogs']) }}" class="view-all-btn">
                    View All <i class="fas fa-arrow-right ms-1"></i>
                </a>
            @endif
        </div>
        <div class="card-body">
            <div class="row g-4">
                @foreach ($blogs as $blog)
                    <div class="col-12 col-md-6">
                        <div class="card blog-card h-100">
                            @if($blog->image)
                             <a href="{{ route('blog.details', $blog->slug) }}" >
                                <img src="{{ asset('uploads/blogs/' . $blog->image) }}"
                                     class="card-img-top"
                                     alt="{{ $blog->name }}"
                                     loading="lazy">
                               </a>
                            @endif
                            <div class="card-body">
                                <h5 class="blog-name">{{ $blog->name }}</h5>
                                <p class="card-text text-muted mb-3">{{ Str::limit($blog->excerpt, 150) }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">
                                        <i class="fas fa-calendar me-1"></i>
                                        {{ $blog->created_at->format('M d, Y') }}
                                    </small>
                                    <a href="{{ route('blog.details', $blog->slug) }}" class="read-more-btn">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @if($searchType == 'blogs' && $blogs->hasPages())
                <div class="d-flex justify-content-center mt-4">
                    {{ $blogs->links('pagination::bootstrap-5') }}
                </div>
            @endif
        </div>
    </div>
    @endif
    <!-- Stores Results -->
    @if(($searchType == 'all' || $searchType == 'stores') && $stores->count() > 0)
    <div class="card result-section-card">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">
                <i class="fas fa-store me-2"></i>Stores
                @if($searchType == 'all')
                    ({{ $stores->count() }} of {{ $totalStores }})
                @else
                    ({{ $stores->total() }})
                @endif
            </h5>
            @if($searchType == 'all' && $totalStores > $stores->count())
                <a href="{{ route('search_results', ['query' => $query, 'type' => 'stores']) }}" class="view-all-btn">
                    View All <i class="fas fa-arrow-right ms-1"></i>
                </a>
            @endif
        </div>
        <div class="card-body">
            <div class="row g-4">
                @foreach ($stores as $store)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="store-card">
                            <a href="{{ route('store.details', ['slug' => Str::slug($store->slug)]) }}" class="text-decoration-none">
                                <div class="d-flex justify-content-center mb-3">
                                    <img src="{{ $store->image ? asset('uploads/stores/' . $store->image) : asset('front/assets/images/no-image-found.jpg') }}"
                                         class="store-image rounded-circle"
                                         alt="{{ $store->name }}"
                                         loading="lazy">
                                </div>
                                <h6 class="store-name">{{ $store->name }}</h6>
                                @if($store->offers_count > 0)
                                    <span class="offers-badge">
                                        {{ $store->offers_count }} {{ Str::plural('offer', $store->offers_count) }}
                                    </span>
                                @endif
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            @if($searchType == 'stores' && $stores->hasPages())
                <div class="d-flex justify-content-center mt-4">
                    {{ $stores->links('pagination::bootstrap-5') }}
                </div>
            @endif
        </div>
    </div>
    @endif

    <!-- Coupons Results -->
    @if(($searchType == 'all' || $searchType == 'coupons') && $coupons->count() > 0)
    <div class="card result-section-card">
        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">
                <i class="fas fa-tag me-2"></i>Coupons
                @if($searchType == 'all')
                    ({{ $coupons->count() }} of {{ $totalCoupons }})
                @else
                    ({{ $coupons->total() }})
                @endif
            </h5>
            @if($searchType == 'all' && $totalCoupons > $coupons->count())
                <a href="{{ route('search_results', ['query' => $query, 'type' => 'coupons']) }}" class="view-all-btn">
                    View All <i class="fas fa-arrow-right ms-1"></i>
                </a>
            @endif
        </div>
        <div class="card-body">
            <div class="row g-3">
                @foreach ($coupons as $coupon)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card coupon-card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <h6 class="card-title text-dark fw-bold mb-0">{{ $coupon->title }}</h6>
                                    <span class="coupon-code">{{ $coupon->code }}</span>
                                </div>
                                <p class="card-text text-muted small mb-3">{{ Str::limit($coupon->description, 100) }}</p>

                                @if($coupon->stores)
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-store text-primary me-2 small"></i>
                                        <small class="text-primary">{{ $coupon->stores->name }} </small>
                                    </div>
                                @endif

                                @if($coupon->name)
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="fas fa-tag text-success me-2 small"></i>
                                        <small class="text-success">{{ $coupon->name }}</small>
                                    </div>
                                @endif

                                <div class="mt-auto">
                                    {{-- <span class="expiry-badge">
                                        <i class="fas fa-clock me-1"></i>
                                        {{ $coupon->ending_date ? $coupon->ending_date->format('M d, Y') : 'No expiry' }}
                                    </span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @if($searchType == 'coupons' && $coupons->hasPages())
                <div class="d-flex justify-content-center mt-4">
                    {{ $coupons->links('pagination::bootstrap-5') }}
                </div>
            @endif
        </div>
    </div>
    @endif

    <!-- Categories Results -->
    @if(($searchType == 'all' || $searchType == 'categories') && $categories->count() > 0)
    <div class="card result-section-card">
        <div class="card-header bg-warning text-dark d-flex justify-content-between align-items-center">
            <h5 class="mb-0">
                <i class="fas fa-folder me-2"></i>Categories
                @if($searchType == 'all')
                    ({{ $categories->count() }} of {{ $totalCategories }})
                @else
                    ({{ $categories->total() }})
                @endif
            </h5>
            @if($searchType == 'all' && $totalCategories > $categories->count())
                <a href="{{ route('search_results', ['query' => $query, 'type' => 'categories']) }}" class="view-all-btn" style="color: #000; background: rgba(0,0,0,0.1);">
                    View All <i class="fas fa-arrow-right ms-1"></i>
                </a>
            @endif
        </div>
        <div class="card-body">
            <div class="row g-3">
                @foreach ($categories as $category)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card category-card h-100">
                            <div class="card-body">
                                <a href="{{ route('category.details', [Str::slug($category->slug)]) }}" >
                                <div class="mb-3">
                                    <i class="fas fa-folder text-warning" style="font-size: 2rem;"></i>
                                </div>
                                <h6 class="card-title text-dark fw-bold mb-2">{{ $category->name }}</h6>
                                @if($category->stores_count > 0)
                                    <span class="badge bg-primary">
                                        {{ $category->stores_count }} {{ Str::plural('store', $category->stores_count) }}
                                    </span>
                                @endif
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @if($searchType == 'categories' && $categories->hasPages())
                <div class="d-flex justify-content-center mt-4">
                    {{ $categories->links('pagination::bootstrap-5') }}
                </div>
            @endif
        </div>
    </div>
    @endif

  

    <!-- No Results -->
    @if($stores->isEmpty() && $coupons->isEmpty() && $categories->isEmpty() && $blogs->isEmpty())
        <div class="no-results">
            <img src="{{ asset('assets/img/no-image-found.png') }}"
                 alt="No results"
                 class="img-fluid">
            <h4 class="mt-3">No results found for "{{ $query }}"</h4>
            <p class="text-secondary mb-4">Try adjusting your search criteria and try again</p>
            <a href="/" class="btn btn-primary">
                <i class="fas fa-home me-2"></i>Back to Home
            </a>
        </div>
    @endif
</div>
@endsection

@push('scripts')
<script>
    // Add smooth animations
    document.addEventListener('DOMContentLoaded', function() {
        // Animate elements on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all result cards
        document.querySelectorAll('.store-card, .coupon-card, .category-card, .blog-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });

        // Copy protection with nicer alerts
        document.addEventListener('copy', function(e) {
            e.preventDefault();
            // You can add a SweetAlert here if you have it included
            console.log('Copying disabled on this page');
        });

        document.addEventListener('contextmenu', function(e) {
            if (e.target.tagName === 'IMG') {
                e.preventDefault();
                console.log('Right-click disabled for images');
            }
        });
    });
</script>
@endpush
