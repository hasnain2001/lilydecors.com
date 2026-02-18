@extends('layouts.master')
{{-- 🏷️ Page Title --}}
@section('title')
    @if (!empty($category->meta_title))
        @lang('category-detail.meta.title.custom', ['title' => ucwords($category->meta_title), 'year' => date('Y')])
    @elseif (!empty($category->title))
        @lang('category-detail.meta.title.custom', ['title' => ucwords($category->title), 'year' => date('Y')])
    @else
        @lang('category-detail.meta.title.default', ['name' => ucwords($category->name), 'year' => date('Y')])
    @endif
@endsection

{{-- 📝 Meta Description --}}
@section('description')
@if (!empty($category->meta_description))
    {{ ucfirst($category->meta_description) }}
@else
    @lang('category-detail.meta.description.default', [
        'name' => ucwords($category->name), 
        'year' => date('Y'),
        'lower_name' => strtolower($category->name)
    ])
@endif
@endsection

{{-- 🔑 Meta Keywords --}}
@section('keywords')
@if (!empty($category->meta_keywords))
    {{ strtolower($category->meta_keywords) }}
@else
    @lang('category-detail.meta.keywords.default', [
        'name' => strtolower($category->name)
    ])
@endif
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/category-detail.css') }}">
@endpush

@section('content')
    <div class="container py-4 text-capitalize">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url(app()->getlocale().'/') }}" class="text-decoration-none">
                        <i class="fas fa-home me-1"></i>@lang('common.home')
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('category', ['lang' => app()->getLocale()]) }}" class="text-decoration-none">
                        @lang('common.categories')
                    </a>
                </li>
                <li class="breadcrumb-item active fw-bold" aria-current="page">
                    {{ $category->name }}
                </li>
            </ol>
        </nav>

        <!-- Category Header -->
        <div class="category-header">
            <div class="overlay">
                <h1 class="text-uppercase">{{ $category->name }}</h1>
                <div class="stats-badge">
                    <i class="fas fa-file-alt"></i>
                    @lang('category-detail.stats.blogs_available', ['count' => $relatedblogs->count()])
                </div>
                <div class="stats-badge">
                    <i class="fas fa-store"></i>
                    @lang('category-detail.stats.stores_available', ['count' => $stores->count()])
                </div>
            </div>
        </div>

        <!-- Count Sections -->
        <div class="blog-count">
            <i class="fas fa-tags"></i>
            @lang('category-detail.total.blogs') <strong>{{ $relatedblogs->count() }}</strong>
        </div>
        <div class="store-count">
            <i class="fas fa-tags"></i>
            @lang('category-detail.total.stores') <strong>{{ $stores->count() }}</strong>
        </div>
        
        <!-- Blog Section -->
        @if($relatedblogs->count() > 0)
            <section class="blog-section">
                <h2 class="section-title">@lang('category-detail.blog_section.title')</h2>
                <div class="blog-grid">
                    @foreach ($relatedblogs as $blog)
                        <article class="blog-card">
                            <a href="{{ route('blog.details', ['slug' => Str::slug($blog->slug)]) }}">
                                <img src="{{ asset('uploads/blogs/' . $blog->image) }}" 
                                     class="blog-img" 
                                     alt="{{ $blog->title }}"
                                     loading="lazy"
                                     onerror="this.src='{{ asset('assets/img/no-image-found.png') }}'">
                            </a>
                            <div class="blog-content">
                                <h5 class="blog-title">{{ $blog->title }}</h5>
                                <button class="read-more-btn" onclick="window.location.href='{{ route('blog.details', ['slug' => Str::slug($blog->slug)]) }}'">
                                    @lang('common.read_more')
                                    <i class="fas fa-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>
            
            <!-- Pagination for Blogs -->
            @if($relatedblogs->hasPages())
                <div class="d-flex justify-content-center mt-5">
                    <nav aria-label="@lang('category-detail.pagination.blogs_label')">
                        <ul class="pagination pagination-custom">
                            {{ $relatedblogs->links('pagination::bootstrap-5') }}
                        </ul>
                    </nav>
                </div>
            @endif
        @endif
        
        <!-- Stores Grid -->
        @if($stores->count() > 0)
            <section class="stores-section">
                <h2 class="section-title">@lang('category-detail.stores_section.title', ['name' => $category->name])</h2>
                <div class="stores-grid">
                    @foreach ($stores as $store)
                        <a href="{{ route('store.details', ['slug' => Str::slug($store->slug)]) }}" class="text-decoration-none">
                            <div class="store-card">
                                <div class="store-img-container">
                                    <img src="{{ $store->image ? asset('uploads/stores/' . $store->image) : asset('front/assets/images/no-image-found.jpg') }}"
                                        class="store-img"
                                        alt="{{ $store->name }}"
                                        loading="lazy"
                                        onerror="this.src='{{ asset('assets/img/no-image-found.png') }}'">
                                </div>
                                <h5 class="store-title">{{ $store->name  }}</h5>
                            </div>
                        </a>
                    @endforeach
                </div>
            </section>
        @else
            <div class="no-stores-alert">
                <div class="no-stores-icon">
                    <i class="fas fa-store-slash"></i>
                </div>
                <h4 class="text-dark mb-3">@lang('category-detail.empty_stores.title')</h4>
                <a href="{{ route('store', ['lang' => app()->getLocale()]) }}" class="explore-stores-link">
                    <i class="fas fa-external-link-alt"></i>
                    @lang('category-detail.empty_stores.explore_link')
                </a>
            </div>
        @endif
    </div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Image error handling
    document.querySelectorAll('.store-img, .blog-img').forEach(img => {
        img.addEventListener('error', function() {
            this.src = '{{ asset("assets/img/no-image-found.png") }}';
        });
    });

    // Intersection Observer for animations
    if ('IntersectionObserver' in window) {
        // Observe store cards
        const storeGrid = document.querySelector('.stores-grid');
        if (storeGrid) {
            const gridObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const cards = entry.target.querySelectorAll('.store-card');
                        cards.forEach((card, index) => {
                            card.style.animationDelay = `${index * 0.1}s`;
                        });
                        gridObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });
            
            gridObserver.observe(storeGrid);
        }

        // Observe store count
        const storeCount = document.querySelector('.store-count');
        if (storeCount) {
            const countObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                    }
                });
            }, {
                threshold: 0.5
            });
            
            countObserver.observe(storeCount);
        }

        // Observe blog section
        const blogSection = document.querySelector('.blog-section');
        if (blogSection) {
            const blogObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                    }
                });
            }, {
                threshold: 0.3
            });
            
            blogObserver.observe(blogSection);
        }
    }

    // Add hover effect to store cards
    const storeCards = document.querySelectorAll('.store-card');
    storeCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.zIndex = '10';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.zIndex = '1';
        });
    });

    // Add parallax effect to category header
    const categoryHeader = document.querySelector('.category-header');
    if (categoryHeader) {
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;
            categoryHeader.style.backgroundPosition = `50% ${rate}px`;
        });
    }

    // Add page load animation
    document.body.style.opacity = '0';
    window.requestAnimationFrame(() => {
        document.body.style.transition = 'opacity 0.5s ease';
        document.body.style.opacity = '1';
    });

    // Add ripple effect to buttons
    const buttons = document.querySelectorAll('.read-more-btn, .explore-stores-link');
    buttons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
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
        
        .read-more-btn,
        .explore-stores-link {
            position: relative;
            overflow: hidden;
        }
    `;
    document.head.appendChild(style);
});
</script>
@endpush