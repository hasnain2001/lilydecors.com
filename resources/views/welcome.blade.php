@extends('layouts.master')

@section('title')
    {{ config('app.name') }} | Home Decor & Fashion Blogs {{ date('Y') }}
@endsection

@section('description')
    Discover beautiful home decor ideas and fashion trends. Get inspired with our curated blogs on interior design, styling tips, and modern living.
@endsection

@section('keywords', 'home decor, interior design, fashion blogs, lifestyle, home improvement, styling tips')

@section('author', 'John Doe')

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
:root {
    --primary-color: #d4a574;
    --secondary-color: #2a2a2a;
    --light-color: #f9f7f3;
    --dark-color: #333;
    --text-color: #555;
    --border-color: #eaeaea;
}

body {
    font-family: 'Inter', sans-serif;
    color: var(--text-color);
}

/* Hero Section */
.hero-section {
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                url('https://images.unsplash.com/photo-1615529182904-14819c35db37?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
    background-size: cover;
    background-position: center;
    color: white;
    min-height: 90vh;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(212, 165, 116, 0.2), transparent);
    z-index: 1;
}

.hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
    padding: 2rem;
}

.hero-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    line-height: 1.2;
}

.hero-subtitle {
    font-size: 1.2rem;
    margin-bottom: 2rem;
    opacity: 0.9;
}

.hero-btn {
    background-color: var(--primary-color);
    border: none;
    padding: 0.8rem 2rem;
    font-size: 1.1rem;
    font-weight: 600;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.hero-btn:hover {
    background-color: #c49565;
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(212, 165, 116, 0.3);
}

/* Section Styling */
.section-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--secondary-color);
    margin-bottom: 3rem;
    position: relative;
    padding-bottom: 1rem;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 3px;
    background-color: var(--primary-color);
}

/* Blog Cards */
.blog-card {
    border: none;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    margin-bottom: 30px;
    height: 100%;
}

.blog-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(212, 165, 116, 0.15);
}

.card-img-container {
    height: 250px;
    overflow: hidden;
    position: relative;
}

.card-img-top {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.blog-card:hover .card-img-top {
    transform: scale(1.05);
}

.card-overlay {
    position: absolute;
    top: 15px;
    left: 15px;
    background: var(--primary-color);
    color: white;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
}

.card-body {
    padding: 1.5rem;
}

.card-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--secondary-color);
    margin-bottom: 1rem;
    line-height: 1.3;
}

.card-text {
    color: var(--text-color);
    margin-bottom: 1.5rem;
    line-height: 1.6;
}

.card-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
    font-size: 0.9rem;
    color: #777;
}

.read-more-btn {
    color: var(--primary-color);
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    transition: all 0.3s ease;
}

.read-more-btn:hover {
    color: var(--secondary-color);
}

.read-more-btn i {
    margin-left: 5px;
    transition: transform 0.3s ease;
}

.read-more-btn:hover i {
    transform: translateX(5px);
}

/* Category Navigation */
.category-nav {
    background-color: var(--light-color);
    padding: 2rem 0;
    margin: 3rem 0;
}

.category-item {
    text-align: center;
    padding: 1rem;
    transition: all 0.3s ease;
}

.category-item:hover {
    transform: translateY(-5px);
}

.category-icon {
    width: 70px;
    height: 70px;
    background-color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    font-size: 1.5rem;
    color: var(--primary-color);
}

.category-name {
    font-weight: 600;
    color: var(--secondary-color);
    margin-bottom: 0.5rem;
}

.category-count {
    color: var(--primary-color);
    font-size: 0.9rem;
}

/* Featured Section */
.featured-section {
    background-color: var(--light-color);
    padding: 5rem 0;
    margin: 3rem 0;
}

/* Newsletter Section */
.newsletter-section {
    background: linear-gradient(135deg, var(--secondary-color), #444);
    color: white;
    padding: 5rem 0;
    text-align: center;
}

.newsletter-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.newsletter-form {
    max-width: 600px;
    margin: 0 auto;
}

.newsletter-form .input-group {
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
    border-radius: 50px;
    overflow: hidden;
}

.newsletter-form input {
    border: none;
    padding: 1rem 1.5rem;
    font-size: 1rem;
}

.newsletter-form button {
    background-color: var(--primary-color);
    border: none;
    padding: 1rem 2rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.newsletter-form button:hover {
    background-color: #c49565;
}

/* Stats Section */
.stats-section {
    padding: 3rem 0;
    background-color: white;
}

.stat-item {
    text-align: center;
    padding: 1.5rem;
}

.stat-number {
    font-family: 'Cormorant Garamond', serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--primary-color);
    margin-bottom: 0.5rem;
}

.stat-label {
    color: var(--secondary-color);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.9rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-subtitle {
        font-size: 1rem;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .card-img-container {
        height: 200px;
    }
    
    .stat-item {
        margin-bottom: 1.5rem;
    }
}

@media (max-width: 576px) {
    .hero-title {
        font-size: 2rem;
    }
    
    .hero-section {
        min-height: 70vh;
    }
    
    .section-title {
        font-size: 1.8rem;
    }
    
    .newsletter-title {
        font-size: 2rem;
    }
}
</style>
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Beautiful Homes, Inspired Living</h1>
                <p class="hero-subtitle">Discover the latest home decor ideas, fashion trends, and lifestyle tips to transform your space and style.</p>
                <a href="{{ route('blog') }}" class="btn hero-btn">
                    Explore Inspiration <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Category Navigation -->
    <section class="category-nav">
        <div class="container">
            <div class="row g-4">
                <div class="col-6 col-md-3">
                    <a href="{{ route('category.details', ['slug' => 'living-room']) }}" class="text-decoration-none">
                        <div class="category-item">
                            <div class="category-icon">
                                <i class="fas fa-couch"></i>
                            </div>
                            <h4 class="category-name">Living Room</h4>
                            <span class="category-count">15+ Ideas</span>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{ route('category.details', ['slug' => 'bedroom']) }}" class="text-decoration-none">
                        <div class="category-item">
                            <div class="category-icon">
                                <i class="fas fa-bed"></i>
                            </div>
                            <h4 class="category-name">Bedroom</h4>
                            <span class="category-count">12+ Ideas</span>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{ route('category.details', ['slug' => 'kitchen']) }}" class="text-decoration-none">
                        <div class="category-item">
                            <div class="category-icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <h4 class="category-name">Kitchen</h4>
                            <span class="category-count">10+ Ideas</span>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{ route('category.details', ['slug' => 'fashion']) }}" class="text-decoration-none">
                        <div class="category-item">
                            <div class="category-icon">
                                <i class="fas fa-tshirt"></i>
                            </div>
                            <h4 class="category-name">Fashion</h4>
                            <span class="category-count">20+ Trends</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Room Blogs -->
    <section id="featured" class="py-5">
        <div class="container">
            <h2 class="section-title text-center">Latest Room Ideas</h2>
            <div class="row g-4">
                @forelse($roomBlogs as $blog)
                    <div class="col-md-6 col-lg-4">
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
                                    <span><i class="far fa-eye me-1"></i> 1.2k</span>
                                </div>
                                <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}" class="read-more-btn">
                                    Read More <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="lead">No room blogs found. Check back soon!</p>
                    </div>
                @endforelse
            </div>
            
            @if($roomBlogs->count() > 0)
                <div class="text-center mt-4">
                    <a href="{{ route('category.details', ['slug' => 'room']) }}" class="btn btn-outline-secondary btn-lg">
                        View All Room Ideas <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- Fashion Blogs Section -->
    <section class="featured-section">
        <div class="container">
            <h2 class="section-title text-center">Fashion & Style Trends</h2>
            <div class="row g-4">
                @forelse($fashionBlogs as $blog)
                    <div class="col-md-6 col-lg-4">
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
                                    <span><i class="far fa-eye me-1"></i> 1.5k</span>
                                </div>
                                <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}" class="read-more-btn">
                                    Read More <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="lead">No fashion blogs found. Check back soon!</p>
                    </div>
                @endforelse
            </div>
            
            @if($fashionBlogs->count() > 0)
                <div class="text-center mt-4">
                    <a href="{{ route('category.details', ['slug' => 'fashion']) }}" class="btn btn-outline-secondary btn-lg">
                        View All Fashion Trends <i class="fas fa-arrow-right ms-2"></i>
                    </a>
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
                        <div class="stat-label">Blog Articles</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">{{ $categories->count() }}</div>
                        <div class="stat-label">Categories</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">10K+</div>
                        <div class="stat-label">Monthly Readers</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">5+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <h2 class="newsletter-title">Stay Updated</h2>
            <p class="mb-4">Subscribe to our newsletter for weekly inspiration, tips, and exclusive content.</p>
            <form class="newsletter-form" id="newsletterForm">
                <div class="input-group">
                    <input type="email" class="form-control" placeholder="Enter your email address" required>
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                </div>
                <p class="mt-3 small opacity-75">We respect your privacy. Unsubscribe at any time.</p>
            </form>
        </div>
    </section>

    <!-- All Categories CTA -->
    <section class="py-5">
        <div class="container text-center">
            <h2 class="section-title">Explore All Categories</h2>
            <p class="lead mb-4">Discover content across all our categories to find exactly what inspires you.</p>
            <a href="{{ route('category') }}" class="btn btn-secondary btn-lg">
                <i class="fas fa-th-large me-2"></i> Browse All Categories
            </a>
        </div>
    </section>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    // Newsletter form submission
    $('#newsletterForm').on('submit', function(e) {
        e.preventDefault();
        const email = $(this).find('input[type="email"]').val();
        
        // Simulate subscription (replace with actual API call)
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