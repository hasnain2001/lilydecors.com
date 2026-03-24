@extends('admin.layouts.guest')

@section('title', 'Search Results: ' . $query)

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h4 class="header-title">Search Results</h4>
                        <p class="text-muted mb-0">
                            Found <strong>{{ $totalResults }}</strong> results for "{{ $query }}"
                        </p>
                    </div>
                    <div>
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary">
                            <i class="mdi mdi-arrow-left"></i> Back to Dashboard
                        </a>
                    </div>
                </div>

                <!-- Search Tabs -->
                <ul class="nav nav-tabs nav-bordered mb-3" id="searchTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" 
                                type="button" role="tab" aria-controls="all" aria-selected="true">
                            All Results ({{ $totalResults }})
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="stores-tab" data-bs-toggle="tab" data-bs-target="#stores" 
                                type="button" role="tab" aria-controls="stores" aria-selected="false">
                            Stores ({{ $results['stores']->total() }})
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="coupons-tab" data-bs-toggle="tab" data-bs-target="#coupons" 
                                type="button" role="tab" aria-controls="coupons" aria-selected="false">
                            Coupons ({{ $results['coupons']->total() }})
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="blogs-tab" data-bs-toggle="tab" data-bs-target="#blogs" 
                                type="button" role="tab" aria-controls="blogs" aria-selected="false">
                            Blogs ({{ $results['blogs']->total() }})
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="categories-tab" data-bs-toggle="tab" data-bs-target="#categories" 
                                type="button" role="tab" aria-controls="categories" aria-selected="false">
                            Categories ({{ $results['categories']->total() }})
                        </button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="searchTabsContent">
                    <!-- All Results Tab -->
                    <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                        @include('admin.search.partials.all_results', ['results' => $results, 'query' => $query])
                    </div>

                    <!-- Stores Tab -->
                    <div class="tab-pane fade" id="stores" role="tabpanel" aria-labelledby="stores-tab">
                        @include('admin.search.partials.stores_results', ['stores' => $results['stores'], 'query' => $query])
                    </div>

                    <!-- Coupons Tab -->
                    <div class="tab-pane fade" id="coupons" role="tabpanel" aria-labelledby="coupons-tab">
                        @include('admin.search.partials.coupons_results', ['coupons' => $results['coupons'], 'query' => $query])
                    </div>

                    <!-- Blogs Tab -->
                    <div class="tab-pane fade" id="blogs" role="tabpanel" aria-labelledby="blogs-tab">
                        @include('admin.search.partials.blogs_results', ['blogs' => $results['blogs'], 'query' => $query])
                    </div>

                    <!-- Categories Tab -->
                    <div class="tab-pane fade" id="categories" role="tabpanel" aria-labelledby="categories-tab">
                        @include('admin.search.partials.categories_results', ['categories' => $results['categories'], 'query' => $query])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('styles')
    <style>
        /* Search Results Styling */
.badge-subtle {
    padding: 0.35em 0.65em;
    font-size: 0.75em;
    font-weight: 500;
}

/* Table row hover effect */
.table-hover tbody tr:hover {
    background-color: rgba(114, 124, 245, 0.03);
}

/* Card hover effects */
.hover-shadow-lg {
    transition: all 0.3s ease;
}
.hover-shadow-lg:hover {
    transform: translateY(-2px);
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,.15)!important;
}

/* Tab styling */
.nav-tabs.nav-bordered .nav-link {
    border: none;
    border-bottom: 2px solid transparent;
    padding: 0.5rem 1rem;
    font-weight: 500;
}
.nav-tabs.nav-bordered .nav-link.active {
    border-bottom-color: #727cf5;
    color: #727cf5;
    background-color: transparent;
}
.nav-tabs.nav-bordered .nav-link:hover {
    border-bottom-color: #dee2e6;
}

/* Pagination styling */
.pagination {
    margin-bottom: 0;
}
.page-link {
    padding: 0.3rem 0.75rem;
    font-size: 0.875rem;
}
    </style>
@endpush