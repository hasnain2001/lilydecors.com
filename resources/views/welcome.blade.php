@extends('layouts.master')

@section('title')
    @lang('welcome.title')
@endsection

@section('description')
    @lang('welcome.description')
@endsection

@section('keywords')
    @lang('welcome.keywords')
@endsection

@section('author', 'Marcus Johnson')
@section('publisher', 'Marcus Johnson')

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<link rel="stylesheet" href="{{ asset('assets/css/welcome.css') }}">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">@lang('welcome.hero_title')</h1>
                <p class="hero-subtitle">@lang('welcome.hero_subtitle')</p>
                <a href="{{ route('blog') }}" class="btn hero-btn">
                    @lang('welcome.hero_button') <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Category Navigation -->
    <section class="category-nav">
        <div class="container">
            <div class="row g-4">
                @forelse ($categories as $category)
                    <div class="col-6 col-md-3">
                        <a href="{{ route('category.details', ['slug' => $category->slug]) }}" class="text-decoration-none">
                            <div class="category-item">
                                <div class="category-icon">
                                    <img src="{{ $category->image 
                                        ? asset('uploads/categories/' . $category->image) 
                                        : asset('front/assets/images/no-image-found.jpg') }}"
                                        onerror="this.src='{{ asset('assets/img/no-image-found.png') }}'"
                                        class="card-img-top"
                                        alt="{{ $category->name }}">
                                </div>

                                <h4 class="category-name">{{ $category->name }}</h4>
                                <span class="category-count">
                                    {{ trans_choice('welcome.category_ideas', $category->blogs->count() ?? 0, ['count' => $category->blogs->count() ?? 0]) }}
                                </span>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="lead">@lang('welcome.no_categories')</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Featured Room Blogs Slider -->
    <section id="featured" class="py-5">
        <div class="container">
            <h2 class="section-title">@lang('welcome.latest_room_ideas')</h2>
            
            @if($roomBlogs->count() > 0)
                <div class="slider-container">
                    <div class="swiper roomSwiper">
                        <div class="swiper-wrapper">
                            @foreach($roomBlogs as $blog)
                                <div class="swiper-slide">
                                    <div class="blog-card">
                                        <div class="card-img-container">
                                            <img src="{{ $blog->image ? asset('uploads/blogs/' . $blog->image) : asset('front/assets/images/no-image-found.jpg') }}" 
                                                 class="card-img-top" 
                                                 alt="{{ $blog->title }}">
                                            @if($blog->category)
                                                <div class="card-overlay">{{ $blog->category->name }}</div>
                                            @endif
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">{{ $blog->name }}</h3>
                                            <p class="card-text">{{ Str::limit($blog->description ?? '', 120) }}</p>
                                            <div class="card-meta">
                                                <span><i class="far fa-calendar me-1"></i> {{ $blog->created_at->format('M d, Y') }}</span>
                                                <span><i class="far fa-eye me-1"></i> @lang('welcome.view_count', ['count' => '1.2'])</span>
                                            </div>
                                            <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}" class="read-more-btn">
                                                @lang('welcome.read_more') <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        
                        <!-- Navigation buttons -->
                        <div class="swiper-button-next room-next"></div>
                        <div class="swiper-button-prev room-prev"></div>
                        
                        <!-- Pagination dots -->
                        <div class="swiper-pagination room-pagination"></div>
                    </div>
                </div>
                
                <div class="text-center mt-4">
                    <a href="{{ route('category.details', ['slug' => 'living-room']) }}" class="btn btn-outline-secondary btn-lg">
                        @lang('welcome.view_all_rooms') <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            @else
                <div class="col-12 text-center">
                    <p class="lead">@lang('welcome.no_room_blogs')</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Fashion Blogs Slider -->
    <section class="featured-section">
        <div class="container">
            <h2 class="section-title">@lang('welcome.fashion_trends')</h2>
            
            @if($fashionBlogs->count() > 0)
                <div class="slider-container">
                    <div class="swiper fashionSwiper">
                        <div class="swiper-wrapper">
                            @foreach($fashionBlogs as $blog)
                                <div class="swiper-slide">
                                    <div class="blog-card">
                                        <div class="card-img-container">
                                            <img src="{{ $blog->image ? asset('uploads/blogs/' . $blog->image) : asset('front/assets/images/no-image-found.jpg') }}" 
                                                 class="card-img-top" 
                                                 alt="{{ $blog->name }}">
                                            @if($blog->category)
                                                <div class="card-overlay">{{ $blog->category->name }}</div>
                                            @endif
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">{{ $blog->name }}</h3>
                                            <p class="card-text">{{ Str::limit($blog->description ?? '', 120) }}</p>
                                            <div class="card-meta">
                                                <span><i class="far fa-calendar me-1"></i> {{ $blog->created_at->format('M d, Y') }}</span>
                                                <span><i class="far fa-eye me-1"></i> @lang('welcome.view_count', ['count' => '1.5'])</span>
                                            </div>
                                            <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}" class="read-more-btn">
                                                @lang('welcome.read_more') <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        
                        <!-- Navigation buttons -->
                        <div class="swiper-button-next fashion-next"></div>
                        <div class="swiper-button-prev fashion-prev"></div>
                        
                        <!-- Pagination dots -->
                        <div class="swiper-pagination fashion-pagination"></div>
                    </div>
                </div>
                
                <div class="text-center mt-4">
                    <a href="{{ route('category.details', ['slug' => 'fashion']) }}" class="btn btn-outline-secondary btn-lg">
                        @lang('welcome.view_all_fashion') <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            @else
                <div class="col-12 text-center">
                    <p class="lead">@lang('welcome.no_fashion_blogs')</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">{{ $blogs->count() }}</div>
                        <div class="stat-label">@lang('welcome.blog_articles')</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">{{ $categories->count() }}</div>
                        <div class="stat-label">@lang('welcome.categories')</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">10K+</div>
                        <div class="stat-label">@lang('welcome.monthly_readers')</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">5+</div>
                        <div class="stat-label">@lang('welcome.years_experience')</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <h2 class="newsletter-title">@lang('welcome.stay_updated')</h2>
            <p class="mb-4">@lang('welcome.newsletter_text')</p>
            <form class="newsletter-form" id="newsletterForm">
                <div class="input-group">
                    <input type="email" class="form-control" placeholder="@lang('welcome.email_placeholder')" required>
                    <button class="btn btn-primary" type="submit">@lang('welcome.subscribe')</button>
                </div>
                <p class="mt-3 small opacity-75">@lang('welcome.privacy_note')</p>
            </form>
        </div>
    </section>

    <!-- All Categories CTA -->
    <section class="py-5">
        <div class="container text-center">
            <h2 class="section-title">@lang('welcome.explore_categories')</h2>
            <p class="lead mb-4">@lang('welcome.explore_all_categories_text')</p>
            <a href="{{ route('category') }}" class="btn btn-secondary btn-lg">
                <i class="fas fa-th-large me-2"></i> @lang('welcome.browse_all_categories')
            </a>
        </div>
    </section>
@endsection


@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Room Ideas Swiper
    const roomSwiperEl = document.querySelector('.roomSwiper');
    if (roomSwiperEl) {
        const roomSwiper = new Swiper(roomSwiperEl, {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.room-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.room-next',
                prevEl: '.room-prev',
            },
            breakpoints: {
                576: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 25
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 30
                }
            }
        });
        
        // Pause autoplay on hover
        roomSwiperEl.addEventListener('mouseenter', function() {
            roomSwiper.autoplay.stop();
        });
        
        roomSwiperEl.addEventListener('mouseleave', function() {
            roomSwiper.autoplay.start();
        });
    }

    // Initialize Fashion Swiper
    const fashionSwiperEl = document.querySelector('.fashionSwiper');
    if (fashionSwiperEl) {
        const fashionSwiper = new Swiper(fashionSwiperEl, {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.fashion-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.fashion-next',
                prevEl: '.fashion-prev',
            },
            breakpoints: {
                576: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 25
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 30
                }
            }
        });
        
        // Pause autoplay on hover
        fashionSwiperEl.addEventListener('mouseenter', function() {
            fashionSwiper.autoplay.stop();
        });
        
        fashionSwiperEl.addEventListener('mouseleave', function() {
            fashionSwiper.autoplay.start();
        });
    }
});

$(document).ready(function() {
    // Newsletter form submission
    $('#newsletterForm').on('submit', function(e) {
        e.preventDefault();
        const email = $(this).find('input[type="email"]').val();
        
        if (email) {
            Swal.fire({
                icon: 'success',
                title: 'Thank You!',
                text: `You've subscribed with ${email}. Check your inbox for our welcome email!`,
                confirmButtonColor: '#d4a574'
            });
            $(this).find('input[type="email"]').val('');
        }
    });
    
    // Smooth scroll for anchor links
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        const target = $(this.getAttribute('href'));
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 80
            }, 1000);
        }
    });
    
    // Blog card animations
    $('.blog-card').hover(
        function() {
            $(this).addClass('shadow-lg');
        },
        function() {
            $(this).removeClass('shadow-lg');
        }
    );
});
</script>

@if(session('success'))
<script>
Swal.fire({
    icon: 'success',
    title: 'Success!',
    text: '{{ session('success') }}',
    confirmButtonColor: '#d4a574'
});
</script>
@endif
@endpush