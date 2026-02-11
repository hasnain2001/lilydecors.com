@extends('layouts.master')

@section('title')
    @lang('categories.meta.title', ['year' => date('Y'), 'app_name' => config('app.name')])
@endsection

@section('description')
    @lang('categories.meta.description')
@endsection

@section('keywords')
    @lang('categories.meta.keywords')
@endsection

@section('author')
    @lang('categories.meta.author')
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/categories.css') }}">
@endpush
@section('content')
<!-- Schema.org Breadcrumb -->
<nav aria-label="breadcrumb" class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="{{ url('/') }}" itemprop="item">
                    <span itemprop="name">@lang('common.home')</span>
                </a>
                <meta itemprop="position" content="1" />
            </li>
            <li class="breadcrumb-item active" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <span itemprop="name">@lang('common.categories')</span>
                <meta itemprop="position" content="2" />
            </li>
        </ol>
    </div>
</nav>

<!-- Page Header -->
<header class="page-header" role="banner">
    <div class="container">
        <h1 class="page-title" itemprop="headline">
            @lang('categories.header.title')
        </h1>
        <p class="page-subtitle" itemprop="description">
            @lang('categories.header.subtitle')
        </p>
    </div>
</header>

<!-- Main Content -->
<main class="main_content" role="main">
    <div class="container">
        <!-- Stats Bar -->
        <div class="stats-bar">
            <div class="stat-item">
                <i class="fas fa-layer-group"></i>
                <div>
                    <strong>{{ count($categories) }}</strong>
                    <span>@lang('categories.stats.categories')</span>
                </div>
            </div>

            <div class="stat-item">
                <i class="fas fa-tags"></i>
                <div>
                    <strong>@lang('categories.stats.latest_year', ['year' => date('Y')])</strong>
                    <span>@lang('categories.stats.offers')</span>
                </div>
            </div>
            <div class="stat-item">
                <i class="fas fa-percent"></i>
                <div>
                    <strong>@lang('categories.stats.verified')</strong>
                    <span>@lang('categories.stats.discounts')</span>
                </div>
            </div>
        </div>

        <!-- Categories Grid -->
        <div class="categories-grid" itemscope itemtype="https://schema.org/ItemList">
            @forelse ($categories as $category)
                <article class="category-card" itemprop="itemListElement" itemscope itemtype="https://schema.org/CategoryCode">
                    <div class="category-content-wrapper">
                        <div class="category-header">
                            <!-- Category Image -->
                            <div class="category-img-container">
                                @if ($category->image && file_exists(public_path('uploads/categories/' . $category->image)))
                                    <img src="{{ asset('uploads/categories/' . $category->image) }}"
                                         class="category-img"
                                         alt="{{ $category->name }} - @lang('categories.image_alt')"
                                         itemprop="image"
                                         loading="lazy"
                                         width="80"
                                         height="80"
                                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                    <i class="fas fa-tag fa-lg" aria-hidden="true" style="display: none;"></i>
                                @else
                                    <i class="fas fa-tag fa-lg" aria-hidden="true"></i>
                                @endif
                            </div>

                            <!-- Category Details -->
                            <div class="category-details">
                                <h2 class="category-name" itemprop="name">
                                    {{ $category->name }}
                                </h2>

                                <div class="store-count">
                                    <i class="fas fa-store"></i>
                                    <span>{{ $category->stores()->count()?? 0 }} @lang('common.stores')</span>
                                </div>
                                <div class="blog-count">
                                    <i class="fas fa-blog"></i>
                                    <span>{{ $category->blogs()->count()?? 0 }} @lang('common.blog')</span>
                                </div>

                                <meta itemprop="url" content="{{ route('category.details', ['slug' => Str::slug($category->slug)]) }}">

                                <a href="{{ route('category.details', ['slug' => Str::slug($category->slug)]) }}"
                                   class="view-more-btn"
                                   aria-label="@lang('categories.aria.explore_category', ['name' => $category->name])"
                                   itemprop="url">
                                    <span>@lang('categories.view_more')</span>
                                    <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            @empty
                <div class="no-categories">
                    <i class="fas fa-folder-open fa-3x mb-3"></i>
                    <h3>@lang('categories.empty.title')</h3>
                    <p>@lang('categories.empty.message')</p>
                </div>
            @endforelse
        </div>

        <!-- SEO Content Section -->
        <section class="seo-content" aria-labelledby="seo-title">
            <h2 id="seo-title" class="seo-title">@lang('categories.seo.title')</h2>
            <div class="seo-text">
                <p>@lang('categories.seo.paragraph1')</p>
                <p>@lang('categories.seo.paragraph2')</p>
            </div>
        </section>
    </div>
</main>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Image error handling
    document.querySelectorAll('.category-img').forEach(img => {
        img.addEventListener('error', function() {
            this.style.display = 'none';
            const fallbackIcon = this.nextElementSibling;
            if (fallbackIcon && fallbackIcon.classList.contains('fa-tag')) {
                fallbackIcon.style.display = 'flex';
                fallbackIcon.style.color = '#1E8A88';
            }
        });
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add hover effect to category cards
    const categoryCards = document.querySelectorAll('.category-card');
    categoryCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.zIndex = '10';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.zIndex = '1';
        });
    });

    // Add parallax effect to page header
    const pageHeader = document.querySelector('.page-header');
    if (pageHeader) {
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;
            pageHeader.style.backgroundPosition = `50% ${rate}px`;
        });
    }

    // Intersection Observer for animations
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0) scale(1)';
                }
            });
        }, {
            threshold: 0.1
        });

        // Observe stats bar
        const statsBar = document.querySelector('.stats-bar');
        if (statsBar) {
            statsBar.style.opacity = '0';
            statsBar.style.transform = 'translateY(20px)';
            statsBar.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(statsBar);
        }

        // Observe category cards
        const categoryGrid = document.querySelector('.categories-grid');
        if (categoryGrid) {
            const gridObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const cards = entry.target.querySelectorAll('.category-card');
                        cards.forEach((card, index) => {
                            card.style.animationDelay = `${index * 0.1}s`;
                        });
                        gridObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });
            
            gridObserver.observe(categoryGrid);
        }
    }

    // Add page load animation
    document.body.style.opacity = '0';
    window.requestAnimationFrame(() => {
        document.body.style.transition = 'opacity 0.5s ease';
        document.body.style.opacity = '1';
    });

    // Add ripple effect to view more buttons
    const viewMoreButtons = document.querySelectorAll('.view-more-btn');
    viewMoreButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            const x = e.clientX - e.target.getBoundingClientRect().left;
            const y = e.clientY - e.target.getBoundingClientRect().top;
            
            const ripple = document.createElement('span');
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.classList.add('ripple');
            this.appendChild(ripple);
            
            setTimeout(() => ripple.remove(), 600);
        });
    });

    // Add CSS for ripple effect
    const style = document.createElement('style');
    style.textContent = `
        .ripple {
            position: absolute;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 50%;
            transform: scale(0);
            animation: ripple 0.6s linear;
            pointer-events: none;
            z-index: 1;
        }
        
        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
        
        .view-more-btn {
            position: relative;
            overflow: hidden;
        }
    `;
    document.head.appendChild(style);
});
</script>
@endpush