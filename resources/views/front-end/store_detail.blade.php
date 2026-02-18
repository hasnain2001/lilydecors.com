@extends('layouts.master')
@section('title')
    @if ($store->title)
        {{ $store->title }} {{ config('app.name') }}
    @else
        {{ $store->name }} {{ trans('common.coupon_codes') }} & {{ trans('common.promo_codes') }} {{ date('Y') }} | {{ config('app.name') }}
    @endif
@endsection

@section('description')
    @if ($store->meta_description)
        {{ $store->meta_description }}
    @else
        {{ trans('common.save_money_at', ['store' => $store->name]) }} {{ date('Y') }}? ✅ {{ trans('common.find_the_latest_verified') }} {{ $store->name }} {{ trans('common.promo_codes') }}, {{ trans('common.coupons') }} & {{ trans('common.discount_deals') }}. {{ trans('common.save_big_today') }}!
    @endif
@endsection

@section('keywords')
    @if ($store->meta_keyword)
        {{ $store->meta_keyword }}, {{ $store->name }} {{ trans('common.discounts') }}, {{ $store->name }} {{ trans('common.promo_codes') }}, {{ $store->name }} {{ trans('common.coupons') }} {{ date('Y') }}
    @else
        {{ $store->name }}, {{ $store->name }} {{ trans('common.coupons') }}, {{ $store->name }} {{ trans('common.promo_codes') }}, {{ $store->name }} {{ trans('common.vouchers') }}, {{ $store->name }} {{ trans('common.discount_codes') }}, {{ $store->name }} {{ trans('common.deals') }} {{ date('Y') }}, {{ trans('common.save_money') }} {{ $store->name }}, {{ trans('common.verified_coupons') }} {{ $store->name }}
    @endif
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/store-detail.css') }}">
<style> 
     .blog-content {
        color: var(--text-primary);
        line-height: 1.8;
        font-size: 1.05rem;
    }

    .blog-content h2, .blog-content h3, .blog-content h4 {
        color: var(--accent-navy);
        margin-top: 2rem;
        margin-bottom: 1rem;
        font-weight: 700;
    }

    .blog-content p {
        margin-bottom: 1.5rem;
    }

    .blog-content img {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
        margin: 2rem 0;
        box-shadow: var(--shadow-light);
    }
</style>
@endpush

@section('content')
     @php
        $codeCount = 0;
        $dealCount = 0;
        foreach ($coupons as $coupon) {
        if ($coupon->code) {
        $codeCount++;
        } else {
        $dealCount++;
        }
        }
        $totalCount = $codeCount + $dealCount;
        @endphp
<main class="main">
    <!-- Enhanced Breadcrumb Section -->
    <section class="breadcrumb-section">
        <div class="container-fluid">
            <div class="breadcrumb-wrapper">
                <nav class="breadcrumb-nav" aria-label="breadcrumb">
                    <div class="breadcrumb-container">
                        <a href="/" class="breadcrumb-item">
                            <span class="breadcrumb-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                            </span>
                            <span class="breadcrumb-text">@lang('common.home')</span>
                        </a>

                        <span class="breadcrumb-separator">
                            <svg width="8" height="12" viewBox="0 0 8 12" fill="none">
                                <path d="M2 1L6 6L2 11" stroke="var(--text-light)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>

                        <!-- Category Link -->
                        <div class="breadcrumb-item">
                            @if(!empty($store->category))
                                <a href="{{ route('category.details', ['slug' => Str::slug($store->category->slug)]) }}" class="breadcrumb-link">
                                    <span class="breadcrumb-icon">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                        </svg>
                                    </span>
                                    <span class="breadcrumb-text">{{ $store->category->name }}</span>
                                </a>
                            @else
                                <span class="breadcrumb-text">@lang('common.no_category')</span>
                            @endif
                        </div>

                        <span class="breadcrumb-separator">
                            <svg width="8" height="12" viewBox="0 0 8 12" fill="none">
                                <path d="M2 1L6 6L2 11" stroke="var(--text-light)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>

                        <!-- Stores Link -->
                        <a href="{{ route('store') }}" class="breadcrumb-item">
                            <span class="breadcrumb-icon">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                </svg>
                            </span>
                            <span class="breadcrumb-text">@lang('common.stores')</span>
                        </a>

                        <span class="breadcrumb-separator">
                            <svg width="8" height="12" viewBox="0 0 8 12" fill="none">
                                <path d="M2 1L6 6L2 11" stroke="var(--text-light)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>

                        <!-- Current Page (Store Name) -->
                        <div class="breadcrumb-item current">
                            <span class="breadcrumb-text">{{ $store->name }}</span>
                            <span class="breadcrumb-highlight"></span>
                        </div>
                    </div>
                </nav>

                <!-- Optional: Store logo or image -->
                @if(!empty($store->logo))
                <div class="breadcrumb-store-logo">
                    <img src="{{ $store->logo }}" alt="{{ $store->name }}" class="store-logo">
                </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Enhanced Store Header -->
    <section class="store-header-section">
        <div class="container-fluid">
            <div class="row align-items-center g-4">
                <!-- Store Logo -->
                <div class="col-md-2 col-4">
                    <div class="store-logo-container text-center text-md-start">
                        <img src="{{ asset('uploads/stores/' . $store->image) }}"
                             class="store-logo-img"
                             alt="{{ $store->name }}"
                             loading="lazy">
                    </div>
                </div>

                <!-- Store Info -->
                <div class="col-md-10 col-7">
                    <div class="store-info">
                        <h1 class="store-name mb-2">{{ $store->name }} @lang('common.coupon_codes_deals') February {{ date('Y') }} -
                            {{ config('app.name') }}
                        </h1>
                       
                        <div class="store-rating d-flex align-items-center mb-3">
                            <div class="stars text-warning me-2">
                                ⭐⭐⭐⭐⭐
                            </div>
                            <span class="text-muted small">(4.8/5) • {{ $totalCount }} @lang('common.offers')</span>
                        </div>
                        <p class=" mb-0 d-none d-md-block">
                          {{ $store->description ? Str::limit($store->description, 150) : __('common.discover_amazing_deals_at') . ' ' . $store->name . '. ' . __('common.save_big_with_exclusive_coupons') }}
                        </p>
                        <a href="{{ $store->destination_url }}" target="_blank" class="btn btn-golden btn-sm">
                            <i class="fas fa-external-link-alt me-2"></i>@lang('common.visit_store')
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Bar -->
    <div class="container-fluid d-none d-md-block">
        <div class="stats-bar">
            <div class="row text-center">
                <div class="col-md-4 col-4 mb-3 mb-md-0">
                    <div class="stat-item">
                        <div class="stat-number text-golden">{{ $totalCount }}</div>
                        <div class="stat-label">@lang('common.total_offers')</div>
                    </div>
                </div>
                <div class="col-md-4 col-4 mb-3 mb-md-0">
                    <div class="stat-item">
                        <div class="stat-number text-success">{{ $codeCount }}</div>
                        <div class="stat-label">@lang('common.coupon_codes')</div>
                    </div>
                </div>
                <div class="col-md-4 col-4">
                    <div class="stat-item">
                        <div class="stat-number text-info">{{ $dealCount }}</div>
                        <div class="stat-label">@lang('common.deals_sales')</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="store-content-section py-4">
        <div class="container-fluid">
            <div class="row">
                <!-- Coupons Grid -->
                <div class="col-lg-9">
                    <!-- Filter Section -->
                    <div class="filter-section mb-4">
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                            <h4 class="filter-title mb-0">@lang('common.available_offers')</h4>

                            <!-- Mobile Filter Dropdown -->
                            <div class="dropdown d-lg-none">
                                <button class="btn btn-outline-primary dropdown-toggle rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-filter me-2"></i>@lang('common.filter_offers')
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item {{ !request()->has('sort') ? 'active' : '' }}" href="{{ url()->current() }}">
                                            @lang('common.all') <span class="badge bg-primary ms-2">{{ $totalCount }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item {{ request('sort') == 'codes' ? 'active' : '' }}" href="{{ url()->current() }}?sort=codes">
                                            @lang('common.codes') <span class="badge bg-success ms-2">{{ $codeCount }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item {{ request('sort') == 'deals' ? 'active' : '' }}" href="{{ url()->current() }}?sort=deals">
                                            @lang('common.deals') <span class="badge bg-info ms-2">{{ $dealCount }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Coupons Grid -->
                    <div class="coupons-grid-container">
                        @if($coupons->isEmpty())
                        <div class="empty-state text-center py-5">
                            <div class="empty-icon mb-4">
                                <i class="fas fa-tag fa-4x text-muted"></i>
                            </div>
                            <h3 class="empty-title mb-3">@lang('common.oops_no_coupons')</h3>
                            <p class="empty-text text-muted mb-4">@lang('common.explore_amazing_deals')</p>
                            <a href="{{ route('store') }}" class="btn btn-golden btn-lg px-4 rounded-pill">
                                @lang('common.explore_brands')<i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                        @else
                        <div class="row g-3">
                            @foreach ($coupons as $coupon)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                <div class="coupon-card card hover-lift">
                                    <!-- Premium Badge -->
                                    @if (!empty($coupon->authentication) && $coupon->authentication !== 'No Auth' && $coupon->authentication !== 'On Sale')
                                    <div class="premium-badge">
                                        <span class="badge">
                                            <i class="fas fa-crown me-1"></i>{{ $coupon->authentication }}
                                        </span>
                                    </div>
                                    @endif

                                    <!-- Hot Offer Ribbon -->
                                    @if($coupon->clicks > 50)
                                    <div class="hot-offer-ribbon">
                                        <i class="fas fa-fire me-1"></i>@lang('common.hot')
                                    </div>
                                    @endif

                                    <div class="card-body p-3">
                                        <!-- Coupon Type Badge -->
                                        <div class="coupon-type-badge {{ $coupon->code ? 'badge-code' : 'badge-deal' }}">
                                            <i class="fas {{ $coupon->code ? 'fa-tag' : 'fa-percent' }} me-1"></i>
                                            {{ $coupon->code ? __('common.code') : __('common.deal') }}
                                        </div>

                                        <!-- Store Image -->
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('uploads/stores/' . $store->image) }}"
                                                class="coupon-store-image"
                                                alt="{{ $store->name }}"
                                                loading="lazy">
                                        </div>

                                        <!-- Coupon Content -->
                                        <h6 class="coupon-title">
                                            {{ Str::limit($coupon->name, 60) }}
                                        </h6>

                                        @if($coupon->description)
                                        <p class="coupon-description">
                                            {{ Str::limit($coupon->description, 80) }}
                                        </p>
                                        @endif

                                        <!-- Coupon Meta -->
                                        <div class="coupon-meta">
                                            <span class="ending-date small {{ \Carbon\Carbon::parse($coupon->ending_date)->isPast() ? 'text-danger' : 'text-muted' }}">
                                                <i class="fas fa-clock me-1"></i>
                                                @lang('common.ends'): {{ \Carbon\Carbon::parse($coupon->ending_date)->format('M d') }}
                                            </span>
                                            <span class="used-count small text-muted">
                                                <i class="fas fa-users me-1"></i>
                                                <span id="usedCount{{ $coupon->id }}">{{ $coupon->clicks }}</span>
                                            </span>
                                        </div>

                                        <!-- Coupon Action -->
                                        @if ($coupon->code)
                                        <button class="get-code-btn position-relative"
                                                onclick="handleRevealCode(event, {{ $coupon->id }}, '{{ $coupon->code }}', '{{ $coupon->name }}', '{{ asset('uploads/stores/' . $store->image) }}', '{{ $store->destination_url }}', '{{ $coupon->stores->name }}')">
                                            <span class="position-relative z-2">
                                                <i class="fas fa-gift me-2"></i>@lang('common.get_code')
                                            </span>
                                            <div class="btn-shine position-absolute top-0 left-0 w-100 h-100"></div>
                                        </button>
                                        @else
                                        <a href="{{ $store->destination_url }}"
                                           target="_blank"
                                           class="deal-btn position-relative"
                                           onclick="updateClickCount('{{ $coupon->id }}')">
                                            <span class="position-relative z-2">
                                                <i class="fas fa-bolt me-2"></i>@lang('common.view_deal')
                                            </span>
                                            <div class="btn-shine position-absolute top-0 left-0 w-100 h-100"></div>
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>

                    <!-- Store Content / Blog Section -->
                    @if ($store->content || $relatedblogs->isNotEmpty())
                    <div class="content-section mt-5">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                @if ($store->content)
                                <div class="store-content">
                                    {!! $store->content !!}
                                </div>
                                @else
                                <div class="related-blogs">
                                    <h3 class="section-title mb-4">@lang('common.related_articles')</h3>
                                    @foreach ($relatedblogs as $blog)
                                    <div class="blog-item mb-4 pb-4 border-bottom">
                                        <h4 class="blog-title h5 mb-3">{{ $blog->title }}</h4>
                                        @if($blog->image)
                                        <img class="blog-image img-fluid rounded mb-3"
                                            src="{{ asset('uploads/blogs/' . $blog->image) }}"
                                            alt="{{ $blog->title }}"
                                            loading="lazy"
                                            style="max-height: 200px; object-fit: cover;">
                                        @endif
                                        <div class="blog-content small">
                                            {!! $blog->content !!}
                                        </div>
                                        <a href="{{ route('blog.details', ['slug' => Str::slug($blog->slug)]) }}" class="btn btn-link text-primary p-0 mt-2 small">
                                            @lang('common.read_more') <i class="fas fa-arrow-right ms-1"></i>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="col-lg-3 mt-5 mt-lg-0">
                    <div class="sidebar-sticky">
                        <!-- Store Quick Actions -->
                        <div class="sidebar-card card mb-4">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-store me-2"></i>@lang('common.store_quick_view')</h5>
                            </div>
                            <div class="card-body">
                                <div class="text-center mb-4">
                                    <img src="{{ asset('uploads/stores/' . $store->image) }}"
                                        class="store-sidebar-image mb-3"
                                        alt="{{ $store->name }}"
                                        loading="lazy">
                                    <h4 class="store-name h5 mb-2">{{ $store->name }}</h4>
                                    <div class="store-rating text-warning mb-3">
                                        ⭐⭐⭐⭐⭐ <span class="text-muted small">(4.8)</span>
                                    </div>
                                </div>

                                <div class="d-grid gap-2 mb-4">
                                    <a href="{{ $store->destination_url }}" target="_blank" class="btn btn-golden">
                                        <i class="fas fa-external-link-alt me-2"></i>@lang('common.visit_store')
                                    </a>
                                    <button class="btn btn-outline-primary" onclick="scrollToCoupons()">
                                        <i class="fas fa-tags me-2"></i>@lang('common.view_all_coupons')
                                    </button>
                                </div>

                                <!-- Store Stats -->
                                <div class="store-stats">
                                    <h6 class="stats-title text-center mb-3">@lang('common.store_statistics')</h6>
                                    <div class="stat-circle">
                                        <div class="stat-number">{{ $totalCount }}</div>
                                        <div class="stat-label">@lang('common.total_offers')</div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-6">
                                            <div class="mini-stat">
                                                <div class="mini-stat-number text-success">{{ $codeCount }}</div>
                                                <div class="mini-stat-label">@lang('common.codes')</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mini-stat">
                                                <div class="mini-stat-number text-info">{{ $dealCount }}</div>
                                                <div class="mini-stat-label">@lang('common.deals')</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Filter Options -->
                        <div class="sidebar-card card mb-4">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-filter me-2"></i>@lang('common.filter_offers')</h5>
                            </div>
                            <div class="card-body">
                                <div class="d-grid gap-2">
                                    <a href="{{ url()->current() }}" class="btn btn-outline-primary text-start {{ !request()->has('sort') ? 'active' : '' }}">
                                        <i class="fas fa-layer-group me-2"></i>
                                        @lang('common.all_offers')
                                        <span class="badge bg-primary float-end">{{ $totalCount }}</span>
                                    </a>
                                    <a href="{{ url()->current() }}?sort=codes" class="btn btn-outline-success text-start {{ request('sort') == 'codes' ? 'active' : '' }}">
                                        <i class="fas fa-tag me-2"></i>
                                        @lang('common.coupon_codes')
                                        <span class="badge bg-success float-end">{{ $codeCount }}</span>
                                    </a>
                                    <a href="{{ url()->current() }}?sort=deals" class="btn btn-outline-info text-start {{ request('sort') == 'deals' ? 'active' : '' }}">
                                        <i class="fas fa-percent me-2"></i>
                                        @lang('common.deals_sales')
                                        <span class="badge bg-info float-end">{{ $dealCount }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-card card mb-4 border-0 shadow-sm" style="border-radius: 12px;">
                            <div class="card-header bg-transparent border-0 p-4 pb-3">
                                <div class="d-flex align-items-center">
                                    <div class="store-about-icon me-3">
                                        <i class="fas fa-info-circle fa-lg text-primary"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1 fw-bold text-white">@lang('common.about') {{ $store->name }}</h5>
                                        <p class="text-muted small mb-0">@lang('common.store_details_info')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-4 pt-0">
                                @if($store->about)
                                    <div class="store-about-text">
                                        <p class="text-muted mb-0">{{ $store->about }}</p>
                                    </div>
                                @else
                                    <div class="text-center py-3">
                                        <i class="fas fa-info-circle fa-2x text-light mb-3" style="color: var(--medium-gray) !important;"></i>
                                        <p class="text-muted small mb-0">@lang('common.no_store_description')</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <!-- Related Stores -->
                        @if($relatedStores->isNotEmpty())
                        <div class="sidebar-card card">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-store me-2"></i>@lang('common.similar_stores')</h5>
                            </div>
                            <div class="card-body">
                                <div class="related-stores-list">
                                    @foreach ($relatedStores as $relatedStore)
                                    <a href="{{ route('store.details', ['slug' => Str::slug($relatedStore->slug)]) }}"
                                       class="related-store-item d-flex align-items-center text-decoration-none text-dark mb-3">
                                        <img src="{{ asset('uploads/stores/' . $relatedStore->image) }}"
                                            class="related-store-image me-3"
                                            alt="{{ $relatedStore->name }}"
                                            loading="lazy">
                                        <div class="flex-grow-1">
                                            <h6 class="fw-semibold mb-1 small">{{ Str::limit($relatedStore->name, 25) }}</h6>
                                            <div class="d-flex align-items-center">
                                                <span class="text-warning small me-2">
                                                    <i class="fas fa-star"></i> 4.5
                                                </span>
                                                <span class="text-muted small">
                                                    <i class="fas fa-tag ms-2"></i> {{ $relatedStore->coupons()->count() ?? 0 }} @lang('common.offers')
                                                </span>
                                            </div>
                                        </div>
                                        <i class="fas fa-chevron-right text-muted"></i>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Enhanced Coupon Code Modal -->
<div class="modal fade" id="couponModal" tabindex="-1" aria-labelledby="couponModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold w-100 text-center" id="couponModalLabel">@lang('common.exclusive_discount')</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="@lang('common.close')"></button>
            </div>
            <div class="modal-body text-center py-4 px-5">
                <div class="mb-4">
                    <img src="" alt="@lang('common.brand_logo')" id="storeImage" class="img-fluid rounded-circle bounce" style="width: 100px; height: 100px; object-fit: cover;" loading="lazy">
                </div>
                <h5 class="fw-bold text-dark mb-4" id="couponName"></h5>
                <div class="coupon-container bg-light rounded-3 p-3 mb-4">
                    <p class="small text-muted mb-2">
                        <i class="fas fa-tag me-1"></i> @lang('common.your_exclusive_code')
                    </p>
                    <div class="d-flex justify-content-center align-items-center gap-3 mb-3">
                        <span id="couponCode" class="fw-bold fs-3 text-dark coupon-code-text"></span>
                        <button class="btn btn-sm btn-danger rounded-circle copy-btn" onclick="copyToClipboard()">
                            <i class="fas fa-copy"></i>
                        </button>
                    </div>
                    <p id="copyMessage" class="small text-success fw-bold mb-0" style="display: none;">
                        <i class="fas fa-check-circle me-1"></i> @lang('common.copied_clipboard')
                    </p>
                </div>
                <p class="small text-muted mb-0">
                    <i class="fas fa-info-circle me-1"></i> @lang('common.apply_code_checkout')
                    <a href="" id="couponUrl" class="text-decoration-none fw-semibold text-dark"></a>
                </p>
            </div>
            <div class="modal-footer justify-content-center border-0 pt-0">
                <a href="" id="storeLink" class="btn btn-danger btn-lg rounded-pill px-4">
                    <i class="fas fa-external-link-alt me-2"></i> @lang('common.redeem_now')
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
// Breadcrumb mobile functionality
document.addEventListener('DOMContentLoaded', function() {
    const breadcrumbContainer = document.querySelector('.breadcrumb-container');

    if (breadcrumbContainer) {
        function checkScrollable() {
            const isScrollable = breadcrumbContainer.scrollWidth > breadcrumbContainer.clientWidth;

            if (isScrollable) {
                breadcrumbContainer.classList.remove('no-scroll');
            } else {
                breadcrumbContainer.classList.add('no-scroll');
            }
        }

        checkScrollable();
        window.addEventListener('resize', checkScrollable);

        if (window.innerWidth <= 768) {
            const currentItem = breadcrumbContainer.querySelector('.breadcrumb-item.current');
            if (currentItem) {
                setTimeout(() => {
                    currentItem.scrollIntoView({
                        behavior: 'smooth',
                        inline: 'center',
                        block: 'nearest'
                    });
                }, 500);
            }
        }
    }
});

// Coupon modal functionality
let couponModal = null;

document.addEventListener('DOMContentLoaded', function() {
    couponModal = new bootstrap.Modal(document.getElementById('couponModal'));
});

function handleRevealCode(event, couponId, couponCode, couponName, storeImage, destinationUrl, storeName) {
    event.preventDefault();

    document.getElementById('couponCode').textContent = couponCode;
    document.getElementById('couponName').textContent = couponName;
    document.getElementById('storeImage').src = storeImage;
    document.getElementById('couponUrl').href = destinationUrl;
    document.getElementById('couponUrl').textContent = storeName;
    document.getElementById('storeLink').href = destinationUrl;

    updateClickCount(couponId);

    if (couponModal) {
        couponModal.show();
        setTimeout(function() {
            window.open(destinationUrl, '_blank');
        }, 500);
    } else {
        window.open(destinationUrl, '_blank');
    }
}

function updateClickCount(couponId) {
    fetch('{{ route("update.clicks") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ coupon_id: couponId })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            const usedCountElement = document.getElementById('usedCount' + couponId);
            if (usedCountElement) {
                usedCountElement.textContent = data.clicks;
            }
        }
    })
    .catch(error => console.error('Error:', error));
}

function copyToClipboard() {
    const code = document.getElementById('couponCode').textContent;
    navigator.clipboard.writeText(code).then(() => {
        const copyMessage = document.getElementById('copyMessage');
        copyMessage.style.display = 'block';
        setTimeout(() => {
            copyMessage.style.display = 'none';
        }, 3000);
    });
}

function scrollToCoupons() {
    document.querySelector('.coupons-grid-container').scrollIntoView({
        behavior: 'smooth'
    });
}
</script>
@endpush